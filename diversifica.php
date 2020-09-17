<?php
/*
Template Name: Template página principal 'Programa Diversifica'
Template Post Type: page
*/
?>

<?php

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
            //The Query
           
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
  
  <div class="row" id="paralaxe-background">
    
    <div class="col-md-4"></div>
    <div class="col-md-4 align-middle">
        <p class="lead text-light">
        <br><br>
        "O Brasil é o segundo maior produtor mundial de tabaco, atividade que envolve mais de 150 mil famílias em cerca 700 municípios principalmente dos Estados do Rio Grande do Sul, Paraná e Santa Catarina.
        </p>
        
        <p class="lead text-light">
        O processo de diversificação é uma construção coletiva para integração do agricultor a um novo modelo de produção, baseando-se prioritariamente na agroecologia, e busca a sua inserção num coletivo com o qual não estava familiarizado pois a relação com a indústria não o conduzia a isso."
        </p>
    </div>
    <div class="col-md-4"></div>

  </div>
  
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
        <img src="<?php echo get_theme_file_uri(  ) ;?>/assets/images/dest-factsheet.jpg" alt="" srcset="" class="img-fluid">
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
            
                    <!--CAROUSEL-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets/images/placeholder.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets/images/placeholder.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri( ) ;?>/assets/images/placeholder.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
        <hr>
            <!--END CAROUSEL-->
    
    </div>
    <div class="col-md-2"></div>
  </div>

  <!-- VIDEO ROWS-->
  <div class="row  bg-light pt-5">
            <div class="col-md-2"></div>
            <div class="col-md-2"><h3 class="text-secondary">Vídeos</h3></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
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
        <img src="<?php echo get_theme_file_uri( ) ;?>/assets/images/dest-noticias.png" alt="" srcset="" class="img-fluid">
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

<!-- PODCAST ROW -->

  <div class="row bg-light pt-5" id="podcast">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-secondary">Programa No Mundo do Tabaco - Podcast</h2>
            <p>
                Confira o podcast No Mundo do Tabaco, uma parceria da ACT com a Associação Brasileira de Radiodifusão Comunitária do Estado de Santa Catarina, que irá mostrar os diversos aspectos envolvidos na produção do fumo.
            </p>
            <button class="btn btn-lg btn-success btn-block">
            <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-music-note-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
            <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
            </svg>
            </button>
            <hr>
        </div>
        <div class="col-md-2"></div>

        <div class="col-md-2"></div>
        <div class="col-md-8">
            
        </div>
        <div class="col-md-2"></div>
  </div>

  <div class="row pt-5" id="campanha">
    <div class="col-md-2"></div>
    <div class="col-md-8">
            <h2 class="text-secondary">
                Campanha
            </h2>
            <p>
                Confira o material produzido para a campanha.
            </p>

            <button class="btn btn-lg btn-info btn-block">
            <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-music-note-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
            <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
            </svg>
            </button>
            <hr>

    </div>
    <div class="col-md-2"></div>
  </div>

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
        <img src="<?php echo get_theme_file_uri( ) ;?>/assets/images/logo_rodape.jpg" alt="" srcset="">
            <p>
                <a href="mailto:act@actbr.org.br">act@actbr.org.br</a><br>
                <a href="http://facebook.com/actbr" target="_blank" rel="noopener noreferrer">facebook</a><br>
                <a href="http://twitter.com/@actbr" target="_blank" rel="noopener noreferrer">twitter</a><br>
                <a href="http://youtube.com.br/ambientesemtabaco" target="_blank" rel="noopener noreferrer">youtube</a><br>
                <a href="https://www.instagram.com/insta.act/" target="_blank" rel="noopener noreferrer">instagram</a><br>
            </p>
    </div>

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
    <div class="col-md-2"></div>
  </div>
            <hr>
  </div>

<a href="#destaque" class="alert-dark">
    <svg id="arrow-top" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</a>


</body>



<?php get_footer( 'diversifica' );?>