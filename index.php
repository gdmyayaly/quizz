<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grow</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/quizz.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <script src="js/quizz.js"></script>
</head>
<body>
    <?php
    include_once('page/nav.php')
    ?>
    <div class="container">
    <br>
    <h3 id="titrepage" class="titre">CONNAISSEZ-VOUS CE QUARTIER DE DAKAR ?<br></h3> 
    <br>
    <section class="section1" id="question1">
        <h3 class="titre">QUESTION <span style="color: #FF4080">1</span> /4</h3> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image1">
                        <img src="assets/gor.png" alt="">   
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="quartier">
                        <p class="q" onclick="good1()" ><a  id="qu">Medina</a>  </p>
                        <p class="q" onclick="bad1()" ><a id="qu">Yoff</a> </p>
                        <p class="q" onclick="bad1()"><a id="qu">Foire</a> </p>
                     </div>
                </div>
            </div>
        </div>
        <br>
    </section>
<!-- <div style="display: none" id="bounceInLeft"> -->
    <section class="section2  animated bounceInLeft" id="question2" >
        <h3 class="titre">QUESTION <span style="color: #FF4080">2</span> /4</h3> <br><br>
        <div class="container"> 
            <div class="row">
                <div class="col-md-6">
                    <div class="image2">
                        <img src="assets/ouakam.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quartier2">
                        <p class="q" onclick="good2()" ><a id="qu">Medina</a> </p>
                        <p class="q" onclick="bad2()" ><a id="qu">Yoff</a></p>
                        <p class="q" onclick="bad2()" ><a id="qu">Foire</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="restart">
            <button onclick="recommancer()" class="btn btn-lg  oui"><span style="color:white"> <a >RECOMMENCEZ!!</a> </span> </button> <br> <br>
        </div>
    </section>
