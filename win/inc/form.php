<?php

error_reporting(0);
$firstName =    $_POST['firstName'];
$lastName =     $_POST['lastName'];
$email =        $_POST['email'];

if (isset($_POST['submit'])) {

   
    $errors = [
        'firstNameError' => '',
        'lastNameError' => '',
        'emailError' => '',
    ];

    // تحقق الأسم الأول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى إدخال الأسم الأول';
    }
    
    // تحقق الأسم الاخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى إدخال الأسم الأخير';
    }
    
    // تحقق الأيميل
    if(empty($email)){
        $errors['emailError'] = 'يرجى إدخال البريد الالكتروني';}
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'البريد الالكتروني غير صحيح';
    }
    
    // تحقق لايوجد أخطاء
    if(!array_filter($errors)){

    $firstName =    mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =     mysqli_real_escape_string($conn, $_POST['lastName']);
    $email =        mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "INSERT INTO userss(firstName, lastName, email) 
    VALUES ('$firstName', '$lastName', '$email')";


    if(mysqli_query($conn, $sql)){
        header('Location: ' . $_SERVER['PHP_SELF']);
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }  
    }

}
