<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Photo Gallery App</title>
    <style>
    body{
        background-image: url("https://cdn.pixabay.com/photo/2020/02/13/06/49/seascape-4844697_1280.jpg");
    }
    h2{
        margin-top:10px;
       color:white;
       font-style: ilatic;
    }
    button{
        justify-content:center;
    }
</style> 


</head>
<body>
<div class="container">

<h2 class="text-center">Hey, You can add Image here..</h2>
<div class="col-xl-5 col-md-4 m-auto p-5 mt-5 bg-cyan " >

<form method="POST" action="index.php?action=add">

    <div class="form-group">
     <input type="text" class="form-control" id="title" name="name" placeholder="Name" required>

    </div>
    <br><br>
      <div class="form-group">
     <input type="text" class="form-control" id="image" name="image"  placeholder="Image" required>
     </div>
    <br><br>

    <button type="submit" class="btn btn-danger">Add Image</button>

</form>
</div>

</div>




<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>



 