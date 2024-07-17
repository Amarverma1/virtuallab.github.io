<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NaivoTech - Education Is About Academic Excellence</title>
   <meta name="title" content="NaivoTech - Education Is About Academic Excellence">
    <meta name="Embark on a journey of discovery with NaivoTech, where knowledge thrives. Our avant-garde AI and Robotics education encompasses a meticulously crafted curriculum, interactive robots, engaging hands-on projects, and practical real-life applications. Experience the transformative power of education as NaivoTech pioneers an innovative approach, making learning a dynamic and immersive adventure in the realms of AI and Robotics. Elevate your understanding and skills with NaivoTech, the ultimate hub for cutting-edge technological education."
      content="vilabs, vil, villabs, Vilabs, Virtual Innovation lab, Naivotech,
   naivotechlab, vilnaivotech,vilnaivo, vilnaivo, villabs, villabs , labs, virtual labs, villabs, lab, virtual, labinnovtion, vilabs, vil, naivotech, Naivotech, Naivotechvil lab, Vilabs">


  
     <!-- Favicons -->
  <link href="./assets/images/transparentImage.png" rel="icon">
  <link href="./assets/images/transparentImage.png" rel="apple-touch-icon">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/school.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-abs-1.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-abs-2.png" media="min-width(768px)">



  <style>
    .carousel {
      width: 100%;
      overflow: hidden;
      position: relative;
      border-radius: 10px;
      display: flex;
      
    }
    .Curriculum{
      margin-bottom: 80px;
    }

    .carousel-inner {
     display: flex;
      animation: scroll 20s linear infinite;
    }

    .carousel-item {
      min-width: 300px;
      transition: transform 0.5s ease;
    }

    .carousel-item img {
      width: 150px;
      height: 150px;
      height: auto;
      display: block;
      border-radius: 8px;
    }

    @keyframes scroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">


      <a href="#" class="logo">
        <img src="./assets/images/transparentImage.png" width="162" height="50" alt="NaivoTech logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/transparentImage.png" width="162" height="50" alt="NaivoTech logo">
          </a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <!-- <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
          </li>-->

          <li class="navbar-item">
            <a href="#top-skills" class="navbar-link" data-nav-toggler>Our Top Skills</a>
          </li>

          <li class="navbar-item">
            <a href="#Our-Curriculum" class="navbar-link" data-nav-toggler>Our Curriculum</a>
          </li>

          <li class="navbar-item">
            <a href="#event" class="navbar-link" data-nav-toggler>Event</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-toggler>Summer Camp</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <a href="#meeting" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

          <span class="span">Book A meeting</span>
        </a>

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>
    <div class="container">

      <button class="search-close-btn" aria-label="Close search" data-search-toggler>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="search-wrapper">
        <input type="search" name="search" placeholder="Search Here..." aria-label="Search" class="search-field">

        <button class="search-submit" aria-label="Submit" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

    </div>
  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle">Better Learning Future With Us</p>

            <h2 class="h1 hero-title" class="h1-title"><span class="india">India’s</span> No.<span class="no1"> 1</span>
              Programs</h2>

            <p class="hero-text">
              India’s No. 1 robotics programs offer cutting-edge curriculum and hands-on training, preparing students to excel in the rapidly evolving field of robotics.
            </p>

            <a href="#meeting" class="btn btn-primary">
              <span class="span">Book a meeting</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <img src="./assets/images/hero-banner.png" class="image-hero" width="200" height="200" loading="lazy"
              alt="hero image" class="w-100">

            <img src="./assets/images/hero-abs-1.png" width="318" height="352" loading="lazy" aria-hidden="true"
              class="abs-img abs-img-1">

            <img src="./assets/images/hero-abs-2.png" width="160" height="160" loading="lazy" aria-hidden="true"
              class="abs-img abs-img-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category" id="top-skills">
        <div class="container">

          <p class="section-subtitle">Course Categories</p>

          <h2 class="h2 section-title">Top Trending Skills</h2>

          <ul class="grid-list">

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="briefcase-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Artificial Intelligence</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="file-tray-full-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Machine Learning</a>
                  </h3>

                  <span class="card-meta">24 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Robotics</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="layers-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Data Mining</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="laptop-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Natural Language Processing</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Data Analytics With Python
                    </a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="headset-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Internet Of Things</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="server-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Data Sciences</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="medkit-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Data Strucure & Algoritham</a>
                  </h3>

                  <span class="card-meta">39 Course</span>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>




      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <img src="./assets/images/about-banner.jpg" width="450" height="590" loading="lazy" alt="about banner"
              class="w-100 about-img">

            <img src="./assets/images/about-abs-1.jpg" width="188" height="242" loading="lazy" aria-hidden="true"
              class="abs-img abs-img-1">


          </figure>

          <div class="about-content">



            <h2 class="h2 section-title">Benefits of Partnering with VIL</h2>

            <ul class="about-list">

              <li class="about-item">

                <div class="item-icon item-icon-1">
                  <img src="./assets/images/about-icon-1.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Industry Expert Instructor</h3>

                  <p class="item-text">
                   An Industry Expert Instructor is a seasoned professional who brings extensive real-world experience to the classroom.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-2">
                  <img src="./assets/images/about-icon-2.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Up-to-Date Course Content</h3>

                  <p class="item-text">
                    Up-to-date course content ensures students learn the latest advancements and best practices, equipping them with relevant skills for today’s professional environment.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-3">
                  <img src="./assets/images/about-icon-3.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">Hands-on Kit for Practical Learning</h3>

                  <p class="item-text">
                    A hands-on kit for practical learning provides students with tangible tools and materials to apply theoretical knowledge through real-world, experiential activities.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Know About Us</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>




      <!------------------------------------>

      <!--Our Popular Skills Curriculum -->

      <!------------------------------------->


      <section class="Curriculum category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">Schools that trust Us! Join Us today</h2>

          <div class="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 2.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 3.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 4.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 4.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="assets/schools logo/Download 1.png" alt="Image 1">
              </div>
            </div>
          </div>

      </section>










      <!------------------------------------>
      <!--OUR POPULAR-->
      <!------------------------------------->



      <section id="Our-Curriculum" class="section course" id="courses" aria-label="course"
        style="background-image: url('./assets/images/course-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Our Popular Skills Curriculum</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-1.jpg" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Intermediate</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">35 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text"></time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Robotics Curriculum</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
                      <span class="span">29.00</span>

                      <del class="del">39.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <!--<span class="card-meta-text">47 Students</span>-->
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-2.jpg" width="370" height="270" loading="lazy"
                    alt="Machine Learning A-Z: Hands-On Python and java" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Advanced</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">48 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Robotics Curriculum</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
                      <span class="span">Free</span>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">65 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-3.jpg" width="370" height="270" loading="lazy"
                    alt="Achieving Advanced in Insights with Big" class="img-cover">
                </figure>

                <div class="card-actions">

                  <span class="badge">Basic</span>

                  <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                    <ion-icon name="heart"></ion-icon>
                  </button>

                </div>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">80 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Robotics Curriculum</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(18 Review)</span>

                  </div>

                  <div class="card-footer">

                    <div class="card-price">
                      <span class="span">59.00</span>

                      <del class="del">69.00</del>
                    </div>

                    <div class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="card-meta-text">42 Students</span>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <!-- <li>
      <div class="course-card">

        <figure class="card-banner">
          <img src="./assets/images/course-4.jpg" width="370" height="270" loading="lazy"
            alt="Education Makes A Person A Responsible Citizen" class="img-cover">
        </figure>

        <div class="card-actions">

          <span class="badge">Intermediate</span>

          <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
            <ion-icon name="heart"></ion-icon>
          </button>

        </div>

        <div class="card-content">

          <ul class="card-meta-list">

            <li class="card-meta-item">
              <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">31 Lessons</span>
            </li>

            <li class="card-meta-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
            </li>

          </ul>

          <h3 class="h3">
            <a href="#" class="card-title">Education Makes A Person A Responsible Citizen</a>
          </h3>

          <div class="rating-wrapper">

            <div class="rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <span class="rating-text">(18 Review)</span>

          </div>

          <div class="card-footer">

            <div class="card-price">
              <span class="span">$49.00</span>

              <del class="del">$59.00</del>
            </div>

            <div class="card-meta-item">
              <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">46 Students</span>
            </div>

          </div>

        </div>

      </div>
    </li>

    <li>
      <div class="course-card">

        <figure class="card-banner">
          <img src="./assets/images/course-5.jpg" width="370" height="270" loading="lazy"
            alt="Building A Better World One Student At A Time" class="img-cover">
        </figure>

        <div class="card-actions">

          <span class="badge">Advanced</span>

          <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
            <ion-icon name="heart"></ion-icon>
          </button>

        </div>

        <div class="card-content">

          <ul class="card-meta-list">

            <li class="card-meta-item">
              <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">36 Lessons</span>
            </li>

            <li class="card-meta-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
            </li>

          </ul>

          <h3 class="h3">
            <a href="#" class="card-title">Building A Better World One Student At A Time</a>
          </h3>

          <div class="rating-wrapper">

            <div class="rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <span class="rating-text">(18 Review)</span>

          </div>

          <div class="card-footer">

            <div class="card-price">
              <span class="span">29.00</span>
              <del class="del">39.00</del>
            </div>

            <div class="card-meta-item">
              <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">91 Students</span>
            </div>

          </div>

        </div>

      </div>
    </li>

    <li>
      <div class="course-card">

        <figure class="card-banner">
          <img src="./assets/images/course-6.jpg" width="370" height="270" loading="lazy"
            alt="Education is About Forming Faithful Disciples" class="img-cover">
        </figure>

        <div class="card-actions">

          <span class="badge">Basic</span>

          <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
            <ion-icon name="heart"></ion-icon>
          </button>

        </div>

        <div class="card-content">

          <ul class="card-meta-list">

            <li class="card-meta-item">
              <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">21 Lessons</span>
            </li>

            <li class="card-meta-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <time datetime="PT18H15M44S" class="card-meta-text">18h 15m 44s</time>
            </li>

          </ul>

          <h3 class="h3">
            <a href="#" class="card-title">Education is About Forming Faithful Disciples</a>
          </h3>

          <div class="rating-wrapper">

            <div class="rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <span class="rating-text">(18 Review)</span>

          </div>

          <div class="card-footer">

            <div class="card-price">
              <span class="span">.00</span>

              <del class="del">89.00</del>
            </div>

            <div class="card-meta-item">
              <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

              <span class="card-meta-text">22 Students</span>
            </div>

          </div>

        </div>

      </div>
    </li>
