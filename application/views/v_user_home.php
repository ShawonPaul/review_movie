<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rating</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
.table {
    table-layout: fixed;
    word-wrap: break-word;
}
	
</style>




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
            <li class="active"><a href="">All games</a></li>
           <li><a href="layout2.php">Trailers</a></li>
            <li><a href="layout3.php">Reviews</a></li>
           
            </ul>
           <ul class="nav navbar-nav navbar-right">
      			<li><a href="#about">Log Out</a></li>
      			<li><a href="#contact"></a></li>
    		</ul>
            
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>




<div class="container">
 <div class="row" style="padding-top: 90px">

 <div class="col-md-12">
 	
 
 	
 
  
  <div class="table-responsive">
  	<table class="table table-bordered" >
  		<thead>
  			<tr>
  				<th>Name</th>
  				<th>Picture</th>
  				<th>Type</th>
  				<th>About</th>
  				<th>Price($)</th>
  				<th>Review</th>
  			</tr>
  		</thead>
  		<tbody>
  		<?php foreach ($data -> result () as $datas) { ?>


  			<tr>
  				<td class="active"><h3><strong><?php echo $datas -> name ?></strong></h3></td>
  				<td class="active"><img src="<?php echo base_url()?>picture/<?php echo $datas -> picture?>" height="100" width="100" alt="done"></td>
  				<td class="warning"><?php echo $datas -> type ?></td>
  				<td class="danger"><?php echo $datas -> about ?></td>
  				<td class="info"><?php echo $datas -> price ?></td>
  				<td class="active"> <center><a class="btn btn-success" href="<?php echo base_url()?>c_user/review/<?php echo $datas -> id; ?>/<?php echo $fixed_name ?>">Click To Review</a></center></td>
  			</tr>
  			<?php } ?>
  		</tbody>
  		
  	</table>
  </div>
  </div>
  </div>



</div>




	
</body>
</html>