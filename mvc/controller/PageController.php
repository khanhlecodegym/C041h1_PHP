<?php

require_once 'model/DbConnection.php';
require_once 'model/User.php';
require_once 'model/UserDAO.php';

class PageController
{
    public function home()
    {
        $userDAO = new UserDAO(DbConnection::make());

        $user = new User(1, $_POST['email'], $_POST['password']);
        $result = $userDAO->login($user);
        if ($result) {
            return view('admin/dashboard');
        } else {
            echo 'Sai thông tin tài khoản';
        }
    }

    public function login()
    {
        return view('admin/login');
    }
}
