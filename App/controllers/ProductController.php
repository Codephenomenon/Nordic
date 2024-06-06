<?php

namespace App\Controllers;

use Framework\Database;

class ProductController {
    protected $db;

    public function __construct() {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index() {
        $beverages = $this->db->query('SELECT * FROM beverage')->fetchAll();
        $script = "products";

        loadView('products', [
            'beverages' => $beverages,
            'script' => $script
        ]);
    }
}