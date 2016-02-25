<html>
<head>
	<title>Holiness Christian Academy</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<?php include('partials/css-links.html'); ?>
	
</head>
<body>
	
	<div id="fb-root"></div>
	
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1529479753993292";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	

	
	<div class="container">
		<?php include('partials/navbar.html'); ?>
	</div>
	
<div class="wrapper">	

    <div class="container">
        
		<?php include('partials/headline.html'); ?>
		
		<div class="row">
			
			<div class="col-sm-8">
				<?php include('partials/curriculum.html'); ?>
				<?php include('partials/staff.html'); ?>
				<?php include('partials/reputation.html'); ?>
			</div>
			
			<div class="col-sm-4">
				<?php include('partials/facebook-notifications.html'); ?>
			</div>	
			
			<div class="col-sm-8">
				<?php include('partials/location.html'); ?>
			</div>
			
		</div>
		

		
    </div>
    
	<div class="push"><!--//--></div>
</div>

	<?php include('partials/footer.html'); ?>
		
	<?php include('partials/js-links.html'); ?>	
	
</body>

</html>