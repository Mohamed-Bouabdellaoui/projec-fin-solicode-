<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>


    <div class='row'>

        <?php
        include("conect.php");
        $a = $_GET['adress'];
        $b = $_GET['cat'];




        if ($a == "gzenaya" || $a == "boukhalef" || $a == "badriwin") {
            $req = "select *from seller where adress IN('gzenaya','boukhalef','badriwin') AND work='$b'";
        } else if ($a == "ziaten" || $a == "birchifa" || $a == "msnana") {
            $req = "select *from seller where adress IN('ziaten','birchifa','msnana') AND work='$b'";
        }

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



                </div>
            </div>



        <?php } ?>
    </div>
</body>

</html>