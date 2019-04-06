<?php
	session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  h1 {
      position: absolute;
      left: 400px;
      top: 0px;
  }
  h2 {
      position: absolute;
      left: 550px;
      top: 310px;
  }
  h3 {
      position: absolute;
      left: 250px;
      top: 400px;
  }
  </style>
</head>


<body>
	<script type="text/javascript">

		window.onload = function(){
			document.getElementById('create').onsubmit=function() {
				var inputs = document.getElementById("create").elements;
				$.ajax({
					type: "POST",
					url: "create.php",
					data: {name:inputs[0].value, shef:inputs[1].value, adr:inputs[2].value},
					success: function(data){
						if(data == "You did not fill all the fields"){
							alert("You did not fill all the fields");
						}
						else{
							alert("Created");
						}
					}
				})
				return false;
			}
		}
	</script>
	
	<form id="create">
		Название:<br>
		<input type="text" name="name" id="name" value="<?php echo htmlspecialchars($myrow["name"]) ?>"><br>
		<br>
		Шэф:<br>
		<input type="text" name="shef" id="shef" value="<?php echo htmlspecialchars($myrow["shef"]) ?>"><br>
		<br>
		Адрес:<br>
		<input type="text" name="adr" id="adr" value="<?php echo htmlspecialchars($myrow["address"]) ?>"><br>
		<br>
		<input type="submit" value="Создать">
	</form>
	<br>

<form>
<input type="button" value="На главную" onClick='location.href="http://firmcontract/index.php"'>
</form>

</body>
</html>
