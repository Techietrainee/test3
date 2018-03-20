 <?php
function test(){
	static $num = 50;
	$num++;
	echo $num;
}
test(); 
echo "<br>";
test();
echo "<br>";
test();
test();
?> 

