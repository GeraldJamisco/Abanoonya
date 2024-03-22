<?php
include_once "config.php";

// fetching all my data from the index page and the javascript page
$AbanoonyaFname = mysqli_real_escape_string($conn, $_POST['AbanoonyaFname']);
$AbanoonyaLname = mysqli_real_escape_string($conn, $_POST['AbanoonyaLname']);
$AbanoonyaMail = mysqli_real_escape_string($conn, $_POST['AbanoonyaMail']);
$dateobirth = mysqli_real_escape_string($conn, $_POST['AbanoonyaDob']);
$AbanoonyaGender = mysqli_real_escape_string($conn, $_POST['AbanoonyaGender']);
$AbanoonyaPassword = mysqli_real_escape_string($conn, $_POST['AbanoonyaPassword']);

if (!empty($AbanoonyaFname) && !empty($AbanoonyaLname) &&!empty($AbanoonyaMail) &&!empty($dateobirth) &&!empty($AbanoonyaGender) &&!empty($AbanoonyaPassword)) {
    // checking user email if valid or not
    if (filter_var($AbanoonyaMail, FILTER_VALIDATE_EMAIL)) { //If email is valid
        // check that email already exitst in our database or not used by someone else
        $Abanoonyacheckifmailexits = mysqli_query($conn, "SELECT AbanoonyaEmail FROM abanoonyausers WHERE AbanoonyaEmail ='{$AbanoonyaMail}'");
        if (mysqli_num_rows($Abanoonyacheckifmailexits)>0) { // if email already exists
            echo "$AbanoonyaMail - This Email Already Exists!!";
        }else {
            # lets check user upload file or not
            if (isset($_FILES['AbanoonyaImage'])) { //if file is uploaded
                $img_name = $_FILES['AbanoonyaImage']['name']; //getting user upload img name
                $tmp_name = $_FILES['AbanoonyaImage']['tmp_name']; // this temporary name is used to save/move file in our folder

                // lets explode image and get the last extension name like jpg, png, 
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode); // here we get the extension of the user uploaded img file
                $extensions  = ['png', 'JPG', 'JPEG']; //These are the valid extensions and we have to store them in an array

                if (in_array($img_ext, $extensions) ===true) { // if user uploaded the image extesion is matched with any array extensions
                    $time = time(); // this will return us current time stamp....
                                    // we need this time because when you upload user img to in our folder we rename user file with current time
                                    // so we all the image to have a unique name not the same with other images
                }else {
                    echo "Please select an image file - jpeg, jpg, png!";
                }
            }else {
                echo "Please select an image file!";
            }
        }
    }else {
        echo "$AbanoonyaMail - this is not a valid email!";
    }
}else {
    echo "All input fields are required!";
}
?>