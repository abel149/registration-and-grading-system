<?php
//model class
class login extends Dbh
{
    protected function getuser($uid, $pwd, $role)
    {
        $stmt = $this->connect()->prepare('SELECT password FROM  user WHERE id=? AND role=?');


        if (!$stmt->execute(array($uid, $role))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location:../index.php?error=usernotfound1");
            exit();
        }

        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $pwdhashed[0]['password']);
        if ($checkpwd == false) {
            $stmt = null;

            header("location:../index.php?error=wrongpwd");

            exit();
        } else if ($checkpwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM  user WHERE id = ?  AND role=?');

            if (!$stmt->execute(array($uid, $role))) {
                $stmt = null;
                header("location:../index.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:../index.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['id'] = $user[0]['id'];

            $_SESSION['role'] = $user[0]['role'];

            $stmt = null;
        }

        $stmt = null;
    }
}
