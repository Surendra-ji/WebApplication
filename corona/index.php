<!DOCTYPE html>
<html>
<head>

	<title>CORONA GO</title>
	<?php include 'links\links.php' ?>
	<?php include 'css\style.php' ?>
	<?php include 'condb.php' ?>	
	   
</head>
<body onload="fetch()"> 
	<img src="images/bhu.png" class="container-fluid">
	<nav id="navbar" class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#"> COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#"><img width="25px" height="22px" src="images/home.png"> <span class="sr-only">(current)></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaCoronaLive.php">IndiaCoronaUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul> 
  </div>
</nav>
<div class=" main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-4 col-md-4 col-12 order-lg-1 order-2">
		<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
			<img src="images/eksth.png" width="350" height="350">
		</div>
		</div>
		
		<div class="col-lg-8 col-md-8 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1 >Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" width="55" height="55"></span>na Virus</h1>
			</div>
		</div>
	
	</div>

</div > 

<!-- ***************** corona latest Map update**************-->
<section class="container-fluid">
	<h1 class="text-uppercase text-center text-danger">Covid-19 Live updates</h1>
<div class="map-container" >	
	 <div id="geocoder" class="geocoder"></div>
<div id='map'></div>
</div>
</section>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXNoLWNvZGVyMTIiLCJhIjoiY2trcDM1dG40MnQ4NTJubndrYjNjc3JhOSJ9.4Ea3NhxvnnHCykWNbThxqQ';
    var map = new mapboxgl.Map({
    container: 'map',
    //style: 'mapbox://styles/mapbox/satellite-v9', 	//normal map
    style: 'mapbox://styles/mapbox/dark-v10', 					// dark map   
    //style: 'mapbox://styles/mapbox/light-v10',				//light map
    zoom:1.5    
    });
</script>

   
<!-- Table for world corona update  -->
   
<!-- 	<dir class="mb-3">
		<h3 class="text-uppercase text-center text-danger">Covid-19 Live updates</h3>
	</dir>
	<div class="table-responsive">
		<table class=" table table-border table-striped text-center " id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>
	</div> -->





