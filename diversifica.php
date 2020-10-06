<?php
/*
Template Name: Template página principal 'Programa Diversifica'
Template Post Type: page

Esta página realiza querys a páginas filhas de 'diversifica' definidas no Wordpress:

    diversifica/
        paralaxe-destaque
        sobre-diversifica
        biblioteca
        noticias

*/

    //lorem ipsum - text placeholder para 'php wp_query elses'
    $lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi leo urna molestie at elementum eu. Sagittis aliquam malesuada bibendum arcu vitae elementum. Placerat vestibulum lectus mauris ultrices eros in cursus. Id eu nisl nunc mi ipsum faucibus. Ac feugiat sed lectus vestibulum mattis. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Sed libero enim sed faucibus. Libero justo laoreet sit amet cursus sit. Tellus in hac habitasse platea dictumst. Arcu non odio euismod lacinia at quis risus sed vulputate. Id aliquet lectus proin nibh nisl condimentum id. Molestie a iaculis at erat pellentesque. Cursus sit amet dictum sit amet. Sit amet facilisis magna etiam tempor orci eu lobortis. Imperdiet massa tincidunt nunc pulvinar sapien et ligula. Non enim praesent elementum facilisis. Posuere lorem ipsum dolor sit amet consectetur adipiscing elit. Facilisis gravida neque convallis a cras semper auctor. Massa id neque aliquam vestibulum morbi blandit cursus.";

?>

<?php get_header( 'diversifica' );?>



<body>
  <div class="container-fluid">
    
  <div>
    <div class="row align-middle" id="destaque">
  
        <div class="col"></div>
        <div class="col mx-auto">
            <h1 id="titulo">Rede de diversificação de áreas cultivadas com tabaco</h1>
            <a href="#panel">
            <p class="mx-auto" id="chevron"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
            </svg>
                </p>
            </a>
        </div> 
        <div class="col"></div>
  
    </div>
  </div>

  <!-- navbar -->
<div class="row sticky-top" style="background-color:#F56F11;box-shadow:1px 2px 6px #888888;" role="navigation">
 <div class="col-md-2"></div>
 <div class="col-md-8">
 <nav class="navbar navbar-expand-lg navbar-dark" id="panel">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="#panel">SOBRE<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#biblioteca">BIBLIOTECA</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#noticias">NOTÍCIAS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#podcast">PROGRAMA NO MUNDO DO TABACO</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#campanha">CAMPANHA</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#contato">CONTATO</a>
    </li>
    </ul>
</div>
</nav>
 </div>
 <div class="col-md-2"></div>
