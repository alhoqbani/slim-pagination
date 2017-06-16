<?php

namespace App\Models;

use PDO;

class BaseModel
{
    
    protected $table;
    
    /**
     * @var \PDO
     */
    private $db;
    
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    
    public function getAll()
    {
        $results = $this->db->query("SELECT * FROM " . $this->table);
        
        return $results->fetchAll();
    }
    
}