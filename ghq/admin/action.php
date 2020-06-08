<?php 
	require ("../../includes/connection.php"); 

	$id = $_GET["id"];

	$sql = "SELECT name, age, sex, country, faculty, status, study, grade_level, stay_repub, dormitory, siblings, 

	gh_1, gh_2, gh_3, gh_4, gh_5, gh_6, gh_7, gh_8, gh_9, gh_10, gh_11, gh_12, gh_total,

	fc_1, fc_2, fc_3, fc_4, fc_5, fc_6, fc_7, fc_total,

	pf_1, pf_2, pf_3, pf_4, pf_5, pf_6, pf_7, pf_total,

	ml_1, ml_2, ml_3, ml_4, ml_5, ml_6, ml_7, ml_8, ml_9, ml_10, ml_11, ml_12, ml_13, ml_14, ml_15, ml_16, ml_17, ml_18, ml_19, ml_20, ml_21, ml_22, ml_23, ml_24, ml_25, ml_26, ml_total, 

	comment

	FROM survey_4item_new WHERE id = $id";


	$result = mysqli_query($conn, $sql);
	$checkResult = mysqli_num_rows($result);

	$row = mysqli_fetch_assoc($result);

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Database</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			
			<h1>Data: Name  <strong style="color: red;"><?php echo $row['name']; ?>.</strong></h1>
			<br>
			<h2 style="color: green;">Personal Data</h2>

		

			<div class="table-responsive">
				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					
					<tr>
						<td>Name</td>
						<td><?php echo $row['name']; ?></td>
					</tr>

					<tr>
						<td>Age</td>
						<td><?php echo $row['age']; ?></td>
					</tr>

					<tr>
						<td>Sex</td>
						<td><?php echo $row['sex']; ?></td>
					</tr>

					<tr>
						<td>Country</td>
						<td><?php echo $row['country']; ?></td>
					</tr>

					<tr>
						<td>Faculty</td>
						<td><?php echo $row['faculty']; ?></td>
					</tr>

					<tr>
						<td>Status</td>
						<td><?php echo $row['status']; ?></td>
					</tr>

					<tr>
						<td>Study</td>
						<td><?php echo $row['study']; ?></td>
					</tr>

					<tr>
						<td>Grade level</td>
						<td><?php echo $row['grade_level']; ?></td>
					</tr>

					<tr>
						<td>Stay in republic</td>
						<td><?php echo $row['stay_repub']; ?></td>
					</tr>

					<tr>
						<td>Dormitory</td>
						<td><?php echo $row['dormitory']; ?></td>
					</tr>

					<tr>
						<td>Siblings</td>
						<td><?php echo $row['siblings']; ?></td>
					</tr>
				</table>
			</div>
				
				<br>
				<br>
				<br>
				
				
			<h3 style="color: red;">1 Part: The General Health Questionnaire (GHQ-12)</h3>

			<br>
			<!--
    			<h4>Score for ansvers:</h4>
    
    			<p>
    				0 - not at all <br>
    				1 - no more than usual <br>
    				2 - rather more than usual <br>
    				3 - much less than usual<br>
    			</p>
			-->	
				
			<div class="table-responsive">
				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">

					<tr>
						<td>1. Have you recently been able to concentrate on what you’re doing?</td>
						<td><?php echo $row['gh_1']; ?></td>
					</tr>

					<tr>
						<td>2. Have you recently lost much sleep over worry?</td>
						<td><?php echo $row['gh_2']; ?></td>
					</tr>

					<tr>
						<td>3. Have you recently felt that you are playing a useful part in things?</td>
						<td><?php echo $row['gh_3']; ?></td>
					</tr>

					<tr>
						<td>4. Have you recently felt capable of making decisions about things?</td>
						<td><?php echo $row['gh_4']; ?></td>
					</tr>

					<tr>
						<td>5. Have you recently felt constantly under strain (tension)?</td>
						<td><?php echo $row['gh_5']; ?></td>
					</tr>

					<tr>
						<td>6. Have you recently felt you couldn’t overcome your difficulties?</td>
						<td><?php echo $row['gh_6']; ?></td>
					</tr>
					<tr>
						<td>7. Have you recently been able to enjoy your normal day to day activities?</td>
						<td><?php echo $row['gh_7']; ?></td>
					</tr>
					<tr>
						<td>8. Have you recently been able to face up to your problems?</td>
						<td><?php echo $row['gh_8']; ?></td>
					</tr>
					<tr>
						<td>9. Have you recently been feeling unhappy or depressed?</td>
						<td><?php echo $row['gh_9']; ?></td>
					</tr>
					<tr>
						<td>10. Have you recently  been losing confidence in yourself?</td>
						<td><?php echo $row['gh_10']; ?></td>
					</tr>
					<tr>
						<td>11. Have you recently been thinking of yourself as a worthless person?</td>
						<td><?php echo $row['gh_11']; ?></td>
					</tr>
					<tr>
						<td>12. Have you recently been feeling reasonably happy, all things considered?</td>
						<td><?php echo $row['gh_12']; ?></td>
					</tr>

					<tr>
						<td>Total</td>
						<td><?php echo $row['gh_total']; ?></td>
					</tr>

				</table>				
			</div>
			<br>
			<br>
			<br>


