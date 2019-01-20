<script>
var ctx = document.getElementById("data-perbandingan").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Facebook", "Twitter"],
        datasets: [{
            label: '# of Votes',
            data: [
                <?php while ($angkatan_All = mysqli_fetch_array($angkatanFacebook)) {
                    echo $angkatan_All['pesanAllFB'];
                }; ?>
                ,
                <?php while ($angkatan_Semua = mysqli_fetch_array($angkatanTwitter)) {
                    echo $angkatan_Semua['tweetAll'];
                }; ?>

                ],
            backgroundColor: [
                'rgba(44, 130, 201, 1)',
                'rgba(129, 207, 224, 1)'
            ],
            borderColor: [
                'rgba(44, 130, 201, 1)',    
                'rgba(129, 207, 224, 1)'
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>








<script>
    var ctx = document.getElementById("myChartDT").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
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
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
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
                data: [
                    <?php while ($angkatan_14FB = mysqli_fetch_array($angkatan14FB)) {
                        echo $angkatan_14FB['pesan14'];
                    }; ?>,
                    <?php while ($angkatan_15FB = mysqli_fetch_array($angkatan15FB)) {
                        echo $angkatan_15FB['pesan15'];
                    }; ?>,
                    <?php while ($angkatan_16FB = mysqli_fetch_array($angkatan16FB)) {
                        echo $angkatan_16FB['pesan16'];
                    }; ?>,
                    <?php while ($angkatan_17FB = mysqli_fetch_array($angkatan17FB)) {
                        echo $angkatan_17FB['pesan17'];
                    }; ?>,
                    <?php while ($angkatan_18FB = mysqli_fetch_array($angkatan18FB)) {
                        echo $angkatan_18FB['pesan18'];
                    }; ?>
                ],
                backgroundColor: [
                    'rgba(46, 204, 113, 1)',
                    'rgba(214, 69, 65, 1)',
                    'rgba(52, 152, 219, 1)',
                    'rgba(238, 238, 0, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderColor: [
                    'rgba(46, 204, 113, 1))',
                    'rgba(214, 69, 65, 1)',
                    'rgba(52, 152, 219, 1)',
                    'rgba(238, 238, 0, 1)',
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
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
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
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
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
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
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