<footer>
  <!-- Footer -->
  <div class="footer bg-gray position-relative">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-12 col-md-12 mb-5 text-md-center col-lg-2">
          <a href="<?= home_url()?>"><img class="w-auto mt-5" src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt=""></a>
          <h6 class="mt-3">Lo hacemos mejor y distinto</h6>        
        </div>
        <div class="col-12 mb-3 col-md-3 col-lg-2 mb-sm-0">
          <h6>Servicios</h6>
          <ul class="list-unstyled li-space-lg p-small">
            <li><a href="#">Interacción con clientes - Front Office</a></li>
            <li><a href="#">Provisión de personal - Staffing</a></li>
            <li><a href="#">Soporte al negocio - Back Office</a></li>
          </ul>
        </div>
        <div class="col-12 mb-3 col-md-3 col-lg-2 mb-sm-0">
          <h6>Sobre Nosotros</h6>
          <ul class="list-unstyled li-space-lg p-small">
            <li><a href="https://3eriza.pe/nosotros/">Nosotros</a></li>
            <li><a href="https://3eriza.pe/empleos/">Empleos</a></li>
            <li><a href="https://3eriza.pe/blog/">Blog</a></li>
          </ul>
        </div>
        <div class="col-12 mb-3 col-md-3 col-lg-2 mb-sm-0">
          <h6>Ubicanos</h6>
          <p class="small mt-3"><i class="fa fa-map-marker" aria-hidden="true"></i> Calle Los Halcones 102 Surquillo</p>
          <p class="small"><a href="mailto:contacto@3eriza.p"><i class="fa fa-envelope" aria-hidden="true"></i> contacto@3eriza.pe</a></p>
        </div>
        <div class="col-12 mb-3 col-md-3 col-lg-2 mb-sm-0">
          <h6>Redes Sociales</h6>
          <ul class="social-media mb-2 d-flex justify-content-start my-3">
            <li><a href="https://www.facebook.com/3ERIZATrabajaConNosotros"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/3eriza/"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="mailto:contacto@3eriza.pe"><i class="fa fa-envelope"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCuc_BpZPpH8MDupW6dldG9A"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
        
        <!--<div class="col-4">
          <div class="fb-page" data-href="https://www.facebook.com/3ERIZATrabajaConNosotros" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/3ERIZATrabajaConNosotros" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/3ERIZATrabajaConNosotros">3eriza Trabaja con Nosotros</a></blockquote>
          </div>
        </div>-->

        
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of footer -->
  <!-- end of footer -->


  <!-- Copyright -->
  <div class="copyright bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="p-small">Copyright © <a class="fw-bold" href="#your-link"><?= bloginfo('name') ?></a></p>
        </div> <!-- end of col -->
      </div> <!-- enf of row -->

    </div> <!-- end of container -->
  </div> <!-- end of copyright -->
  <!-- end of copyright -->
</footer>

<script src="<?= get_template_directory_uri()?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= get_template_directory_uri()?>/assets/js/jquery.sticky.js"></script>

<div id="fb-root"></div>
<!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0&appId=1707801266197855&autoLogAppEvents=1" nonce="nL8TPRkA"></script>-->
<?= wp_footer() ?>

</body>

</html>