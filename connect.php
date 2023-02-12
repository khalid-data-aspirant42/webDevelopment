<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root','', 'test_db') or die('connection_failed:' .mysqli_connect_error());
        if(isset($_POST['uname']) && isset($_POST['pass'])) {
        
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $existSql = "SELECT * FROM `users` WHERE `user_name` = '$uname'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);
            if($numExistRows > 0){
                // $exists = true;
                echo "Username Already Exists";
            }
            else{
                $sql = "INSERT INTO `users` (`user_name`,`password`) VALUES ('$uname','$pass')"; 
                $query = mysqli_query($conn,$sql);
                if($query){
                echo 'Entry Successful';
                }
                else {
                    echo 'Error Occurred'.$sql;
                }
            }
        }
    }
?>