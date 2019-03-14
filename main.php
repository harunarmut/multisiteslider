<div class="section " >
               <div class="wrap">
                  <div class="row short-line">
                  </div>


    <div class="row">
                     <div class="col-md-9">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="block b3w b4h"  id="slider">
                                 <div class="navigation-tabs hidden-lg">
                                    <ul>
                                       <li class="  <?php
        $veri = $_GET['a'];
        if ($veri == 5) {
            echo 'active';
        }
?>"><a data-title="main"   href="/?a=5" >Site Main</a></li>
                                       
                                       <li class=" <?php
        if ($veri == -1) {
            echo 'active';
        }
?>"><a data-title="sec"   href="?a=-1"  >Site 2</a></li>
                                       <li class=" <?php
        if ($veri == 1) {
            echo 'active';
        }
?>"><a data-title="thir"  href="?a=1" >Site 3</a></li>
                                       <li class=" <?php
        if ($veri == 2) {
            echo 'active';
        }
?>"><a data-title="fou"  href="?a=2"  >Site 4</a></li>
                                       <li class=" <?php
        if ($veri == 4) {
            echo 'active';
        }
?>"><a data-title="fif"  href="?a=4"  >Site 5</a></li>

                                       <li class=" <?php
        if ($veri == 3) {
            echo 'active';
        }
?>"><a data-title="six"  href="?a=3" >Site 6</a></li>
                                    </ul>
                                 </div>
                                 <div class="navigation visible-lg-block">
                                    
                                    <ul>
                                        <li>
                                            
                                          <div class="bg" ></div>

                                          <a id="az" name="az" data-title="Site Main"  href="/?a=5"  ><img class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                       <li>
                                          <div class="bg" ></div>

                                          <a data-title="Site 2"  href="?a=-1"  ><img  class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                       <li>
                                          <div class="bg" ></div>

                                          <a data-title="Site 3"  href="?a=1" ><img  class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                       <li>
                                          <div class="bg" ></div>

                                          <a data-title="Site 4"  href="?a=2" ><img  class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                      
                                       <li>
                                          <div class="bg" ></div>

                                          <a data-title="Site 5"  href="?a=4" ><img  class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                        <li>
                                          <div class="bg" ></div>

                                          <a data-title="Site 6" href="?a=3" ><img  class="lazy" src="" data-src="/*logo link*/"></a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div id="carousel-haber10" class="carousel" data-ride="carousel">
                                    <ol class="carousel-indicators visible-sm-block visible-xs-block">
                                       <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="14"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="15"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="17"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="18" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="19" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="20"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="21"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="22"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="23"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="24"></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="25" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="26" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="27" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="28" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="29" class=""></li>
                                       <li data-target="#carousel-example-generic" data-slide-to="30" </li>
                                    </ol>
                                    
                                    <ul class="carousel-numbers on-hover-indicator hidden-xs hidden-sm">
                                     <?php
        
        
        
        
        
        
        if ($veri == -1) {
            $myfile = fopen("/slider/datas/testfile_m.txt", "r") ;
			 $readed = fread($myfile,999999);
			 echo $readed;
			 fclose($myfile);
         
        } else {
            if ($veri == 1) {
                
                
               $myfile = fopen("/slider/datas/testfile_t.txt", "r") ;
    			 $readed = fread($myfile,999999);
    			 echo $readed;
    			 fclose($myfile);
                
                
            } else {
                if ($veri == 2) {
                    
                    
                    $myfile = fopen("/slider/datas/testfile_k.txt", "r") ;
        			 $readed = fread($myfile,999999);
        			 echo $readed;
        			 fclose($myfile);
                    
                    
                } else {
                    if ($veri == 3) {
                        
                        
                        
                        
                        
                       $myfile = fopen("/slider/datas/testfile_d.txt", "r") ;
            			 $readed = fread($myfile,999999);
            			 echo $readed;
            			 fclose($myfile);
       
                    } else {
                        
                        if ($veri == 4) {
                            
                            
                            
                           $myfile = fopen("/slider/datas/testfile_c.txt", "r") ;
                			 $readed = fread($myfile,999999);
                			 echo $readed;
                			 fclose($myfile);
                            
                        } else {
                            
                        $myfile = fopen("/slider/datas/testfile_g.txt", "r") ;
            			 $readed = fread($myfile,999999);
            			 echo $readed;
            			 fclose($myfile);
                            
                            
                        }
                    }
                    
                }
                
            }
            
            
        }
?>
       <?php
        
?>                                     
                                       </div>
                                       
                                       
                                  
                                    
                                    <a class="hidden-lg left carousel-control" href="#carousel-haber10" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Back</span>
                                    </a>
                                    <a class="hidden-lg right carousel-control" href="#carousel-haber10" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Front</span>
                                    </a>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                       
                     
                     </div>
     </div>
   </div>