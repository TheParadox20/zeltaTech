<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "assets/logo.svg" rel="icon" type="image/gif">
    <link rel="stylesheet" media="screen and (min-width: 601px)" href="styles/widescreen.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="styles/smallscreen.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="styles/mediumscreen.css">
    <title>Zeltatech</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/c081277f67.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php require_once 'nav.php' ?>
  </header>
    <main>
        <section id="landingPage">
            <div class="landingTitle">
                <div style="flex-grow: 2;">
                    <h1 id="Title">Handcrafting a digital realm</h1><br>
                    <p>A one platform solution to all your digital needs, we are here to help you execute your most ambitious projects to perfection by leveraging the power of technology. A dedicated team of experts combined with the best that technology has to offer, we bring you the best of both worlds.</p>
                </div>
                <div>
                    <button id="callButton"> <span id="callButtonText">Schedule a Call</span> <img src="assets/rightArrow.svg"> </button>
                </div>
            </div>
            <div class="landingImage">
                <img src="assets/alpha.svg">
            </div>
        </section>
        <section id="whoWeAre">
            <h1 id="sectionTitle">Who we are</h1>
            <p id="speech">From graphics, content, and websites, to advertising and real time communication, we give due importance to every element forming a part of your holistic digital identity. We strive to build robust digital platforms that drive growth, solve problems, and leave an impact</p>
            <img class="sectionImage" src="assets/images/bannerImage.png" alt="" srcset="">
            <div class="identity">
                <div>
                    <img src="assets/fingerprint.svg" class="img-fluid">
                    <h2>Branding & Identity</h2>
                    <p>With creativity and consistency at the core of our approach, we take care of all your digital branding needs from scratch</p>
                </div>
                <div>
                    <img src="assets/coding.svg" class="img-fluid">
                    <h2>Design & Development</h2>
                    <p>No form of media leaves an impact as strong as visuals do. We work towards building strong designs created to catch eyes</p>
                </div>
                <div>
                    <img src="assets/dashboard.svg" class="img-fluid">
                    <h2>Digital Marketing</h2>
                    <p>With innovation and analytics at the forefront, we create data-driven strategies to push your growth beyond set targets and stand out in the web world as a market leader.</p>
                </div>
            </div>
        </section>
        <section id="services">
            <hr>
            <ul>
                <li> <img src="assets/images/maskGroup.png" alt=""> </li>
                <li>
                    <h1>We create world-class digital products, web design, and branding.</h1>
                    <p>
                        <span id="serviceSpeech">We work endlessly towards ensuring that our design and branding solutions do justice to the brilliant projects we work with.</span>
                        <a href="#">Learn more</a>
                    </p>
                    </li>
            </ul>
            <hr id="scrollServices">
        </section>
        <section class="interchange">
            <h1>Get a full product development partner for your startup</h1>
            <p>With our dedicated efforts and technical expertise, We serve as an extended arm to your business constantly keeping up with the dynamic needs of your organisation</p>
        </section>
        <section id="listHolder">
            <div class="serviceList">
                <div>
                    <img src="assets/icons/dollar.svg" alt="">
                    <h3>New product development strategy</h3>
                    <p>Build robust products effectively with the most optimal use of resources at hand.</p>
                </div>
                <div>
                    <img src="assets/icons/graph.svg" alt="">
                    <h3>Blockchain development</h3>
                    <p>Take your business to greater heights with the unimaginable speed of blockchain</p>
                </div>
                <div>
                    <img src="assets/icons/idea.svg" alt="">
                    <h3>FinTech Software Development</h3>
                    <p>Construct reliable fintech softwares by leveraging our technical expertise</p>
                </div>
                <div>
                    <img src="assets/icons/puzzle.svg" alt="">
                    <h3>App Integration</h3>
                    <p>Expedite your growth with our smooth and swift app integration services.</p>
                </div>
                <div>
                    <img src="assets/icons/message.svg" alt="">
                    <h3>Trading Platform Software Development</h3>
                    <p>Offer your audience the best user experience and the simplest trading platform with us.</p>
                </div>
                <div>
                    <img src="assets/icons/bell.svg" alt="">
                    <h3>E-commerce Software Development</h3>
                    <p>With lots of unique blocks you can easily create a page without coding with Appmax easily.</p>
                </div>
            </div>
            <div id="scrollPartners"></div>
        </section>
        <section id="partners">
            <h1>Our Partners</h1>
            <p>We are honoured to be working with the revolutionary companies paving the way forward for a transformative, decentralised future.</p>
            <ul>
              <li><img src="assets/images/image1.png" alt=""></li>
              <li><img src="assets/images/image2.png" alt=""></li>
              <li><img src="assets/images/image3.png" alt=""></li>
              <li><img src="assets/images/image4.png" alt=""></li>
            </ul>
            <div id="scrollTeam"></div>
          </section>
          <section id="team">
            <h1>Meet Our Team</h1>
            <p>We have an outstanding team of developers, designers and creators who constantly work towards making our clients happy.</p>
            <div class="container">
                <div class="row" id="gallary">
                    <div id="employee" class="col-md-3"> <div><img src="assets/images/teamMember.png" alt=""></div> <div id="name">Ayush Khetan</div> <div class="role">Co-founder and CEO</div></div>
                    <div id="employee" class="col-md-3"> <div><img src="assets/images/teamMember.png" alt=""></div> <div id="name">Mudit Grover</div> <div class="role">CTO</div></div>
                    <div id="employee" class="col-md-3"> <div><img src="assets/images/teamMember.png" alt=""></div> <div id="name">Karan Sharma</div> <div class="role">COO</div></div>
                    <div id="employee" class="col-md-3"> <div><img src="assets/images/teamMember.png" alt=""></div> <div id="name">Raunak Agrawal</div> <div class="role">CMO</div></div>
                </div>
            </div>
          </section>
          <section id="contactUs">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p id="introText">Ready to up your game?</p>
                  <p id="followUp">Let us know and we’ll tell you how.</p>
                  <p id="emailLink"><a href="mailto: hello@zeltatech.com">hello@zeltatech.com</a></p>
                </div>
                <div class="col-md-6">
                    <form action="sec.php" method="post">
                        <label for="name">Name *</label><br>
                        <input type="text" id="name" name="name" placeholder="your full name"><br>
                        <label for="email">Email *</label><br>
                        <input type="email" id="email" name="email" placeholder="your email"><br>
                        <label for="captcha">What is 7+5 *</label><br>
                        <input type="text" id="captcha" name="lname" placeholder="answer"><br>
                        <label for="query">How can we help with your project?</label><br>
                        <textarea name="message" rows="7" cols="30" id="message" placeholder="Tell us about your project"></textarea>
                        <button type="submit" name="submit" id="submit">Send Message</button>
                      </form>
                </div>
              </div>
            </div>
          </section>
          <?php require 'preF.php'?>
    </main>
    <?php require 'footer.php' ?>
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