<!--####################################################################
########################################################################################-->
			

			<h2 style="color: red;">2 Part:  Fear of Coronavirus-19 </h2>

			<h4>Score for ansvers:</h4>

			<p>

				1 - Strongly disagree  <br>
				2 - Disagree <br>
				3 - Neither agree nor disagree<br>
				4 - Agree <br>
				5 - Strongly agree <br>
			</p>

			<div class="table-responsive">
				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					
					
					<tr>
						<td>1. I am most afraid of coronavirus-19.</td>
						<td><?php echo $row['fc_1']; ?></td>
					</tr>

					<tr>
						<td>2. It makes me uncomfortable to think about coronavirus-19.</td>
						<td><?php echo $row['fc_2']; ?></td>
					</tr>

					<tr>
						<td>3. My hands become clammy when I think about coronavirus-19.</td>
						<td><?php echo $row['fc_3']; ?></td>
					</tr>

					<tr>
						<td>4. I am afraid of losing my life because of coronavirus-19.</td>
						<td><?php echo $row['fc_4']; ?></td>
					</tr>

					<tr>
						<td>5. When watching news and stories about coronavirus-19 on social media, I become nervous or anxious.</td>
						<td><?php echo $row['fc_5']; ?></td>
					</tr>

					<tr>
						<td>6. I cannot sleep because I’m worrying about getting coronavirus-19.</td>
						<td><?php echo $row['fc_6']; ?></td>
					</tr>
					<tr>
						<td>7. My heart races or palpitates when I think about getting coronavirus-19.</td>
						<td><?php echo $row['fc_7']; ?></td>
					</tr>
					


					<tr>
						<td>Total</td>
						<td><?php echo $row['fc_total']; ?></td>
					</tr>
					
				</table>
			</div>

			<br>
			<br>
			<br>



<!--####################################################################
########################################################################################-->
			<h2 style="color: red;">3 Part: Psychological flexibility</h2>
			<h4>Score for ansvers:</h4>
			<p>
				1 - never true <br>
				2 - very seldom true <br>
				3 - seldom true <br>
				4 - sometimes true<br>
				5 - frequently true<br>
				6 - almost always true<br>
				7 - always true<br>
			</p>

			<div class="table-responsive">
				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					

					<tr>
						<td>1. My painful experiences and memories make it difficult for me to live a life that I would value.</td>
						<td><?php echo $row['pf_1']; ?></td>
					</tr>

					<tr>
						<td>2. I’m afraid of my feelings.</td>
						<td><?php echo $row['pf_2']; ?></td>
					</tr>

					<tr>
						<td>3. I worry about not being able to control my worries and feelings.</td>
						<td><?php echo $row['pf_3']; ?></td>
					</tr>

					<tr>
						<td>4. My painful memories prevent me from having a fulfilling life.</td>
						<td><?php echo $row['pf_4']; ?></td>
					</tr>

					<tr>
						<td>5. Emotions cause problems in my life.</td>
						<td><?php echo $row['pf_5']; ?></td>
					</tr>

					<tr>
						<td>6. It seems like most people are handling their lives better than I am.</td>
						<td><?php echo $row['pf_6']; ?></td>
					</tr>
					<tr>
						<td>7. Worries get in the way of my success.</td>
						<td><?php echo $row['pf_7']; ?></td>
					</tr>
					
					

					<tr>
						<td>Total</td>
						<td><?php echo $row['pf_total']; ?></td>
					</tr>				
					
				</table>
			</div>
			<br>
			<br>
			<br>


