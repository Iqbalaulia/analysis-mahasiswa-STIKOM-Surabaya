

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
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
            labels: ["Jelek", "Sebel", "Kurang", "Kotor"],
            datasets: [{
                label: '# of Votes',
                data: [ <?php while ($angkatan_14AN = mysqli_fetch_array($angkatan14AN)) {
                            echo $angkatan_14AN['pesan14AN'];
                        }; ?>,
                         <?php while ($angkatan_15AN = mysqli_fetch_array($angkatan15AN)) {
                            echo $angkatan_15AN['pesan15AN'];
                        }; ?>,
                         <?php while ($angkatan_16AN = mysqli_fetch_array($angkatan16AN)) {
                            echo $angkatan_16AN['pesan16AN'];
                        }; ?>
                         ,<?php while ($angkatan_17AN = mysqli_fetch_array($angkatan17AN)) {
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