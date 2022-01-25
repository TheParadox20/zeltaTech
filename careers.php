<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link href = "assets/logo.svg" rel="icon" type="image/gif">
    <link rel="stylesheet" media="screen and (min-width: 601px)" href="styles/careerswide.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="styles/csmall.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="styles/mediumscreen.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/c081277f67.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include_once 'nav.php' ?>
    </header>
    <main>
         <section id="intro">
            <h2>Careers</h2>
            <p>Join the Zelta family</p>
        </section>
        <section id="landingPage">
            <div class="landingTitle">
                <div style="flex-grow: 2;">
                    <div id="alphaT">Building your future</div>
                    <h1 id="Title">We are hiring</h1>
                    <p>Here at Zeltatech, we strive to make palpable changes to the everyday lives of people. We believe financial freedom is a human right and aim to make that a reality. Join our cause and make a difference!</p>
                    <a href="#contactUs"><button id="callButton"> <span id="callButtonText">Apply Now</span></button></a>
                </div>
            </div>
            <div class="landingImage">
                <img src="assets/images/point.png">
                <img src="assets/images/dots.png" id="dots">
            </div>
        </section>
        <section id="positions">
            <h1>Open Positions</h1>
            <p id="positionsSpeech">Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p>
            <ul>
                <a href="job1110.php">
                    <li>
                        <h3>Full Stack Javascript Developer</h3> <!-- job id 1110 -->
                        <p>Full Time, aipur, Rajasthan , India</p>
                        <!-- <div id="arrow"><img src="assets/arrowBlack.svg"></div> -->
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1111.php">
                    <li>
                        <h3>PR & Social Media Manager</h3> <!-- job id 1111 -->
                        <p>Remote, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1112.php">
                    <li>
                        <h3>Product Manager</h3> <!-- job id 1112 -->
                        <p>Full Time, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1113.php">
                    <li>
                        <h3>Solidity Developer</h3> <!-- job id 1113 -->
                        <p>Full time, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1114.php">
                    <li>
                        <h3>Systems Administrator</h3> <!-- job id 1114 -->
                        <p>Full time, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1115.php">
                    <li>
                        <h3>UI/UX Designer</h3> <!-- job id 1115 -->
                        <p>Full time, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
                <a href="job1116.php">
                    <li>
                        <h3>Unity Developer</h3> <!-- job id 1116 -->
                        <p>Full time, aipur, Rajasthan , India</p>
                        <img src="assets/arrowBlack.svg" id="arrow">
                    </li>
                </a>
            </ul>
        </section>
    </main>
    <?php include_once 'preF.php' ?>
    <?php include_once 'footer.php' ?>
    <!-- javascript -->
    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>