<?php 
include("config.php");
include("../library/JaroWinkler.php");
include("function-crawling.php");

// Facebook

$angkatan14FB = mysqli_query($db, "SELECT COUNT(message) AS pesan14 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom14%'");
$angkatan15FB = mysqli_query($db, "SELECT COUNT(message) AS pesan15 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom15%'");
$angkatan16FB = mysqli_query($db, "SELECT COUNT(message) AS pesan16 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom16%'");
$angkatan17FB = mysqli_query($db, "SELECT COUNT(message) AS pesan17 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom17%'");
$angkatan18FB = mysqli_query($db, "SELECT COUNT(message) AS pesan18 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom18%'");

$angkatanAllFB = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");


$angkatan14AN = mysqli_query($db, "SELECT COUNT(message) as pesan14AN FROM `tblfacebook` WHERE message LIKE '%jelek%'");
$angkatan15AN = mysqli_query($db, "SELECT COUNT(message) AS pesan15AN FROM `tblfacebook` WHERE message LIKE '%sebel%'");
$angkatan16AN = mysqli_query($db, "SELECT COUNT(message) AS pesan16AN FROM `tblfacebook` WHERE message LIKE '%kurang%'");
$angkatan17AN = mysqli_query($db, "SELECT COUNT(message) AS pesan17AN FROM `tblfacebook` WHERE message LIKE '%kotor%'");

?>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="../resources/images/logoStikom.png">

    <title>Crawling Facebook</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/header.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/facebook-crawling.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <!-- -- JQuery CDN -- -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <script src="../resources/js/bootstrap.js"></script>
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="../resources/js/jquery.js"></script>
    <script src="../resources/js/header.js"></script>
    <script src="../resources/js/animate-scroll.js"></script>
    <script src="../resources/data-timeline.js"></script>
    <script src="../resources/js/scroll-top.js"></script>    


    <!-- -- Jquery -- -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js
"></script>


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|EB+Garamond" rel="stylesheet">

</head>

<body>
<?php include 'header-two.php'; ?>

    <!-- Content One -->
    <div class="content-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-in-one">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="content-in-one-text">
                                    <h1>Facebook</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="content-in-one-img">
                        <img src="../resources/images/facebook.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->




    <!-- Content Two -->
    <div class="content-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->



    <!-- Content Four -->
    <div class="content-four">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="box-diagram">

                        <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook </h3>
                        <h4>Terdapat
                            <?php while ($angkatan_All = mysqli_fetch_array($angkatanAllFB)) {
                                echo $angkatan_All['pesanAllFB'];
                            } ?>
                            Kritikan dengan Hastag #KritikStikom</h4>
                        <canvas id="myChart" width="100%" height="70px"></canvas>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="box-diagram">
                        <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook</h3>
                        <h4>Terdapat Kritikan dengan kata Jelek, Sebel, Kurang, Kotor</h4>
                        <canvas id="myFacebook" width="100%" height="70px"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->


    <!-- Content FIVE -->
    <div class="dataTableSearch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="searchEngine">
                        <form method="get" >
                            <input type="text" name="cari" placeholder="Search..">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->


    <div class="contentSix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="table-data">
                    <table class="table table-bordered">
                <thead style="background-color:rgba(46, 49, 49, 1); color:white;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pesan</th>
                        <th>Pencarian</th>
                        <th>S(ED)</th>
                        <th>T(ED)</th>
                        <th>S(JW)</th>
                        <th>T(JW)</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                // Seleksi Jumlah data keluar

                // if (isset($_POST['pagination'])) {
                //     $pagination = $_POST['pagination'];
                // }
                    $page = $_GET["page"];
                    if ($page == "" || $page == "1") {
                        $page1 = 0;
                    } else {
                        $pagination = $_POST['pagination'];
                        $page1 = ($page * 1000) - 1000;
                    }

                    $sql = "SELECT * FROM tblfacebook WHERE id > 1 LIMIT $page1,50";
                    $query = mysqli_query($db, $sql);
                    while ($timeline = mysqli_fetch_array($query)) {
                        ?>
                    <tr>
                        <td>
                            <?php echo $timeline['id']; ?>
                        </td>
                        <td>
                            <?php echo $timeline['name'] ?>
                        </td>
                        
                        <td>
                            <?php 
                            if (isset($_GET['cari'])) {
                                $target = $timeline['message'];
                            //echo "Target :" . $target . "";
                                $token = strtok($target, " ");


                                while ($token !== false) {
                                    $target_token = $token;
                                    $candidate = array($_GET['cari']);
                                    $shortest = -1;

                                    foreach ($candidate as $candidate) {
                                        $lev = levenshtein($target_token, $candidate);
                                        if ($lev == 0) {
                                            $last_candidate = $candidate;
                                            $shortest = 0;
                                            break;
                                        }

                                        if ($lev <= $shortest || $shortest < 0) {
                                            $last_candidate = $candidate;
                                            $shortest = $lev;

                                        }
                                    }

                                    $time_start = microtime_float();
// Sleep for a while
                                    usleep(100);
                                    similar_text($target_token, $last_candidate, $similarity);
                                    $time_end = microtime_float();
                                    $timeED = $time_end - $time_start;


                                    $time_start = microtime_float();
// Sleep for a while
                                    usleep(100);
                                    $timejaro = JaroWinkler($target_token, $last_candidate);
                                    $time_end = microtime_float();
                                    $timeJW = $time_end - $time_start;


                                    similar_text($target_token, $last_candidate, $similarity);

                                    echo $target_token;


                                    $token = strtok($target);



                                }

                            } else {
                                echo $timeline['message'];
                            }

                        // echo $timeline['tweet'];
                            ?>
                        </td>
                        <td>
                            <?php 
                        // $cari = $_GET['cari'];
                            echo $last_candidate;
                        // echo $cari;
                            ?>
                        </td>
                        <td>
                            <?php echo ceil($similarity * 100 / 100) . "%"; ?>
                        </td>
                        <td>
                            <?php echo $timeED; ?>
                        </td>
                        <td>
                            <?php echo ceil(JaroWinkler($target_token, $last_candidate) * 100 / 100) . "%"; ?>
                        </td>
                        <td>
                            <?php echo $timeJW; ?>
                        </td>
                        <td>
                            <?php 
                            $d = time($timeline['tanggal']);
                            echo date("Y-m-d h:i:sa", $d);
                            ?>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
                </tbody>

            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <?php include '../views/footer.php'; ?>
    <img type="button" id="tombolScrollTop" onclick="scrolltotop()" src="../resources/images/up-arrow.png" alt="">

    <!-- Analysis Diagram -->
    <?php include '../views/analysis/analysisFCrawling.php'; ?>

    <!-- Footer -->

</body>


</html>
