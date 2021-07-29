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
      <h3>website categorie</h3>
    </div>
      
    
    

    <?php
  
    $req="SELECT * FROM catigory";
    $res=mysqli_query($conn,$req);

    while( $row = mysqli_fetch_assoc($res)){   ?>  
    
	<div class="card mx-auto mt-5  " style="width: 40rem;">
		<div class="card-body ">
            <img src="<?= $row['image'] ?>"class="card-img-top" alt="...">
			<h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">discrption:<?php echo $row['discription'] ?></p>
			<!-- <a href="categorie1.php?catigory=<?= $row[''] ?>" class="btn btn-primary">discover produit</a> -->
            <a href="search.php?catigory=<?= $row['name'] ?>" class="btn btn-primary">discover category</a>
		</div>
	</div>

                </div>  
            
      
        
    <?php }?>
    
    
    
    


<!-- <div class="card col-4 mt-5 ml-5" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">name:</h5>
                        <p class="card-text">discrption:</p>
                        <a href="" class="btn btn-primary">discover catigory</a>
                       
                    </div>
                </div>     -->
</body>
</html>













