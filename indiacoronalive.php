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
            <h3 class="text-capitalize text-center">Covid-19 Live Updates In India (Statewise)</h3>
        </div>
        <div class="table-responsive container-fluid">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Last updated</th>
                    <th>States</th>
                    <th>TotalConfirmed</th>
                    <th>TotalActive</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>

                <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronaInLive = json_decode($data, true);
                $stateCount = count($coronaInLive['statewise']);
                $i = 1;
                while ($i < $stateCount) {
                ?>

                    <tr>
                        <td><?php echo $coronaInLive['statewise'][$i]['lastupdatedtime'];   ?></td>
                        <td><?php echo $coronaInLive['statewise'][$i]['state'];   ?></td>
                        <td><?php echo $coronaInLive['statewise'][$i]['confirmed'];  ?></td>
                        <td><?php echo $coronaInLive['statewise'][$i]['active'];  ?></td>
                        <td><?php echo $coronaInLive['statewise'][$i]['recovered']; ?></td>
                        <td><?php echo $coronaInLive['statewise'][$i]['deaths']; ?></td>
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