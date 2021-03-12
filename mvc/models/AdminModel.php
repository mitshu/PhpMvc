<?php
class AdminModel {
    private $db;

    public function __construct() {
        $this->db = new DB;
    }

    public function findAllPosts() {
        $this->db->query('SELECT * FROM posttable');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addPost($data) {
        $this->db->query('INSERT INTO posttable (title, description, image, status) VALUES (:title, :des, :img ,:stt)');

        $this->db->bind(':title', $data['title']);
        $this->db->bind(':des', $data['description']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':stt', $data['status']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findPostById($id) {
        $this->db->query('SELECT * FROM posttable WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updatePost($data) {
        $this->db->query('UPDATE posttable SET title = :title, description = :des, image= :img, status = :stt WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':des', $data['description']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':stt', $data['status']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id) {
        $this->db->query('DELETE FROM posttable WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
