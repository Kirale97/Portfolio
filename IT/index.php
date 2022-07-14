<!doctype html>
<html lang="it">

  <head>
    <title>Portfolio Alessio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/index.js"></script>
    <!--
<script src="http://gestionemiosito.altervista.org/ProveMarco/portfolio/index.js"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/77138a97ca.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Satisfy&family=Monoton:wght@400;700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/contacts.css">
    <link rel="stylesheet" href="../CSS/about.css">
    <link href="http://fonts.cdnfonts.com/css/historia-sky" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Mobile -->
    <div id="menuNavbarMobile" style="margin-left: 100%;">
      <div class="row" style="margin-top:50px">
        <div id="elementsAboutMobile" class="col-sm-12 col-12 navElementsMobile">About</div>
        <div id="elementsProjectsMobile" class="col-sm-12 col-12 navElementsMobile">Progetti</div>
        <div id="elementsContactsMobile" class="col-sm-12 col-12 navElementsMobile">Contatti</div>
      </div>
      <div id="showContentMobile" style="width:100%; display:flex; justify-content:center; padding-top:30px"
        class="navElementsMobil2e"> <img class="mainflags" id="italianFlag"
          src="https://img.icons8.com/fluency/48/000000/italy-circular.png" />
        <div id="contentMobile" style="display: none; flex-direction: row;">
          <div class=""> <a href="../"><img class="mainflags" id="germanFlag"
                src="https://img.icons8.com/fluency/48/000000/germany-circular.png" /></a></div>
          <div class=""> <a href="../EN/"> <img class="mainflags" id="englandFlag"
              src="https://img.icons8.com/fluency/48/000000/england-circular.png" /></a></div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div id="navbar">
      <div class="row">
        <div id="boxNav" class="text-right">
          <div id="boxNav2" class="text-right">
            <svg class="ham hamRotate180 ham5" viewBox="0 0 100 100" width="80"
              onclick="this.classList.toggle('active')" id="ham">
              <path class="line top"
                d="m 30,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429" />
              <path class="line middle" d="m 70,50 h -40" />
              <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429" />
            </svg>
          </div>
        </div>
        <div id="navElements" class="text-right">
          <div class="text-right" style="margin:0; padding:0;display: flex;flex-direction: row;align-content: end;">
            <div id="aboutNav" class="text-right" style="">
              <div id="elementsAbout" style="display:flex; align-items:right; justify-content: right; ">
                <div class="elNav0">A</div>
                <div class="elNav0">b</div>
                <div class="elNav0">o</div>
                <div class="elNav0">u</div>
                <div class="elNav0">t</div>
                <div class="elNav0">&nbsp;</div>
                <div class="elNav0">m</div>
                <div class="elNav0">e</div>
              </div>
            </div>
            <div style="width:10px"></div>
            <div id="projectsNav" class="underline" style="display:flex; align-items:right; justify-content: right;">
              <div id="elementsProjects" style="display:flex; align-items:right; justify-content: right;">
                <div class="elNav1">P</div>
                <div class="elNav1">r</div>
                <div class="elNav1">o</div>
                <div class="elNav1">g</div>
                <div class="elNav1">e</div>
                <div class="elNav1">t</div>
                <div class="elNav1">t</div>
                <div class="elNav1">i</div>
              </div>
            </div>
            <div style="width:10px"></div>
            <div id="contactsNav" class="text-right underline"
              style="display:flex; align-items:right; justify-content: right;">
              <div id="elementsContacts" style="display:flex; align-items:right; justify-content: right;">
                <div class="elNav2">C</div>
                <div class="elNav2">o</div>
                <div class="elNav2">n</div>
                <div class="elNav2">t</div>
                <div class="elNav2">a</div>
                <div class="elNav2">t</div>
                <div class="elNav2">t</div>
                <div class="elNav2">i</div>
              </div>
            </div>
            <div id="dropdown" class="text-right underline">
              <span id="showContent"></span>
              <img class="mainflags" id="italianFlag"
                src="https://img.icons8.com/fluency/48/000000/italy-circular.png" />
              <span style="cursor:pointer" id="arrowDown">▼</span>
              <div id="content" class="text-right">
                <div><a href="../EN/"><img class="flags" id="englandFlag" style="display:"
                      src="https://img.icons8.com/fluency/48/000000/england-circular.png" /></a></div>
                <div><a href="../"> <img class="flags" id="germanFlag" style="display:"
                      src="https://img.icons8.com/fluency/48/000000/germany-circular.png" /></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pagina 1 (Home) -->
    <div style="position:relative; height:95vh; width:100vw">
      <div id="page1">
        <div id="moveName">Alessio&nbsp;Gennuso</div>
        <div id="subtitle">Web Developer</div>
        <div id="photoName"
          style="position:absolute;background-image:URL('');background-size: cover; opacity:0.75; bottom : 5vh; right:0; height: 50vh; width:60vw; font-size:100px; text-align:center; color:darkred">
        </div>
      </div>
    </div>
    <!-- pagina 2 (About) -->
    <div id="page2Parent" style="position:relative; width:100%">
      <div id="calcPage2" style="">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-12" style=" padding-bottom: 3vmin;">
            <p style="font-size: calc(3.5vw + 3.5vh);">About Me </p>
            Ciao mi chiamo Alessio e ho 24 anni. Sono diplomato come perito informatico. Mi dedico allo studio
            di nuovi linguaggi di programmazione e realizzazione di progetti in maniera autonoma. Ecco alcune delle
            Skill di cui ho conoscenze generali:
          </div>
        </div>
      </div>
      <div id="page2" style="overflow:hidden">
        <div class="row" style="height:100%">
          <div class="col-md-6 col-sm-12 col-12" id="photoAbout"
            style="background-image:url('../IMG/Foto2.jpeg');font-size:50px"></div>
          <div class="col-md-6 col-sm-12 col-12 aboutCol">
            <div class="row" style="color:white">
              <div id="aboutTitle" class="col-md-12 col-sm-12 col-12 text-center">About Me </div>
              <div id="aboutText" class="col-md-6 col-sm-12 col-12">
                <div class="row justify-content-md-center justify-content-sm-center justify-content-center">
                  <div id="text1" class="name2" style="display:none">Ciao&nbsp;</div>
                  <div id="text2" class="name2" style="display:none">mi&nbsp;</div>
                  <div id="text3" class="name2" style="display:none">chiamo&nbsp;</div>
                  <div id="text4" class="name2" style="display:none">Alessio&nbsp;</div>
                  <div id="text5" class="name2" style="display:none">e&nbsp;</div>
                  <div id="text6" class="name2" style="display:none">ho&nbsp;</div>
                  <div id="text7" class="name2" style="display:none">24&nbsp;</div>
                  <div id="text8" class="name2" style="display:none">anni.&nbsp;</div>
                  <div id="text9" class="name2" style="display:none">Sono&nbsp;</div>
                  <div id="text10" class="name2" style="display:none">diplomato&nbsp;</div>
                  <div id="text11" class="name2" style="display:none">come&nbsp;</div>
                  <div id="text12" class="name2" style="display:none">perito&nbsp;</div>
                  <div id="text13" class="name2" style="display:none">informatico.&nbsp;</div>
                  <div id="text14" class="name2" style="display:none">Mi&nbsp;</div>
                  <div id="text15" class="name2" style="display:none">dedico&nbsp;</div>
                  <div id="text16" class="name2" style="display:none">allo&nbsp;</div>
                  <div id="text17" class="name2" style="display:none">studio&nbsp;</div>
                  <div id="text18" class="name2" style="display:none">di&nbsp;</div>
                  <div id="text19" class="name2" style="display:none">nuovi&nbsp;</div>
                  <div id="text20" class="name2" style="display:none">linguaggi&nbsp;</div>
                  <div id="text21" class="name2" style="display:none">di&nbsp;</div>
                  <div id="text22" class="name2" style="display:none">programmazione&nbsp;</div>
                  <div id="text23" class="name2" style="display:none">e&nbsp;</div>
                  <div id="text24" class="name2" style="display:none">realizzazione&nbsp;</div>
                  <div id="text25" class="name2" style="display:none">di&nbsp;</div>
                  <div id="text26" class="name2" style="display:none">progetti&nbsp;</div>
                  <div id="text27" class="name2" style="display:none">in&nbsp;</div>
                  <div id="text28" class="name2" style="display:none">maniera&nbsp;</div>
                  <div id="text29" class="name2" style="display:none">autonoma.&nbsp;</div>
                  <div id="text30" class="name2" style="display:none">Ecco&nbsp;</div>
                  <div id="text31" class="name2" style="display:none">alcune&nbsp;</div>
                  <div id="text32" class="name2" style="display:none">delle&nbsp;</div>
                  <div id="text33" class="name2" style="display:none">Skill&nbsp;</div>
                  <div id="text34" class="name2" style="display:none">di&nbsp;</div>
                  <div id="text35" class="name2" style="display:none">cui&nbsp;</div>
                  <div id="text36" class="name2" style="display:none">ho&nbsp;</div>
                  <div id="text37" class="name2" style="display:none">conoscenze&nbsp;</div>
                  <div id="text38" class="name2" style="display:none">generali:&nbsp;</div>
                  
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-12" id="aboutIcons">
                <div class="row">
                  <div style="display:none;" class="divIcon col-md-6 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i style="height:100%" onmouseover="showIcon('textIcon1')"
                      onmouseout="hideIcon('textIcon1')" id="icon1" class="icon inner fa-brands fa-html5"></i>
                    <p style="display:none" class="textIcon" id="textIcon1">Html</p>
                  </div>
                  <div style="display:none;" class="divIcon col-md-6 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i onmouseover="showIcon('textIcon2')"
                      onmouseout="hideIcon('textIcon2')" id="icon2" class="icon inner fa-brands fa-js"></i>
                    <p style="display:none" class="textIcon" id="textIcon2">Javascript</p>
                  </div>
                  <div id="space1" class="col-md-12 col-sm-12" style="height:10vh"></div>
                  <div style="display:none;" class="divIcon col-md-4 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i onmouseover="showIcon('textIcon3')"
                      onmouseout="hideIcon('textIcon3')" id="icon3" class="icon inner fa-brands fa-php"></i>
                    <p style="display:none" class="textIcon" id="textIcon3">PHP</p>
                  </div>
                  <div id="space3" class="col-md-12 col-sm-12 col-12"></div>
                  <div style="display:none;" class="divIcon col-md-4 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i onmouseover="showIcon('textIcon4')"
                      onmouseout="hideIcon('textIcon4')" id="icon4" class="icon inner fa-brands fa-laravel"></i>
                    <p style="display:none" class="textIcon" id="textIcon4">Laravel</p>
                  </div>
                  <div id="space2" class="col-md-12 col-sm-12 col-12" style="height:10vh"></div>
                  <div style="display:none;" class="divIcon col-md-4 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i onmouseover="showIcon('textIcon5')"
                      onmouseout="hideIcon('textIcon5')" id="icon5" class="icon inner fa-brands fa-java"></i>
                    <p style="display:none" class="textIcon" id="textIcon5">Java</p>
                  </div>
                  <div style="display:none;" class="divIcon col-md-4 col-sm-4 col-4 text-center">
                    <div class="coverText"></div><i onmouseover="showIcon('textIcon6')"
                      onmouseout="hideIcon('textIcon6')" id="icon6" class="icon inner fa-brands fa-mysql"></i>
                    <p style="display:none" class="textIcon" id="textIcon6">MySQL</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- pagina 3 (Projects) -->
    <div id="page3">
      <div class="row" style="padding-top:5vmin;padding-bottom:5vmin;/*height:18vh*/">
        <div class="col-md-6 col-sm-12 col-12 projectTitle2" style="/*padding-left: 21px*/"> ContaCalorie</div>
        <div class=" col-md-3 col-sm-3 col-3" style="margin-left: 25%; padding:0; padding-right:15px">
          <div id="box1" class="box1_2" style="background-image: URL('../IMG/ImmagineProgetto2.png');">
          </div>
        </div>
      </div>
      <div class="row rowCarousel" style="">
        <div class="col-md-6 col-sm-12 col-12" id="colCarousel">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../IMG/ImmagineProgetto.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../IMG/ImmagineProgetto2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../IMG/ImmagineProgetto3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-12 textProject" style=" padding:0; padding-left: 15px; padding-right: 15px;">
          Progetto creato utilizzando il Framework Laravel e i seguenti linguaggi: HTML5, PHP, Javascript, CSS, MySQL.
          Il sito &egrave; stato realizzato per permettere agli utenti di tenere sotto controllo il proprio stile
          alimentare
          attraverso l'inserimento giornaliero degli alimenti.
          A seguire i lavori svolti:
          <br>
          <b>-</b> Registrazione/Login degli utenti;
          <br>
          <b>-</b> Calcolo BMI in base alle informazioni personali inserite in fase di registrazione;
          <br>
          <b>-</b> Tracciamento giornaliero delle calorie e macronutrienti mediante l'uso di un grafico;
          <br>
          <b>-</b> Inserimento e ricerca degli alimenti all'interno del database;
          <br>
          <b>-</b> Possibilit&agrave; di personalizzare un piatto raggruppando pi&ugrave; alimenti;
          <br>
          <b>-</b> Pagina riepilogo dati in cui l'utente pu&ograve; modificare i propri dati (informazioni personali,
          obiettivo da raggiungere).
        </div>
        <div class="col-md-4 col-sm-4 col-2" style="margin:0; padding:0; ">
          <div class="box2_2" style="background-image: URL('../IMG/ImmagineProgetto.png');"></div>
        </div>
      </div>
      <div class="row colBox3">
        <div class="col-md-3 col-sm-3 col-3" style="margin-left:50%; padding:0"></div>
        <div class="col-md-3 col-sm-3 col-3"
          style="margin-left:-1.5vw; padding:0; padding-right:0px; padding-bottom:2vmin">
          <div class="box3_2" style="background-image: URL('../IMG/ImmagineProgetto3.png');"></div>
        </div>
      </div>
      <div class="row rowScopri">
        <div class="col-md-6 col-sm-12 col-12 text-center textScopri" style="margin:0; padding:0;">
          <a href="http://gestionemiosito.altervista.org/Nuovo/public/" style="color:#0049ff">Scopri di pi&ugrave;
        </div></a>
      </div>
      
    </div>
    <!-- pagina 4 (Contact) -->
    <div id="page4">
      <div class="row" style="height:100%">
        <div class="col-md-12 col-12 col-sm-12" style="height:100%">
          <div class="row contactSubtitleParent" style="height:10vh;align-content:end;">
            <div id="contactSubtitle" class="contactSubtitle col-md-12 text-center">Vuoi lavorare con me?</div>
          </div>
          <div class="row" style="align-content:start; padding-bottom:2vmin">
            <div id="contactTitle" class="contactTitle col-md-12 text-center">Contattami</div>
          </div>
          <form action="sender.php" onsubmit="event.preventDefault(); doFetch()" name="form_send" id="form_send" method="POST">
            <div class="row justify-content-md-center justify-content-sm-center justify-content-center">
              <div class="col-md-6 col-sm-8 col-10">
              </div>
            </div>
            <div class="row justify-content-md-center justify-content-sm-center justify-content-center">
              <div class="col-md-6 col-sm-8 col-10">
                <div class="row justify-content-md-center justify-content-sm-center justify-content-center"
                  style="height:100%; padding:3px">
                  <div class="labelContacts col-md-12 col-sm-12 col-12" style="padding-top:0">
                    <span class="">Nome:</span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-12" style="height:10%">
                    <input type="text" class="inputContact" id="name" name="name" placeholder="Nome" required>
                  </div>
                  <div class="labelContacts col-md-12 col-sm-12 col-12">
                    <span class="">Email:</span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-12" style="height:10%">
                    <input type="text" class="inputContact" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="labelContacts col-md-12 col-sm-12 col-12">
                    <span class="">Messaggio:</span><br>
                  </div>
                  <div class="col-md-12 col-sm-12 col-12" style="height:40%">
                    <textarea class="inputContact" placeholder="Scrivi un messaggio" id="message" name="message" required></textarea>
                  </div>
                  <div class=" col-md-12 col-sm-12 col-12" style="height:20%; padding-top:15px; padding-bottom:15px">
                    <input type="submit" id="buttonContact" class="inputContact" name="submit" value="Invia">
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div id="rowMessage" class="row text-bottom" style="align-content:end; padding-bottom:4vmin; padding-top:7vmin">
            <div id="colMessage" class="col-md-12 text-center" style="padding:0; margin:0; background:green">
              Messaggio inviato con successo
            </div>
          </div>
          <div class="row text-bottom" style="align-content:end; padding-bottom:4vmin; padding-top:2vmin">
            <div class="col-md-12" style="padding:0; margin:0">
            <div class="contactElements">
                <div class="text-center" style="width:40%"><a href="mailto:souleaterr@hotmail.it"><i
                      class="fa-solid fa-envelope iconContacts"></i>&nbsp;souleaterr@hotmail.it</a></div>
                <div class="text-center" style="width:20%"><a
                    href="https://www.linkedin.com/in/alessio-gennuso-8a3397241/" target="_blank"><i
                      class="iconContacts fa-brands fa-linkedin"></i>&nbsp;Linkedin</a></div>
                <div class="text-center" style="width:40%"><a href="tel:+4915202059653"><i
                      class="iconContacts fa-solid fa-phone"></i>&nbsp;+49 15202059653</a></div>
              </div>
              <div class="contactElementsMobile">
                <div class="text-left" style="width:43%"><a href="mailto:souleaterr@hotmail.it"><i
                      class="fa-solid fa-envelope iconContacts"></i>&nbsp;souleaterr@hotmail.it</a></div>
                <div class="text-center" style="width:14%"><a
                    href="https://www.linkedin.com/in/alessio-gennuso-8a3397241/" target="_blank"><i
                      class="iconContacts fa-brands fa-linkedin"></i></a></div>
                <div class="text-right" style="width:43%">
                  <a href="tel:+4915202059653"><i class="iconContacts fa-solid fa-phone"></i>
                    &nbsp;+49 15202059653
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="indexPostCharge.js"></script>
    <script src="about.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>
</html>