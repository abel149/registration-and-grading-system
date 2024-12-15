<?php
session_start();
if (isset($_SESSION['user'])) {
    if (isset($_POST['sub'])) {
        //grabing the data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $id = $_POST['id'];
        $sname = $_POST['sname'];
        $sec = $_POST['sec'];
        $dep = $_POST['dep'];
        $semi = $_POST['semi'];
        $pass = rand(10000, 99999);
        //instantiate signupcontr class
        include "classes/dbh.class.php";
        include "classes/viewstud.class.php";
        include "classes/register.class.php";



        $register = new Register();

        //user signin
        // $register->getstudentstmt($id, $fname);
        $register->setstudent($id, $fname, $sname, $lname, $dep, $sec, $semi, $pass);
        //$register->getstudent($id);thid doesent work


        //redirect to the home page
        header("location:index.php?error=none");
    }
}
