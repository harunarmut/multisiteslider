 <?php
require_once ('../../wp-config.php');

$a1 = 0;
$a2 = 1;
$mydb = new wpdb('/*dbusername*/', '/*password*/', '/*dbname*/', 'localhost');
$rows = $mydb->get_results("select * from wp_posts WHERE post_type = 'post' AND post_status = 'publish'  ORDER BY post_date DESC limit 30 ");
$asd = ' active';
global $post;

foreach($rows as $post):
	$a = get_the_ID();
	$link = $post->guid;
	$title = $post->post_title;
	$date = $post->post_date;
	$r = $mydb->get_results("select * from wp_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND post_parent = '$a'");
	$o = 0;
	if ($r)
		{
		foreach($r as $pag)
			{
			if ($o == 0)
				{
				$res = $pag->guid;
				$show.= '<li data-slide-to="' . $a1 . '" class=""><a href="' . $link . '" target="_blank"><span>' . $a2 . '</span></a></li>

					';
				$a1 = $a1 + 1;
				$a2 = $a2 + 1;
				$o = 1;
				}
			}
		}
	  else
		{
		$show.= '<li data-slide-to="' . $a1 . '" class=""><a href="' . $link . '" target="_blank"><span>' . $a2 . '</span></a></li>

					';
		$a1 = $a1 + 1;
		$a2 = $a2 + 1;
		$o = 1;
		}

endforeach;
$show.= '                           
                                    </ul>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner second" style="" role="listbox">
                                        
                  	';
$rows = $mydb->get_results("select * from wp_posts WHERE post_type = 'post' AND post_status = 'publish'  ORDER BY post_date DESC limit 30 ");
$asd = ' active';
global $post;

foreach($rows as $post):
	$a = get_the_ID();
	$link = $post->guid;
	
	$title = $post->post_title;
	$date = $post->post_date;
	$r = $mydb->get_results("select * from wp_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND post_parent = '$a'");

	$o = 0;
	$kt = 0;
	if ($r)
		{
		foreach($r as $pag)
			{
			if ($o == 0)
				{
				if ($kt == 1)
					{
					$res = get_the_post_thumbnail_url($a, 'full');
					}
				  else
					{
					$res = $pag->guid;
					}

				$show.= '  
                                           <div class="item ' . $asd . '">
                                            <div class ="sltitle">  <a style= "color:white;" href="' . $link . '" target="_blank"> ' . $title . '</a></div>
                                              <a href="' . $link . '" target="_blank">
                                              <img alt="' . $title . '" class="lazy" src="" data-src="' . $res . '">
                                              </a>
                                           </div>
    
    
    
    			
    					';
				$asd = ' ';
				$o = 1;
				}
			}
		}
	  else
		{
		$kt = 1;
		$res = get_the_post_thumbnail_url($a, 'full');
		$show.= '  
                                           <div class="item ' . $asd . '">
                                            <div class ="sltitle">  <a href="' . $link . '" target="_blank"> ' . $title . '</a></div>
                                              <a href="' . $link . '" target="_blank">
                                              <img alt="' . $title . '" class="lazy" src="" data-src="' . $res . '">
                                              </a>
                                           </div>
    
    
    
    			
    					';
		$asd = ' ';
		$o = 1;
		}

endforeach;
$show.= '             
                                       </div>
    	';
echo $show;
$myfile = fopen("../datas/testfile_t.txt", "w");
fwrite($myfile, $show);
fclose($myfile);
?>       
            
