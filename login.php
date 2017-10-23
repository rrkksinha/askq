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

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $sql="SELECT * FROM askq";
    $query = $conn->query($sql);

    foreach ($query as $row) {
        if ($row['username']==$username && $row['pwd']==$pwd) {

            session_start();
            $_SESSION['fname']=$row['fname'];
            header("location: welcome.php"); 
            
        }
    }  

}
?>