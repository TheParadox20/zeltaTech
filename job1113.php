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
            <div class="row justify-content-center">  
                <div class="col-md-10 col-no-margin" id="right">
                    <h1>Solidity Developer</h1>
                    <p>
                        ZeltaTech is looking for a dynamic solidity developer, and if you are willing to turn your coding expertise into a full time job, we are looking for you.
                        <br><br>
                        As a solidity developer you will have to use the object-oriented Solidity language to build and deploy smart contracts on Ethereum based applications. Solidity is the native language of Ethereum which gives enterprises a complete advantage of launching projects.
                    </p>
                    <h3>Responsibilities</h3>
                    <ul>
                        <li>High quality and well tested Solidity code, following the latest design and development patterns</li>
                        <li>Deep knowledge of smart contracts</li>
                        <li>Be able to design tokenomics and understand the minting process behind an NFT project</li>
                        <li>Research, design, scope and estimate what you need to do. Collaborate and communicate with a team using Slack and Asana.</li>
                        <li>Constantly improve yourself by keeping up to date with the latest technologies trends.</li>
                        <li>Intermediate level of English (B1+). Strong written, verbal, and analytical skills are necessary.</li>
                        <li>Possess a stable internet connection.</li>
                    </ul>
                    <h3>Requirements</h3>
                    <ul>
                        <li>Familiar with the open source tool Remix IDE.</li>
                        <li>Experience in DeFi.</li>
                        <li>Understanding of low level parts of Ethereum blockchain, specifically.</li>
                        <li>Understanding how Ethereum stores state and related data structures. EVM knowledge -opcodes etc.</li>
                        <li>Solidity and knowledge of ABI (eg. variable mapping to storage slots).</li>
                        <li>Experience as a full stack developer.</li>
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