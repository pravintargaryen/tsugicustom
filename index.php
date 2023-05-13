<?php 
/* adding Custom Data */
session_start();
if ( isset($_POST['title']) ) {
  if ( !isset ($_SESSION['lessons']) ) $_SESSION['lessons'] = Array();
  $_SESSION['lessons'] [] = array($_POST['title']);
  header("Location: index.php");
  return;
}

/* Reading JSON */
$data = file_get_contents('lessons2.json');
$output = json_decode($data);
echo("<img id='add' onclick='addContent()' style='cursor:pointer' height='25px' src='http://www.clker.com/cliparts/Z/r/I/W/D/j/add-button-png-md.png' alt='add'>");
echo("<div id='mydiv'></div>");
echo("<div id='customcontent'></div>");
foreach($output->modules as $item) {

    $title = $item->title;
    echo("<body style='background-color:#000'>");
    echo ("<p style='color:blue'>$title</p>");
    echo("</body>");

}

?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script type="text/javascript">
let counter = 0
    function addContent() {
      counter++
      if (counter % 2 !== 0) {
        document.getElementById("mydiv").innerHTML = '<div id="mydiv"><form method="post" action="index.php"><input id="message" type="text" name="title" size="40"/> <input id="chat" type="submit" value="Add"/></form></div>'
      } else {

        document.getElementById("mydiv").innerHTML = '<div id="mydiv"></div>'

      }
    }

function addLesson() {
  window.console && console.log('Requesting JSON'); 
  $.getJSON('customlist.php', function(rowz){
      window.console && console.log('JSON Added'); 
      window.console && console.log(rowz);
      $('#customcontent').empty();
      for (var i = 0; i < rowz.length; i++) {
        arow = rowz[i];
        $('#customcontent').append('<p style="color:red">'+arow[0] +'<br/>'+"</p>\n");
      }
      setTimeout('addLesson()', 4000);
  });
}

// Make sure JSON requests are not cached
$(document).ready(function() {
  $.ajaxSetup({ cache: false });
  addLesson();
});
</script>