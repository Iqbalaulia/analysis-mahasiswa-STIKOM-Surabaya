<?php 
include("views/config.php");
// Data Timeline
// Twitter

$angkatan14 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet14 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom14%'");
$angkatan15 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet15 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom15%'");
$angkatan16 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet16 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom16%'");
$angkatan17 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet17 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom17%'");
$angkatan18 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet18 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom18%'");

$angkatanAll = mysqli_query($db, "SELECT COUNT(tweet) AS tweetAll FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom%'");

$angkatanTwitter = mysqli_query($db, "SELECT COUNT(tweet) AS tweetAll FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom%'");


// Facebook

$angkatan14FB = mysqli_query($db, "SELECT COUNT(message) AS pesan14 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom14%'");
$angkatan15FB = mysqli_query($db, "SELECT COUNT(message) AS pesan15 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom15%'");
$angkatan16FB = mysqli_query($db, "SELECT COUNT(message) AS pesan16 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom16%'");
$angkatan17FB = mysqli_query($db, "SELECT COUNT(message) AS pesan17 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom17%'");
$angkatan18FB = mysqli_query($db, "SELECT COUNT(message) AS pesan18 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom18%'");
$angkatanAllFB = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");

$angkatanFacebook = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");


// Twitter Crawling
// Twitter

$angkatan14TC = mysqli_query($db, "SELECT COUNT(tweet) AS tweet14 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom14%'");
$angkatan15TC = mysqli_query($db, "SELECT COUNT(tweet) AS tweet15 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom15%'");
$angkatan16TC = mysqli_query($db, "SELECT COUNT(tweet) AS tweet16 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom16%'");
$angkatan17TC = mysqli_query($db, "SELECT COUNT(tweet) AS tweet17 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom17%'");
$angkatan18TC = mysqli_query($db, "SELECT COUNT(tweet) AS tweet18 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom18%'");

$angkatanAll = mysqli_query($db, "SELECT COUNT(tweet) AS tweetAll FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom%'");


// Twitter

$angkatan14AN = mysqli_query($db, "SELECT COUNT(tweet) as tweet14AN FROM `twitter_timeline` WHERE tweet LIKE '%jelek%'");
$angkatan15AN = mysqli_query($db, "SELECT COUNT(tweet) AS tweet15AN FROM `twitter_timeline` WHERE `tweet`LIKE '%sebel%'");
$angkatan16AN = mysqli_query($db, "SELECT COUNT(tweet) AS tweet16AN FROM `twitter_timeline` WHERE `tweet`LIKE '%kurang%'");
$angkatan17AN = mysqli_query($db, "SELECT COUNT(tweet) AS tweet17AN FROM `twitter_timeline` WHERE `tweet`LIKE '%kotor%'");


// Facebook Crawling
// Facebook

$angkatan14FC = mysqli_query($db, "SELECT COUNT(message) AS pesan14 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom14%'");
$angkatan15FC = mysqli_query($db, "SELECT COUNT(message) AS pesan15 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom15%'");
$angkatan16FC = mysqli_query($db, "SELECT COUNT(message) AS pesan16 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom16%'");
$angkatan17FC = mysqli_query($db, "SELECT COUNT(message) AS pesan17 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom17%'");
$angkatan18FC = mysqli_query($db, "SELECT COUNT(message) AS pesan18 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom18%'");

$angkatanAllFB = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");


