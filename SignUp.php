<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=askq', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

catch(PDOException $e)
    {
    echo "No database found".$e->getMessage();
    die();
    }
//md5
if(isset($_POST['signUp'])){ 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $rpwd=$_POST['rpwd'];
    if ($pwd==$rpwd) {
    $sql="INSERT INTO askq(fname, lname, username, pwd, rpwd) VALUES(:fname,:lname,:username,:pwd,:rpwd)";

    $query = $conn->prepare($sql);

    $query->execute(array(
        ':fname'=>$fname,
        ':lname'=>$lname,
        ':username'=>$username,
        ':pwd'=>$pwd,
        ':rpwd'=>$rpwd
    ));
    $_SESSION['fname']=$fname;
    header("location: userProfile.php");
    }else{
        echo "Password is not maching";
    }
  }
?>