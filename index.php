<?php
    //require_once '/var/www/html/classes/client.class.php';

    require_once '/var/www/html/vendor/autoload.php';
    require_once '/var/www/html/generated-conf/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php">Main Page</a>
            <a href="databaseStores.php">Database stores</a>
        </div>
    </header>
    <div class="input-form-wrapper container mt-3">
        <form action="" method="post">
            <div class="mb-3 mt-3">
                <input class="form-control" type="text" name="name" id="" required placeholder="Enter First Name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" id="" required placeholder="Enter EMail">
            </div>
            <input class="btn btn-primary" type="submit" value="Add to DB">
            
        </form>
    </div>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];

        $client = new Client();
        $client->setEmail($email);
        $client->setName($name);
        $client->save();
    ?>
</body>
</html>