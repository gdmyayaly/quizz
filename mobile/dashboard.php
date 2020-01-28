<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Dashboard</title>
</head>
<body>
<ion-app>
    <ion-tabs>

      <ion-tab tab="music">
        <ion-header translucent>
          <ion-toolbar>
            <ion-title>Home</ion-title>
          </ion-toolbar>
        </ion-header>

        <ion-content fullscreen>
              </ion-grid>
                <div id="all">

                </div>
            </ion-content>
      </ion-tab>












      <ion-tab tab="movies">
        <ion-header translucent>
          <ion-toolbar>
            <ion-title>Movies</ion-title>
          </ion-toolbar>
        </ion-header>

        <ion-content fullscreen class="ion-padding">
          <h1>Movies</h1>
        </ion-content>
      </ion-tab>

      <ion-tab tab="games">
        <ion-header translucent>
          <ion-toolbar>
            <ion-title>Games</ion-title>
          </ion-toolbar>
        </ion-header>

        <ion-content fullscreen class="ion-padding">
          <h1>Games</h1>
        </ion-content>
      </ion-tab>

      <ion-tab-bar slot="bottom">
            <ion-tab-button tab="music">
              <ion-label>Home</ion-label>
              <ion-icon name="home"></ion-icon>
            </ion-tab-button>
            <ion-tab-button selected tab="movies">
              <ion-label>Statistique</ion-label>
              <ion-icon name="stats"></ion-icon>
            </ion-tab-button>
            <ion-tab-button tab="games">
              <ion-label>Inscrit</ion-label>
              <ion-icon name="save"></ion-icon>
            </ion-tab-button>
          </ion-tab-bar>
    </ion-tabs>
  </ion-app>
  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <script>
      				$.ajax({
					url:'full.html',
					type:'GET',
					dataType:'html',
					success:function(reponse,staus){
						$("#all").html(reponse);
					}})
				var visiteur=document.getElementById('visiteur');
				var joueur=document.getElementById('joueur');
				var inscrit=document.getElementById('inscrit');
				var michemin=document.getElementById('michemin');
				var numberHomme=document.getElementById('numberHomme');
				var numberFemme=document.getElementById('numberFemme');
				var diagramme1=document.getElementById('diagramme1');
				setTimeout(function(){
				request1();
				request2();
				request3();
				},3000)

				setInterval(function(){
					request3();
					// 	$.ajax({
					// url:'dunut.html',
					// type:'GET',
					// dataType:'html',
					// success:function(reponse,staus){
					// 	$("#diagramme1").html(reponse);
					// }})
					// $.ajax({
					// url:'htmlchart/pays.html',
					// type:'GET',
					// dataType:'html',
					// success:function(reponse,staus){
					// 	$("#diagramme2").html(reponse);
					// }  
				},60000);
				// $.get("page/donner.php",function(data){
				// 	let da=JSON.parse(data);
				// 	visiteur.innerHTML=da.visiteur;
					// inscrit.innerHTML=da.inscrit;
					// michemin.innerHTML=da.michemin;
				//	joueur.innerHTML=da.joueur;
				// })
		
				setInterval(function(){
					request1();
					request2();
				// 	$.get("page/donner.php",function(data){
				// 	let da=JSON.parse(data);
				// 	visiteur.innerHTML=da.visiteur;
				// 	joueur.innerHTML=da.joueur;
				// 	inscrit.innerHTML=da.inscrit;
				// 	michemin.innerHTML=da.michemin;
				// }
				// )
				// $.get("phpchart/genre.php",function(data){
				// 		let da=JSON.parse(data);
				// 		numberHomme.innerHTML=da.Homme+"%";
				// 		numberFemme.innerHTML=da.Femme+"%";
				// 		console.log(da);
						
				// 	})

				},'60000');
				

				function request1(){
					$.get("../page/donner.php",function(data){
					let da=JSON.parse(data);
					visiteur.innerHTML=da.visiteur;
					joueur.innerHTML=da.joueur;
					inscrit.innerHTML=da.inscrit;
					michemin.innerHTML=da.michemin;
				}
				)
				}
				function request2(){
					$.get("../phpchart/genre.php",function(data){
						let da=JSON.parse(data);
						numberHomme.innerHTML=da.Homme+"%";
						numberFemme.innerHTML=da.Femme+"%";
						console.log(da);
						
					})	
				}
				function request3(){
					$.ajax({
					url:'../dunut.html',
					type:'GET',
					dataType:'html',
					success:function(reponse,staus){
						$("#diagramme1").html(reponse);
					}})
				}


				</script>

</body>
</html>