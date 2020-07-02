<?php

class OffceDAO
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($office)
    {
        $sql = "INSERT INTO offices('officeCode', 'city', 'phone', 'addressLine1', 'addressLine2', 'state', 'country', 'postalCode', 'territory') 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $office->officeCode);
        $statement->bindParam(2, $office->city);
        $statement->bindParam(3, $office->phone);
        $statement->bindParam(4, $office->addressLine1);
        $statement->bindParam(5, $office->addressLine2);
        $statement->bindParam(6, $office->state);
        $statement->bindParam(7, $office->country);
        $statement->bindParam(8, $office->postalCode);
        $statement->bindParam(9, $office->territory);

        return $statement->execute();
    }

    public function selectAll()
    {
        $sql = "Select * from offices";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
