<?php error_reporting(E_ALL); ini_set('display_errors', 1);
require 'config.php';
$Cal = new Calendar(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kristian's Custom Calendar</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="calendar.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<?php  
			if(isset($_REQUEST['month']) && isset($_REQUEST['year']))
			{
				$Cal->getCalendar($_REQUEST['month'], $_REQUEST['year']);
				$month = $_REQUEST['month'];
				$year = $_REQUEST['year'];
			} else {
				$month = '1'; 
				$year = '2017';
			}
		?>
	</div>
	<div style="background:#dedede;height:3px;" class="container-fluid">
		
	</div>
	<div class="container">
		<form action="<?php echo SITE; ?>" method="POST" role="form">
			<legend>Calendar</legend>
		
			<div class="form-group">
				<label for="">Show Calendar</label>
				<input type="text" class="form-control" name="month" value="<?php echo $month; ?>" placeholder="Month">
				<input type="text" class="form-control" name="year" value="<?php echo $year; ?>" placeholder="Year">
			</div>
		
			<button type="submit" class="btn btn-primary">Show Calendar</button>
		</form>
	</div>
</body>
</html>