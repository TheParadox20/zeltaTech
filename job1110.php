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
                    <h1>Full Stack Javascript Developer</h1>
                    <p>
                        We are looking for a highly skilled computer programmer who is comfortable with both front and back end programming.
                        <br><br>
                        As a full stack developer, you will be responsible for developing and designing front end web architecture, ensuring the responsiveness of applications, and working alongside graphic designers for web design features, among other duties.
                        <br><br>
                        You will also be required to see out a project from conception to final product, requiring good organizational skills and attention to detail.
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>Developing front end website architecture.</li>
                        <li>Designing user interactions on web pages</li>
                        <li> Developing back-end website applications.</li>
                        <li>Creating servers and databases for functionality.</li>
                        <li>Ensuring cross-platform optimization for mobile phones.</li>
                        <li>Ensuring responsiveness of applications.</li>
                        <li>Working alongside graphic designers for web design features</li>
                        <li>Seeing through a project from conception to finished product.</li>
                        <li>Designing and developing APIs</li>
                        <li>Meeting both technical and consumer needs</li>
                        <li>Staying abreast of developments in web applications and programming languages</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>Relevant work experience of 3+ years along with a portfolio of the work that you have done before.</li>
                        <li>Strong organizational and project management skills</li>
                        <li>Proficiency with fundamental front-end languages such as HTML, CSS, and JavaScript</li>
                        <li>Familiarity with JavaScript frameworks such as Angular JS, React, and Amber</li>
                        <li>Proficiency with server-side languages such as Python, Ruby, Java, PHP, and .Net</li>
                        <li>Familiarity with database technology such as MySQL, Oracle, and MongoDB</li>
                        <li>Excellent verbal communication skills.</li>
                        <li>Good problem-solving skills.</li>
                        <li>Attention to detail</li>
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