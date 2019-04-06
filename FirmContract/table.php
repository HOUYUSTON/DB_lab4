<?php
	session_start();

	function get_firms(){
		include ("db.php");
		$result=mysqli_query($db,"SELECT * FROM firm");
		$firms=array();
		while($object=mysqli_fetch_object($result))
		{
			$firms[]=$object;
		}
		mysqli_close($db);
		if(isset($_POST["type"])){
			if($_POST["type"]=='desc'){
				// Desc sort
				usort($firms,function($a,$b){
				    return strtolower($a->name) < strtolower($b->name);
				});
				return $firms;
			}
			elseif($_POST["type"]=='asc'){
				// Asc sort
				usort($firms,function($a,$b){
				    return strtolower($a->name) > strtolower($b->name);
				});
				return $firms;
			}
		}
		else{
			return $firms;
		}
	}
	function get_table(){
 		$table_str='<table><tr><td>id фирмы</td><td>название фирмы</td><td>шэф</td><td>адрес</td></tr>';
		$firms=get_firms();
		foreach ($firms as $firms) {
					$firstLeter = mb_substr($firms->name,0,1);
					$restLeters = mb_substr($firms->name, 1, strlen($firms->name)-1);
    			$table_str.='<tr>';
    			$table_str.='<td>'.$firms->id_firm.'</td><td><a href="profile.php?id='.$firms->id_firm.'">'.$firstLeter .'</a>'.$restLeters.'</td><td>'.$firms->shef.'</td><td>'.$firms->address.'</td>';
    			$table_str.='</tr>';
		}
		$table_str.='</table>';
		return   $table_str;
	}
	echo get_table();
?>
