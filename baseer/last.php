 <?php
 error_reporting(E_ERROR|E_PARSE);
 require 'con.php';
 if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT *FROM samreen WHERE id= $id");
    $row = mysqli_fetch_assoc($result);
 }
 else{
    header("location:");
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>SHOPPING WEBSITE</title>
</head>
<body>
    <header class='header-1'>
        <nav class='navbar-1'>
                <ul class='nav-items1'>
                    <li class='nav-items'><a href="./index.html">HOME</a></li>
                    <li class='nav-items'><a href="./about.html">About us</a></li>
                    <li class='nav-items'><a href="./contact.html">Contact</a></li>
                </ul>
    
        </nav>
        <section class='showcase'>
            <div class='container'>
         <div class="row row1">
             <div class="img-box">
              <img src="./img/saree.jpg" alt="image desc">
             </div>
              <div class="text-box">
                 <h2> HANDLOOME SAREES:</h2>
                 <p>(sometimes also saree[1] or shari)[note 1] is a women's garment from the Indian subcontinent,[2]  woven fabric arranged over the body as a robe, with one end attached to the waist, while the other end rests over one shoulder as a stole (shawl),[3] sometimes baring a part of the midriff. from 4.1 to 8.2 metres (4.5 to 9 yards) in length,[7] and 60 to 120 centimetres (24 to 47 inches) in breadth,[8] and is form of ethnic wear in India, Pakistan, Bangladesh, Sri Lanka, and Nepal. There are various names and styles of sari manufacture and draping, the most common being the Nivi style, is worn with a fitted bodice also called a choli (ravike or kuppasa in southern India, and cholo in Nepal) and a petticoat called ghagra, parkar, or ul-pavadai.[11] It remains fashionable in the Indian Subcontinent today.[12]</p>
                 </div>
                 <a href="./page.html" class="page-link" >MORE PIC:</a>
         </div>
         <div class="row row2">
             <div class="img-box">
                 <img src="./img/half sarees.webp" alt="image desc2"></div>
                 <div class="text-box"> 
                     <h2>HAND MADE GHAGRAS:</h2>
              <p>choli also known as lehenga choli and in contemporary and modern usage lehenga choli is the more popular and widely accepted term by fashion designers, trend setters, and boutiques in South Asia, it is a authentions of the festival vibes . we used the homw made thread to look at that fabulous.it also contains the sizes the of every age of ladies .it is also design by the designer who had degree in that half sarees  the stone of uniq identity colours are used in the half sarees.since ghagra is synonymous with the half-slip worn as an undergarment below the sari.</p> </div>
              <a href="./page-2.html" class="page-link" >MORE PIC:</a>
         </div>
         <div class="row row3">
             <div class="img-box">
                 <img src="./img/cloth.jpg" alt=""></div>
                 <div class="text-box">
                     <h2>HAND MADE SWEATER:</h2>
          <p>  also called a jersey or jumper (British English and Australian English),[1] is a piece of clothing, typically with long sleeves,  crocheted material, that covers the upper part of the body. When sleeveless,they are also called as sleep cloths . tank top or sweater vest.sweaters are mainly used in the seasons .
 
                     Sweaters are worn by adults and children, often over a shirt, blouse, T-shirt, or another top, but sometimes next to the skin. Sweaters were traditionally made from wool but can now be made of cotton, synthetic fibers, or any combination of these. There are also seasonal sweaters, which around Christmas are often called "ugly sweaters".[2]</p></div>
                     <a href="./page-3.html" class="page-link" >MORE PIC:</a>
                 </div>
       </div>
     </section>
     <section class="features">
         <div class='container-1'>
             <div class='box'>
                 <div class="box box-1">
                     <a href="path/to/shopping/cart" aria-label="View 3 items in your shopping cart">
                         <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px; color:lightpink;"></i>
                       </a>
                     <h1 class="heading">FEATURES</h1>
                     <p>Social shopping makes it more convenient for customers Brands need to focus on providing a seamless buyers’ journey so there’s less risk of shoppers becoming frustrated and leaving.any social media is used here</p>
                 </div>
                 <div class='box box-2'>
                     <i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:20px"></i>
                      <span class="sr-only">Loading...</span>
                     <h1 class='heading-2'>LESSPRIZE</h1>
                   <p>A store with the same prices as a competitor’s would like to be seen as having lower prices; and a retailer with average prices that are 10% higher than a key competitor’s would love to be perceived as being only 5% higher.</p>
                 </div>
                 <div class="box box-3">
                     <i class="fa fa-history" aria-hidden="true"></i>
                     <h1 class="heading-3">EXPERIENCE</h1>
                     <p>With the online shopping experience becoming more relevant in  market .it has the 2 years of  experince among the customers ,product shouild be returned if demaged ,users try to support are front and center.</p>
                 </div>
             </div>
         </div>
     </section>
     <footer class="footer">
         <div class="social">
             <i class="fa-brands fa-facebook" style="font-size:50px"></i>
             <i class="fa-brands fa-instagram" style="font-size:50px"></i>
             <i class="fa-brands fa-twitter" style="font-size:50px"></i>
             <i class="fa-brands fa-linkedin" style="font-size:50px"></i>
             <i class="fa-brands fa-whatsapp" style="font-size:50px"></i>
             <p>Explore the site by this apps</p>  
         </div>
     </footer>