<div id="floor-<?php echo $floor ?>">
    <div class="plan-title">
        Планировка <?php echo $floor ?> этажа
    </div>
    <div class="plan">
        <img src="<?= get_template_directory_uri(); ?>/library/photo/floor-1.png" alt="">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 1140 406" style="enable-background:new 0 0 1140 406;" xml:space="preserve">

            <a href="#apartment-1"
               class="flat-button"
               data-flat="<?php echo 10 + (3 * ($floor - 1)) ?>"
               data-flattype="1-1"
               data-number="1"

            >
                <polyline points="270.3,205 270.3,226 263,226 263,339.3 243.7,339.3 243.7,353 248,353 248.3,384.3 140.7,384.3 140.7,353.3
		144,353.3 144,339.3 21.7,339 21.7,193.3 180.3,193.3 180,197.7 216.9,197.7 217.7,193.3 263.7,193.3 263,205.3 	"
                          class="apartment apartment-1"/>

            </a>

            <a href="#apartment-2"
               class="flat-button"
               data-flat="<?php echo 11 + (3 * ($floor - 1)) ?>"
               data-flattype="1-2"
               data-number="2"
            >
                <polygon points="22.8,184.8 22.3,31.3 141.7,31 141.3,24.8 279.5,24.8 279.5,90.8 340.3,91 340.3,136.8 290,136.8 290.5,155
		295.8,155 295.8,177.3 290.5,177.5 290.5,184.8 	" class="apartment apartment-2"/>
            </a>

            <a href="#apartment-3"
               class="flat-button"
               data-flat="<?php echo 3 + (3 * ($floor - 1)) ?>"
               data-flattype="1-3"
               data-number="3"
            >
                <polygon points="476.5,384.3 368.3,384.3 368.3,352.7 372.7,352.7 372,339.7 356.7,339.7 356.7,226.3 346.3,226.3 346.3,204.7
		356.7,204.7 356.3,193.3 391.7,193.3 392,203 400.7,203 400.7,167.7 426,167.7 425,155 397.7,155 397.3,123.3 548.7,123.3
		548.7,167.3 556.7,167.3 556.7,339.3 473,339.7 473.3,352 476.7,352.3 	" class="apartment apartment-3"/>
            </a>
            <a href="#apartment-4"
               class="flat-button"
               data-flat="<?php echo 13 + (2 * ($floor - 1)) ?>"
               data-flattype="1-4"
               data-number="4"
            >
                <polygon points="785.7,384.3 669.3,384.3 669.3,353 672.7,353 672.3,339.3 582.3,339.3 582.3,167.7 645.7,167.7 645,155.3
		639.7,155.3 639.3,123.3 755.7,123.3 755.8,195.3 797.3,195.5 797.3,207.7 808.3,207.8 808.3,229.7 797.7,229.8 797.7,339.8
		780.3,339.8 780.3,352.7 785.5,352.7 	" class="apartment apartment-4"/>
            </a>
            <a href="#apartment-5"
               class="flat-button"
               data-flat="<?php echo 14 + (2 * ($floor - 1)) ?>"
               data-flattype="1-5"
               data-number="5"
            >
                <polyline points="945,195.2 945,150 948.5,150 948.5,105.5 1064.3,105.5 1064.3,137 1057.3,137.3 1057.3,150.3 1116.5,150.3
		1116.5,339.5 1027.3,339.5 1027.3,352 1029.3,352 1029.3,384.2 913.7,384.2 913.7,352.5 918.5,352.5 918.3,339.5 901.5,339.5
		901.3,230.7 890.2,230.7 890.2,207.7 901.3,207.7 901.3,195.2 	" class="apartment apartment-5"/>
            </a>
</svg>
    </div>
</div>
