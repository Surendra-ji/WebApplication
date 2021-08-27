<style type="text/css">

	html
	{
	scroll-behavior: smooth;	
	}
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }	
.nav_style{ 
background-color: #0281D5;
 }

.nav_style a{
	color: white;
}	

/*///////////////main header\\\\\\*/
.main_header{
	height: 450px;
	width: 100%;
}

h3{
	margin: 0px;
	font-size: 20px;
}
h5{
	margin: 5px;
	font-size: 10px;
}


.rightside h1{
	font-size: 3rem;
}
.corona_rot img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% {transform: rotate(0);}
	100% {transform: rotate(360deg);}
}
.leftside img{
animation: 	heartbeat 5s linear infinite;
}

@keyframes heartbeat{
	0%{ transform: scale(.75); }
	20%{ transform: scale(1); }
	40%{ transform: scale(.75); }
	60%{ transform: scale(1); }
	80%{ transform: scale(.75); }
	100%{ transform: scale(.75); }
}

.sub_section{
	background-color: #fbfafd;
}

/*  *********footer********/
.footer_style{
	background-color: #0281D5;
}
.footer_style p{
	margin-bottom: 0;
}
/* *****************top scroll ***************** */
#myBtn{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer; 
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover{
	background: #606060;
}

/*////////////// responsive ////////////////*/


@media(max-width: 768px){
	.main_header{height: 700px; text-align: center; }
	.main_header h1{
		text-align: center;
		padding: 0;
		width:100%;
		font-size: 30px;
	}

}

.map-container {
    position: relative;
}
.geocoder {
    position: absolute;
    z-index: 1;
    /* width: 50%; */
    right: 50px;
    /* margin:auto;     */
    top: 10px;
    }
    .mapboxgl-map {
    font:
    font-size: 10px;
}
    .mapboxgl-ctrl-geocoder {
    min-width: 100%;
    }

#map {
    width: 100%;
    height: 100vh;
}


.test {
    background-color: papayawhip;
    color: rgb(56, 53, 53);
    position: absolute;
}

#navbar {
  overflow: hidden;
  
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}






</style>     