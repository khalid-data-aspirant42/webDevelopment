<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root','', 'test_db') or die('connection_failed:' .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
    
            $sql = "INSERT INTO `contact` (`name`,`email`,`message`) VALUES ('$name','$email','$message')"; 
            $query = mysqli_query($conn,$sql);
            if($query){
            echo 'Entry Successful';
            }
            else {
                echo 'Error Occurred'.$sql;
            }
        }
    }
?>