@extends('parent')

@section("title","homepage")

@section ('content')
<div class="navbar navbar-expand-lg navbar-dark py-0" style="background-color:#808080; color:white;">
<div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
     </ul>
    </div>
</div>
<div class="container-fluid">
    <img src="{{ asset('image.png') }}" class="w-100 mt-2" height="40%" alt="" />
</div>
<div class="container-fluid">
    <div class="row mt-2">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar" style="background-color:#dee2e6;">
        <div class="card mt-2">
         
          <div class="card-body">
            <p class="card-text">Paris Olympics 2024: Full list of India’s medal winners, and near misses</p>
          </div>
        </div>
        <div class="card mt-2">
          
          <div class="card-body">
            <p class="card-text">Paris Olympics 2024: Full list of India’s medal winners, and near misses</p>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 main-content ">
        <!-- Card 1 -->
        <div class="card mb-4">
          <div class="row">
            <div class="col-md-5">
              <img src="main1.png" alt="Medal Winners">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Paris Olympics 2024: Full list of India’s medal winners, and near misses</h5>
                <p class="card-text">Neeraj Chopra, Manu Bhaker, Sarabjot Singh, Swapnil Kusale, Aman Sehrawat, and the Indian hockey team contributed to the six medals, including a silver and five bronze, that India won in the Paris 2024 Olympics, ranking the country in the 71st place on the medals tall</p>
                <a href="#" class="btn btn-teal btn-sm" style="background-color:#004aad; color: white;">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="row">
            <div class="col-md-5">
              <img src="main1.png" alt="Medal Winners">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Paris Olympics 2024: Full list of India’s medal winners, and near misses</h5>
                <p class="card-text">Neeraj Chopra, Manu Bhaker, Sarabjot Singh, Swapnil Kusale, Aman Sehrawat, and the Indian hockey team contributed to the six medals, including a silver and five bronze, that India won in the Paris 2024 Olympics, ranking the country in the 71st place on the medals tall</p>
                <a href="#" class="btn btn-teal btn-sm" style="background-color:#004aad; color: white;">Read More</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection