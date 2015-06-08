<?php
include "includes/app.php";


	function printtable($tablename){
		global $DB;
		$result=$DB->query("SELECT * FROM ".$tablename." ");
		$fields=array();
		while ($field = $result->fetch_field()){
			$fields[]=$field->name;
		}
		?>
		<table border="1" style="margin-bottom:100px;">
		<tr><td>this is table <?php echo $tablename;?></td> </tr>

		<tr>
		<?php for($i=0;$i<count($fields);$i++){ ?>
			<td>
				<?php echo $fields[$i]; ?>
			</td>
		<?php } ?>
		</tr>
		<?php
		while($row=$result->fetch_array()){
		?>
			<tr>
			<?php for($i=0;$i<count($fields);$i++){ ?>
				<td>
					<?php echo substr($row[$fields[$i]],0,50); if(strlen($row[$fields[$i]])>50) echo "..."; ?>
				</td>
			<?php } ?>
			</tr>
		<?php } ?>
		</table>
<?php
	}


?>
<html><head>

</head>
<body>

<?php 



$temp=Sql::getArray("show tables");
$need=array("users","questions","conv","soln","notf","solndb","expert","mytopics");

for($i=0;$i<count($temp);$i++){
	$table_name=$temp[$i]["Tables_in_".$db_data["db"]];
	if(in_array($table_name,$need)){
		?>
			<div>
				<a><?php echo $table_name; ?></a><br>
		<?php
		Disp::disp_table( Sqle::selectVal( $table_name , "*" , array() ) );
		echo "<br><br>";
		?>
			</div>
		<?php
	}
}



closedb();
?>



</body> </html>
