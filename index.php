<?php
$token="5198090374:AAEnkckFdmzIEn638JuasYozu0FqcV-pIHs";
$msg=$_GET['pm'];
$id=["1487568362","⁪1909928944","1386124691"];
for($i=0;$i<=count($id)-1;$i++){
$sndmsg=file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?parse_mode=HTML&chat_id=".$id[$i]."&text=".$msg);
}
?>
