 <html>
<head>
<link rel="stylesheet" type="text/css" href="css\Css_adding.css">
<link rel="stylesheet" type="text/css" href="css\nav&footer.css">
<style type="text/css">
	.submit{
	 background-color:white;
    opacity: 0.5; 
    border:1px solid #fff;
    color: black;
	}
	tr{
		padding: : 10px;
	}
</style>
</head>
<body>
<div class="contain">
	
	<header>
		<nav>
			<a href="tea_main.html">Home</a>
			<a href="teas.html" class="checking">Teas</a>
			<a href="">Contact</a>
			<a href="Adding.html" class="click">Add</a>
			<p class="logo">Flora's tea</p>
			<a href="" class="login">Login in</a>
			<a href="" class="sign">Sign up</a>
		</nav>
	</header>
		<p class="shop_your">
			Add your tea
		</p>
	</div>

	<form action="action.php"  method = 'post' enctype = 'multipart/form-data'>	
	<table>
	<tr>
	    <td><label for="fname">Name</label></td>
	    <td><input type="text" id="fname" name="name" placeholder="Name of tea..."></td>
	   </tr>
	    <tr>
	    	<td><label for="lname">Cost</label></td>
	    <td><input type="text" id="lname" name="cost" placeholder="Cost"></td>
	    </tr>
	    <tr>
	     <td><label for="lname">Desctiption</label></td>
	    <td><textarea name="description" placeholder="Desctiption of your tea"></textarea></td>
	    </tr>
	    <tr>
			<td></td>
			<td style = "text-align: right;"> <input type="file" name="image"></td>
			</tr>
	    <tr>
	    <td></td>
	    <td><input type="submit" value="Submit" class="submit"></td></tr>
</table>
</form>	
<footer>
	<div><p class="get_know">Come to Know <br>Flora's Tea Better</p>
	</div>
	<div class="Stores">
		<p class="text">Our Stores</p>
		<hr>
		<p class="shop1">
			500 Terry Francois Street<br> 
			San Francisco,CA 94158<br>
			Tel: 123-456-7890
		</p>
		<p class="shop2">
			500 Terry Francois Street<br> 
			San Francisco,CA 94158<br>
			Tel: 123-456-7890
		</p>
	</div>
	<div class="hourse">
		<p class="text">Openning Hourse</p>
		<hr>
		<p class="Hourse">
			Mon - Fri: 8am - 8pm<br>
			​​Saturday: 9am - 9pm<br>
			​​Sunday: 9am - 10pm
		</p>
	</div>	
</footer>
</body>
</html>