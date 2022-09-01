<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gautam Kumar | Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css.bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="laptopmode.css">
    <link rel="stylesheet" href="tabletmode.css">
    <link rel="stylesheet" href="mobilemode.css">
    <script src="app.js"></script>
    <link rel="icon" type="image/x-icon" href="img/profile_photo.jpeg">
</head>

<body>


    <?php include 'header.php'; ?>



    <section>
        <div class="container main-section">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <img src="img/profile_photo.jpeg" alt="" class="img-responsive">
                    <p class="hey_there">Hey There,</p>
                    <p class="iamgautam">I'm Gautam.</p>
                    <p class="iamfullpara">I,m a full stack developer with a passion for everything front-end. Welcome
                        to my corner of the internet. I,m glad you're here!</p>
                </div>
            </div>
            <button class="resumebtn"><a onclick="openTab(this)" href="#" name="PDF/codewithgautamresume.pdf">Check out
                    my CV</a></button>
            <script type="text/javascript">
            function openTab(th) {
                window.open(th.name, '_blank');
            }
            </script>
        </div>
    </section>
    <!-- <svg class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00cba9" fill-opacity="1"
            d="M0,128L60,144C120,160,240,192,360,202.7C480,213,600,203,720,181.3C840,160,960,128,1080,101.3C1200,75,1320,53,1380,42.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00cba9" fill-opacity="1"
            d="M0,288L80,261.3C160,235,320,181,480,154.7C640,128,800,128,960,138.7C1120,149,1280,171,1360,181.3L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg> -->

    <!-- <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div> -->


    <?php include 'footer.php'; ?>


</body>

</html>