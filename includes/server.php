<?php
// Connecting databse to the server
require_once "database.php";

// Declaring array for error message
$error_message = array();

// Assigning html values to php variables
if(isset($_POST["signup"])){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $admin_image = ($_FILES['admin_image']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Chech if values has been entered
    if(empty($first_name)){
        array_push($error_message, "Firstname is Required");
    }

    if(empty($last_name)){
        array_push($error_message, "Lastname is Required");
    }

    if(empty($username)){
        array_push($error_message, "Username is Required");
    }

    if(empty($email)){
        array_push($error_message, "Email is Required");
    }
    
    if(empty($phone_number)){
        
        array_push($error_message, "Phone Number is Required");
    }
    if(empty($admin_image)){
        array_push($error_message, "Image is Required");
    }

    if(empty($password)){
        array_push($error_message, "Password is Required");
    }

    if($password != $confirm_password){
        array_push($error_message, "Password not match");
    }

    //No Repetition of email
    if(strlen($email) > 0){ 
        $result = mysqli_query($conn, "SELECT * FROM adminlogin where email = '$email'");
        if(mysqli_num_rows($result) > 0){
            array_push($error_message,"Email already exist");
        }
    }
    //No repetition of Username
    if(strlen($username) > 0){
        $result = mysqli_query($conn, "SELECT * FROM adminlogin WHERE username = '$username'");
        if(mysqli_num_rows($result) > 0){
            array_push ($error_message, "Username is taken");
        }
    }
    //Inserting values into databse
    if(count($error_message)===0){
        $password = md5($password);

        $image_name = $admin_image['name'];
        $image_tmp = $admin_image ['tmp_name'];
        $file_separation = explode('.',$image_name);
        $file_extension = strtolower(end($file_separation));
        $extension = array('jpg', 'jpeg', 'png', 'gif');

        if(in_array($file_extension, $extension)){
            $upload_image = '../admin/assets/img/'.$image_name;
            move_uploaded_file($image_tmp, $upload_image);

            $sql = "INSERT INTO adminlogin (first_name, last_name, username, email, phone_number,  admin_image, password)
             VALUES ('$first_name', '$last_name', '$username','$email', '$phone_number' ,'$upload_image, '$password')";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Successful";
            }else{
                echo "Error";           
            }
            header("location:login.php");
        }
    }
}
?>