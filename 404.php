<?php header("HTTP/1.1 404 Not Found"); ?>
<?php get_header(); ?>
    	  <big>La p&aacute;gina que buscas no existe</big>
        <p>La p&aacute;gina <?php echo $_SERVER['REQUEST_URI'] ?> no existe (Error 404).</p>
        <p>Comprueba si has escrito bien la direcci&oacute;n de la p&aacute;gina web.</p>
        <p>Tambi&eacute;n puedes utilizar el form arriba a la derecha para buscar un testo en la web.</p>
<?php get_sidebar(); ?>
<?php get_footer(); ?>