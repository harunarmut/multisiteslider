<?php
include '../../site2/wp-config.php';
                $a1   = 0;
                $a2   = 1;
			$mydb = new wpdb('/*dbusername*/', '/*password*/', '/*dbname*/', 'localhost');
                $rows = $mydb->get_results("select * from wp_posts WHERE post_type = 'post' AND post_status = 'publish'  ORDER BY post_date DESC limit 15 ");
                $asd  = ' active';
                global $post;
                foreach ($rows as $post):
                    $a    = get_the_ID();
                    $link = $post->guid;
                    $title = $post->post_title;
                    $date  = $post->post_date;
                    $r     = $mydb->get_results("select * from wp_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND post_parent = '$a'");
                    $o     = 0;
                    foreach ($r as $pag) {
                        if ($o == 0) {
                            $res = $pag->guid;
                            
                            $show.= '
                            
                            
                             <li style="display: none;" class="' . $a1 . '">
               <a href="' . $link . '" class="mansLnk_" target="_blank">
                  <img class="lazy" src="" data-src="' . $res . '" alt="">
                
                           </a>
                        </li>
                            
                            
                            
                           

					';
                            $a1 = $a1 + 1;
                            $a2 = $a2 + 1;
                            $o  = 1;
                        }
                    }

                endforeach;
                
                $show.= '                               </ul>
      </div>
      <div class="maAlt cf katSf_66">
         <ul class="maBtns netteSampleSlideBtns">
                                        
                  	';
                
                 $a2   = 1;
                 $k   = 0;
                
                $rows = $mydb->get_results("select * from wp_posts WHERE post_type = 'post' AND post_status = 'publish'  ORDER BY post_date DESC limit 15 ");
                $asd  = ' active';
                global $post;
                foreach ($rows as $post):

                    $a    = get_the_ID();
                    $link = $post->guid;
                    
                    $title = $post->post_title;
                    $date  = $post->post_date;
                    $r     = $mydb->get_results("select * from wp_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND post_parent = '$a'");
                    $o     = 0;
                    foreach ($r as $pag) {
                        if ($o == 0) {
                            $res = $pag->guid;
                            
                            $show.= '  
                            
                             <li id="on' . $k . '">
               <a href="' . $link . '" target="_blank" onclick="window.open(&quot;' . $link . '&quot;,&quot;_blank&quot;)" class="">
                  <p>' . $a2 . '</p>
                  <b><i></i></b>
               </a>
            </li>
                            
				';
                            $asd = ' ';
                            $o   = 1;
                            $a2 = $a2 + 1;
                            $k = $k + 1;
                        }
                    }

                endforeach;
               
            $myfile = fopen("/slider/sag/file_t.txt", "w") ;
            fwrite($myfile, $show);
            fclose($myfile);

        ?>        