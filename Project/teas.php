<html>
<head>
<link rel="stylesheet" type="text/css" href="css\Css_ties.css">
<link rel="stylesheet" type="text/css" href="css\nav&footer.css">
</head>
<body>
	<div class="contain">
	<header>
		<nav>
			<a href="" class="checking">Home</a>
			<a href="teas.html" >Teas</a>
			<a href="">Contact</a>
			<a href="Adding.html">Add</a>
			<p class="logo">Flora's tea</p>
			<a href="admin.html" class="login">Login in</a>
			<a href="" class="sign">Sign up</a>
		</nav>
	</header>
		<p class="shop_your">
			Shop Your Favorite Tea
		</p>
</div>
<div class="main">
	<div class="description">
		<p id="shop">Shop by</p>
		<hr>
		<p class="c"> Collection<p>
		<button>All</button><br>
		<button>Herbal Tea</button><br>
		<button>Special Edition</button>
		<hr>
		<p class="c">Price</p>
		<button id = "desc">По цене</button>
		<hr>
		<option class="Size">Size</option>
		<div>
      		<input type="checkbox" id="art" name="interest" value="art">
     		 <label for="art">125Gr</label>
    	</div>
     	<div>
     	 <input type="checkbox" id="art" name="interest" value="art">
     	 <label for="art">200Gr</label>
   		 </div>
     	<div>
      	<input type="checkbox" id="art" name="interest" value="art">
      	<label for="art">300Gr</label>
    	</div>
		<hr>
	</div>
	<div class="list">
		<div id="contain">
			<?php
			function get_data(){
				$connect = mysqli_connect('localhost', 'root', '', 'project');
				$query = "SELECT * FROM project1 INNER JOIN summa ON summa.id = project1.id";
				$result = mysqli_query($connect, $query);
				$data = array();
				while($row = mysqli_fetch_array($result)){
					$data[] = array(
					'title' => $row['title'],
					'description' => $row['description'],
					'price' => $row['price'],
					'image' => $row['image']

					);
				}

				return json_encode($data, JSON_UNESCAPED_UNICODE);
			}

			function show(){
				$json_data = file_get_contents('data.json');
				$json = json_decode($json_data, true);
				foreach ($json as $item) {
					echo "
						<div class = 'con1'>
							<img src = css/images/teas/".$item['image'].">
							<div class = 'titles'>
								<p>". $item['title']."</p>
								</div>
								<div class='price'>
								<p>". $item['price'] . " </p> 	
								
							</div>
						
						</div>";
						

				}
			}
			show();

			$file = 'data.json';
			file_put_contents($file, get_data());

		?>

		</div>
		</div>
</div>
</div>
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
<script type="text/javascript" src = "java.js" defer></script>

	
</footer>
</body>
</html>