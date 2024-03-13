<?php
//    include 'db_conn.php';

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $place = $_POST['place'];
   $pass1 = $_POST['pass1'];
   $pass2 = $_POST['pass2'];

   if(empty($fname)){
        header("location: input.php?error=first name is required");
        exit();
   }
   else if(empty($lname)){
        header("location: input.php?error=last name is required");
        exit();
   }
   else if(empty($uname)){
        header("location: input.php?error=user name is required");
        exit();
   }
   else if(empty($email)){
        header("location: input.php?error=email is required");
        exit();
   }
   else if(empty($phone)){
        header("location: input.php?error=phone is required");
        exit();
   }
   else if(empty($place)){
        header("location: input.php?error=place is required");
        exit();
   }
   else if(empty($pass1)){
        header("location: input.php?error=password is required");
        exit();
   }

   if(!empty($fname) || !empty($lname) || !empty($uname) || !empty($email) || !empty($phone) || !empty($place) || !empty($pass1) || !empty($pass2)){
    
    include 'db_conn.php';

    // if(mysqli_connect_error()){
    //     die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    // }

    
        $SELECT = "SELECT email from client_tb where email = ? limit 1 ";
        $INSERT = "INSERT into client_tb (fname, lname, uname, email, phone, place, pass1, pass2) value (?,?,?,?,?,?,?,?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        //checking
        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssss", $fname, $lname, $uname, $email, $phone, $place, $pass1, $pass2);
            $stmt->execute();
            // header("location: input.php?error=new record successfully inserted");
        }
        else{
            header("location: input.php?error=account already exists");
            exit();
        }
        if($pass1!=$pass2){
            header("location: input.php?error=passwords must match");
            exit();
        }
        $stmt->close();
        $conn->close();
    
   }
   else{
    echo "all fields are required";
   }

?>
<?php
     session_start();
     
     include "db_conn.php";
 if(isset($_POST['submit'])){
     if(isset($_POST['fname']) && isset($_POST['lname'])){
       function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
       }
     }
     $fname = validate($_POST['fname']);
     $lname = validate($_POST['lname']);
  
     $sql = "SELECT * FROM client_tb where fname='$fname' AND lname='$lname'";
     $result =  mysqli_query($conn, $sql);
  

     if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        if($row['fname'] == $fname && $row['lname'] == $lname) {

            echo "logged in";
            $_SESSION['place'] = $row['place'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['id'] = $row['id'];

            header("location: output.php");
            exit();
        }
       
     }
   }
?>

