<?php

require_once 'model/DbConnection.php';
require_once 'model/Office.php';
require_once 'model/OffceDAO.php';

class OfficeController
{
    public function home()
    {
        $officeDAO = new OffceDAO(DbConnection::make());
        $offices = $officeDAO->selectAll();

        // require 'view/offices/index.php';
        return view('offices/index', ['offices' => $offices]);
    }
}
