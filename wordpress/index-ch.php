<?php

/**
 * Template Name: ch/index
 * Template Post Type: page
 */
get_header('ch');
?>

<div class="top-page">
    <?php 
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
        'post_type'=> 'info',
        'orderby'    => 'date',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'paged' => $paged,
        'posts_per_page' => 4, // this will retrive all the post that is published 
        'info-categories' => 'ch',
        );
        $result = new WP_Query( $args );
    ?>

    <div class="slide-container">
        <div id="slider">
            <?php
            $job_sub_images = get_field('slide_image');
            
            if ($job_sub_images) : ?>
                <?php
                $index = 1;
                foreach ($job_sub_images as $image) : ?>
                    <div class="slide-image <?php if($index++ == 1) { echo 'slick-now1'; }?>" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>)">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <h2 class="slide-content-container">
            <div class="slide-content">
                <div class="slide-text">
                    <?php the_field('slide_text_1') ?><span class="text-yellow"><?php the_field('slide_text_2') ?></span><?php the_field('slide_text_3') ?>
                </div>
                <div class="slide-text">
                    <span>
                        <?php the_field('slide_text_4') ?>
                    </span>
                </div>
            </div>
        </h2>
    </div>

    <div class="top-main-container">
        <!-- NEW -->
        <div class="p-t-40 p-b-40">
            <div class="news">
                <div class="row mx-0 info-border">
                    <div class="column-left col-sm-12 col-md-6 col-xl-4 p-l-50">
                        <div class="m-l-20">
                            <div class="m-t-40 m-b-40 view-new-pc">
                                <h1>NEWS</h1>
                                <span>新到信息</span>
                            </div>
                            <div class="container-button view-new-pc">
                                <a class="button-primary button-line" href="<?php echo home_url('/ch/info')?>">VIEW MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="column-right col-sm-12 col-md-6 col-xl-8">
                        <div class="view-new-sp">
                            <h1>NEWS</h1>
                            <p>新到信息</p>
                        </div>
                        <?php if ( $result-> have_posts() ) : ?>
                            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                            <div class="column-row row">
                                <div class="col-sm-12 col-md-12 col-xl-4">
                                    <span><?php echo get_the_date('Y年m月d日');?></span>
                                </div>
                                <div class="col-sm-12 col-md-12 col-xl-8">
                                    <span > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                </div>
                            </div>
                            <hr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="view-new-sp m-t-40">
                        <div class="d-flex center">
                            <a class="button-primary button-line" href="<?php echo home_url('/ch/info')?>">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="product bg-c-grey fadeInUp">
            <div class="pro-title p-t-50">
                <h4 class="text-heading text-heading-type3">PRODUCT</h4>
                <span>产品信息</span>
            </div>
            <div class="content-title p-t-30 p-l-30 p-r-30 fadeInUp">
                <h5>
                    <span class="pro-header">-</span> 不同用途成形機例
                </h5>
                <div class="row product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=food-seasoning');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/1-ch.svg' ?>" />
                        </a>
                    </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=consumer-dailypackaging');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/2-ch.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=printing');?>">
                            <img  class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/3-ch.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 m-b-15 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=industrial-packaging');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/4-ch.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=pharmaceutical-sanitation');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/5-ch.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products1/?title=automobile-motorcycle');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/6-ch.svg' ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-title p-l-30 p-r-30 fadeInUp">
                <h5> <span class="pro-header">-</span> 不同容量成型機例</h5>
                <div class="row product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products2/?title=100ml');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/7.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products2/?title=100mL-1l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/8.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products2/?title=2l-5l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/9.svg' ?>" />
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products2/?title=10l-20l');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/10.svg' ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-title p-l-30 p-r-30 fadeInUp">
                <h5> <span class="pro-header">-</span> 周辺機器</h5>
                <div class="row view-img-pc product-row">
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 product-item">
                        <a href="<?php echo home_url('/ch/products3');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/12.svg' ?>" />
                        </a>
                    </div>
                </div>
                <div class="row view-img-sm">
                    <div class="col-12">
                        <a href="<?php echo home_url('/ch/products3');?>">
                            <img class="images lazy" alt="" data-src="<?php echo THEME_IMG_URI . '/top-page/12-1.svg' ?>" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php  if( my_wp_is_mobile()){  ?>   
            <!-- SCHOOL -->
            <div class="school m-t-50 m-b-50 fadeInUp">
                <div class="row school-wrapper">
                    <div class="center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/ch/techinfo1');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/blow-ch-sm.png' ?>" alt="Northern Lights">
                        </a>
                    </div>
                    <div class="blog center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/ch/techinfo2');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/case-ch-sm.png'?>" alt="Northern Lights">
                        </a>
                    </div>
                </div> 
            </div> 

            <!-- PICK UP -->
            <div class="pick-up m-t-50 bg-c-grey fadeInUp">
                <div class="pro-title p-t-50">
                    <h4 class="text-heading text-heading-type3">PICK UP</h4>
                    <span>各種检测</span>
                </div>
                <div class="row pick-up__content">
                    <div class="col-4 gallery gallery1">
                        <a href="<?php echo home_url('/ch/about2')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup1-sm.png' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">公司信息</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery2">
                    <a href="<?php echo home_url('/ch/techinfo5')?>">
                        <div class="gallery__image-block">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup2-ch-sm.png' ?>" alt="Cinque Terre" >
                            <span class="gallery__text"> 公司的优势</span>
                        </div>
                        <div>
                            <button class="btn-view button-line-view">
                                <span>VIEW MORE</span>
                                <i></i>
                            </button>
                        </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery3">
                        <a href="<?php echo home_url('/job3')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup3-sm.png' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">员工博客（日本語）</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php } else { ?>               
            <!-- SCHOOL -->
            <div class="school m-t-50 m-b-50 fadeInUp">
                <div class="row school-wrapper">
                    <div class="center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/ch/techinfo1');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/blow-ch.jpg' ?>" alt="Northern Lights">
                        </a>
                    </div>
                    <div class="blog center col-sm-12 col-lg-6 fadeInUp">
                        <a href="<?php echo home_url('/ch/techinfo2');?>">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/case-ch.jpg'?>" alt="Northern Lights">
                        </a>
                    </div>
                </div> 
            </div> 

            <!-- PICK UP -->
            <div class="pick-up m-t-50 bg-c-grey fadeInUp">
                <div class="pro-title p-t-50">
                    <h4 class="text-heading text-heading-type3">PICK UP</h4>
                    <span>各種检测</span>
                </div>
                <div class="row pick-up__content">
                    <div class="col-4 gallery gallery1">
                        <a href="<?php echo home_url('/ch/about2')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup1.jpg' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">公司信息</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery2">
                    <a href="<?php echo home_url('/ch/techinfo5')?>">
                        <div class="gallery__image-block">
                            <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup2-ch.jpg' ?>" alt="Cinque Terre" >
                            <span class="gallery__text"> 公司的优势</span>
                        </div>
                        <div>
                            <button class="btn-view button-line-view">
                                <span>VIEW MORE</span>
                                <i></i>
                            </button>
                        </div>
                        </a>
                    </div>
                    <div class="col-4 gallery gallery3">
                        <a href="<?php echo home_url('/job3')?>">
                            <div class="gallery__image-block">
                                <img class="lazy" data-src="<?php echo THEME_IMG_URI . '/top-page/pickup3.jpg' ?>" alt="Cinque Terre" >
                                <span class="gallery__text">员工博客（日本語）</span>
                            </div>
                            <div>
                                <button class="btn-view button-line-view">
                                    <span>VIEW MORE</span>
                                    <i></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php  } ?>
    </div>
</div>
<?php get_footer('ch'); ?>