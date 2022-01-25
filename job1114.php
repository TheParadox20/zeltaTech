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
                    <h1>Systems Administrator</h1>
                    <p>
                        ZeltaTech is now hiring for a Systems Administrator who can join and optimize the efficiency of our hardware. If you feel that you are ready to take on an interesting and challenging journey to create a product, our eyes are on you!
                        <br><br>
                        As a System administrator, you will be responsible for the maintenance, configuration, and reliable operation of computer systems and servers. You will have to install hardware and software, and participate in research and development to continuously improve and keep up with the IT business needs of their organization
                        <br><br>
                        Additionally, you will also have to actively resolve problems and issues with computer and server systems to limit work disruptions within the company
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>Configuring and maintaining the networked computer system, including hardware, system software, and applications.</li>
                        <li>Ensuring data is stored securely and backed up regularly.</li>
                        <li>Diagnosing and resolving hardware, software, networking, and system issues when they arise</li>
                        <li>Replacing and upgrading defective or outdated components when necessary.</li>
                        <li>Monitoring system performance to ensure everything runs smoothly and securely.</li>
                        <li>Researching and recommending new approaches to improve the networked computer system</li>
                        <li>Providing technical support when requested</li>
                        <li>Documenting any processes which employees need to follow in order to successfully work within our computing system</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>Associate or Bachelor's degree in Computer Science, Information Technology, System Administration, or a closely related field, or equivalent experience required</li>
                        <li>3-5 years of database, network administration, or system administration experience</li>
                        <li>System administration and IT certifications in Linux, Microsoft, or other network related fields are a plus</li>
                        <li>Working knowledge of virtualization, VMWare, or equivalent</li>
                        <li>Strong knowledge of systems and networking software, hardware, and networking protocols</li>
                        <li>Experience with scripting and automation tools</li>
                        <li>A proven track record of developing and implementing IT strategy and plans</li>
                        <li>Strong knowledge of implementing and effectively developing helpdesk and IT operations best practices, including expert knowledge of security, storage, data protection, and disaster recovery protocols</li>
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