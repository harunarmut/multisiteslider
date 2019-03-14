<?php

include '../../site3/wp-config.php';
global $wpdb, $page;
$mydb = new wpdb('/*dbusername*/', '/*password*/', '/*dbname*/', 'localhost');
$num = 6;
$rows25 = $mydb25->get_results("select * from medya_posts WHERE post_type = 'post' AND post_status = 'publish'  ORDER BY post_date DESC limit 6 ");

?>
    <?php global $post; ?>
    <?php foreach ($rows25 as $post25): ?>
    <?php setup_postdata($post25); ?>
    <?php       
$a= $post25->ID;
$a=intval($a);
$link =  $post25->guid;
$title=$post25->post_title;

$_haberICERIK[$num] = $link;
$r = $mydb25->get_results("select * from medya_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND post_parent = '$a'");   
if($r){
foreach ($r as $pag) {
$res =  $pag->guid;
$res = str_replace("http://", "https://", $res);
$link = str_replace("http://", "https://", $link);
echo $res;
$show.= '	<div class="fblock">

   
      <a href="'.$link.'">
        <div class="fb_image">
          <img src="" data-src="timthumb.php?src='.$res.'&w=155&h=120" class="lazy fb_image wp-post-image" alt="" srcset="'.$res.' 250w, '.$res.' 500w" sizes="(max-width: 180px) 100vw, 180px" />			
        </div>
        <div class="baslik" >'.$title.'
        </div>
      </a>
    
  </div>';	
  }
    
}else{
    
    
    $tt = $mydb25->get_results("select * from medya_postmeta WHERE post_id = '$a'");
    foreach ($tt as $pa) {
        if($pa->meta_key == "_thumbnail_id"){
            $a= $pa->meta_value;
            
        }
        
        }
        
$r = $mydb25->get_results("select * from medya_posts WHERE post_type = 'attachment' AND post_status = 'inherit'  AND ID = '$a'");   

    foreach ($r as $pag) {
$res =  $pag->guid;
 echo $res;
$res = str_replace("http://", "https://", $res);
echo $res;
$show.= '	<div class="fblock">

   
      <a href="'.$link.'">
        <div class="fb_image">
          <img src="" data-src="timthumb.php?src='.$res.'&w=155&h=120" class="lazy fb_image wp-post-image" alt="" srcset="'.$res.' 250w, '.$res.' 500w" sizes="(max-width: 180px) 100vw, 180px" />			
        </div>
        <div class="baslik" >'.$title.'
        </div>
      </a>
    
  </div>';	
  }
    
    
}
 endforeach; 
 
 echo $show;
            $myfile = fopen("file_m.txt", "w") ;
            fwrite($myfile, $show);
            fclose($myfile);
          

 
    ?>