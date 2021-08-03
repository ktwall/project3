<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: sans-serif;
  }

  .header {
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin: 10px;
      font-size: 20px;
      color: #001C70;
  }

  header,
  footer {
    text-align: center;
    background: #fff5cc;
    padding: 8px 0 8px 0;
  }

  nav ul li {
    display: inline;
  }

  nav a {
    text-decoration: none;
    color: #F2F5FF;
    background: #001C70;
    padding: 5px;
    border-radius: 2px;
  }

  nav a:hover {
    color: #001C70;
    background: #9CD2FF;
  }

  nav a:active{
    color: #001C70;
    background: #9CD2FF;
    font-weight: bold;
  }

  body {
      max-width: 1200px;
      padding: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
  }

  .container {
    padding: 50px 10px 10px 10px;
  }

.error-item {
	list-style: none;
}

</style>


<header>
  <div class="topnav">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li class='error-item'>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
