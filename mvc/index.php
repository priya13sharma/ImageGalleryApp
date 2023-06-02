
<?php
include 'database.php';
include 'core/Database.php';
include 'app/models/PhotoModel.php';
include 'app/controllers/PhotoController.php';

$db = new Database($hostname, $username, $password, $dbname);
$model = new PhotoModel($db);
$controller = new PhotoController($model);

$action = $_GET['action'] ?? 'index';
if ($action === 'add') {
  $controller->add();
} 


else {
$controller->index();

}

$db->closeConnection();


