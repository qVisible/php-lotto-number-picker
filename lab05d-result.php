<html>


<body>
    <p>Your Lotto Numbers:</p>
    <?php 
    $i=1;
    
    while($i<=45){
        
        //echo the number if the checkbox is on
        if($_POST['check'.$i]=='on'){
            echo $i.', ';
        }
        $i++;
    }  
?>

</body>

</html>
