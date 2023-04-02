<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body class="light-theme">

  <!--
    - #HEADER
  -->

  <header>

    <div class="container">

      <nav class="navbar">

        <a href="#">
          <img src="./assets/images/collaborate.png" alt="Collaborate's Logo" width="150" class="logo-light">
          <img src="./assets/images/collaborate.png" alt="Collaborate's Logo" width="150" class="logo-dark">
        </a>

        <div class="btn-group">

          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

        <div class="flex-wrapper">

          <ul class="desktop-nav">

            <li>
              <a href="get1.php" class="nav-link">Join Community</a>
            </li>

            <li>
              <a href="host.php" class="nav-link">Host Community</a>
            </li>

            <li>
              <a href="../index.php" class="nav-link">Home</a>
            </li>

          </ul>

          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

        </div>

        <div class="mobile-nav">

          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="wrapper">

            <p class="h3 nav-title">Contents</p>

            <ul>
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Join Community</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Host Communnity</a>
              </li>
            </ul>

          </div>

          <div>

            <p class="h3 nav-title">Topics</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">How To</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Advantages</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Benefits</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Disadvantages</a>
              </li>

            </ul>

          </div>

        </div>

      </nav>

    </div>

  </header>





  <main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            Welcome to the <b>Collaborate Community</b>.
            <br>Connect & Grow
          </h1>

          <br> </br>
          
      
          <div class="btn-group">
            <a href="#" class="btn btn-primary">Read</a>
            <a href="#" class="btn btn-secondary">Contribute</a>
          </div>

        </div>

        <div class="right">

          
          <div class="img-box">
            <img src="./assets/images/Logo.jpg" alt="Collaborate" class="Logo-img">
                        
          </div>

        </div>

      </div>

    </div>





    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-1.jpg" alt="Why Your Blog’s Community Is So Important"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Importance</button>

                <h3>
                  <a href="#" class="h3">
                    Why Your Blog’s Community Is So Important
                  </a>
                </h3>

                <p class="blog-text">
                  I have been blogging for around 10 years now, and the blog made me improve my skills.
                 As I had written in the below article, I like to write things that change people. 
                 This is very important for me.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Akash" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Akash</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 10, 2023</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-2.png" alt="How to Build and Grow Your Online Community" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">How To</button>

                <h3><a href="" class="h3">How to Build and Grow Your Online Community</a></h3>

                <p class="blog-text">
                  I had managed to build a fanbase for the blog in a natural way. I did not have this in my at first. 
                  The community around my blog has been created by the fine (or not so fine) work I had done in all these years.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Pratham" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Pratham</a>

                    <p class="text-sm">
                      <time datetime="2021-12-10">Dec 10, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-3.png" alt="Community for the win" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Advantages</button>

                <h3><a href="" class="h3">Community for the win</a></h3>

                <p class="blog-text">
                  Strong communities are critical because they’re often an important source of social connection and a sense of belonging. 
                  Participating in a community bonded by attitudes, values, and goals is an essential ingredient to enjoying a fulfilling life.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Saurabh" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Vibhav</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-11.jpg" alt="Staying Connected to a Like-Minded Community"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Advantages</button>

                <h3><a href="" class="h3">Staying Connected to a Like-Minded Community</a></h3>

                <p class="blog-text">
                  It has often been said our network determines our net worth. Having a strong network or like-minded community is a principle of success.
                  Throughout history, anyone who has achieved any noteworthy success will almost always attribute an aspect of their success to others, in particular, those in their circle of influence.
                  Therefore, being aware of why having a strong like-minded community is beneficial can motivate us to get involved with different communities, and also encourage those close to us to do the same.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Jagrati" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Jagrati</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-12.jpg"
                  alt="Finding Like-Minded People" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">How To</button>

                <h3><a href="" class="h3">Finding Like-Minded People</a></h3>

                <p class="blog-text">
                  The criteria for like-minded people is different for everyone. 
                  For me, people who enjoy exercise, like to talk about healthy foods, are artistically inclined, enjoy reading, and strive to be positive and kind are the ones I want in my “squad.”
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Adesh" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Arushi</a>

                    <p class="text-sm">
                      <time datetime="2021-11-10">Nov 10, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-6.png"
                  alt="Repercussions of not Having Support" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Disadvantages</button>

                <h3><a href="" class="h3">Repercussions of not Having Support</a>
                </h3>

                <p class="blog-text">
                  Without a group of people who accept you, understand your dreams and goals, and want you to succeed in life, you deal with a litany of issues—issues you may not even notice if you’re accustomed to the negative dynamic.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Aashi" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Aashi</a>

                    <p class="text-sm">
                      <time datetime="2021-10-25">Aug, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-1.jpg"
                  alt="The Right Support Group will Change Your Career" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Advantages</button>

                <h3><a href="" class="h3">The Right Support Group will Change Your Career</a></h3>

                <p class="blog-text">
                  Like-minded people will see how important your hobbies, passions, and side hustles are to you. 
                  They will check in on your progress and push you to overcome the moments you’re discouraged. 
                  If it weren’t for my close friends and my parents, I wouldn’t have had the courage to pursue writing as a career or to work on my novel in my spare hours.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Rishabh" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Rishabh</a>

                    <p class="text-sm">
                      <time datetime="2021-10-15">Mar 03, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-8.png" alt="How To Surround Yourself with the Right People"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Benefits</button>

                <h3><a href="" class="h3">How To Surround Yourself with the Right People</a></h3>

                <p class="blog-text">
  
                  "The only thing that will change your life, change your business, change your relationship, is that you must raise your standards,” Tony says. 
                  Get rid of negative people who bring you down. Surround yourself with people who lift you up, lend you knowledge and help you learn from your mistakes.
                   Raise your standards for your inner circle.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Ritik" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Ritik</a>

                    <p class="text-sm">
                      <time datetime="2021-10-03">Oct 3, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-9.png" alt="Let Go of Negative Relationships"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Advantages</button>

                <h3><a href="" class="h3">Let Go of Negative Relationships</a>
                </h3>

                <p class="blog-text">
                  The best way to determine who these individuals are is to think about how you feel after spending time with them.
                   Do you feel good about yourself and ready to take on new challenges? Or do you feel upset, unsure of yourself and not in control of your emotions? Our emotions exist to tell us things – they’re a gift that lets us know what we need to change in order to feel more fulfilled. 
                   If you feel drained, fearful or agitated after spending time with someone, it’s a sign they aren’t good for you. 
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Harshita" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Harshita</a>

                    <p class="text-sm">
                      <time datetime="2021-09-13">Sep 13, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-10.png"
                  alt="Get Outside your Comfort Zone" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">How To</button>

                <h3><a href="" class="h3">Get Outside your Comfort Zone</a></h3>

                <p class="blog-text">
                  Hear from experts and meet others like yourself who are searching for the knowledge needed to take their businesses to the next level. 
                  By bringing success into your life and attending Business Mastery, you not only gain exposure to some of the most hardworking, driven people in the world, but you recognize that your dreams are worth fighting for.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/community.jpg" alt="Aayush" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Aayush</a>

                    <p class="text-sm">
                      <time datetime="2021-09-21">Sep 21, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <button class="btn load-more">Load More</button>

        </div>





        <!--
          - ASIDE
        -->

        <div class="aside">

          <div class="topics">

            <h2 class="h2">Topics</h2>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="server-outline"></ion-icon>
              </div>

              <p>How To</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>

              <p>Advantages</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <p>Disadvantages</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <p>Benefits</p>
            </a>

          </div>

          <div class="tags">

            <h2 class="h2">Tags</h2>

            <div class="wrapper">

              <button class="hashtag">#community</button>
              <button class="hashtag">#connections</button>
              <button class="hashtag">#disadvantages</button>
              <button class="hashtag">#benefits</button>
              <button class="hashtag">#grow</button>
              <button class="hashtag">#career</button>
              <button class="hashtag">#optimize</button>
              <button class="hashtag">#betterment</button>

            </div>

          </div>

          <div class="contact">

            <h2 class="h2">Let's Talk</h2>

            <div class="wrapper">

              <p>
                Do you want to learn more about how I can our community overcome problems? Let us have a
                conversation.
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>

          <div class="newsletter">

            <h2 class="h2">Reviews</h2>

            <div class="wrapper">

              <p>
               Drop in your reviews about our ideas and website concept.
              </p>

              <form action="#">
                <input type="email" name="email" placeholder="Email Address" required>

                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - #FOOTER
  -->

  <footer>

    <div class="container">

      <div class="wrapper">

        <a href="#" class="footer-logo">
          <img src="./assets/images/collaborate.png" alt="Collaborate's Logo" width="150" class="logo-light">
          <img src="./assets/images/collaborate.png" alt="Collaborate's Logo" width="150" class="logo-dark">
        </a>

        <p class="footer-text">
          Learn about Collaboration, Community and Connections
        </p>

      </div>

      <div class="wrapper">

        <p class="footer-title">Quick Links</p>

        <ul>

          <li>
            <a href="#" class="footer-link">Home Page</a>
          </li>

          <li>
            <a href="#" class="footer-link">Host Community</a>
          </li>

          <li>
            <a href="#" class="footer-link">Join Community</a>
          </li>

        </ul>

      </div>


    </div>

    <p class="copyright">
      &copy; Copyright 2023 <a href="#">Collaborate</a>
    </p>

  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>