<div id="floor-<?php echo $floor ?>">
    <div class="plan-title">
        Планировка <?php echo $floor ?> этажа
    </div>

    <div class="plan">
        <img src="<?= get_template_directory_uri(); ?>/library/photo/floor-4.png" alt="">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1140 406" style="enable-background:new 0 0 1140 406;" xml:space="preserve">
            <a href="#apartment-10"
               class="flat-button <?php echo $flats[getFlatNumber($floor, 1)] ? 'sold' : '' ?>"
               data-sold="<?php echo $flats[getFlatNumber($floor, 1)] ?>"
               data-flat="<?php echo getFlatNumber($floor, 1) ?>"
               data-flattype="4-1"
            >
                <polyline points="283.3,332.5 226.5,332.5 226.5,345.8 234.3,345.8 234.3,378 123.5,378 123.5,345.5 130.8,345.5
		130.8,332.5 35.5,332.5 35.5,215.5 22.3,215.5 22.3,319 2.3,319 2.3,189.5 35.3,189.5 35.3,182.3 283.3,182.3 283.3,193
		290.5,192.8 290.5,216.3 283.3,216.3" class="apartment apartment-1"/>
            </a>
            <a href="#apartment-11"
               class="flat-button <?php echo $flats[getFlatNumber($floor, 2)] ? 'sold' : '' ?>"
               data-sold="<?php echo $flats[getFlatNumber($floor, 2)] ?>"
               data-flat="<?php echo getFlatNumber($floor, 2) ?>"
               data-flattype="4-2"
            >
                <polygon points="310.2,172.5 35.8,172.5 35.8,15 144.5,15 145,46 191.5,46 191.5,33.3 157.5,33 157.3,8.3 291.5,8.3
		291.5,64.8 267,64.8 266.5,33.5 212,33.3 212.3,46 254,46 253.8,138.8 270.3,139 270.3,77 362.3,77 362.3,123.8 310,123.5
		310.3,142.5 316.3,142.5 316.3,165.8 310.3,165.8 	" class="apartment apartment-2"/>
            </a>
            <a href="#apartment-12"
               class="flat-button <?php echo $flats[getFlatNumber($floor, 3)] ? 'sold' : '' ?>"
               data-sold="<?php echo $flats[getFlatNumber($floor, 3)] ?>"
               data-flat="<?php echo getFlatNumber($floor, 3) ?>"
               data-flattype="4-3"
            >
                <polygon points="584.3,332.8 527.5,332.8 527.5,345.8 534.5,345.8 534.8,378 424.3,378 424.3,346 431.8,345.8
		431.8,332.8 378.5,332.8 378,216.3 368.5,216.3 368.5,192.8 378.5,192.8 378.5,182.3 414.5,182.3 414.8,192.5 423.8,192.3
		423.5,155.3 449.3,155.3 449,142.5 423.3,142.5 423.3,122 575.3,122 575.8,155.5 584.3,155.5 	"
                         class="apartment apartment-3"/>
            </a>
            <a href="#apartment-19"
               class="flat-button <?php echo $flats[getFlatNumber($floor, 4)] ? 'sold' : '' ?>"
               data-sold="<?php echo $flats[getFlatNumber($floor, 4)] ?>"
               data-flat="<?php echo getFlatNumber($floor, 4) ?>"
               data-flattype="4-4"
            >
                <polygon points="775.3,378.3 664.8,378.3 664.8,345.8 672.5,345.8 672.5,332.5 615.8,332.5 615.5,155 675.5,155
		675.5,142.3 670.3,142.3 670.3,109.5 718.8,109.5 719,122 824.5,122 824.5,142.5 696.5,142.5 697,155 821,155 821.5,195.8
		831.5,195.8 831.5,219.3 820.8,219.3 820.8,332.5 767.5,332.8 767.5,345.3 775.3,345.3 	"
                         class="apartment apartment-4"/>
            </a>
            <a href="#apartment-20"
               class="flat-button <?php echo $flats[getFlatNumber($floor, 5)] ? 'sold' : '' ?>"
               data-sold="<?php echo $flats[getFlatNumber($floor, 5)] ?>"
               data-flat="<?php echo getFlatNumber($floor, 5) ?>"
               data-flattype="4-5"
            >
                <polyline points="1076.5,378.5 965.5,378.5 965.5,346 973.5,346 973.5,332.5 920,332.5 920,219.8 909.3,219.8
		909.3,196.8 920,196.8 920.3,155.3 961.5,155.3 961.8,138 1048.5,138 1048.5,124.3 948.8,124.3 948.8,142.5 927.3,142.5 927,103.8
		1016,103.8 1016,91.5 1075.3,91.5 1075.3,124.5 1068.8,124.5 1068.8,138.3 1124.5,138.5 1124.5,332 1068.3,331.8 1068.3,345
		1076.8,345.2 	" class="apartment apartment-5"/>
            </a>
</svg>
    </div>
</div>
