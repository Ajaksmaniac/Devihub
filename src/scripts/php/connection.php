<?php 
include 'DBConnection.php';
session_start();
    if(isset($_SESSION['id'])){
        $uid =$_SESSION['id'];
        $SQL = 
    "SELECT 
        id,
        username,
        password,
        
        sex,
        group_id,
        email,
        status,
        name,
        surname,
        skills_id
    FROM
        user
    WHERE
        id = '$uid';";
    $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);   
    while ($row = mysqli_fetch_assoc($DatabaseResult)){       
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
      
        $_SESSION['sex'] = $row['sex'];
        $group = $row['group_id'];
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['skills_id'] = $row['skills_id'];

        //$skills = array();
        




        
    }
    if($group == 1){
        $_SESSION['admin'] = true;
    }else{
        $_SESSION['admin'] = false;
    }

   // $path = realpath(__DIR__ . '/index.php');
    //require_once(realpath(__DIR__ . '/../index.php'));
    //echo realpath(__DIR__ . 'index.php');
    header("Location: ./../../../index.php" );
    }   
?>