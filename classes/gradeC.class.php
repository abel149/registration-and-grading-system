<?php

class GradeContr extends Grade
{
    public  function grading($id, $code, $test, $mid, $final, $grade)
    {
        $this->submit($id, $code, $test, $mid, $final, $grade);
    }


    // for grading just make changes to the parameters
    public  function updateUser($username, $password)
    {

        $this->updateuser($username, $password);
    }
    public  function deleteUser($username)
    {

        $this->deleteuser($username);
    }
}
