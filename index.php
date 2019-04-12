<html>
	<head>
		<meta charset="utf-8">
		<title>Result</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="infoBox">

			<h1 style="text-align: center"><u>Result</u></h1>
			<form action="connect.php" method="post">

				<table>
					<tr>
							<td>Student ID:</td>
							<td><input type="text" name="id" required></td>
					</tr>
					<tr>
							<td>Student Name:</td>
							<td><input type="text" name="st_name" required></td>
					</tr>
					<tr>
							<td>Course Code:</td>
							<td><input type="text" name="code" required></td>
					</tr>
					<tr>
							<td>Section:</td>
							<td><input type="text" name="id" required></td>
					</tr>
					<tr>
							<td>Semester:</td>
							<td><input type="text" name="semester" required></td>
					</tr>
					<tr>
							<td>Credit:</td>
							<td><input type="text" name="credit" required></td>
					</tr>
				</table>
				<br>
				<hr>
				<br>

				<!-- mid 1 -->
						<div class="mid1">

								<table >
									<caption>First Mid</caption>
									<tr>
										<td>CO1: </td>
										<td><input type="text" name="CO1_1" required> </td>
									</tr>
									<tr>
										<td>CO2:</td>
										<td><input type="text" name="CO2_1" required></td>
									</tr>
									<tr>
										<td>CO3:</td>
										<td><input type="text" name="CO3_1" required></td>
									</tr>
									<tr>
										<td>CO4:</td>
										<td><input type="text" name="CO4_1" required></td>
									</tr>
								</table>
					</div>

					<!-- mid 2  -->
						<div class="mid2">

								<table >
									<caption>Second Mid</caption>

									<tr>
										<td>CO1: </td>
										<td><input type="text" name="CO1_2" required> </td>
									</tr>
									<tr>
										<td>CO2:</td>
										<td><input type="text" name="CO2_2" required></td>
									</tr>
									<tr>
										<td>CO3:</td>
										<td><input type="text" name="CO3_2" required></td>
									</tr>
									<tr>
										<td>CO4:</td>
										<td><input type="text" name="CO4_2" required></td>
									</tr>
								</table>
					</div>
				<!-- mid 3 -->
				<div class="mid3">

						<table>
							<caption>Final</caption>

							<tr>
								<td>CO1: </td>
								<td><input type="text" name="CO1_3" required> </td>
							</tr>
							<tr>
								<td>CO2:</td>
								<td><input type="text" name="CO2_3" required></td>
							</tr>
							<tr>
								<td>CO3:</td>
								<td><input type="text" name="CO3_3" required></td>
							</tr>
							<tr>
								<td>CO4:</td>
								<td><input type="text" name="CO4_3" required></td>
							</tr>
						</table>

				</div>

				<button type="submit" name="Submit">Submit</button>
				</form>

		</div>

	</body>
</html>
