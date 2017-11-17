<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show Review</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">WE FEEL Games</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">All games</a></li>
            <li><a href="layout2.php">Trailers</a></li>
            <li><a href="layout3.php">Reviews</a></li>
            <li><a href="<?php echo base_url() ?>home/log_in">Log-in</a></li>

              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="padding-top: 90px">
    	<div class="row">
    		<h1 class="bg-primary" style="text-align: center;"><?php  echo $g_name['name'];?></h1></div>
    		<?php 
    		$i=0;
    		 foreach ($h_game -> result () as $row ) {
    		 	$user[$i]= $row->user_name ;
    		 	$i++;
    			
    		}

    		$done= array_unique($user);
    		foreach ($done as $row => $value) {
    		foreach ($h_game  -> result ()  as $game) { 
    			if ( ($game -> user_name  == $value) && ( $game -> h_movie_name == $g_name['name'] )  ) { ?>

    				<div class="row col-md-6 col-md-offset-3" >
    					
    				<center><div class="panel panel-danger">
  						<div class="panel-heading"><?php   echo $value ?></div>
  						<div class="panel-body"> <?php   echo $game -> comment ?></div>
					</div></div></center>

    			<?php }
    		 	
    		 }
    		 } ?>



    			
    		

    		
    	
    	
    </div>
	
</body>
</html>