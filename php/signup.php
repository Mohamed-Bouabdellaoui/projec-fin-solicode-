<?php
include("conect.php");
$errors = array('name' => '','email' => '', 'phone-number' => '' , 'password' => '' , 'adress' => '' ,'work' => '' , 'f' => '','ema' =>'' );
if(isset($_POST['submit'])){

//chek name
if(empty($_POST['name'])){
    $errors['name'] = 'write an name ';}
else{
    $title = $_POST['name'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        $errors['name'] = 'name must be letters and spaces only';
    }
}
//chek email
if(empty($_POST['email'])){
    $errors['email'] = 'write an email';
}else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
        $errors['email'] = 'Email must be a valid email address';    }
}
// chek password
if(empty($_POST['password'])){
    $errors['password'] = 'write a password';
}
//chek number
if(empty($_POST['phone-number'])){
    $errors['phone-number'] = 'write a phone-number';
    
}
//chek adress
if($_POST['adress']==""){
    $errors['adress'] = 'write a adress';
}
//chek work
if($_POST['work']==""){
    $errors['work'] = 'select a work';
}
//image
if($_POST['f']==""){
    $errors['f'] = 'select an image';
}
// $req1="select email from seller";
// $res=mysqli_query($conn,$req1);
// $to=0;
// while($row=mysqli_fetch_assoc($res)){
//         if($row ==$_POST['email']){
//             $to++;

          
//         }
      
//     }
 
    

//     if($to != 0){
//         $errors['ema']='email deja existe';
//     }
$select = mysqli_query($conn, "SELECT * FROM seller WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    $errors['ema']= 'Cette adresse email est déjà utilisé';
}
    


//redirection
if(array_filter($errors)){
   
} else {
    $name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone-number'];
$password=$_POST['password'];
$adress=$_POST['adress'];
$work=$_POST['work'];
$file=$_POST['f'];
$var = array("$name", "$email", "$number","$password" , "$adress","$work" , "$file");
$req = "insert into seller (name,email,phone,password,adress,work,image) values('$name','$email','$number','$password','$adress','$work','$file')";
        $resultat = mysqli_query($conn, $req);
   
    header('Location: login.php');
}

// $req1="select email from seller";

// $res=mysqli_query($conn,$req1);
// $to=0;
// while($row=mysql_fetch_assoc($res)){
//     if($row==$_POST['email'])
//     $to++;
// }

//     if(!empty($var[0]) && !empty($var[1]) && !empty($var[2]) && !empty($var[3]) && !empty($var[4]) && !empty($var[5]) && !empty($var[6])){
// if($to == 0){


// }else{echo 'email deja existe';}
// }

}







?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signupp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">

        <div class="title">Registration</div>
        <div class="content">
 <form  method="POST">
  <div class="user-details">
         <div class="input-box">
       <span class="details">Full Name</span>
         <input value="<?php if(empty($_POST['name'])) echo  $title ="" ;else echo $title=$_POST['name'] ?>" name="name" type="text" placeholder="Enter your name" >
         <span class="details text-danger"><?php 
          echo $errors['name'];
         
         ?></span>   
      
           </div>

             <div class="input-box">
                 <span class="details">Email</span>
                 <input value="<?php if(empty($_POST['email'])) echo  $email ="" ;else echo $email=$_POST['email'] ?>" type="text" name="email" placeholder="Enter your email" >
                 <span class="details text-danger"><?php 
                  echo $errors['email'];
        
         
         ?></span>
               <span class="details text-danger"><?php 
          echo $errors['ema'];
         
         ?></span>  
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input value="<?php if(empty($_POST['phone-number'])) echo  $phone ="" ;else echo $phone=$_POST['phone-number'] ?>" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name='phone-number' placeholder="Enter your number" >
                        <span class="details text-danger"><?php 
                         echo $errors['phone-number'];
         
         
         ?></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <!-- <?php $password="" ?> -->
                        <input value="<?php if(empty($_POST['password'])) echo  $password ="" ;else echo $password=$_POST['password'] ?>" type="password" name='password' placeholder="Enter your password" >
                        <span class="details text-danger"><?php 
                        
                        echo $errors['password'];

         
         ?></span>
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
<span class="details text-danger"><?php 
                         echo $errors['adress'];

         
         
         ?></span>


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
                
                  
                <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>;
                    
                <?php }?>

              
              
 
 
</select>
<span class="details text-danger"><?php 
                         echo $errors['work'];
         ?></span>

      </div>
         </div>
        
           <div class="">
            <span class="details"> your image</span>
         <div class="">
    <div class="btn  ">
      <input name='f' type="text">

</div>
    </div>
    <span class="details text-danger"><?php 
                         echo $errors['f'];
         
         
         ?></span>
   
  </div>

          </div>
                <div class="button">
                    <input  name='submit' type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

</body>

</html>