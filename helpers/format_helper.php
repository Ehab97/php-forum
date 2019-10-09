<?php
function urlformat($var){
	//getride fo all space
 $var = preg_replace('/\s*/', '', $var);
 //convert to lower case
 $var = strtolower($var);
 $var = urldecode($var);
 return $var;
}
function formateDate($date){
	$date = date('F j, Y, g:i a',strtotime($date));
	return $date;
}
function is_active($cate){
	if(isset($_GET['category'])){
		if ($_GET['category']==$cate) {
			return 'active';
		}else
		return '';
	}else{
		if ($cate==null) {
			return 'active';
		}
	}
}
?>