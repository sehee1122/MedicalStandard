﻿<!DOCTYPE html>
<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>List of Kencos Applicants</title>
        <style>
            body {
                font-family: Consolas, monospace;
                font-family: 12px;
            }
        </style>
    </head>
    <body>
        <?php
            //mysql 접속 계정 정보 설정
            $host = "localhost"; 
            $user = "root";
            $password = "1122";
            $database = "medical_db";
        
            $name = $_POST['name'];
            $phone1 = $_POST['phone1'];
            $phone2 = $_POST['phone2'];
            $phone3 = $_POST['phone3'];
            $email = $_POST['email'];

            $phone = $phone1."-".$phone2."-".$phone3; // xxx-xxxx-xxxx
            
            if (is_null($name) or is_null($phone1) or is_null($phone2) or is_null($phone3) or is_null($email)) {
                echo '<h1>Fail</h1>';
            } else {
                //connect 설정
                $conn = mysqli_connect($host, $user, $password, $database);
                $sql = "INSERT INTO kencos_apply (name, phone, email) VALUES ('$name', '$phone', '$email');";
                
                mysqli_query($conn, $sql);
                echo '<h1>Success</h1>';
            }
            ?>
            
            <p>
                <a href="apply.php">Add List</a>
            </p>
    </body>
</html>
