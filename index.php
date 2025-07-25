<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title >OFFICINA SALDATURE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/index.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=UoqMunThenKhung&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/index.css">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary margin-bottom: 1rem;" >
  <div class="container-fluid">
    <h1 class="titolo-shiny mb-0">TUTTOINOX</h1>
    <h3 class="sottotitolo-shiny mb-0 d-none d-md-block d-lg-block" style="margin-left: 2rem;">di Bruno Sabina</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#vetrina-prodotti">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contatti.html">Contatti</a>
        </li>
      </ul> 
    </div>
  </div>
</nav>




<div class="whatsapp-absolute">
  <a href="https://wa.me/3334714990" class="whatsapp-button-absolute" id="btn-whatsapp-fixed"></a>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content align-items-center">
        <button type="button" class="btn-close position-absolute end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header">
        <center><h2 class="modal-title sottotitolo-shiny text-align-center" id="modal-title" >CARRELLI SU MISURA</h2></center>
      </div>
      <div class="modal-body" >
          <div class="row">
            <div class="col-md-6">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/02.jpg" class="d-block w-100" alt="Carrello 1">
                  </div>
                  <div class="carousel-item">
                    <img src="img/02.jpg" class="d-block w-100" alt="Carrello 2">
                  </div>
                  <div class="carousel-item">
                    <img src="img/03.jpg" class="d-block w-100" alt="Carrello 3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-md-6">
              <h5 id="modal-secondo-titolo " class="font-weight-bold">Progettazione e reallizzazione di carreli</h5>
              <p id="modal-descrizione-lunga">Questi carrelli sono dei carrelli.Questi carrelli sono dei carrelli.Questi carrelli sono dei carrelli.</p>
            </div>
          </div>
            
          <br><br>

      </div>
      <div class="modal-footer">
        
          <a href="#contatti" id="btn-modal-contatti" class="contatti">Contattaci per preventivo</a>

      </div>
    </div>
  </div>
