<?php 
	$fb_page_id = "191297651041762"; 

	 // get events for the next x years
	$year_range = 1;
	 
	// automatically adjust date range
	// human readable years
	date_default_timezone_set('America/New_York');
	$since_date = date('Y-m-d');
	$until_date = date('Y-12-31', strtotime('+' . $year_range . ' years'));
	 
	// unix timestamp years
	$since_unix_timestamp = strtotime($since_date);
	$until_unix_timestamp = strtotime($until_date);
	
	$access_token = "1683706391887162|QeWGwexL5HqrDiwLgjLASch7G7s";
	
	$fields="id,name,description,place,timezone,start_time,cover";


	//https://graph.facebook.com/191297651041762/events/attending/?fields=&access_token=1683706391887162|QeWGwexL5HqrDiwLgjLASch7G7s
 
	$json_link = "https://graph.facebook.com/{$fb_page_id}/events/attending/?fields={$fields}&access_token={$access_token}&since={$since_unix_timestamp}&until={$until_unix_timestamp}";
	 
	$json = file_get_contents($json_link);
	
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
 
    // count the number of events
    $event_count = count($obj['data']);
 
    for($x=0; $x<$event_count; $x++){
        // facebook events will be here
        	// set timezone
	date_default_timezone_set($obj['data'][$x]['timezone']);
	 
	$start_date = date( 'l, F d, Y', strtotime($obj['data'][$x]['start_time']));
	$start_time = date('g:i a', strtotime($obj['data'][$x]['start_time']));
	  
	$pic_big = isset($obj['data'][$x]['cover']['source']) ? $obj['data'][$x]['cover']['source'] : "https://graph.facebook.com/{$fb_page_id}/picture?type=large";
	 
	$eid = $obj['data'][$x]['id'];
	$name = $obj['data'][$x]['name'];
	$description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
	 
	// place
	$place_name = isset($obj['data'][$x]['place']['name']) ? $obj['data'][$x]['place']['name'] : "";
	$city = isset($obj['data'][$x]['place']['location']['city']) ? $obj['data'][$x]['place']['location']['city'] : "";
	$country = isset($obj['data'][$x]['place']['location']['country']) ? $obj['data'][$x]['place']['location']['country'] : "";
	$zip = isset($obj['data'][$x]['place']['location']['zip']) ? $obj['data'][$x]['place']['location']['zip'] : "";
	 
	$location="";
	 
	if($place_name && $city && $country && $zip){
	    $location="{$place_name}, {$city}, {$country}, {$zip}";
	}else{
	    $location="Location not set or event data is too old.";
	}
	
	echo "<div class='col-md-4'>";

    echo "<h3>{$name}</h3>";
  
    echo "<h4>{$start_date} at {$start_time}</h4>";
  
    echo "<p>{$location}</p>";
  
    echo "<p>{$description}</p>";
  
    echo "<a href='https://www.facebook.com/events/{$eid}/' target='_blank'>View on Facebook</a>";

	echo "</div>";
    }
	
?>