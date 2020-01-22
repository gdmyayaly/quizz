<!doctype html>
  <html lang="en">

  <head>
    <title>Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

  <body >
  
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
         
          <div class="row">
              <!-- Section Titile -->
              <img  class=" col-md-6" src="images/stat.png" >
              <!-- contact form -->
              <div class=" form col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
              <h1 >CONNEXION</h1> <br>

              <form>
  <label>
    <p class="label-txt"> EMAIL</p>
    <input type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <label>
    <p class="label-txt">PASSWORD</p>
    <input type="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button>
</form>
              </div>
          </div>
      </div>
    </section>

  </body>
  <script>
  $(document).ready(function(){

$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };
});

});
  
  </script>

  </html>