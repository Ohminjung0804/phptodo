<?php
include("./header.php");

$multitype = array(20, 3.14, 'A', "Bob");
for($i = 0; $i < count($multitype); $i++)
	print($multitype[$i]."<br>");

print_r($multitype);


?>
<pre class="bg-danger text-white">
<?php print_r($multitype)?>
</pre>
<pre class="bg-warning text-white">
<?php print_r($_GET)?>
</pre>
<?php
include("./footer.php");
?>