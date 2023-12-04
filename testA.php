<?php class A {
	private $bar;
	private $ga;
	/*public function __construct ($bar) {
		$this->bar = $bar;
	}*/
	public function __construct ($bar,$ga) {
		$this->bar = $bar;
		$this->ga = $ga;
	}
	public function myPrint () {
		echo $this->bar;
}

}

$myFirstObject = new A('test','exam'); 
$myFirstObject->myPrint(); // prints 'test'
// this will not work:


//echo $myFirstObject->bar;
?>