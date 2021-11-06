<?php
	
	
/**
 * [Class Time]
 */
	class Time{
		
		/**
		 * addDayTime
		 *
		 * @param mixed $addDay=0
		 * @param mixed $addHour=0
		 * @param mixed $addMinute=0
		 * 
		 * @return [type]
		 */
		public static function addDayTime($addDay=0,$addHour=0,$addMinute=0){
			return date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . " + ".$addDay." days + ".$addHour." hours + ".$addMinute." minutes"));
			
		}
		
		/**
		 * addDay
		 *
		 * @param mixed $addDay=0
		 * 
		 * @return [type]
		 */
		public static function addDay($addDay=0){
			return date('Y-m-d', strtotime(date('Y-m-d') . " + ".$addDay." days"));
			
		}
		
	}	
?>