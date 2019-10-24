<!DOCTYPE html>
<html>
<head>
<script>
	function queryParam(){
		var params = new URLSearchParams(location.search);
		if(params.has('page')){
			var page = params.get('page');
			var ele = document.getElementById(page);
			if(ele){
				let home = document.getElementById('home');
				let about = document.getElementById('about');
				home.style.display="none";
				about.style.display = "none";
				ele.style.display = "block";
			}
		}
		else{
			let home = document.getElementById('home');
			home.style.display = "block";
		}
	}
</script>
</head>
<body style= "background-color:<#FFDAB9;">
<body onload="queryParam();">
	<header>
		<nav> 
			<a href="?page=home">Home |</a>
			
			<a href="?page=about">About |</a>
			<!--Create route for Home-->
			<!--Create route for About-->
		</nav>
	</header>
	<div id="home">

	<h2><center>  HomePage!</center> </h2>
	
	<p>Take the survery now </p>
        </div>
	<div id="about">
		<!-- About page using HTML5 Semantics-->
		<article>
  			<h1><center> Are you ready to take the survery</center> </h1>
		</article>
		<p>  Please <dfn>fill out the information </dfn> to take the survery </p>
		<main>
  		
		</main>
		<aside>
  			<p> We will need your age and your  full name before taking the survery </p>
		</aside>
	<footer>
                <p>Posted by: Swamay Mehta </p>
                <p>Contact information: <a href="mailto:someone@example.com"> sm2758@njit.edu</a>.</p>
        </footer>
	<a href="https://web.njit.edu/~nd348/IT202/introhtml5.html?page=home">Click here to go back to homepage</a>
	<details>
  	<summary>Thank You</summary>
	</details>

	</div>
	
 
</body>
</html>




