@extends('layouts.app')

@section('content')
<main role="main">
    <div class="jumbotron jumbo-set-margin" id="bus-background">
      <div class="col-xl-12">
          <div class="container" id="title-container">
        <h1 class="display-4" id="welcome-title">  {{config('app.name')}}
          <p class="lead" id="welcome-paragraph">Καλώς ήρθατε στην επίσημη ιστοσελίδα των Αστικών Συγκοινωνιών της πόλης των Πατρών. Εδώ θα βρείτε όλες τις απαραίτητες πληροφορίες για την μετακίνηση σας. <div style="text-align: right; font-size: 22px;">Ετοιμαστείτε για... Επιβίβαση!</div></p>
        </h1>
    </div>
      </div>
    </div>
    <div class="jumbotron bg-primary row-set-margin row-no-padding">
      <div class="row">
        <div class="col-xl-6 padding-20">
            <a class="btn btn-primary btn-block nopadding" href="bus-routes">
                <h2>Δρομολόγια&nbsp<span class="fas fa-route" style="font-size: 40px">&nbsp </span></h2>
            </a>
        </div>
        <div class="col-xl-6 padding-20">
            <a class="btn btn-primary btn-block nopadding" href="#">
                <h2>Εισιτήρια-Κάρτες&nbsp<span class="fas fa-ticket-alt" style="font-size: 40px">&nbsp</span></h2>
            </a>
        </div>
      </div>
    </div>
    <div class="jumbotron margin-padding-0">
        <div class="row row-set-margin">
            <div class="col-md-4">
                <div class="jumbotron">
                    <h2 class="text-center">Ανακοινώσεις &nbsp<span class="fas fa-bullhorn" style="font-size: 40px"></span></h2>
                        <hr/>
                    <p><a href="#">(7/9/2018) Το ΑΣΤΙΚΟ ΚΤΕΛ ΠΑΤΡΩΝ Α.Ε. επανναπροκυρήσσει μειοδοτικό διαγωνισμό για την προμήθεια χειμερινών στολών προσωπικού έτους 2018-2019.&nbsp;</a><span class="badge badge-danger blink_me">NEO</span></p>
                    <p><a href="#">(7/9/2018) Το ΑΣΤΙΚΟ ΚΤΕΛ ΠΑΤΡΩΝ Α.Ε. ανακοινώνει την έναρξη χειμερινών δρομολογίων 2018-2019 την Τρίτη 11 Σεπτεμβρίου 2018.&nbsp;</a><span class="badge badge-danger">NEO</span></p>
                    <p><a href="#">&#9656; Μια νέα σημαντική καινοτομική εφαρμογή του Πληροφοριακού Συστήματος Χρηστών Αστικών Συγκοινωνιών που αναπτύσσεται στην Πάτρα από την ΑΔΕΠ σε συνεργασία με το Αστικό ΚΤΕΛ Πάτρας στο πλαίσιο του έργου SUMMIT - Sustainable Urban Mobility Management Information Technologies, η οποία δίνει τη δυνατότητα αναζήτησης πληροφοριών σε πραγματικό χρόνο για τις διαδρομές και τη λειτουργία των αστικών λεωφορείων, είναι πλέον διαθέσιμη για τους χρήστες φορητών συσκευών (smartphones και tablets) με το όνομα “ ΠΑΤΡΑ Bus”.&nbsp</a><span class="badge badge-info"> NEO</span></p>
                    <p><a href="contact">Η νέα διεύθυνση των γραφείων του Αστικού ΚΤΕΛ Πατρών είναι Αγίου Ανδρέου 9.&nbsp</a><span class="blink_me badge badge-warning">ΣΗΜΑΝΤΙΚΟ!</span></p>
                    <p class="text-right"><a href="/announcements" role="button">Όλες οι Ανακοινώσεις &raquo;</a></p>
                </div>
            </div>
        <div class="col-md-8">
            <div class="jumbotron">
                <h2 class="text-center">Σημεία Ενδιαφέροντος <span class="fas fa- fa-map-marker-alt" style="font-size: 40px">&nbsp</span></h2>
                    <hr/>
        
                    <div class="map-container embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="iframe" src="https://www.google.com/maps/d/embed?mid=1nEK19eln1YlIWxONEcW4jsQY-9q5Bq7M&amp;z=12" width="auto" height="auto" frameborder="0" style="border:0; margin-top:-47px" allowfullscreen="allowfullscreen"></iframe>
                    </div>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-primary row-set-margin row-no-padding">
        <div class="row">
            <div class="col-xl-6 padding-20"><a class="btn btn-primary btn-block nopadding" href="map-complete">
                <h2>Χάρτης&nbsp<span class="fas fa-map" style="font-size: 40px">&nbsp</span></h2></a>
            </div>
            <div class="col-xl-6 padding-20"><a class="btn btn-primary btn-block nopadding" href="#">
                <h2>Διαφήμιση&nbsp<span class="fas fa- fa-ad" style="font-size: 40px">&nbsp</span></h2></a>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-primary row-set-margin row-no-padding">
        <div class="row">
            <div class="col-xl-6 padding-20"><a class="btn btn-primary btn-block nopadding" href="about">
                <h2>Η Εταιρία μας&nbsp<span class="fas fa-building" style="font-size: 40px">&nbsp</span></h2></a></div>
            <div class="col-xl-6 padding-20"><a class="btn btn-primary btn-block nopadding" href="contact">
                <h2>Επικοινωνία&nbsp <span class="fas fa-phone-square" style="font-size: 40px">&nbsp</span></h2></a></div>
            </div>
        </div>
    </div>    
</main>
@endsection