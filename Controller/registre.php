<?php
session_start();
include '../../dataBase/connect.php';
include '../../Model/authScript.php';

// registration 
function registre(){
    global $connection ,$fname_error ,$lname_error, $email_error, $password_error;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    formValidation($first_name, $last_name,$email, $password, $repeatPassword);

    if(empty($email_error) && empty($fname_error) && empty($lname_error) && empty($password_error)){
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT) ;

        $result = addUser($first_name, $last_name,$email, $password) ;
        
        if(!$result){
        echo "error: something went wrong";
        }else{
        header('location:../film/film.php');
        exit();
        }
        mysqli_stmt_close($stmt);

    }

}

// registration form validation 
function formValidation($first_name, $last_name,$email, $password, $repeatPassword){
    global $fname_error ,$lname_error, $email_error, $password_error;

    if(empty($first_name)){
        $fname_error = 'first name is required';
    }
   
    if(empty($last_name)){
        $lname_error = 'last name is required';
    }
    if(empty($email)){
        $email_error='email is required';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error='invalid email';
    }
    if(empty($password) || empty($repeatPassword)){
        $password_error = "password required";
    }
    elseif ($password != $repeatPassword) {
        $password_error ='password do not match';
    }
}

// login
function login(){
    global $connection;
     $email = $_POST['email'];
     $password = $_POST['password'];
     global $loginError ;
     $row = verifyEmail($email);
     if($row){
        if(password_verify($password, $row['password'])){
            $_SESSION['userId'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['isAdmin'] = $row['isAdmin'];
            $_SESSION['loggedIn'] = true;
            if($row['isAdmin']){
                header('location:../../index.php');
            }else{
                header('location:../../home.php');
            }
            
        }else{
            $loginError= "invalid email or password";
        }
     }else{
        $loginError= "invalid email or password";
     }
     
}
?>