 <?php 
   session_start();
   if(!isset($_SESSION['name2']))
   {
     ?>
          <script >
             alert( "You are Logout Plz Login");
            location.replace("index.php");
          </script>
     <?php
   }
   else{
   }
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Home</title>

<link rel="stylesheet" href="css/home.css"/>
    <?php 
     include 'links/link.php';

     ?>
  

	
</head>
 <body>
    <header>
      <main>
          <section>
 <div class="header">
        <a href="#" class="logo">HairCraft</a>
          <div class="header-right">
          <a href="#">Home</a>
          <a href="#about">Contact</a>
          <a href="#about">About</a>
          <a href="logout.php" style="float: right;">SignOut</a>
          <a class='no-link' href="#" style="float: right;">Welcome,<?php echo $_SESSION['name2']; ?></a>
        </div>
  </div>
      </section>
    <section class="section">
    <div class="btn">
        <a href="purchase.html"><button type="button" id="btn1" class="block">Haircut</button></a>  
        <a href="purchase.html"><button type="button" id="btn2" class="block">Beard Shave</button></a>
        <a href="purchase.html"><button type="button" id="btn3" class="block">Grooming Body</button></a>
        <a href="purchase.html"><button type="button" id="btn4" class="block">Eyebrow Shave</button></a>
     </div>
     
    </section>
         </main>
         </header>
                <!-- *************************footer start************************* -->
    <section>
 <?php 
     include 'foot.php';

     ?>
    </section>
   
<!-- Footer -->
<!-- **************************** footer ends *********************/ -->

    
</body>
</html>