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
                    <h1>Financial Department Manager</h1>
                    <p>
                        We are looking for a reliable Financial Manager that will analyze every day financial activities and subsequently provide advice and guidance to upper management on future financial plans.
                        <br><br>
                        The goal is to enable the company’s leaders to make sound business decisions and meet the company’s objectives.
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>Assist with response to inquiries, providing data quickly and accurately, using mostly sql, but also excel and other tools such as Tableau</li>
                        <li>Provide financial reports and interpret financial information to managerial staff while recommending further courses of action.</li>
                        <li>Analyze costs, pricing, variable contributions, sales results and the company’s actual performance compared to the business plans.</li>
                        <li>Deep data analysis both on the supply and demand side to provide a clear understanding on the marketplace performance at different levels.</li>
                        <li>Oversee operations of the finance department, set goals and objectives, and design a framework for these to be met.</li>
                        <li>Assist with the production of reports, and gather external data to have a better understanding on our performance vs the industry.</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>Proven experience as a Financial Manager.</li>
                        <li>Bachelor of Science degree in Business Informatics, Information Systems, Business Administration or related field.</li>
                        <li>Expertise in SQL and experience with large databases and raw data, including the ability to write queries against large warehouses.</li>
                        <li>Extensive understanding of financial trends both within the company and general market .</li>
                        <li>Ability to work proactively and result driven: always trying to learn that extra detail that can help you take the most accurate decision.</li>
                        <li>Strong spoken and written English is required.  Spanish and Italian knowledge would be a plus.</li>
                    </ul>
                    <a href="https://forms.gle/T27V53PYM1bAmdEi8"><button id="callButton"> <span id="callButtonText">Apply Now</span></button></a>
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