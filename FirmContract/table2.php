<?php
	session_start();

	function get_contracts(){
		include ("db.php");
		$result=mysqli_query($db,"SELECT * FROM contract");
		$contracts=array();
		while($object=mysqli_fetch_object($result))
		{
			$contracts[]=$object;
		}
		mysqli_close($db);
		if(isset($_POST["type"])){
			if($_POST["type"]=='desc'){
				// Desc sort
				usort($contracts,function($a,$b){
				    return strtolower($a->sumd) < strtolower($b->sumd);
				});
				return $contracts;
			}
			elseif($_POST["type"]=='asc'){
				// Asc sort
				usort($contracts,function($a,$b){
				    return strtolower($a->sumd) > strtolower($b->sumd);
				});
				return $contracts;
			}
		}
		else{
			return $contracts;
		}
	}
	function get_table(){
 		$table_str='<table><tr><td>id договора</td><td>id фирмы</td><td>номер договора</td><td>название договора</td><td>стоимость</td><td>с</td><td>по</td><td>аванс</td></tr>';
		$contracts=get_contracts();
		foreach ($contracts as $contracts) {
    			$table_str.='<tr>';
    			$table_str.='<td>'.$contracts->id_c.'</td><td>'.$contracts->id_firm.'</td><td>'.$contracts->numberd.'</td><td>'.$contracts->named.'</td><td>'.$contracts->sumd.'</td>
					<td>'.$contracts->datastart.'</td><td>'.$contracts->datafinish.'</td><td>'.$contracts->avans.'</td>';
    			$table_str.='</tr>';
		}
		$table_str.='</table>';
		return   $table_str;
	}
	echo get_table();
?>
