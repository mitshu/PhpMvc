<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new DB;
    }

    public function Display() {
        $this->db->query('SELECT * FROM posttable');

        $results = $this->db->resultSet();

        return $results;
    }
    public function Detail($id) {
        $this->db->query('SELECT * FROM posttable WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }


}
?>