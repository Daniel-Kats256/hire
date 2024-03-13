<?php
    session_start();
   if(isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['place'])){
    
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
        <i><h1>Welcome </h1></i>
        <!-- <i><h1><?php echo $_SESSION['fname']; ?></h1></i>  -->
        <i><h1><?php echo $_SESSION['lname']; ?> </h1></i>
        <h1>of</h1> 
        <i><h1> <?php  echo $_SESSION['place'];?></h1></i>
        <i><h1>To My Online Utilities </h1></i> 
        <i><h1>Your Satisifaction is our Pleasure</h1></i>
    </div>
    <form action="out.php" method="post" class="online">
            <div>
                <label>Your Utility</label>
                <input type="text" name="utility">
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="descrip">
            </div>
           <div>
                <label>comments</label>
                <input type="text" name="comment">
           </div>
           <div>
                <label>Remarks</label>
                <input type="text" name="remark">
           </div>
           <button type="submit">submit here</button>
    </form>
    <!-- <div>
        <?php if(isset($_GET['error'])){?>
        <i><h3><?php echo $_GET['error'];  ?></h3></i>
        <?php } ?>
    </div> -->
</body>
</html> 
<?php   
}

?>