</div>
  <!--end navbar-->
  

  <!-- SEÇÃO SOBRE DIVERSIFICA -->
  <div class="row justify-content-between pt-5">
    <br>
    <br>

    <div class="col-md-2"></div>
    <div class="col-md-8">
        
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-- THE LOOP -->
        <?php
            //The Query -> página 'sobre-diversifica'
           
            $argumento = array( 'pagename' => 'diversifica/sobre-diversifica' );
            $query = new WP_Query( $argumento );
            if( $query ){
                $query->the_post( );
                echo '<h2 class="text-secondary">'.get_the_title(  )."</h2>";
                echo get_the_content(  );
            }else{
                echo $lorem_ipsum;
            }
            wp_reset_postdata(  ); ?>

        <hr>
        
    </div>
    <div class="col-md-2"></div>
  </div>
    <!-- FIM SEÇÃO SOBRE DIVERSIFICA -->

  <!-- SESSÃO TEXTO DESTAQUE COM FUNDO PARALAXE -->
  <div class="row" id="paralaxe-background">
    
    <div class="col-md-2"></div>
    <div class="col-md-8 align-middle lead text-light">
        
        <div class="py-5">
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-- THE LOOP -->
        <?php
        
            //The Query -> 'paralaxe-destaque'
            $argumento = array( 'pagename' => 'diversifica/paralaxe-destaque' );
            $query = new WP_Query( $argumento );
            if( $query ){
                $query->the_post(  );
                echo get_the_content(  );
            }else{
                echo $lorem_ipsum;
            }
            wp_reset_postdata(  ); ?>
        </div>
       
    </div>
    <div class="col-md-2"></div>
    <!-- FIM SESSÃO TEXTO DESTAQUE COM FUNDO PARALAXE -->


  </div>
  
  <!-- SESSÃO BIBLIOTECA -->
  <div class="row mx-auto bg-light pt-5" id="biblioteca">
  
        
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-- THE LOOP -->
    <?php
            //The Query
           
            $argumento = array( 'pagename' => 'diversifica/biblioteca' );
            $query = new WP_Query( $argumento );
            if( $query ){
                $query->the_post( ); ?>
                

    <div class="col-md-2"></div>
    
    <!--PHP -->
    <div class="col-md-8"> <?php echo "<h2 class=\"text-secondary\">".get_the_title(  )."</h2>";?>
    </div>
    <div class="col-md-2"></div>
  </div>


  <div class="row bg-light">
    <div class="col-md-2"></div>
    <div class="col-md-2">
        <img src="<?php echo get_theme_file_uri(  ) ;?>/assets-div/images/dest-factsheet.jpg" alt="" srcset="" class="img-fluid">
    </div>
    <div class="col-md-6">
    
    <!--PHP -->
    <?php echo get_the_content(  );
            }else{
                echo $lorem_ipsum;
            }
            wp_reset_postdata(  ); ?>
    
    </div>
    <div class="col-md-2"></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <!-- FIM SESSÃO BIBLIOTECA -->
            
        <!--CAROUSEL-->
        <div id="carouselExampleCaptions" class="carousel slide py-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="10"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="11"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="12"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="13"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="14"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="15"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="16"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="17"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="18"></li>

        </ol>
        <!--CAROUSEL ELEMENTS  -->
        <!-- carousel height fixed inline to 100% viewport height-->
        <div class="carousel-inner" style="height: 100vh;">

            <div class="carousel-item active">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-01.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-02.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-06.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-07.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            
            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-08.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-09.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-10.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-12.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-13.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-14.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-15.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-16.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-17.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-18.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-19.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-20.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-21.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/img-diversifica/diversifica-22.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>
            

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <!-- END CAROUSEL ELEMENTS  -->

        <hr>
        <!--END CAROUSEL-->
    
    </div>
    <div class="col-md-2"></div>
  </div>

  <!-- VIDEO ROWS-->
  <div class="row  bg-light py-5">
            <div class="col-md-2"></div>
            <div class="col-md-2"><h3 class="text-secondary">Vídeos</h3></div>
            <div class="col-md-8"></div>
  </div>

  <div class="row bg-light">
    
        <!-- col row 1 -->
        <div class="col-md-2"></div>
        
        <div class="col-md-4 p-1">
            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/9HZsdvfRbSc"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="col-md-4 p-1">
            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IbheywT1To4"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-2"></div>
    
    <!-- col row 2 -->
    <div class="col-md-2"></div>

    <div class="col-md-4 p-1">
        <div class="embed-responsive embed-responsive-16by9 rounded shadow">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z1GEWCJhv3A"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
    <div class="col-md-4"></div>

    <div class="col-md-2"></div>

  </div>
  <!-- END VIDEO ROWS-->

<!-- NOTICIAS ROW -->
    <div class="row pt-5" id="noticias">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-muted">Notícias</h2>
        </div>
        <div class="col-md-2"></div>
    
    </div>

    <div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-2">
        <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/images/dest-noticias.png" alt="" srcset="" class="img-fluid">
    </div>
    <div class="col-md-6">
    
    
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-- THE LOOP -->
    <?php
        $argumento = array( 'pagename' => 'diversifica/noticias' );
        $query = new WP_Query( $argumento );
        if( $query ){
            $query->the_post( );
        
            echo '<h3 class="text-secondary">'.get_the_title(  )."</h2>";
            echo get_the_content(  );
        }else{
            echo $lorem_ipsum;
        }
        wp_reset_postdata(  ); ?>
        
        <hr>
    </div>
    <div class="col-md-2"></div>
  </div>
 <!-- END NOTICIAS ROW -->