<!-- ************** About COVID ***********-->
<div class="container-fluid sub_section pd-5 pt-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-3">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/aboutcorona.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19(Corona-Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
			You can become infected by coming into close contact (about 6 feet or two arm lengths) with a person who has COVID-19. COVID-19 is primarily spread from person to person.		
			</p>
			<p>Coronaviruses are a lagre family of viruses which may cause illiness in animals or humans. In humans, serveral coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
			</p>			
		</div>		
	</div>
</div>
<!--**************** Symptoms************-->
<div class="container-fluid pd-5 pt-5 " id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid " width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/runny nose.png" class="img-fluid " width="120" height="120">
				<figcaption>Runny nose</figcaption>
				</figure></div>

				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/fever.webp" class="img-fluid " width="120" height="120">
				<figcaption>Fever</figcaption>
				</figure></div>
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid " width="120" height="120">
				<figcaption>Cold</figcaption>
				</figure></div>
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/tiredness.png" class="img-fluid " width="120" height="120">
				<figcaption>Tiredness</figcaption>
				</figure></div>
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/breathing problem.png" class="img-fluid " width="120" height="120">
				<figcaption>Difficulty breathing (severe cases)</figcaption>
				</figure></div>

		</div>
	</div>

<!--**************** Prevention ************-->
<div class="container-fluid sub_section pd-5 pt-5 " id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/handwash.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>Wash your hands regularly for 20 seconds, soap and or alcohol-based hand rub.</p>
			    </div>
			</div>
		</div>
				
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/facemask.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
			    </div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/distance.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
			    </div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/stay home.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>Stay home and self-isolate from others in the household if you feel unwell.</p>
			    </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/news.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>Stay informed by watching news & follow the recommended practices.</p>
			    </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-mg-4 col-12">
					<figure >
						<img src="images/sick.png" class="img-fluid" width="90" height="90">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12 ">
				<p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
			    </div>
			</div>
		</div>
	</div>
</div>
</div>
<!--************ Contact usss *********-->
<div class="container-fluid  pd-5 pt-5 " id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us ASAP</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">


<div class="form-group">
    <label >Patient name</label>
    <input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="Email" class="form-control" name="email"placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label >Mobile number</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
     <label >Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" name="coronasym[]" id="customcheckbox1" value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" name="coronasym[]" id="customcheckbox2" value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" name="coronasym[]" id="customcheckbox3" value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficult In Breath</label>
  </div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" name="coronasym[]" id="customcheckbox4" value="tired">
    <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
  </div>


    </div>
    
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" onclick="doSomething();">Submit</button>
</form>

			</div>
		</div>
	</div>
</div>
</div>
<!--***************** Top cursor  ***************-->
<div class="container scrolltop float-right pr-5">
<i class="mybtn fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i> </div>

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid "><p>© 2019-22, Banaras Hindu University, [BHU], Varanasi-221005, U.P., India.</p><p>Copyright by Team BHU</p></div>
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

  // api for world corona update 

	/*function fetch()
	{
		$.get("https://api.covid19api.com/summary",
		function(data){
			//console.log(data['Countries'].length);
			var tbval =document.getElementById('tbval');
			for(var i=1;i<(data['Countries'].length);i++){
				var x= tbval.insertRow();
				x.insertCell(0);
				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
				tbval.rows[i].cells[0].style.background='#7a4a91';
				tbval.rows[i].cells[0].style.color='#fff';

				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
				tbval.rows[i].cells[1].style.background='#4bb7d8';

				x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
				tbval.rows[i].cells[2].style.background='#9cc850';

				x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
				tbval.rows[i].cells[3].style.background='#f36e23';

				x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
				tbval.rows[i].cells[4].style.background='#4bb7d8';

				x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
				tbval.rows[i].cells[5].style.background='#9cc850';

				x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
				tbval.rows[i].cells[6].style.background='#f36e23';
				}
			} 

		);
	}
*/
function doSomething() { 
    $.get("condb.php"); 
    return false; 
}
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162879788-1');
</script>

<script type="text/javascript">
	function updateMap(){
    console.log("Updating data...")
    fetch("https://corona-api.com/countries")
    .then(response => response.json())
    .then(rsp =>{
        console.log(rsp.data)
        rsp.data.forEach(array => {
            latitude = array.coordinates.latitude,
            longitude = array.coordinates.longitude,
            todayCases = array.today.confirmed,
            todayDeath = array.today.deaths
            totalCases = array.latest_data.confirmed
            totalDeath = array.latest_data.deaths
            totalRecovered = array.latest_data.recovered
            cases = array.latest_data.confirmed,
            countryName = array.name
          
            if (cases >= 255){
                color="rgb(255,0,0)"
            }
            else{
                color = `rgb(${cases}, 0, 0)`
            }
            
            // let testingTemplate = "<style>h1{position:absolute; display: none; left:100px;}</style><h1>" + cases + "</h1>";
            var popup = new mapboxgl.Popup({
                // offset:[, -50],
                closeButton:false,
                className:"test"
                }
            )
            .setHTML(

                "<div>" +"<h3>" + countryName +"</h3>" + "<h5>" +"Today Cases: " +
                todayCases+ "</h5>" + "<h5>Today Death: " + todayDeath + "</h5>"+
                "<h5>Total Cases: " + totalCases+ "</h5>" + "<h5>Total Death: " +    
                totalDeath+ "</h5>" + "<h5>Total Recovered: " + totalRecovered + "</h5>" +
                "<h5> Death Rate: " + ((100/totalCases) * totalDeath).toFixed(2) + "</h5>" +
                "<h5> Recovery Rate: " + ((100/totalCases) * totalRecovered).toFixed(2) + "</h5>" +
                "</div>"

            );


            let marker = new mapboxgl.Marker({
                draggable: false,
                color: color
                })
                .setLngLat([longitude, latitude])
                .addTo(map)
                marker.setPopup(popup);
                
            // get the marker element
            const element = marker.getElement();
            element.id = 'marker'
            // hover event listener
            element.addEventListener('mouseenter', () => popup.addTo(map));
            element.addEventListener('mouseleave', () => popup.remove());
        });
            
            // Add zoom and rotation controls to the map.
            map.addControl(new mapboxgl.NavigationControl());
            var geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                });
                 
            document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

    })
}

updateMap()
let interval = 10000000;
setInterval(updateMap , interval)

</script>

</body>


</html>
