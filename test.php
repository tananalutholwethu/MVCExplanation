<?php
namespace App\Models\Tables;

class Province extends \Core\Model {
    
    public function __construct() {
        $this->tableName = 'province';
        parent::__construct();
    }
    
    /**
     * Get all provinces
     * SQL query lives here in the Model!
     */
    public function getAllProvinces() {
        $query = "SELECT * FROM province ORDER BY province_name";
        $provinces = $this->getAll($query);
        return $provinces;
    }
    
    /**
     * Get single province by ID
     */
    public function getProvinceById($id) {
        $query = "SELECT * FROM province WHERE id = ?";
        $province = $this->getRow($query, [$id]);
        return $province;
    }
    
    /**
     * Check if province code already exists
     */
    public function codeExists($provinceCode) {
        $query = "SELECT COUNT(*) as count 
                  FROM province 
                  WHERE province_code = ?";
        
            $result = $this->getRow($query, [$provinceCode]);

        return $result['count'] > 0;
    }
}