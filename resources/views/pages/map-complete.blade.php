@extends('layouts.app')

@section('content')

<div class="jumbotron margin-padding-10">
        <div class="row">
          <div class="col-xl-12">
            <h3 class="font-weight-bold text-center" style="margin-top:25px">Όλα τα δρομολόγια <span class="fas fa-route"></span></h3>
          </div>
        </div>
        <hr/>
      </div>
      <div class="jumbotron jumbo-set-margin">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="map-container embed-responsive embed-responsive-4by3" style="margin-top:-30px">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1LP-JieqtwB0htg5y8lecc580J0SqwzkO" width="auto" height="auto" frameborder="0" style="border:0; margin-top:-46px" allowfullscreen="allowfullscreen"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection