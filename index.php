<!DOCTYPE html>
<html lang="en">
  <head>
<?php
  include("PHP/header.php");    
?>

  </head>

  <body>
    <?php
  include("PHP/menu.php");    
?>
         <?php
  include("PHP/MonMenuHaut.php");    
?>

    <div id="MonSlideShow">
        <main>
            <div class="container">
              <div class="carousel slide" id="main-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#main-carousel" data-slide-to="1"></li>
                  <li data-target="#main-carousel" data-slide-to="2"></li>
                  <li data-target="#main-carousel" data-slide-to="3"></li>
                </ol><!-- /.carousel-indicators -->
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="Images/novaiorque.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="Images/tivoli.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="Images/prague.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                     
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/brooklynbridge.jpg" alt="" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                </div><!-- /.carousel-inner -->
                
                <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only" aria-hidden="true">Prev</span>
                </a>
                <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only" aria-hidden="true">Next</span>
                </a>
              </div><!-- /.carousel -->
            </div><!-- /.container -->
        </main>
    </div>
    <div id="Content">
      <div id="Colonne1" class="inblock">
        <ol>
          <li>
            Travelling Alone...why do I think that is one of the best feeling in
            the world?
          </li>
          <li>My honest opinion on my first solo trip</li>
          <li>The heartbreaker, New York city</li>
          <li>Travelling outside European Union, what to expect?</li>
          <li>Italy, il mio eterne amore</li>
        </ol>
      </div>
      <div id="Colonne2" class="inblock"></div>
    </div>

    <div id="TOPDESTINATIONS" class="Themes">TOP DESTINATIONS</div>
    <div id="Colonne3" class="inblock titreAligne ColonneStyle">
      ITALY
    </div>
    <div id="Colonne4" class="inblock titreAligne ColonneStyle">
      RUSSIE
    </div>
    <div id="Colonne5" class="inblock titreAligne ColonneStyle">
      LONDON
    </div>

<?php
  include("PHP/footer.php");    
?>
  </body>
</html>
