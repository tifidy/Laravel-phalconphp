<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootstrap Bootstrap Login Form</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example snippet for a Bootstrap login form modal" />
        {{$assets->outputCss('header')}}
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">







        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            .modal-footer {   border-top: 0px; }
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        <!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Bilgi Merkezi Admin</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="{{Url::get('/')}}">
            <div class="form-group">
              <input type="text" name="tcno" class="form-control input-lg" placeholder="T.C. kimlik no giriniz">
            </div>
            <div class="form-group">
              <input type="password" name="parola" class="form-control input-lg" placeholder="Şifre giriniz">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Giriş</button>
             {{--  <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span> --}}
            </div>
          </form>
      </div>
      <div class="modal-footer">

      </div>
  </div>
  </div>
</div>
        
{{$assets->outputJs('footer')}}






        
    </body>
</html>