<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: page-signin.php');
}