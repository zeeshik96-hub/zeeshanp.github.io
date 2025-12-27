<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zeeshan Portfolio</title>
     <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="512x512" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
     

      <!-- Modal Body -->
      <div class="modal-body">
         <div class="clo202">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="hero-content" id="contact-section">
          <h1 class="display-5 fw-bold mb-4">Let's make something awesome together!</h1>
          <form  id="contactForm" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <input type="text" name="name" class="form-control bg-dark text-white border-secondary"
                        placeholder="Your Name*" required
                        pattern="^[A-Za-z\s]+$" 
                        title="Name should contain only letters and spaces.">
                </div>

                <div class="col-md-12">
                    <input id="phone" type="tel" name="phone" class="form-control bg-dark text-white border-secondary" 
                        placeholder="Phone Number*" required>
                </div>

                <div class="col-md-12">
                    <input type="email" name="email" class="form-control bg-dark text-white border-secondary"
                        placeholder="Email Address*" required
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        title="Please enter a valid email address.">
                </div>

                <div class="col-12">
                    <textarea class="form-control bg-dark text-white border-secondary" name="msg" rows="4" 
                            placeholder="A Few Words*" required></textarea>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="glow-button"><span>Send Message ✉️</span></button>
                </div>
            </form>

        </div>
      </div>

    </div>
  </div>
</div>

    <section class="rlayout">
                <div class="def114 def1 d-flex flex-column align-items-center justify-content-center bg-dark text-center">
                    <div class="def2">
                        <h3>Zeeshan Ali</h3>
                        <img src="images/zeeshan202.jpeg" class="img-fluid rounded-circle mb-3" alt="Zeeshan" style="width: 150px;height:150px;">
                        <!-- <h3>Zeeshan Ali</h3> -->
                        <h5>Specialization:</h5>
                        <p class="small" style="text-align:center;">Full Stack Developer<br>Front End Developer</p>
                        <h5>Location:</h5>
                        <p class="small">📍 Karachi, Pakistan</p>
                            <a href="#" class="glow-button mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Let's Work Together</span></a>
                        
                    </div>
                
                </div>
               
    </section>
    <section class="header" id="header">
         <!-- Navigation -->
                <nav class="d-flex justify-content-between align-items-center mb-4 dd43">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link text-white" href="#hero" >Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#about" >About Me</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#portfolio" >Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#contact" >Contact</a></li>
                    </ul>

                    <a href="#" class="glow-button"  data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Let's Talk 💬</span></a>
                </nav>
                <!-- Navigation -->
<nav class="navbar navbar-dark bg-dark mb-4 dd34">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand def33" href="#">ZA</a>

        <!-- Toggle button for Offcanvas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <!-- Nav links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#hero">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contact</a>
                    </li>
                </ul>

                <!-- Let's Talk Button -->
                <a href="#" class="btn glow-button mt-4"  data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Let's Talk 💬</span></a>
            </div>
        </div>
    </div>
