<html>

<head>
    <style>
        /*Internal Stylesheet*/
        div {
            width: 30px;
            height: 30px;
            border: 1px solid grey;
            border-radius: 10%;
            float: left;
            text-align: center;
            font-size: 0.8em;
            margin: 1px;
        }

        div:nth-of-type(odd) {
            background-color: pink;
        }

        div:nth-of-type(even) {
            background-color: floralwhite;
        }

        #wrapper {
            width: 170px;
            border: none;
            background-color: white;
        }

        input {
            margin: 3px;
        }

    </style>
</head>

<body>
    <div id="wrapper">

        <form action="lab05d-result.php" method="post">

            <?php
    
            $i=1;

            while($i<=45){
                echo '<div>';   //start div tag of lotto num
                echo $i;        //insert the number in the div
                echo '<br><input type="checkbox" name="check'.$i.'">';  //inset the checkbox
                echo '</div>'.PHP_EOL;   //close the div 
                $i++; 
            }

            ?>
            <input type="submit" value="pick">

        </form>
    </div>





</body>

</html>
