<?php include'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<body>
    <h1>This is About Us Page</h1>

<body class="page-about-us">

    <div class="content">
        
        <article class="content_info">
            <div class="about us">
              <div><h1>Cool Restaurant</h1></div>  
                <h4>
                    We welcome you to sit back, unwind and appreciate the lovely sights and hints of nature while our best gourmet expert sets you up for a scrumptious dinner utilizing the best and freshest ingredients. The Cool Restaurant’s legacy comes from our parents, built-in 1963.
                </h4>
                <div>
                <P id="more" style="display:none;">
                Phone: 044 123 4567 <br>
                Email: cool.restaurant@gmail.com <br>
                Address: Feikkikatu 7, Hämeenlinna</P>
            <button onclick="document.getElementById('more').style.display='block';this.style.display='none';">Contact Information</button>
            </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15480.144212062587!2d24.459117!3d60.988247799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d7f1a184209%3A0xe69734d5c10042bd!2sHAMK%20H%C3%A4me%20University%20of%20Applied%20Sciences!5e0!3m2!1sen!2sfi!4v1674676818463!5m2!1sen!2sfi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </article>
        
        
        <img class="imgAbout" src="../assets/images/Special.jpg" alt="Foodplate">
                </div>
    
</body>
</html>
<?php include'footer.php'; ?>