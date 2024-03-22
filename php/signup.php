<?php
session_start();
include_once "config.php";

// fetching all my data from the index page and the javascript page
$AbanoonyaFname = mysqli_real_escape_string($conn, $_POST['AbanoonyaFname']);
$AbanoonyaLname = mysqli_real_escape_string($conn, $_POST['AbanoonyaLname']);
$AbanoonyaMail = mysqli_real_escape_string($conn, $_POST['AbanoonyaMail']);
$Abanoonyadateobirth = mysqli_real_escape_string($conn, $_POST['AbanoonyaDob']);
$AbanoonyaGender = mysqli_real_escape_string($conn, $_POST['AbanoonyaGender']);
$AbanoonyaPassword = mysqli_real_escape_string($conn, $_POST['AbanoonyaPassword']);

 if(!empty($AbanoonyaFname) && !empty($AbanoonyaLname) && !empty($AbanoonyaMail) && !empty($Abanoonyadateobirth) && !empty($AbanoonyaGender) && !empty($AbanoonyaGender) ){
        if(filter_var($AbanoonyaMail, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM abanoonyausers WHERE AbanoonyaEmail = '{$AbanoonyaMail}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$AbanoonyaMail - This email already exist!";
            }else{
                if(isset($_FILES['AbanoonyaImage'])){
                    $img_name = $_FILES['AbanoonyaImage']['name'];
                    $img_type = $_FILES['AbanoonyaImage']['type'];
                    $tmp_name = $_FILES['AbanoonyaImage']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"../images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "Active now";
                                $encrypt_pass = md5($AbanoonyaPassword);
                                $insert_query = mysqli_query($conn, "INSERT INTO abanoonyausers(AbanoonyaUniqueId, AbanoonyaFname, AbanoonyaLname, AbanoonyaEmail, Abanoonyadateobirth, AbanoonyaGender, AbanoonyaPassword, AbanoonyaImg, AbanoonyaStatus) VALUES ('$ran_id','$AbanoonyaFname','$AbanoonyaLname','$AbanoonyaMail','$Abanoonyadateobirth','$AbanoonyaGender','$encrypt_pass','$new_img_name','$status')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM abanoonyausers WHERE AbanoonyaEmail = '{$AbanoonyaMail}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['AbanoonyaUniqueId'] = $result['AbanoonyaUniqueId'];
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$AbanoonyaMail is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>