<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> <!--Head include-->
    <title>Royal Theatre Seating Plan</title>
    <meta name="description" content="A seating plan of the theatre"> 
    <meta name="keywords" content="Seating, Stalls, Balcony,Royal Theatre, "> <!--Keywords for SEO-->
</head>
<body>
<main>
    <header>  
        <?php include ("nav.php"); ?> <!--Nav include-->
    </header> 
    
    <div class="row">
            <div class="col-sm-12 text-center">
        <h1>Royal Theatre</h1>
        </div>
    </div>
    <div class="row"><!--Row 2-->
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-10 col-xl-offset-1 bg-1 text-center">
        <h2>Seating Plan</h2>
            <br>
            <p class="text">Please check out our seating plan below:</p>
        </div>
    </div>
    
    <div class="col-sm-12 bg-1 text-center">
        <img src="img/seating-white.png" class="seatplanimg" alt="Seating plan for Royal Theatre">
    </div>
    

<!-- Footer include here -->    
    <?php include("footer.php"); ?>
    
</main>
</body>
</html>