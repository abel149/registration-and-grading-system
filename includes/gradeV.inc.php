<?php
include '../classes/dbh.class.php';
include '../classes/gradeM.class.php';
include '../classes/gradeC.class.php';



if (isset($_POST['sub'])) {

    $ids = $_POST['id'] ?? [];
    $codes = $_POST['coursecode'] ?? [];
    $tests = $_POST['test'] ?? [];
    $mids = $_POST['mid'] ?? [];
    $finals = $_POST['final'] ?? [];
    $grades = $_POST['grade'] ?? [];



    $view = new GradeContr();


    foreach ($ids as $i => $id) {

        // Call sub for each row

        $id = $id;
        $code = $codes[$i];
        $test = $tests[$i];
        $mid = $mids[$i];
        $final = $finals[$i];
        $grade = $grades[$i];


        $view->grading($id, $code, $test, $mid, $final, $grade);
    }
    header("location: ../teachers.php");
}
