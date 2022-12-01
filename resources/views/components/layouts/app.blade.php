<!--<!DOCTYPE html>
<html lang="es-BO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Sitio web Citas Hospital San Gabriel'}}">
    <meta name="keywords" content="{{ $keywords ?? 'San Gabriel, Citas' }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>San Gabriel Citas - {{ $title ?? ''}}</title>
</head>-->
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/sidebar.css">
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
          <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
              <div class="user-logo">
                  <div class="img" style="background-image: url(images/logo.jpg);"></div>
              </div>
          </div>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="#"><span class="fa fa-home mr-3"></span> Inicio</a>
      </li>
      <li>
          <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Notificaciones</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-gift mr-3"></span> </a>
      </li>
      <li>
        <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-cog mr-3"></span> Ajustes</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-sign-out mr-3"></span> Salir</a>
      </li>
    </ul>

    </nav>

    <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
    <x-layouts.nav/>
    {{ $slot }}
    
</div>

    </div>

    
    <x-layouts.footer/>   
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/main.js"></script>
    
  </body>
  
<!--<body>
    <x-layouts.nav/>

    <x-layouts.footer/>
</body>
</html>-->
