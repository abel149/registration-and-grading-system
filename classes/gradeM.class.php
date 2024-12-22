<?php

class Grade extends Dbh
{
    public function getstudentstmt($sec, $year, $semi)
    {
        try {
            $sql = "SELECT id FROM student WHERE sec = ? AND year = ? AND semester = ?";
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$sec, $year, $semi]);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log error and return an empty array or handle appropriately
            error_log("Error fetching students: " . $e->getMessage());
            return [];
        }
    }


    public function getstudentresult()
    {
        try {
            $sql = "SELECT * FROM grade INNER JOIN student ON grade.stud_id = student.id";
            $stm = $this->connect()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log error and return an empty array or handle appropriately
            error_log("Error fetching students: " . $e->getMessage());
            return [];
        }
    }


    protected function submit($id, $code, $test, $mid, $final, $grade)
    {
        try {
            $stmt = $this->connect()->prepare("select corsecode,id from grade where corsecode = ? and stud_id = ?");
            $stmt->execute([$code, $id]);
            if ($stmt->rowCount() > 0) {

                $stmt = null;
                header("location:../teachers.php?alredyinserted");
                exit();
            }


            error_log("Data being inserted: ID=$id, Code=$code, Test=$test, Mid=$mid, Final=$final, Grade=$grade");
            $sql = "INSERT INTO grade (stud_id, corsecode, test1, mid, final, grade) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

            $stmt->execute([$id, $code, $test, $mid, $final, $grade]);
            return true;
        } catch (PDOException $e) {
            error_log("Error inserting grade: " . $e->getMessage());
            return false;
        }
        //need modifications for grading

    }

    //for the course
    public function getcoursecode()
    {
        $sql = "select coursecode from courses  ";
        $stm = $this->connect()->prepare($sql);
        $stm->execute();
        $code = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $code;
    }
    protected function updateuser($username, $password)
    {
        $sql = "UPDATE  user SET  password=? WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$password, $username]);
    }
    protected function deleteuser($username)
    {
        $sql = "DELETE FROM user  WHERE username=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
    }
}
