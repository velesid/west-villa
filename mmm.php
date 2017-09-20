<a href="/house/?floor=0" class="button-floor" data-floor="0"> </a> <!-- ETAG  data-floor="0" -->

<?   //ajax-floor
$floor = (int)$_GET['floor']; if($floor==0){$imageType = 0;}
elseif(in_array($floor, [1,2,3])) {$imageType = 1;}    else{$imageType = 4;}
include get_template_directory() . '/house/floor-'.$imageType.'-svg.php'; ?>



<a href="#apartment-1" class="flat-button" data-flat="<?php echo 10 + (3 * ($floor - 1)) ?>" data-flattype="1-1"> <!-- KVARTIRA  -->

    $flatNum


    $flatNum $flatNum $flatNum $flatNum $flatNum $flatNum $flatNum