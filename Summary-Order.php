<?php 

session_start();

$toppings_string = $_GET['hid_Toppings'];
$total = $_GET['hid_Total'];


?>

<!DOCTYPE html>

<html>

<head>
    <title>SET Pizza Shop</title>

    <link rel="stylesheet" href="Cross-Page-Style.css"></link>

    <script>
        fuction SetButtonState()
        {
            this.value = 1;
        }
    </script>
</head>


<body>



    <header>
    <h2>SET PIZZA SHOP</h2>
    </header>

    <FORM method="GET" action="End-Order.php">
        
        <section>
        
            <nav>
                <img style="width:100%; height:100%;" src="Media\BigLogo.png"/>
            </nav>
            
            <article>
                <h1>Ciao <?php echo $_SESSION["first_name"] ?> </h1>

                <article style="background-color:white; border-radius:10px; height:auto; width:100%;">
                    <h3 style="text-align:center;">Order Summary</h3>
                    <h1>Full name: <?php echo $_SESSION["first_name"]?>&nbsp<?php echo $_SESSION["last_name"]?> </h1>
                    <h1>Toppings: <?php echo $toppings_string ?> </h1>  
                    <h1>Total: $<?php echo $total ?> </h1>  
                </article>

            </article>

        </section>
        
        <footer>
            <input name="btn_Confirm" type="submit" value="CONFIRM" onclick="SetButtonState()"/>
            <input name="btn_Cancel" style="background-color:tomato;" type="submit" value="CANCEL" onclick="SetButtonState()" />
        </footer>
    
    </FORM>

</body>
</html>