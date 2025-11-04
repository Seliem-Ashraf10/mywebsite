<?php
$PageTitle = "Home";
include_once ("./Common/header.php");
?>
 <section>
     <div class="">
         <img src="./Image/Logo.jpg" style="height: 100vh; width: 100%; " alt="Brand">
     </div>
 </section>


 <section>
     <div class="bg-black text-center  p-4 ">
         <span class="h1 " style="color: gold ;">Our Products</span>
     </div>
 </section>
<?php
include_once './Common/Cards.php';
include_once './Common/footer.php';
?>