<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'Controller.php';
require 'Database.php';
$_SESSION['user_id']=23;
$_SESSION['user_name']='abel';
echo "Welcome {$_SESSION['user_name']} <a href='order.php'>order</a> <br/>";

$controller = new Controller();

if($controller->isFilter()) {
    $users = $controller->filterUsersByEmail($_GET['email']);
} else {
    $users = $controller->getAllUsers();

}



if($controller->isCreate()) {
    $controller->createUser();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Arimo:400,700&subset=hebrew,latin' rel='stylesheet' type='text/css'>
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    }

    .container {
    margin: 0;
    padding: 0;
    width: 800px;
    background-color: #999999;
    display: block;
    }
    
    .myheader {
    margin: 0;
    padding: 15;
    font-size: 2em;
    background-color: #d3d3d3;
    color:white;
    }
    .shheader {
    margin: 0;
    padding: 15;
    background-color: red;
    color:white;
    }
    .subcontainer {
    background-color: green;
    display: flex;
    justify-content: center;
    }

    .shoping-list {
    margin: 20;
    padding: 0;
    width: 300px;
    display: inline-block;
    background-color: yellow;
    }

    </style>

</head>
<body>
<div class="container">
<div class="myheader">Shopping list</div>
<div class="subcontainer">

<div class="shoping-list">
<div class="shheader">ADD YOUR ITEMS HERE</div>
uno  
dos 
</div>
<div class="shoping-list">
<div class="shheader">Item details</div>
uno  
dos 
</div>
</div>

</div>
</body>
</html>