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
?>