<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<?php require'header.php' ?>

	<script type="text/javascript">

	function press(src) {
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("content").innerHTML = load("src")
	    }
	  };

	}

	</script>


</head>
<body>
	<?php require 'navbar.php' ?>
<?php require 'productnav.php' ?>

<div id="content">

</div>


<?php require 'footer.php' ?>
<script type="text/javascript">
$().ajax({
	url:"",
	method:"post",
	success:function(data){
		//do whatever you want to do
		console.log(data);
	},
	error:function(err){
		//Error function
		console.log(err);
	}
	
})
	


$("#content").load("producthome.php");
</script>
</body>
</html>
