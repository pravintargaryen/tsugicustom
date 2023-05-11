<h1>Pravin's PHP Page</h1>
<p>
<?php

class tn {
    
    public $PD;

    public static function plus($k, $p) {
      print_r($k + $p);
   }

    public function add($k, $p) {
        
        //$this->plus = $k;
        //$this->plus = $p;
        //$this->plus($k,$p);
        //$this->PD = self :: plus($k, $p);
    }
}


//$ap = new tn();
//$ap-> plus(5,3);

class t {
    protected $success;
    private $errorCode;
    //public $errorInfo;
    //public $errorImplode;
    //public $sqlQuery;
    //public $sqlOriginalQuery;
    //public $start;
    

    function qcheck() {
    $success = false;    
    $this->success=$success;
    $this->start;
    $this->errorCode;
    $this->errorInfo;
  
    }

    function errorcode() {  
    $this->errorCode='42000';
    }

    function sqlquery(){
        $this->sqlquery = 4000;    
    }

    function undynamic() {
      $q = false;  
      if (! is_object($q)) $this->qcheck(); 
    }

    function easy() {
       $q = false;
       $q = t::sqlquery();  
    }

    function qscan($q) {

        if ($q = 'success') {
            $success = false;    
            $this->success=$success;
        }

        elseif ($q = 'errorcode') {
            $this->errorCode='42000';
        }

        if ($q != 'success' || $q != 'errorcode') {
            echo "success";
        }

    }


}

$q = new \stdClass();
$q->success=null;
$q->ellapsed_time=null;
$q->errorCode=null;
$q->errorInfo=null;
$q->errorImplode=null;
$q->sqlQuery=null;
$q->sqlOriginalQuery=null;

print_r($q);

?>
</p>
