<?php
$title = "연관배열 : Associated Array";
include("./header.php");
$freshman = array(
	"David" => "Computer",
	"Alice" => "Math",
	"Elsa" => "physics",
	"Bob" => "Music",
	"Chris" => array("Electronics", "Design")
);
print($freshman['David']);
$freshman['BOb'] = "Movie";
$freshman["IU"] = "Singer"; //있으면 수정 없으면 추가
unset($freshman["Elsa"]);//삭제

print("<pre class=\"bg-warning text-white\">");
print_r($freshman);
print("</pre>");
include("./footer.php");
?>