<?php
include("conect.php");
$id=$_GET['id'];
$req="select * from seller where id='$id'";
$res=mysqli_query($conn,$req);
$row=mysqli_fetch_assoc($res);
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signupp.css">
    <title>Document</title>
</head>
<body>

<div class="container">

        <div class="title">Registration</div>
        <div class="content">
 <form  method="POST">
  <div class="user-details">
         <div class="input-box">
       <span class="details">Full Name</span>
         <input value="<?php echo $row['name'] ?>" name="name" type="text" placeholder="Enter your name" >
         
      
           </div>

             <div class="input-box">
                 <span class="details">Email</span>
                 <input value="<?php echo $row['email'] ?>" type="text" name="email" placeholder="Enter your email" >
                
        
         
         
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input value="<?php echo $row['phone'] ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name='phone-number' placeholder="Enter your number" >
                
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>

                        <input value="<?php echo $row['password'] ?>" type="password" name='password' placeholder="Enter your password" >
                    
          </div>
          <div class="input-box">
         <div class="search_select_box">
         <span class="details">your address</span>
         <select name='adress' class="form-select form-control form-control-lg  select1 " aria-label="Default select example">
  <option value="" >Open this select menu</option>
  <option value="gzenaya">gzenaya</option>
  <option value="boukhalef">boukhalef</option>
  <option value="badriwin">badriwin</option>
  <option value="ziaten">ziaten</option>
  <option value="birchifa">birchifa</option>
  <option value="msnana">msnana</option>


</select>



             </div>
         </div>
           <div class="input-box ">
           <div class="search_select_box">
            <span class="details"> your work</span>
            <select name='work' class="form-select form-control form-control-lg select1" aria-label="Default select example">
                 <option value="">Open this select menu</option>
                <?php 
                $req="SELECT * FROM catigory";
                $res=mysqli_query($conn,$req);

                while( $row = mysqli_fetch_assoc($res)){   ?>  
                
                  
                <option value=""><?php echo $row['name']?></option>;
                    
                <?php }?>

              
              
 
 
</select>


      </div>
         </div>
        
       
           <div class="">
            <span class="details"> your image</span>
         <div class="">
    <div class="btn  ">
      <input value="" name='f' type="text">

</div> 
    </div>
  
  </div>

          </div>
                <div class="button">
                    <input  name='su' type="submit" value="update">
                </div>
            </form>
        </div>
    </div>
    <?php 
    
    if(isset($_POST['su'])){
    
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone-number'];
$d = $_POST['password'];
$e = $_POST['adress'];
$f = $_POST['work'];
$g = $_POST['f'];
echo $a;
echo $id;
$req = "UPDATE seller  SET name='$a', email='$b', phone='$c', password='$d', adress='$e',  work='$f', image='$g' WHERE id='$id'" ;
$res=mysqli_query($conn , $req);

    header('location:profile.php?email='.$b );













    }
    
    
    
    ?>






    
</body>
</html>