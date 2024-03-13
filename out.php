<?php
    
    $utility = $_POST['utility'];
    $descrip = $_POST['descrip'];
    $comment = $_POST['comment'];
    $remark = $_POST['remark'];

    if(!empty($utility) || !empty($descrip) || !empty($comment) || !empty($remark)){
         include "db_conn.php";

        $SELECT = "SELECT utility FROM utilities_tb where utility = ? limit 1";
        $INSERT = "INSERT into utilities_tb(utility, descrip, comment, remark) value (?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $utility);
        $stmt->execute();
        $stmt->bind_result($utility);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $utility, $descrip, $comment, $remark);
            $stmt->execute();
            header("location: end.php");
            exit();
        }
        else{
            header("location: end.php");
            exit();
        }
        $stmt->close();
        $conn->close();
    }

?>