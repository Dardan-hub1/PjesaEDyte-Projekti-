<?php
require_once "DatabaseConfig.php";

class VehicleMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($vehicleId)
    {
        $this->query = "select * from vehicle where vehicleId=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $vehicleId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getVehicleByModel($model)
    {
        $this->query = "select * from vehicle where model=:model";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":model", $model);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllVehicles()
    {
        $this->query = "select * from vehicle";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertVehicle(\VehicleModel $vehicle)
    {
        $this->query = "insert into vehicle (type,model,price,year, Image_Url) values (:type,:model,:price,:year, :imgUrl)";
        $statement = $this->conn->prepare($this->query);
        $type = $vehicle->getType();
        $model = $vehicle->getModel();
        $price = $vehicle->getPrice();
        $year = $vehicle->getYear();
        $Image_Url = $vehicle->getImgUrl();
        $statement->bindParam(":type", $type);
        $statement->bindParam(":model", $model);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":year", $year);
        $statement->bindParam(":edited_by", $edited_by);
        $statement->bindParam(":imgUrl", $Image_Url);
        $statement->execute();
    }

    public function deleteVehicle($vehicleId)
    {
        $this->query = "delete from vehicle where id=:vehicleId";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":vehicleId", $vehicleId);
        $statement->execute();
    }
}
