@extends('layouts.app')

@section('content')
<main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action-->
        <div class="jumbotron jumbo-set-margin">
          <div class="container">
            <h3 class="display-5">Η Εταιρία μας</h3>          
            <p class="display-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, sem vitae sodales eleifend, tellus dolor iaculis est, condimentum suscipit nisi dui nec quam. Cras quis sollicitudin orci. Integer vestibulum velit scelerisque neque pharetra, vitae semper turpis suscipit. Proin  | consectetur elit enim, at feugiat quam hendrerit vitae. Nulla tempus consectetur velit in imperdiet. Donec vel molestie ex. Quisque malesuada, est eu sollicitudin placerat, nisi orci tincidunt diam, vitae consequat turpis ex vel eros. Integer lorem lorem, tristique vel tellus a,       | maximus auctor erat. In eu diam condimentum, pulvinar mi vel, rhoncus lectus.</p>
          </div>
          <div class="container">
            <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active"><img class="d-block w-100" src="images/bus21-min.jpg" alt="First slide"/></div>
                <div class="carousel-item"><img class="d-block w-100" src="images/bus21-min.jpg" alt="Second slide"/></div>
                <div class="carousel-item"><img class="d-block w-100" src="images/bus21-min.jpg" alt="Third slide"/></div>
              </div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
            </div><br/>
            <p class="display-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, sem vitae sodales eleifend, tellus dolor iaculis est, condimentum suscipit nisi dui nec quam. Cras quis sollicitudin orci. Integer vestibulum velit scelerisque neque pharetra, vitae semper turpis suscipit. Proin  | |consectetur elit enim, at feugiat quam hendrerit vitae. Nulla tempus consectetur velit in imperdiet. Donec vel molestie ex. Quisque malesuada, est eu sollicitudin placerat, nisi orci tincidunt diam, vitae consequat turpis ex vel eros. Integer lorem lorem, tristique vel tellus a,       | ||maximus auctor erat. In eu diam condimentum, pulvinar mi vel, rhoncus lectus.</p>
          </div>
        </div>
      </main>
@endsection

