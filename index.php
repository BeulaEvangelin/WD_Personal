<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Between Breads Bistro Website</title>

    <link rel="stylesheet" href="main.css" />
  </head>

  <body>
    <header id="header">
      <div class="container">
        <img
          id="logo"
          src="Assets/BBB_Logo.png"
          alt="Logo of Between Breads Bistro"
        />
        <nav class="mainNav">
          <ul>
            <li class="menu"><a href="#menu">Menu</a></li>
            <li class="about-us"><a href="#about-us">About Us</a></li>
            <li class="order"><a href="#order">Order Now</a></li>
            <li class="cater"><a href="#cater">Catering</a></li>
            <li class="contact-us"><a href="#contact-us">Contact Us</a></li>
            <li>
              <a href="https://www.facebook.com/"><img class="fblink" src="Assets/fbLogo.png" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/"
                ><img class="instalink" src="Assets/instaLogo.png"
              /></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="newsletter">
      <div id="newsletter-popup">
        <h2>Subscribe to our Newsletter</h2>
        <p>Get the latest updates and news straight to your inbox.</p>
        <form id="subscribe-form" name="subscribe-form" action="process-newsletter.php" method="POST">
          <input type="email" name="email" id="email" placeholder="Your email" required autocomplete="email" /><br>
          <input type="submit" value="Subscribe" />
        </form>
        <p id="close-popup">No, thanks. I'm not interested.</p>
      </div>
      <div id="thank-you-popup">
        <h2>Thank you for subscribing!</h2>
        <p>We appreciate your interest.</p>
        <p id="close-thank-you-popup">Close</p>
      </div>
    </section>

    <section class="banner" id="home">
      <img src="Assets/banner.jpg" />
    </section>



    <section class="menu-section" id="menu">
    <h1>OUR MENU</h1>
    <div class="menu-container">
        <ul>
            <li><h2>Classics</h2></li>

            <?php
            $dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
            $dbusername = "root";
            $dbpassword = "";

            // Connect to the database
            $pdo = new PDO($dsn, $dbusername, $dbpassword);

            // Prepare and execute the SQL query
            $stmt = $pdo->prepare("SELECT * FROM `menu_table` WHERE `category` = 'Classics';");
            $stmt->execute();

            // Process results
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <li>
                    <h3><?= $row["name_and_price"] ?></h3>
                    <p><?= $row["about"] ?></p>
                </li>
            <?php } ?>

        </ul>

        <ul>
          <li><h2>B' Specials</h2></li>
<?php
//prepare
$stmt2 = $pdo->prepare("SELECT * FROM `menu_table` WHERE `category` = 'B'' Specials';");
$stmt2->execute();

//process results
while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <li>
      <h3><?= $row["name_and_price"] ?></h3>
      <p><?= $row["about"] ?></p>
  </li>

<?php } ?>
</ul>

<ul>
<li><h2>Fries & Drinks</h2></li>

<?php
//prepare
$stmt3 = $pdo->prepare("SELECT * FROM `menu_table` WHERE `category` = 'Fries & Drinks';");
$stmt3->execute();

//process results
while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <li>
      <h3><?= $row["name_and_price"] ?></h3>
  </li>
<?php } ?>

