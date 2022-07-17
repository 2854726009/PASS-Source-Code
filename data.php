<?php
	//echo $_POST["name"].$_POST["sex"].$_POST["school"].$_POST["firstgroup"].$_POST["secondgroup"].$_POST["email"].$_POST["qq"].$_POST["wechat"].$_POST["tel"];
	// $f = fopen("data/apply.json", "w");
	// $arr = Array();
	// $arr["maker"] = "HJZ2022";
	// $arr["time"] = "2022_7_16";
	// $arr["ver"] = "0.0.1";
	// $arr["data"]["count"] = 0;
	// 	$json = json_encode($arr);
	// echo $json;
	// fwrite($f, $json);
	switch($_POST["type"]){
		case "wj":
			$data = file_get_contents("data/apply.json");
			$json = json_decode($data, true);
			$json["data"]["count"]++;
			$json["data"]["list"][$json["data"]["count"]-1]["name"] = $_POST["name"];
			$json["data"]["list"][$json["data"]["count"]-1]["sex"] = $_POST["sex"];
			$json["data"]["list"][$json["data"]["count"]-1]["school"] = $_POST["school"];
			$json["data"]["list"][$json["data"]["count"]-1]["firstgroup"] = $_POST["firstgroup"];
			$json["data"]["list"][$json["data"]["count"]-1]["secondgroup"] = $_POST["secondgroup"];
			$json["data"]["list"][$json["data"]["count"]-1]["email"] = $_POST["email"];
			$json["data"]["list"][$json["data"]["count"]-1]["qq"] = $_POST["qq"];
			$json["data"]["list"][$json["data"]["count"]-1]["wechat"] = $_POST["wechat"];
			$json["data"]["list"][$json["data"]["count"]-1]["tel"] = $_POST["tel"];
			$data = json_encode($json);
			echo "200";
			$f = fopen("data/apply.json", "w");
			fwrite($f, $data);
			fclose($f);
			break;	
		
		default: 
			echo "400";
			break; 
	}
?>
