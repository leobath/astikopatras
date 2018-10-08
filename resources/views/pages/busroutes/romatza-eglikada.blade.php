@extends('layouts.app')

@section('content')

<div class="jumbotron margin-padding-10">
    <div class="row">
        <div class="col-md-2">
            <div class="text-weigth-bold">
              <div class="container"><a class="btn btn-md btn-primary font-weight-bold" href="/bus-routes" style="margin-top:32px; margin-left:-15px"><span class="fas fa-caret-left btn-primary"> <span style="font-family: sans-serif; opacity:0.8"> Πίσω στα δρομολόγια</span></span></a><span class="btn-block"> </span>
              </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
                <h5 class="font-weight-bold"> Δρομολόγιο: <span class="font-weight-bold">ΡΟΜΑΝΤΖΑ - ΕΓΛΥΚΑΔΑ - ΔΙΑΚΟΥ - ΡΩΜΑΝΟΥ</span></h5>
                <h5 class="font-weight-bold"> <span class="form-inline" style="margin-top: 7px; margin-bottom:-5px">            
                    <label for="single">Προορισμός:&nbsp
                      <select class="form-control form-control-md btn btn-md btn-primary font-weight-bold single-label" id="single">
                        <option class="font-weight-bold" value="0">Επιλέξτε προορισμό &#9662;<span>   
                            <option value="eglykada">ΕΓΛΥΚΑΔΑ</option>
                            <option value="diakou">ΔΙΑΚΟΥ</option>
                            <option value="elekistra">ΕΛΕΚΙΣΤΡΑ </option></span></option>
                      </select>
                    </label></span></h5>
        </div>
        
    </div>
    <hr>
</div>




<div class="jumbotron margin-padding-10">
    <div class="row" style="margin-top:-30px">
        <div class="col-md-6 margin-form-fix">
            <div class="jumbotron">
                <p class="h6" id="timetable"></p>
            </div>
        </div>
    <div class="col-md-6 margin-form-fix">        
        <div class="map-container embed-responsive embed-responsive-4by3 map-background">
            <iframe class="embed-responsive-item" id="iframe" src="" width="auto" height="auto" frameborder="0" style="border:0; margin-top:-46px" allowfullscreen="allowfullscreen">
            </iframe>
        </div>
    </div>
</div>
</div>
    

@endsection