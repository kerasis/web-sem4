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
    <form action="save.php" method="post">
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

<div id="table">
    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $mysqli = new mysqli("localhost", "root", "helloworld", "web");

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $result = $mysqli->query("SELECT email, category, title, description, created FROM ad");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['email']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['created']}</td>
                    </tr>";
            }
        }

        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
