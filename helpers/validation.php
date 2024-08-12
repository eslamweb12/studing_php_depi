<?php

$username_error = '';
$email_error = '';
$skills_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate image and uploading image

    print_r($_FILES['image']);
    echo "<br>";
    $type=$_FILES['image']['type'];
    $image_extension=strstr($_FILES['image']['type'],'/');//getting the extension
    $image_extension=str_replace('/', '',$image_extension);//deleting the / that in the extension


   

    if(!str_contains($type,'image')){
        $image_error='this is not an image';

    }else{
        $image_name=rand(0,999999999).rand(0,99999).'_profile.'.$image_extension; // i did for not overide on the old image
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.$image_name);

    }


    // Validate username
    if (empty($_POST["username"])) {
        $username_error = "Username should not be empty.";
    }

    // Validate skills
    if (empty($_POST["skills"])) {
        $skills_error = "Skills should not be empty.";
    }

    // Validate email
    $email = $_POST["email"];
    if (empty( $email)) {
        $email_error = "email should not be empty.";
    }
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "This is an invalid email.";
    }

}
