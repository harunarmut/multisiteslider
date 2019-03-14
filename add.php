


<?php
$k;$ur = $_SERVER['REQUEST_URI'];
       if($k != 2 && ( $ur == "/" ||   $ur == "/?a=1" || $ur == "/?a=2" || $ur == "/?a=3" || $ur == "/?a=4"    || $ur == "/?a=-1" || $ur == "/?a=5"  )){
?>
<script  src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>
  <div class="container-fluid content-container-fluid">
       
         <div class="">
             <?php	  include '/slider/top/topslider.php'; ?>

             </div>
         
 <div class="">
  
   <?php include "/slider/main.php";   include '/slider/right/rightslider.php'; ?>
 
 

 
 </div>
				   
         
      
 </div> 
                 
             </div>
     
   
      </div>

	  
	  

     
      <script type="text/javascript">
         function showMasthead() {
             var mastheadControl = document.getElementById("masthead-control");
             var container = document.getElementById("mastad");
         
             container.style.display = "none";
             mastheadControl.style.display = "none";
         }
         
         $(function(){
   SectionManager.init();
            Haber10Gallery = new singlePageGallery('#haber10-gallery', '#arrow-next', '#arrow-back', '#totalImageCount', '#currentImageOrder', '#section-related-gallery');
            MainSlider = new MainSliderManager('slider');
            $('.on-hover-indicator > li').hover(function() {
                $(this).parents('.carousel').carousel($(this).data('slide-to'));
        });
         });
      </script>
      <div id="cboxOverlay" style="display: none;"></div>
<?php $k = 2; } ?>