</nav>
    </section>
    <section class="hero py-5" id="hero">
        <div class="home-content1" id="hero-section">
                    <div class="home-content">
                        <span><i class="fa-brands fa-slack"></i>
                        Let's Start</span>
                        <h1 class="display-5 fw-bold mb-4">I'm Zeeshan Ali <br> Full Stack Developer And  <br> Front End Developer</h1>
                        <div class="lets2">
                            <!-- <a href="#"><i class="fa-solid fa-briefcase"></i> Portfolio</a> -->
                           <a href="assets/zeeshan_cv.pdf" download="My_CV.pdf" class="animated-link">
                                <span>Download CV <i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                            </a>

                        </div>
                    </div>
                    
                </div>
    </section>

    <section class="about py-5" id="about" data-aos="fade-up">
                <div class="home-content2">
                    <div class="home-content" style="margin-top:20px !important;">
                        <span><i class="fa-brands fa-slack"></i>
                        About Me</span>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="re">
                                    <p>I’m a <b>Software Engineer</b> with over <b>5 years of professional experience</b> in web development, with a strong background in both <b>back-end</b> and <b>front-end</b> technologies.</p>
                                    <p>I began my career as a <b>Core PHP Developer</b>, where I spent 2 years building custom <b>CRM systems</b> and dynamic <b>web applications</b> tailored to business needs. My focus was on writing clean, secure, and scalable backend logic.</p>
                                    <p>Over the last 3 years, I’ve transitioned into <b>front-end development</b>, working extensively with <b>React.js, WordPress</b>, and <b>custom website development</b>. I specialize in crafting responsive, intuitive user interfaces and delivering seamless user experiences.</p>
                                    <p>One of my key projects includes a <b>React.js-based poker game platform</b>, where I led the design and development of a fully interactive and real-time front-end interface.</p>
                                    <p>With a full-stack mindset, I take pride in delivering high-quality, maintainable solutions that align with business goals.</p>
                            
                                </div>
                            </div>
                            <div class="col-lg-6 align-items-center d-flex">
                                <div class="w-100">
                                    <img src="images/11.webp" class="w-100" style="height:400px;object-fit:cover;border-radius:10px;" alt="">
                                </div>
                            </div>

                        </div>
                        
                        
                    </div>
                    
                </div>
    </section>
    <section class="skilss py-5" data-aos="fade-up">
        <div class="row">
                            <div class="home-content hj">
                                    <span><i class="fa-brands fa-slack"></i>
                                Skills</span>
                            </div>
                            <div class="tab-btn aos-init aos-animate" data-aos="fade-up">
                                    <p><a href="#"><img src="images/bs.png">Bootstrap</a></p>
                                    <p><a href="#"><img src="images/html.png">HTML</a></p>
                                    <p><a href="#"><img src="images/css.png">CSS</a></p>
                                    <p><a href="#"><img src="images/js.png">Javascript</a></p>
                                    <p><a href="#"><img src="images/react.png">React</a></p>
                                    <p><a href="#"><img src="images/wp.png">WordPress</a></p>
                                    <p><a href="#"><img src="images/php.png">PHP</a></p>
                                    <p><a href="#"><img src="images/node.png">node.js</a></p>
                                    <p><a href="#"><img src="images/sass.png">Sass</a></p>
                                    <p><a href="#"><img src="images/ang.png">Angular</a></p>
                                    <p><a href="#"><img src="images/shop.png">Shopify</a></p>
                                    <p><a href="#"><img src="images/em.png">Elementor</a></p>
                                    <p><a href="#"><img src="images/vue.png">Vue.js</a></p>  
                            </div>
                         </div>
    </section>
    <section class="portfolio py-5" id="portfolio" data-aos="fade-right">
        <div class="portfolio-content1">
                    <div class="row">
                        <div class="home-content">
                            <span><i class="fa-brands fa-slack"></i>
                        Portfolio</span>
                        </div>
                         
                        <div class="col-lg-6 col-md-6">
                            <div class="block1">
                                <div class="image-container">
                                    <img src="images/12.png" alt="Portfolio Image">
                                    <div class="overlay">
                                        <a href="javascript:void(0)" class="visit-button" onclick="showHelloModal()">Visit Site</a>
                                    </div>
                                </div>
                            </div>

                            <div class="block1">
                                <div class="image-container">
                                    <img src="images/13.png" alt="Portfolio Image">
                                    <div class="overlay">
                                        <a href="javascript:void(0)" class="visit-button" onclick="showHelloModal()">Visit Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="block1">
                                <div class="image-container">
                                    <img src="images/14.png" alt="Portfolio Image">
                                    <div class="overlay">
                                        <a href="javascript:void(0)" class="visit-button" onclick="showHelloModal()">Visit Site</a>
                                    </div>
                                </div>
                            </div>
                            <div class="block1">
                                <div class="image-container">
                                    <img src="images/15.png" alt="Portfolio Image">
                                    <div class="overlay">
                                        <a href="javascript:void(0)" class="visit-button" onclick="showHelloModal()">Visit Site</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="see lets">
                            <a href="javascript:void(0)" onclick="showHelloModal()">See More <i class="fa-solid fa-caret-down"></i></a>
                        </div>
                    </div>
                   
                    
                </div>
    </section>

    <section class="contact py-5" id="contact" data-aos="fade-up">
        <div class="home-content">
                            <span><i class="fa-brands fa-slack"></i>
                        Contact</span>
                        </div>
        <div class="hero-content">
                    
                    <h1 class="display-5 fw-bold mb-4">Let's make something awesome together!</h1>
                    <form  id="contactForm2" method="post" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control bg-dark text-white border-secondary"
                                placeholder="Your Name*" required
                                pattern="^[A-Za-z\s]+$" 
                                title="Name should contain only letters and spaces.">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control bg-dark text-white border-secondary"
                                    placeholder="Company Name">
                            </div>

                            <div class="col-md-6">
                               <input id="phone" type="tel" name="phone" class="form-control bg-dark text-white border-secondary" 
                                placeholder="Phone Number*" required>
                            </div>

                            <div class="col-md-6">
                               <input type="email" name="email" class="form-control bg-dark text-white border-secondary"
                                placeholder="Email Address*" required
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                title="Please enter a valid email address.">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control bg-dark text-white border-secondary" name="msg" rows="4" 
                            placeholder="A Few Words*" required></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="glow-button"><span>Send Message ✉️</span></button>
                            </div>
                        </form>
                        
                </div>
    </section>

    <div class="topscr"  id="scrollToTopBtn">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div>

    <!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1">
  <div class="modal-dialog ffr">
    <div class="modal-content text-center p-4">
      <h5 class="modal-title">Thank You!</h5>
      <div class="dfg">
        <i class="fa-solid fa-circle-check"></i>
      </div>
      <p>Your message has been sent successfully.</p>
      <button type="button" class="glow-button w-100" data-bs-dismiss="modal"><span>Close</span></button>
    </div>
  </div>
</div>




<div class="modal fade" id="helloModal" tabindex="-1">
  <div class="modal-dialog ffr">
    <div class="modal-content text-center p-4">
      <h5 class="modal-title mb-3">Thank You!</h5>
      <p>To explore Zeeshan’s projects in detail, please get in touch with him directly.</p>
    </div>
  </div>
</div>






 <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- intl-tel-input CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

    <script src="js/sectioncn.js"></script>
     <script src="js/tog.js"></script>
    <script src="js/scroll.js"></script> 
    <script src="js/formvalid.js"></script>
    <script src="js/phonevalid.js"></script>
    <script src="js/forward.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,   // animation duration (1s)
  });
</script>
</body>
</html>
