<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> <!--Head include-->
    <title>Production Search Results</title> 
    <meta name="description" content="Select a production search results for information on that particular production"> 
    <meta name="keywords" content="Productions, Royal Theatre, Aladdin, Taylor Swift, Phantom of the Opera, "> <!--Keywords for SEO-->
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
    
        <div class="row">
            <div class="col-sm-12 text-center">
    
<?php
    if(isset($_POST['search'])){
        $name=$_POST['name'];
        
        $query="SELECT productions.Production_Name, prices.Adult, prices.Child, prices.Concession, productions.Date, productions.Start_Time FROM productions INNER JOIN prices ON productions.Price_Band = prices.Price_Band WHERE Production_Name like '%$name%' ORDER BY productions.Date";
        
        $result=mysqli_query($conn, $query);
        
        //This puts it into a table
        echo "<table border='1'>
        <tr>
        <th>Production Name</th>
        <th>Price Adult</th>
        <th>Price Child</th>
        <th>Price Concession</th>
        <th>Date</th>
        <th>Start Time</th>
        </tr>";

    while ($row = mysqli_fetch_array($result)){
        
        echo "<tr>";
        echo "<td>" .$row['Production_Name'] . "</td>";
        echo "<td>" .$row['Adult'] . "</td>";
        echo "<td>" .$row['Child'] . "</td>";
        echo "<td>" .$row['Concession'] . "</td>";
        echo "<td>" .$row['Date'] . "</td>";
        echo "<td>" .$row['Start_Time'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table";
        
        //table ends here
        
        while ($row = mysqli_fetch_array($result)){
            $Production_Name=$row["Production_Name"]; 
            $Adult=$row["Adult"]; 
            $Child=$row["Child"];  
            $Concession=$row["Concession"]; 
            $Date=$row["Date"]; 
            $Start_Time=$row["Start_Time"];

            echo $Production_Name. " " .$Adult. " " .$Child. " " .$Concession. " " .$Date. " " .$Start_Time. "<br />"; 
            
            
        }
    }
    
?>

            </div>
    </div>
                
                
    <?php include("footer.php"); ?>
</main>
</body>
</html>