<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config/autoload.php';
include_once 'utils/utils.php';

$database = new DatabaseConnection();

$userQueries = new UserQueries($database);
$username = Form::POST("email");
$password = sha1(Form::POST("password"));

if ($userQueries->userExists($username, $password)) {
    echo "User exists";
}

$user = $userQueries->findById(1);
$session->set("user", $user);

$form = new Form("login", "#");
$form->openForm();
$form->addInput("email", "email");
$form->addInput("password", "password");
$form->addSubmit("Login");
$form->closeForm();

