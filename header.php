<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head profile="http://gmpg.org/xfn/11">
    <title><?php if(!is_search()) echo get_the_h2(); if(!is_category() || is_year()) wp_title('&mdash;'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php the_meta_description($post, $wp_query->query_vars['s']); ?>" />
    <meta name="keywords" content="taquilla, cine, españa, recaudaciones, espectadores, spain" />
    <meta http-equiv="Content-Language" content="es" />
    <meta name="language" content="es" /> 
    <meta name="viewport" content="width=1000" />
    <meta name="robots" content="all" />
    <meta name="author" content="Pau Brunet" />
    <meta name="copyright" content="Pau Brunet" />
    <meta name="DC.rights" scheme="DCTERMS.URI" content="http://creativecommons.org/licenses/by-nd/3.0/es" />
    <meta name="DC.rights" content="(c) Pau Brunet" />
    <meta name="version" content="2011" />
<?php the_meta_facebook(); ?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('url'); ?>/favicon_iphone.png" />
    <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!--link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/style-max.css" type="text/css" /-->
    <!--[if lt IE 9]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table_padding.css" type="text/css" /><![endif]-->
    <!--[if lt IE 7]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/multiple_class.css" type="text/css" /><![endif]-->
    <!--[if lt IE 6]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hack_box.css" type="text/css" /><![endif]-->
    <!--[if lt IE 5.5]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hack_a.css" type="text/css" /><![endif]-->
    <link rel="stylesheet" media="print" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" />
<?php the_feeds(); ?>
    <link rel="alternate pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body class="<?php the_body_class(); ?>">
    <div id="page">
      <!-- eco start -->
      <div class="ecolinks">
        <ul>
          <li>Nuestra red:</li>
          <li><a href="http://www.eleconomista.es/ecotrader/" rel="nofollow" title="Ecotrader: Dónde y cómo invertir">Eco<span class="trader">trader</span></a></li>
          <li><a href="http://www.eleconomista.es" rel="nofollow" title="elEconomista.es: Líder en información económica"><span style="color: rgb(255, 102, 0);">el</span>Eco<span style="color: rgb(255, 102, 0);">nomista.es</span></a></li>
          <li><a href="http://ecodiario.eleconomista.es" rel="nofollow" title="EcoDiario.es: Noticias y actualidad general">Eco<span style="color: rgb(251, 184, 0);">Diario.es</span></a></li>
          <li><a href="http://www.eleconomista.es/ecomotor/" rel="nofollow" title="La actualidad del motor">Eco<span style="color: rgb(0, 127, 209);">motor</span></a></li>
          <li><a href="http://ecoaula.eleconomista.es" rel="nofollow" title="Ecoaula.es: Universidades y formación">Eco<span style="color: rgb(255, 102, 0);">aula</span></a></li>
          <li><a href="http://www.eleconomista.es/evasion/" rel="nofollow" title="Evasión: Estilo de vida y tendencias"><span>Evasi&oacute;n</span></a></li>
        </ul>


        <div class="cont2">
          <div id="login-cont">
            <div id="login-superior" class="topnav">
              ¿Eres usuario de elEconomista? <a id="login-boton" class="login-boton" name="login-boton"><span>Conéctate</span></a>
            </div>
            <fieldset id="login-menu" class="login-menu">
              <div class="field1">
                <form method="post" id="signin" onsubmit="Captura_mouseClick_enviar();">
                  <p id="mensaje-error"></p>
                  <p>
                    <label for="username">Dirección de email</label><input id="username" name="username" title="username" tabindex="4" type="text" />
                  </p>
                  <p>
                    <label for="password">Contraseña</label><input id="password" name="password" value="" title="password" tabindex="5" type="password" />
                  </p>
                  <p class="login-recordar">
                    <span id="boton_registro"><input id="login-enviar" value="Entrar" tabindex="6" type="submit" /></span><input id="remember" name="remember_me" value="1" tabindex="7" checked="checked" type="checkbox" /><label for="remember">Recordarme</label>
                  </p>
                  <p class="login-enlace">
                    <a href="http://www.eleconomista.es/registro/perfil.php" id="resend_password_link" name="resend_password_link">¿Olvidaste tu contraseña?</a>
                  </p>
                  <p class="login-enlace">
                    <a href="http://www.eleconomista.es/registro/alta.php" id="resend_password_link" name="resend_password_link">Registrarse</a>
                  </p>
                </form>
              </div>
              <div class="field2">
                <h4 style="color: #f60;">
                  Servicios Premium
                </h4>
                <p class="login-enlace">
                  <a style="color: rgb(0, 0, 0) ! important;" href="http://www.eleconomista.es/ecotrader" id="resend_password_link" name="resend_password_link">Eco<span style="color:#f00;">trader</span></a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/hemeroteca" id="resend_password_link" name="resend_password_link">Edición PDF + Hemeroteca</a>
                </p>
                <p class="forgot">
                  <a href="http://www.eleconomista.es/elsuperlunes" id="resend_password_link" name="resend_password_link">El Superlunes</a>
                </p>
                <h4 style="margin-top: 15px; color: #f60;">
                  Servicios gratuitos
                </h4>
                <p class="login-enlace">
                  <a href="http://listas.eleconomista.es/" id="resend_password_link" name="resend_password_link">Listas y rankings</a>
                </p>
                <p class="login-enlace">
                  <a href="http://club.eleconomista.es/" id="resend_password_link" name="resend_password_link">Club elEconomista.es</a>
                </p>
                <p class="login-enlace">
                  <a href="http://club.eleconomista.es/cartera/posiciones/posiciones.aspx" id="resend_password_link" name="resend_password_link">Cartera</a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/foros" id="resend_password_link" name="resend_password_link">Foros</a>
                </p>
              </div>
            </fieldset>
            <fieldset id="login-menu2" class="login-menu">
              <div class="field1">
                <h4>
                  Zona usuario
                </h4>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/registro/datosPersonales.php" id="resend_password_link" name="resend_password_link">Datos personales</a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/registro/perfil.php" id="resend_password_link" name="resend_password_link">Editar perfil</a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/premium/mediospago.php" id="resend_password_link" name="resend_password_link">Medios de pago</a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/premium/facturas.php" id="resend_password_link" name="resend_password_link">Facturas</a>
                </p>
                <p class="login-enlace">
                  <a href="http://www.eleconomista.es/premium/suscripciones.php" id="resend_password_link" name="resend_password_link">Servicios Premium</a>
                </p>
                <form method="post" id="signin2">
                  <p class="remember">
                    <span id="boton_desconectar"><input id="signin_submit" class="desconexion" value="Desconectarme" tabindex="6" type="button" /></span>
                  </p>
                </form>
              </div>
              <div class="field2">
                <h4 style="color: #f60;">
                  Servicios Premium
                </h4>
                <p class="forgot">
                  <a href="http://www.eleconomista.es/ecotrader" id="resend_password_link" name="resend_password_link">Ecotrader</a>
                </p>
                <p class="forgot">
                  <a href="http://www.eleconomista.es/hemeroteca" id="resend_password_link" name="resend_password_link">Edición PDF + Hemeroteca</a>
                </p>
                <p class="forgot">
                  <a href="http://www.eleconomista.es/elsuperlunes" id="resend_password_link" name="resend_password_link">El Superlunes</a>
                </p>
                <h4 style="margin-top: 15px; color: #f60;">
                  Servicios gratuitos
                </h4>
                <p class="forgot">
                  <a href="http://listas.eleconomista.es/" id="resend_password_link" name="resend_password_link">Listas y rankings</a>
                </p>
                <p class="forgot">
                  <a href="http://club.eleconomista.es/" id="resend_password_link" name="resend_password_link">Club elEconomista.es</a>
                </p>
                <p class="forgot">
                  <a href="http://club.eleconomista.es/cartera/posiciones/posiciones.aspx" id="resend_password_link" name="resend_password_link">Cartera</a>
                </p>
                <p class="forgot">
                  <a href="http://www.eleconomista.es/foros" id="resend_password_link" name="resend_password_link">Foros</a>
                </p>
              </div>
            </fieldset>

            <script type="text/javascript">
                var pvar = { cid: "es-eleconomista", content: "0", server: "secure-uk" };
            </script>
            <script type="text/javascript" src="//secure-uk.imrworldwide.com/v60.js"></script>
            <script type="text/javascript">
                var trac = nol_t(pvar);
                trac.record().post();
            </script>
            <noscript><img src="//secure-uk.imrworldwide.com/cgi-bin/m?ci=es-eleconomista&amp;cg=0&amp;cc=1&amp;ts=noscript" width="1" height="1" alt=""></noscript>
            <script>
              var _comscore = _comscore || [];
              _comscore.push({ c1: "2", c2: "7107810" });
              (function() {
                var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
                s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
                el.parentNode.insertBefore(s, el);
              })();
            </script>
            <noscript><img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=7107810&amp;cv=2.0&amp;cj=1"></noscript>

            <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js"></script>
            <script type="text/javascript" language="javascript" src="http://s01.s3c.es/js/eleconomista/cache/flowplayer-3.1.4,carousel,flp_galeria_videos,carousel,galeria,cookies,sondeos,masNoticias,galeria_fotos_thumbnails,php_valoracion.0.cache.js"></script>
            <script type="text/javascript">
            //<![CDATA[
            var mivariable='login-menu';
            var configuracioninicial=1;
            var cookieUsuario = getCookie('USU') ;
            var cookiePassword = getCookie('PASS') ;
            if ( (cookieUsuario != null) && (cookieUsuario != '') && (cookiePassword != null) && (cookiePassword != '') ) {
            peticion=new Ajax.Request(
            '/registro/ajax/usuario_datos.php',
            {
            onSuccess: function (transport) {
            var usuarioJSON = eval( '(' + transport.responseText + ')' ) ;
            var usuarioNombre = usuarioJSON.usuario.alias ;
            var usuarioEmail = usuarioJSON.usuario.email ;
            if ((usuarioNombre == '') && (usuarioEmail != '')) usuarioNombre = usuarioEmail ;

            if ((usuarioNombre != '') || (usuarioEmail != '')){


            if (usuarioNombre!='') usuario=usuarioNombre;
            else usuario=usuarioEmail;


            mivariable='login-menu2';


            $("login-superior").update('Conectado como <a id="login-boton"  class="login-boton"><span>' + usuario.truncate(9, '') + '<\/span><\/a>');           


            }



            }
            }
            );
            }


            function Captura_mouseClick() {

            $(mivariable).toggle();
            if (configuracioninicial) $(mivariable).setStyle({'display': 'block', 'margin-top': '-3px'});

            $("login-boton").toggleClassName("menu-open");

            desconexion=0;
            if (desconexion){
            peticion=new Ajax.Request(
            '/registro/ajax/usuario_datos.php',
            { 
            onSuccess: function (transport) {
            }
            }
            );
            }
            configuracioninicial=(configuracioninicial-1)*-1;    /*paso de 0 a 1 o de 1 a 0 */
            }

            function Captura_mouseClick_desconectar() {


            $("boton_desconectar").update('<span style="width: 40px; text-align: center; display: block; float: left;"><img style="border:none" src="http://s01.s3c.es/imag3/log-in/loader-login.gif" /><\/span>');

            deleteCookie('USU', '/', '.eleconomista.es');
            deleteCookie('PASS', '/', '.eleconomista.es');
            deleteCookie('ASV', '/', '.eleconomista.es');
            deleteCookie('ATV', '/', '.eleconomista.es');
            deleteCookie('FECO', '/', '.eleconomista.es');

            $(mivariable).toggle();  
            $("login-boton").removeClassName("menu-open");
            $("login-menu").hide();
            $("login-superior").update('¿Eres usuario de elEconomista? <a id="login-boton" class="login-boton"><span>Conéctate<\/span><\/a>');
            mivariable="login-menu";
            configuracioninicial=(configuracioninicial-1)*-1;
            $("boton_desconectar").update('<input id="signin_submit" class="desconexion" value="Desconectarme" tabindex="6" type="button"/>');
            Event.observe($('signin_submit'),'click', Captura_mouseClick_desconectar);
            }



            function Captura_mouseClick_enviar() {

            configuracioninicial=(configuracioninicial-1)*-1;

            $("boton_registro").update('<span style="width: 40px; text-align: center; display: block; float: left;"><img style="border:none" src="http://s01.s3c.es/imag3/log-in/loader-login.gif" /><\/span>');

            if ($('remember').checked==true)
            recordar='0';
            else
            recordar='1';

            peticion=new Ajax.Request(
            '/registro/ajax/conexion_v2.php',
            { method: 'post',
            parameters: {email: $('username').value, pass: $('password').value, remember: recordar},
            onSuccess: function (transport) {

            var usuarioJSON = eval( '(' + transport.responseText + ')' ) ;

            var usuarioNombre = usuarioJSON.usuario.alias ;
            var usuarioEmail = usuarioJSON.usuario.email ;
            var usuarioUSU = usuarioJSON.usuario.USU ;
            var usuarioPASS = usuarioJSON.usuario.PASS ;
            var usuarioDesc_est = usuarioJSON.usuario.Descripcion_estado ;
            var usuarioEst = usuarioJSON.usuario.Estado ;

            if (((usuarioNombre != '') || (usuarioEmail != '')) && usuarioEst==0 ){

            $(mivariable).toggle();
            $("login-boton").toggleClassName("menu-open");

             if (usuarioNombre!='') usuario=usuarioNombre;
             else usuario=usuarioEmail;

            mivariable='login-menu2';

            $("login-superior").update('Conectado como <a id="login-boton" class="login-boton"><span>' + usuario.truncate(9, '') + '<\/span><\/a>');            
            $("mensaje-error").update('');

            if (document.URL=="http://www.eleconomista.es/ecotrader/publico.php"){
              window.location="http://www.eleconomista.es/ecotrader";
            }
            }
            else {
            mivariable='login-menu';
            $("mensaje-error").update(usuarioDesc_est);
            configuracioninicial=(configuracioninicial-1)*-1; /***********************/
            }         
            $("boton_registro").update('<input id="login-enviar" value="Entrar" tabindex="6" type="submit"/>');
            Event.observe($('login-enviar'),'click', Captura_mouseClick_enviar);
            }

            } 
            );


            }

            function Captura_mouseUpGeneral(event) {

            antecesores=$(Event.element(event)).ancestors();
            num=antecesores.length;
            entro=true;

            for(i=0; i<num; i=i+1) {
            //if (antecesores[i].id == "login-menu" || $(Event.element(event)).id=="login-menu" ) {
            if (antecesores[i].id == mivariable || $(Event.element(event)).id==mivariable || antecesores[i].id == "login-boton") {
            entro = false;
            }
            }

            if ($(Event.element(event)).id=="login-boton") entro=false;

            if  (entro) {

            $(mivariable).toggle();

            $("login-boton").removeClassName("menu-open");
            $("login-menu").hide();


            if (!configuracioninicial) configuracioninicial=(configuracioninicial-1)*-1;

            }   



            }

            function Captura_mouseUp() {
            return false;

            }
            Event.observe($('signin_submit'),'click', Captura_mouseClick_desconectar);
            Event.observe($('login-superior'),'click', Captura_mouseClick);
            Event.observe($('login-enviar'),'click', Captura_mouseClick_enviar);
            Event.observe($('login-superior'),'mouseup', Captura_mouseUp);
            Event.observe($('login-menu'),'mouseup', Captura_mouseUp);
            Event.observe($('login-menu2'),'mouseup', Captura_mouseUp);
            Event.observe(window, 'mouseup', Captura_mouseUpGeneral);
            //]]>
            </script>
          </div>
        </div>








      </div>
      <div class="ecoheader">
        <a class="ecologo" href="/" style="float: left; margin-bottom: 0;"><img alt="elEconomista.es" style=" border:none;" src="http://s01.s3c.es/imag3/logo-h1.gif" /></a>
        <div class="ruta">Industria del cine</div>
        <!-- the_google_full_banner(); -->
      </div>
      <ul class="ecomenu">
        <li><a href="http://www.eleconomista.es/">Portada</a></li>
        <li><a href="http://www.eleconomista.es/mercados-cotizaciones/">Mercados y Cotizaciones</a></li>
        <li><a href="http://www.eleconomista.es/opinion/">Opini&oacute;n</a></li>
        <li><a href="http://www.eleconomista.es/empresas-finanzas/">Empresas</a></li>
        <li><a href="http://www.eleconomista.es/economia/">Econom&iacute;a</a></li>
        <li><a href="http://www.eleconomista.es/tecnologia/">Tecnolog&iacute;a</a></li>
        <li><a href="http://www.eleconomista.es/vivienda/">Vivienda</a></li>
        <li><a href="http://www.eleconomista.es/ecoley/">Ecoley</a></li>
        <li><a href="http://www.eleconomista.es/gestion-empresarial/">Gesti&oacute;n</a></li>
        <li class="inset"><a href="http://www.eleconomista.es/ecotrader/">Eco<span class="trader">trader</span></a></li>
        <li class="inset"><a href="http://www.eleconomista.es/ecomotor/">Eco<span class="motor">motor</span></a></li>
        <li class="inset"><a href="http://www.eleconomista.es/evasion/"><span class="evasion">Evasión</span></a></li>
        <li class="inset"><a href="http://ecodiario.eleconomista.es/">Eco<span class="diario">Diario</span></a></li>
      </ul>
      <!-- eco end -->

      <?php the_h1(); ?>
      <ul id="menu">
<?php
    menu_tab('category', 'reports_spain');
    menu_tab('category', 'reports_usa');
    menu_tab('category', 'reports_world');
    menu_tab('category', 'news');
    menu_tab('category', 'analysis');
//    menu_tab('page',     'partners');
//    menu_tab('category', 'links');
    menu_tab('page',     'about');
?>
      </ul>
      <form class="search" method="get" action="<?php bloginfo('url'); ?>/">
        <fieldset>
          <legend>Busca:</legend>
          <label for="s">Texto:</label>
          <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" alt="Escribe que buscar"  />
          <input type="submit" value="Busca" />
        </fieldset>
      </form>
      <div class="banner leaderboard">
        <?php the_google_leaderboard_banner(); ?>
      </div>
<?php if(!is_home()) : ?>    
      <ul id="left"><li class="<?php the_left_class(); ?>">
<?php the_h2(); ?>
<?php the_h3(); ?>
<?php endif; ?>