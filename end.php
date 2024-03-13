
<?php
session_start();
    if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "styles.css"; ?>
    </style>
</head>
<body>
    <div class="title">
        <I><h1>THANKS FOR TRUSTING US</h1></I>
    </div>
</body>
</html>
<?php } ?>