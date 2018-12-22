<?php
include "../library/twitteroauth.php";
include("config.php");

$consumer_key = "dJI6G58NDlI9baImGaki7pHKN";
$consumer_secret = "ZAmpXKAQGCbyzZCZarZvbBD3HOOOwtLPM32X3s38hIWfedJxRQ";
$acces_token = "1051736096617316353-vF3TDMq2s95ogKuXtKrFrVcY18bobF";
$acces_token_screet = "VOihMJTUi94Dk8QT87AafWTKmkX9rL6nXiF7uuyv3ddIT";

// @$keyword = $_POST['keyword'];

$twitter = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=stikom&result_type=recent&count=100');
echo "<pre>";
echo json_encode($tweets);
//print_r($tweets);
echo "</pre>";
// $result = array();
$status = $tweets->statuses;


foreach ($status as $key => $tweet) {
  // echo $tweet->created_at;
  //array_push($result, array('nama'=>$tweet->user->screen_name,'status'=>$tweet->text,'url_profil'=>$tweet->user->profile_image_url,'tanggal'=>$tweet->created_at));
  $screen_name = $tweet->user->screen_name;
  $name = $tweet->user->name;
  $status = $tweet->text;
  $gambar = $tweet->user->profile_image_url;
  $tanggal = $tweet->created_at;
  $lokasi = $tweet->user->location;

  
  // validasi data kembar 
  $cek_data = mysqli_num_rows(mysqli_query($db, "SELECT * FROM twitter_timeline WHERE nama='$name' OR tweet='$status'"));
  if ($cek_data > 0) {

  } else {
    $sql = "INSERT INTO twitter_timeline(nama,screen_name,tweet,gambar,tanggal,lokasi) VALUE ('$name','$screen_name','$status','$gambar','$tanggal','$lokasi')";
    $query = mysqli_query($db, $sql);
  }


}
  //echo json_encode(array("result"=>$result));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>