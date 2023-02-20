<?php include'header.php'; ?>

<body>
    <div class="content" >        
        <article class="content_info">
            <P>
                <h1>Welcome to our Restaurant</h1>
                <h4>Our promise is to provide great food and a stunning view of the city.<br>Everyone is welcome to enjoy our services.</h4>
                <P id="more" style="display:none;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ut, iste quisquam possimus iusto nostrum sapiente, obcaecati, maxime quaerat omnis enim porro nihil illum? Rem debitis molestias dignissimos pariatur? In!
            </P>
            </P>
            <button onclick="document.getElementById('more').style.display='block';this.style.display='none';">Read more... </button>
        </article>
        <img src="../assets/images/Meal-Plan-plate-protein.png" alt="Foodplate">
    </div>    

    </div>

    </div>
</body>

</html>
<!-- This part is used for the background image -->
<style> 
body {
    background-image: url(../assets/images/background2.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    color: aliceblue;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgb(206, 48, 48);
}
</style>

<?php include'footer.php'; ?>