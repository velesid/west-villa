        <?php
        $floorText = 'Квартира';
            if($floorNull==0){
            $floorText = "Квартира";
        }
        ?>
<div id="apartment-1" class="selected-apartment">
    <div class="plan-title-text">
        <?=$floorText?> № <?=$flatNum?>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/flats/apartment-<?=$flatType?>.jpg" alt="">
    <div class="description">
        <ul class="nav nav-tabs">
            <li class="active" data-tab="#tab1"><a href="#">ХАРАКТЕРИСТИКИ</a></li>
            <li data-tab="#tab2"><a href="#">ОПИСАНИЕ</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane active">
                <table>
                    <tbody>
                    <tr>
                        <td>Комнаты</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Площадь</td>
                        <td>"53.7 м" <sup>2</sup></td>
                    </tr>
                    <tr>
                        <td>Жилая площадь.</td>
                        <td>###</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="tab2" class="tab-pane">
                <h2>Описание</h2>
                <p> </p>
            </div>
        </div>
    </div>
</div>