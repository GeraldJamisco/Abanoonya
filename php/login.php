<?php
        session_start();
        include_once "config.php";

        $AbanoonyaMail = mysqli_real_escape_string($conn, $_POST['AbanoonyaMail']);
        $AbanoonyaPassword = mysqli_real_escape_string($conn, $_POST['AbanoonyaPassword']);

    if (!empty($AbanoonyaMail) && !empty($AbanoonyaPassword)) {
        $sql = mysqli_query($conn, "SELECT * FROM abanoonyausers WHERE AbanoonyaEmail='{$AbanoonyaMail}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($AbanoonyaPassword);
            $enc_pass = $row['AbanoonyaPassword'];
            if($user_pass === $enc_pass){
                $AbanoonyaStatus = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE abanoonyausers SET AbanoonyaStatus = '{$AbanoonyaStatus}' WHERE AbanoonyaUniqueId = {$row['AbanoonyaUniqueId']}");
                if($sql2){
                    $_SESSION['AbanoonyaUniqueId'] = $row['AbanoonyaUniqueId'];
                    echo "success";
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else {
        echo "All input fields are required!";
    }


?>