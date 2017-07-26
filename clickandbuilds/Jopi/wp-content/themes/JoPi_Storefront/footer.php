<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
		<section class="container-fluid seccion footer p-4">
  <div class="row justify-content-center">
    <div class="cols-4 d-flex justify-content-center"> 
    <a target="_blank" href="https://www.facebook.com/jopi.coverpeer/"><i class="m-2 fa fa-facebook fa-lg"></i></a> 
    <a target="_blank" href="https://twitter.com/jopi_mx"><i class="m-2 fa fa-twitter fa-lg"></i></a> 
    <!--<a target="_blank" href=""><i class="m-2 fa fa-youtube fa-lg"></i></a> -->
    <a target="_blank" href="https://www.instagram.com/jopi9902/"><i class="m-2 fa fa-instagram fa-lg"></i></a> </div>
  </div>
  <div class="row mt-3">
    <div class="cols-sm-3 d-flex flex-column">
      <h5 class="tituloFooter">JoPi</h5>
      <ul class="footer-links">
        <li><a class="cont_ext qnSms" id="qnSms" href="">Quiénes somos</a></li>
        <li><a class="cont_ext video_pres" href="">Video explicativo</a></li>
        <li><a class="cont_ext" id="legal" href="">Legal</a></li>
        <li><a class="cont_ext" id="avisPriv" href="">Aviso de Privacidad</a></li>
      </ul>
    </div>
    <div class="cols-sm-3 d-flex flex-column">
      <h5 class="tituloFooter">Atención al cliente</h5>
      <ul class="footer-links">
        <li class=""><a href="mailto:contacto@jopi.com.mx?subject=Hola JoPi">Escríbenos a contacto@jopi.com.mx</a></li>
        <li class=""><a href="">Chat</a></li>
        <li class=""><a href="">Llámanos</a></li>
        <li class=""><a href="">Reportar un percance</a></li>
      </ul>
    </div>
    <div class="cols-sm-3 d-flex flex-column">
      <h5 class="tituloFooter">Secciones</h5>
      <ul class="footer-links">
        <li><a id="faq" href="">FAQ (Preguntas frecuentes)</a></li>
        <li><a id="scroll_rcv" href="#">¿Cómo proteger mi celular contra robo con violencia?</a></li>
        <li><a id="scroll_vntj" href="">Ventajas de proteger mi celular con JoPi</a></li>
        <li><a id="scroll_sbq" href="">¿Sabías Que?</a></li>
        <li><a href="">Blog</a></li>
      </ul>
    </div>
    <div class="cols-sm-3"><img src="https://jopi.com.mx/img/jopi_logo.svg" alt="" class="img-fluid w-75"></div>
  </div>
</section>
		
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
