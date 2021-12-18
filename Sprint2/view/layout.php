<!-- Header        -->

<!DOCTYPE html>
<html lang="en">
<head>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <meta charset="UTF-8">
    <title>NEWSPORTAL</title>
</head>
<body>
    

<!-- Раздел меню -->
<nav class="one">
    <ul class="topmenu">
        <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
        <ul class="submenu">
            <?php
                Controller::AllCategory();
            ?>
        </ul>
    </li>
    <li><a href="testError">Info</a></li>
    <li><a href="./">Stardileht</a></li>
    </ul>
</nav>

<!-- Раздел содержания -->
<section>
    <div class="divBox">
        <?php
        if(isset($content)){
            echo $content;
        }
        else{
            echo '<h1>Content is gone</h1>';
        }
        ?>
    </div>
</section>

<!-- Footer -->
<hr>
<p style="display:block; text-align: center;">SKTVp20 &copy</p>

    </body>
</html>