<!doctype html>
  <html lang="en">

  <head>
    <title>Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style>
        body {
        
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 25px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        }
        
        @media screen and (max-width: 1300px) {
        body {
            background-size: auto;
        }
        }
        
        #container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        
        #logo_bar {
        background:#DDDDDD;
        width: 300px;
        color: white;
        margin-bottom: 30px;
        padding: 10px 0;
        text-align: center;
        border-radius: 10px;
        border: 1px solid #FF4080
        }
        
        #logo {
        max-width: 50px;
        max-height: 50px;
        vertical-align: middle;
        }
        
        #form_box {
        background:#DDDDDD;
        width: 300px;
        text-align: center;
        border-radius: 10px;
        border: 1px solid #FF4080
        }
        
        #form_heading {
        
        padding: 15px 0 0 10px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 1.5em;
        }
        
        #font_20 {
        font-size: 15px;
        }
        
        input {
        background: none;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        padding: 10px;
        margin: 10px;
        border: 1px solid #DDDDDD;
        color: white;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 17px;
        }
        
        input:focus {
        box-shadow: 0 0 10px #FF4080;
        padding: 10px;
        margin: 10px;
        border: 1px solid #FF4080;
        }
        
        input[type=submit]:hover {
        cursor: pointer;
        }
        
        #credits_box {
        background:#DDDDDD;
        color: #FF4080;
        width: 380px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 20px;
        text-align: center;
        padding: 10px;
        }
        
        a {
        text-decoration: none;
        color: antiquewhite;
        cursor: pointer;
        }
        
        a:hover {
        text-decoration: underline;
        }

        #buton{
        border: 1px solid #FF4080;
        border-radius: 10px;
        background-color: white;

        }
  </style>
</head>

  <body >
    <div id="container">
      <div id="logo_bar">
        <img id="logo" src="assets/growacademy (1).png" alt="logo"> <span style="color: #FF4080">grow academy</span>
      </div>
      <div id="form_box">
        <form action="" method="post">
          <p id="form_heading"> <strong style="color: #FF4080">Login Form</strong> </p>
          <input  id="buton" type="email" placeholder="Enter Email"><br />
          <input  id="buton" type="password" placeholder="Enter Password"><br />
          <input  type="submit" value="Login" style="color: #FF4080" id="buton"><br />
        </form>
      </div>
    </div>

    <div id="credits_box">
     <strong> Designed by grow tech</strong>
    </div>
  </body>

  </html>