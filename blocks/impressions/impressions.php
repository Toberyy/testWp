<?php 
$imp_img = get_field('imp_img');
$imp_over = get_field('imp_over');
$imp_title = get_field('imp_title');
$numbers = get_field('numbers');
$number1 = $numbers['number1'];
$number2 = $numbers['number2'];
$text1 = $numbers['text1'];
$text2 = $numbers['text2'];
?>
<section class="impressions">
    <div class="container">
        <div class="impressions__content">
            <img src="<?=$imp_img['url'];?>" alt="<?=$imp_img['alt'];?>" class="impressions__content_img">
            <div class="impressions__content_text">
                <span class="impressions__content_over"><?=$imp_over;?></span>
                <h2 class="title"><?=$imp_title;?></h2>
                <div class="impressions__text_numbers">
                    <div class="impressions__text_number">
                        <span><?=$number1;?></span>
                        <p><?=$text1;?></p>
                    </div>
                    <div class="impressions__text_number">
                        <span><?=$number2;?></span>
                        <p><?=$text2;?></p>
                    </div>
                </div>
                <div class="impressions__text_calculator">
                    <p>Vacation calculator</p> 
                    <div>
                        <input type="number" id="num1" placeholder="Первое число">
                        <select id="operation">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <input type="number" id="num2" placeholder="Второе число">
                    </div>
                    <div id="result">Result will be shown here</div>
                </div>
            </div>               
        </div>
    </div>
</section>
