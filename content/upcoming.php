
<div id="upcoming"></div>

<script>
$.getJSON("https://api.bandsintown.com/artists/Ikarus/events.json?callback=?&app_id=mockingbird&date=upcoming", function(result) {

    $.each(result, function() {
    // an array of month names
    var monthNames = [ "january", "february", "march", "april", "May", "June",
  "july", "august", "september", "october", "november", "december" ];

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

    var output = "<div class='show'><p>" + dd + " " + mm + " " + " <a target='_blank' href='" + this.ticket_url +"'>" + this.venue.name + '</a> ' + " " + this.venue.city + ", " + this.venue.country + "</p></div>";
    $('#upcoming').append(output);

  });
}); 

</script>

<p style ="margin-top:1em;">more dates to be announced</p>

