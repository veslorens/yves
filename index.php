<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Yves</title>
    <meta name="author" content="Yves Lorenzo Yee">
    <meta name="description" content="Yves Lorenzo Yee - Personal Portfolio Website">
    <meta name="keywords" content="yves lorenzo yee, yves lorenzo, yves, lorenzo, yee, yaloviya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/uploads/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="public/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/themes/lumos/css/plugins.css">
    <link rel="stylesheet" href="public/themes/lumos/css/prettify.css">
    <link rel="stylesheet" href="public/themes/lumos/app.min.css">
    <link rel="stylesheet" href="public/themes/lumos/css/green.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
    <link href="style/type/fontello.css" rel="stylesheet">
    <link href="style/type/budicons.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="public/themes/lumos/css/custom-styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="full-layout">
    
    <div id="preloader">
      <div id="status">
        <div class="spinner"></div>
      </div>
    </div>

    <div class="body-wrapper">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
          <div class="navbar-brand text-center"> 
            <a href="/">
              <img src="public/uploads/images/logo.png" alt="" data-src="public/uploads/images/logo.png" data-ret="public/uploads/images/logo@2x.png" class="retina" />
            </a> 
          </div>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="current"><a href="#home" onclick="gotoSection('home')" class="hint--right" data-hint="Home"><i class="budicon-home-1"></i><span>Home</span></a></li>
            <li><a href="#portfolio" onclick="gotoSection('portfolio')" class="hint--right" data-hint="Projects"><i class="budicon-image"></i><span>Projects</span></a></li>
            <li><a href="#about" onclick="gotoSection('about')" class="hint--right" data-hint="Overview"><i class="budicon-author"></i><span>Overview</span></a></li>
            <li><a href="#skills" onclick="gotoSection('skills')" class="hint--right" data-hint="Skills"><i class="budicon-code"></i><span>Skills</span></a></li>
          </ul>
        </div>
      </nav>
      
      <section id="home" class="naked">
        <div class="fullscreenbanner-container revolution">
          <div class="fullscreenbanner">
            <ul>
              <li data-transition="fade"> 
                <img src="public/uploads/images/dummy.png" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="repeat">
                <h1 class="tp-caption caption large sfb" data-x="center" data-y="center" data-voffset="-25" data-speed="900" data-start="1000" data-endspeed="100" data-easing="Sine.easeOut">
                  Y<span class="wt-100">ves</span> 
                  L<span class="wt-100">orenzo</span> 
                  Y<span class="wt-100">ee</span>
                </h1>
                <div id="headline" class="tp-caption small tp-fade fadeout tp-resizeme" data-x="center" data-y="center" data-voffset="25" data-speed="100" data-start="1500" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.03" data-endelementdelay="0" data-endspeed="100" data-endeasing="Power1.easeOut">
                  IT Consultant &nbsp; & &nbsp; Full-Stack Web Developer
                </div>
                <div class="arrow smooth">
                  <a href="#portfolio" onclick="gotoSection('portfolio')">
                    <i class="icon-down-open-big"></i>
                  </a>
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
      </section>

      <div class="container">
        <section id="portfolio" class="portfolio">
          <div class="box">
            <h2 class="hr-mid section-title text-uppercase tx-lumos-2">Projects</h2>
            <div class="divide30"></div>
            <div id="filters-container" class="cbp-l-filters-alignRight pull-right"></div>
            <div class="clearfix"></div>
            <div id="grid-container" class="cbp-l-grid-masonry">
              <ul>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//unitynetwork.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-unitynetwork.png" alt="Unity Network"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Unity Network</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//impactinstrument.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-impactinstrument.png" alt="Impact Instrument"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Impact Instrument</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//ascendingprofitsystem.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-ascendingprofitsystem.png" alt="Ascending Profit System"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Ascending Profit System</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//gavagives.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-gava.png" alt="Gava"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Gava</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//insightspedia.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-insightspedia.png" alt="Insightspedia"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Insightspedia</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//philzter.ph" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-philzter.png" alt="Philzter"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Philzter</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//rocketpages.net" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-rocketpages.png" alt="Rocket Pages"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Rocket Pages</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//tracc-accounting.com" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-tracc.png" alt="Tracc"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Tracc</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
                <li class="cbp-item frame"> 
                  <a class="cbp-caption" href="//oorbook.net" target="_blank">
                    <div class="cbp-caption-defaultWrap"> <img src="public/uploads/images/base/desktop-oorbook.png" alt="Oorbook"> </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-title tx-lumos-2">Oorbook</div>
                          <hr class="border-lumos-2 border-5">
                        </div>
                      </div>
                    </div>
                  </a> 
                </li>
              </ul>
            </div>
          </div>
        </section>
        
        <section id="about">
          <div class="box">
            <h2 class="hr-mid section-title text-uppercase tx-lumos-2">Overview</h2>
            <div class="divide30"></div>
            <div class="row">
              <div class="col-md-5 col-md-push-7 col-sm-12">
                <figure class="frame">
                  <img src="public/uploads/images/base/about.jpg" alt="" class="img-thumbnail" />
                </figure>
              </div>
              <div class="col-md-7 col-md-pull-5 col-sm-12">
                <p class="lead">Full-Stack Spider at Web. "Jack of most trades, Master of some."</p>
                <p>When I was in college, I started creating systems written in Visual Basic, VB.Net and Java for our small thesis projects, case studies and other activities. Years after, as a graduating student, I created our final thesis project written in PHP and JavaScript. Apparently, one of the reasons why I chose to pursue Web Development and become a Professional Web Developer.</p>
                <p>I became a Web Developer Intern at i5 IT Solutions, and personally trained by the Senior Programmer to use methodologies such as OOP, MVC and in using a PHP Framework like Laravel. As a trainee, I was added in a team for developing a Social Media Website and as soon as I graduated, they absorbed me in the company to become the Lead Developer of the project.</p>
                <p>After a year, I shifted with another company, the Koodi Systems. Here, I was prepared to become a Full-Stack Web Developer. Accordingly, I could now handle back-end development, front-end development, application security and server management. I was working with multiple PHP-based projects (Laravel, Drupal and WordPress) and a one-man team at some times. The company also encouraged and inspired me to support and contribute to the IT Community, by participating as a volunteer and a resource speaker in technology events and conferences.</p>
                <p>Currently, I am an IT Consultant in Unitynet Corporation and most of the projects I am presently handling are based on PHP and WordPress technologies.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="skills">
          <div class="box">
            <h2 class="hr-mid section-title text-uppercase tx-lumos-2">Skills</h2>
            <div class="divide30"></div>
            <div class="services-1">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      <span class="label label-default label-lumos">PHP</span>
                      <span class="label label-default label-lumos">Laravel</span>
                      <span class="label label-default label-lumos">WordPress</span>
                      <span class="label label-default label-lumos">SQL</span>
                      <span class="label label-default label-lumos">JavaScript</span>
                      <span class="label label-default label-lumos">jQuery</span>
                      <span class="label label-default label-lumos">AJAX</span>
                      <span class="label label-default label-lumos">JSON</span>
                      <span class="label label-default label-lumos">Bash Shell Scripting</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      <span class="label label-default label-lumos">MVC</span>
                      <span class="label label-default label-lumos">OOP</span>
                      <span class="label label-default label-lumos">Repository Pattern</span>
                      <span class="label label-default label-lumos">Modular Pattern</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      <span class="label label-default label-lumos">HTML5</span>
                      <span class="label label-default label-lumos">CSS3</span>
                      <span class="label label-default label-lumos">Sass</span>
                      <span class="label label-default label-lumos">Bootstrap</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      <span class="label label-default label-lumos">Web Hosting</span>
                      <span class="label label-default label-lumos">Server Management</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      <span class="label label-default label-lumos">Version Control System</span>
                      <span class="label label-default label-lumos">Package Manager Tools</span>
                      <span class="label label-default label-lumos">Project Managent Tools</span>
                      <span class="label label-default label-lumos">API Application Integration</span>
                      <span class="label label-default label-lumos">FTP</span>
                      <span class="label label-default label-lumos">Basic Image Editing</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="icon"> <i class="budicon-check-3 icn"></i> </div>
                  <div class="text">
                    <div class="mg-5">
                      Basic knowledge in 
                      <span class="label label-default label-lumos">Java</span>
                      <span class="label label-default label-lumos">Visual Basic</span>
                      <span class="label label-default label-lumos">VB.Net</span>
                      <span class="label label-default label-lumos">Vue.js</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <footer class="footer box">
          <p class="pull-left">© 2017 All rights reserved.</p>
          <ul class="social pull-right">
            <li><a href="//github.com/veslorens" target="_blank"><i class="icon-s-github"></i></a></li>
            <li><a href="//www.linkedin.com/in/veslorens/" target="_blank"><i class="icon-s-linkedin"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>

    <script src="public/plugins/jquery/jquery.min.js"></script> 
    <script src="public/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="public/plugins/jquery/jquery.themepunch.tools.min.js"></script> 
    <script src="style/js/classie.js"></script> 
    <script src="style/js/plugins.js"></script> 
    <script src="style/js/scripts.js"></script>  
    <script>
      $.backstretch(["public/uploads/images/base/bg1.jpg"]);

      function gotoSection(section) {
        location.href = '#';
        location.href = '#' + section;
      }
    </script>
  </body>
</html>