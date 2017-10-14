<?php 

require_once 'vendor/autoload.php';

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

try {
	if(file_exists($Monday) || file_exists($Tuesday) || file_exists($Wednesday) || file_exists($Thursday) || file_exists($Friday) || file_exists($Saturday) || file_exists($Sunday))
	{
		require $Monday;
		require $Tuesday;
		require $Wednesday;
		require $Thursday;
		require $Friday;
		require $Saturday;
		require $Sunday;
	}	
} catch (Exception $e) {
	echo 'Error! ',  $e->getMessage(), "\n";
}

class Mon {

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Monday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
				if(!$create)
				{
					$message = 'Event or Time had an error or was empty';

				} 

				$message = 'Event for '.$time.' was created';

			} else {
				$message = 'Please enter the event & time';
			}
			return $message;
		}
		public function update($event_id, $event, $newtime)
		{

			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Monday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllMonEvents()
		{
			$all = Monday::all();
			foreach($all as $events)
			{
				return $event = $events->event;
			}

		}
		public function getSingleMonEvent($event_id)
		{
			$doFind = Monday::find_by_id($event_id);
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Tue {

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Tuesday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
				if(!$create)
				{
					$message = 'Event or Time had an error or was empty';

				} 

				$message = 'Event for '.$time.' was created';

			} else {
				$message = 'Please enter the event & time';
			}
			return $message;
		}
		public function update($event_id, $event, $newtime)
		{

			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Tuesday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllMonEvents()
		{
			$all = Tuesday::all();
			foreach($all as $events)
			{
				return $event = $events->event;
			}

		}
		public function getSingleMonEvent($event_id)
		{
			$doFind = Tuesday::find_by_id($event_id);
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
// $test = new Mon(); 
// $test->create('Kristian Rocks.', 'four_fourteen');
// $test->deleteSingleEvent(3);

?>