<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Kreatika</title>
  </head>
  <body>
    <?php  get_header();?>
    <!--Primer apartado-->
    <section class="container">
      <div class="col1">
        <img id="img_col1" src="<?php bloginfo("template_url");?>/images/col1_image.jpg" alt="imagen_sony" />
      </div>
      <div class="col2">
        <h1 id="title">Camara Sony</h1>
        <p>
          La α900 (DSLR-A900) es una cámara SLR digital de fotograma completo ,
          producida por Sony . El 8 de marzo de 2007 se mostró un estudio de
          diseño inicial de la cámara en la PMA y se anunció un prototipo más
          nuevo en la PMA 2008 el 31 de enero de 2008. Sony presentó
          oficialmente la cámara final el 9 de septiembre de 2008 antes de la
          photokina 2008. En octubre de 2011, Sony Japón anunció el final de la
          producción de la cámara. Las especificaciones incluyen: sensor CMOS de
          24,6 megapíxeles, modo de ráfaga de 5 cuadros por segundo,
          procesadores BIONZ duales , visor 100 %, AF de 9 puntos con 10 puntos
          de asistencia, estabilización de desplazamiento del sensor de imagen
          incorporado y vista previa inteligente. No tiene grabación de
          vídeo/película.
        </p>
        <button class="btn">Ver Más</button>
      </div>
    </section>
    <!--Segundo apartado-->
    <div class="eyeliner"></div>
    <section class="container2">
      <button id="left"><img src="<?php bloginfo("template_url");?>/images/slider/left-arrow.png" /></button>
      <div class="slider_image">
        <div class="item">
          <img src="<?php bloginfo("template_url");?>/images/slider/item1.jpg" alt="canon" />
        </div>
        <div class="item">
          <img src="<?php bloginfo("template_url");?>/images/slider/item2.jpg" alt="canon" />
        </div>
        <div class="item">
          <img src="<?php bloginfo("template_url");?>/images/slider/item3.jpg" alt="canon" />
        </div>
        <button id="right"><img src="<?php bloginfo("template_url");?>/images/slider/next.png" /></button>
      </div>
    </section>
    <div class="eyeliner_bottom"></div>
    <!---tercer apartado-->
    <section class="container3">
      <div id="article">
        <div id="text">
          <span class="title_article">
            Ultimo articulo
          </span>
          <span id="date">01/06/2022</span>
        </div>

        <p>
          La α900 (DSLR-A900) es una cámara SLR digital de fotograma completo ,
          producida por Sony . El 8 de marzo de 2007 se mostró un estudio de
          diseño inicial de la cámara en la PMA y se anunció un prototipo más
          nuevo en la PMA 2008 el 31 de enero de 2008. Sony presentó
          oficialmente la cámara final el 9 de septiembre de 2008 antes de la
          photokina 2008. En octubre de 2011, Sony Japón anunció el final de la
          producción de la cámara. Las especificaciones incluyen: sensor CMOS de
          24,6 megapíxeles, modo de ráfaga de 5 cuadros por segundo,
          procesadores BIONZ duales , visor 100 %, AF de 9 puntos con 10 puntos
          de asistencia, estabilización de desplazamiento del sensor de imagen
          incorporado y vista previa inteligente. No tiene grabación de
          vídeo/película.
        </p>
        <button class="btn">Leer más</button>
      </div>
      <div id="other_articles">
        <h1 class="title_article">OTROS ARTICULOS</h1>
        <div class="item_other">
          <img src="<?php bloginfo("template_url");?>/images/slider/item1.jpg" alt="canon" />
          <div class="text_other">
            <h1>Canon</h1>
            <p>01/06/2022</p>
          </div>
        </div>
        <div class="item_other">
          <img src="<?php bloginfo("template_url");?>/images/slider/item2.jpg" alt="nikon" />
          <div class="text_other">
            <h1>Nikon</h1>
            <p>01/06/2022</p>
          </div>
        </div>
        <div class="item_other">
          <img src="<?php bloginfo("template_url");?>/images/slider/item3.jpg" alt="sony" />
          <div class="text_other">
            <h1>Sony</h1>
            <p>01/06/2022</p>
          </div>
        </div>
      </div>
    </section>
    <!--Cuarto apartado-->
    <section class="container4">
      <div class="btn_item">
        <img src="<?php bloginfo("template_url");?>/images/slider/item1.jpg" alt="boton_canon" />
        <div class="more">
          <button class="btn_more" value="1">Leer mas</button>
        </div>
      </div>
      <div class="btn_item">
        <img src="<?php bloginfo("template_url");?>/images/slider/item2.jpg" alt="boton_canon" />
        <div class="more">
          <button class="btn_more" value="2">Leer mas</button>
        </div>
      </div>
      <div class="btn_item">
        <img src="<?php bloginfo("template_url");?>/images/slider/item3.jpg" alt="boton_canon" />
        <div class="more">
          <button class="btn_more" value="3">Leer mas</button>
        </div>
      </div>
      <div class="btn_item">
        <img src="<?php bloginfo("template_url");?>/images/slider/item1.jpg" alt="boton_canon" />
        <div class="more">
          <button class="btn_more" value="4">Leer mas</button>
        </div>
      </div>
    </section>

    <section class="text_container4">
      <p id="text_c4"></p>
    </section>
    <footer>
      <div class="footer_img">
        <img src="<?php bloginfo("template_url");?>/images/logo.png" alt="img_footer" />
      </div>

      <div id="enlaces">
        <ul id="lista_enlaces">
          <li><a href="<?php bloginfo("template_url");?>/enlace1.html">Historia</a></li>
          <li><a href="<?php bloginfo("template_url");?>/enlace2.html">Imagenes</a></li>
          <li><a href="<?php bloginfo("template_url");?>/enlace3.html">Sony</a></li>
          <li><a href="<?php bloginfo("template_url");?>/enlace4.html">Camaras</a></li>
        </ul>
      </div>
    </footer>
    <script src="<?php bloginfo("template_url");?>/js/index.js"></script>
  </body>
</html>
<!-- <img id="img_col1" src="./images/col1_image.jpg" /> -->
