<!DOCTYPE html>
<html>
	<head>
		<title>The General Health Questionnaire</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand d-block text-center" style="width: 100%;" href="#">Survey</a>
		</nav>

		<div class="container">
		<div class="mt-3">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					<div class="card" >
					  <div class="card-body">
					    <h3 class="card-title text-center">Survey form</h3>
						<form action="action.php" method="post">

						  <div class="form-group">
						    <label for="name">Name<span class="text-danger">*</span></label>
						    <input type="text" name="name" class="form-control" id="name">
						  </div>

						  <div class="form-group">
						    <label for="age">Age</label>
						    <input type="number" name="age" class="form-control" id="age" >
						  </div>

						  <div class="form-group">
							  	<label>Sex</label>
							  	<div class="form-check">
								    <input class="form-check-input" type="radio" name="sex" id="sex_1" value="Male" >
								    <label class="form-check-label" for="sex_1">Male</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="sex" id="sex_2" value="Female">
								    <label class="form-check-label" for="sex_2">Female</label>
								</div>
								
						  	</div>

							<div class="form-group">
								<label for="country">Country of origin</label>
								<input type="text" name="country" class="form-control" id="country" >
							</div>

							<div class="form-group">
								<label for="faculty">Faculty/ Department :</label>
								<input type="text" name="faculty" class="form-control" id="faculty" >
							</div>

							<div class="form-group">
							  	<label>Status</label>
							  	<div class="form-check">
								    <input class="form-check-input" type="radio" name="status" id="reg_st" value="Regular student" >
								    <label class="form-check-label" for="reg_st">Regular student</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="status" id="exch_st" value="Exchange student">
								    <label class="form-check-label" for="exch_st">Exchange student</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="status" id="visit_st" value="Visiting student" >
								    <label class="form-check-label" for="visit_st">Visiting student</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="status" id="other_st" value="Other" >
								    <label class="form-check-label" for="other_st">Other</label>
								</div>
						  	</div>

						  	<div class="form-group">
							  	<label>Study</label>
							  	<div class="form-check">
								    <input class="form-check-input" type="radio" name="study" id="bachelor" value="Bachelor’s" >
								    <label class="form-check-label" for="bachelor">Bachelor’s</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="study" id="master" value="Master’s">
								    <label class="form-check-label" for="master">Master’s</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="study" id="phd" value="PhD" >
								    <label class="form-check-label" for="phd">PhD</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="study" id="other" value="Other" >
								    <label class="form-check-label" for="other">Other</label>
								</div>
						  	</div>

						  	<div class="form-group">
							  	<label>Grade level</label>
							  	<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="prep" value="Prep" >
								    <label class="form-check-label" for="prep">Prep</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="1st_year" value="1st year">
								    <label class="form-check-label" for="1st_year">1st year</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="2nd_year" value="2nd year" >
								    <label class="form-check-label" for="2nd_year">2nd year</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="3rd_year" value="3rd year" >
								    <label class="form-check-label" for="3rd_year">3rd year</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="4th_year" value="4th year" >
								    <label class="form-check-label" for="4th_year">4th year</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="master" value="Master" >
								    <label class="form-check-label" for="master">Master</label>
								</div>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="grade_level" id="phd" value="PhD" >
								    <label class="form-check-label" for="phd">PhD</label>
								</div>
						  	</div>

						  	<div class="form-group">
							    <label for="stay_repub">How long have you been in Czech Republic?</label>
							    <input type="text" name="stay_repub" class="form-control" id="stay_repub">
							</div>

							<div class="form-group">
							    <label for="dormitory">Which dormitory do you stay / where do you stay ? </label>
							    <input type="text" name="dormitory" class="form-control" id="dormitory">
							</div>

							<div class="form-group">
							    <label for="siblings">How many siblings do you have?</label>
							    <input type="text" name="siblings" class="form-control" id="siblings">
							</div>

							<br>
							<br>


