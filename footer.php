<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elite_mebel
 */

?>

	</div><!-- #content -->
	<div class="container-fluid footerbg">
		<div class="container">
			<div class="row">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<div class="site-info">
							<div class="logo"><img src="<?php echo get_template_directory_uri().'/img/logo.png'; ?>" width="150" alt="Мебель на заказ"></div>
							<p class="develop"><a href="http://раскрутитьсайт.рф">Создание и продвижение сайта</a></p>
							<p class="copyright">© 2017 Все права защищены</p>
						</div><!-- .site-info -->
					</div><!-- .col-lg-3 -->

					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<h3>Каталог</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-footer-left', 'menu_id' => 'menu-footer-left' ) ); ?>
					</div><!-- .col-lg-3 -->

					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<h3>Меню</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-footer-right', 'menu_id' => 'menu-footer-right' ) ); ?>
					</div><!-- .col-lg-3 -->

					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer-contacts">
						<div class="address">Москва, Советская д.36, стр.67</div>
						<div class="phone"><a href="tel:+74955320370">+7 (495) 532 03 70</a></div>
						<div class="email"><a href="mailto:info@luxuryfurniture.ru">3dgroup.zakaz@mail.ru</a></div>
						<!--<a href="#" class="request-call" data-toggle="modal" data-target="#requestcall">Заказать звонок</a>-->
						<div class="social-foot">
							<a href="https://vk.com/myrabotaemrukami" class="icon icon-vk"></a>
							<a href="#" class="icon icon-fb"></a>
							<a href="#" class="icon icon-ok"></a>
							<a href="#" class="icon icon-yb"></a>
						</div>
					</div><!-- .col-lg-3 -->

				</footer><!-- #colophon -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .container-fluid -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Modal -->
<div class="modal fade" id="requestcall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Заказать звонок</h4>
			</div>

			<div class="modal-body">
				<form role="form" id="ordercall">
					<div class="form-group">
						<label for="name">Имя</label>
						<input type="text" class="form-control" id="name" placeholder="Имя" required>
					</div>
					<div class="form-group">
						<label for="phone">Телефон</label>
						<input type="text" class="form-control" id="phone" placeholder="+7(495)502-6902" required>
					</div>
					<div class="form-group">
						<label for="email">Почта</label>
						<input type="text" class="form-control" id="mail" placeholder="example@mail.ru" required>
					</div>
					<div class="form-group">
						<label for="timecall">Удобное время для звонка</label>
						<input type="text" class="form-control" id="timecall" placeholder="с 10 до 18 часов" required>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				<button type="submit" class="btn btn-primary" form="ordercall">Заказать</button>
				<script>
				jQuery(document).ready(function($){
					$('#ordercall').submit(function(){
						var name = $('#ordercall #name').val();
						var phone = $('#ordercall #phone').val();
						var mail = $('#ordercall #mail').val();
						var timecall = $('#ordercall #timecall').val();
						$.ajax({
							type: "POST",
							url: '/ordercall.php',
							data: "phone=" + phone + "&timecall=" + timecall + "&mail=" + mail + "&name=" + name,
							success: function(msg){
								$('#requestcall .modal-body').html(msg);
							}
						});
						return false;
					});
				});
				</script>
			</div>
		</div>
	</div>
</div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42938459 = new Ya.Metrika({
                    id:42938459,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42938459" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- <script type="text/javascript" src="//cdn.perezvoni.com/widget/js/przv.js?przv_code=23373-972e7bf881-39ad0217b618a9f7-b39ad0217b618a9f7-8811"></script> -->


</body>
</html>