<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "123";
    $database = "photocart";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }
    
    
    $email=$_POST['email'];
    $pass=$_POST['password'];
   
    $sql = "SELECT * FROM photographers";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        	die(mysqli_error($conn));
    }
    
    $flag=0;
    while ($row = mysqli_fetch_array($result)) {
        if ($email == $row['email'] && $pass == $row['password']) {
           $name = $row['name'];
           $flag = 1;
           break;
        }
    }
        
    if ($flag == 0) {
        echo 'login failed' ;
    } else {
        echo 'hello' . " " . $row[name] ;
        ?>
        <?php
        //setcookie ('name', $row['name']);
        $_SESSION['name'] = $row['name']; 
    }  
      
    mysqli_close($conn);
?>
