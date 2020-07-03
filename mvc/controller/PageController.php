<?php

require_once 'model/DbConnection.php';
require_once 'model/User.php';
require_once 'model/UserDAO.php';
require_once 'model/ProductDAO.php';

class PageController
{
    public function home()
    {
        $userDAO = new UserDAO(DbConnection::make());

        $user = new User(1, $_POST['email'], $_POST['password']);
        $result = $userDAO->login($user);
        if (count($result)) {
            session_start();
            $_SESSION['user'] = $result[0];

            return view('admin/dashboard');
        } else {
            redirect('login');
        }
    }

    public function login()
    {
        session_start();
        // die(var_dump($_SESSION['user']));
        if(isset($_SESSION['user']))  {
            return view('admin/dashboard');
        }
        return view('admin/login');
    }

    public function logout()
    {
        session_start();
        // unset($_SESSION['user']);
        session_destroy();
        return redirect();
    }

    public function index() 
    {
        $productDAO = new ProductDAO(DbConnection::make());

        $productHot = $productDAO->selectProductHot();
        $productAll = $productDAO->selectAll();

        return view('home/index', ['productHot' => $productHot, 'productAll' => $productAll]);
    }
}
