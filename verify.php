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

    /*handle pdo
    require_once '.idea/connec.php';

    $pdo = new \PDO(DSN, USER, PASS);

    var_dump($pdo); die;
    
    $firstname = trim($_POST['first-name']);
    $lastname = trim($_POST['last-name']);
    $mail = trim($_POST['mail']);
    $message = trim($_POST['message']);
    
    $query = "INSERT INTO contact (firstname, lastname, mail, mes) VALUES ('$firstname', '$lastname', $mail, $message)";
    $pdo->exec($query);
    
    $statement = $pdo->exec($query);*/


    header('location: form.php');
    exit;


} else {
    header("location:form.php");
}
