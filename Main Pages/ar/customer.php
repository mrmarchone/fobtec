<?php include"header.php";?>
<?php include"nav.php";?>
<div class="customer col-xs-12">
	<div>
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="images/c.jpg" alt="Los Angeles" class="img-respponsive">
			    </div>

			    <div class="item">
			      <img src="images/c2.jpg" alt="Chicago" class="img-respponsive">
			    </div>

			    <div class="item">
                    <a href="success.php">
			         <img src="images/c3.jpg" alt="New York" class="img-respponsive">
                    </a>
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
		</div>
	</div>
</div>
<?php include"sitemap.php";?>
<?php include"footer.php";?>