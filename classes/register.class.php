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
    public function setstudent($id, $fname, $lname, $dep, $sec, $semi, $year, $pass)
    {
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "insert into user (id,password,role) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $hashedpwd, 'student']);


        $sql = "insert into student (id,sec,year,semester,department) values (?,?,?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $sec, $year, $semi, $dep]);


        $sql = "insert into info (id,fname,lname) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $fname, $lname]);
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