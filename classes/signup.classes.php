<?php
session_start();
class Signup extends Dbh {

    protected function setUser($uid, $email, $pwd) {
        $stmt = $this->connect()->prepare('insert into users (users_uid, users_email, users_pwd) values (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $email, $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            die();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('select users_uid from users where users_uid = ? or users_email = ?;');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}