<!--####################################################################
########################################################################################-->

						<!--General Health Question-->

						  
						<h1 style="color: red;">1 PART</h1>
						<p>
						      These items cover how your health has been in general over the last few weeks. Please read the questions below and each of the four possible answers. Cross the response that best applies to you. Please cross only one box for each item.
						      
						      
						</p>
		<!-- form-group start -->
	<div class="form-group">
	  	<label>1. Have you recently been able to concentrate on what you’re doing?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_1" id="gh_1_1" value="better than usual" >
		    <label class="form-check-label" for="gh_1_1">better than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_1" id="gh_1_2" value="same as usual">
		    <label class="form-check-label" for="gh_1_2">same as usual </label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_1" id="gh_1_3" value="less than usual" >
		    <label class="form-check-label" for="gh_1_3">less than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_1" id="gh_1_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_1_4">much less than usual</label>
		</div>
  	</div>

		<!--/ form-group enc -->
		<div class="form-group">
	  	<label>2. Have you recently lost much sleep over worry?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_2" id="gh_2_1" value="Not at all" >
		    <label class="form-check-label" for="gh_2_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_2" id="gh_2_2" value="No more than usual">
		    <label class="form-check-label" for="gh_2_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_2" id="gh_2_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_2_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_2" id="gh_2_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_2_4">Much more than usual</label>
		</div>
  	</div>
	 <!--/ form-group end -->	

	 	<div class="form-group">
	  	<label>3. Have you recently felt that you are playing a useful part in things?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_3" id="gh_3_1" value="more so than usual" >
		    <label class="form-check-label" for="gh_3_1">more so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_3" id="gh_3_2" value="same as usual">
		    <label class="form-check-label" for="gh_3_2">same as usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_3" id="gh_3_3" value="less so than usual" >
		    <label class="form-check-label" for="gh_3_3">less so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_3" id="gh_3_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_3_4">much less than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>4. Have you recently felt capable of making decisions about things?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_4" id="gh_4_1" value="more so than usual" >
		    <label class="form-check-label" for="gh_4_1">more so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_4" id="gh_4_2" value="same as usual">
		    <label class="form-check-label" for="gh_4_2">same as usual </label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_4" id="gh_4_3" value="less so than usual" >
		    <label class="form-check-label" for="gh_4_3">less so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_4" id="gh_4_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_4_4">much less than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>5. Have you recently felt constantly under strain (tension)?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_5" id="gh_5_1" value="Not at all" >
		    <label class="form-check-label" for="gh_5_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_5" id="gh_5_2" value="No more than usual">
		    <label class="form-check-label" for="gh_5_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_5" id="gh_5_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_5_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_5" id="gh_5_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_5_4">Much more than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>6. Have you recently felt you couldn’t overcome your difficulties?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_6" id="gh_6_1" value="Not at all" >
		    <label class="form-check-label" for="gh_6_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_6" id="gh_6_2" value="No more than usual">
		    <label class="form-check-label" for="gh_6_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_6" id="gh_6_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_6_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_6" id="gh_6_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_6_4">Much more than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>7. Have you recently been able to enjoy your normal day to day activities?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_7" id="gh_7_1" value="more so than usual" >
		    <label class="form-check-label" for="gh_7_1">more so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_7" id="gh_7_2" value="same as usual">
		    <label class="form-check-label" for="gh_7_2">same as usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_7" id="gh_7_3" value="less so than usual" >
		    <label class="form-check-label" for="gh_7_3">less so than usual </label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_7" id="gh_7_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_7_4">much less than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>8. Have you recently been able to face up to your problems?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_8" id="gh_8_1" value="more so than usual" >
		    <label class="form-check-label" for="gh_8_1">more so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_8" id="gh_8_2" value="same as usual">
		    <label class="form-check-label" for="gh_8_2">same as usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_8" id="gh_8_3" value="less so than usual" >
		    <label class="form-check-label" for="gh_8_3">less so than usual </label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_8" id="gh_8_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_8_4">much less than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>9. Have you recently been feeling unhappy or depressed?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_9" id="gh_9_1" value="Not at all" >
		    <label class="form-check-label" for="gh_9_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_9" id="gh_9_2" value="No more than usual">
		    <label class="form-check-label" for="gh_9_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_9" id="gh_9_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_9_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_9" id="gh_9_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_9_4">Much more than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>10. Have you recently  been losing confidence in yourself?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_10" id="gh_10_1" value="Not at all" >
		    <label class="form-check-label" for="gh_10_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_10" id="gh_10_2" value="No more than usual">
		    <label class="form-check-label" for="gh_10_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_10" id="gh_10_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_10_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_10" id="gh_10_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_10_4">Much more than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>11. Have you recently been thinking of yourself as a worthless person?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_11" id="gh_11_1" value="Not at all" >
		    <label class="form-check-label" for="gh_11_1">Not at all</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_11" id="gh_11_2" value="No more than usual">
		    <label class="form-check-label" for="gh_11_2">No more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_11" id="gh_11_3" value="Rather more than usual" >
		    <label class="form-check-label" for="gh_11_3">Rather more than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_11" id="gh_11_4" value="Much more than usual" >
		    <label class="form-check-label" for="gh_11_4">Much more than usual</label>
		</div>
  	</div>

  	<div class="form-group">
	  	<label>12. Have you recently been feeling reasonably happy, all things considered?</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_12" id="gh_12_1" value="more so than usual" >
		    <label class="form-check-label" for="gh_12_1">more so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_12" id="gh_12_2" value="same as usual">
		    <label class="form-check-label" for="gh_12_2">same as usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_12" id="gh_12_3" value="less so than usual" >
		    <label class="form-check-label" for="gh_12_3">less so than usual</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="gh_12" id="gh_12_4" value="much less than usual" >
		    <label class="form-check-label" for="gh_12_4">much less than usual</label>
		</div>
  	</div>

							  	<br>
							  	<br>

