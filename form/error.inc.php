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
      color: navy;
  }

  nav ul li {
    display: inline;
  }

  nav a {
    text-decoration: none;
    color: navy;
    background: lightblue;
    font-weight: bold;
    padding: 5px;
  }

	nav a:hover {
	  color: yellow;
	}

  body {
      background-color: lightyellow;
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
