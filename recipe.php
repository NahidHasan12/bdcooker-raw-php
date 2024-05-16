<?php

 include "incld/header.php";
 include "incld/login.php";

?>

<section class="heading">
    <h3>Recipes</h3>
    <p> <a href="index.php">home</a> / <span>about</span> </p>
</section>



<section class="services">

    <h1 class="title"> <span>Our Recipe Categories</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/chicken.png" alt="">
            <h3>Chicken Recipe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="chicken.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/biryani.jpg" alt="">
            <h3>Biryani</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="biryani.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/beef.png" alt="">
            <h3>Beef Recipe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quod.</p>
            <a href="beef.php" class="btn">read more</a>
        </div>

    </div>

</section>





<?php
 include 'incld/footer.php';
?>