<!--####################################################################
########################################################################################-->


							<!-- 2.  Fear of Coronavirus-19 Scale-->

<h1 style="color: red;">2 PART</h1>
	  <p>
	      
	      
	  </p>	

<div class="form-group">
	  	<label>1. I am most afraid of coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_1" id="fc_1_1" value="1" >
		    <label class="form-check-label" for="fc_1_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_1" id="fc_1_2" value="2">
		    <label class="form-check-label" for="fc_1_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_1" id="fc_1_3" value="3" >
		    <label class="form-check-label" for="fc_1_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_1" id="fc_1_4" value="4" >
		    <label class="form-check-label" for="fc_1_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_1" id="fc_1_5" value="5" >
		    <label class="form-check-label" for="fc_1_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>2. It makes me uncomfortable to think about coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_2" id="fc_2_1" value="1" >
		    <label class="form-check-label" for="fc_2_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_2" id="fc_2_2" value="2">
		    <label class="form-check-label" for="fc_2_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_2" id="fc_2_3" value="3" >
		    <label class="form-check-label" for="fc_2_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_2" id="fc_2_4" value="4" >
		    <label class="form-check-label" for="fc_2_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_2" id="fc_2_5" value="5" >
		    <label class="form-check-label" for="fc_2_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>3. My hands become clammy when I think about coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_3" id="fc_3_1" value="1" >
		    <label class="form-check-label" for="fc_3_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_3" id="fc_3_2" value="2">
		    <label class="form-check-label" for="fc_3_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_3" id="fc_3_3" value="3" >
		    <label class="form-check-label" for="fc_3_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_3" id="fc_3_4" value="4" >
		    <label class="form-check-label" for="fc_3_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_3" id="fc_3_5" value="5" >
		    <label class="form-check-label" for="fc_3_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>4. I am afraid of losing my life because of coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_4" id="fc_4_1" value="1" >
		    <label class="form-check-label" for="fc_4_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_4" id="fc_4_2" value="2">
		    <label class="form-check-label" for="fc_4_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_4" id="fc_4_3" value="3" >
		    <label class="form-check-label" for="fc_4_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_4" id="fc_4_4" value="4" >
		    <label class="form-check-label" for="fc_4_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_4" id="fc_4_5" value="5" >
		    <label class="form-check-label" for="fc_4_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>5. When watching news and stories about coronavirus-19 on social media, I become nervous or anxious.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_5" id="fc_5_1" value="1" >
		    <label class="form-check-label" for="fc_5_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_5" id="fc_5_2" value="2">
		    <label class="form-check-label" for="fc_5_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_5" id="fc_5_3" value="3" >
		    <label class="form-check-label" for="fc_5_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_5" id="fc_5_4" value="4" >
		    <label class="form-check-label" for="fc_5_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_5" id="fc_5_5" value="5" >
		    <label class="form-check-label" for="fc_5_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>6. I cannot sleep because I’m worrying about getting coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_6" id="fc_6_1" value="1" >
		    <label class="form-check-label" for="fc_6_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_6" id="fc_6_2" value="2">
		    <label class="form-check-label" for="fc_6_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_6" id="fc_6_3" value="3" >
		    <label class="form-check-label" for="fc_6_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_6" id="fc_6_4" value="4" >
		    <label class="form-check-label" for="fc_6_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_6" id="fc_6_5" value="5" >
		    <label class="form-check-label" for="fc_6_5">Strongly agree</label>
		</div>
		
  	</div>

  	<!-- form-group start -->
	<div class="form-group">
	  	<label>7. My heart races or palpitates when I think about getting coronavirus-19.</label>
	  	<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_7" id="fc_7_1" value="1" >
		    <label class="form-check-label" for="fc_7_1">Strongly disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_7" id="fc_7_2" value="2">
		    <label class="form-check-label" for="fc_7_2">Disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_7" id="fc_7_3" value="3" >
		    <label class="form-check-label" for="fc_7_3">Neither agree nor disagree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_7" id="fc_7_4" value="4" >
		    <label class="form-check-label" for="fc_7_4">Agree</label>
		</div>
		<div class="form-check">
		    <input class="form-check-input" type="radio" name="fc_7" id="fc_7_5" value="5" >
		    <label class="form-check-label" for="fc_7_5">Strongly agree</label>
		</div>
  	</div>
				  			
					  	<br>

					  	<br>
