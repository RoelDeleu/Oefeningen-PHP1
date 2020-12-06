<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>City dreams</h1>
    <p>Travel to your favorite location!</p>
</div>

<div class="container">
    <div class="row">

        <?php

        $images = array( "imglonden.jpg", "imgparijs.jpg", "imgberlijn.jpg");
        $count = 0;

        foreach ( $images as $image )
        {
            $count++;
            $link_img = "img/$image";
            print '<div class="col-sm-4">';
            print '<h3>Column ' . $count . '</h3>';
            print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';
            print '<img class="img-fluid" src="' . $link_img . '">';
            print '</div>' ;
        }

        ?>

    </div>
</div>

</body>
</html>