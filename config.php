<?php 
date_default_timezone_set('America/Denver');
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
		public $day_name = 'Monday';

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
			$update = Monday::find_by_id($event_id);
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
			return $all = Monday::all();

		}
		public function getSingleMonEvent($event_id)
		{
			$doFind = Monday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Tue {

		public $day_name = 'Tuesday';

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
			$update = Tuesday::find_by_id($event_id);
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
		public function getAllTueEvents()
		{
			return $all = Tuesday::all();
		}
		public function getSingleTueEvent($event_id)
		{
			$doFind = Tuesday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Wed {

		public $day_name = 'Wednesday';

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Wednesday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
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
			$update = Wednesday::find_by_id($event_id);
			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Wednesday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllWedEvents()
		{
			return $all = Wednesday::all();
		}
		public function getSingleWedEvent($event_id)
		{
			$doFind = Wednesday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Thu {

		public $day_name = 'Thursday';

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Thursday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
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
			$update = Thursday::find_by_id($event_id);
			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Thursday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllThuEvents()
		{
			return $all = Thursday::all();

		}
		public function getSingleThuEvent($event_id)
		{
			$doFind = Thursday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Fri {

		public $day_name = 'Friday';

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Friday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
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
			$update = Friday::find_by_id($event_id);
			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Friday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllFriEvents()
		{
			
			return $all = Friday::all();

		}
		public function getSingleFriEvent($event_id)
		{
			$doFind = Friday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
class Sat {

		public $day_name = 'Saturday';
		public $array = array();

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Saturday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
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
			$update = Saturday::find_by_id($event_id);
			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Saturday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllSatEvents()
		{
			return $all = Saturday::all();

		}
		public function getSingleSatEvent($event_id)
		{
			$doFind = Saturday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				echo $foundEvent = $found->event;
			}
		}
}
class Sun {

		public $day_name = 'Sunday';

		public function create($event, $time)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Sunday::create(array('today' => $date, 'time' => $time, 'event' => $event, 'status' => $status));
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

			$update = Sunday::find_by_id($event_id);
			$update->modified = date("Y-m-d H:i:s");
			$update->event = $event;
			$update->time = $newtime;
			$update->save();
		}
		public function deleteSingleEvent($event_id)
		{
				$doDelete = Sunday::find_by_id($event_id);
				$doDelete->delete();
				if($doDelete)
				{
					$message = "deleted";
				} else {
					$message = "event not found.";
				}
				return $message;
		}
		public function getAllSunEvents()
		{
			$all = Sunday::all();

		}
		public function getSingleSunEvent($event_id)
		{
			$doFind = Sunday::find('all', array('conditions' => array('id = ?', $event_id)));
			foreach($doFind as $found)
			{
				return $foundEvent = $found->event;
			}
		}
}
 $test = new Sat(); 

/* $test->create('Another test', 'six_fourty_six');
 if($test)
 {
 	echo '{"success":"Event for '.$test->day_name.' created!"}';
 }*/

// $test->getSingleSatEvent(2);

/*foreach($test->getAllSatEvents() as $event)
{
	echo $event->event . "<br>";
}*/
$test->update(2, "Kristian is cool", "seven_thirteen");

?>