<!--####################################################################
########################################################################################-->

				<!--  3. Psychological flexibility  -->

<h1 style="color: red;">3 PART</h1>
						<p>
						      Below you will find a list of statements. Please rate how true each statement is for you by using the scale below to fill in your choice.
						      
						      
						</p>

<div class="form-group">
  	<label>1. My painful experiences and memories make it difficult for me to live a life that I would value.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_1" value="1" >
	    <label class="form-check-label" for="pf_1_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_2" value="2">
	    <label class="form-check-label" for="pf_1_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_3" value="3" >
	    <label class="form-check-label" for="pf_1_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_4" value="4" >
	    <label class="form-check-label" for="pf_1_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_5" value="5" >
	    <label class="form-check-label" for="pf_1_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_6" value="6" >
	    <label class="form-check-label" for="pf_1_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_1" id="pf_1_7" value="7" >
	    <label class="form-check-label" for="pf_1_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>2. I’m afraid of my feelings.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_1" value="1" >
	    <label class="form-check-label" for="pf_2_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_2" value="2">
	    <label class="form-check-label" for="pf_2_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_3" value="3" >
	    <label class="form-check-label" for="pf_2_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_4" value="4" >
	    <label class="form-check-label" for="pf_2_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_5" value="5" >
	    <label class="form-check-label" for="pf_2_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_6" value="6" >
	    <label class="form-check-label" for="pf_2_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_2" id="pf_2_7" value="7" >
	    <label class="form-check-label" for="pf_2_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>3. I worry about not being able to control my worries and feelings.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_1" value="1" >
	    <label class="form-check-label" for="pf_3_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_2" value="2">
	    <label class="form-check-label" for="pf_3_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_3" value="3" >
	    <label class="form-check-label" for="pf_3_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_4" value="4" >
	    <label class="form-check-label" for="pf_3_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_5" value="5" >
	    <label class="form-check-label" for="pf_3_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_6" value="6" >
	    <label class="form-check-label" for="pf_3_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_3" id="pf_3_7" value="7" >
	    <label class="form-check-label" for="pf_3_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>4. My painful memories prevent me from having a fulfilling life.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_1" value="1" >
	    <label class="form-check-label" for="pf_4_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_2" value="2">
	    <label class="form-check-label" for="pf_4_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_3" value="3" >
	    <label class="form-check-label" for="pf_4_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_4" value="4" >
	    <label class="form-check-label" for="pf_4_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_5" value="5" >
	    <label class="form-check-label" for="pf_4_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_6" value="6" >
	    <label class="form-check-label" for="pf_4_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_4" id="pf_4_7" value="7" >
	    <label class="form-check-label" for="pf_4_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>5. Emotions cause problems in my life.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_1" value="1" >
	    <label class="form-check-label" for="pf_5_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_2" value="2">
	    <label class="form-check-label" for="pf_5_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_3" value="3" >
	    <label class="form-check-label" for="pf_5_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_4" value="4" >
	    <label class="form-check-label" for="pf_5_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_5" value="5" >
	    <label class="form-check-label" for="pf_5_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_6" value="6" >
	    <label class="form-check-label" for="pf_5_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_5" id="pf_5_7" value="7" >
	    <label class="form-check-label" for="pf_5_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>6. It seems like most people are handling their lives better than I am.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_1" value="1" >
	    <label class="form-check-label" for="pf_6_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_2" value="2">
	    <label class="form-check-label" for="pf_6_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_3" value="3" >
	    <label class="form-check-label" for="pf_6_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_4" value="4" >
	    <label class="form-check-label" for="pf_6_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_5" value="5" >
	    <label class="form-check-label" for="pf_6_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_6" value="6" >
	    <label class="form-check-label" for="pf_6_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_6" id="pf_6_7" value="7" >
	    <label class="form-check-label" for="pf_6_7">always true</label>
	</div>
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>7. Worries get in the way of my success.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_1" value="1" >
	    <label class="form-check-label" for="pf_7_1">never true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_2" value="2">
	    <label class="form-check-label" for="pf_7_2">very seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_3" value="3" >
	    <label class="form-check-label" for="pf_7_3">seldom true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_4" value="4" >
	    <label class="form-check-label" for="pf_7_4">sometimes true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_5" value="5" >
	    <label class="form-check-label" for="pf_7_5">frequently true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_6" value="6" >
	    <label class="form-check-label" for="pf_7_6">almost always true</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="pf_7" id="pf_7_7" value="7" >
	    <label class="form-check-label" for="pf_7_7">always true</label>
	</div>
	</div>