<!-- </div> -->
    <section class="section3 animated bounceInLeft" id="question3">
        <h3 class="titre">QUESTION <span style="color: #FF4080">3</span> /4</h3> <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image3">
                        <img src="assets/ouakam.png" alt="">   
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quartier4">
                        <p class="q" onclick="good3()" ><a id="qu">Medina</a> </p>
                        <p class="q" onclick="bad3()" ><a id="qu">Yoff</a></p>
                        <p class="q" onclick="bad3()" ><a id="qu">Foire</a></p>
                    </div>
                </div>  
            </div>
        </div>
        <div class="restart">
            <button onclick="recommancer()" class="btn btn-lg  oui"><span style="color:white"> <a >RECOMMENCEZ!!</a> </span> </button> <br> <br>
        </div>
    </section>
    <section class="section4 animated bounceInLeft" id="question4">
        <h3 class="titre">QUESTION <span style="color: #FF4080">4</span> /4</h3> <br><br>
            <div class="container">  
                <div class="row">
                    <div class="col-md-6">
                        <div class="image4">
                            <img src="assets/ouakam.png" alt="">       
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="quartier4">
                            <p class="q" onclick="good4()" ><a id="qu">Medina</a> </p>
                            <p class="q" onclick="bad4()" ><a id="qu">Yoff</a></p>
                            <p class="q" onclick="bad4()" ><a id="qu">Foire</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="restart">
                <button onclick="recommancer()"  class="btn btn-lg  oui"><span style="color:white"> <a >RECOMMENCEZ!!</a> </span> </button> <br> <br>
            </div>
    </section>
    </div>
    <br><br>
    <div class="container" id="avantresultat">
        <div class="info animated bounceInLeft" style="background-image: url(assets/fille.jpg); background-repeat: no-repeat; background-position: center;"  id="avis" >  
            <div class="para text-center">   
                <p style="color: #FF4080;"> Avant de découvrir votre résultats, il y a quelque chose que vous devriez savoir sur les 4 quartiers que vous venez de voir sur ces images .. </p>       
                <p> Ils représentent les 8 quartiers, où les femmes subissent le plus des maltraitances.</p>
                <p>  Pour lutter contre cette injustice,<span style="color: #FF4080;">êtes vous prêts à ajouter votre nom et rejoindre notre cause ?</span>  </p><br>
                <style>.oui{background-color:#FF4080;}
                        .non{
                        background-color:white;
                            };
                </style>
                <button  class="btn btn-lg  oui" onclick="jerejoint()">
                    <a href="#formulaire">
                        <span style="color:white">JE REJOINS LA CAUSE</span>
                    </a>  
                </button> <br> <br>
                <button onclick="jenerejointplus()"  class="btn btn-lg  non"  ><a href="#resultatquestion"  ><span style="color:#FF4080">NON, MERCI</span></a></button>
            </div><!--para-->        
        </div>
    </div>
    <br><br>
    <div id="formulaire"  style="background-image: url(assets/back.png); background-repeat: no-repeat; background-position: center;" class="container  animated bounceInLeft "  >
        <div class="container" >           
            <div class="row">
                <div class="col-md-6">
                    <div class="images" id='ajouter1'>
                        <p class="merci">Super merci. Entrez vos coordonnées ci-dessous pour montrer que vous vous tenez à la situation des filles et des femmes partout dans le monde.Cela ne prend que quelques secondes.</p>
                           <form >
                                <div class="form-group row col-8 ">
                                    <div class="col">
                                        <input type="text" required="required" name="prenom" class="form-control" id="inputEmail3" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-group row col-8 ">
                                    <div class="col">
                                        <input type="text" required="required"  name="nom" class="form-control" id="inputPassword3" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-group row col-8 ">
                                    <div class="col">
                                        <input type="number" required="required" class="form-control" id="inputPassword3" placeholder="Téléphone">
                                    </div>
                                </div> 
                                <div class="form-group row col-6 ">
                                    <style>.valider{background-color:#FF4080;}
                                            .sauter{
                                                    border: 1px solid #FF4080;
                                                    background-color:white;
                                                };                 
                                    </style>
                                    <div class="col-6">
                                        <button type="submit"  name="valider"  class="btn valider"><a   ><span style="color:white">VALIDER</span></a></button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit"  name="sauter"  class="btn sauter"><a ><span style="color:#FF4080">SAUTER </span></a></button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <p style="color:grey; font-size:10px;">En validant, vous acceptez la politique de confidentialité de grow , y compris le transfert de vos informations sur les serveurs dediés. <br>Vous acceptez de recevoir des mises à jour occasionnelles sur les campagnes de grow.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="avisquizz">
                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste et, aspernatur labore quis praesentium error nisi ex, laborum mollitia sed ea iure. Omnis officiis sit, quas minus iusto ex assumenda.</p> 
                  </div>
               </div>
            </div>
        </div>
    </div>
<br><br>
    <div id="apresenregistrement" class="scorenom animated bounceInLeft" style="background-image: url(assets/back.png); background-repeat: no-repeat; background-position: center;" id="ajouter2">
        <div class="share2" >
            <p> Merci de vous être enregistré,</p>
            <p><span style="font-size:30px; color:#FF4080;">{{personnes.prenom}}</span>, Voici votre résultat :</p>
            <p id="score">Vous avez obtenu <span style="color: #FF4080; font-size:40px;"> {{cpt}}</span>  points sur <span style="color: #FF4080; font-size:40px;">4</span> </p>
        </div>
        <style>.yes{background-color:#FF4080;}
               .no{
                  border: 1px solid #FF4080;
                  background-color:white;
                 };                                                
        </style>
        <p style="font-size:20px; text-align:center;" > <span style="font-size:30px; color:#FF4080;">{{personnes.prenom}}</span> , partageriez-vous ce jeu avec vos amis pour voir s'ils peuvent battre votre score?</p>
        <div class="col-6 btnshare">
            <button type="submit"  class="btn yes" ><a  ><span style="color:white">OUI</span> </a></button> &nbsp; &nbsp;&nbsp;
            <button  type="submit"  class="btn no"><a   ><span style="color:#FF4080">NON</span></a></button>
        </div>
      <br> <br>
        <div class="points">
            <button class="btn btn-lg  oui"><a ><span  style="color:white"> VOIR LA REPARTITION DE MON SCORE </span></a> </button> <br> <br>
        </div>
    </div>
    <br><br>
    <div id="resultatquestion" class="noregister animated bounceInLeft"   style="background-image: url(assets/back.png); background-repeat: no-repeat; background-position: center;" id="sauter">
        <div class="share2" >
            <p > Merci d'avoir participé,</p>
            <p id="score">Vous avez obtenu <span style="color: #FF4080; font-size:40px;"> {{cpt}}</span>  points sur <span style="color: #FF4080; font-size:40px;">4</span> </p>
        </div>
        <style>.yes{background-color:#FF4080;}
                .no{
                     border: 1px solid #FF4080;
                     background-color:white;
                   };                                                  
        </style>
        <p style="font-size:20px; text-align:center;"> Allez-vous partager ce jeu avec vos amis pour voir s'ils peuvent battre votre score?</p> <br> 
        <div class="col-6 btnshare" id="saute">
            <button type="submit" onclick="ouipartage()" class="btn yes" ><a href="#linketpartage" ><span  style="color:white">OUI</span> </a></button> &nbsp; &nbsp;&nbsp;
            <button  type="submit" onclick="nonpartage()" class="btn no"><a  href="#repartition" ><span style="color:#FF4080">NON</span></a></button>
        </div>   
      <br><br>
      <div class="points">
        <button   class="btn btn-lg  oui"><a   ><span  style="color:white"> VOIR LA REPARTITION DE MON SCORE </span></a> </button> <br> <br>
      </div>
    </div>
<br><br>
    <div id="repartition" class="repartition" style="background-image: url(assets/back.png); background-repeat: no-repeat; background-position: center;" >
        <div class="info  animated flipInY"   >
            <div class="container">          
                <div class="row">
                    <div class="col-md-6">
                        <div class="parcours1">
                            <p >Vous avez obtenu <strong style="color: #FF4080">{{cpt}} </strong>points sur 4</p>
                              <strong style="color: #FF4080">1. </strong> 
                              <span id="span" class="span">Medina </span>
                              <span id="span" class="span">Yoff </span>
                              <strong  style="color: #FF4080" > Foire</strong>  <br>
                        
                              <strong style="color: #FF4080">2. </strong>
                               <span id="span" class="span">Medina </span>
                              <strong  style="color: #FF4080" > Yoff</strong>
                              <span id="span"class="span">Foire </span> <br>
                        
                              <strong style="color: #FF4080">3. </strong> 
                              <strong  style="color: #FF4080" > Medina</strong> 
                              <span id="span" class="span">Yoff </span>
                              <span id="span"class="span">Foire </span> <br>
                        
                              <strong style="color: #FF4080">4. </strong>
                              <span id="span"  class="span">Medina </span>
                              <span id="span" class="span">Yoff </span>
                              <strong  style="color: #FF4080" > Foire</strong>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cartecomplete">
                            <img src="assets/ouakam.png" alt="">   
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <br><br>
    <div id="linketpartage" class="container shares animated bounceInLeft" id="partager">
        <div class="container">              
            <div class="row">
                <div class="col-md-6">
                    <h3 > <strong style="color: #FF4080; font-size:50px;">Challengez vos amis !!</strong></h3> <br>
                    <h5 > Cliquez simplement ci-dessous pour partager !</h5> <br>
                    <div>
                    <a href="https://api.whatsapp.com/send?text=https://www.growstrategyzer.com/"><img src="./assets/whatsap.png"  alt=""></a><br>

                        <iframe class="fb" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fweb.facebook.com%2Fgrowsenegal%2F&width=200px&layout=button&action=like&size=large&share=true&height=65&appId"
                                width="220px" height="28" style="border:none;overflow:hidden; "
                                title ="" allow="encrypted-media">
                        </iframe> <br>
                        <a href="https://twitter.com/intent/tweet?screen_name=growsenegal&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @growsenegal</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="imageshare">
                        <img src="assets/niozedve.png" alt="">   
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <script>
    var titrepage=document.getElementById('titrepage');
    var fisrtquestion=document.getElementById('question1');
    var secondquestion=document.getElementById('question2');
    var thirdquestion=document.getElementById('question3');
    var fourthquestion=document.getElementById('question4');
    var avantresultat=document.getElementById('avantresultat');
    var formulaire=document.getElementById('formulaire');
    var apresenregistrement=document.getElementById('apresenregistrement');
    var resultatquestion=document.getElementById('resultatquestion');
    var vuebonnereponse=document.getElementById('repartition');
    var linketpartage=document.getElementById('linketpartage');
    secondquestion.style.display="none";
    thirdquestion.style.display="none";
    fourthquestion.style.display="none";
    avantresultat.style.display="none";
    formulaire.style.display="none";
    apresenregistrement.style.display="none";
    resultatquestion.style.display="none";
    vuebonnereponse.style.display="none";
    linketpartage.style.display="none";
   function good1(){
        fisrtquestion.style.display="none";
        secondquestion.style.display="block";
    };
    function bad1(){
        fisrtquestion.style.display="none";
        secondquestion.style.display="block";
    }
    function good2(){
        secondquestion.style.display="none";
        thirdquestion.style.display="block";
    }
    function bad2(){
        secondquestion.style.display="none";
        thirdquestion.style.display="block";
    }
    function good3(){
        thirdquestion.style.display="none";
        fourthquestion.style.display="block";
    }
    function bad3(){
        thirdquestion.style.display="none";
        fourthquestion.style.display="block";
    }
    function good4(){
        fourthquestion.style.display="none";
        avantresultat.style.display="block";
        titrepage.style.display="none";
    }
    function bad4(){
        fourthquestion.style.display="none";
        avantresultat.style.display="block";
        titrepage.style.display="none";
    }
    function recommancer(){
    fisrtquestion.style.display="block"
    secondquestion.style.display="none";
    thirdquestion.style.display="none";
    fourthquestion.style.display="none";
    avantresultat.style.display="none";
    formulaire.style.display="none";
    apresenregistrement.style.display="none";
    resultatquestion.style.display="none";
    vuebonnereponse.style.display="none";
    linketpartage.style.display="none";
    }
    function jerejoint(){
        formulaire.style.display="block";
        resultatquestion.style.display="none";
    }
    function jenerejointplus(){
        formulaire.style.display="none";
        resultatquestion.style.display="block";
    }
    function ouipartage(){
        linketpartage.style.display="block";
        vuebonnereponse.style.display="none";
    }
    function nonpartage(){
        vuebonnereponse.style.display="block";
    }
    </script>
</body>
</html>