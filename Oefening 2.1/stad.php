<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

if ( ! is_numeric($_GET['img_id']))
{
    die("Wrong parameter");
}

require_once "lib/pdo.php";

$head = file_get_contents( "templates/head.html" );
print $head;
?>

<div class="jumbotron text-center">
    <h1>Detail stad</h1>
</div>

<div class="container">
    <div class="row">

        <?php

        $sql = "select * from images where  img_published=1 AND img_id=" . $_GET['img_id'];
        $rows = GetData( $sql );

        foreach ( $rows as $row )
        {
            $link_image = "img/" . $row['img_filename'];

            print '<div class="col-sm-12">';
            print '<h3>' . $row['img_title'] . '</h3>';
            print '<p>filename: ' .  $row['img_filename'] . '</p>';
            print '<p>' .  $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';
            print '<img class="img-fluid" style="width: 75%;" src="' . $link_image . '">';
            print '<p></p>';
            print '<p><a href=steden2.php>Terug naar overzicht</a></p>';

            print '</div>' ;
        }

        ?>

    </div>
</div>

</body>
</html>