<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin @yield("title") {{ env("APP_NAME") }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body style="background-color:antiquewhite;">
     
  
    <div class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand"><h2>{{ env("APP_NAME") }}</h2></a>

          
         
           <div class="navbar-nav">
              
               <a href="" class="btn btn-dark">Logout</a>
           </div>
        </div>
    </div>
  
  
  
    @section('content')
    @show



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>