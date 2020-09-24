<?php
	$date = $_POST["date"];
	$sumDeposit = $_POST["sumDeposit"];
	$termDeposit = $_POST["termDeposit"];
	$replenishDeposit = $_POST["replenishDeposit"];
	$sumReplenishDeposit = $_POST["sumReplenishDeposit"];

	//количество дней в году
	$percent = 10;
	$daysy = 0;
	//echo "$date";
	list($month, $day, $year) = explode("/", $date);
	if($replenishDeposit == "Нет"){
		$sumReplenishDeposit = 0;
	}
	$result = 0;
		DaysAYear($year);
		$days0 = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$summ0 = intval($sumDeposit) + (intval($sumDeposit) + intval($sumReplenishDeposit) ) * $days0 * ($percent / $daysy );
		
		for ($i=1; $i < intval($termDeposit)*12; $i++) { 
			
		}
	
	


//функция определения количества дней в году
	function DaysAYear($year)
	{
		global $daysy;
		if(strlen($year) == 4) {
	    if (isLeap($year)) {
	        $daysy = 366; //високосный
	    } else {
	        $daysy = 365; //обычный
	    }
		}
	}
	function isLeap($year) {
    return date('L', mktime(0, 0, 0, 1, 1, $year));
}
?>