</div>
  
  

  <section class="sezione" >
    <div class="descrizione ">
        <div class="row align-items-center vetrina-immagine-contatti">
          
          <div class="col-md-4 mb-3 mb-md-0 contenitore-immagine">
              <img src="img/vetrina-foto.jpeg" alt="Immagine di esempio" class="img-principale rounded">
          </div>

          <div class="col-md-8 justify-content-center">
              <h1 class="hero">“Ti ta pensi, mi ta fass.<br> Appena poss..”</h1>
              <subtitle style="font-style: italic; color:rgba(255, 255, 255, 0.8)">"Tu la pensi, io la faccio. Appena posso.."</subtitle>
              <br><br>
              <div class=" justify-content-center" style="display: flex;">
                <!--a href="https://wa.me/3334714990" class="whatsapp ">Whatsappaci</a>
                <p class="" >o</p-->
                <a href="#contatti" class="contatti mt-b">Contattaci</a>
              </div>
          </div>
        </div>
        <div class="vetrina-testo">
          Saldatura, riparazioni e soluzioni tecniche: mettiamo la nostra esperienza al servizio di aziende e privati.</p>
        </div>
    </div>
        
  </section>

  <br>
  <section class="bg-white">
    <br>
    <center>
      <div class="" style="width: 80%;">
      <hr>
      <h1 class="sottotitolo-shiny" style="text-align: center; text-decoration: underline;">CHI SIAMO</h1>
      <p class="testo-shiny "  style="text-align: center; opacity: 1;">
            <b>
            Siamo un’ officina artigiana a conduzione familiare: mamma Sabina, papà Alberto e il figlio Andrea. Nasciamo come specialisti nella lavorazione dell’acciaio inox, ma realizziamo anche strutture e lavorazioni in ferro zincato e acciaio, sempre su misura.
            Per noi ogni cliente è un amico. Amiamo ascoltare le tue idee e trasformarle in realtà con passione e cura. Il nostro lavoro non si basa sui numeri, ma sulla precisione, sui dettagli e sulla qualità del risultato finale.
            Siamo particolarmente appassionati dei pezzi su misura: Alberto è un vero specialista nel progettare e creare soluzioni personalizzate per impianti zootecnici, arredi inox e attrezzature agricole. Lavoriamo al tuo fianco perché tu possa fidarti e affidarti alla nostra esperienza artigiana.
            </b></p>
        
        <hr>
        <br>
      <!--h1 class="sottotitolo-shiny" style="text-align: left; text-decoration: underline;">TUTTOINOX</h1>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <p class="testo-shiny "  style="text-align: left;">
            <b>
            Siamo un’ officina artigiana a conduzione familiare: mamma Sabina, papà Alberto e il figlio Andrea. Nasciamo come specialisti nella lavorazione dell’acciaio inox, ma realizziamo anche strutture e lavorazioni in ferro zincato e acciaio, sempre su misura.
            Per noi ogni cliente è un amico. Amiamo ascoltare le tue idee e trasformarle in realtà con passione e cura. Il nostro lavoro non si basa sui numeri, ma sulla precisione, sui dettagli e sulla qualità del risultato finale.
            Siamo particolarmente appassionati dei pezzi su misura: Alberto è un vero specialista nel progettare e creare soluzioni personalizzate per impianti zootecnici, arredi inox e attrezzature agricole. Lavoriamo al tuo fianco perché tu possa fidarti e affidarti alla nostra esperienza artigiana.
            </b></p>
          </div>
          <div class="col-md-6 ">
            <center><img src="img/prima_foto.jpg" class="seconda-vetrina-foto" ></center>
          </div>
        </div>
        <br>
        <hr>
      </div-->
    
    </center>
    <div class="terza-vetrina" id="vetrina-prodotti" >
      
      <?php 
        require_once 'liberia.php';

        $db = new Database('localhost', 'tuttoinox', 'root', '');
        
        $cards = $db->fetchAll("SELECT * FROM tuttoinox ORDER BY Categoria DESC");
       # echo("<h1 class='testo-shiny' ><strong>{$cards["Categoria"]}:</strong></h1> " );
        # inizio carousel

        echo "<h1 class='sottotitolo-shiny'>".strtoupper($cards[0]["Categoria"]).":</h1>";
        echo("<section class='carousel-custom p-3'>");
        $last_categoria = $cards[0]["Categoria"];
        foreach ($cards as $card){
          if($last_categoria != $card["Categoria"]){
            $last_categoria = $card["Categoria"];
            echo("</section>");
            echo "<br><h1 class='sottotitolo-shiny'>".strtoupper($card["Categoria"]).":</h1>";
            echo("<section class='carousel-custom p-3'>");
          }

          echo "<div class='p-2 '>";
          echo "<div id='{$card["id"]}' class='card shadow-lg '>";
            echo "<img  src='{$card["img_principale"]}'>";
              echo "<div class='card-content'>";
                echo("<h3>{$card["Titolo"]}</h3>");
                echo "<p>{$card["Descrizione_Breve"]}</p>";
              echo "</div>";
              #echo "<center class='card-arrow'><img style='width: 10vw; height: 10vw;' src='icons/right-arrow-svgrepo-com.svg'></center>";
          echo "</div>";
          echo "</div>";
        }
        # chiusura section
        echo("</section>");

      ?>


      <!--
      <h1 class="testo-shiny" ><strong>PER LA CASA:</strong></h1>
      <p class="testo-shiny">Progettazione e reallizzazione di elementi di arredo per la casa e il giardino</p>
      <section class="carousel">
        <div class="card">
          <img id="casa-1" src="img/08.jpg" alt="Macchina Agricola 2">
          <div class="card-content">
            <h3>Tavolo da esterno e sedie</h3>
            <p>Realizzazione su misura di un tavolo da esterno con sedie
            </p>
          </div>
          <center class="card-arrow">
              <img style="width: 10vw; height: 10vw;" src="icons/right-arrow-svgrepo-com.svg">
          </center>
          <br>
        </div>
        <div class="card">
          <img id="casa-2" src="img/24.jpg" alt="Macchina Agricola 3">
          <div class="card-content">
            <h3>Grate per finestra</h3>
            <p>Realizzazione su misura di una grata per finestra.</p>
          </div>
        </div>
        <div class="card" id="card-1">
          <img id="casa-3" src="img/26.jpg" alt="Macchina Agricola 1">
          <div class="card-content" >
            <h3>Cancello</h3>
            <p>Realizzazione su misura di un cancello.</p>
          </div>
        </div>
        
      </section>
      <br>

      <h1 class="testo-shiny " ><strong> Impianti zootecnici:</strong></h1>
      <p class="testo-shiny">Progettazione e reallizzazione di soluzioni per impianti zootecnici</p>
      <section class="carousel">
        <div id="zoo-1" class="card" >
          <img src="img/18.jpg" alt="Macchina Agricola 1">
          <div class="card-content" >
            <h3>Impianto zootecnico modulare</h3>
            <p>Struttura facilmente espandibile e resistente per ambienti agricoli</p>
          </div>
        </div>
        <div id="zoo-2" class="card">
          <img src="img/23.jpg" alt="Macchina Agricola 2">
          <div class="card-content">
            <h3>Mangiatoglie per impianto zootecnico</h3>
            <p>Struttura facilmente espandibile e resistente per ambienti agricoli.</p>
          </div>
        </div>
        <div id="zoo-3" class="card">
          <img src="img/04.jpg" alt="Macchina Agricola 3">
          <div class="card-content">
            <h3>Ascensore trasportatore</h3>
            <p>Un ascensore credo</p>
          </div>
        </div>
        <div class="card">
          <img src="img/06.jpg" alt="Macchina Agricola 3">
          <div class="card-content">
            <h3>Cancello per impianto zootecnico</h3>
            <p>Cancello modulare su misura</p>
          </div>
        </div>
      </section>

      -->
    </div>
    <br>
    
  </section>

  <footer id="contatti" class="bg-dark text-light py-4 mt-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3 mb-md-0">
          <h2 class="mb-3">Contatti</h2>
          <ul class="list-unstyled">
            <li><i class="bi bi-envelope"></i> Email: <a href="mailto:tuttoinox.impianti@gmail.com" class="text-light">tuttoinox.impianti@gmail.com</a></li>
            <li><i class="bi bi-telephone"></i> Telefono: <a href="tel:+393336548623" class="text-light">+39 333 6548623</a></li>
            <li><i class="bi bi-geo-alt"></i> Indirizzo: Via Guglielmo Marconi 34 - Cervere</li>
          </ul>
        </div>
        <div class="col-md-6 text-md-end">
          <span class="small">&copy; 2025 Tuttoinox. Tutti i diritti riservati.</span>
        </div>
      </div>
    </div>
  </footer>
  
  

    
</body>
</html>