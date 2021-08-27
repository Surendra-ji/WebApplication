<!DOCTYPE html>
<html>
<head>
	<title>India Corona Update</title>
	<?php include 'links\links.php' ?>
	<?php include 'css\style.php' ?>
	<!-- <?php# include 'index.php' ?> -->
</head>
<body onload="fetch()"> 

	<nav id="navbar" class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#"> COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php#"><img width="25px" height="22px" src="images/home.png"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">IndiaCoronaUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">Contact</a>
      </li>
    </ul> 
  </div>
</nav>
<!-- *****************india corona latest update**************-->
<section class="corona_update container-fluid ">
	<dir class="my-5">
		<h3 class="text-uppercase text-center text-danger">Covid-19 Live update of India</h3>
	</dir>
	<div class="table-responsive">
		<table class=" table table-border table-striped text-center " >
			<tr>
				<th>LastUpdateTime</th>
				<th>State</th>
				<th>Confirmed</th>
				<th>Active</th>
				<th>Recovered</th>
				<th>Deaths</th>
			</tr>
			<?php
			$data =file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);
			//  echo "<pre>";
			//  print_r($coronalive);
			// echo "</pre>";
			$statescount= count($coronalive['statewise']);
			$i=1;
			while($i < $statescount)
			{
				?>
				<tr>
					<td> <?php echo ($coronalive['statewise'][$i]['lastupdatedtime']);  ?></td>
					<td> <?php echo ($coronalive['statewise'][$i]['state']);?></td>
					<td> <?php echo ($coronalive['statewise'][$i]['confirmed']);?></td>
					<td> <?php echo ($coronalive['statewise'][$i]['active']);?></td>
					<td> <?php echo ($coronalive['statewise'][$i]['recovered']);?></td>
					<td> <?php echo ($coronalive['statewise'][$i]['deaths']);  ?></td>
				</tr>
				<?php

				$i++;

			}
			
			?>
		</table>
	</div>
</section>







<!--***************** Top cursor  ***************-->
<div class="container scrolltop float-right pr-5">
<i class="mybtn fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i> </div>

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid "><p>copyright by Surendra</p></div>
</footer> 


<script type="text/javascript">


  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script type="text/javascript">
	// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>

</html>