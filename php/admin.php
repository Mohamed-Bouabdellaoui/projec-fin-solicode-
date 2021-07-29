<?php include("conect.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="text-center text-primary m-5">
      <h3>page admin</h3>
    </div>





<div class="container ">
  <div class="row bg-info ">
    <div class="col mt-5  ">
    <form class="form-inline mt-5 " method="post">
  
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="adress"class="form-control" id="inputPassword2" placeholder="adress">
  </div>
  
  <input type="submit" name="add"  value="add adress"class="btn btn-primary mb-2"></input>
</form>
<?php 
if(isset($_POST['add'])){
    $a=$_POST['adress'];
    $req="insert into adress(adress) values('$a') ";
    $res=mysqli_query($conn,$req);

}


?>




    </div>
    <div class="col bg-info ml-3 ">
    <form class="form mt-5 " method="POST">
  
  <div class="form-group  mb-2">
    <input type="text" name="work"class="form-control"  placeholder="work name"> <br>
   
    <input type="text"  name="description"class="form-control"  placeholder="discription"> <br>
    <input type="text" value="" name="image" class="form-control"  placeholder="link image"> <br>
  </div>
  
  <input type="submit" name="category"class="btn btn-primary"  value="add work categorie" mb-2 ml-5></input>
</form>
<?php 
if(isset($_POST['category'])){
    $a=$_POST['work'];
    $b=$_POST['description'];
    $c=$_POST['image'];
    $req="insert into catigory(name,discription,image) values('$a','$b','$c') ";
    $res=mysqli_query($conn,$req);

}


?>
    </div>
    </div>
  </div>



</body>
</html>