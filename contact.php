<?php

 include "incld/header.php";
 include "incld/login.php";

?>


<!-- shopping cart  -->

<div class="shopping-cart">

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-1.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-2.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-3.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-4.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <h3 class="total"> total : <span>$560.00</span> </h3>

    <a href="#" class="btn">checkout cart</a>

</div>

<!-- login form  -->

<div class="login-form">

    <form action="">
        <h3>login form</h3>
        <input type="email" placeholder="enter your email" class="box">
        <input type="password" placeholder="enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create now</a></p>
    </form>

</div>

<section class="heading">
    <h3>contact us</h3>
    <p> <a href="home.html">home</a> / <span>contact</span> </p>
</section>

<div class="contact">

    <form action="">
        <h3>get in touch</h3>
        <span>your name</span>
        <input type="text" class="box">
        <span>your number</span>
        <input type="number" class="box">
        <span>your email</span>
        <input type="email" class="box">
        <span>your message</span>
        <textarea class="box" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d454.525722827635!2d89.32632263835498!3d24.921023101315658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shouse%20!5e1!3m2!1sen!2sbd!4v1644212498156!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>








<?php
 include 'incld/footer.php';
?>