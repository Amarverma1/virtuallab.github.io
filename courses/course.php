<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--- primary meta tag-->
  <title>NaivoTech - Virtual Innovation Lab</title>
  <meta name="title" content="NaivoTech - The Best Program to Enroll for Exchange">
  <meta name="description" content="">




  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.    0/dist/ionicons/ionicons.js"></script>



  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">


  
      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .course-section {
            padding: 40px 20px;
            background-color: #f4f4f4;
            
        }

        .section-title {
            font-size: 30px;
            margin-top: 120px;
            color: #373737;
            font-weight: 600;
            text-align: start;
          
        
            
        }
        .section-title span{
          color: rgb(44, 200, 159);
          
        }
        .range{
            width: 150px;
            height: 10px;
            border-radius: 5px;
            background-color: rgb(43, 171, 150);
            margin-top: 5px;
            margin-bottom: 50px;
        }

       

        .course-card {
            cursor: pointer;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .course-card:hover{
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-10px);
            
        }
        .course-varification{
            display: flex;
            margin: 0 0 10px;
            gap: 2px;
          
            
        }
        .course-varification p{
            
           margin-top: 10px;
           margin-left: 6px;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #383838;
            font-weight: 600;
            
        }
       
    
        .course-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .course-content {
            padding: 20px;
        }

        .course-title {
            font-size: 18px;
            margin: 0 0 10px;
            color: #434343;
            font-weight: 600;
            
        }

        .course-rating {
            font-size: 1em;
            color: #575757;
            margin: 0 0 8px;
            display: flex;
            font-weight: 600;
        }
        .course-classes{
            font-size: 1em;
            color: #777;
            margin: 0 0 6px;
            font-weight: 600;
        }
        .course-rate{
            font-size: 1em;
            color: #403f3f;
            margin: 0 0 15px;
            font-weight: 600;
        }
        .Rating{
          display: flex;
          color: gold;
          margin-left: 10px;
          margin-top: 5px;
        }

        .instructor-info {
            display: flex;
            align-items: center;
        }

        .instructor-photo {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .instructor-name {
            font-size: 1em;
            margin: 0;
            color: #537911;
            font-weight: 600;
            margin: 0 0 8px;
        }


/* Tooltip styling */
.tooltip {
    position: relative;
    cursor: pointer;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color: #58c8ae;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%; /* Position the tooltip above the text */
    left: 50%;
    margin-left: -100px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

        @media (max-width: 600px) {
            
            .section-title {
                font-size: 22px;
            }
            .range{
               width: 40px;
            }

            .course-title {
                font-size: 1.2em;
            }

            .course-rating {
                font-size: 0.9em;
            }

            .instructor-name {
                font-size: 0.9em;
            }
        }

  </style>
</head>

<body id="top" onload="myFunction()" style="margin:0;">

<?php include 'header.php'; ?>
 


  <!-- 
    - #HEADER
  -->
  <div style="display:block;" id="myDiv" class="animate-bottom">
        <!--==========================================================
            VIL PART 
         --==========================================================-->

         <section class="section vil" id="vil" aria-label="vil">
          <div class="container">

               <h2 class="section-title">Our Evergreen Courses</h2>
               <div class="range"></div>
           
            <ul class="grid-list1">
              <li>
               <div class="course-card">
                    <img src="assets/schools logo/image.png" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Artificial Intelligence
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Internet Of Things Course
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Machine Learning
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Robotics
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Data Mining
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Natural Language Processing
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Data Analytics With Python
                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
              <li>
               <div class="course-card">
                    <img src="assets/images/course-1.jpg" alt="Course 1" class="course-image">
                    <div class="course-content">
                        <h3 class="course-title tooltip">Data Strucure & Algoritham

                            <span class="tooltiptext">Most Recommended.</span>
                        </h3>
                        <div class="instructor-info">
                            <p class="instructor-name">Pragya Thakhur</p>
                        </div>
                        <p class="course-rating">Rating: 4.8
                            <span class="Rating"><ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon></span>
                        </p>
                        <div class="course-varification">
                            <img src="./assets/images/transparentImage.png" width="50" height="15" alt="VIL logo">
                            <p class="course-varified">verified</p>
                        </div>
                        <p class="course-classes">Classes 12</p>
                        <p class="course-rate">750rs / class</p>
                    </div>
                </div>
              </li>
            </ul>
          </div>

        </section>

<?php include 'footer.php'; ?>