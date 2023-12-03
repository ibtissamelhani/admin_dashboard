<?php
session_start();
include '../../dataBase/connect.php';



// registration 
function registre(){
    global $connection ,$fname_error ,$lname_error, $email_error, $password_error;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT) ;
    $repeatPassword = $_POST['repeatPassword'];

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
  
    if(empty($email_error) && empty($fname_error) && empty($lname_error) && empty($password_error)){

        $query = "insert into users (first_name, last_name, email, password) values (?,?,?,?)" ;

        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt,"ssss",$first_name,$last_name,$email,$password);
        $result = mysqli_stmt_execute($stmt);
        if(!$result){
        echo "error: something went wrong";
        }else{
        header('location:../film/film.php');
        exit();
        }
        mysqli_stmt_close($stmt);

    }

}

// login
function login(){
    global $connection;
     $email = $_POST['email'];
     $password = $_POST['password'];
     global $loginError ;
     $query = "select * from users where email=?";
     $stmt = mysqli_prepare($connection,$query);
     mysqli_stmt_bind_param($stmt,"s",$email);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     $row = mysqli_fetch_assoc($result);
     if($row){
        if(password_verify($password, $row['password'])){
            $_SESSION['userId'] = $row['id'];
            header('location:../film/film.php');
        }else{
            $loginError= "invalid email or password";
        }
     }else{
        $loginError= "invalid email or password";
     }
     
}
?>