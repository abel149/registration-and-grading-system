<?php
class Admin extends Dbh
{


    public function setTeacher($id, $fname, $lname, $code, $pass)
    {

        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "insert into user (id,password,role) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $hashedpwd, 'teacher']);

        $sql = "insert into teachers (tid,corsecode) values (?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $code]);




        $sql = "insert into info (id,fname,lname) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $fname, $lname]);
    }
    public function setregistral($fname, $lname, $pass, $id)
    {
        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "insert into user (id,password,role) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $hashedpwd, 'teacher']);

        $sql = "insert into info (id,fname,lname) values (?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$id, $fname, $lname]);
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
    public function getteachersstmt()
    {
        $sql = "select * from teachers  ";
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        $names = $stm->fetchAll();

        foreach ($names as $name) {
            echo $name['id'] . " " . $name['first_name'] . "  " . $name['last_lame'] . "\n";
            echo "<br />";
        }
    }
    public function getregistralstmt()
    {
        $sql = "select * from  registraloffice ";
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        $names = $stm->fetchAll();

        foreach ($names as $name) {
            echo $name['id'] . " " . $name['first_name'] . "  " . $name['last_lame'] . "\n";
            echo "<br />";
        }
    }
}
