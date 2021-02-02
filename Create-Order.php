<!-- 
- Project       : Pizza Ordering Web Application 
- File          : Create-Order.php
- Programmer    : Dusan Sasic
- Last updated  : 2/1/2021
- Description   : The page allows customers to select what toppings they would like on their pizza. 
                Alongside the total price is being displayed as they add or remove toppings.
-->

<?php 

//Retrive the values from a submited form
$full_name = $_GET['txt_Names'];

//Split the full name intp the first and last
list($first_name, $last_name) = preg_split('/\s+/', $full_name);

//Start the session in order to use session variables
session_start();

//Setting session variables
$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;


?>


<!DOCTYPE html>

<html>

<head>
    <title>SET Pizza Shop</title>

    <link rel="stylesheet" href="Cross-Page-Style.css"></link>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>

    var jQueryXMLHttpRequest;

        //CONSTANTS
        var TIMEOUT = 1500;

        $(document).ready(function()
        {
            
            //Variables
            var ToppingsArr = new Array(5);
            var AddIndex = 0;



            //Event handler when item in the dropdown list has changed
            $("#lst_toppings").change(ListItemEvent);


            //Function that is being fired on dropdown list item change
            function ListItemEvent()
            {

                //Variables
                var Total = 10.0; 
                var CompleteToppings = "";
                var SelectedTopping = this.value;
                var Exists = false;
            
                
                //
                for(var i=0; i<ToppingsArr.length; i++)
                {
                    if(ToppingsArr[i] == SelectedTopping && ToppingsArr[i] != "default")
                    {
                        Exists = true;
                    } 
                }

                if(Exists == true)
                {
                    $("#err_ToppingsPage").text("Topping already added!");
                    setTimeout(ClearFeedback, TIMEOUT);
                }else if(ToppingsArr[i] != "default") 
                {
                    ToppingsArr[AddIndex] = SelectedTopping;
                    AddIndex++;
                }
                
                
                
                for(var i=0; i<ToppingsArr.length; i++)
                {
                    if(ToppingsArr[i] != null && ToppingsArr[i] != "default")
                    {
                        CompleteToppings += ToppingsArr[i] + " > ";
                        
                        if(ToppingsArr[i] == "Double Cheese")
                            Total += 1.50;
                        else
                            Total += 1.00;

                    }
                }
                
                
                $("#p_toppings").text(CompleteToppings);
                $("#h_Total").text("Total: $" + Total);

                
                document.getElementById("hid_Toppings").value = CompleteToppings;
                document.getElementById("hid_Total").value = Total;
                
            }


            $("#btn_Clear").click(function()
            {
                for(var i=0; i<ToppingsArr.length; i++)
                {
                    ToppingsArr[i] = null;
                }
                AddIndex = 0;
                Total = 10.0; 
                CompleteToppings = "";
                $("#lst_toppings").val("default");
                $("#p_toppings").text(CompleteToppings);
                $("#h_Total").text("Total: $" + Total);
            });


        }); //End Ready



        function ClearFeedback()
        {
            
            $("#err_ToppingsPage").text("");
        }


    </script>



</head>


<body>

    <header>
    <h2>SET PIZZA SHOP</h2>
    </header>

    <FORM method="GET" action="Summary-Order.php?">
        
        <section>
        
            <nav>
                <img style="width:100%; height:100%;" src="Media\BigLogo.png"/>
            </nav>
            
            <article>
                <h1>Ciao <?php echo $_SESSION["first_name"] ?> </h1>    

                <h3>Select toppings</h3>
                <select name="lst_toppings" id="lst_toppings">
                <option value="default"></option>    
                <option value="Pepperoni">Pepperoni</option>
                <option value="Mushrooms">Mushrooms</option>
                <option value="Green Olives">Green Olives</option>
                <option value="Green Peppers">Green Peppers</option>
                <option value="Double Cheese">Double Cheese</option>
                </select>


                <input type="hidden" id="hid_Toppings" name="hid_Toppings" value="No toppings" />
                <input type="hidden" id="hid_Total" name="hid_Total"  value="10" />


                <h3>Added Toppings:</h3>
                <label for="btn_Clear" id="p_toppings" name="p_toppings" value="Para Value">[When selected, toppings will be displayed here]</label>

                <input name="btn_Clear" id="btn_Clear" style="font-size:10px; background-color:red; padding-left:3px; padding-right:3px;" type="button" value="X"/>

                <h3 id="h_Total" name="h_Total" value="Header value" style="background-color:tomato; width: fit-content; padding-right:10px;" >Total: $10</h3>
                <p id="err_ToppingsPage" style="vertical-align: bottom; color: red;"></p>
                

            </article>

        </section>
        
        <footer>
            <input type="submit" value="Make It!"/>            
        </footer>
    
    </FORM>

</body>
</html>