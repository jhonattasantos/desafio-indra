<?php 
    require_once '../vendor/autoload.php';
    $title = 'PHP Developer na Indra';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title><?php echo $title; ?> </title>
</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-5"><?php echo $title; ?></h1>
        </div>
    </div>

    <main class="container"> 
        <div>
             <a href="challenge1.php">Challenge 1</a>
             <a href="challenge2.php">Challenge 2</a>
             <a href="challenge3.php">Challenge 3</a>
        </div> 
