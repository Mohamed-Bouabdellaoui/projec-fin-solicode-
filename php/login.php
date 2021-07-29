<!doctype html>
<html lang="en">
    <?php 
    $t=' ';
    include("conect.php");
    
if(isset($_POST['login'])){
    $a=$_POST['email'];
   $b=$_POST['password'] ;
   if($a=="admin@gmail.com" &&  $b=="admin"){
       header('Location: admin.php');
   }
   else{
       $req="SELECT email,password FROM seller";
       $res=mysqli_query($conn,$req);
     
       while($row=mysqli_fetch_assoc($res)){
           if($a==$row['email'] && $b==$row['password']){
              
               header('Location: profile.php?email='.$row['email']);
           }
           else{
               $t="password or email failed";
           }
       }
     
   }
}




    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginn.css">
    <title>Hello , world!</title>
</head>

<body>
    <div class=" my-4 mx-4">
        <div class="d-flex justify-content-end col-1">
            <a href="Home.php"><button class="btn return "><span><<</span> return</button> </a>
        </div>
    </div>
    <section class="form my-4 mx-5 p-5 ">
        <div class="container">
            <div class="row no-gutters ">
                <div class="col-lg-5">
                    <img src="../image/loginillust.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold ">full-work</h1>
                    <h4>sign into your account</h4>
                    <form method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input name="email" value=""  type="email" placeholder="your email" class="form-control my-3 p-4">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input  name="password" value=""type="password" placeholder="***********" class="form-control my-3 p-4">
                            </div>
                            <span class="details text-danger"><?php 
                         echo $t;

         
         
         ?></span>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" class="btn1 " name="login" value="login"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>