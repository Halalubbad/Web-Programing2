<!DOCTYPE html>
<html>
<head>
	<title><?php echo"My courses"?></title>

</head>
<body>
	

	<?php
		$arr = array("web1"=>"90","Software engineering"=>"85","Data structure "=>"85","Mathematics"=>"89");
	?>
	<table border="1">
		<tr>
			<th> <?php echo "Course Name"; ?> </th>
			<th> <?php echo "Grade"; ?> </th>
		</tr>
		<?php for(reset($arr);$k=key($arr);next($arr)){?>
		<tr>
			<td><?php echo "$k"; ?></td>
			<td><?php echo "$arr[$k]"; ?></td>
		</tr>
		<?php } ?>
	</table>

	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	<?php
		$arr2 = array("Palestine"=>"Mahmoud Abbas","Egypt"=>"Abdel Fattah Sisi","Iraq"=>"Barham Saleh","Jordan"=>"Abdullah ",
			"Morocco"=>"Muhammad","Saudi"=>"Salman bin Abdulaziz","Oman"=>"Qaboos",);
	?>
			<table border="1">
				<tr>
					<th> <?php echo "country"; ?> </th>
					<th> <?php echo "president name"; ?> </th>
				</tr>
				<?php for(reset($arr2);$k2=key($arr2);next($arr2)){ ?>
				<tr>
					<td><?php echo "$k2"; ?></td>
					<td><?php echo "$arr2[$k2]"; ?></td>
				</tr>
		<?php } ?>
		</table>

	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	<?php
		$faculties = array(
			"Information technology" => array("Dean name"=>"Rabhi Suleiman Baraka","lowest average"=>"70%"),
			"College of Medicine" => array("Dean name"=>"Fadel Naim","lowest average"=>"98%"),
			"College of Science" => array("Dean name"=>"Asaad Yousef Asaad","lowest average"=>"80%"),
			"College of Engineering" => array("Dean name"=>"Abdul Karim Mohsen","lowest average"=>"85%")
		);?>
		<table border="1">
			<thead>
				<tr>
					<th>College</th>
					<th>Dean name</th>
					<th>lowest average</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					for(reset($faculties); $ky=key($faculties); next($faculties) ){
						echo "<tr><th> $ky </th>";
						for(reset($faculties[$ky]); $k=key($faculties[$ky]); next($faculties[$ky])){
		      					echo "<td>", $faculties[$ky][$k], "</td>";
		      				}
		      				echo "</tr>";
		      			}
		      			echo "</tbody> </table>"; 
					?> 


	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	<?php
		$arr = array("web1"=>"90","Software engineering"=>"85","Data structure "=>"85","Mathematics"=>"89");
	?>
	<?php
		$tot=0; 	
		for(reset($arr);$k=key($arr);next($arr)){
			$tot += $arr[$k];
		}
	?>
	<table border="1">
		<tr>
			<th> <?php echo "Course Name"; ?> </th>
			<th> <?php echo "Grade"; ?> </th>
		</tr>
		<?php for(reset($arr);$k=key($arr);next($arr)){?>
		<tr>
			<td><?php echo "$k"; ?></td>
			<td><?php echo "$arr[$k]"; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th colspan="2"><?php echo $tot/count($arr); ?></th>
		</tr>
	</table>
	
	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	<?php 
		$cars = array("car1" => array("make" => "Toyota", "color" => "Green", "year" => 1999,"engine_cc" => 1998), 
			          "car2" => array("make" => "BMW", "color" => "RED", "year" => 2005,"engine_cc" => 2400), 
			);  ?>
			<table border='2'>
				<thead>
					<tr><th> </th><th>make</th><th>color</th><th>year</th><th>engine_cc</th></tr>
				</thead>
				<tbody>
					<?php 
						for(reset($cars); $ky=key($cars); next($cars) ){
		      				echo "<tr><th> $ky </th>";
		      				for(reset($cars[$ky]); $k=key($cars[$ky]); next($cars[$ky])){
		      					echo "<td>", $cars[$ky][$k], "</td>";
		      				}
		      				echo "</tr>";
		      			}
		      			 echo "</tbody> </table>"; 
					?>
	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	<?php
		$cars = array(
			"car1" => array("make" => "Toyota", "color" => "Green", "year" => 1999,"engine_cc" => 1998), 
			"car2" => array("make" => "BMW", "color" => "RED", "year" => 2005,"engine_cc" => 2400), 
			);
		$found = array_search("Scoda", $cars);
		if ($found) {
			for(reset($cars);$k=key($cars);next($cars)){
				for(reset($cars[$ky]); $k=key($cars[$ky]); next($cars[$ky])){
					echo "$cars[$found][ky]";
				}
			}
		}else{
		   echo "not found!";
		}
	?>

	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>
 
	<?php $Fname = array(
					"oldborother"=> "Ali",
                    "midborother"=> "abed-alrhman", 
                    "yangborother" => "Ahmad"
   				);
			sort($Fname);
			print_r($Fname);
   	?>

	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>

	
	<?php
		class Section{
			private $part1;
			private $part2;
			private $part3;

			function setPart1($part1){
				$this->part1 = $part1;
			}
			function setPart2($part2){
				$this->part2 = $part2;
			}
			function setPart3($part3){
				$this->part3 = $part3;
			}
			function getPart1(){
				return $this->part1;
			}
			function getPart2(){
				return $this->part2;
			}
			function getPart3(){
				return $this->part3;
			}
		}
			$mypart = new Section;
			$mypart->setPart1("1");
			$mypart->setPart2("2");
			$mypart->setPart3("3");

			echo "My Part1: ",$mypart->getPart1(),"<br>";
			echo "My Part2: ",$mypart->getPart2(),"<br>";
			echo "My Part3: ",$mypart->getPart3(),"<br>";
	?>

	<br><br>
	<?php
		echo "***************";
	?>
	<br><br>


	<?php
	 	class Appointment {
	 		private $name;
		   	private $time;      
		   	private $place;
		   	private static $AppointmentNo = 0;
		   	static function getAppointmentNo(){
		   		return self::$AppointmentNo;
		   	}
		   	public function setName($n){
		   		$this->name=$n;
		   	}
		   	public function getName(){
		   		return $this->name;
		   	}
		   	public function setTime($m){
		   		$this->time=$m;
		   	}
		   	public function getTime(){
		   		return $this->time;
		   	}
		   	public function setPlace($c){
		        if($this->placeValidate($c))             
		        	$this->place = $c;
		            else    
		          		echo "bad place...";
		    }
		   	public function getPlace(){
		   		return $this->place;
		   	}     
		   	public function __construct($name,$time, $place ){
		   		$this->setName($name);
		        $this->setTime($time);
		        $this->setPlace($place);
		        self::$AppointmentNo ++;
		    }
			public function __destruct(){
				self:: $AppointmentNo--;
			    echo "<br>Name: ", $this->getName(), ",Time:", $this->getTime()," ,Place:", $this->getPlace();
				echo "<br>the Appointment passed...<hr>";
		  	}
			private function placeValidate($plc){
		   		if(preg_match("/^[a-z A-Z]{1}[0-9]{3}$/", $plc))    	
		   			return TRUE;
		       	else         
		       		return FALSE;
		   	}

		}
		$frindb = new Appointment("Ahmed","10:20 pm","I215");
		$frinda = new Appointment("Ali","4:00 pm","i215");
		$frindc = new Appointment("Hany","5:00 pm","L215");

		echo "Time:", $frinda->getTime(), "<p>Place:", $frinda->getPlace();
		echo "<br>==================<br>";
		
		echo "<br/> i have [", Appointment::getAppointmentNo(),"] Appointment";
		echo "<br/>first name:", $frindb->getName() , " ,and second name:", $frinda->getName(),
		 " ,and thered name:", $frindc->getName();
?>

</body>
</html>