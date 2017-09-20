<?
/**
*
Template Name: Floor AJAX
*
*/

$floor = (int)$_GET['floor'];

if($floor==0){
    $imageType = 0;
}
elseif(in_array($floor, [1,2,3])) {
    $imageType = 1;
} else{
    $imageType = 4;
}

include get_template_directory() . '/house/floor-'.$imageType.'-svg.php';
?>