</ul>
      </div>
    </section>

    <section class="about-section" id="about-us">
      <h1>ABOUT US</h1>
      <p>
        Welcome to Between Breads Bistro, a culinary gem founded by the dynamic
        duo, [Founder 1] and [Founder 2]. Fueled by a shared passion for
        exceptional food, our bistro is a blend of their diverse culinary
        backgrounds. [Founder 1]'s expertise, honed in [mention relevant
        experience], combines seamlessly with [Founder 2]'s commitment to
        quality ingredients, resulting in a menu that promises a unique and
        delightful dining experience. At Between Breads Bistro, we invite you to
        savor every moment in a cozy and inviting atmosphere. Join us on a
        culinary journey where tradition meets innovation, and find delight in
        every bite.
      </p>
      <div class="CF1container">
        <img class="coFounder1img" src="Assets/cf.png" />
        <div class="CF1Text"><h3 class="coFounder1">Co-founder</h3></div>
      </div>

      <div class="CF2container">
        <img class="coFounder2img" src="Assets/cf2.png" />
        <div class="CF2Text">
          <h3 class="coFounder2">Co-founder</h3>
        </div>
      </div>
    </section>

    <section class="order-section" id="order">
      <h1>ORDER YOUR FAVORITES</h1>
      <div class="order-container">
        <a
          href="https://www.ubereats.com/ca?utm_source=AdWords_Brand&utm_campaign=CM2196377-search-google-brand_32_-99_CA-National_e_web_acq_cpc_en_T1_Generic_BM_uber%20eats%20canada_kwd-380209859949_617243164519_138929730934_b_c&campaign_id=18094446215&adg_id=138929730934&fi_id=&match=b&net=g&dev=c&dev_m=&ad_id=617243164519&cre=617243164519&kwid=kwd-380209859949&kw=uber%20eats%20canada&placement=&tar=&gclsrc=aw.ds&gclid=CjwKCAiAjrarBhAWEiwA2qWdCIVsmGagUJYlhh57wv_OHsWQ2RCc968VIO2IrC4j9_2j-Q5jlgMIhhoCXa0QAvD_BwE"
          ><p>Order Pickup</p></a
        >
        <a
          href="https://www.ubereats.com/ca?utm_source=AdWords_Brand&utm_campaign=CM2196377-search-google-brand_32_-99_CA-National_e_web_acq_cpc_en_T1_Generic_BM_uber%20eats%20canada_kwd-380209859949_617243164519_138929730934_b_c&campaign_id=18094446215&adg_id=138929730934&fi_id=&match=b&net=g&dev=c&dev_m=&ad_id=617243164519&cre=617243164519&kwid=kwd-380209859949&kw=uber%20eats%20canada&placement=&tar=&gclsrc=aw.ds&gclid=CjwKCAiAjrarBhAWEiwA2qWdCIVsmGagUJYlhh57wv_OHsWQ2RCc968VIO2IrC4j9_2j-Q5jlgMIhhoCXa0QAvD_BwE"
          ><p>Order Delivery</p></a
        >
      </div>
    </section>

    <section class="cater-section" id="cater">
      <h1>CATERING SERVICE REQUEST</h1>
      <p id="output"></p>
      <form id="caterForm" action="process-catering.php" method="POST">
      <fieldset>
      <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="name" /><br /><br />

        <label for="phNo">Phone Number</label>
        <input type="text" name="phNo" id="phNo" /><br /><br />

        <label for="email">Email ID</label>
        <input
          type="email"
          name="email"
          id="email"
          autocomplete="email"
        /><br /><br />

        Type of Event
        <input type="radio" name="limited" id="limited" />
        <label for="limited">Limited Service Catering </label>

        <input type="radio" name="full" id="full" />
        <label for="full">Full Service Catering</label>
        <br /><br />

        <label for="eventDate">Date of Event</label>
        <input type="date" name="eventDate" id="eventDate" /><br /><br />

        <label for="eventLoc">Event Location</label>
        <input type="text" name="eventLoc" id="eventLoc" /><br /><br />

        <label for="guestNo">No. of Guests</label>
        <input type="text" name="guestNo" id="guestNo" /><br /><br /><br />

        <input type="submit" value="Submit" />
      </form>
</fieldset>
      
    </section>

    <section class="contact-section" id="contact-us">
      <h1>CONTACT US</h1>
      <img src="Assets/BBB_Logo_black.png" />
      <h3 class="address">
        1430 Trafalgar Road Oakville,<br />Ontario L6H 2L1<br />T: 905-845-9430
      </h3>
      <div class="divhr"></div>
      <div class="contact-container">
        <ul>
          <li>
            <h3>
              Monday - Saturday<br />
              10:00 AM - 9:30 PM
            </h3>
          </li>
        </ul>

        <ul>
          <li>
            <h3>
              Sunday<br />
              10:00 AM - 8:00 PM
            </h3>
          </li>
        </ul>
        <a class="admin-login-link" href="admin/admin-login.php">Admin Login</a>
      </div>
    </section>

    <footer id="footer">
      &copy; 2023 Between Breads Bistro. All rights reserved.
    </footer>
    <script src="catering.js"></script>
    <script src="highlight.js"></script>
    <script src="newsletter.js"></script>
  </body>
</html>
