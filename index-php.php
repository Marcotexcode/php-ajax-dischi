

<?php

    include __DIR__  . '/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container-general">

        <div class="header">

            <h1>Dischi musicali </h1>

        </div>

        <div class="corpo">

            <?php  foreach($dischi as $disco) { ?>
     
                <div class="container-box">

                    <img class="box--poster" src="<?php echo  $disco['poster']  ?>" alt="">

                    <div class="textBox">

                        <h2 class="box--title"><?php echo  $disco['title']  ?></h2>

                        <h4 class="box--author" >Autore: <?php echo  $disco['author']  ?></h4>

                        <span class="box--year">Anno: <?php echo  $disco['year']  ?></span>

                    </div>

                </div>  
                
            <?php  } ?>

        </div>

    </div>

</body>
</html>