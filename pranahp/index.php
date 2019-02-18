<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
      gtag('config', 'UA-125314689-2');
    </script>
  <!-- Basic-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>A guy Who loves code</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio">
  <meta name="author" content="beshleyua">
  <!-- Load Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" attr>
  <!-- Load CSS-->
  <link rel="stylesheet" href="basic.css">
  <link rel="stylesheet" href="layout.css">
  <link rel="stylesheet" href="blog.css">
  <link rel="stylesheet" href="magnific-popup.css">
  <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="gradient.css">
  <link rel="stylesheet" href="green.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <!--if lt IE 9
    script(src='http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js')
    script(src='http://html5shim.googlecode.com/svn/trunk/html5.js')
    -->
  <!-- Favicons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
</head>

<body>
  <?php
  include 'config.php';

  function get_CURL($url)
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
  }
  
  $result = get_CURL('https://api.instagram.com/v1/users/self/?access_token=788884151.ea3923f.fb96ee66bf0140ccb032b5d0ec13b1bb');
  $result_images = get_CURL('https://api.instagram.com/v1/users/self/media/recent/?access_token=788884151.ea3923f.fb96ee66bf0140ccb032b5d0ec13b1bb');

  $profile_picture = $result['data']['profile_picture'];
  $user_name = $result['data']['username'];
  $status = $result['data']['full_name'];
  $bio = $result['data']['bio'];
  $data = $result_images['data'];
  ?>
  <!-- preloader-->
  <div class="preloader">
    <div class="centrize full-width">
      <div class="vertical-center">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- background-->
  <div id="particles-js" style='background-image:url("43117568415_2b33402203_k.jpg")'> </div>


  <!-- Container-->
  <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
    <!-- Header-->
    <header class="header">
      <!-- menu-->
      <div class="top-menu">
        <ul>
          <li class="active"><a href="#about-card">
              <ion-icon name="person"></ion-icon><span class="link">About</span>
            </a></li>
          <li><a href="#resume-card"><span class="icon ion-android-list"></span><span class="link">Resume</span></a></li>
          <li><a href="#games-card"><span class="icon ion-android-list"></span><span class="link">Instagram</span></a></li>
          <!-- <li><a href="#works-card"><span class="icon ion-paintbrush"></span><span class="link">Works</span></a></li> -->
          <!-- <li><a href="#blog-card"><span class="icon ion-chatbox-working"></span><span class="link">Blog</span></a></li> -->
          <li><a href="#contacts-card"><span class="icon ion-at"></span><span class="link">Contact</span></a></li>
        </ul>
      </div>
    </header>
    <!-- Card - Started-->
    <div class="card-started" id="home-card">
      <!-- Profile-->
      <div class="profile">
        <!-- profile image-->
        <div class="slide" style="background-image: url(coding.jpg);"></div>
        <!-- profile photo-->
        <div class="image"><img src="photo_2019-01-17_15-43-14.jpg" alt=""></div>
        <!-- profile titles-->
        <div class="title">Prana Apsara Wijaya</div>
        <div class="subtitle">Front End Dev</div>
        <!-- profile socials-->
        <div class="social">
          <a target="_blank" href="https://github.com/pranahonk">
            <span class="fab fa-github"></i></a>
          <a target="_blank" href="https://codepen.io/yolo001/">
            <span class="fab fa-codepen"></span>
          </a><a target="_blank" href="https://www.linkedin.com/in/prana-apsara-wijaya-311859a1/">
            <span class="fab fa-linkedin"></span></a>
        </div>
        <!-- profile buttons-->
        <div class="lnks">
          </span></a><a class="lnk discover" href="#"><span class="text">Contact Me</span><i class="fas fa-arrow-right"></i></a></div>
      </div>
    </div>
    <!-- Card - About-->
    <div class="card-inner animated active" id="about-card">
      <div class="card-wrap">
        <!-- About-->
        <div class="content about">
          <!-- title-->
          <div class="title">About Me</div>
          <!-- content-->
          <div class="row">
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="text-box">
                <p>
                  I am #prana, front End based on Jakarta, Indonesia. I am also tech enthusiast. write down code in
                  computer is
                  my hobies, but also sometimes make me dissapointed when the code doens't work, but this is the
                </p>
                <p id="readmore">
                  challanges to
                  solve unwork code is not easy. logical thinking, patience, careful, and never quit all those needed
                  to be a
                  developer.
                  on the other hand learn a new things that i never learned before is my pleasure, i also love travel
                  to another
                  place that i have never seen before. this is how i can improve myself to be better.
                </p>
                <a href="#" id="more">Read More</a>
              </div>
            </div>
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="info-list">
                <ul>
                  <li><strong>Age </strong><span>23</span></li>
                  <li><strong>Residence </strong><span>ID</span></li>
                  <li><strong>Freelance </strong><span>Available</span></li>
                  <li><strong>Address </strong><span>JKT, ID</span></li>
                </ul>
              </div>
            </div>
            <div class="clear border-line-h"></div>
          </div>
        </div>
        <!-- Services-->
        <div class="content services">
          <!-- title-->
          <div class="title">My Services</div>
          <!-- content-->
          <div class="row service-items border-line-v">
            <!-- service item-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
              <div class="service-item">
                <div class="icon">
                  <box-icon name="code"></box-icon>
                </div>
                <div class="name">Web Development</div>
                <p>Modern with responsive mobile-ready website. You can get what the best website for.</p>
              </div>
            </div>
            <!-- service item-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
              <div class="service-item">
                <div class="icon">
                  <box-icon name="globe"></box-icon>
                </div>
                <div class="name">Web Maintaining</div>
                <p>Maintain website to the most updated technologies and design</p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="row service-items border-line-v">
            <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
              <div class="service-item">
                <div class="icon">
                  <box-icon name="mobile"></box-icon>
                </div>
                <div class="name">Web Responsive</div>
                <p>Using most sophicated technologies. Responsive design same as your expectation </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Price Tables-->
        <div class="content pricing">
          <!-- title-->
          <!-- <div class="title">Pricing</div>-->
          <!-- content-->
          <div class="row pricing-items">
            <!-- pricing item-->
            <!--
              <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="pricing-item">
              <div class="icon"><i class="ion ion-speedometer speed-basic"></i></div>
              <div class="name">Basic</div>
              <div class="amount">
              <span class="dollar">$</span>
              <span class="number">22</span>
              <span class="period">hour</span>
              </div>
              <div class="feature-list">
              <ul>
              <li>Web Development</li>
              <li>Advetising</li>
              <li>Game Development</li>
              <li class="disable">Music Writing</li>
              <li class="disable">Photography <strong>new</strong></li>
              </ul>
              </div>
              <div class="lnks">
              <a href="#" class="lnk">
              <span class="text">Buy Basic</span>
              <i class="ion ion-speedometer speed-basic"></i>
              </a>
              </div>
              </div>
              </div>
              -->
            <!-- pricing item-->
            <!--
              <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="pricing-item">
              <div class="icon"><i class="ion ion-speedometer"></i></div>
              <div class="name">Pro</div>
              <div class="amount">
              <span class="dollar">$</span>
              <span class="number">48</span>
              <span class="period">hour</span>
              </div>
              <div class="feature-list">
              <ul>
              <li>Web Development</li>
              <li>Advetising</li>
              <li>Game Development</li>
              <li>Music Writing</li>
              <li>Photography <strong>new</strong></li>
              </ul>
              </div>
              <div class="lnks">
              <a href="#" class="lnk">
              <span class="text">Buy Pro</span>
              <i class="ion ion-speedometer"></i>
              </a>
              </div>
              </div>
              </div>
              -->
            <div class="clear"></div>
          </div>
        </div>
        <!-- Fun Fact-->
        <div class="content fuct">
          <!-- title-->
          <div class="title">Fun Fact</div>
          <!-- content-->
          <div class="row fuct-items">
            <!-- fuct item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="fuct-item">
                <div class="icon"><span class="ion ion-disc"></span></div>
                <div class="name">80 Albumes Listened</div>
              </div>
            </div>
            <!-- fuct item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="fuct-item">
                <div class="icon"><span class="ion ion-trophy"></span></div>
                <div class="name">15 Awards Won</div>
              </div>
            </div>
            <!-- fuct item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="fuct-item">
                <div class="icon"><span class="ion ion-coffee"></span></div>
                <div class="name">1 000 Cups of coffee</div>
              </div>
            </div>
            <!-- fuct item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="fuct-item">
                <div class="icon"><span class="ion ion-flag"></span></div>
                <div class="name">10 Countries Visited</div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <!--Clients
          -->
        <div class="content clients">
          <!-- title-->
          <div class="title">Clients</div>
          <!-- content-->
          <div class="row client-items">
            <!-- client item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="client-item">
                <div class="image"><a target="_blank" href="https://www.google.com/"><img src="https://beshley.com/vcard/images/clients/client_1.png"
                      alt=""></a></div>
              </div>
            </div>
            <!-- client item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="client-item">
                <div class="image"><a target="_blank" href="https://www.google.com/"><img src="https://beshley.com/vcard/images/clients/client_2.png"
                      alt=""></a></div>
              </div>
            </div>
            <!-- client item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="client-item">
                <div class="image"><a target="_blank" href="https://www.google.com/"><img src="https://beshley.com/vcard/images/clients/client_3.png"
                      alt=""></a></div>
              </div>
            </div>
            <!-- client item-->
            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
              <div class="client-item">
                <div class="image"><a target="_blank" href="https://www.google.com/"><img src="https://beshley.com/vcard/images/clients/client_4.png"
                      alt=""></a></div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card - Resume-->
    <div class="card-inner" id="resume-card">
      <div class="card-wrap">
        <!-- Resume-->
        <div class="content resume">
          <!-- title-->
          <div class="title">Resume</div>
          <!-- content-->
          <div class="row">
            <!-- experience-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="resume-title border-line-h">
                <div class="icon">
                  <box-icon name="briefcase-alt"></box-icon>
                </div>
                <div class="name">Experience</div>
              </div>
              <div class="resume-items">
                <div class="resume-item border-line-h active">
                  <div class="date">2018, Nov - Present</div>
                  <div class="name">Front End Dev</div>
                  <div class="company"><a href="https://www.indoesports.com/">www.indoesports.com</a></div>
                  <p>Build a website from zero and then maintaning website</p>
                </div>
                <div class="resume-item border-line-h">
                  <div class="date">2018,Feb - 2018,Sep</div>
                  <div class="name">Staff Operation</div>
                  <div class="company">OKLIK</div>
                  <p>Buying office supplies and recruiting talent.</p>
                </div>
                <div class="resume-item">
                  <div class="date">2017,Sep - 2018,Feb</div>
                  <div class="name">Junior Front End</div>
                  <div class="company">PT. Brilian Muda Indonesia</div>
                  <p>Optimize website performance using latest technology.</p>
                </div>
              </div>
            </div>
            <!-- education-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="resume-title border-line-h">
                <div class="icon">
                  <box-icon name="book-open"></box-icon>
                </div>
                <div class="name">Education</div>
              </div>
              <div class="resume-items">
                <div class="resume-item border-line-h">
                  <div class="date">2014 - 2017</div>
                  <div class="name">Bina Sarana Informatika</div>
                  <div class="company">JKT</div>
                  <p>Diploma of Management Information Systems</p>
                </div>
                <div class="resume-item border-line-h">
                  <div class="date">2011 - 2014</div>
                  <div class="name">High School</div>
                  <div class="company">JKT</div>
                  <p>Tri Ratna Vocational High School</p>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <!-- Informal Education-->
        <div class="content skills">
          <div class="row">
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="resume-title border-line-h">
                <div class="icon">
                  <box-icon name="book-open"></box-icon>
                </div>
                <div class="name">Informal Edu.</div>
              </div>
              <div class="resume-items">
                <div class="resume-item border-line-h">
                  <div class="date">2018 - 2018</div>
                  <div class="name">WebHozz</div>
                  <div class="company">JKT</div>
                  <p>HTML, CSS, Jquery, Bootstrap</p>
                </div>
                <div class="resume-item border-line-h">
                  <div class="date">2018 - 2018</div>
                  <div class="name">Sekolah Koding</div>
                  <div class="company">JKT</div>
                  <p>SCSS, Vue.js</p>
                </div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <!-- Skills-->
        <div class="content skills">
          <!-- title-->
          <div class="title">My Skills</div>
          <!-- content-->
          <div class="row">
            <!-- skill item-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="skills-list">
                <div class="skill-title border-line-h">Tech.</div>
                <ul>
                  <li class="border-line-h"><i class="fab fa-html5"></i>
                    <div class="name">HTML5</div>
                    <div class="progress">
                      <div class="percentage" style="width:90%;"></div>
                    </div>
                  </li>
                  <li class="border-line-h"><i class="fab fa-css3"></i>
                    <div class="name">CSS 3</div>
                    <div class="progress">
                      <div class="percentage" style="width:90%;"></div>
                    </div>
                  </li>
                  <li class="border-line-h"><i class="fab fa-js"></i>
                    <div class="name">Java Script</div>
                    <div class="progress">
                      <div class="percentage" style="width:80%;"></div>
                    </div>
                  </li>
                  <li><i class="devicon-git-plain colored"></i>
                    <div class="name">Git</div>
                    <div class="progress">
                      <div class="percentage" style="width:75%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- skill item-->
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="skills-list">
                <div class="skill-title border-line-h">Preprocessors</div>
                <ul>
                  <li class="border-line-h"><i class="devicon-sass-original colored"></i>
                    <div class="name">SASS</div>
                    <div class="progress">
                      <div class="percentage" style="width:50%;"></div>
                    </div>
                  </li>
                  <li class="border-line-h">
                    <div class="name">Pug/Jade</div>
                    <div class="progress">
                      <div class="percentage" style="width:60%;"></div>
                    </div>
                  </li>
                  <li class="border-line-h"><i class="devicon-less-plain-wordmark colored"></i>
                    <div class="name">LESS</div>
                    <div class="progress">
                      <div class="percentage" style="width:35%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="skills-list">
                <div class="skill-title border-line-h">Framework</div>
                <ul>
                  <li class="border-line-h"><i class="devicon-bootstrap-plain colored"></i>
                    <div class="name">Bootstrap</div>
                    <div class="progress">
                      <div class="percentage" style="width:80%;"></div>
                    </div>
                  </li>
                  <li class="border-line-h"><i class="devicon-react-original colored"></i>
                    <div class="name">React</div>
                    <div class="progress">
                      <div class="percentage" style="width:20%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
              <div class="skills-list">
                <div class="skill-title border-line-h">Libraries</div>
                <ul>
                  <li><i class="devicon-jquery-plain colored"></i>
                    <div class="name">Jquery</div>
                    <div class="progress">
                      <div class="percentage" style="width:85%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Card - Contacts-->
    <div class="card-inner Game" id="games-card">
      <div class="hello row">
        <div class="col col-t-3">
          <img src="<?php echo $profile_picture;
          ?>" alt="Profile Picture">

        </div>
        <div class="col col-t-3">
          <h5 class="title">
            <?php echo $status; ?>
          </h5>
          <h5>
            <?php echo $bio; ?>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col col-d-12">
          <div class="margin-2">
            <?php 
         foreach ($data as $row){
         
          ?>
            <img src="<?php echo $row['images']['thumbnail']['url']; ?>" alt="" srcset="">
            <?php
        }
        ?>
          </div>
        </div>
      </div>
    </div>


    <!-- Card - Contacts-->
    <div class="card-inner contacts" id="contacts-card">
      <div class="card-wrap">
        <!-- Conacts Info-->
        <div class="content contacts">
          <!-- title-->
          <div class="title">Get in Touch</div>
          <!-- content-->
          <div class="row">
            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
              <div class="map" id="map"></div>
              <div class="info-list">
                <ul>
                  <li><strong>
                      <box-icon name='map'></box-icon>
                    </strong><span>JKT, ID</span></li>
                  <li><strong><i class="fas fa-envelope-square"></i></strong><span>programmerbiasa@gmail.com</span>
                  </li>
                  <li><strong><i class="fab fa-linkedin-in"></i></strong><span>Prana Apsara Wijaya</span> </li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <!-- Contact Form-->
        <div class="content contacts">
          <!-- title-->
          <div class="title">Contact Form</div>
          <!-- content-->
          <div class="row">
            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
              <div class="contact_form">
                <form id="cform" method="post">
                  <div class="row">
                    <div class="col col-d-6 col-t-6 col-m-12">
                      <div class="group-val">
                        <input type="text" name="name" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col col-d-6 col-t-6 col-m-12">
                      <div class="group-val">
                        <input type="text" name="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col col-d-12 col-t-12 col-m-12">
                      <div class="group-val">
                        <textarea name="message" placeholder="Your Message"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="align-left"><a class="button" href="#" onclick="$('#cform').submit(); return false;"><span
                        class="text">Send Message</span><span class="arrow"></span></a></div>
                </form>
                <div class="alert-success">
                  <p>Thanks, your message is sent successfully.</p>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--jQuery Scripts-->
  <script src="jquery.min.js"></script>
  <script src="jquery.validate.js"></script>
  <script src="jquery.magnific-popup.js"></script>
  <script src="imagesloaded.pkgd.js"></script>
  <script src="masonry.pkgd.js"></script>
  <script src="masonry-filter.js"></script>
  <script src="jquery.slimscroll.js"></script>
  <script src="boxicons.js"></script>
  <script src="particles.min.js"></script>
  <script src="snake.js"></script>
  <script src="scripts.js"></script>
  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {
        lat: -6.149926,
        lng: 106.814902
      };
      // The map, centered at Uluru
      var map = new google.maps.Map(
        document.getElementById('map'), {
          zoom: 15,
          center: uluru,
          styles: [{
              "featureType": "administrative.country",
              "elementType": "all",
              "stylers": [{
                  "visibility": "on"
                },
                {
                  "color": "#ea09dc"
                },
                {
                  "lightness": "24"
                },
                {
                  "saturation": "79"
                },
                {
                  "weight": "0.01"
                }
              ]
            },
            {
              "featureType": "landscape",
              "elementType": "all",
              "stylers": [{
                  "visibility": "on"
                },
                {
                  "hue": "#00f8ff"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "all",
              "stylers": [{
                  "color": "#d84949"
                },
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "all",
              "stylers": [{
                "color": "#00f260"
              }]
            },
            {
              "featureType": "water",
              "elementType": "all",
              "stylers": [{
                "color": "#0575e6"
              }]
            }
          ]
        });
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyDJ3x-6vOD-WKd8RUEm4GpcKkCyUBN4mrk
&callback=initMap"></script>
</body>

</html>