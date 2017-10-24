<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elite_mebel
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
    <!-- #secondary -->
    <?php else : ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="entry-content">
                <?php 
the_archive_description( '
<div class="taxonomy-description">', '</div>
 
' ); 
?>
            </div>

            <div id="adventage">
                <h2>Наши преимущества</h2>
                <div id="atg-1" class="atg">
                    <div class="icon-avt-1 icon-avt"></div>
                    <div class="info">Работаем 10 лет</div>
                </div>

                <div id="atg-2" class="atg">
                    <div class="icon-avt-2 icon-avt"></div>
                    <div class="info">Наработанные дизайнерские решенеия</div>
                </div>

                <div id="atg-3" class="atg">
                    <div class="icon-avt-3 icon-avt"></div>
                    <div class="info">Делаем “Под ключ”</div>
                </div>

                <div id="atg-4" class="atg">
                    <div class="icon-avt-4 icon-avt"></div>
                    <div class="info">Собственная дизайн-студия</div>
                </div>

                <div id="atg-5" class="atg">
                    <div class="icon-avt-5 icon-avt"></div>
                    <div class="info">Ручная работа</div>
                </div>
            </div>
            <!-- #adventage -->
        </div>
        <!-- .col-lg-12 -->
    </div>
    <!-- .row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Акция!</h2>
            <div id="banner">
                <a href="#" class="request-call" data-toggle="modal" data-target="#requestcall">
				<img src="<?php echo get_template_directory_uri().'/img/sale_15_percent.jpg'; ?>" alt="Баннер распродажи. Скидки 15%">
			</a>
            </div>
            <!-- #banner -->
        </div>
        <!-- .col-lg-12 -->
    </div>
    <!-- .row -->
    <?php endif; ?>
