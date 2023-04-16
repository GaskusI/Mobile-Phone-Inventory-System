<?php
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

    public function setAvailability($price)
    {
        $this->availability = $availability;
        return $this;
    }

    public function add($pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO phones (brand, model, price, availability) VALUES (?, ?, ?, ?)");
        $stmt->execute([$this->brand, $this->model, $this->price, $this->availability]);
        $this->id = $pdo->lastInsertId();
    }

    public function edit($pdo)
    {
        $stmt = $pdo->prepare("UPDATE phones SET brand = ?, model = ?, price = ?, availability = ? WHERE id = ?");
        $stmt->execute([$this->brand, $this->model, $this->price, $this->availability, $this->id]);
    }

    public function delete($pdo)
    {
        if ($this->id) {
            $stmt = $pdo->prepare("DELETE FROM phones WHERE id = ?");
            $stmt->execute([$this->id]);
//            $this->id = null;
        }
    }
}