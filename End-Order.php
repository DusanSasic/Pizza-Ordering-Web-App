<?php 

session_start();

//btn_Confirm
$confirm = $_GET['btn_Confirm'];
$cancel = $_GET['btn_Cancel'];

$final_message;


if(strlen($confirm) > 0)
{
    $final_message = $_SESSION["first_name"] . " " . $_SESSION["last_name"] . ",your order was succesfull, Thannk you!";
    
}

if(strlen($cancel) > 0)
{
    $final_message = $_SESSION["first_name"] . " " . $_SESSION["last_name"] . ", your order was canceled.";
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>SET Pizza Shop</title>

    <link rel="stylesheet" href="Cross-Page-Style.css"></link>

</head>


<body>



    <header>
    <h2>SET PIZZA SHOP</h2>
    </header>

    <FORM>
        
        <section>
        
            <nav>
                <img style="width:100%; height:100%;" src="Media\BigLogo.png"/>
            </nav>
            
            <article>
                <h1><?php echo $final_message ?> </h1>

            </article>

        </section>
        
        <footer>
            <input type=button onClick="parent.location='MainPage.html'" value='DONE'>
        </footer>
    
    </FORM>

</body>
</html>