<!--####################################################################
########################################################################################-->

			<h2 style="color: red;">4 Part: Self-Compassion</h2>
			<h4>Score for ansvers:</h4>

			<p>
				1 - Almost never <br>
				2 <br>
				3 <br>
				4 <br>
				5 - Almodt always<br>
			</p>

			<div class="table-responsive">
				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					
					
					<tr>
						<td>1. I’m disapproving and judgmental about my own flaws and inadequacies.</td>
						<td><?php echo $row['ml_1']; ?></td>
					</tr>

					<tr>
						<td>2. When I’m feeling down I tend to obsess and fixate on everything that’s wrong.</td>
						<td><?php echo $row['ml_2']; ?></td>
					</tr>

					<tr>
						<td>3. When things are going badly for me, I see the difficulties as part of life that everyone goes through.</td>
						<td><?php echo $row['ml_3']; ?></td>
					</tr>

					<tr>
						<td>4. When I think about my inadequacies, it tends to make me feel more separate and cut off from the rest of the world.</td>
						<td><?php echo $row['ml_4']; ?></td>
					</tr>

					<tr>
						<td>5. I try to be loving towards myself when I’m feeling emotional pain.</td>
						<td><?php echo $row['ml_5']; ?></td>
					</tr>

					<tr>
						<td>6. When I fail at something important to me I become consumed by feelings of inadequacy.</td>
						<td><?php echo $row['ml_6']; ?></td>
					</tr>
					<tr>
						<td>7. When I'm down and out, I remind myself that there are lots of other people in the world feeling like I am.</td>
						<td><?php echo $row['ml_7']; ?></td>
					</tr>
					<tr>
						<td>8. When times are really difficult, I tend to be tough on myself.</td>
						<td><?php echo $row['ml_8']; ?></td>
					</tr>
					<tr>
						<td>9. When something upsets me I try to keep my emotions in balance.</td>
						<td><?php echo $row['ml_9']; ?></td>
					</tr>
					<tr>
						<td>10. When I feel inadequate in some way, I try to remind myself that feelings of inadequacy are shared by most people. </td>
						<td><?php echo $row['ml_10']; ?></td>
					</tr>
					<tr>
						<td>11. I’m intolerant and impatient towards those aspects of my personality I don't like </td>
						<td><?php echo $row['ml_11']; ?></td>
					</tr>
					<tr>
						<td>12. When I’m going through a very hard time, I give myself the caring and tenderness I need. </td>
						<td><?php echo $row['ml_12']; ?></td>
					</tr>
					<tr>
						<td>13. When I’m feeling down, I tend to feel like most other people are probably happier than I am. </td>
						<td><?php echo $row['ml_13']; ?></td>
					</tr>
					<tr>
						<td>14. When something painful happens I try to take a balanced view of the situation.</td>
						<td><?php echo $row['ml_14']; ?></td>
					</tr>
					<tr>
						<td>15. I try to see my failings as part of the human condition. </td>
						<td><?php echo $row['ml_15']; ?></td>
					</tr>
					<tr>
						<td>16. When I see aspects of myself that I don’t like, I get down on myself. </td>
						<td><?php echo $row['ml_16']; ?></td>
					</tr>
					<tr>
						<td>17. When I fail at something important to me I try to keep things in perspective. </td>
						<td><?php echo $row['ml_17']; ?></td>
					</tr>
					<tr>
						<td>18. When I’m really struggling, I tend to feel like other people must be having an easier time of it. </td>
						<td><?php echo $row['ml_18']; ?></td>
					</tr>
					<tr>
						<td>19. I’m kind to myself when I’m experiencing suffering. </td>
						<td><?php echo $row['ml_19']; ?></td>
					</tr>
					<tr>
						<td>20. When something upsets me I get carried away with my feelings. </td>
						<td><?php echo $row['ml_20']; ?></td>
					</tr>
					<tr>
						<td>21. I can be a bit cold-hearted towards myself when I'm experiencing suffering. </td>
						<td><?php echo $row['ml_21']; ?></td>
					</tr>
					<tr>
						<td>22. When I'm feeling down I try to approach my feelings with curiosity and openness. </td>
						<td><?php echo $row['ml_22']; ?></td>
					</tr>
					<tr>
						<td>23. I’m tolerant of my own flaws and inadequacies </td>
						<td><?php echo $row['ml_23']; ?></td>
					</tr>
					<tr>
						<td>24. When something painful happens I tend to blow the incident out of proportion. </td>
						<td><?php echo $row['ml_24']; ?></td>
					</tr>
					<tr>
						<td>25. When I fail at something that's important to me, I tend to feel alone in my failure. </td>
						<td><?php echo $row['ml_25']; ?></td>
					</tr>
					<tr>
						<td>26. I try to be understanding and patient towards those aspects of my personality I don't like. </td>
						<td><?php echo $row['ml_26']; ?></td>
					</tr>


					<tr>
						<td>Total</td>
						<td><?php echo $row['ml_total']; ?></td>
					</tr>
					

				</table>

				<br><br><br>
<!--
				<h3>Comment</h3>

				<table  class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					<tr>
						<td>Comment</td>
						<td><?php echo $row['comment']; ?></td>
					</tr>
				</table>
-->
			</div>


<!--####################################################################
########################################################################################-->

<!--####################################################################
########################################################################################-->

<!--####################################################################
########################################################################################-->

			<br><br>
		</div>

	</body>
</html>