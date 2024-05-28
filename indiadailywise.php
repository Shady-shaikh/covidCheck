<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'links.php' ?>
    <?php include 'style.php' ?>
</head>

<body onload="fetch()">

    <nav class="navbar navbar-expand-lg nav_style">
        <div class="container-fluid ">
            <a class="navbar-brand pl-4" href="#">COVID-19</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center pr-5 text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="corona_update">
        <div class="mb-3 mt-5">
            <h3 class="text-capitalize text-center">Covid-19 Daily Updates In India</h3>
        </div>
        <div class="table-responsive container-fluid">
            <table class="table text-center" id="tbval">

                <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronaData = json_decode($data, true);
                $totalCount = count($coronaData['cases_time_series']);
                $i = 0;
                while ($i < $totalCount) {
                ?>
                    <tr>
                        <th class="text-left">Date & Month</th>
                        <th colspan="6"></th>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-left"><?php echo $coronaData['cases_time_series'][$i]['date'] . "<br>"; ?></td>
                    </tr>
                    <tr class="text-capitalize text-white">
                        <th style="color:#fff;background:#2196f3;">total confirmed</th>
                        <th style="color:#fff;background:#008c76ff;">daily confirmed</th>
                        <th style="color:#fff;background:#ffc107;">daily recovered</th>
                        <th style="color:#fff;background:#e91e7f;">daily deceased</th>
                        <th style="color:#fff;background:#4caf50;">total recovered</th>
                        <th style="color:#fff;background:#ee2737ff;">total deceased</th>
                    </tr>

                    <tr class="mb-5">
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['totalconfirmed'] . "<br>";  ?></td>
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['dailyconfirmed'] . "<br>"; ?></td>
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['dailyrecovered'] . "<br>"; ?></td>
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['dailydeceased'] . "<br>"; ?></td>
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['totalrecovered'] . "<br>"; ?></td>
                        <td style="background:#bed2f3;"><?php echo $coronaData['cases_time_series'][$i]['totaldeceased'] . "<br>"; ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    </section>











    <footer class="footer mt-auto py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted ">Copyright &copy;covidInfo.com</span>
        </div>
    </footer>


</body>

</html>