 <div class="yazi2" align="center">
    <?php
                        $myfile = fopen("/slider/ust/file_m.txt", "r") ;
            			 $readed = fread($myfile,999999);
            			 echo $readed;
            			 fclose($myfile);

  ?>
</div>