<?php 

require_once 'model/DbConnection.php';
require_once 'model/EmployDAO.php';

class EmployController {
    public function index() {
        session_start();
        // die(var_dump($_SESSION['user']));
        if(isset($_SESSION['user']))  {
            
            $employDAO = new EmployDAO(DbConnection::make());
            $employees = $employDAO->selectAll();

            return view('employees/index', ['employees' => $employees]);
        } else {
            return view('admin/login');
        }

        
    }
}