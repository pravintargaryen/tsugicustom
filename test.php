<h1>PDO Error Test Page</h1>
<p>
<?php
/* class PDOXQuery {
    public $success;
    public $slow_query;
    public $ellapsed_time;
    public $errorCode;
    public $errorInfo;
    public $errorImplode;
    public $sqlQuery;
    public $sqlOriginalQuery;


 function execute() {
        $error_log= true;
        $start = microtime(true);
        $arr = false;
        $q = false;
        try {
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=mock', 
   'pingu', 'pingu');
    // See the "errors" folder for details...
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

            $sql = "INSERT INTO messag (email, msg) 
              VALUES (:email, :message)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':email' => $_POST['email'],':message' => $_POST['message']));
            $stmt = $pdo->query("SELECT email, msg FROM message");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ( $rows as $row ) {
            echo "<table border='1'>";    
            echo "<tr><td>";
            echo($row['email']);
            echo("</td><td>");
             echo($row['msg']);
            echo("</td></tr>\n");
            echo("</table>");
            }
        } catch(\Exception $e) {
            $success = FALSE;
            $message = $e->getMessage();
            $todo = array();
            $todo[] = $message;
            if ( $error_log=true ) error_log($message);
            $ellapsed_time = microtime(true)-$start;

            if ($ellapsed_time !== false){
            if ( $this->slow_query < 0 || ($this->slow_query > 0 && $ellapsed_time > $this->slow_query ) ) {
            $dbt = U::getCaller(2);
            $caller_uri = U::get($_SERVER,'REQUEST_URI');
            error_log("PDOX Slow Query:".$q->ellapsed_time.' '.$caller_uri.' '.$dbt.' '.$sql);
        }          
        }

            if ( !isset($this->errorCode))$errorCode = '42000';
            if ( !isset($this->errorInfo)) $errorInfo = Array('42000', '42000', $message);
            if ( !isset($this->errorImplode)) $errorImplode = implode(':',$errorInfo);
            if ( !isset($this->sqlQuery) ) {
            $sqlQuery = implode('; ', $todo);
        }
            if ( !isset($this->sqlOriginalQuery)) $sqlOriginalQuery = $sql;

        }    
    
        
   
    }

}


if ( isset($_POST['email']) && isset($_POST['message']) ) {
      $execute = new PDOXQuery();
      $execute->execute();
      echo ("<p style='color:green'>executed successfully</p>");
    
} */


class needle {

 public $success1;

 function __construct($q, $success) {   
    $success1 = $q->success; 


 }

 function mac() {
    $q = $this->prepare($query);
    $success = $q->execute();
 }
 
 
/* function give() {
    echo "Hello";
 }

  

function try() {  
$success = self::give();
if (! is_object($bash)) $bash = new needle();   
var_dump($success);
var_dump($bash);
}

function objtry() {
    global $bash;
$success = self::give();
if ($bash->failure) return $failure;     
}

function p() {
$str = "beginningMiddleEnd";
if (str_starts_with($str, "beg")) echo "printed\n";
if (str_starts_with($str, "Beg")) echo "not printed\n";
if (str_ends_with($str, "End")) echo "printed\n";
if (str_ends_with($str, "end")) echo "not printed\n";
}

function a($a) {
    if (strlen($a) > 0) {
        echo "Hi";
        return self::b($a);
    }

}

function b($a) {
    if (strlen($a) > 1);
    echo "World";
  
}

function c($a) {
    $a = self::a($a);
}
 */


}

$a = 'Hello';
$b = 'Hello';
$c = strcmp($a, $b);
echo $c;





?>
<html>
<head></head><body>


<!--<form method="post">
<p>Email:
<input type="text" name="email" size="20"></p>
<p>Message:</p>
<p><textarea rows="10" cols="40" id="inp08" name="message">
What's in your mind?...
</textarea></p>
<p><input type="submit" value="Send"/></p>
</form> -->

