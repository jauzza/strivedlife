<?php include 'conection.php'; ?>
<?php include './assets/php/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StrivedLife - Fitness & Nutrition</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo strivedlife.png" type="image/png">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->







  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" id="home" data-section style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

          <p class="hero-subtitle">Fitness & Nutrition</p>

          <h1 class="h1 hero-title">This life style for your fitness, not only diet.</h1>

          <p class="hero-text">
            It has survived not only five centuries but also
          </p>

          <a href="#" class="btn btn-secondary">Start Course</a>

          <div class="social-wrapper">

            <p class="social-title">Connect with us:</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-skype"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service" data-section>
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-1.svg" width="60" height="60" loading="lazy" alt="Women’s Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Women’s Course</a>
                </h3>

                <p class="card-text">
                  Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep into type setting.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card active">

                <div class="card-icon">
                  <img src="./assets/images/service-2.svg" width="60" height="60" loading="lazy" alt="Basic Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Basic Course</a>
                </h3>

                <p class="card-text">
                  Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep into type setting.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-3.svg" width="60" height="60" loading="lazy" alt="Men’s Course">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Men’s Course</a>
                </h3>

                <p class="card-text">
                  Lorem Ipsum is simply dummy themes industryes psum has been them industry the loep into type setting.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="about" data-section>
        <div class="container">

          <div class="about-banner img-holder" style="--width: 470; --height: 580;">
            <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/fitness-instructor-free-photo.jpg?w=2210&quality=70" width="470" height="580" loading="lazy" alt="about banner" class="img-cover">

            <a href="#" class="btn btn-secondary">Meet Instructor</a>
          </div>

          <div class="about-content">

            <p class="section-subtitle">25+ Years Of Experience</p>

            <h2 class="h2 section-title">We have expert instructor for help our students.</h2>

            <p class="section-text">
              Lorem Ipsum is simply dummy text the printing and typesetting standard dummy text ever since the 150 when
              an unknown
              printe specimen book has survived centuries.
            </p>

            <h3 class="about-h3">100+ Courses</h3>

            <p class="section-text">
              Lorem Ipsum is simply dummy text the printing and typesetting standard dummy text ever since the 150 when
              an unknown
              printe specimen book has survived centuries.
            </p>

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" aria-label="course" id="course" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">100+ Courses Available</p>

            <h2 class="h2 section-title">Fitness & Nutrition Courses</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-1.jpg" width="350" height="300" loading="lazy" alt="Children Nutrition and Cooking" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Ryan Patterson</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Children Nutrition and Cooking</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT8H20M">08 hr 20 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">28 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-2.jpg" width="350" height="300" loading="lazy" alt="Introduction to Food and Health." class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Arlene Daniels</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Introduction to Food and Health.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H25M">09 hr 25 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">16 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-3.jpg" width="350" height="300" loading="lazy" alt="Nutrition and Lifestyle in Pregnancy" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Selina Benton</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Nutrition and Lifestyle in Pregnancy</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT3H38M">03 hr 38 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">18 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-4.jpg" width="350" height="300" loading="lazy" alt="Expertise on Fitness, Nutrition and Health" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Ryan Patterson</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Expertise on Fitness, Nutrition and Health</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT2H16M">02 hr 16 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">14 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-5.jpg" width="350" height="300" loading="lazy" alt="Hacking exercise for health new science of fitness" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Arlene Daniels</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Hacking exercise for health new science of fitness</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT6H12M">06 hr 12 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">35 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-6.jpg" width="350" height="300" loading="lazy" alt="Designing Your Personal Weight Loss Plan" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Selina Benton</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Designing Your Personal Weight Loss Plan</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H34M">09 hr 34 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">28 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-label="blog" id="blog" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">Our Blog Post</p>

            <h2 class="h2 section-title">Latest Article of Nutrition</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">24</span> Feb
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Maddie Rife</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">87 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">58 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">It was popularised sheets the release contain</a>
                </h3>

                <p class="card-text">
                  Lorem sum same dummy text theme industry psum have been them industry the leaf into type setting.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">24</span> Feb
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Maddie Rife</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">87 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">58 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">It was popularised sheets the release contain</a>
                </h3>

                <p class="card-text">
                  Lorem sum same dummy text theme industry psum have been them industry the leaf into type setting.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">24</span> Feb
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Maddie Rife</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">87 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">58 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">It was popularised sheets the release contain</a>
                </h3>

                <p class="card-text">
                  Lorem sum same dummy text theme industry psum have been them industry the leaf into type setting.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #APP
      -->

      <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-card">

            <p class="section-subtitle">Mobile App Available</p>

            <h2 class="h2 section-title">
              Download our mobile app.<br>
              and start coaching anytime.
            </h2>

            <div class="wrapper">
              <a href="#" class="app-link" aria-label="play store">
                <img src="./assets/images/play-store.jpg" width="134" height="38" loading="lazy" alt="Play Store" class="img">
              </a>

              <a href="#" class="app-link" aria-label="app store">
                <img src="./assets/images/app-store.jpg" width="132" height="38" loading="lazy" alt="App Store" class="img">
              </a>
            </div>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section" data-section>
      <div class="container">

        <div class="footer-list">

          <p class="footer-list-title">Subscribe Newsletter</p>

          <p class="footer-list-text">
            Lorem Ipsum has been them an industry printer took a galley make book.
          </p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" aria-label="email" placeholder="Enter email" required class="email-field">

            <button type="submit" class="btn btn-secondary">Subscribe Now</button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">All Courses</p>
          </li>

          <li>
            <a href="#" class="footer-link">Daily Exercise</a>
          </li>

          <li>
            <a href="#" class="footer-link">Find Your Balance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Personal Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">Natural Process</a>
          </li>

          <li>
            <a href="#" class="footer-link">Immune System</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gives You Energy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Discussion</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Customer Support</a>
          </li>

          <li>
            <a href="#" class="footer-link">Course FAQ’s</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Classes</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Opening Hours</p>
          </li>

          <li>
            <a href="#" class="footer-link">Mon-Fri: 9 AM – 6 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Saturday: 9 AM – 4 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sunday: Closed</a>
          </li>

          <li>
            <p class="footer-list-title address-title">Location</p>
          </li>

          <li>
            <address class="address">
              176 W street name, New<br>
              York, NY 10014
            </address>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 strivedlife
          <ion-icon name="check" aria-hidden="true"></ion-icon>
          <a href="#" class="copyright-link"></a>
        </p>

        <ul class="footer-bottom-list">

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Terms of Service</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Security</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





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