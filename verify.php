<?php 
session_start();

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    // validate firstname
    $firstname = $_POST['firstname'];
    if ($firstname === null || empty($firstname)) {
        $errors['firstname'] = "Please provide your firstname";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
        $errors['firstname'] = "Only letters and white space allowed";
    } 

    $lastname = $_POST['lastname'];
    if ($lastname === null || empty($lastname)) {
        $errors['lastname'] = "Please provide your lastname";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
        $errors['lastname'] = "Only letters and white space allowed";
    } 

    $mail = $_POST['mail'];
    if ($mail === null || empty($mail)) {
        $errors['mail'] = "Please provide your mail";
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = "Please provide a valide email";
    }

    $message = $_POST['message'];
    if ($message === null || empty($message)) {
        $errors['message'] = "Please provide your message";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $message)) {
        $errors['message'] = "Only letters and white space allowed";
    }

    // handle errors 
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('location: contact.php');
        exit;
    }

    //handle pdo
    require_once '.idea/connec.php';

    try { 
        $pdo = new \PDO(DSN, USER, PASS);
    } catch (PDOException $e) {
        print $e->getMessage();
        die();
    }
    
    $query = "INSERT INTO contacts (firstname, lastname, mail, user_comment) VALUES ('$firstname', '$lastname', '$mail', '$message')";
    
    $result= $pdo->exec($query);

    if ($result != false) {
        $_SESSION['firstname'] = $firstname;
        $_SESSION['mail'] = $mail;

        header('location:success.php');
        exit;
    }
} 

header ("location:contact.php");
exit;