-->
          </ul>

         <!-- <a href="#" class="btn btn-primary">
            <span class="span">View All Courses</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>-->

        </div>
      </section>

      <!-------------------------------------->
      <!--Book a Meeting-->
      <!-------------------------------------->

      <section class="section Contact" id="meeting">
        <div class="center">
          <p class="section-subtitle">Contact</p>

          <h2 class="h2 section-title">Book a Meeting</h2>
        </div>
        <div class="flex-contact">
          <div class="flex-item-contact-left">
            <img src="assets/images/blog-1.jpg">
            <h2 class="intro">Book an Intro Meeting</h2>
            <h2 class="intro">Or Call us Today at</h2>
            <h2 class="num">(+91) 7007362892, 9653006686</h2>
          </div>
          <div class="flex-item-contact-right">
            <div>
              <form action="/action_page.php">
                <label for="fname">School Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Enter School Name" required>

                <label for="lname">Principal Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Enter Principal Name" required>

                <label for="country">Email</label>
                <input type="text" id="lname" name="lastname" placeholder="Email" required>

                <label for="country">Phone</label>
                <input type="text" id="lname" name="lastname" placeholder="Email" required>

                <input type="submit" value="Submit">
              </form>
            </div>

          </div>
      </section>

      -
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/')" style="display: none;">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/naivologo.png" width="250" height="90" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
             NaivoTech aims to integrate experiential learning and technology at the core of academic curricula by
              establishing Innovation Labs in schools.
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">Ram Ram bank</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:++91) 7007362892, 9653006686" class="footer-link">+91) 7007362892, 9653006686</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">info@NaivoTech.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Platform</p>
          </li>

          <li>
            <a href="#about" class="footer-link">About</a>
          </li>

          <li>
            <a href="top-skills" class="footer-link">Courses</a>
          </li>

          <li>
            <a href="educators.html" class="footer-link">Educators</a>
          </li>

          <li>
            <a href="#" class="footer-link">Events</a>
          </li>

          <li>
            <a href="#" class="footer-link">Instructor Profile</a>
          </li>

          <li>
            <a href="#" class="footer-link">Purchase Guide</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#meeting" class="footer-link">Book a Meeting</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>


    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">NaivoTech</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  </div>


  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
  </script>






  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>