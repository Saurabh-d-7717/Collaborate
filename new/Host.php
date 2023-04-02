<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: verdana;

        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), #25232380), url(walpape2.jpg);
            background-size: cover;
            background-position: center;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
        }

        .navbar {
            width: 100%;
            height: 12%;
            display: flex;
            align-items: center;
        }

        .logo {
            width: 100px;
            cursor: pointer;
        }

        .menu-icon {
            width: 30px;
            cursor: pointer;
            display: none;
            margin: 40px;
        }

        nav {
            flex: 1;
            text-align: right;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
            margin-left: 60px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 13px;
        }

        .row {

            height: 88%;
            display: flex;
            align-items: center;

        }

        .col {
            width: 50%;
            padding-left: 5%;
        }

        h1 {
            color: rgb(0, 0, 0);
            font-size: 50px;
        }

        h3 {
            color: rgb(14, 13, 13);
            font-size: 30px;
            margin-top: 20px;
        }

        p {
            color: rgb(0, 0, 0);
            font-size: 20px;
            margin-top: 20px;
        }
        

        button {
            width: 180px;
            color: #000;
            background: #fff;
            border-radius: 20px;
            border: 0;
            padding: 12px 0;
            outline: none;
            
            margin-top: 30px;
            font-size: 12px;
            
            
        }
        .card{
            width: 200px;
            height: 230px;
            display: inline-block;
            color: rgb(247, 245, 241);font-size: 20px;

            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            margin: 10px 15px;
            background-position:center ;
            background-size: cover;
            cursor: pointer;
            transition: 0.5s;
        }
        .card1{
            background-image: url(bnajare.jfif);
        }
        .card2{
            background-image: url(diidkle.jfif);
            
        }
        .card3{
            background-image: url(nba2.jfif);
        }
        .card4{
            background-image: url(football.jfif);
        }
        .card:hover{
            transform: scale(1.1);
        }
        h5{
            color: #fff;
            text-shadow: 5px 5px 5px #999;
        }
        .card p{
            color: rgb(255, 255, 255);
            text-shadow: 5px 5px 5px #999;
            
            font-size: 16px;
        }

    </style>

</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="logo3.jfif" class="logo">
            <nav>
                <ul id="MenuItems">
                    <li><a href="/../../index.php">Home</a></li>
                    <li><a href="../get1.php">Join</a></li>
                </ul>
            </nav>
            <img src="menu.png" class="menu-icon">


        </div>
        <div class="row">
            <div class="col">
                <h1>Get the best talent with proof of work.</h1>
                <h3>An easier way to hire - Post a gig in 60 seconds.</h3>
                <p>Hire from the biggest pre-screened talent pool in the country in 15 minutes.

                </p>
                <a href="../host.php">
                    <button>Host</button>
                  </a>

            </div>
            
            <div class="col">
                <div class="card card1">
                    <h5>Banjare</h5>
                    <p>Break ur limits!
                        -Trek together- </p>
                </div>
                <div class="card card2">
                    <h5>Tangy Doodle</h5>
                    <p>Doodle? This is the Perfect place </p>
                </div>
                <div class="card card3">
                    <h5>NBA Club</h5>
                    <p>Intrested in basketball. Join Us.</p>
                </div>
                <div class="card card4">
                    <h5>Football Club</h5>
                    <p>Vamos. 
                        What arrre you wating for!!</p>
                </div>
        </div>
    </div>

</body>

</html>