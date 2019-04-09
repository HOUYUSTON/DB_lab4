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

		function search() {
				var inputs = document.getElementById("search").elements;
				$.ajax({
					type: "POST",
					url: "table2.php",
					data: {contract_from:inputs[0].value, contract_to:inputs[1].value},
					success: function(data){
						$("#table2").html(data);
						desc2.hidden = true;
						asc2.hidden = true;
					}
				})
				return false;
		}

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
			<br><br><center><form id="search"><input type="text" name="contract_from" id="contract_from"><input type="text" name="contract_to" id="contract_to">
			<input type="button" value="Поиск" onClick="search()"><br></form></center><br>
			<center><input type="button" name="desc2" id="desc2" value="Нисходящая" onclick="get_sorted2('desc')"><input type="button" name="asc2" id="asc2" value="Восходящая" onclick="get_sorted2('asc')"></center>
			<script> get_table2() </script>
			<center><div id="table2"></div></center>
	</body>
</html>
