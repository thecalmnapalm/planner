<?php 
class Tue {
		public $day_name = 'Monday';

		public function create($event, $time, $ampm)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Tuesday::create(array('today' => $date, 'time' => $time, 'ampm' => $ampm, 'event' => $event, 'status' => $status));
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
 ?>