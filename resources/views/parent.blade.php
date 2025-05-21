<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield("title") {{ env("APP_NAME") }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
   <style>
    .sidebar img {
      width: 100%;
      height: auto;
    }
    .sidebar .card {
      margin-bottom: 1rem;
    }
    .main-content img {
      width: 100%;
      height: auto;
    }
    
  </style>
</head>
<body>
     
   {{-- header --}}
    <div class="navbar navbar-expand-lg navbar-dark" style="background-color:#004aad;">
        <div class="container-fluid">
            <a href="" class="navbar-brand "><h2>{{ env("APP_NAME") }}</h2></a>

           {{-- search --}}
           <form action=""method="post" class="d-flex">
              <input type="text" size="80" placeholder="search here..." class="form-control">
              <input type="submit" class="btn btn-dark" style=" color: white;" value="Go">
           </form>

           {{-- links --}}
           <div class="navbar-nav">
               <a href="{{ route("homepage") }}" class="nav-item nav-link" style="color:aliceblue">Home</a>
               <a href="" class="nav-item nav-link" style="color:aliceblue">Login</a>
               <a href="" class="nav-item nav-link" style="color:aliceblue">Register</a>
           </div>
        </div>
    </div>
  
    @section('content')
    @show


   {{-- footer --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>