    <?php  
    
$width ="<script>var windowWidth = screen.width; document.writeln(windowWidth); </script>" ;

$w = intval($width);

if($width<"1000"){
   echo "okkkk"; 
}else{ ?>
<div class="manset cf">
   <div class="mansetAna netteSampleSlideMain" data-nt-slide=".netteSampleSlide li" data-nt-slide-pagination=".netteSampleSlideBtns li" data-nt-prev-next="false" style="height: 425px;">
      <div class="maUst netteSampleSlide  mansetTop">
           <ul>
        <?php  
                        $myfile = fopen("/slider/right/file_t.txt", "r") ;
            			 $readed = fread($myfile,999999);
            			 echo $readed;
            			 fclose($myfile);
        
        ?>
          
        
                
             </ul>
         
      </div>
      <style>
         .manset .mansetAna .maAlt{height: 175px !important;}
         .manset .mansetAna .maAlt .maBtns{margin-top: 15px !important;}
         .manset .mansetAna .maAlt>center{margin-top: 10px !important;}
      </style>
      
   </div>
</div>
	  
	  

	  
	  
	  
	  
	  
	  
	  
	  
	   <script>
	  
	  
	  
	  $( document ).ready(function() {
  // Handler for .ready() called.
  var k = 1;
  $( ".0  " ).css("display", "list-item");
  $( "#on0  " ).addClass("nextto");
  $( "#on0 > a " ).css("background", "#ed1b24");
	  
	  
	  
	  function nextto() {
	      
	    $( ".maUst > ul > li" ).fadeOut( "slow", function() { });
		$( "."+k ).fadeIn( "slow", function() {  });
        $( ".maBtns > li >a " ).css("background", "#4c4c4c");
		$( "#on"+k+" > a " ).css("background", "#ed1b24");
		if(k==14){
		    
		   k =0;
		}else{
	      k++;
		};
	      
	      
	  }
	   var refreshIntervalId = setInterval(nextto, 4000);
	  
	  
	 <?php

                for( 	 $i = 0; $i<15; $i = $i+1){
                    
                    echo ' $( "#on' . $i . '" ).hover(
				  			  function() {
				  			  clearInterval(refreshIntervalId);
				  			  k = ' . $i . ' ;
			  	$( ".maUst > ul > li" ).fadeOut( "slow", function() { });
				$( ".' . $i . '  " ).fadeIn( "slow", function() {  });
                $( ".maBtns > li >a " ).css("background", "#4c4c4c");
				$( "#on' . $i . ' > a " ).css("background", "#ed1b24");
				
				if(k==14){
		    
        		   k =0;
        		}else{
        	      k = ' . $i . ' +1 ;
        		};
				
			  }, function() {  refreshIntervalId = setInterval(nextto, 4000); }
			);
        	';
                    
                    
                }
               
                
                
        ?>  	
        
     
       
     
	  
	  }); 
	  
	  
	  </script>
<?php  
    
} ?>