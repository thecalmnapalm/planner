<?php 

class Thu {

		public $day_name = 'Thursday';

		public function create($event, $time, $ampm)
		{
			$date = date("Y-m-d H:i:s");
			$modified = date("Y-m-d H:i:s");
			$status = 'awaiting';
			if(!empty($event) && !empty($time))
			{
				$create = Thursday::create(array('today' => $date, 'time' => $time, 'ampm' => $ampm, 'event' => $event, 'status' => $status));
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
 ?>