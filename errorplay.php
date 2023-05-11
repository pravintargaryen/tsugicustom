<h1>PDO Error Play Page</h1>
<?php 

/*class play {
	function pic($a) {
		var_dump($this->a = $a);
		var_dump($a = $this->a);

	}

	function camera() {
		self::pic('hi');
	}
}

class train {

	public $success1;

	function test1($pdo) {
		$arr = array(':email' => $_POST['email'],':message' => $_POST['message']);
		$this->pdo = $pdo;
		$query = "INSERT INTO message (email, msg) VALUES (:email, :message)";
		$q = $pdo->prepare($query);
		$success = $q->execute($arr);
		$pdo->success1 = $success;
		if ( ! $success ) echo "broke";
	}

}

class bus {
	public $success1;

	function test($pdo, $q) {
//		$this->pdo = $pdo;
//		$this->q = $q;
		$arr = array(':email' => $_POST['email'],':message' => $_POST['message']);
		$success = $q->execute($arr);
		$q->success1 = $success;
		if ( ! $success ) echo "broke";
	} 

	function check() {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mock', 
   'pingu', 'pingu');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "INSERT INTO message (email, msg) VALUES (:email, :message)";
	$q = $pdo->prepare($query);
		$pdox = new bus();
		$pdox->test($pdo, $q);
	}



class butterfly {
	public $success;

	function catterpillar() {
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mock', 
   'pingu', 'pingu');
		$query = "INSERT INTO message (email, msg) VALUES ('pravinmd@gmail.com', 'Hello')";
		$q = $pdo->prepare($query);
		$success = $q->execute();
		$hashpdo = hash('md5', $query);
		echo $hashpdo;
	}
	}

session_start(['cookie_lifetime' => 86400,]);

if ( isset($_POST['email']) && isset($_POST['message']) ) {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mock','pingu', 'pingu');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "INSERT INTO message (email, msg) VALUES (:email, :message)";
	$stmt = $pdo->prepare($query);
	$stmt->execute(array(
		':email' => $_POST['email'],
		':message' => $_POST['message'],
	));
    
} 
*/
 
?>
<html>
<form method="post" action="https://formspree.io/f/mqkodjaj">
<p>Email:
<input type="email" name="email" size="20"></p>
<p>Message:</p>
<p><textarea rows="10" cols="40" id="inp08" name="message">
</textarea></p>
<p><input type="submit" value="Send"/></p>
</form> 
</html> 