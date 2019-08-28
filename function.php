<?php
function price_diff($input){
    
    $numb = ceil($input);
    
    if ($numb >= 1000){
        $numb = number_format ($numb, 0, ',', " " );
        $numb .= " ₽";
    }
    
    return $numb;
};
function esc($ctlg) {
	$image = strip_tags($ctlg);

	return $image;
}
function end_time($etm) {
    
    $check_time = strtotime($etm) - time();
    if ($check_time <= 0){
        return false;
    }
    $hours = floor($check_time/3600);
    $minutes = floor(($check_time%3600)/60);
    
    return $hours .":". $minutes;
}


?>
