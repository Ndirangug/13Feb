<html>
    <head>
        <title>Marco Pollo</title>
    </head>
    <body>
        <?php
            
            $number = 100;
            while($number < 500){
                 $number++;
                if(($number % 3 == 0) && ($number % 5 == 0)){
                    echo "MarcoPollo<hr/>";
                }
                
                elseif($number % 3 == 0){
                    echo "Marco<hr/>";  
                }
                
                elseif($number % 5 == 0){
                    echo "Pollo<hr/>";
                }
                
                else{
                    echo $number."<hr/>";
                }
                
               
            }
        ?>
    </body>
</html>