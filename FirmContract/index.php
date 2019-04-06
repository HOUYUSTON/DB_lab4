<?php
	session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="windows-1251">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<script type="text/javascript">

		function get_table(){
			$.ajax({
				url: "table.php",
				dataType: "html",
				success: function(data){
					$("#table").html(data);
				}
			})
		}

		function get_table2(){
			$.ajax({
				url: "table2.php",
				dataType: "html",
				success: function(data){
					$("#table2").html(data);
				}
			})
		}

		function get_sorted(type){
			$.ajax({
				type: "POST",
				url: "table.php",
				data: {type:type},
				success: function(data){
						$("#table").html(data);
				}
			})
		}

		function get_sorted2(type){
			$.ajax({
				type: "POST",
				url: "table2.php",
				data: {type:type},
				success: function(data){
						$("#table2").html(data);
				}
			})
		}
		</script>
			<br>
			<center><input type="button" value="Нисходящая" onclick="get_sorted('desc')"><input type="button" value="Восходящая" onclick="get_sorted('asc')"></center>
			<script> get_table() </script>
			<center><div id="table"></div></center>
			<br>
			<center><input type="button" value="Добавить фирму" onclick='location.href = "add_firm.php"'></center>
			<br>
			<center><input type="button" value="Нисходящая" onclick="get_sorted2('desc')"><input type="button" value="Восходящая" onclick="get_sorted2('asc')"></center>
			<script> get_table2() </script>
			<center><div id="table2"></div></center>
	</body>
</html>