<!--####################################################################
########################################################################################-->


					<!--4 PART Self compassion-->


					<h1 style="color: red;">4 PART</h1>
	
		<h3>How I typically act towards myself in difficult times</h3>			
	<p>				      
		Please read each ststement carefully before answering. To the left of each item, indicate how often you behave in the stated manner, using the following scale.			      
	</p>

<div class="form-group">
  	<label>1.  I’m disapproving and judgmental about my own flaws and inadequacies.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_1" id="ml_1_1" value="1" >
	    <label class="form-check-label" for="ml_1_1">1 Almost never </label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_1" id="ml_1_2" value="2">
	    <label class="form-check-label" for="ml_1_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_1" id="ml_1_3" value="3" >
	    <label class="form-check-label" for="ml_1_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_1" id="ml_1_4" value="4" >
	    <label class="form-check-label" for="ml_1_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_1" id="ml_1_5" value="5" >
	    <label class="form-check-label" for="ml_1_5">5 Almost always</label>
	</div>
	
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>2. When I’m feeling down I tend to obsess and fixate on everything that’s wrong</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_2" id="ml_2_1" value="1" >
	    <label class="form-check-label" for="ml_2_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_2" id="ml_2_2" value="2">
	    <label class="form-check-label" for="ml_2_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_2" id="ml_2_3" value="3" >
	    <label class="form-check-label" for="ml_2_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_2" id="ml_2_4" value="4" >
	    <label class="form-check-label" for="ml_2_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_2" id="ml_2_5" value="5" >
	    <label class="form-check-label" for="ml_2_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>3. When things are going badly for me, I see the difficulties as part of life that everyone goes through.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_3" id="ml_3_1" value="1" >
	    <label class="form-check-label" for="ml_3_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_3" id="ml_3_2" value="2">
	    <label class="form-check-label" for="ml_3_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_3" id="ml_3_3" value="3" >
	    <label class="form-check-label" for="ml_3_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_3" id="ml_3_4" value="4" >
	    <label class="form-check-label" for="ml_3_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_3" id="ml_3_5" value="5" >
	    <label class="form-check-label" for="ml_3_5">5 Almost always</label>
	</div>
	
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>4. When I think about my inadequacies, it tends to make me feel more separate and cut off from the rest of the world.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_4" id="ml_4_1" value="1" >
	    <label class="form-check-label" for="ml_4_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_4" id="ml_4_2" value="2">
	    <label class="form-check-label" for="ml_4_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_4" id="ml_4_3" value="3" >
	    <label class="form-check-label" for="ml_4_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_4" id="ml_4_4" value="4" >
	    <label class="form-check-label" for="ml_4_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_4" id="ml_4_5" value="5" >
	    <label class="form-check-label" for="ml_4_5">5 Almost always</label>
	</div>
	
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>5. I try to be loving towards myself when I’m feeling emotional pain.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_5" id="ml_5_1" value="1" >
	    <label class="form-check-label" for="ml_5_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_5" id="ml_5_2" value="2">
	    <label class="form-check-label" for="ml_5_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_5" id="ml_5_3" value="3" >
	    <label class="form-check-label" for="ml_5_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_5" id="ml_5_4" value="4" >
	    <label class="form-check-label" for="ml_5_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_5" id="ml_5_5" value="5" >
	    <label class="form-check-label" for="ml_5_5">5 Almost always</label>
	</div>
	
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>6. When I fail at something important to me I become consumed by feelings of inadequacy.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_6" id="ml_6_1" value="1" >
	    <label class="form-check-label" for="ml_6_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_6" id="ml_6_2" value="2">
	    <label class="form-check-label" for="ml_6_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_6" id="ml_6_3" value="3" >
	    <label class="form-check-label" for="ml_6_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_6" id="ml_6_4" value="4" >
	    <label class="form-check-label" for="ml_6_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_6" id="ml_6_5" value="5" >
	    <label class="form-check-label" for="ml_6_5">5 Almost always</label>
	</div>
	
	</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>7. When I'm down and out, I remind myself that there are lots of other people in the world feeling like I am.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_7" id="ml_7_1" value="1" >
	    <label class="form-check-label" for="ml_7_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_7" id="ml_7_2" value="2">
	    <label class="form-check-label" for="ml_7_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_7" id="ml_7_3" value="3" >
	    <label class="form-check-label" for="ml_7_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_7" id="ml_7_4" value="4" >
	    <label class="form-check-label" for="ml_7_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_7" id="ml_7_5" value="5" >
	    <label class="form-check-label" for="ml_7_5">5 Almost always</label>
	</div>
	
	</div>

	<div class="form-group">
  	<label>8. When times are really difficult, I tend to be tough on myself.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_8" id="ml_8_1" value="1" >
	    <label class="form-check-label" for="ml_8_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_8" id="ml_8_2" value="2">
	    <label class="form-check-label" for="ml_8_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_8" id="ml_8_3" value="3" >
	    <label class="form-check-label" for="ml_8_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_8" id="ml_8_4" value="4" >
	    <label class="form-check-label" for="ml_8_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_8" id="ml_8_5" value="5" >
	    <label class="form-check-label" for="ml_8_5">5 Almost always</label>
	</div>
	
	</div>

	<div class="form-group">
  	<label>9. When something upsets me I try to keep my emotions in balance.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_9" id="ml_9_1" value="1" >
	    <label class="form-check-label" for="ml_9_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_9" id="ml_9_2" value="2">
	    <label class="form-check-label" for="ml_9_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_9" id="ml_9_3" value="3" >
	    <label class="form-check-label" for="ml_9_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_9" id="ml_9_4" value="4" >
	    <label class="form-check-label" for="ml_9_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_9" id="ml_9_5" value="5" >
	    <label class="form-check-label" for="ml_9_5">5 Almost always</label>
	</div>
	
	</div>

