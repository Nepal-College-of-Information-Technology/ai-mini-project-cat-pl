<?php

    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }


    error_reporting(E_ALL);
ini_set('display_errors', 1);
$sentiment_score = 0;
$sentiment = "Nothing";


// Get the text from the form
if (isset($_POST['submit'])) {
    $text = $_POST['text'];


  $data = array('text' => $text);
  $data_string = json_encode($data);

  // Initialize cURL session
  $ch = curl_init('http://0.0.0.0:8000/sentiment/');

  // Set cURL options
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_string))
  );

  // Execute the cURL request
  $result = curl_exec($ch);

  // Close cURL session
  curl_close($ch);

  // Decode the JSON response
  $response = json_decode($result, true);

  // Get the sentiment score from the response
  $sentiment_score = $response['sentiment_score'];



  if($sentiment_score > 0.1){
      $sentiment = "Positive";
  }else if($sentiment_score < -0.1){
      $sentiment = "Negative";
  }else{
      $sentiment = "Neutral";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script
          src="https://kit.fontawesome.com/919bf9fb4d.js"
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="style.css" />
      </head>
      <body>
        <div class="navbar">
          <a href="#"> Sentiment Analysis </a>
        </div>

        <div class="body">
          <div class="text">
            <form action="" method="post">
              <textarea
                name="text"
                id="text"
                cols="30"
                rows="10"
                placeholder="Enter your text here"
                class="body-d"
              ></textarea>
              <input type="submit" name="submit" value="Submit" class="submit">
            </form>
          </div>

          <div class="result">
            <h1>Result</h1>
            <div class="result-d">
              <img src="images/<?php echo $sentiment;?>.jpg" alt="image" />
              <p>Sentiment: <span id="sentiment">
                <?php echo $sentiment; ?>
              </span></p>
              <p>Sentiment Score: <span id="sentiment-score">
                <?php echo $sentiment_score; ?>
              </span></p>
            </div>
          </div>
        </div>

        <script src="script.js"></script>
      </body>
    </html>
  </body>
</html>
