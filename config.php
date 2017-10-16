<?php 
date_default_timezone_set('America/Denver');
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'vendor/autoload.php';
define('SITE', "http://localhost/planner/index.php");
ActiveRecord\Config::initialize(function($cfg)
{
 $models = __DIR__ . '/models';
 $cfg->set_model_directory($models);
 $cfg->set_connections(array(
     'planner' => 'mysql://root:root@localhost/planner'));
});

$models = __DIR__ . '/models';
$Monday = $models . '/Monday.php';
$Tuesday = $models . '/Tuesday.php';
$Wednesday = $models . '/Wednesday.php';
$Thursday = $models . '/Thursday.php';
$Friday = $models . '/Friday.php';
$Saturday = $models . '/Saturday.php';
$Sunday = $models . '/Sunday.php';

// controllers
$controllers = __DIR__ . '/controllers';
$Time = $controllers . '/Time.php';
$Sun = $controllers . '/Sun.php';
$Mon = $controllers . '/Mon.php';
$Tue = $controllers . '/Tue.php';
$Wed = $controllers . '/Wed.php';
$Thu = $controllers . '/Thu.php';
$Fri = $controllers . '/Fri.php';
$Sat = $controllers . '/Sat.php';
$Calendar = $controllers . '/Calendar.php';


try {
	if(file_exists($Monday) || file_exists($Tuesday) || file_exists($Wednesday) || file_exists($Thursday) || file_exists($Friday) || file_exists($Saturday) || file_exists($Sunday) || file_exists($Time) || file_exists($Sun) || file_exists($Mon) || file_exists($Tue) || file_exists($Wed) || file_exists($Thu) || file_exists($Fri) || file_exists($Sat) || file_exists($Calendar) )
	{
		require $Monday;
		require $Tuesday;
		require $Wednesday;
		require $Thursday;
		require $Friday;
		require $Saturday;
		require $Sunday;
		require $Time;
		require $Sun;
		require $Mon;
		require $Tue;
		require $Wed;
		require $Thu;
		require $Fri;
		require $Sat;
		require $Calendar;
	}	
} catch (Exception $e) {
	echo 'Error! ',  $e->getMessage(), "\n";
}
// Sample References //
/////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
// $test = new Sat(); 

/* $test->create('Help someone move', 'six_fourty_six');
 if($test)
 {
 	echo '{"success":"Event for '.$test->day_name.' created!"}';
 }*/

// $test->getSingleSatEvent(2);
/*
foreach($test->getAllSatEvents() as $event)
{
	$getTime = new Time();

	echo "Time: " . $getTime->inputToTime($event->time) . " Event: " . $event->event . "<br />";
}*/
// $test->update(2, "Going to doctors", "seven_thirteen");
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
?>