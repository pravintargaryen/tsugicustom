<?php 
if (isset($_POST['title'])) {
    jsonadd();    
}

/*adding Custom Data directly to JSON File*/
function jsonadd() {
  $jsondata = file_get_contents('lessons2.json');
  $decodedata = json_decode($jsondata, true);
  $customdata = array(
    "title"=> $_POST['title'],
  );
  $decodedata [] = $customdata;
  $final_data = json_encode($decodedata);
  file_put_contents('lessons2.json', $final_data);
}

/* Reading JSON */
$data = file_get_contents('lessons2.json');
$output = json_decode($data);
echo("<h1 style='color:green'>Tsugi Custom V2</h1>");
echo("<img id='add' onclick='addContent()' style='cursor:pointer' height='25px' src='http://www.clker.com/cliparts/Z/r/I/W/D/j/add-button-png-md.png' alt='add'>");
echo("<div id='mydiv'></div>");
echo("<div id='customcontent'></div>");
foreach($output as $item) {

    echo("<body style='background-color:#fff; font-family:Courier, monospace;'>");
    echo ("<p style='color:green'>$item->title</p>");
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


// Make sure JSON requests are not cached
$(document).ready(function() {
  $.ajaxSetup({ cache: false });
  addLesson();
});
</script>