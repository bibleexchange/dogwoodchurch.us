<h2>Pictures</h2>
<?php
$instagram_uid="2246674333";

$access_token="2985537231.1677ed0.5c113bdaaad04075bc83b102e801f874";
$photo_count=20;
 
$json_link="https://api.instagram.com/v1/users/{$instagram_uid}/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

echo "<div id='instagram-feed' class='owl-carousel'>";
	foreach ($obj['data'] as $post) {
	     
	    $pic_text=$post['caption']['text'];
	    $pic_link=$post['link'];
	    $pic_like_count=$post['likes']['count'];
	    $pic_comment_count=$post['comments']['count'];
	    $pic_src=str_replace("http://", "https://", $post['images']['low_resolution']['url']);
	    $pic_src_hires=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
	    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
	    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
	    $pic_width=$post['images']['standard_resolution']['width'];
	          
       
        echo "<div class='item'><a href='$pic_link' target='_blank'><img class='owl-lazy' data-src='{$pic_src}' data-src-retina='{$pic_src_hires}' alt='{$pic_text}'></a><p>{$pic_text}</p></div>";
	}
echo "</div>";

?>

<noscript>
	<div class='col-md-10 col-md-offset-1'>
		<div id='instagram-pics-no-js' class='row'>
			<?php
			$i=0;
			foreach ($obj['data'] as $post) {
			    if($i==8) break;
			     
			    $pic_text=$post['caption']['text'];
			    $pic_link=$post['link'];
			    $pic_like_count=$post['likes']['count'];
			    $pic_comment_count=$post['comments']['count'];
			    $pic_src=str_replace("http://", "https://", $post['images']['low_resolution']['url']);
			    $pic_src_hires=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
			    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
			    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));          
		       
		        echo "<div class='col-md-3'><a href='$pic_link' target='_blank'><img src='{$pic_src}' alt='{$pic_text}'></a></div>";
		        $i++;
			}
			?>
		</div>
	</div>
</noscript>