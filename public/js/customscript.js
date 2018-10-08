/*jshint multistr: true */

//google maps avoid accidental scroll
$('.map-container').click(function(){ 
    $(this).find('iframe').addClass('clicked');
})
    .mouseleave(function(){ $(this).find('iframe').removeClass('clicked');});


// Timetables departure to different destinations



var eglykada = " \
  <p><b><u>ΚΑΘΗΜΕΡΙΝΕΣ</b></u>:<br> \
&#x25CF Από ΡΟΜΑΝΤΖΑ για ΕΓΛΥΚΑΔΑ: 06.20 – 06.50 – 07.00<br> \
&#x25CF Από ΕΓΛΥΚΑΔΑ για ΡΟΜΑΝΤΖΑ: 06.20 – 06.40 – 07.00<br> \
&#x25CF Από 07.00 έως 21.00 ανά 10 λεπτά<br> \
&#x25CF Από 21.00 έως 22.40 ανά 20 λεπτά<br> \
<span style='color:red;'>Σημ. ΔΕΥΤΕΡΑ & ΤΕΤΑΡΤΗ ΑΠΟΓΕΥΜΑ: από 15.00 έως 21.00 ανά 12 λεπτά<br></span> \
<hr> \
<b><u>ΣΑΒΒΑΤΟ</b></u>:<br> \
&#x25CF Από ΡΟΜΑΝΤΖΑ για ΕΓΛΥΚΑΔΑ: 06.30 – 06.50 – 07.05<br> \
&#x25CF Από ΕΓΛΥΚΑΔΑ για ΡΟΜΑΝΤΖΑ: 06.30 – 06.50 – 07.00<br> \
&#x25CF Από 07.00 έως 15.00 ανά 10 λεπτά<br> \
&#x25CF Από 15.00 έως 20.30 ανά 15 λεπτά<br> \
&#x25CF Από 20.30 έως 22.40 ανά 20 λεπτά<br> \
<hr> \
<b><u>ΚΥΡΙΑΚΗ & ΑΡΓΙΕΣ</b></u>:<br> \
&#x25CF Από 07.00 έως 15.00 ανά 30 λεπτά<br> \
&#x25CF Από 15.00 έως 22.40 ανά 20 λεπτά<br> \
  </p>";

var diakou = "<p><b><u>ΚΑΘΗΜΕΡΙΝΕΣ</u></b>:<br>  \
Από ΡΟΜΑΝΤΖΑ: 06.30 – 07.10 (ΛΥΚΟΧΩΡΟ) - 08.00 – 09.00 – 11.00 – 13.00 – 14.00 (ΛΥΚΟΧΩΡΟ) \
– 16.00 – 18.00 – 20.00 – 21.00<br> \
Από ΔΙΑΚΟΥ: 07.05 – 07.50 - 08.40 – 09.40 – 11.40 – 13.40 – 14.40 – 16.40 – 18.40 – 20.40 – 21.40<br> \
<hr> \
<b><u>ΣΑΒΒΑΤΟ</u></b>:<br> \
Από ΡΟΜΑΝΤΖΑ: 07.05 – 09.00 – 11.00 – 14.00 – 16.00 – 18.00 – 20.00<br> \
Από ΔΙΑΚΟΥ: 07.45 – 09.40 – 11.40 – 14.40 – 16.40 – 18.40 – 20.40<br> \
<hr> \
<b><u>ΚΥΡΙΑΚΗ & ΑΡΓΙΕΣ</u></b>:<br> \
Από ΡΟΜΑΝΤΖΑ: 07.40 – 08.40 – 10.00 – 14.00 - 16.00 – 18.00 – 20.00<br> \
Από ΔΙΑΚΟΥ: 08.20 – 09.20 – 10.40 – 14.40 - 16.40 – 18.40 – 20.40 <br>";
      
var elekistra = "<p> \
    <b><u>ΚΑΘΗΜΕΡΙΝΕΣ</u></b>:<br> \
    από ΕΛΕΚΙΣΤΡΑ ώρα 6.55 <br> \
    από ΡΩΜΑΝΟΥ ώρα 7.05 <br> \
    από ΡΟΜΑΝΤΖΑ ώρα 14.30<br> \
    <hr> \
    <b><u>ΚΥΡΙΑΚΗ & ΑΡΓΙΕΣ</u></b>:<br> \
    Δεν εκτελούνται δρομολόγια  \
  </p>";


function displayVals() {
  
      
  var singleValues = $( "#single" ).val();
  
if(singleValues == 0){
  $( "#timetable" ).html('');  
  $( '#iframe' ).attr( 'src', function ( i, val ) { return ''; });
  $(".map-background").css("opacity", 0.1);
  $('.map-background').css("background-image", "url(\"/fonts/svgs/solid/map-marked-alt.svg\")");
  $("#route-destination").html("");

}
  else if(singleValues === 'eglykada') {
    
    $( "#timetable" ).html(eglykada);
  
    $( '#iframe' ).attr( 'src', function ( i, val ) { return 'https://www.google.com/maps/d/embed?mid=1OrurTcy-Km7LDwFa8Bc84tmKClmnNtgQ&z=13'; });
    $(".map-background").css("background-image", "none");
    $(".map-background").css("opacity", 1);
    $("#route-destination").html("<b>ΕΓΛΥΚΑΔΑ</b>");
   
  }
  else if (singleValues === 'diakou') {
  
    $( "#timetable" ).html(diakou);    
    $( '#iframe' ).attr( 'src', function ( i, val ) { return 'https://www.google.com/maps/d/embed?mid=1fWtvEiLi6oF5eRnvveS_mQziN8cQvGtA&z=13'; });
    $(".map-background").css("background-image", "none");
    $(".map-background").css("opacity", 1);
    $("#route-destination").html("<b>ΔΙΑΚΟΥ</b>");

  }
  else if (singleValues === 'elekistra') {
    $("#timetable-title").html("<h5>Ώρες Αναχώρησης</h5>");
    $( "#timetable" ).html(elekistra);    
    $( '#iframe' ).attr( 'src', function ( i, val ) { return 'https://www.google.com/maps/d/embed?mid=1paqrJeSUXcyIKrB6h54qjvQZ-zWbFX3c'; });
    $(".map-background").css("background-image", "none");
    $(".map-background").css("opacity", 1);
    $("#route-destination").html("<b>ΕΛΕΚΙΣΤΡΑ</b>");

  }
  
  
}
$( "select" ).change( displayVals );
displayVals();
