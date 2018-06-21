<?php	
	$book_id=6;
	function set_data(){
		$connect =pg_connect("host=localhost dbname=project user=postgres password=1234")or die("Error");
		if(!$connect){
			echo "Failed to connect to the server";
		}
		$isbn = $GET['isbn'];
		$title = $GET['Title'];
		$author=$GET['Author'];
		$Language= $GET['Language'];
		$Year= $GET['Year'];
		$Genre= $GET['Genre'];
		$Price= $GET['Price'];
		$Description= $GET['Description'];
		$quantity=$GET['Quantity'];
		$image = $_FILES['image']['name'];

		$select_au_id="SELECT author_id from author where author_name=$author";
		$author_id=pg_query($select_au_id);

		if($author_id==NUll){
			$sql2="INSERT INTO author(author_name) VALUES('$author')";
			pg_query($sql2);
			$author_id=pg_query($select_au_id);
		}

		
		$sql = "INSERT INTO book_detail(isbn,title,description,language,year,genre) VALUES ('$isbn', '$title', '$description','$Language','$Year','$Genre')";

		$sql1="INSERT INTO book_id(isbn,author_id,image,price,quantity) VALUES ('$isbn','$query','$image','$price','$quantity')";		mysqli_query($connect,$sql);
		
		$result=pg_query($connect,$sql);
		$result1=pg_query($connect,$sql1);		
		if(!$result){
			echo 'Not inserted';
		}
		else {
			header("Location: teas.php");
			die();
		}	
	}
	set_data();
?>

