<?php

require_once 'logging.php';
require_once 'database.php';
class MobilePhone
{
    private $id;
    private $brand;
    private $model;
    private $price;
    private $availability;
    public function __construct($row)
    {
        if (isset($row['id'])) {
            $this->id = $row['id'];
        }

        $this->brand = $row['brand'];
        $this->model = $row['model'];
        $this->price = $row['price'];
        $this->availability = $row['availability'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    public function add(PDO $pdo)
    {
        $stmt = prepareStatement($pdo, "INSERT INTO phones (brand, model, price, availability) VALUES (?, ?, ?, ?)", [
            $this->brand,
            $this->model,
            $this->price,
            $this->availability
        ]);

        $this->id = $pdo->lastInsertId();
        
        log_action($pdo ,'Added ' . $this->id . ' phone.');
    }

    public function edit(PDO $pdo)
    {
        $stmt = prepareStatement($pdo, "UPDATE phones SET brand = ?, model = ?, price = ?, availability = ? WHERE id = ?", [
            $this->brand,
            $this->model,
            $this->price,
            $this->availability,
            $this->id
        ]);

        log_action($pdo, 'Edited ' . $this->id . ' phone.');
    }

    public function delete(PDO $pdo)
    {
        if ($this->id)
        {
            $stmt = prepareStatement($pdo, "DELETE FROM phones WHERE id = ?", [$this->id]);

            log_action($pdo, 'Deleted ' . $this->id . ' phone.');
        }
    }
}