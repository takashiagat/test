<html><body>
<?php
    $json = file_get_contents("php://input");
    $rawdata = json_decode($json,true);
    
    file_put_contents("log.txt", serialize($json),FILE_APPEND);
    file_put_contents("log.txt", "\n",FILE_APPEND);
    file_put_contents("log.json", $json,FILE_APPEND);
    file_put_contents("log.json", ",",FILE_APPEND);
    $data = array($place,$rawdata["datetime"]);
    array_push($data,$rawdata["payload"]["channels"][0]["value"]);
    array_push($data,$rawdata["payload"]["channels"][1]["value"]);
    array_push($data,$rawdata["payload"]["channels"][2]["value"]);
    array_push($data,$rawdata["payload"]["channels"][3]["value"]);
    array_push($data,$rawdata["payload"]["channels"][4]["value"]);
    array_push($data,$rawdata["payload"]["channels"][5]["value"]);
    array_push($data,$rawdata["payload"]["channels"][6]["value"]);
    array_push($data,$rawdata["payload"]["channels"][7]["value"]);
    file_put_contents("data.csv", implode(",",$data) ,FILE_APPEND);
    file_put_contents("data.csv", "\n" ,FILE_APPEND);
?>
</body>
</html>