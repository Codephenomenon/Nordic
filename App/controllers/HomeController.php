<?php

namespace App\Controllers;

use Framework\Database;

class HomeController {
    protected $db;
    protected $mapsKey;

    public function __construct() {
        $config = require basePath('config/db.php');
        $envConfig = require basePath('config/env.php');

        $this->db = new Database($config);
        $this->mapsKey = $envConfig["GOOGLE_MAPS_API_KEY"];
    }

    public function index() {
        $beverages = $this->db->query('SELECT * FROM beverage LIMIT 3')->fetchAll();
        $script = "home";

        loadView('home', [
            'beverages' => $beverages,
            'script' => $script,
            'key' => $this->mapsKey
        ]);
    }
}