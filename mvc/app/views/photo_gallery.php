<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Photo Gallery App</title>
    <style>
      <?php include 'style.css';?>
    </style>
    
</head>
<body>
<div class="container">
     
     <h2 class="text-center">Welcome to  my  Online Photo Gallery Website</h2>
    <div class="con">
  <div class="row mt-5 mg-2">
  

<?php foreach ($photos as $photo): ?>

    <div class="col-2">
    <div class="card mb-2" style="width: 20rem;">
    <img src="<?php echo $photo['image']; ?>" class="card-img-top" alt="<?php echo $photo['name']; ?>" >

 </div>

    </div>
<?php endforeach; ?>

  </div>
  </div>
  
  <a href="index.php?action=add"   id="center"class="btn btn-danger">Hey, Add Image </a>
  

</div>




<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>







