<?php
//set post fields
$post = [
    'text' => $_GET['txt'],
    'id' => '16467639378059',
    'gender'   => 1,
];
$ch = curl_init('https://harfeto.timefriend.net/harfeto/sendMsg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
$response = curl_exec($ch);
// close the connection, release resources used
curl_close($ch);
// do anything you want with your response
print_r($response);
?>
