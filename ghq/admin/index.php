<?php require_once("../../includes/connection.php"); 

	$sql = "SELECT id, name, sex, country FROM survey_4item_new";
	$result = mysqli_query($conn, $sql);
	$checkResult = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Database</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>Database</h1>
			<h3>Psychological Survey</h3>
			<h4>Press button Details to see whole survey data certain person.</h4>
			<div class="table-responsive">

				<table class="table table-sm table-dark table-hover" border="4" cellpadding="0">
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Sex</td>
						<td>Country</td>
						<td></td>
					</tr>

					<?php 
						if ($checkResult > 0) {
							$i=1;
							while ($row = mysqli_fetch_assoc($result)) { ?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['sex']; ?></td>
								<td><?php echo $row['country']; ?></td>
								<td><a class="btn btn-sm btn-primary" href="action.php?id=<?php echo $row['id']; ?>">Details</a></td>
							</tr>

							<?php $i++; } ?>
						<?php } ?>

					 
				</table>

			</div>

		</div>

	</body>
</html>