<div class="form-group">
  	<label>10. When I feel inadequate in some way, I try to remind myself that feelings of inadequacy are shared by most people.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_10" id="ml_10_1" value="1" >
	    <label class="form-check-label" for="ml_10_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_10" id="ml_10_2" value="2">
	    <label class="form-check-label" for="ml_10_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_10" id="ml_10_3" value="3" >
	    <label class="form-check-label" for="ml_10_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_10" id="ml_10_4" value="4" >
	    <label class="form-check-label" for="ml_10_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_10" id="ml_10_5" value="5" >
	    <label class="form-check-label" for="ml_10_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>11. I’m intolerant and impatient towards those aspects of my personality I don't like</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_11" id="ml_11_1" value="1" >
	    <label class="form-check-label" for="ml_11_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_11" id="ml_11_2" value="2">
	    <label class="form-check-label" for="ml_11_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_11" id="ml_11_3" value="3" >
	    <label class="form-check-label" for="ml_11_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_11" id="ml_11_4" value="4" >
	    <label class="form-check-label" for="ml_11_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_11" id="ml_11_5" value="5" >
	    <label class="form-check-label" for="ml_11_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>12. When I’m going through a very hard time, I give myself the caring and tenderness I need.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_12" id="ml_12_1" value="1" >
	    <label class="form-check-label" for="ml_12_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_12" id="ml_12_2" value="2">
	    <label class="form-check-label" for="ml_12_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_12" id="ml_12_3" value="3" >
	    <label class="form-check-label" for="ml_12_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_12" id="ml_12_4" value="4" >
	    <label class="form-check-label" for="ml_12_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_12" id="ml_12_5" value="5" >
	    <label class="form-check-label" for="ml_12_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>13. When I’m feeling down, I tend to feel like most other people are probably happier than I am.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_13" id="ml_13_1" value="1" >
	    <label class="form-check-label" for="ml_13_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_13" id="ml_13_2" value="2">
	    <label class="form-check-label" for="ml_13_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_13" id="ml_13_3" value="3" >
	    <label class="form-check-label" for="ml_13_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_13" id="ml_13_4" value="4" >
	    <label class="form-check-label" for="ml_13_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_13" id="ml_13_5" value="5" >
	    <label class="form-check-label" for="ml_13_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>14. When something painful happens I try to take a balanced view of the situation.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_14" id="ml_14_1" value="1" >
	    <label class="form-check-label" for="ml_14_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_14" id="ml_14_2" value="2">
	    <label class="form-check-label" for="ml_14_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_14" id="ml_14_3" value="3" >
	    <label class="form-check-label" for="ml_14_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_14" id="ml_14_4" value="4" >
	    <label class="form-check-label" for="ml_14_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_14" id="ml_14_5" value="5" >
	    <label class="form-check-label" for="ml_14_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>15. I try to see my failings as part of the human condition.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_15" id="ml_15_1" value="1" >
	    <label class="form-check-label" for="ml_15_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_15" id="ml_15_2" value="2">
	    <label class="form-check-label" for="ml_15_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_15" id="ml_15_3" value="3" >
	    <label class="form-check-label" for="ml_15_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_15" id="ml_15_4" value="4" >
	    <label class="form-check-label" for="ml_15_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_15" id="ml_15_5" value="5" >
	    <label class="form-check-label" for="ml_15_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>16. When I see aspects of myself that I don’t like, I get down on myself.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_16" id="ml_16_1" value="1" >
	    <label class="form-check-label" for="ml_16_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_16" id="ml_16_2" value="2">
	    <label class="form-check-label" for="ml_16_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_16" id="ml_16_3" value="3" >
	    <label class="form-check-label" for="ml_16_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_16" id="ml_16_4" value="4" >
	    <label class="form-check-label" for="ml_16_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_16" id="ml_16_5" value="5" >
	    <label class="form-check-label" for="ml_16_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>17. When I fail at something important to me I try to keep things in perspective.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_17" id="ml_17_1" value="1" >
	    <label class="form-check-label" for="ml_17_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_17" id="ml_17_2" value="2">
	    <label class="form-check-label" for="ml_17_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_17" id="ml_17_3" value="3" >
	    <label class="form-check-label" for="ml_17_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_17" id="ml_17_4" value="4" >
	    <label class="form-check-label" for="ml_17_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_17" id="ml_17_5" value="5" >
	    <label class="form-check-label" for="ml_17_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>18. When I’m really struggling, I tend to feel like other people must be having an easier time of it.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_18" id="ml_18_1" value="1" >
	    <label class="form-check-label" for="ml_18_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_18" id="ml_18_2" value="2">
	    <label class="form-check-label" for="ml_18_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_18" id="ml_18_3" value="3" >
	    <label class="form-check-label" for="ml_18_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_18" id="ml_18_4" value="4" >
	    <label class="form-check-label" for="ml_18_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_18" id="ml_18_5" value="5" >
	    <label class="form-check-label" for="ml_18_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>19. I’m kind to myself when I’m experiencing suffering.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_19" id="ml_19_1" value="1" >
	    <label class="form-check-label" for="ml_19_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_19" id="ml_19_2" value="2">
	    <label class="form-check-label" for="ml_19_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_19" id="ml_19_3" value="3" >
	    <label class="form-check-label" for="ml_19_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_19" id="ml_19_4" value="4" >
	    <label class="form-check-label" for="ml_19_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_19" id="ml_19_5" value="5" >
	    <label class="form-check-label" for="ml_19_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>20. When something upsets me I get carried away with my feelings.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_20" id="ml_20_1" value="1" >
	    <label class="form-check-label" for="ml_20_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_20" id="ml_20_2" value="2">
	    <label class="form-check-label" for="ml_20_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_20" id="ml_20_3" value="3" >
	    <label class="form-check-label" for="ml_20_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_20" id="ml_20_4" value="4" >
	    <label class="form-check-label" for="ml_20_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_20" id="ml_20_5" value="5" >
	    <label class="form-check-label" for="ml_20_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>21. I can be a bit cold-hearted towards myself when I'm experiencing suffering.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_21" id="ml_21_1" value="1" >
	    <label class="form-check-label" for="ml_21_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_21" id="ml_21_2" value="2">
	    <label class="form-check-label" for="ml_21_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_21" id="ml_21_3" value="3" >
	    <label class="form-check-label" for="ml_21_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_21" id="ml_21_4" value="4" >
	    <label class="form-check-label" for="ml_21_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_21" id="ml_21_5" value="5" >
	    <label class="form-check-label" for="ml_21_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>22. When I'm feeling down I try to approach my feelings with curiosity and openness.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_22" id="ml_22_1" value="1" >
	    <label class="form-check-label" for="ml_22_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_22" id="ml_22_2" value="2">
	    <label class="form-check-label" for="ml_22_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_22" id="ml_22_3" value="3" >
	    <label class="form-check-label" for="ml_22_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_22" id="ml_22_4" value="4" >
	    <label class="form-check-label" for="ml_22_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_22" id="ml_22_5" value="5" >
	    <label class="form-check-label" for="ml_22_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>23. I’m tolerant of my own flaws and inadequacies</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_23" id="ml_23_1" value="1" >
	    <label class="form-check-label" for="ml_23_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_23" id="ml_23_2" value="2">
	    <label class="form-check-label" for="ml_23_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_23" id="ml_23_3" value="3" >
	    <label class="form-check-label" for="ml_23_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_23" id="ml_23_4" value="4" >
	    <label class="form-check-label" for="ml_23_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_23" id="ml_23_5" value="5" >
	    <label class="form-check-label" for="ml_23_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>24. When something painful happens I tend to blow the incident out of proportion.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_24" id="ml_24_1" value="1" >
	    <label class="form-check-label" for="ml_24_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_24" id="ml_24_2" value="2">
	    <label class="form-check-label" for="ml_24_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_24" id="ml_24_3" value="3" >
	    <label class="form-check-label" for="ml_24_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_24" id="ml_24_4" value="4" >
	    <label class="form-check-label" for="ml_24_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_24" id="ml_24_5" value="5" >
	    <label class="form-check-label" for="ml_24_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>25. When I fail at something that's important to me, I tend to feel alone in my failure.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_25" id="ml_25_1" value="1" >
	    <label class="form-check-label" for="ml_25_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_25" id="ml_25_2" value="2">
	    <label class="form-check-label" for="ml_25_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_25" id="ml_25_3" value="3" >
	    <label class="form-check-label" for="ml_25_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_25" id="ml_25_4" value="4" >
	    <label class="form-check-label" for="ml_25_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_25" id="ml_25_5" value="5" >
	    <label class="form-check-label" for="ml_25_5">5 Almost always</label>
	</div>
