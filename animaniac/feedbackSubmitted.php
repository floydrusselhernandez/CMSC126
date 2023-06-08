<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
	<link rel="stylesheet" href="css/design.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="icon" type="image/png" href="res/logo1.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
	<!-- Header -->
        <?php
            include 'header.php';
        ?>
	<!-- Body -->
	<div class="submittedFeedbackPage">
	<h1 class="smallerHeader">ratings & reviews center</h1>
	<div class="tabHeaders">
		<button  class="unactiveTab awaitingReview" onclick="window.location.href ='feedbackAwaiting.php';">Awaiting Review </button>
		<button class="activeTab submittedReview">Submitted Review </button>
	</div>
	<?php
        include 'productSubmittedReview.php';
    ?>

	</div>
	<?php
		include 'footer.php';
	?>
</body>
</html>