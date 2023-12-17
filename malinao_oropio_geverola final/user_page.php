<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMS BLOG</title>
  <link rel="stylesheet" href="css/main.css">
  <!-- =========== icons =========== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- =========== icons =========== -->
</head>

<body>

  <header class="nav-header">
    <!-- =========== header container =========== -->
    <nav class="nav-flex"> <!--start nav-flex-->
      
        <div class="navgiation-control">    <!--start navgiation-control-->
        
        <p  class= "color-white open-sans uppercase mx-1 display-none " >welcome <span><?php echo $_SESSION['user_name'] ?></span></p>
        
        <p class="color-white open-sans uppercase mx-1 display-none border-aqua"><a href="#gotoaboutus">about us</a></p>
        <p class="color-white open-sans uppercase mx-1 display-none border-aqua"><a href="#gotocontactus" >contact us</a></p>
   
        <p class="color-white open-sans uppercase mx-1 display-none border-aqua"><a href="logout.php" class="btn">logout</a>
        <p class="color-white open-sans uppercase mx-1 display-none border-aqua"><a href="tost/index.php" class="btn">Upload here</a>
       
      </div>                                 <!--end navgiation-control--> 

      
      <div class="icon-flex display-none"><a href="#gotosocial"></div>    
        <i class="fa-brands fa-twitter color-white mx-1" style="font-size: 1.3rem;"></i>
        <i class="fa-brands fa-facebook color-white mx-1" style="font-size: 1.3rem;"></i>
        <i class="fa-brands fa-instagram color-white mx-1" style="font-size: 1.3rem;"></i>
      </div>                                   <!-- end icon-flex display-none --> 
    
        </nav> <!--end nav-flex-->
   
  </header>
        <!-- =========== header container =========== -->

 
 
        <!-- ===========START main content  =========== -->  <!-------====main parent-container==========-->
  <section class="parent-container">

    
    <!-- ===========START main content =========== -->
    <div class="main-content-parent border-top border-top-and-bottom">
      <h1 class="color-white open-sans lowercase the-blog-text">travel <h1 class="color-aqua open-sans  the-blog-text">Blog</h1> </h1>
    </div>
    <!-- ===========END main content =========== -->

    
   
    <!-- ===========START sub content =========== -->
    <div class="sub-content-container aqua-border">

     
        <!-- ===========START left content  =========== -->
          <div class="image-content-container">
          <div class="cover-content">
          <p class=" color-white open-sans uppercase mx-1  ">“ A journey of a thousand miles begins with a single step ”</p>
          </div>
              
           <div class="image-text">
          <img src="image/maincover.jpg"  class="image-fit">
           </div>
       <!-- ===========END left content  =========== -->
      
    
    </div>
    <!-- ===========END sub content =========== -->
     

</section>
  <!-- ===========END main content ===========-->    <!-------====main parent-container==========-->



    
  
  
  <!-- ===========START body content ===========-->
    <section class="parent-container-seccond-section ">

 
     
      <div class="mx-1">
        <div class="color-aqua open-sans uppercase mx-1  padding-bot ">recommended <span class="color-white open-sans uppercase ">travel</span></div>
        <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left ">Calle Crisologo, Vigan</p>
        <img src="image/vigan.jpg" class="image-footer"> 
      </div>
  
      <div class="mx-1 padding-top">
        <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left ">Nacpan Beach, El Nido</p>
        <img src="image/elnido.jpg" class="image-footer">
       
      </div>
  
      <div class="mx-1 padding-top">
        <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left">Tubbataha Reef, Palawan</p>
        <img src="image/palawan.jpg" class="image-footer">
       
      </div>
  
      <div class="mx-1 padding-top">
        <p class="color-white open-sans lowercase mx-1 padding-bot-1rem padding-left">Mayon Volcano, Albay, Bicol</p>
        <img src="image/mayon.jpg" class="image-footer">
       
      </div>
  
    </section>
    <!-- ===========END body content ===========-->
  
    
   
    <!---===== back ground color =========-->
         <div class="bg"></div>  <!--===== background aqua========-->
    <!---===== back ground color =========-->
  
 
 
    <!-- ===========START body content 2 ===========-->
  <section class="parent-container-seccond-section">

    <div class="mx-1 ">
      <div class="color-aqua open-sans uppercase mx-1  padding-bot ">top <span class="color-white open-sans uppercase ">travel</span></div>
       <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left">Banaue Rice Terraces, Ifugao</p>
       <img src="image/banaue.jpg" class="image-footer">
      
    </div>

    <div class="mx-1 padding-top">
      <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left">Cebu Beaches and spots</p>
      <img src="image/cebu.jpg" class="image-footer">
      
    </div>

    <div class="mx-1 padding-top">
      <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left">Cloud 9, Siargao</p>
      <img src="image/siargao.jpg" class="image-footer">
      
    </div>

    <div class="mx-1 padding-top">
      <p class="color-white open-sans lowercase mx-1  padding-bot-1rem padding-left">White Beach, Boracay</p>
      <img src="image/boracay.jpg" class="image-footer">
      

  </section>

<!-- ===========END body content 2===========-->

  

<!---===== back ground color =========-->
  <div class="bg"></div>  <!--===== background aqua========-->
<!---===== back ground color =========-->



<!-- =========== footer container =========== -->

<!-- ===========START body content  ===========-->
    <section class="parent-container-seccond-section ">

        <div class="mx-1 ">
          <p id="gotoaboutus" class="color-aqua open-sans uppercase mx-1  padding-bot ">About <span class="color-white open-sans uppercase ">Us</span></p>
           <p class="color-white open-sans lowercase mx-1  padding-bot-1rem ">our team provide <br> best destination spot <br> in the philippines</p>
           
          
        </div>
    
        <div class="mx-1 ">
            <p id="gotocontactus"  class="color-aqua open-sans uppercase mx-1  padding-bot ">Contact <span class="color-white open-sans uppercase ">Us</span></p>
          <p class="color-white open-sans lowercase mx-1  padding-bot-1rem ">phone: 09123456789<br> tel: (02) 111-1234 <br> email: mog@gmail.com</p>
        
          
        </div>
    
        <div class="mx-1 ">
            <div class="color-aqua open-sans uppercase mx-1  padding-bot ">Support <span class="color-white open-sans uppercase ">Us</span></div>
          <p class="color-white open-sans lowercase mx-1  padding-bot-1rem ">Donate@mogsupport@gmail.com</p>
    
          
        </div>
    
        <div class="mx-1 ">
            <p id="gotosocial" class="color-aqua open-sans uppercase mx-1  padding-bot ">follow <span class="color-white open-sans uppercase ">Us</span></p>
          <p class="color-white open-sans lowercase mx-1  padding-bot-1rem ">@facebook.com/mog<br>@twitter.com/mog<br>@instagram.com/mog</p>
    
          
    
      </section>
    
    <!-- ===========END body content  ===========-->



</body>

</html>