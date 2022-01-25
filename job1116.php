<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career details</title>
    <link href = "assets/logo.svg" rel="icon" type="image/gif">
    <link rel="stylesheet" media="screen and (min-width: 601px)" href="styles/cdetailswide.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="styles/cdetaismall.css">
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
            <h2>Career Details</h2>
            <p>Join the Zelta family</p>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-no-margin">
                    <div id="left">
                    <h3>Application Process</h3>
                    <ol>
                        <li>1. Download Application</li>
                        <div>
                            <img src="assets/pdf.svg" alt="" srcset=""> <a href="">Download.pdf</a>
                        </div>
                        <br>
                        <div>
                            <img src="assets/doc.svg" alt="" srcset=""> <a href="">Download.doc</a>
                        </div>
                        <li>2. Fill information</li>
                        <li>3. Send Back to Us</li>
                    </ol>
                    </div>
                </div>
                <div class="col-md-8 col-no-margin" id="right">
                    <h1>Unity Developer</h1>
                    <p>
                        ZeltaTech is looking for a Unity Developer to join our IT team! As a Unity or Unity3D Developer at our company, you will be responsible for implementing game functionality translating design ideas, concepts, and requirements into a functional and engaging game
                        <br><br>
                        If you want to explore the wide range of Unity applications while contributing to the creation of cutting edge technologies, we are looking for you!
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>Plan and implement game functionality</li>
                        <li>Transform design specification into functional games</li>
                        <li>Communicate with other team members</li>
                        <li>Establish effective strategy and development pipeline</li>
                        <li>Design, build, and maintain efficient, reusable, and reliable code</li>
                        <li>Ensure the best performance, quality, and responsiveness of applications and games</li>
                        <li>Identify process and application bottlenecks and bugs</li>
                        <li>Offer and implement solutions in a timely manner</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>3 years of experience as Unity or Unity3D Developer</li>
                        <li>Excellent knowledge of Unity</li>
                        <li>Experience with scripting, textures, animation, GUI</li>
                        <li>styles, and user session management</li>
                        <li>3 years of experience with game physics</li>
                        <li>3 years of experience with mobile and console game development</li>
                        <li>3 years of experience in optimizing memory and space usage</li>
                        <li>3 years of experience with 3D</li>
                        <li>3 years of experience with a well-known mobile title or AAA titles</li>
                        <li>Constantly learn and stay in touch with evolving game standards</li>
                        <li>3 years of experience in implementing automated testing platforms and unit tests</li>
                        <li>Proficient knowledge of code versioning tools Git</li>
                        <li>Critical thinker and problem-solving skills</li>
                        <li>Team player</li>
                    </ul>
                    <a href="#contactUs"><button id="callButton"> <span id="callButtonText">Apply Now</span></button></a>
                </div>
            </div>
        </div>
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