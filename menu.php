<html>
<head>
<style type="text/css">


#navbar 
	{
		margin: 0;
		padding: 0;
		height: 1em; 
		width: 100%;
	}
	
#navbar li
	{
		list-style: none;
		float: left;
		
	}
	
#navbar li a 
	{
		display: block;
		padding: 0px 15px 3px;
		background-color: #FFFFFF;
		color: #000000;
		text-decoration: none;
		font-size: 1.2em;
	}
	
#navbar li li a
	{
		font-size: 1.0em;
	}
		
#navbar li ul
	{
		display: none; 
		width: 10em; /* Width to help Opera out */
		background-color: #000000;
	}

#navbar li a:hover
	{
	text-decoration: underline;
	}	
	
#navbar li:hover ul 
	{
		display: block;
		position: absolute;
		margin: 0;
		padding: 1px;
	}
	
#navbar li:hover li 
	{
		float: none;
		 
	}
	
#navbar li:hover li a 
	{
		background-color: #FFFFFF;
		color: #000000;
		padding: 5px;
		border-bottom: 1px solid #000000; 
  }
  
#navbar li li a:hover 
	{
		text-decoration: underline;
	}

#navbar .last
	{
		border-bottom: 0px;
	}


</style>
</head>

<body>
<br />
<hr />
<br />

<ul id="navbar">

	<li><a href="#">Youth</a>
		<ul>
			<li><a href="../youth/show_youth.php">Show</a></li>
			<li><a href="../youth/form_youth.php">New</a></li>
			<li class="last"><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#">Member Type</a>
		<ul>
			<li><a href="../membertype/show_membertype.php">Show</a></li>
			<li><a href="../membertype/form_membertype.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#">Badge Log</a>
		<ul>
			<li><a href="../badgelog/show_badgelog.php">Show</a></li>
			<li><a href="../badgelog/form_badgelog.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#"> Badge Type</a>
		<ul>
			<li><a href="../badgetype/show_badgetype.php">Show</a></li>
			<li><a href="../badgetype/form_badgetype.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#">Event Log</a>
		<ul>
			<li><a href="../eventlog/show_eventlog.php">Show</a></li>
			<li><a href="../eventlog/form_eventlog.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#">Event Type</a>
		<ul>
			<li><a href="../eventtype/show_eventtype.php">Show</a></li>
			<li><a href="../eventtype/form_eventtype.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>	
	
	<li><a href="#">Venue</a>
		<ul>
			<li><a href="../venue/show_venue.php">Show</a></li>
			<li><a href="../venue/form_venue.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
	<li><a href="#">Address</a>
		<ul>
			<li><a href="../address/show_address.php">Show</a></li>
			<li><a href="../address/form_address.php">New</a></li>
			<li><a href="#">Find</a></li>
		</ul>
	</li>
	
</ul

</body>
<br />
<hr />
<br />

</html>


