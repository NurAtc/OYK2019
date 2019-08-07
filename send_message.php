<?php

// set the content-type
header("Content-type: application/json; charset=utf-8");

$error = false;

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// check if all inputs are not empty
if(empty($name) || empty($email) || empty($subject) || empty($message))
  $error = true;

// we suppose that the message has been sent without errors
if($error==false){
  $data["response"] = "success";
  $data["content"] = "Thank you! Your message has been sent successfully.";
}
else {
  $data["response"] = "error";
  $data["content"] = "Your message has not been sent. Please complete all required fields.";
}

echo json_encode($data); // will encode the data and echo the JSON array




?>
