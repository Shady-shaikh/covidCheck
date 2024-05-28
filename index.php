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

    <nav class="navbar navbar-expand-lg nav_style" role="navigation">
        <div class="container-fluid ">
            <a class="navbar-brand pl-4" href="#">COVID-19</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center pr-5 text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutid">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#symptom">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prevention">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indiadailywise.php">indiadailywise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactUs">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="conatiner-fluid sub_section pt-5 pb-3">
        <div class="container">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <div class="leftside text-center">
                        <img src="https://www.clipartmax.com/png/full/463-4633428_circle-clip-art-person-icon-people-together-icon-png.png" width=300 height=300 ">
                </div>
                    </div>
                    <div class=" col-lg-6">
                        <div class="section_header text-center  mb-3">
                            <h1 class="ml-3 mr-3 mt-4">Let's Stay Safe & Fight Together Against Cor<span class="corona_iconAniam"><img src="https://cdn-icons-png.flaticon.com/512/2913/2913584.png" class="mb-3" width=50></span>na Virus</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section class="corona_update">
            <div class="mb-3 mt-5">
                <h3 class="text-capitalize text-center">Covid-19 Update India</h3>
            </div>
            <div class="d-flex flex-wrap-reverse justify-content-around align-items-center ml-5 mr-5 mt-5">

                <?php
                $data = file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
                $coronaIn = json_decode($data, true);
                ?>
                <div>
                    <h1 class="count"><?php echo $coronaIn['data']['summary']['total']; ?></h1>
                    <p>Toal Confirmed Cases</p>
                </div>
                <div>
                    <h1 class="count"><?php echo $coronaIn['data']['summary']['confirmedCasesIndian']; ?></h1>
                    <p>Toal Confirmed Cases (India)</p>
                </div>
                <div>
                    <h1 class="count"><?php echo $coronaIn['data']['summary']['discharged']; ?></h1>
                    <p>TOtal Discharged</p>
                </div>
                <div>
                    <h1 class="count"><?php echo $coronaIn['data']['summary']['deaths']; ?></h1>
                    <p>Total Death Cases</p>
                </div>
            </div>

            <hr class="bg-danger border-2 border-top border-danger">
            <div class="table-responsive container-fluid">
                <h3 class="text-capitalize text-center mt-3 mb-3">Covid-19 Update WorldWide</h3>
                <table class="table table-bordered table-striped text-center" id="tbval">
                    <tr>
                        <th>Country</th>
                        <th>TotalConfirmed</th>
                        <th>TotalRecovered</th>
                        <th>TotalDeaths</th>
                        <th>Tested</th>
                    </tr>
                </table>
            </div>
        </section>

        <div class="conatiner-fluid sub_section pt-5 pb-3" id="aboutid">
            <div class="section_header text-center  mb-3">
                <h1>About COVID-19</h1>
            </div>
            <div class="container">
                <div class="row flex-lg-row align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="./covid_detail.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">What is COVID-19 (Corona Virus)</h1>
                        <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.
                            Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment. However, some will become seriously ill and require medical attention.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="symptom">
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2 border-bottom text-center">Corona Virus Symptoms</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 ">
                    <div class="feature col text-center">
                        <img src="cough.png" alt="">
                        <p class="mt-2 mb-2">cough</p>
                    </div>
                    <div class="feature col text-center">
                        <img src="runny-nose.png" alt="">
                        <p class="mt-2 mb-2">runny nose</p>
                    </div>
                    <div class="feature col text-center">
                        <img src="sick.png" alt="">
                        <p class="mt-2 mb-2">fever</p>
                    </div>
                    <div class="feature col text-center mt-5">
                        <img src="cold.png" alt="">
                        <p class="mt-2 mb-2">cold</p>
                    </div>
                    <div class="feature col text-center mt-5">
                        <img src="weakness.png" alt="">
                        <p class="mt-2 mb-2">tiredness</p>
                    </div>
                    <div class="feature col text-center mt-5">
                        <img src="breathing.png" alt="">
                        <p class="mt-2 mb-2">difficulty breathing (severe cases)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="prevention">
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2  text-center">6 Steps Prevention Against Coronavirus</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 ">
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="liquid-soap.png" height="60">
                        <span class="ml-3">Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</span>
                    </div>
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="mask.png" height="60">
                        <span class="ml-3">Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneez</span>
                    </div>
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="queue.png" height="60">
                        <span class="ml-3">Avoid close contact (1 meter or 3 feet) with people who are unwell</span>
                    </div>
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="working-at-home.png" height="60">
                        <span class="ml-3">Stay home and self-isolate from others in the household if you feel unwell</span>
                    </div>
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="working-at-home.png" height="60">
                        <span class="ml-3">Stay infromed by watching news $ follown the recommended practices</span>
                    </div>
                    <div class="feature col  d-flex mt-5 mb-5">
                        <img src="working-at-home.png" height="60">
                        <span class="ml-3">Stay infromed by watching news $ follown the recommended practices</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="contactUs">
            <h1 class="text-center">Contact Us ASAP</h1>
            <div class="container-fluid mr-2 ml-2 d-flex justify-content-center mt-5">
                <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="mb-3">
                        <label for="exampleInputUser" class="form-label">Username</label>
                        <input type="text" class="form-control" name="name" id="exampleInputUser" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMobile" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputMobile" placeholder="name@example.com" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile</label>
                        <input type="number" class="form-control" name="mobile" id="exampleInputEmail1" placeholder="mobile number" aria-describedby="emailHelp" required>
                    </div>
                    <p>Select Symptoms</p>
                    <div class="d-flex justify-content-start">
                        <div class="mb-3 form-check  mr-4">
                            <input type="checkbox" name="checkSym[]" class="form-check-input" id="exampleCheck1" value="cold">
                            <label class="form-check-label" for="exampleCheck1">Cold</label>
                        </div>
                        <div class="mb-3 form-check  mr-4">
                            <input type="checkbox" name="checkSym[]" class="form-check-input" id="exampleCheck2" value="fever">
                            <label class="form-check-label" for="exampleCheck2">Fever</label>
                        </div>
                        <div class="mb-3 form-check  mr-4">
                            <input type="checkbox" name="checkSym[]" class="form-check-input" id="exampleCheck3" value="breath">
                            <label class="form-check-label" for="exampleCheck3">Difficulty In Breath</label>
                        </div>
                        <div class="mb-3 form-check  mr-4">
                            <input type="checkbox" name="checkSym[]" class="form-check-input" id="exampleCheck4" value="weakness">
                            <label class="form-check-label" for="exampleCheck4">Feeling Weak</label>
                        </div>
                    </div>
                    <label class="form-check-label" for="floatingTextarea2">Describe how you are feeling</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="query" id="floatingTextarea2" style="height: 100px;resize:none;" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-5">Submit</button>
                </form>
            </div>
        </div>

        <div class="container scrolltop float-right pr-5">
            <i class="fa-solid fa-arrow-up-long" onclick="topFn()" id="myBtn"></i>
        </div>


        <footer class="footer mt-auto py-3 bg-light text-center">
            <div class="container">
                <span class="text-muted ">Copyright &copy;covidInfo.com</span>
            </div>
        </footer>

        <script type="text/javascript">
            $('.count').counterUp({
                delay: 10,
                time: 500
            })

            mybtn = document.getElementById("myBtn");
            window.onscroll = function() {
                scrollFn()
            };

            function scrollFn() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybtn.style.display = "block";
                } else {
                    mybtn.style.display = "none";
                }
            }

            function topFn() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            function fetch() {
                $.get("https://api.apify.com/v2/key-value-stores/tVaYRsPHLjNdNBu7S/records/LATEST?disableRedirect=true",
                    function(data) {
                        var tbval = document.getElementById('tbval');
                        for (let i = 1; i < (data.length); i++) {
                            var x = tbval.insertRow();
                            x.insertCell(0);

                            tbval.rows[i].cells[0].innerHTML = data[i - 1]['country'];
                            tbval.rows[i].cells[0].style.background = '#7a4a91';
                            tbval.rows[i].cells[0].style.color = '#fff';

                            x.insertCell(1);
                            tbval.rows[i].cells[1].innerHTML = data[i - 1]['infected'];
                            tbval.rows[i].cells[1].style.background = '#4bb7d8';

                            x.insertCell(2);
                            tbval.rows[i].cells[2].innerHTML = data[i - 1]['recovered'];
                            tbval.rows[i].cells[2].style.background = '#7a4a91';

                            x.insertCell(3);
                            tbval.rows[i].cells[3].innerHTML = data[i - 1]['deceased'];
                            tbval.rows[i].cells[3].style.background = '#f36e23';

                            x.insertCell(4);
                            tbval.rows[i].cells[4].innerHTML = data[i - 1]['tested'];
                            tbval.rows[i].cells[4].style.background = '#4bb7d8';
                        }
                    }
                );
            }
        </script>
</body>

</html>

<?php
include 'dbcon.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptom = $_POST['checkSym'];
    $query = $_POST['query'];

    $chk = "";

    foreach ($symptom as $chk1) {
        $chk .= $chk1 . ",";
    }

    $checkquery = "SELECT * FROM userdata WHERE email='$email' &&  mobile='$mobile' ";
    $query_run = mysqli_query($conn, $checkquery);

    if (mysqli_num_rows($query_run) > 0) {
        // echo "<p class='text-center'>Duplicate Data</p>";
?>
        <script>
            alert('You have already contacted us before');
            window.location.replace('index.php');
        </script>
        <?php
    } else {

        $iquery = "INSERT INTO userdata(name,email,mobile,symptoms,query)  VALUES ('$name','$email','$mobile','$chk','$query') ";
        $iquery_run = mysqli_query($conn, $iquery);

        if ($iquery_run) {
        ?>
            <script>
                alert("Thank You !, Will update you soon on your email");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("data not inserted");
            </script>
<?php
        }
    }
}




?>