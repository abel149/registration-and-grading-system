<?php

class Register extends Dbh
{

    /*public function getStudent()
    {
        $sql = "select * from students";
        $stm = $this->connect()->query($sql);
        while ($row = $stm->fetch()) {
            echo $row['id'] . "\n";
        }
    }*/
    public function setstudent($id, $fname, $sname, $lname, $dep, $sec, $semi, $pass)
    {

        $sql = "insert into students (id,`first name`,`second name`,`last name`,department,section,semester,password) values (?,?,?,?,?,?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $fname, $sname, $lname, $dep, $sec, $semi, $pass]);
    }
    public function updatestudent($id, $fname) //not working yet
    {
        $sql = "update students set First_name = ? where id = ?";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $fname]);
    }
    public function deletestudent($id) //not working yet
    {
        $sql = "delete from students where id = ?";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id]);
    }
    public function getstudentstmt()
    {
        $sql = "select * from students  ";
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        $names = $stm->fetchAll();

        foreach ($names as $name) {
            echo $name['id'] . " " . $name['first name'] . "  " . $name['last name'] . "\n";
            echo "<br />";
        }
    }
}


///need to be mvc model