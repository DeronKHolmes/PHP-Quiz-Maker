<?php 
	include 'inc/header.php';
	include 'database.php';
?>

<?php 
	/* 
	*	Get Total Questions
	*/
	$query = "SELECT * FROM questions";
	// Get Results
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total  = $results->num_rows;
?>

	<main>
		<div class="container">
			<h2>Test your PHP knowledge</h2>
			<p>This is a multiple choice quiz to test your knowledge of PHP</p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong> <?php echo $total * 0.5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>

		</div>
	</main>
	
<?php include 'inc/footer.php' ?>
