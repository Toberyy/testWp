<?php get_header();?>


<div class="main">
    <?php if (have_rows('main_slider')) : ?>
        <section class="hero p-0">
            <div class="swiper main-hero__swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('main_slider')) : the_row();
                        $img_main = get_sub_field('img_main');
                        $link = get_sub_field('link');
                        $title =  get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        ?>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="hero__content">
                                    <?php if ($title) :?>
                                        <h2><?=$title;?></h2>
                                    <?php endif; ?>
                                    <?php if ($subtitle) :?>
                                        <p><?=$subtitle;?></p>
                                    <?php endif; ?>
                                    <?php if ($link) :?>
                                        <a href="<?=$link;?>" class="btn btn_white">Book a tour</a>
                                    <?php endif; ?>
                                    <?php if (have_rows('list')) : ?>
                                    <ul>
                                        <?php while (have_rows('list')) : the_row(); 
                                        $item = get_sub_field('item');?>
                                        <li>
                                            <?= $item; ?>
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ($img_main):?>
                                <img src="<?=$img_main['url'];?>" alt="<?=$img_main['alt'];?>">
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="container swiper_container">
                    <div class="pagination">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                
                </div>
            </div>
        </section>
    <?php endif; ?>
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
</div>


<?php get_footer(); ?>