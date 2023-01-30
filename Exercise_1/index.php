<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php  
        $num = 154548;  
        $sum=0; $rem=0;  
        for ($i =0; $i<=strlen($num);$i++)  
        {  
            $rem=$num%10;  
            $sum = $sum + $rem;  
            $num=$num/10;  
        }  
        echo "Sum of digits 154548 is $sum";  
    ?>  
    </body>
</html>