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


// Facebook

$angkatan14FB = mysqli_query($db, "SELECT COUNT(message) AS pesan14 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom14%'");
$angkatan15FB = mysqli_query($db, "SELECT COUNT(message) AS pesan15 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom15%'");
$angkatan16FB = mysqli_query($db, "SELECT COUNT(message) AS pesan16 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom16%'");
$angkatan17FB = mysqli_query($db, "SELECT COUNT(message) AS pesan17 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom17%'");
$angkatan18FB = mysqli_query($db, "SELECT COUNT(message) AS pesan18 FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom18%'");
$angkatanAllFB = mysqli_query($db, "SELECT COUNT(message) AS pesanAllFB FROM `tblfacebook` WHERE `message`LIKE '%KritikStikom%'");


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

    <link rel="stylesheet" href="resources/css/navbar.css">
    <link rel="stylesheet" href="resources/css/footer.css">
    <link rel="stylesheet" href="resources/css/data-timeline.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css
">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


    <title>Dashboard</title>
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
                <li><a href="index.php">Home</a></li>
                <!--
   -->
                <li><a href="../integrasi-uas-tester/views/data-timeline.php">Data Timeline</a></li>
                <!--
   -->
                <li><a href="../integrasi-uas-tester/views/data-timeline.php">Crawling Twiiter</a></li>
                <!--
   -->
                <li><a href="../integrasi-uas-tester/views/facebook-crawling.php">Crawling Facebook</a></li>
            </ul>
        </div>
    </nav>

	<br>
    <br>
    <br>
    <br>

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
                                            }; ?> Kritikan dengan Hastag #KritikStikom</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myChartDT" width="400px" height="400px"></canvas>
                                
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
                                <canvas id="myFacebookDT" width="400" height="400"></canvas>

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



	    <!-- Chart Analysis -->
		<div class="container-fluid" style="margin: 0% 0% 0% 0%;">
        <div class="row">
            <div class="col-md-6">
                <div class="analysis-chart-one">
                   <!--  -->
                   <div class="row">
                        <div class="">
                            <div class="nam-tag">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="name-tag">
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter</h3>
                                <h4>Terdapat 20 Kritikan dengan Hastag #KritikStikom</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myChartTC" width="400" height="400"></canvas>

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
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Twitter</h3>
                                <h4>Terdapat Kritikan dengan kata Jelek, Sebel, Kurang, Kotor</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myFacebookTC" width="400" height="400"></canvas>

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
                                <h3>Analisis Jumlah Kritik Terhadap Stikom Surabaya Melalui Facebook </h3>
                                <h4>Terdapat <?php while ($angkatan_AllFB = mysqli_fetch_array($angkatanAllFB)) {
                                            } ?> Kritikan dengan Hastag #KritikStikom</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myChartFC" width="400px" height="400px"></canvas>
                                
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
                                <h4>Terdapat Kritikan dengan kata Jelek, Sebel, Kurang, Kotor</h4>
                            </div>
                            <div class="chart-one">
                                <canvas id="myFacebookFC" width="400" height="400"></canvas>

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
    </div>

    
</body>

</html>



<script>
    var ctx = document.getElementById("myChartDT").getContext('2d');
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
    var ctx = document.getElementById("myFacebookDT").getContext('2d');
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




<script>
    var ctx = document.getElementById("myChartTC").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ["Angkatan 14", "Angkatan 15", "angkatan 16", "angkatan 17", "angkatan 18"],
            datasets: [{
                label: 'Jumlah Kritik',
                data: [
                    <?php while ($angkatan_14 = mysqli_fetch_array($angkatan14TC)) {
                        echo $angkatan_14['tweet14'];
                    } ?>,
                    <?php while ($angkatan_15 = mysqli_fetch_array($angkatan15TC)) {
                        echo $angkatan_15['tweet15'];
                    } ?>,
                    <?php while ($angkatan_16 = mysqli_fetch_array($angkatan16TC)) {
                        echo $angkatan_16['tweet16'];
                    } ?>,
                    <?php while ($angkatan_17 = mysqli_fetch_array($angkatan17TC)) {
                        echo $angkatan_17['tweet17'];
                    } ?>,
                    <?php while ($angkatan_18 = mysqli_fetch_array($angkatan18TC)) {
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
    var ctx = document.getElementById("myFacebookTC").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Jelek", "Sebel", "Kurang", "Kotor"],
            datasets: [{
                label: '# of Votes',
                data: [ <?php while ($angkatan_14AN = mysqli_fetch_array($angkatan14AN)) {
                            echo $angkatan_14AN['tweet14AN'];
                        }; ?>,
                         <?php while ($angkatan_15AN = mysqli_fetch_array($angkatan15AN)) {
                            echo $angkatan_15AN['tweet15AN'];
                        }; ?>,
                         <?php while ($angkatan_16AN = mysqli_fetch_array($angkatan16AN)) {
                            echo $angkatan_16AN['tweet16AN'];
                        }; ?>
                         ,<?php while ($angkatan_17AN = mysqli_fetch_array($angkatan17AN)) {
                                echo $angkatan_17AN['tweet17AN'];
                            }; ?> 
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
    var ctx = document.getElementById("myChartFC").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Angkatan 14", "Angkatan 15", "angkatan 16", "angkatan 17", "angkatan 18"],
            datasets: [{
                label: '# of Votes',
                data: [ <?php while ($angkatan_14FB = mysqli_fetch_array($angkatan14FC)) {
                            echo $angkatan_14FB['pesan14'];
                        }; ?>,
                        <?php while ($angkatan_15FB = mysqli_fetch_array($angkatan15FC)) {
                            echo $angkatan_15FB['pesan15'];
                        }; ?> ,
                         <?php while ($angkatan_16FB = mysqli_fetch_array($angkatan16FC)) {
                            echo $angkatan_16FB['pesan16'];
                        }; ?>,
                         <?php while ($angkatan_17FB = mysqli_fetch_array($angkatan17FC)) {
                            echo $angkatan_17FB['pesan17'];
                        }; ?>, 
                         <?php while ($angkatan_18FB = mysqli_fetch_array($angkatan18FC)) {
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

<script>
    var ctx = document.getElementById("myFacebookFC").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Jelek", "Sebel", "Kurang", "Kotor"],
            datasets: [{
                label: '# of Votes',
                data: [ <?php while ($angkatan_14AN = mysqli_fetch_array($angkatan14FBFC)) {
                            echo $angkatan_14AN['pesan14AN'];
                        }; ?>,
                         <?php while ($angkatan_15AN = mysqli_fetch_array($angkatan15FBFC)) {
                            echo $angkatan_15AN['pesan15AN'];
                        }; ?>,
                         <?php while ($angkatan_16AN = mysqli_fetch_array($angkatan16FBFC)) {
                            echo $angkatan_16AN['pesan16AN'];
                        }; ?>
                         ,<?php while ($angkatan_17AN = mysqli_fetch_array($angkatan17FBFC)) {
                                echo $angkatan_17AN['pesan17AN'];
                            }; ?> 
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