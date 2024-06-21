<?php

session_start();
?>

<header>
<nav>
<div>
<h3>Object Oriented Login System</h3>
<ul class="menu-main">
<li><a href="index.php">HOME</a></li>
<li><a href="#">PRODUCTS</a></li>
<li><a href="#">CURRENT SALES</a></li>
<li><a href="#">MEMEBER</a></li>
</ul>
</div>
<ul class="menu-member">
<?php
if(isset($_SESSION['userid']))
{
?>
<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
<li> <a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
<?php
}
else
{
?>
<li><a href="#">SIGN UP</a></li>
<li> <a href="#" class="header-login-a">LOGIN</a></li>
<?php
}?>

</ul>
</nav>
</header>



<section class="index-login">
<div class="wrapper">
    <div class="index-login-signup">
        <h4>SIGN UP</h4>
        <p>Don't have an acoount yet? Sign up here!</p>
    <form action="includes/signup.inc.php" method="post">
         <input type="text" name="uid" id="" placeholder="Username">
         <input type="password" name="pwd" id="" placeholder="Password">
         <input type="password" name="pwdrepeat" id="" placeholder="Repeat Password">
         <input type="text" name="email" id="" placeholder="E-mail">
         <br>
         <button type="submit" name="submit">SIGN UP</button>
    </form>
    </div>
   <div class="index-login-login">
    <h4>LOGIN</h4>
    <p>Don't have an acoount yet? Sign up here!</p>
    <form action="includes/login.inc.php" method="post">

    <input type="text" name="uid" id="" placeholder="Username">
    <input type="password" name="pwd" id="" placeholder="Password">
     <br>
     <button type="submit" name="submit">LOGIN</button>
    </form>
   </div>


</div>

</section>