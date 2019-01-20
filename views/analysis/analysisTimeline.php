<!-- Twitter -->

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
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



<!-- Facebook -->
<script>
    var ctx = document.getElementById("myFacebook").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
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
                    'rgba(246, 71, 71, 1)',
                    'rgba(38, 194, 129, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderColor: [
                    'rgba(246, 71, 71, 1)',
                    'rgba(38, 194, 129, 1)',
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