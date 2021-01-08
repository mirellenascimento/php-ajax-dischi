<?php
require_once __DIR__ . '/database/disks.php'
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP Dischi</title>
     <!-- FONT FAMILY -->
     <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

     <!-- STYLESHEET -->
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

     <header>
         <div class="container">
             <img src="img/logo.png" alt="logo" />
         </div>
     </header>

     <main>
       <div class="cds-container container">
           <!-- Disco ad esempio -->

           <?php foreach ($disks['response'] as $disk):
            echo "<div class=\"cd\">"; ?>

               <img src="<?= $disk['poster'];?>" alt="Poster">
               <h3><?= $disk['title']; ?></h3>
               <span class="author"><?= $disk['author']; ?></span>
               <span class="year"><?= $disk['year']; ?></span>


           <?php echo "</div>";
            endforeach; ?>
       </div>
     </main>
   </body>
 </html>
