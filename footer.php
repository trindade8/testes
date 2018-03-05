


  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <br>
          <p>Prezamos pela alta qualidade dos nossos produtos, bem como agilidade no atendimento e pontualidade nos prazos de entrega.</p>

          <ul class="address">
            <li><i class="fa fa-map-marker"></i> <span> Endereço:</span> <?=$ENDERECO_EMPRESA;?></li>
            <li><i class="fa fa-phone"><a href="tel:<?=$TELEFONE_FIXO_SF;?>"> </i> <span> Telefone:</span> <?=$TELEFONE_FIXO;?>  </li></a>
            <li><i class="fa fa-whatsapp"><a href="<?=$TELEFONE_WHATSAPP_SF;?>" target="_blank"> </i> <span> WhatsApp:</span> <?=$TELEFONE_WHATSAPP;?>  </li></a>
            <li><i class="fa fa-envelope"></i> <span> E-mail:</span><a href="mailto: <?=$EMAIL_EMPRESA;?>"> marmorariansfatima@hotmail.com</a></li>
            <li><i class="fa fa-globe"></i> <span> Site:</span> <a href="<?php echo base_url();?>"><?php echo base_url();?></a></li>
          </ul>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
         <div class="social-icons">
          <ul>
            <li><a class="envelope " href="mailto:marmorariansfatima@hotmail.com"><i class="fa fa-envelope fa-1x"></i></a></li>
            <li><a class="facebook" href="<?=$FACEBOOK_EMPRESA;?>" target="_blank"><i class="fa fa-facebook fa-1x"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>


    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 Marmoraria Nossa Senhora de Fatima. CNPJ 23.677.142/0001-43</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Desenvolvido por  <a href="mailto:wesley.trindade.santos@gmail.com">Wesley Trindade</a></p>
          </div>
        </div>
      </div>
    </div>



</footer>





<script type="text/javascript" src="<?=base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.inview.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/wow.min.js"');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/mousescroll.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/smoothscroll.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.countTo.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/lightbox.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/main.js');?>"></script>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-108933056-1', 'auto');
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->





</body>
</html>