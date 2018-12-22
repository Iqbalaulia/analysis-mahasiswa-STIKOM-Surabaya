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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="../resources/css/navbar.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/data-timeline.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css
">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>




    <title>Data Timeline</title>
</head>

<body>

    <nav id="navbar" class="">
        <div class="nav-wrapper">
            <!-- Navbar Logo -->
            <div class="logo">
                <!-- Logo Placeholder for Inlustration -->
                <a href="../index.php"><i class="fas fa-chess-knight"></i> Integrasi Data</a>
            </div>

            <!-- Navbar Links -->
            <ul id="menu">
                <li><a href="../index.php">Home</a></li>
                <!---->
                <li><a href="data-timeline.php">Data Timeline</a></li>
                <!---->
                <li><a href="twitter-crawling.php">Crawling Twitter</a></li>
                <!---->
                <li><a href="facebook-crawling.php">Crawling Facebook</a></li>
            </ul>
        </div>
    </nav>


    <!-- Button Generate Twitter -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <a class="btn icon-btn button-generate" href="../views/generate-data.php"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Generate
                    Data Twitter</a>
            </div>
        </div>
    </div> -->

    <br>
    <br>
    <br>
    <br>
    <!-- Chart Analysis -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="analysis-chart-one">
                    <div class="row">
                        <div class="">
                            <div class="name-tag">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="name-tag">
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter </h3>
                                <h4>Terdapat <?php while ($angkatan_All = mysqli_fetch_array($angkatanAll)) {
                                                echo $angkatan_All['tweetAll'];
                                            } ?> Kritikan dengan Hastag #KritikStikom</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myChart" width="400px" height="400px"></canvas>
                                
                                <br>
                            </div>
                        </div>

                        <div class="">
                            <div class="name-tag">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="analysis-chart-two">
                    <div class="row">
                        <div class="">
                            <div class="nam-tag">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="name-tag">
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook</h3>
                                <h4>Terdapat <?php while ($angkatan_AllFB = mysqli_fetch_array($angkatanAllFB)) {
                                                echo $angkatan_AllFB['pesanAllFB'];
                                            }; ?> Kritikan dengan Hastag #KritikStikom</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myFacebook" width="400" height="400"></canvas>

                            </div>
                        </div>
                        <div class="">
                            <div class="name-tag">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="name-twitter">
                    <h1>Data Twitter</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <!-- <div class="pencarian">
                <form action="data-timeline.php" method="get">
                    <label>Cari :</label>
                    <input type="text" name="cari">
                    <input type="submit" value="cari">
                </form>
            </div> -->
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
    </div>

    <!-- Data Table Twitter -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="selection">
                    <form method="post" action="" name="form">
                        <select class="select-data" name="pagination">
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                        </select>
                        <input name="submit" type="submit" class="btn btn-success" value="Cari">
                    </form>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 table-data">
                <table class="table table-bordered">
                    <thead style="background-color:rgba(46, 49, 49, 1); color:white;">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Tweet</th>
                            <th>Pencarian</th>
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
                            <td>
                                <?php 
                                $cari = $_GET['cari'];
                                echo $cari;
                                ?>
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
                <?php 
                $query_sql = "SELECT * FROM  `twitter_timeline` WHERE `tweet`LIKE '%stikom surabaya%' OR tweet LIKE '%Institut Bisnis dan Informatika Stikom Surabaya%' ";
                $return_sql = mysqli_query($db, $query_sql);
                $count = mysqli_num_rows($return_sql);
                $a = $count / 100;
                $a = ceil($a);

                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "<ul class='pagination'>";
                echo "<li><a href='data-timeline.php?page=" . ($page - 1) . "' class='button'>Previous</a></li>";

                for ($b = 1; $b <= $a; $b++) {

                    echo "<li><a href='data-timeline.php?page=" . $b . "'>" . $b . "</a></li>";

                }

                echo "<li><a href='data-timeline.php?page=" . ($page + 1) . "' class='button'>NEXT</a></li>";
                echo "</ul>";
                ?>





                <!-- Data Facebook -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="name-facebook">
                                <h1>Data Facebook</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Facebook -->
                <table class="table table-bordered">
                    <thead style="background-color:rgba(46, 49, 49, 1); color:white;">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Message</th>

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

                </table>
                <?php 
                $query_sql = "SELECT * FROM `tblfacebook` WHERE `id` > 1";
                $return_sql = mysqli_query($db, $query_sql);
                $count = mysqli_num_rows($return_sql);
                $a = $count / 20;
                $a = ceil($a);

                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";

                echo "<ul class='pagination'>";
                echo "<li><a href='data-timeline.php?page=" . ($page - 1) . "' class='button'>Previous</a></li>";

                for ($b = 1; $b <= $a; $b++) {

                    echo "<li><a href='data-timeline.php?page=" . $b . "'>" . $b . "</a></li>";

                }

                echo "<li><a href='data-timeline.php?page=" . ($page + 1) . "' class='button'>NEXT</a></li>";
                echo "</ul>";
                ?>


            </div>




        </div>

    </div>



    <!-- FOoter -->

    <!-- Footer -->



</body>



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js
"></script>

</html>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ["Angkatan 14", "Angkatan 15", "angkatan 16", "angkatan 17", "angkatan 18"],
            datasets: [{
                label: 'Jumlah Kritik',
                data: [
                    <?php while ($angkatan_14 = mysqli_fetch_array($angkatan14)) {
                        echo $angkatan_14['tweet14'];
                    } ?>,
                    <?php while ($angkatan_15 = mysqli_fetch_array($angkatan15)) {
                        echo $angkatan_15['tweet15'];
                    } ?>,
                    <?php while ($angkatan_16 = mysqli_fetch_array($angkatan16)) {
                        echo $angkatan_16['tweet16'];
                    } ?>,
                    <?php while ($angkatan_17 = mysqli_fetch_array($angkatan17)) {
                        echo $angkatan_17['tweet17'];
                    } ?>,
                    <?php while ($angkatan_18 = mysqli_fetch_array($angkatan18)) {
                        echo $angkatan_18['tweet18'];
                    } ?>
                    
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("myFacebook").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Angkatan 14", "Angkatan 15", "angkatan 16", "angkatan 17", "angkatan 18"],
            datasets: [{
                label: '# of Votes',
                data: [ <?php while ($angkatan_14FB = mysqli_fetch_array($angkatan14FB)) {
                            echo $angkatan_14FB['pesan14'];
                        }; ?>,
                        <?php while ($angkatan_15FB = mysqli_fetch_array($angkatan15FB)) {
                            echo $angkatan_15FB['pesan15'];
                        }; ?> ,
                         <?php while ($angkatan_16FB = mysqli_fetch_array($angkatan16FB)) {
                            echo $angkatan_16FB['pesan16'];
                        }; ?>,
                         <?php while ($angkatan_17FB = mysqli_fetch_array($angkatan17FB)) {
                            echo $angkatan_17FB['pesan17'];
                        }; ?>, 
                         <?php while ($angkatan_18FB = mysqli_fetch_array($angkatan18FB)) {
                            echo $angkatan_18FB['pesan18'];
                        }; ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>