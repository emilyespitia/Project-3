<style type="text/css">
* {margin: 0;
  padding: 0;
  border: 0;
}

body{
  background: linear-gradient(45deg, white, #eff0f2) fixed;
}

.container {
  padding: 60px;
  max-width: 900px
  margin:0 auto;
  text-align: center;
}

header{
  padding: 60px 0px 0px 0px
}

nav{
  padding: 50px 0px 0px 0px;
  width: 450px;
  margin: 0 auto;
}

nav ul li {
    display: inline;
    text-decoration: none;
    padding: 100px 10px;
    text-align: center;
  }

nav ul li a{
   text-decoration: none;
   color: black;
   font-size: 32px;
 }

 nav ul li
 a:hover {
   color: #f1b7a7;
 }


<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>


<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
