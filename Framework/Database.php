<?php

namespace Framework;
use PDO, PDOException, Exception;

class Database {
    public $connect;

    /**
     * Constructor for Database class
     * 
     * @param array $config
     */
    public function __construct($config) {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
            $this->connect = new PDO($dsn, $config['username'], $config['password'], $options);
        }
        catch (PDOException $e) {
            throw new Exception("Database connection failed: {$e->getMessage()}");
        }
    }

    /**
     *  Query the database
     * 
     *  @param string $query
     *  @param array $params
     * 
     *  @return PDOStatement
     *  @throws PDOException
     */
    public function query($query, $params = []) {
        try {
            $stmt = $this->connect->prepare($query);

            // Bind named params
            foreach($params as $param => $value) {
                $stmt->bindValue(':' . $param, $value);
            }

            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $e) {
            throw new Exception("Query failed to execute: {$e->getMessage()}");
        }
    }
}