</div>

	<!-- form-group start -->
<div class="form-group">
  	<label>26. I try to be understanding and patient towards those aspects of my personality I don't like.</label>
  	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_26" id="ml_26_1" value="1" >
	    <label class="form-check-label" for="ml_26_1">1 Almost never</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_26" id="ml_26_2" value="2">
	    <label class="form-check-label" for="ml_26_2">2</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_26" id="ml_26_3" value="3" >
	    <label class="form-check-label" for="ml_26_3">3</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_26" id="ml_26_4" value="4" >
	    <label class="form-check-label" for="ml_26_4">4</label>
	</div>
	<div class="form-check">
	    <input class="form-check-input" type="radio" name="ml_26" id="ml_26_5" value="5" >
	    <label class="form-check-label" for="ml_26_5">5 Almost always</label>
	</div>
</div>

							  	<br>

							  	<br>
						
<!--####################################################################
########################################################################################-->
								
						


<!--####################################################################
########################################################################################-->



<!--####################################################################
########################################################################################-->							  	
<!--
							  	<div class="form-group">
								    <h4>Please leave a comment below. What do you think about this survey?</h4>
								    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
								</div>
-->

							  	

							<button name="submit" class="btn btn-primary" >Submit</button>
						</form>

						<br>
						<br>
						<br>
					  </div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>