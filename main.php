<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
            <title>Tyrell Ice Cream Test</title>
    </head>
    <body>
    <h1>Tyrell Systems Sdn Bhd</h1>
    <h2>Problem Statement</h2>
    
    <?php
        echo "In Japan, there are four major categories of ice cream type products:";
        echo "<br> ● an ice cream type product with at least 15 percent milk solids and at least 8 percent milk fat is called an ice
        cream;";
        echo "<br> ● an ice cream type product with at least 10 percent milk solids and at least 3 percent milk fat that is not an ice
        cream is called an ice milk" ;
        echo "<br> ● an ice cream type product with at least 3 percent milk solids that is not an ice cream or an ice mild is called a lacto
        ice" ;
        echo "<br> ● an ice cream type product that is not an ice cream, an ice milk, or a lacto ice is called a flavored ice.<br>";
        
        $text = "<br>Here, milk solids consist of milk fat and milk solids-not-fat.
        <br>AtCoder’s famous product Snuke Ice contains A percent milk solids-not-fat and B percent milk fat.
        <br>Which of the categories above does Snuke Ice fall into?
        <br>Print your answer as an integer according to the Output Section.";

        echo "<p>$text</p>";
    ?>

    <div>
        <!-- take 2 input A and B from user -->
        <h2>INPUT</h2>
        <form action="main.php" method="post">
            A: <input type="number" name="a">
            B: <input type="number" name="b">
            <input type="submit" >
            <br>
        </form>

    <?php
        //if user dont insert number and press submit button, it will auto set to 0
        if (empty($_POST["a"])) {
            $a = 0;
        }else{
            $a = $_POST["a"];
        }
        
        //if user dont insert number and press submit button, it will auto set to 0
        if (empty($_POST["b"])) {
            $b = 0;
        }else{
            $b = $_POST["b"];
        }

        $ab = 0;

        function getVar($a, $b, $ab)
        {   // if a and b is less or more tahn 100, it will show Invalid Data
            if ( 0 <= $a && $a <= 100  && 0 <= $b && $b  <= 100) {
                echo "A= $a" ;
                echo "<br>B= $b" ;
            } else {
                echo " <br>A or B more than 100 or less than 0 - Invalid Data";
            }
            
            $ab = $a + $b;
            
            // if the total sum[A+B] of input is more than 100, it will show Invalid Data
            if ($ab<= 100)
                echo " <br>A + B = $ab" ;
            else
                echo "<br>A + B = more than 100 - Invalid Data";
            
        return $ab; 
        }
        $x = getVar($a, $b, $ab); // $x is total sum[A+B]
        
        echo "<h2>OUTPUT</h2>";
        
        function iden($x, $a, $b)
        {   // if the total sum more than 100,  it will show invalid data
            if ($x > 100)
            {
                echo "A+B more than 100. Invalid Data";
            }// if total sum more or equal 15 and input b more or equal 8, it will print 1
            elseif ($x >= 15 && $b >= 8)
            {
                echo "<b>1</b>";
                echo "<br>This product contains $a percent milk solids-not-fat and $b percent milk fat, 
                for a total of $x percent milk solids.
                Since it contains not less than 15 percent milk solids and not less than 8 percent milk fat, it is an ice cream" ;
                
            }// if the total sum more or equal 13 and less than 15 and input b more or equal 3, it will print 2 
            elseif ($x >= 13 && $x < 15 && $b >= 3)
            {
                echo "<b>2</b>" ;
                echo "<br>This product contains $a percent milk solids-not-fat and $b percent milk fat, 
                for a total of $x percent milk solids.
                Since it contains not less than 13 percent milk solids and not less than 3 percent milk fat, it is an ice milk" ;

            }// if total sum is more or equal 3 and less than 13 and input b less than 3, it will print 3
            elseif ($x >= 3 && $x < 13 && $b < 3)
            {
                echo "<b>3</b>" ;
                echo "<br>This product contains $a percent milk solids-not-fat and $b percent milk fat, 
                for a total of $x percent milk solids. Since it contains less 13 percent milk solids, it is not an ice cream or 
                an ice milk but is a lacto ice.";
                
            }// other than that it will print 4
            else
            {
                echo "<b>4</b>";
                echo "<br>This product contains $a percent milk solids-not-fat and $b percent milk fat, 
                for a total of $x percent milk solids. Since it not an ice cream, an ice milk, or a lacto ice is called a flavored ice";
            }
        }
        iden($x, $a, $b);
    ?>
    </div>
    </body>
</html>
