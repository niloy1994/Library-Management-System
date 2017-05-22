
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Online Library</title>

    <link rel="stylesheet" href="css/flexslider.css" type="text/css"/>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>

    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                slideshowSpeed: 3000
            });
        });
    </script>


    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="gridContainer clearfix"></div>
<div class="header">
    <div class="logo">
        <a href="index.php"><img src="images/library_logo1.png" heigth="300px" width="350px"></a>
    </div>
    <div>


    </div>

    <div class="login">
        <form action="login.php" method="POST">

            <label for="username"><b>Username:</b> </label><input type="text" name="username" id="username" required
                                                                  autofocus placeholder="Username">
            <br><br>
            <label for="password"><b>Password:</b> &nbsp;</label><input type="password" name="password" id="password"
                                                                        required
                                                                        autofocus placeholder="Password">
            <br><br>
            <input class="lbutton" type="submit" name="lbutton" alt="Submit" value="Login">

            <p>Don't have an account?<br><a href="sign_up.php">Sign up</a></p>

        </form>


    </div>
</div>
<div class="menu">
    <ul class="main-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="location.php">Location</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
</div>
<div class="slider">
    <div class="flexslider">
        <ul class="slides">
            <li><img src="images/img3.jpg"/></li>
            <li><img src="images/img4.jpg"/></li>
            <li><img src="images/girl.jpg"/></li>
            <li><img src="images/girls.jpg"/></li>
            <li><img src="images/child.jpg"/></li>
            <li><img src="images/library8.jpg"/></li>
            
            
        </ul>
    </div>
</div>
<div class="description">
    <p style="text-align:center"><b>What is Onliune Library?</b></p>
    <hr>
    <p>
        Our goal is to provide a page on the web for every book ever published. <br><br>
        At its heart, Open Library is a catalog. The project began in November 2007 and has been inhaling catalog
        records from some of the biggest libraries in the world ever since. We have well over 20 million edition records
        online, provide access to 1.7 million scanned versions of books, and link to external sources like WorldCat and
        Amazon when we can. The secondary goal is to get you as close to the actual document you're looking for as we
        can, whether that is a scanned version courtesy of the Internet Archive, or a link to Powell's where you can
        purchase your own copy.
        On a slightly more technical note, apart from that page being an online representation of a library catalog
        card, Open Library also gives people a URI for a work, an edition or author or other book-ish resource that can
        be used as a pointer and connector for information about books; a Uniform Resource Identifier indeed.
    </p>
</div>
<div class="library">
    <p style="text-align:center"><b>Why our Library?</b>
    <hr>
    </p>
    <p>In March 2014, the Berthoud Community Library became of member of AspenCat, which is a statewide consortium of 62
        libraries. This means, our library now has access to over 900,000 books, DVDs, CDs and other items in the
        catalog, providing you with the books and learning materials you need.
        When you click on our catalog link, you will be redirected to a new page. From here you can search by title,
        keyword, author and you can decide if you only want to search for DVDs, audios, or printed materials.
    </p>
</div>
<div class="reader">
    <p style="text-align:center"><b>Our Clients</b>
    <hr>
    </p>
    <ul class="clients">
        <li>Student</li>
        <br>
        <li>teacher</li>
        <br>
        <li>Engineer</li>
        <br>
        <li>Advocate</li>
        <br>
        <li>Common people</li>
        <br>
    </ul>
</div>
<div class="collection">
    <p style="text-align:center"><b>Book Collection</b>
    <hr>
    </p>
    <p>The Rare Book & Manuscript Library welcomes scholars from around the world to use or inquire about the collection
        of rare books at the University of Illinois. The collection represents the entire range of printed material in
        the West, and extends from more than 1,100 incunables (books printed before 1501) to twenty–first century fine
        press publications. The general collection consists of approximately 500,000 volumes.</p>
</div>
<div class="footer">
    <hr>
    <h3><a href="contact_us.php"><b>Contact Us</b></a></h3>

    <p> Rajuk Trade Centre (3rd Floor ), Nikunja-2, Dhaka-1229</p>

    <p style="font-size:14px">Copyright ©2016 Niloy, Inc. All Rights Reserved.</p>
</div>

</body>
</html>