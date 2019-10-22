<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> <!--Head include-->
    <title>Royal Theatre Home</title>
    <meta name="description" content="Royal Theatre Home Page that shows productions"> 
    <meta name="keywords" content="Theatre, Shows, Productions, Family, "> <!--Keywords for SEO-->
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
        <div class="row"><!--Row-->
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-10 col-xl-offset-1 bg-1 text-center">
        <h2>Productions</h2>
            <br>      
            
            <!--Productions Form-->
            <form class="productionsform" action="productionsearch.php" method="post">
                <h4>What Production are you looking for?</h4>  
                <input list="name" name="name" placeholder="Production Search:"/>
                <datalist id="name">
                    <option value="Aladdin">
                    <option value="Alan Davies">   
                    <option value="Ed Byrne: Spoiler Alert">
                    <option value="Harlem Globetrotters">
                    <option value="Lion King"> 
                    <option value="Little Stars: Dance"> 
                    <option value="Mamma Mia"> 
                    <option value="Michael McIntyres Big World Tour"> 
                    <option value="Nicki Minaj"> 
                    <option value="Phantom of the Opera"> 
                    <option value="RSNO Community Orchestra"> 
                    <option value="Taylor Swift">
                </datalist>
                <input type="submit" name="search" value="Submit">
            </form>
            
            <!--Genre Form-->
            <form class="genreform" action="genresearch.php" method="post">
                <h4>What Genre are you looking for?</h4>
                <input list="name2" name="name2" placeholder="Genre Search:"/>
                <datalist id="name2">
                    <option value="Comedy">
                    <option value="Concert">   
                    <option value="Family">
                    <option value="Music">
                    <option value="Sport">
                </datalist> 
                <input type="submit" name="search" value="Submit"> 
            </form>
            
            <!--Date Form-->
            <form class="dateform" action="datesearch.php" method="post">
                <h4>What Date are you looking for?</h4>  
                <input type="date" name="date"/>
                <input type="submit" name="search" value="Submit"/>
            </form>
        </div>
        </div>
            
            <div class="row"><!--Row-->
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-5 text-center"> <!-- Box 1 -->
                    <img src="img/p/taylorswift.jpg" class="img-responsive" alt="Banner for Taylor Swift Reputation Tour">  
                </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 2 -->
            <img src="img/p/phantom.jpg" class="img-responsive" alt="Banner for Phantom of the Opera">  
                </div>
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 3 -->
                    <img src="img/p/edbyrne.jpg" class="img-responsive" alt="Banner for Ed Byrne Spoiler Alert show">  
                </div>
            </div>
    
    <div class="row"><!--Row-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-5 text-center"> <!-- Box 1 -->
            <img src="img/p/aladdin.jpg" class="img-responsive" alt="Banner for Aladdin show">  
        </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 2 -->
            <img src="img/p/mammamia.jpg" class="img-responsive" alt="Banner for Mamma Mia musical">  
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 3 -->
            <img src="img/p/lionking.jpg" class="img-responsive" alt="Banner for the Lion King show">  
        </div>
    </div>
    
    <div class="row"><!--Row-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-5 text-center"> <!-- Box 1 -->
            <img src="img/p/michaelmcintyre.jpg" class="img-responsive" alt="Banner for Michael McIntyre's Big World Tour show">  
        </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 2 -->
            <img src="img/p/alan_davies.jpg" class="img-responsive" alt="Banner for Alan Davies Tour">  
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 3 -->
            <img src="img/p/nickiminaj.jpg" class="img-responsive" alt="Banner for Nicki Minaj concert">  
        </div>
    </div>
    
    <div class="row"><!--Row-->
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-2 col-xl-2 col-xl-offset-2 bg-5 text-center"> <!-- Box 1 -->
            <img src="img/p/RSNO.jpg" class="img-responsive" alt="Banner for Scotlands National Orchestra (RSNO)">  
        </div>
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 2 -->
            <img src="img/p/listtlestars.jpg" class="img-responsive" alt="Banner for Little Stars Dance">  
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-1 bg-5 text-center"> <!-- Box 3 -->
            <img src="img/p/globetrotters.jpg" class="img-responsive" alt="Banner for basketball team Harlem Globetrotters">  
        </div>
    </div>
    
    
<!-- Footer include here -->    
    <?php include("footer.php"); ?>
    
</main>
</body>
</html>