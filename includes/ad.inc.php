<?php


if (isset($_POST['sub'])) {
    //grabing the data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $code = $_POST['course_code'];
    $role = $_POST['role'];
    $pass = rand(10000, 99999);

    //instantiate signupcontr class
    include "../classes/dbh.class.php";

    include "../classes/admin.class.php";



    $register = new Admin();

    //user signin
    // $register->getstudentstmt();
    $register->setTeacher($id, $fname, $lname, $code, $pass, $role);
    //$register->getstudent($id);thid doesent work


    //redirect to the home page
    header("location:../adminsetteachers.php?error=none");
}

if (isset($_POST['s'])) {
    //grabing the data
    $fname = $_POST['rfname'];
    $lname = $_POST['rlname'];
    $pass = rand(10000, 99999);



    include "classes/dbh.class.php";
    include "classes/admin.class.php";


    // $registeraloffice = new Admin();

    // $registeraloffice->setregistral($fname, $lname, $pass);
}