<!-- PODCAST ROW  - SOUNDCLOUD IFRAMES-->

  <div class="row bg-light pt-5" id="podcast">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-secondary">Programa No Mundo do Tabaco - Podcast</h2>
            <p>
                Confira o podcast No Mundo do Tabaco, uma parceria da ACT com a Associação Brasileira de Radiodifusão Comunitária do Estado de Santa Catarina, que irá mostrar os diversos aspectos envolvidos na produção do fumo.
            </p>
            
            <!-- SOUNDCLOUD IFRAME -->
            <div class="shadow">
                <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1139626555&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/user-219398891" title="ACTbr" target="_blank" style="color: #cccccc; text-decoration: none;">ACTbr</a> · <a href="https://soundcloud.com/user-219398891/sets/no-mundo-do-tabaco-actbr" title="No Mundo do Tabaco - ACTBr" target="_blank" style="color: #cccccc; text-decoration: none;">No Mundo do Tabaco - ACTBr</a></div>
            </div>
            <!-- END SOUNDCLOUD IFRAME -->

            <hr>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
        </div>
        <div class="col-md-2"></div>
  </div>

  <div class="row pt-5 bg-light" id="campanha">
    <div class="col-md-2"></div>
    <div class="col-md-8">
            <h2 class="text-secondary">
                Campanha
            </h2>
            <p>
                Confira o material produzido para a campanha.
            </p>

            <!-- SOUNDCLOUD IFRAME -->
            <div class="shadow">
            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1140179587&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/user-219398891" title="ACTbr" target="_blank" style="color: #cccccc; text-decoration: none;">ACTbr</a> · <a href="https://soundcloud.com/user-219398891/sets/spot-no-mundo-do-tabaco" title="Spot - No Mundo do Tabaco" target="_blank" style="color: #cccccc; text-decoration: none;">Spot - No Mundo do Tabaco</a></div>
            </div>
            <!-- END SOUNDCLOUD IFRAME -->
            <hr>

    </div>
    <div class="col-md-2"></div>
  </div>
  <!-- PODCAST ROW  - SOUNDCLOUD IFRAMES-->


  <div class="row text-light py-5  mx-auto" style="background-color:#F56F11;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2 class="text-light">
                    Rede Diversificação de áreas cultivadas com tabaco
                </h2>
            </div>
            <div class="col-md-4"></div>
  </div>

  <div class="row pt-5" id="contato">
  
    <div class="col-md-2"></div>
        
    <div class="col-md-2">
        <img src="<?php echo get_theme_file_uri( ) ;?>/assets-div/images/logo_rodape.jpg" alt="" srcset="">
            <p>
                <a href="mailto:act@actbr.org.br">act@actbr.org.br</a><br>
                <a href="http://facebook.com/actbr" target="_blank" rel="noopener noreferrer">facebook</a><br>
                <a href="http://twitter.com/@actbr" target="_blank" rel="noopener noreferrer">twitter</a><br>
                <a href="http://youtube.com.br/ambientesemtabaco" target="_blank" rel="noopener noreferrer">youtube</a><br>
                <a href="https://www.instagram.com/insta.act/" target="_blank" rel="noopener noreferrer">instagram</a><br>
            </p>
    </div>
      <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" required>
        </div>
       
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sua mensagem" required></textarea>
        </div>
        </form>
    </div>
    <div class="col-md-1"></div>
  </div>
            <hr>
  </div>

<!-- floating bottom right arrow link button back to top -->
<a href="#destaque" class="alert-dark">
    <svg id="arrow-top" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</a>


</body>



<?php get_footer( 'diversifica' );?>