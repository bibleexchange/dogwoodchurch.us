<style>
.item_box{
    height:500px;
}
 
.photo-thumb{
    width:100%;
    height:auto;
    float:left; 
    border: thin solid #d1d1d1;
    margin:0 1em .5em 0;
    float:left; 
}
</style>
<h2>Hello</h2>
<?php
$instagram_uid="2985537231";

$access_token="2985537231.1677ed0.5c113bdaaad04075bc83b102e801f874";
$photo_count=12;
 
$json_link="https://api.instagram.com/v1/users/{$instagram_uid}/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
     
    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
        echo "<p>";
            echo "<p>";
                echo "<div style='color:#888;'>";
                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                echo "</div>";
            echo "</p>";
            echo "<p>{$pic_text}</p>";
        echo "</p>";
    echo "</div>";
}
?>