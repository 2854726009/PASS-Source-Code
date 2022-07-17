<?php
	//echo $_POST["name"].$_POST["sex"].$_POST["school"].$_POST["firstgroup"].$_POST["secondgroup"].$_POST["email"].$_POST["qq"].$_POST["wechat"].$_POST["tel"];
	$f = fopen("data/question.json", "w");
	$arr = Array();
	$arr["maker"] = "HJZ2022";
	$arr["time"] = "2022_7_16";
	$arr["ver"] = "0.0.1";
	$arr["data"]["count"] = 0;
		$json = json_encode($arr);
	echo $json;
	fwrite($f, $json);
?>