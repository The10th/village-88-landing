<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheets/normalize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./stylesheets/bootstrap.min.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="./stylesheets/style.css" media="screen" charset="utf-8">
    <title>Village88 Studios</title>
  </head>
  <body>
    <div class='container-fluid'>
      <nav class='navbar'>
        <img height='40' width='250' src="./img/tech_logo/tech_lab.png" alt="village 88 techlab web development studio" />
        <h3 class='arrow-msg'>Get a Quote</h3>
      </nav>
      <div class='jumbotron indextron'>
        <div class='row'>
          <div class='col-md-7 col-sm-12 col-xs-12'>
            <div class='banner'>
              <h1> <span>Four</span> Weeks, <span>Two</span> Developers</h1>
              <h1 align='center'> One <span>Perfect</span> Fit<span>.</span></h1>
              <h3><span>S</span>ilicon <span>V</span>alley based development studio specializing in<span>:</span><br> prototyping, consultation, development, and design<span>.</span></h3>
            </div>
          </div>
          <div class='col-md-5 col-sm-12 col-xs-12'>
            <form action="process.php" method="post">
              <div id='quote_form' class='contact'>
                <i class="fa fa-reply fa-5x arrow-icon"></i>
                <div class='form-group'>
                  <label for="name">First <span>&amp;</span> Last Name</label>
                  <input class='form-control' type="text" name="name" placeholder='ex. John Smith'>
                  <label for="name">Contact Phone Number</label>
                  <input class='form-control' type="tel" name="phone_number" placeholder='(###) ###-####'>
                  <label for="email">Email</label>
                  <input class='form-control'  type="text" name="email" placeholder='example@techLab.org'>
                  <label for="company_name">Company Name</label>
                  <input class='form-control' type="text" name="company_name"  placeholder='ex. Massive Dynamic'>
                  <label for="budget">Approx. Project Budget</label>
                  <select class='form-control' name="budget">
                    <option selected disabled>select approx. budget</option>
                    <option>less than $10,000</option>
                    <option>from $10,000 to $30,000</option>
                    <option>from $30,000 to $60,000</option>
                    <option>from $30,000 to $60,000</option>
                    <option>from $60,000 to $100,000</option>
                    <option>from $30,000 to $60,000</option>
                    <option>from $100,000 to $250,000</option>
                  </select>
                  <label for="company_name">Company Size</label>
                  <select class='form-control' name="company_size">
                    <option selected disabled>select company size</option>
                    <option>1 - 10 employees</option>
                    <option>10 - 25 employees</option>
                    <option>25 + employees</option>
                  </select>
                  <label for="description">Project Description</label>
                  <textarea name="description" class='form-control'></textarea>
                  <button class='pull-right' name="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <section id='process' class='container-fluid'>
        <h1 align='center'><i class='fa fa-chevron-left'></i><span>/</span>process<i class='fa fa-chevron-right'></i></h1>
        <div class='row'>
          <div class='col-md-4'>
            <div class='process'>
              <div class='dotted'></div>
              <img src="./img/icons/meet.png" alt="meet_us" />
              <h3>Meet <span>&amp;</span> greet</h3>
              <p>
                A friendly meet &amp; greet with our expert engineers to discuss your goals, challenges, technology stack, and workflow. We place a firm emphasis on client satisfaction, and we want to ensure that our collaboration with you is a pixel perfect fit.</p>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='process'>
              <div class='dotted2'></div>
              <img src="./img/icons/plan.png" alt="plan" />
              <h3>Plan</h3>
              <p>
                Once we've learned more about your goals, work culture, and development needs, the true collaboration begins. Throughout the planning stage we will work with you to gain a deeper understanding of the product you want to build. Challenges will be addressed, clear lines of communication will be mapped, and work methodologies will be solidified.
              </p>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='process'>
              <img src="./img/icons/design.png" alt="design" />
              <h3>design <span>&amp;</span> develop</h3>
              <p>
                Throughout the design and development process we will maintain constant communication with your team to ensure that the product we build is exactly what you envisioned; line for line, pixel by pixel, function by function. Whether you have a code base that our engineers can elaborate on or if you want our engineers &amp; desingers to build the product from ground zero, we will work with you to ensure satisfaction.
              </p>
            </div>
          </div>
        </div>
        <div class='dottedV'></div>
        <div class='row'>
          <div class='col-md-4'></div>
          <div class='col-md-4'>
            <div class='process'>
              <div style='display:flex;'>
                <img src="./img/icons/check.png" alt="test" />
                <i class='fa fa-4x fa-refresh'></i>
                <img src="./img/icons/enhance.png" alt="enhance" />
              </div>
              <h3>test <span>&amp;</span> enhance</h3>
              <p>
                Building beautiful and functional products can be quite challenging, which is why we absolutely spend the necessary time to test, refactor, and enhance. As a rocket wouldn't leave the launchpad unless every single bolt were in place, nor should your product be launched without full rounds of testing.
              </p>
            </div>
          </div>
        </div>
        <div class='dottedV'></div>
        <div class='row'>
          <div class='col-md-4'></div>
          <div class='col-md-4'>
            <div style='margin-top:4%;' class='process'>
              <img src="./img/icons/launch.png" alt="launch" />
              <h3>launch</h3>
              <p>
                Once all of your needs have been met, and you are completely satisfied with the product, it is time to launch. We will make sure the code is clean &amp; modular, the designs are to your specification, and the product functions perfectly. The culmination of weeks of work is your product going live!
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id='projects' class='container-fluid' >
        <h1><i class='fa fa-chevron-left'><span>/</span></i>projects<i class='fa fa-chevron-right'></i></h1>
        <br>
        <div class='row'>
          <div class='col-md-12'>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="./img/sample1.jpg" alt="First slide">
                </div>
                <div class="item">
                  <img src="./img/sample1.jpg" alt="Second slide">
                </div>
                <div class="item">
                  <img src="./img/sample1.jpg" alt="Third slide">
                </div>
              </div>
              <a href="#carousel" class="left carousel-control" data-slide="prev">
                <i class="fa fa-5x fa-caret-left"></i>
              </a>
              <a href="#carousel" class="right carousel-control" data-slide="next">
                <i class="fa fa-5x fa-caret-right"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id='about' class='container-fluid'>
        <div class='row'>
          <div class='col-md-6'>
            <div class='col-md-11'>
              <div>
                <h1><span>About Us</span></h1>
                <p>Village88 techLabs a stealth innovation studio that is fully committed
                  to enabling entrepreneurs to fulfill
                  their product potential by creating
                  breakthrough web technology. We're passionate about elevating the goals of our clients to the next    level, as well as working together with our clients as one cohesive unit.</p>
                  <button class='btn btn-lg btn-quote'><a href="#quote_form">Get a Quote</a></button>
              </div>
            </div>
            <div class='col-md-1'>
              <div class='vbreak'></div>
            </div>
          </div>
          <div class='col-md-6'>
            <h1><span>Connect With Us</span></h1>
            <div align='center' style='margin-top:5%;'>
              <a href="#"><i class='fa fa-facebook fa-5x'></i></a>
              <a href="#"><i class='fa fa-twitter fa-5x'></i></a>
              <a href="#"><i class='fa fa-linkedin fa-5x'></i></a>
            </div>
          </div>
        </div>
      </section>
      <footer></footer>
    </div>
  </body>
  <script src='javascripts/jquery-2.1.1.min.js'></script>
  <script src='javascripts/carousel-bootstrap.js'> </script>
  <script src='javascripts/bootstrap.min.js'></script>
  <script src='javascripts/bootstrap.min.docs.js'></script>

</html>
