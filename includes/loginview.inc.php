<?php
//view part
if (isset($_POST['submit'])) {
    //grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];



    //instantiating singupcintr class
    include '../classes/dbh.class.php';
    include '../classes/loginmodel.class.php';
    include '../classes/logincontr.class.php';

    $login = new loginContr($uid, $pwd, $role);
    //runnig error hundling and user signup
    $login->loginuser();
    //going to back to front page
    if ($_SESSION['role'] == 'admin') {
        header("location:../admin.php?error=none");
    } else if ($_SESSION['role'] == 'student') {
        header("location:../student.php?error=none");
    } else if ($_SESSION['role'] == 'teacher') {
        header("location:../teachers.php?error=none");
    } else if ($_SESSION['role'] == 'registral') {
        header("location:../register.php?error=none");
    } else {

        header("location:../index.php?error=none");
    }
}
