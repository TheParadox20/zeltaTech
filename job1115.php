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
                    <h1>UI/UX Designer</h1>
                    <p>
                        ZeltaTech is now hiring for a front end UI/UX designer who can let their creativity flow on a blank figma canvas, and turn our software into easy-to-use products for our clients. If you feel that you are ready to take on an interesting and challenging journey to create a product, our eyes are on you!
                        <br><br>
                        As a UI/UX Designer, your responsibilities will include gathering user requirements, designing graphic elements and building navigation components. To be successful in this role, you should have experience with design software and wireframe tools. If you also have a portfolio of professional design projects that includes work with web/mobile applications, we’d like to have a chat with you                        
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>Gather and evaluate user requirements in collaboration with product managers and engineers</li>
                        <li>Illustrate design ideas using storyboards, process flows and sitemaps</li>
                        <li>Design graphic user interface elements, like menus, tabs and widgets</li>
                        <li>Build page navigation buttons and search fields</li>
                        <li>Develop UI mockups and prototypes that clearly illustrate how sites function and look like</li>
                        <li>Create original graphic designs (e.g. images, sketches and tables)</li>
                        <li>Prepare and present rough drafts to internal teams and key stakeholders</li>
                        <li>Identify and troubleshoot UX problems (e.g. responsiveness)</li>
                        <li>Conduct layout adjustments based on user feedback</li>
                        <li>Adhere to style standards on fonts, colors and images</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>Proven work experience of more than 3 years as a UI/UX Designer or similar role</li>
                        <li>Portfolio of design projects</li>
                        <li>Knowledge of wireframe tools (e.g. Wireframe.cc and InVision)</li>
                        <li>Up-to-date knowledge of design software like Adobe Illustrator and Photoshop</li>
                        <li>Team spirit; strong communication skills to collaborate with various stakeholders</li>
                        <li>Good time-management skills</li>
                        <li>BSc in Design, Computer Science or relevant field</li>
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