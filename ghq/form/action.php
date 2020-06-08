<?php 

	require ('../../includes/connection.php');



	if (!isset($_POST['sex'])) {
		$sex = "";
	} else {
		$sex = $_POST['sex'];
	}
	if (!isset($_POST['status'])) {
		$status = "";
	} else {
		$status = $_POST['status'];
	}

	if (!isset($_POST['study'])) {
		$_POST['study'] = "";
	}
	if (!isset($_POST['grade_level'])) {
		$_POST['grade_level'] = "";
	}

	if (!isset($_POST['comment'])) {
		$_POST['comment'] = "";
	}

	
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$country = $_POST['country'];
	$faculty = $_POST['faculty'];
	
	$study = $_POST['study'];
	$grade_level = $_POST['grade_level'];
	$stay_repub = $_POST['stay_repub'];
	$dormitory = $_POST['dormitory'];
	$siblings = $_POST['siblings'];


	


	if (!$name) {
		echo '<h1 style="color: red;  border: 4px solid red; padding: 7px;">Name is Required!</h1>';
		exit;
	}
	if (!$age) {
		echo '<h1 style="color: red;  border: 4px solid red; padding: 7px;">Age is Required!</h1>';
		exit;
	}
	if (!$sex) {
		echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">Chose your gender(sex)!</h1>';
		exit;
	}
	if (!$country) {
		echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">Country is Required!</h1>';
		exit;
	}
	
	
	
	// 1 PART  survey general health




	if (!isset($_POST['gh_1'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART<br> Answer the question 1</h1>';
	    exit;
	}
	if (!isset($_POST['gh_2'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART<br>Answer the question 2</h1>';
	    exit;
	}
	if (!isset($_POST['gh_3'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART<br>Answer the question 3</h1>';
	    exit;
	}
	if (!isset($_POST['gh_4'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 4</h1>';
	    exit;
	}
	if (!isset($_POST['gh_5'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 5</h1>';
	    exit;
	}
	if (!isset($_POST['gh_6'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 6</h1>';
	    exit;
	}
	if (!isset($_POST['gh_7'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 7</h1>';
	    exit;
	}
	if (!isset($_POST['gh_8'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 8</h1>';
	    exit;
	}
	if (!isset($_POST['gh_9'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART<br>Answer the question 9</h1>';
	    exit;
	}
	if (!isset($_POST['gh_10'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 10</h1>';
	    exit;
	}
	if (!isset($_POST['gh_11'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 11</h1>';
	    exit;
	}
	if (!isset($_POST['gh_12'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">1 PART <br>Answer the question 12</h1>';
	    exit;
	}


	$gh1 = $_POST['gh_1'];
	$gh2 = $_POST['gh_2'];
	$gh3 = $_POST['gh_3'];
	$gh4 = $_POST['gh_4'];
	$gh5 = $_POST['gh_5'];
	$gh6 = $_POST['gh_6'];
	$gh7 = $_POST['gh_7'];
	$gh8 = $_POST['gh_8'];
	$gh9 = $_POST['gh_9'];
	$gh10 = $_POST['gh_10'];
	$gh11 = $_POST['gh_11'];
	$gh12 = $_POST['gh_12'];

	$gh_total = "";
	 // $gh_total = $gh1+$gh2+$gh3+$gh4+$gh5+$gh6+$gh7+$gh8+$gh9+$gh10+$gh11+$gh12;


	// 2 PART Fear of Coronavirus-19 Scale ################################



	if (!isset($_POST['fc_1'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART<br> Answer the question 1</h1>';
	    exit;
	}
	if (!isset($_POST['fc_2'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART<br> Answer the question 2</h1>';
	    exit;
	}
	if (!isset($_POST['fc_3'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART<br> Answer the question 3</h1>';
	    exit;
	}
	if (!isset($_POST['fc_4'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART <br> Answer the question 4</h1>';
	    exit;
	}
	if (!isset($_POST['fc_5'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART<br> Answer the question 5</h1>';
	    exit;
	}
	if (!isset($_POST['fc_6'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART<br> Answer the question 6</h1>';
	    exit;
	}
	if (!isset($_POST['fc_7'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px">2 PART <br> Answer the question 7</h1>';
	    exit;
	}

	

	$fc1 = $_POST['fc_1'];
	$fc2 = $_POST['fc_2'];
	$fc3 = $_POST['fc_3'];
	$fc4 = $_POST['fc_4'];
	$fc5 = $_POST['fc_5'];
	$fc6 = $_POST['fc_6'];
	$fc7 = $_POST['fc_7'];

	
	
	
	

	
	$fc_total = $fc1+$fc2+$fc3+$fc4+$fc5+$fc6+$fc7;


// 3 part - psychological flexibility  ###########################


	if (!isset($_POST['pf_1'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART<br> Answer the question 1</h1>';
	    exit;
	}
	if (!isset($_POST['pf_2'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART<br> Answer the question 2</h1>';
	    exit;
	}
	if (!isset($_POST['pf_3'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART <br> Answer the question 3</h1>';
	    exit;
	}
	if (!isset($_POST['pf_4'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART <br> Answer the question 4</h1>';
	    exit;
	}
	if (!isset($_POST['pf_5'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART <br> Answer the question 5</h1>';
	    exit;
	}
	if (!isset($_POST['pf_6'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART <br> Answer the question 6</h1>';
	    exit;
	}
	if (!isset($_POST['pf_7'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">3 PART<br> Answer the question 7</h1>';
	    exit;
	}

	


	$pf1 = $_POST['pf_1'];
	$pf2 = $_POST['pf_2'];
	$pf3 = $_POST['pf_3'];
	$pf4 = $_POST['pf_4'];
	$pf5 = $_POST['pf_5'];
	$pf6 = $_POST['pf_6'];
	$pf7 = $_POST['pf_7'];




	$pf_total = $pf1+$pf2+$pf3+$pf4+$pf5+$pf6+$pf7;



// 4 PART Self compassion


	if (!isset($_POST['ml_1'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 1</h1>';
	    exit;
	}
	if (!isset($_POST['ml_2'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 2</h1>';
	    exit;
	}
	if (!isset($_POST['ml_3'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 3</h1>';
	    exit;
	}
	if (!isset($_POST['ml_4'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 4</h1>';
	    exit;
	}
	if (!isset($_POST['ml_5'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 5</h1>';
	    exit;
	}
	if (!isset($_POST['ml_6'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 6</h1>';
	    exit;
	}
	if (!isset($_POST['ml_7'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 7</h1>';
	    exit;
	}
	if (!isset($_POST['ml_8'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 8</h1>';
	    exit;
	}
	if (!isset($_POST['ml_9'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 9</h1>';
	    exit;
	}
	if (!isset($_POST['ml_10'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 10</h1>';
	    exit;
	}
	if (!isset($_POST['ml_11'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 11</h1>';
	    exit;
	}
	if (!isset($_POST['ml_12'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART<br> Answer the question 12</h1>';
	    exit;
	}
	if (!isset($_POST['ml_13'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 13</h1>';
	    exit;
	}
	if (!isset($_POST['ml_14'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 14</h1>';
	    exit;
	}
	if (!isset($_POST['ml_15'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART<br> Answer the question 15</h1>';
	    exit;
	}
	if (!isset($_POST['ml_16'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART<br> Answer the question 16</h1>';
	    exit;
	}
	if (!isset($_POST['ml_17'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 17</h1>';
	    exit;
	}
	if (!isset($_POST['ml_18'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART<br> Answer the question 18</h1>';
	    exit;
	}
	if (!isset($_POST['ml_19'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 19</h1>';
	    exit;
	}
	if (!isset($_POST['ml_20'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 20</h1>';
	    exit;
	}
	if (!isset($_POST['ml_21'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 21</h1>';
	    exit;
	}
	if (!isset($_POST['ml_22'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 22</h1>';
	    exit;
	}
	if (!isset($_POST['ml_23'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 23</h1>';
	    exit;
	}
	if (!isset($_POST['ml_24'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 24</h1>';
	    exit;
	}
	if (!isset($_POST['ml_25'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 25</h1>';
	    exit;
	}
	if (!isset($_POST['ml_26'])) {
	    echo '<h1 style="color: red; border: 4px solid red; padding: 7px;">4 PART <br> Answer the question 26</h1>';
	    exit;
	}
	


	$ml1 = $_POST['ml_1'];
	$ml2 = $_POST['ml_2'];
	$ml3 = $_POST['ml_3'];
	$ml4 = $_POST['ml_4'];
	$ml5 = $_POST['ml_5'];
	$ml6 = $_POST['ml_6'];
	$ml7 = $_POST['ml_7'];
	$ml8 = $_POST['ml_8'];
	$ml9 = $_POST['ml_9'];
	$ml10 = $_POST['ml_10'];
	$ml11 = $_POST['ml_11'];
	$ml12 = $_POST['ml_12'];
	$ml13 = $_POST['ml_13'];
	$ml14 = $_POST['ml_14'];
	$ml15 = $_POST['ml_15'];
	$ml16 = $_POST['ml_16'];
	$ml17 = $_POST['ml_17'];
	$ml18 = $_POST['ml_18'];
	$ml19 = $_POST['ml_19'];
	$ml20 = $_POST['ml_20'];
	$ml21 = $_POST['ml_21'];
	$ml22 = $_POST['ml_22'];
	$ml23 = $_POST['ml_23'];
	$ml24 = $_POST['ml_24'];
	$ml25 = $_POST['ml_25'];
	$ml26 = $_POST['ml_26'];


	$ml_total = $ml1+$ml2+$ml3+$ml4+$ml5+$ml6+$ml7+$ml8+$ml9+$ml10+$ml11+$ml12+$ml13+$ml14+$ml15+$ml16+$ml17+$ml18+$ml19+$ml20+$ml21+$ml22+$ml23+$ml24+$ml25+$ml26;


	// $comment = $_POST['comment'];
	$comment = "";

	$sql = "INSERT INTO survey_4item_new (
	name, age, sex, country, faculty, status, study, grade_level, stay_repub, dormitory, siblings, 

	gh_1, gh_2, gh_3, gh_4, gh_5, gh_6, gh_7, gh_8, gh_9, gh_10, gh_11, gh_12, gh_total,

	fc_1, fc_2, fc_3, fc_4, fc_5, fc_6, fc_7, fc_total,

	pf_1, pf_2, pf_3, pf_4, pf_5, pf_6, pf_7, pf_total,

	ml_1, ml_2, ml_3, ml_4, ml_5, ml_6, ml_7, ml_8, ml_9, ml_10, ml_11, ml_12, ml_13, ml_14, ml_15, ml_16, ml_17, ml_18, ml_19, ml_20, ml_21, ml_22, ml_23, ml_24, ml_25, ml_26, ml_total, comment


	)


		VALUES ('$name', '$age', '$sex', '$country', '$faculty', '$status', '$study', '$grade_level', '$stay_repub', '$dormitory', '$siblings', 


		'$gh1', '$gh2', '$gh3', '$gh4', '$gh5', '$gh6', '$gh7', '$gh8', '$gh9', '$gh10','$gh11', '$gh12', '$gh_total',


		'$fc1', '$fc2', '$fc3', '$fc4', '$fc5', '$fc6', '$fc7', '$fc_total',

		'$pf1', '$pf2', '$pf3', '$pf4', '$pf5', '$pf6', '$pf7', '$pf_total', 

		'$ml1', '$ml2', '$ml3', '$ml4', '$ml5', '$ml6', '$ml7', '$ml8', '$ml9', '$ml10', '$ml11', '$ml12', '$ml13', '$ml14', '$ml15', '$ml16', '$ml17', '$ml18', '$ml19', '$ml20', '$ml21', '$ml22', '$ml23', '$ml24', '$ml25', '$ml26',  '$ml_total', 

		'$comment'


		) ;";


	$result = mysqli_query($conn, $sql);

	

	if (!$result) {
		echo "<h1 style='color:red;'>The resuld did not wroten in database. <br> Something Wrong!</h1>";
		exit;
	}

	if ($result) {
		echo "<h1 style='color: green; border: 4px solid green; padding: 7px;'>The survey condacted successfully!</h1>
				<br><br>
				<h1 style='color: green; green; border: 4px solid green; padding: 7px;'>Thank you!   " . $name . "</h1>

		";
	}

	echo "<br><br>
		<a 

		style='
			font-size: 25px;
			font-weight: 700;
			
			  
			  text-decoration: none;
			  padding: 15px;
			  border-radius: 3px;
			  background: rgb(64,199,129);			 
		'


				href='../../' style='border: 2px;'>Exit</a>

			";


	
?>

