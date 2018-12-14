<?php
ob_start();
session_start();

if(!$_SESSION["loggedIn"]){
    header("Location: login.php");
}
?>

<?php include 'components/header.php'; ?>

      <header>
         <div class="nav nav-fixo">
            <nav class="navbar navbar-default" id="meuMenu">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="index"><img class="logo" src="assets/images/logo.png" alt="Logo - LD" /></a>
                  </div><!-- .navbar-header -->

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
                        <li><a href="#link1" class="scroll">L e D</a></li>
                        <li><a href="#link2" class="scroll">O grande dia</a></li>
                        <li><a href="#link3" class="scroll">Dicas / Informações</a></li>
                        <li><a href="#link4" class="scroll">Presentes</a></li>
                     </ul><!-- .nav -->
                  </div><!-- .navbar-collapse -->
               </div><!-- .container -->
            </nav><!-- .navbar -->

            <!-- <div class="musicas"></div> -->

            <!-- <ul id="player">
               <li><a title="Ed Sheeran - Thinking Out Loud" href="assets/swf/1_Ed_Sheeran_Thinking_Out_Loud.mp3">Ed Sheeran - Thinking Out Loud</a></li>
               <li><a title="Ed Sheeran - Photograph" href="assets/swf/2_Ed_Sheeran_Photograph.mp3">Ed Sheeran - Photograph</a></li>
               <li><a title="Ed Sheeran - Perfect" href="assets/swf/3_Ed_Sheeran_Perfect.mp3">Ed Sheeran - Perfect</a></li>
               <li><a title="Ed Sheeran - Shape of You" href="assets/swf/4_Ed_Sheeran_Shape_of_You.mp3">Ed Sheeran - Shape of You</a></li>
            </ul> -->
         </div><!-- .nav -->
      </header>

      <section class="vitrine">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="assets/images/vitrine.jpg" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->

               <div class="item">
                  <img src="assets/images/slide/IMG_2125.JPG" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
               <div class="item">
                  <img src="assets/images/slide/IMG_2415.JPG" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
               <div class="item">
                  <img src="assets/images/slide/IMG_2786.JPG" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
               <div class="item">
                  <img src="assets/images/slide/IMG_2789.JPG" class="slide" alt="Vitrine - LD" style="object-position: top;" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
               <div class="item">
                  <img src="assets/images/slide/IMG_2794.JPG" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
               <div class="item">
                  <img src="assets/images/slide/IMG_5581.JPG" class="slide" alt="Vitrine - LD" />
                  <div class="carousel-caption">
                     <img src="assets/images/titulo.png" alt="Louise e Diego - LD" />
                  </div><!-- .carousel-caption -->
               </div><!-- .item -->
            </div><!-- .carousel-inner -->
         </div><!-- .slide -->
      </section><!-- .vitrine -->

      <section class="contagem">
         <div class="container">
            <!-- <img src="assets/images/simb.jpg" alt="Louise e Diego - LD" /> -->

            <p>Olá queridos familiares e amigos, sejam bem vindos ao nosso site.</p>

            <h1>Wyrd Bið Ful Aræd <a data-toggle="modal" data-target="#myModal" class="hvr-float-shadow"><i class="fa fa-plus" aria-hidden="true"></i></a></h1>
               
            <p class="relogio">Faltam</p>
            <div class="clock"></div>
         </div><!-- .container -->

         <!-- Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                     <p class="titulo-modal">Destiny is all</p>
                     <p class="titulo-modal">O Destino é Inexorável</p>
                     <div class="mg-30"></div>
                     <p>Este é um pensamento que nos suscita reflexões!</p>
                     <p>Seguindo o pensamento dessa frase, entre tantos pontos de vistas, nós dois gostamos da ideia em que o destino está inexoravelmente a nossa volta, não podemos fugir dele, mas podemos decidi-lo, ou seja, os fios que tecem nosso destino e História estão inevitavelmente em mãos superiores, mas as escolhas nos pertencem.</p>
                     <p>As coisas acontecem porque tem que acontecer</p>
                     <p>As vezes por caminhos retos, outras por caminhos tortos, as vezes pelo lado errado, nem sempre do jeito mais fácil.</p>
                     <p>As vezes da pra prever, as vezes vem de supresa. Nem sempre como queremos, nem sempre quando queremos.</p>
                     <p>As vezes é a coisa certa na hora errada, as vezes não entendemos a hora, as vezes não entendemos as coisas.</p>
                     <p>Nem tudo é para ser explicado, nem tudo é para ser entendido, mas se foi, é porque tinha que ser.</p>
                  </div>
               </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
         </div><!-- .modal -->
         <a href="" id="link1"></a>
      </section><!-- .contagem -->
      
      <section id="sobre-nos">
         <div class="container">
            <h1 class="geral">Um pouquinho sobre nós por...</h1>
            
            <div class="content">
               <a data-toggle="modal" data-target="#myModal2" class="hvr-float-shadow">
                  <img src="assets/images/ela.jpg" alt="">
                  <h4>Ela</h4>
               </a>
            </div><!-- .content -->
            <div class="content">
               <a data-toggle="modal" data-target="#myModal3" class="hvr-float-shadow">
                  <img src="assets/images/ele.jpg" alt="">
                  <h4>Ele</h4>
               </a>
            </div><!-- .content -->
         </div><!-- .container -->

         <!-- Modal2 -->
         <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                     <p class="titulo-modal">por ELA</p>
                     <div class="mg-30"></div>
                     <p>Apesar de inúmeras oportunidades, como a infância em Acari, ou a adolescência nos arredores do Henrique Castriciano, só nos conhecemos em 2014, nunca tínhamos nos visto antes… e num samba no aeroclube nos vimos pela primeira vez, ele me chamou pra dançar, mas não ficamos nesse dia. Mais ou menos um mês depois nos encontramos novamente em um show de aviões, no dia 03/10/14 e ficamos pela primeira vez, mas não trocamos contato.</p>
                     <p>Logo depois ele me encontrou no facebook e me adicionou e desde então ficamos conversando pelo messenger do face, até que ele me convidou pra jantar, no começo eu nao queria, tentei resistir, mas topei, afinal eu tava morrendo de fome e sem o que comer em casa (hahahahahah) e foi quando ele me surpreendeu, com tanta educação, atenção e um papo maravilhoso… e eu que dizia que não queria nada com ninguém, que não queria me apegar porque ia embora… fiquei com o gostinho de quero mais. Estava numa época de estudo e viagens para fazer provas de residência em SP, RJ, CE e entre idas e vindas, saídas rápidas, muito papo pelo WhatsApp, ele sempre dando muita força, carinho e estímulo em 19/12/14 começamos a namorar. Fizemos nossa primeira grande viagem em fevereiro, que foi simplesmente perfeita e nos apegamos ainda mais, começamos a construir uma ligação super forte e o amor foi só aumentando. Nessa mesma viagem recebi a notícia que tinha passado na residência em Recife e apesar da felicidade imensa, pensei como seria manter um relacionamento à distância durante 3 anos.</p>
                     <p>E apesar de 3 anos extremamente difíceis, o amor, carinho, a força, compreensão, o estímulo, a torcida pela felicidade do outro, só fez o relacionamento se solidificar e nos fez crescer juntos, a cada dia...e continua fazendo. E a certeza que nós temos, é que o destino nos uniu, Deus nos uniu, e em novembro selaremos esse amor para a eternidade!</p>
                     <p><b>WBFA</b></p>
                  </div>
               </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
         </div><!-- .modal -->

         <!-- Modal3 -->
         <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                     <p class="titulo-modal">por ELE</p>
                     <div class="mg-30"></div>
                     <p>Tudo começou num lugar que eu adoro… não foi no Midway, nem no Rock in Rio, muito menos numa pista de MotoGp. Foi num campo de futebol, mas… eu não estava jogando (acho q ela se apaixonaria mais fácil se estivesse). Enfim.. Foi num sambinha que acontecia no Society do Aeroclube, dançamos uma música ou outra, mas nada aconteceu (eu tava sem barba, deve ter sido por isso). Um tempo depois, em outra festa, nos encontramos novamente. Foi bem mais interessante (de barba). Uma troca de olhares intensa e depois aquele sorriso… fulminante. Ficamos pela primeira vez, e foi uma sintonia perfeita. Mas ficou por isso mesmo, pq a moça queria ir embora de Natal, nada de se aproximar de ninguém... como se o cara com coração de gelo quisesse algo mais, é mole? Porém, vários dias depois, ela foi fisgada. Por quem? Pela fome! Um dia a chamei pra sair, ela fazendo jogo duro... mas ai a frase seguinte mudou tudo: "Low, eu estou com fome, vc está com fome... vamos comer uma pizza e pronto. Matamos a fome dos dois." Deu certo. Pense numa pizza boa... Nesse dia, o que era atração física foi se aprofundando, encontrei semelhança nos valores, principalmente familiares, e começou a surgir um outro sentimento: Admiração. pela pessoa, pela inteligência, garra... comecei a ficar estranho, gostando demais da voz dela, gostando demais de conversar com ela, gostando demais de estar com ela... parecia que o gelo do coração tava derretendo... e ai as coisas foram se intensificando, mais sentimentos novos surgindo, aquela sinergia, aquela empatia, aquela felicidade, pra mim inexplicável, em olhar seu sorriso. Ai, num mês decidimos namorar, contra todas as possibilidades... no outro fizemos nossa primeira viagem juntos, que foi um sonho, e então, no outro mês ela foi pra Recife, iniciando a residência médica. Foi (e esta sendo) uma provação, diária, mas do nosso jeitinho fomos encontrando uma forma pra dar certo e as dificuldades só fizeram fortalecer nossa relação. Mas já tive que ir numa noite pra voltar na madrugada do outro dia... fazer uma surpresa, pq as vezes, é preciso mais que palavras pra da força... as vezes, a presença é necessária, e quando estamos nesse nível de sintonia, ninguém precisa pedir ou falar... nós sabemos. Nos entendemos literalmente pelo olhar, que o dela por sinal é lindo demais... e eu faço tudo pra ver seu sorriso.</p>
                     <p>Enfim…. Tivemos muitas oportunidades de nos conhecer em momentos ‘melhores’, mas só muito tempo depois, quando os dois estavam de boa com a vida, não querendo nada com namoro, se conhecem, logo no momento em que ela iria morar fora... Ou seja, tinha tudo pra não dar em nada, mas como diria o grande filósofo medieval Uhtred de Bebbamburg, <b>Wyrd Bið Ful Aræd</b> ou seja, O destino é inexorável, e aqui estamos nós... celebrando o encontro e a união, celebrando a vida, celebrando definitivamente um amor, puro, leve, feliz, que tinha tudo para não existir, mas existe, e não tem fim.</p>
                  </div>
               </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
         </div><!-- .modal -->
         
      </section><!-- .sobre-nos -->

      <a href="" id="link2"></a>

      <section id="chaplin">
         <div class="container">
            <h1>O grande dia!</h1>

            <h4>Diante de Deus, da nossa família e dos nossos grandes amigos iremos celebrar o nosso amor.</h4>
            <p>Tanto a cerimonia quanto a festa serão no Chaplin. A celebração iniciará às 16:30h, pedimos a gentileza para não atrasarem hein ;) … Em seguida, hora de festejar! Não deixem de levar a animação e alegria para a festa bem bacana que estamos preparando para comemorarmos este dia tão feliz com vocês.</p>

            <h4>Local: Chaplin Recepções | Hora: 16:30h</h4>
         </div><!-- .container -->
      </section><!-- .chaplin -->

      <section class="fotos">
         <div class="content">
            <h1 class="geral">Louise e Diego</h1>

            
            <div class="desktop hidden-xs">
               <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/1.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/2.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/3.jpg" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/4.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/5.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/6.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->

                     <div class="item">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/7.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/11.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/10.png" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/12.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/8.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/9.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->

                     <div class="item">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/13.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/14.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/15.jpg" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/18.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/17.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/16.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->

                     <div class="item">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/20.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/25.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/21.jpg" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/22.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/23.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/24.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->

                     <div class="item">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/31.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/27.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/28.jpg" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/29.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/30.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/26.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->

                     <div class="item">
                        <div class="fotos-geral">
                           <div class="foto foto-um">
                              <img src="assets/images/mosaico/35.jpg" alt="">
                           </div><!-- .foto-um -->
                           <div class="foto foto-dois">
                              <img src="assets/images/mosaico/33.jpg" alt="">
                           </div><!-- .foto-dois -->
                           <div class="foto foto-tres">
                              <img src="assets/images/mosaico/34.jpg" alt="">
                           </div><!-- .foto-tres -->
                           <div class="foto foto-quatro">
                              <img src="assets/images/mosaico/32.jpg" alt="">
                           </div><!-- .foto-quatro -->
                           <div class="foto foto-cinco">
                              <img src="assets/images/mosaico/36.jpg" alt="">
                           </div><!-- .foto-cinco -->
                           <div class="foto foto-seis">
                              <img src="assets/images/mosaico/37.jpg" alt="">
                           </div><!-- .foto-seis -->
                        </div><!-- .fotos-geral -->
                     </div><!-- .item -->
                  </div><!-- .carousel-inner -->

                  <!-- Controls -->
                  <div id="esquerda"></div>
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <div id="direita"></div>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div><!-- .slide -->
            </div><!-- .desktop -->

            <div class="mobile hidden-lg hidden-md hidden-sm">
               <div class="fotorama" data-nav="thumbs">
                  <img src="assets/images/mosaico/1.jpg">
                  <img src="assets/images/mosaico/2.jpg">
                  <img src="assets/images/mosaico/3.jpg">
                  <img src="assets/images/mosaico/4.jpg">
                  <img src="assets/images/mosaico/5.jpg">
                  <img src="assets/images/mosaico/6.jpg">
                  <img src="assets/images/mosaico/7.jpg">
                  <img src="assets/images/mosaico/8.jpg">
                  <img src="assets/images/mosaico/9.jpg">
                  <img src="assets/images/mosaico/10.jpg">
                  <img src="assets/images/mosaico/11.jpg">
                  <img src="assets/images/mosaico/12.jpg">
                  <img src="assets/images/mosaico/13.jpg">
                  <img src="assets/images/mosaico/14.jpg">
                  <img src="assets/images/mosaico/15.jpg">
                  <img src="assets/images/mosaico/16.jpg">
                  <img src="assets/images/mosaico/17.jpg">
                  <img src="assets/images/mosaico/18.jpg">
                  <img src="assets/images/mosaico/20.jpg">
                  <img src="assets/images/mosaico/21.jpg">
                  <img src="assets/images/mosaico/22.jpg">
                  <img src="assets/images/mosaico/23.jpg">
                  <img src="assets/images/mosaico/24.jpg">
                  <img src="assets/images/mosaico/25.jpg">
                  <img src="assets/images/mosaico/26.jpg">
                  <img src="assets/images/mosaico/27.jpg">
                  <img src="assets/images/mosaico/28.jpg">
                  <img src="assets/images/mosaico/29.jpg">
                  <img src="assets/images/mosaico/30.jpg">
                  <img src="assets/images/mosaico/31.jpg">
                  <img src="assets/images/mosaico/32.jpg">
                  <img src="assets/images/mosaico/33.jpg">
                  <img src="assets/images/mosaico/34.jpg">
                  <img src="assets/images/mosaico/35.jpg">
                  <img src="assets/images/mosaico/36.jpg">
                  <img src="assets/images/mosaico/37.jpg">
               </div><!-- .fotorama -->
            </div><!-- .mobile -->
         </div><!-- .content -->
      </section><!-- .fotos -->

      <a href="" id="link3"></a>

      <section id="dicas">
         <div class="container">
            <h1 class="geral">Dicas / Informações</h1>

            <div class="row">
               <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="assets/images/traje.png" alt="">

                  <h4>Trajes</h4>
                  <p>Vamos todos bem bonitos para este grande dia! Escolham o traje que se sentirem melhor, para aproveitar bastante esta festa bem animada. Mas lembrem-se que, neste dia, BRANCO SÓ A NOIVA!! ;)</p>
               </div><!-- .md-4 -->
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="assets/images/mapa.png" alt="">

                  <h4>Como Chegar</h4>
                  <p>O Chaplin é bem fácil de chegar, em Areia Preta, bem na rotatória. Teremos manobristas para quem for de carro, mas não vamos esquecer da bebida, então Uber/Taxi são ótimas soluções.</p>
                  <a data-toggle="modal" data-target="#myModal4" class="botao">LOCALIZAÇÃO</a>
               </div><!-- .md-4 -->
               <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
               <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="assets/images/predio.png" alt="">

                  <h4>Hospedagem</h4>
                  <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizadosimplesmente</p>
               </div> --><!-- .md-4 -->

               <!-- Modal4 -->
               <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-body">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                           <p class="titulo-modal">Chaplin Recepções</p>
                           <div class="mg-30"></div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.510002352489!2d-35.19348928523294!3d-5.783389395808974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b30088eca36c17%3A0x83938319d3d78e56!2sChaplin+Recepc%C3%B5es!5e0!3m2!1spt-BR!2sbr!4v1498570183778" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                     </div><!-- .modal-content -->
                  </div><!-- .modal-dialog -->
               </div><!-- .modal -->
            </div><!-- .row -->
         </div><!-- .container -->
      </section><!-- .dicas -->

      <a href="" id="link4"></a>

      <section id="presentes">
         <div class="container">
            <h1 class="geral">Presentes</h1>

            <p>O que mais queremos para o nosso casamento é ter os nossos amigos e familiares lá para celebrar conosco. Então, mais do que qualquer coisa, estaremos simplesmente gratos por sua presença.</p>

            <p>Mas caso vocês queiram nos presentear, que tal nos ajudar a montar o nosso lar?!<br />
            Abaixo seguem algumas sugestões de locais, mas fiquem à vontade em escolher um lugar diferente, que seja de sua preferência.</p>

            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="https://www.camicado.com.br/weddinglist/products/60352006" target="_blank" class="hvr-float-shadow">
                     <img src="assets/images/camicado.png" class="mg" alt="">

                     <p>Esta lista está presente tanto no site quanto nas lojas físicas (de preferência a do Midway, né?! Rss)</p>
                  </a>
               </div><!-- .md-4 -->
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="http://casamento.pontofrio.com.br/#/lista-presentes/632070" target="_blank" class="hvr-float-shadow">
                     <img src="assets/images/ponto.png" class="mg" alt="">

                     <p>Esta lista está apenas no site</p>
                  </a>
               </div><!-- .md-4 -->
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a data-toggle="modal" data-target="#myModal5" class="hvr-float-shadow">
                     <img src="assets/images/cotas-lua-de-mel.png" alt="">

                     <p>Em alternativa às listas, caso prefiram, podem contribuir para tornar nossa lua de mel ainda melhor.</p>
                  </a>
               </div><!-- .md-4 -->

               <!-- Modal5 -->
               <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-body">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                           <p class="titulo-modal">Contribua com o valor que preferir</p>
                           <div class="mg-30"></div>
                           <div class="mg-30"></div>
                           <p>Banco do Brasil | Agencia 3293-X | Conta 110994-4</p>
                        </div>
                     </div><!-- .modal-content -->
                  </div><!-- .modal-dialog -->
               </div><!-- .modal -->

               <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <img src="assets/images/maga.png" class="mg" alt="">

                  <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizadosimplesmente</p>
               </div> --><!-- .md-3 -->
               <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <img src="assets/images/extra.png" class="mg" alt="">

                  <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizadosimplesmente</p>
               </div> --><!-- .md-3 -->
            </div><!-- .row -->
         </div><!-- .container -->
      </section><!-- .presentes -->

      <section id="confirme">
         <div class="container">
            <h1 class="geral">Confirme sua Presença</h1>

            <form action="user.php?action=confirm" method="post">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                     <div class="form-group">
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="" required/>
                     </div><!-- .form-group -->
                  </div><!-- .md-4 -->
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                     <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" value="" />
                     </div><!-- .form-group -->
                  </div><!-- .md-4 -->
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                     <div class="form-group">
                        <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Telefone" value="" />
                     </div><!-- .form-group -->
                  </div><!-- .md-4 -->
               </div><!-- .row -->

                <?php if(!empty($_GET['error']) && $_GET['error'] == 1){ ?>
                    <div style="color: red;font-size: 1.2em;">Erro ao enviar resposta, tente novamente mais tarde.</div>
                <?php } else if(!empty($_GET['error']) && $_GET['error'] == 2){ ?>
                    <div style="color: green;font-size: 1.2em;">Obrigado por sua resposta!</div>
                <?php } ?>

               <input type="submit" class="botao" name="answer_yes" value="CONFIRMO" />
               <input type="submit" class="botao" name="answer_dontknow" value="AINDA NÃO SEI" />
               <input type="submit" class="botao" name="answer_not" value="NÃO PODEREI IR" />
            </form>
         </div><!-- .container -->
      </section><!-- .confirme -->

      <section class="agradecimento">
         <div class="container">
            <h1 class="geral">Agradecemos pela visita</h1>
         </div><!-- .container -->
      </section><!-- .agradecimento -->

      <footer>
         <img src="assets/images/footer.jpg" alt="">
      </footer>

<?php include 'components/footer.php'; ?>

<?php
ob_end_flush();
?>