$angkatan14FBFC = mysqli_query($db, "SELECT COUNT(message) as pesan14AN FROM `tblfacebook` WHERE message LIKE '%jelek%'");
$angkatan15FBFC = mysqli_query($db, "SELECT COUNT(message) AS pesan15AN FROM `tblfacebook` WHERE message LIKE '%sebel%'");
$angkatan16FBFC = mysqli_query($db, "SELECT COUNT(message) AS pesan16AN FROM `tblfacebook` WHERE message LIKE '%kurang%'");
$angkatan17FBFC = mysqli_query($db, "SELECT COUNT(message) AS pesan17AN FROM `tblfacebook` WHERE message LIKE '%kotor%'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="resources/images/logoStikom.png">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="resources/css/header.css">
    <link rel="stylesheet" href="resources/css/footer.css">
    <link rel="stylesheet" href="resources/css/index.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


    <!-- -- JQuery CDN -- -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <script src="resources/js/bootstrap.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/header.js"></script>
    <script src="resources/js/animate-scroll.js"></script>
    <script src="resources/js/scroll-top.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <!-- -- Jquery -- -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|EB+Garamond" rel="stylesheet">
</head>

<body>
    <?php include 'views/header.php'; ?>

    <!-- Content Header -->
    <div class="content-header">
        <!-- <img src="resources/images/stikom.jpg" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-header-view-one">

                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="content-header-view-two">

                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="content-header-view-three">
                        <h1>SENTIMEN ETIKA POSTING PADA MEDIA SOSIAL MAHASISWA STIKOM SURABAYA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Content two -->
    <!-- <div class="content-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-two-header">
                        <h1>SENTIMEN ETIKA POSTING PADA MEDIA SOSIAL MAHASISWA </h1>
                        <h1>STIKOM SURABAYA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="content-two-purpose">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-purpose">
                        <h2>TUJUAN</h2>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="content-purpose">
                        <p>Tujuan dari aplikasi ini ialah melakukan integrasi data dari <i>Twitter</i> <i>Facebook</i>
                            berdasarkan pada postingan akun mahasiswa <i> Institut Bisnis dan Informatika STIKOM
                                Surabaya </i>
                            yang berisikan kata "Stikom" untuk dapat mengetahui etika posting status atau tweet
                            mahasiswa dalam menggunakan <i> Sosial Website.</i> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->

    <!-- Content Seven -->
    <div class="content-seven">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-text-perbandingan">
                        <h1>Jumlah Perbandingan Data antara Pengguna Facebook dan Twitter Mahasiswa STIKOM Surabaya Mengenai Tingkat Etika Posting pada Media Sosial </h1>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="content-diagram-all">
                    <canvas id="data-perbandingan" width="100%" height="50px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->









    <!-- Content Three -->
    <div class="content-three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-three-header">
                        <h2>DATA TWITTER & FACEBOOK MAHASISWA STIKOM SURABAYA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-three-FT">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="content-three-facebook-diagram">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="facebook-diagram">
                                                <h4>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter
                                                </h4>
                                                <h5>Terdapat
                                                    <?php while ($angkatan_All = mysqli_fetch_array($angkatanAll)) {
                                                        echo $angkatan_All['tweetAll'];
                                                    }; ?>
                                                    Kritikan dengan Hastag #KritikStikom</h5>
                                                <canvas id="myChartDT" width="100%" height="70px"></canvas>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="content-three-twitter-diagram">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="twitter-diagram">
                                                <h4>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook</h4>
                                                <h5>Terdapat
                                                    <?php while ($angkatan_AllFB = mysqli_fetch_array($angkatanAllFB)) {
                                                        echo $angkatan_AllFB['pesanAllFB'];
                                                    }; ?>
                                                    Kritikan dengan Hastag #KritikStikom</h5>
                                                <canvas id="myFacebookDT" width="100%" height="70px"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->


    <!-- Content Four -->


    <div class="content-analysis">
        <!-- <img src="resources/images/stikom.jpg" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="content-analaysis-view">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Content -->



    <!-- Content Five -->
    <div class="content-analysis-facebook">
        <div class="container-fluid">
            <div class="row">
                <h2>ANALYSIS TWITTER</h2>
                <div class="col-md-4 col-sm-4">
                    <!-- <img src="resources/images/analysisTW.png" alt=""> -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <img src="resources/images/analysisTW.png" alt="">
                    <p>Berikut ini merupakan analisis mengenai Twitter , dimana kami melakukan riset untuk mengetahui
                        seberapa banyak mahasiswa STIKOM Surabaya yang meng-kritik mengenai kampus di sosial media
                        Twitter</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- <img src="resources/images/analysisTW.png" alt=""> -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="content-diagram-analysis-facebook">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="content-analysis-facebook-one">
                                        <h4>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter</h4>
                                        <h5>Terdapat Kritikan dengan kata Jelek, Sebel, Kurang, Kotor</h5>
                                        <canvas id="myFacebookTC" width="100%" height="70px"></canvas>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="content-analysis-facebook-two">
                                        <img src="resources/images/analysis.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->



    <!-- Content Six -->
    <div class="content-pembatas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->



    <!-- Content Seven -->
    <div class="content-analysis-twitter">
        <div class="container-fluid">
            <div class="row">
                <h2>ANALYSIS FACEBOOK</h2>
                <div class="col-md-4 col-sm-4">
                    <!-- <img src="resources/images/analysisTW.png" alt=""> -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <img src="resources/images/analysisTW.png" alt="">
                    <p>Berikut ini merupakan analisis mengenai Facebook , dimana kami melakukan riset untuk mengetahui
                        seberapa banyak mahasiswa STIKOM Surabaya yang meng-kritik mengenai kampus di sosial media
                        Facebook</p>    
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- <img src="resources/images/analysisTW.png" alt=""> -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="content-diagram-analysis-twitter">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="content-analysis-twitter-one">
                                        <img src="resources/images/analysis.png" alt="">

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="content-analysis-twitter-two">
                                        <h4>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook</h4>
                                        <h5>Terdapat Kritikan dengan kata Jelek, Sebel, Kurang, Kotor</h5>
                                        <canvas id="myFacebookFC" width="100%" height="70px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->

    <!-- End Content -->
    <?php include 'views/footer.php'; ?>
    <img type="button" id="tombolScrollTop" onclick="scrolltotop()" src="resources/images/up-arrow.png" alt="">

    <!-- Analysis Diagram -->
    <?php include 'views/analysis/analysis-diagram.php'; ?>

</body>

</html>