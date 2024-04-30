<?php

require_once "vendor/autoload.php";

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

// Инициализация клиента Google Sheets API
function initializeGoogleClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');
    $client->setAuthConfig('C:\web labs\weblab4-420618-1f07ab7f67b7.json');
    return $client;
}

// Функция для записи данных в Google Таблицу
function addEntryToGoogleSheet($email, $title, $text, $category, $client)
{
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '1lr2su0KF6Afbst5C6KrnmH-dQqsosK4WAxF8ZvkcSWM'; // ID вашей таблицы
    $range = 'Sheet1'; // Название листа в таблице

    $values = [
        [$email, $title, $text, $category]
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    if ($result->getUpdates()->getUpdatedCells() > 0) {
        echo 'Объявление успешно добавлено!';
    } else {
        echo 'Произошла ошибка при добавлении объявления';
    }
}

// Получаем данные из POST запроса
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $title = $_POST['title'];
    $text = $_POST['description'];
    $category = $_POST['category'];

    // Инициализируем клиент Google Sheets API
    $client = initializeGoogleClient();

    // Добавляем запись в Google Таблицу
    addEntryToGoogleSheet($email, $title, $text, $category, $client);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>baraholka</title>
</head>
<body>
<div id="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <?php

            $categories = array_filter(glob(__DIR__ . "/categories/*"), 'is_dir');
            foreach ($categories as $category) {
                $name = basename($category);
                echo "<option value=\"$name\">$name</option>";
            }
            ?>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="5" name="description"></textarea>

        <input type="submit" value="save">
    </form>

</div>
<div id="teble">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php

        $files = glob(__DIR__ . "/categories/*/*.txt");
        foreach ($files as $file) {

            $data = file_get_contents($file);
            $category = basename(dirname($file));
            $title = basename($file, ".txt");

            $data = explode("\n", $data);
            $email = $data[0];
            $desc = $data[1];
            echo "<tr>
                    <td>$email</td><td>$category</td>
                    <td>$title</td><td>$desc</td>
                    </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
