<html>
<head>
	<title>Holiness Christian Academy</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Lato:700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-xWeRKjzyg6bep9D1AsHzUPEWHbWMzlRc84Z0aG+tyms= sha512-mGIRU0bcPaVjr7BceESkC37zD6sEccxE+RJyQABbbKNe83Y68+PyPM5nrE1zvbQZkSHDCJEtnAcodbhlq2/EkQ==" crossorigin="anonymous">
	<link href="css/application.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="favicon.ico">
	
	
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

		

<div class="container-fluid">
	
	<div class="row">
		<?php include('partials/headline.html'); ?>
	</div>
	
	<div class="row">
		<table class="table-to-chart">
			<caption>Table 1</caption>
			<thead>
			<tr>
				<th></th>
				<th>Private School</th>
				<th>Public School</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Reading</td>
				<td>91</td>
				<td>77</td>
			</tr>
			<tr>
				<td>Math</td>
				<td>83</td>
				<td>73</td>
			</tr>
			<tr>
				<td>Writing</td>
				<td>92</td>
				<td>79</td>
			</tr>
			<tr>
				<td>U.S. History</td>
				<td>87</td>
				<td>68</td>
			</tr>
			<tr>
				<td>Geography</td>
				<td>90</td>
				<td>73</td>
			</tr>
			<tr>
				<td>Science</td>
				<td>77</td>
				<td>64</td>
			</tr>
			<tbody>
		</table>
	</div>
	<div class="row">
		<table class="table-to-chart">
			<caption>Table 1</caption>
			<thead>
			<tr>
				<th></th>
				<th>Private School</th>
				<th>Public School</th>
			</tr>
			<tr>
				<td>School</td>
				<td>80</td>
				<td>56</td>
			</tr>
			<tr>
				<td>Teachers</td>
				<td>76</td>
				<td>58</td>
			</tr>
			<tr>
				<td>Standard</td>
				<td>80</td>
				<td>56</td>
			</tr>	</thead>
			<tbody>
		
			</tbody>
		</table>
	</div>

	
	<div class="row">
		<?php include('partials/curriculum.html'); ?>		
	</div>
	<div class="row">	
		<?php include('partials/reputation.html'); ?>
	</div>
	<div class="row">	
		<?php include('partials/facebook-notifications.html'); ?>					
	</div>
	<div class="row">
		<?php include('partials/contact.php'); ?>
	</div>
			
</div>
    
	<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

	<?php include('partials/footer.html'); ?>
		
	<?php include('partials/js-links.html'); ?>
	
	<script src="js/application.js"></script>
	
	
</body>

</html>