<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class MakeupRepository
{
    private $databaseManager;
    
    public $newName;
    public $newBrand;
    public $newPrice;

    public $updateName;
    public $updateBrand;
    public $updatePrice;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if(!empty($_POST['submit'])){
            $this->newName = $_POST['makeup'];
            $this->newBrand = $_POST['brand'];
            $this->newPrice = $_POST['price'];

            $sql = "INSERT INTO makeup (name, brand, price) VALUES ('$this->newName', '$this->newBrand', '$this->newPrice')";
            $result = $this->databaseManager->databaseconnection->query($sql);
            
            return $result;
        }
        $this->get();
    }

    // Get one
    public function find()
    {

        
    }

    // Get all
    public function get()
    {
        // We get the database connection first, so we can apply our queries with it
        $sql = "SELECT * FROM makeup";
        $result = $this->databaseManager->databaseconnection->query($sql);

        return $result;
    }

    public function update()
    {
        if(!empty($_POST['update'])){
            $this->updateName = $_POST['updateName'];
            $this->updateBrand = $_POST['updateBrand'];
            $this->updatePrice = $_POST['updatePrice'];
            $this->id = $_GET['editId'];

            $sql = "UPDATE makeup SET name = '$this->updateName', brand = '$this->updateBrand', price = '$this->updatePrice' WHERE id = '$this->id'";
            $result = $this->databaseManager->databaseconnection->prepare($sql);
            $result->execute();
            
            echo 'testupdate';
        }

    }

    public function delete()
    {

    }

}