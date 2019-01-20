<?php include("config.php");
include("../library/JaroWinkler.php");
// Twitter

$angkatan14 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet14 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom14%'");
$angkatan15 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet15 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom15%'");
$angkatan16 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet16 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom16%'");
$angkatan17 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet17 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom17%'");
$angkatan18 = mysqli_query($db, "SELECT COUNT(tweet) AS tweet18 FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom18%'");

$angkatanAll = mysqli_query($db, "SELECT COUNT(tweet) AS tweetAll FROM `twitter_timeline` WHERE `tweet`LIKE '%KritikStikom%'");


// Facebook

$angkatan14FB = mysqli_query($db, "SELECT COUNT(message) AS pesan14 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom14%'");
$angkatan15FB = mysqli_query($db, "SELECT COUNT(message) AS pesan15 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom15%'");
$angkatan16FB = mysqli_query($db, "SELECT COUNT(message) AS pesan16 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom16%'");
$angkatan17FB = mysqli_query($db, "SELECT COUNT(message) AS pesan17 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom17%'");
$angkatan18FB = mysqli_query($db, "SELECT COUNT(message) AS pesan18 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom18%'");

$angkatanAllFB = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");

?>

<?php


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="../resources/images/logoStikom.png">

    <title>Data Timeline</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/header.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/data-timeline.css">

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
    <script src="../resources/js/data-timeline.js"></script>
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
                                    <h1>Data Timeline Facebook & Twitter</h1>
                                    <p>Data timeline merupakan suatu data yang telah kita peroleh dari postingan atau tweets dari teman - teman STIKOM Surabaya melalui media sosial Facebook dan Twitter. Berdasarkan data yang kita peroleh kita akan memprosesnya menjadi suatu penilaian terhadap kampus STIKOM Surabaya melalui positngan atau tweets dari mahasiswanya sendiri. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="content-in-one-img">
                        <img src="../resources/images/data.png" alt="">
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
                    <div class="content-two-one">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="content-two-null">

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="content-two-box">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="content-box-null">

                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="content-in-box">
                                                <img src="../resources/images/chart.png" alt="">
                                                <h3>Analisis</h3>
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



    <!-- Content Three -->

    <div class="content-three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-analysis-diagram">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="contentText">

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="contentDiagram">
                                    <canvas id="myChart" width="100%" height="70px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="contentImgTwitter">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="contentImgPadding">
                                    <img src="../resources/images/chartPie.png" alt="">

                                </div>
                                <h1>DATA TWITTER</h1>
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter </h3>
                                <h4>Terdapat
                                    <?php while ($angkatan_All = mysqli_fetch_array($angkatanAll)) {
                                        echo $angkatan_All['tweetAll'];
                                    } ?>
                                    Kritikan dengan Hastag #KritikStikom</h4>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->



    <!-- Content Four -->
    <!-- <div class="dataTableSearch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="searchEngine">
                        <form>
                            <input type="text" name="search" placeholder="Search..">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- End Content -->


    <!-- Content Five -->
    <div class="dataTableTwitter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- <div class="TableTwitter"> -->
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Tweet</th>
                                <!-- <th>Pencarian</th> -->
                                <!-- <th>Tanggal</th> -->
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
                                $page1 = ($page * 100) - 100;
                            }

                            $sql = "SELECT DISTINCT tweet, screen_name, id FROM  `twitter_timeline` WHERE `tweet`LIKE '%stikom surabaya%' OR tweet LIKE '%Institut Bisnis dan Informatika Stikom Surabaya%' ORDER BY tweet LIMIT  $page1,100";
                            $query = mysqli_query($db, $sql);
                            while ($timeline = mysqli_fetch_array($query)) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $timeline['id']; ?>
                                </td>
                                <td>
                                    <?php echo @$timeline['screen_name'] ?>

                                </td>
                                <td>
                                    <?php 
                                    if (isset($_GET['cari'])) {
                                        $token = strtok($timeline['tweet'], " ");
                                        echo $token;
                                    } else {
                                        echo $timeline['tweet'];
                                    }
                                    ?>
                                </td>


                            </tr>
                            <?php 
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Tweet</th>
                                <!-- <th>Pencarian</th> -->
                                <!-- <th>Tanggal</th> -->
                            </tr>
                        </tfoot>
                    </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->


    <!-- Content Six -->

    <div class="contentSix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="contentTextSix">
                        <h1>Data Facebook</h1>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="contentTextParagraph">
                        <p>Merupakan sebuah data postingan yang kita peroleh dari facebook mahasiswa STIKOM Surabaya guna untuk memberikan penilaian terhadap kampus STIKOM Surabaya.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="contentTextSix">
                        <a href=""><button type="submit" class="button button1">Crawling Facebook</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->


    <!-- Content Seven -->

    <div class="contentSeven">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="content-facebook-text">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="content-facebook-analysis-text">
                                    <img src="../resources/images/report.png" alt="">
                                </div>
                            </div>
                        </div>
                        <h1>Data Facebook</h1>
                        <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook</h3>
                        <h4>Terdapat
                            <?php while ($angkatan_AllFB = mysqli_fetch_array($angkatanAllFB)) {
                                echo $angkatan_AllFB['pesanAllFB'];
                            }; ?>
                            Kritikan dengan Hastag #KritikStikom</h4>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="content-facebook-diagram">
                        <canvas id="myFacebook" width="100%" height="70px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->

    <!-- Content Eight -->
    <div class="dataTableFacebook">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <table id="facebook" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Message</th>
                                <!-- <th>Pencarian</th> -->
                                <!-- <th>Tanggal</th> -->
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
                                $page2 = 0;
                            } else {
                                $pagination = $_POST['pagination'];
                                $page2 = ($page * 20) - 20;
                            }

                            $sql = "SELECT * FROM tblfacebook WHERE id > 1 LIMIT $page2,20";
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
                                        $token = strtok($timeline['message'], " ");
                                        echo $token;
                                    } else {
                                        echo $timeline['message'];
                                    }
                                    ?>
                                </td>

                            </tr>
                            <?php 
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Message</th>
                                <!-- <th>Pencarian</th> -->
                                <!-- <th>Tanggal</th> -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->

    <!-- Footer -->
    <?php include '../views/footer.php'; ?>
    <img type="button" id="tombolScrollTop" onclick="scrolltotop()" src="../resources/images/up-arrow.png" alt="">
    <!-- Analysis Diagram -->
    <?php include '../views/analysis/analysisTimeline.php'; ?>

    <!-- Footer -->



</body>

</html>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<script>
    $(document).ready(function () {
        $('#facebook').DataTable();
    });
</script>