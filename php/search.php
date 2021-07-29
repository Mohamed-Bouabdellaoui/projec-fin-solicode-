<html lang="en">
<?php include("conect.php") ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="../css/search.css">
    <title>Document</title>
</head>

<body>
    <!-- <div class="wrapper">
<div class="search_wrap search_wrap_3">
			<div class="search_box">
                <form method="POST">
				<input  name="recherche"type="text" class="input" placeholder="search...">
				<input name="submit " type="submit "  class="btn btn_common">
			</form>
         

			</div>
		</div> 
        </div>  -->
    <form class="text-center" method="POST">
        <div class='mt-5'>
            <input type="text" name="adress">
            <input class="btn btn-primary" type="submit" value="rechercher" name="submit">
        </div>
    </form>
    <div class="row">

        <?php
        if (isset($_POST['submit'])) {
            $cat = $_GET['catigory'];

            header('Location: recherche.php?adress=' . $_POST['adress'] . '&cat=' . $cat);
        }

        if (isset($_GET['catigory'])) {
            $cat = $_GET['catigory'];
            $req = "select * from seller WHERE work='$cat'";
            $res = mysqli_query($conn, $req);
            while ($row = mysqli_fetch_assoc($res)) {
        ?>


                <div class="card col-4 mt-3" style="width: 30rem;">
                    <img src="<?= $row['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">name:<?= $row['name'] ?></h5>
                        <p class="card-text">email:<?= $row['email'] ?></p>
                        <p class="card-text">contact:<?= $row['phone'] ?></p>
                        <p class="card-text">adress:<?= $row['adress'] ?></p>
                        <p class="card-text">work:<?= $row['work'] ?></p>
                        <!-- <a  class="btn btn-primary"  href="./update.php?id=<?= $row['id'] ?>" >update</a>
                        
                        
                        <button  href="delete.php?id=<?= $row['id'] ?>" type="button" class="btn btn-primary">delete</button> -->



                    </div>
                </div>



















        <?php }
        } ?>
    </div>
</body>

</html>