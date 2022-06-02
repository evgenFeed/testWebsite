{* Smarty *}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="navbar">
            <a href="index.php">Main Page</a>
            <a href="databaseStores.php">Database stores</a>
        </div>
    </header>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <p>Id</p>
        </div>
        <div class="col-sm">
            <p>Name</p>
        </div>
        <div class="col-sm">
            <p>EMail</p>
        </div>
    </div>
    {foreach $clients as $client}
    <div class="row">
        <div class="col-sm">
            {$client->getId()}
        </div>
        <div class="col-sm">
            {$client->getName()}
        </div>
        <div class="col-sm">
            {$client->getEmail()}
        </div>
    </div>
    {foreachelse}
        No clients in database
    {/foreach}
</div>
</body>
</html>