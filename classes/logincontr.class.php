<?php
//control class
class loginContr extends login
{

    private $uid;
    private $pwd;
    private $role;


    public function __construct($uid, $pwd, $role)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->role = $role;
    }

    public function loginuser()
    {
        if ($this->emptyinput() == false) {
            header("location:../index.php?error=emptyinput");
            exit();
        }

        $this->getuser($this->uid, $this->pwd, $this->role);
    }
    private function emptyinput()
    {
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
