<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/MakeupRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$makeupRepository = new MakeupRepository($databaseManager);
$palettes = $makeupRepository->get();

if(!empty($_POST['edit'])){
    $updateName = $_POST['updateName'];
    $updateBrand = $_POST['updateBrand'];
    $updatePrice = $_POST['updatePrice'];
    $id = $_GET['editId'];

    $makeupRepository->update($id, $updateName, $updateBrand, $updatePrice);
    $makeupRepository->get();
}

require "editoverview.php";