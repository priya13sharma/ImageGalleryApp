<?php

class PhotoModel {

    private $db;


  public function __construct($db) {

        $this->db = $db;

    }




    public function getAllPhotos() {

        $sql = "SELECT * FROM images";
        $result = $this->db->executeQuery($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }




    public function addPhoto($name, $image) {

        $sql = "INSERT INTO images (name,image) VALUES ('$name', '$image')";

        return $this->db->executeQuery($sql);

    }
    public function getById($id) {
        $sql = "SELECT * FROM images WHERE id = $id";
        $result = $this->db->executeQuery($sql);
        return $result->fetch_assoc();

    }

    



   




}


