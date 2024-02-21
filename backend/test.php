<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Get the text from the form
// if (isset($_POST['submit'])) {
//     $text = $_POST['text'];

//     $data = array('text' => $text);
// $data_string = json_encode($data);

// // Initialize cURL session
// $ch = curl_init('http://0.0.0.0:8000/sentiment/');

// // Set cURL options
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($data_string))
// );

// // Execute the cURL request
// $result = curl_exec($ch);

// // Close cURL session
// curl_close($ch);

// // Decode the JSON response
// $response = json_decode($result, true);

// // Get the sentiment score from the response
// $sentiment_score = $response['sentiment_score'];

// // Display the sentiment score
// echo "<h1>Result is : $sentiment_score</h1>";
// }

// // Prepare the data to be sent in the request

?>

<!-- Input for text -->

<form action="" method="post">
    <input type="text" name="text" placeholder="Enter text">
    <input type="submit" value="Submit" name="submit">
</form>
