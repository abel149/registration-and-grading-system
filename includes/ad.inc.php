<?php


if (isset($_POST['sub'])) {
    //grabing the data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $code = $_POST['course_code'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];

    //instantiate signupcontr class
    include "../classes/dbh.class.php";

    include "../classes/admin.class.php";



    $register = new Admin();

    //user signin 
    // $register->getstudentstmt();
    $register->setTeacher($id, $fname, $lname, $code, $pass, $role);



    header("location:../adminsetteachers.php?error=none");
}
//$register->getstudent($id);thid doesent work


//redirect to the home page


if (isset($_POST['s'])) {
    //grabing the data
    $id = $_POST['id'];
    $fname = $_POST['rfname'];
    $lname = $_POST['rlname'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];



    include "../classes/dbh.class.php";

    include "../classes/admin.class.php";


    $registeraloffice = new Admin();

    $registeraloffice->setregistral($fname, $lname, $pass, $id, $role);

    header("location:../adminsetteachers.php?error=none");
}
