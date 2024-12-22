<?php


if (isset($_POST['sub'])) {
    //grabing the data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $sec = $_POST['sec'];
    $dep = $_POST['dep'];
    $semi = $_POST['semi'];
    $year = $_POST['year'];
    $pass = $_POST['pass'];
    $role = $_POST['rol'];
    //instantiate signupcontr class
    include "../classes/dbh.class.php";

    include "../classes/register.class.php";



    $register = new Register();

    //user signin
    // $register->getstudentstmt($id, $fname);
    $register->setstudent($id, $fname, $lname, $dep, $sec, $semi, $year, $pass, $role);
    //$register->getstudent($id);thid doesent work


    //redirect to the home page
    header("location:adminRegistrar.php?error=none");
}
