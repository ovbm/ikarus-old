<div id="past">
</div>

<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
}

if(mm<10) {
    mm='0'+mm
}

today = yyyy+'-'+mm+'-'+dd;

$.getJSON("https://rest.bandsintown.com/artists/Ikarus/events?app_id=mockingbird&date=past", function(result) {

    $.each(result, function() {
    // an array of month names
    var monthNames = [ "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December" ];

    // split out the date string
    var dateItem = this.datetime.split('-');

    // grab the first two characters of the last part of the split out date string
    var day = dateItem[2].substr(0,2);

    // create a date object
    var formattedDate = new Date(dateItem[0], dateItem[1] - 1, day);

    // set the date
    var dd = formattedDate.getDate();

    // set the month and reference the month name from the monthNames array
    var mm = monthNames[formattedDate.getMonth()];

    var yyyy = formattedDate.getFullYear();

    var output = "<div class='show'><p>" + dd + " " + mm + " " + yyyy + " " + this.venue.name + " " + this.venue.city + ", " + this.venue.country + "</p></div>";

    $('#past').append(output);

  });
    $.fn.reverseChildren = function() {
        return this.each(function(){
            var $this = $(this);
            $this.children().each(function(){
                $this.prepend(this);
            });
        });
    };
    $('#past').reverseChildren();
});


</script>
