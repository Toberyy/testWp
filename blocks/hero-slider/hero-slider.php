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
