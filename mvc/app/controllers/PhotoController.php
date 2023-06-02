<?php
class PhotoController {

    private $model;

    public function __construct($model) {
     $this->model = $model;

    }

    public function index() {

        $photos = $this->model->getAllPhotos();
        include 'C:\Users\priyasharma03\Desktop\xampp\htdocs\mvc\app\views\photo_gallery.php';

    }

    public function add() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             $name = $_POST['name'];
             $image = $_POST['image'];
             $this->model->addPhoto($name, $image);
             header('Location: index.php');

        } else {
             include 'C:\Users\priyasharma03\Desktop\xampp\htdocs\mvc\app\views\add_photo.php';

        }

    }
    
    }

    ?>




    




    
   




