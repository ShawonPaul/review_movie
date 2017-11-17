<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
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
            <li class="active"><a href="index.php">All games</a></li>
            <li><a href="layout2.php">Trailers</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="<?php echo base_url() ?>home/log_in">Log-in</a></li>

              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>





    <div class="container">


    
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-top: 90px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url(); ?>/pics/one.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>/pics/two.jpg" alt="Chicago" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="<?php echo base_url(); ?>/pics/three.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




 <div class="row" style="padding-top: 90px">

 <div class="col-md-12">
  
 
  
 
  
  <div class="table-responsive">
    <table class="table table-bordered" >
      <thead>
        <tr>
          <th>Name</th>
          <th>Picture</th>
          <th>Ratings</th>
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
          <td> 
          <?php  
          $temp= $datas -> name;

       
        $i=0;
        $rating = array ();
        
          foreach ($all -> result ()  as $row) {
            if (    $row -> h_movie_name ==  $temp ) {
              $rating [$i++]= $row -> rating ;

            }


             
             
          }
          //print_r($rating);
          $average = array_sum($rating) / count($rating); ?>

         


          
          <center>
          <?php for ($j=0; $j < floor($average) ; $j++ ) { ?>
             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
              <?php } ?> </center> <center>
              <?php  echo  round($average,2); ?> </center>
            
          


           

         

          </td>
          <td class="warning"><?php echo $datas -> type ?></td>
          <td class="danger"><?php echo $datas -> about ?></td>
          <td class="info"><?php echo $datas -> price ?></td>
          <td class="active" style="padding-top: 40px"> <center><a class="btn btn-success" href="<?php  echo base_url()?>c_user/show_review/<?php echo $datas -> id ?>">Click To See Review</a></center></td>

          
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