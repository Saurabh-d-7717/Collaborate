<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborate HomePage</title>
    <link rel="stylesheet" href="style1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <Style>
      .buttons-container {
  width: ;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
}

button {
  background: white;
  border: solid 2px black;
  padding: .375em 1.125em;
  font-size: 1rem;
}

.button-arounder {
  font-size: 15px;
  background: hsl(190deg, 30%, 15%);
  color: hsl(190deg, 10%, 95%);
  
  box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
  transfrom: translateY(0);
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
  
  --dur: .15s;
  --delay: .15s;
  --radius: 15px;
  
  transition:
    border-top-left-radius var(--dur) var(--delay) ease-out,
    border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
    border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
    border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
    box-shadow calc(var(--dur) * 4) ease-out,
    transform calc(var(--dur) * 4) ease-out,
    background calc(var(--dur) * 4) steps(4, jump-end);
}

.button-arounder:hover,
.button-arounder:focus {
  box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
  transform: translateY(-4px);
  background: hsl(230deg, 50%, 45%);
  border-top-left-radius: var(--radius);
  border-top-right-radius: var(--radius);
  border-bottom-left-radius: var(--radius);
  border-bottom-right-radius: var(--radius);
}
    </Style>
  </head>

  <body>
    <header class="header">
      <a href="/index.php" class="logo">Collaborate.</a>
      <nav class="nav-items">
        <a href="Blog.php">Explore Blogs</a>
        <a href="#">Host Community</a>
        <a href="#">Join Community</a>
        <a href="home.php">Profile</a>
        <a href="login.php"><div class="buttons-container">
  <button class="button-arounder">Login/Logout</button>
</div></a>
      </nav>
    </header>
    <main>
      <div class="intro">
        <h1>Welcome To Collaborate!</h1>
        <br />
        <p>"Everything you need for rejuvenation and recreation at your fingertips.It’s a place to have fun and get amazing opportunities!"</p>
        <br />
        
      </div>
      <div class="achievements">
        <div class="work">
          <i class="fas fa-atom"></i>
          <p class="work-heading">Projects</p>
          <p class="work-text">
            Contribute to projects that inspire, create a difference that
            impacts the society.
          </p>
        </div>
        <div class="work">
          <i class="fas fa-skiing"></i>
          <p class="work-heading">Skills</p>
          <p class="work-text">
            Learn a new skill or teach a skill to newbies, upskilling is cool,
            isn't it?
          </p>
        </div>
        <div class="work">
          <i class="fas fa-ethernet"></i>
          <p class="work-heading">Network</p>
          <p class="work-text">
            Network with like minded people and build a strong community for a
            constructive purpose.
          </p>
        </div>
      </div>
      <div class="about-me">
        <div class="about-me-text">
          <h1>About Us</h1>
          <p>
            With Collaborate, you can create and join activities, find new peers
            of your type willing to partner you,engage with professionals to
            play at your desired time and location, plan your sessions with
            coaches to improve your skills and enjoy your activity regularly.
          </p>
        </div>
        <img src="image/img2.jpeg" alt="about us" />
      </div>
    </main>
    <footer class="footer">
      <div class="copy">© 2023 Collaborate</div>
      <div class="bottom-links">
        <div class="links">
          <span>More Info</span>
          <a href="#">About us</a>
          <a href="#">Contact us</a>
          <a href="#">Privacy Policy</a>
        </div>
        <div class="links">
          <span>Social Links</span>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </footer>
    <script>
      (function (w, d) {
        w.CollectId = "63bd9e8e50094935eaaa203c";
        var h = d.head || d.getElementsByTagName("head")[0];
        var s = d.createElement("script");
        s.setAttribute("type", "text/javascript");
        s.async = true;
        s.setAttribute("src", "https://collectcdn.com/launcher.js");
        h.appendChild(s);
      })(window, document);
    </script>
  </body>
</html>
