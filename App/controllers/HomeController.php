<?php

namespace App\Controllers;

use Framework\Database;

class HomeController {
    protected $db;

    public function __construct() {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index() {
        $beverages = $this->db->query('SELECT * FROM beverage LIMIT 3')->fetchAll();
        $script = "home";

        loadView('home', [
            'beverages' => $beverages,
            'script' => $script
        ]);
    }
}