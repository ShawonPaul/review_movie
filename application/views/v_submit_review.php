<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Review</title>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="layout2.php">Trailers</a></li>
            <li><a href="layout3.php">Reviews</a></li>
           
            </ul>
           <ul class="nav navbar-nav navbar-right">
      			<li><a href="#about">Log Out</a></li>
      			<li><a href="#contact"><?php  echo $fixed_name?></a></li>
    		</ul>
            
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   
    	
    <div class="container">
    	<div class="row" style="padding-top: 150px;">
    		<form class="form-horizontal" method="POST" action="<?php  echo base_url();?>c_user/submit_review/<?php echo $m_id;?>/<?php  echo $fixed_name?>">
  				<div class="form-group">
    				<label for="inputEmail3" class="col-sm-2 control-label">Review</label>
    					<div class="col-sm-7">
      						<textarea class="form-control" rows="4" name="review"></textarea>
    					</div>
  				</div>

 				<div class=form-group>
  	 				<label for="inputPassword3" class="col-sm-2 control-label">Ratings (Out Of Five)</label>
  	 					<div class="col-sm-2">
  	  						<select class="form-control" name="ratings">
  								<option>1</option>
  								<option>2</option>
  								<option>3</option>
  								<option>4</option>
  								<option>5</option>
  							</select>
  	 					</div>
  				</div>

				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      					<button type="submit" class="btn btn-success">Submit</button>
    				</div>
  				</div>
			</form>
    		
    	</div>
    	
    </div>




	
</body>
</html>