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
    <center>
        <i><h1>CLIENT DETAILS</h1></i>
        <form action="put.php" method="post">
            <div>
                <?php if(isset($_GET['error'])){?>
                    <i><h3><?php echo $_GET['error'];  ?></h3></i>
                    <?php } ?>
            </div>
            <div>
                <label>first name</label>
                <input type="text" name="fname">
            </div>
            <div>
                <label>last name</label>
                <input type="text" name="lname">
            </div>
           <div>
                <label>user name</label>
                <input type="text" name="uname">
           </div>
           <div>
                <label>email</label>
                <input type="email" name="email">
           </div>
            <div>
                <label>phone contact</label>
                <input type="number" name="phone">
            </div>
            <div>
                <label>location</label>
                <input type="text" name="place">
            </div>
            <div>
                <label>password</label>
                <input type="text" name="pass1">
            </div>
            <div>
                <label>confirm password</label>
                <input type="text" name="pass2">
            </div>
            <button type="submit" name="submit">submit here</button>
        </form>
    </center>
</body>
</html>