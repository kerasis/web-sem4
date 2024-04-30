<?php

function redirectToHome(): void
{
    header('Location: index.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$service = getService("Web", __DIR__ . '/../credentials/web-programming-credentials.json');
$category = $_POST['category'];
$title = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];

$range = "Лист1";
$dataRow = [
    [
        $category,
        $email,
        $title,
        $desc
    ]
];

$spreadSheetId = "134eQmwAHkqQhXO_HqJLZLvfRmxy1vcPaudAtGdbdUnA";

$body = new Google_Service_Sheets_ValueRange([
    'values' => $dataRow
]);

$insert = [
    'insertDataOption' => "INSERT_ROWS"
];

$params = [
    'valueInputOption' => 'RAW'
];

$service->spreadsheets_values->append(
    $spreadSheetId,
    $range,
    $body,
    $params
);

redirectToHome();