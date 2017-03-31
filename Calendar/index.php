<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CalendarStyleSheet.css">
        <title></title>
    </head>
    <body>
        <?php
        
        $dayofweek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday',
            'Thursday', 'Friday', 'Saturday');
        
        echo "<table>";
        echo "<tr style='background:lightblue; text-align: center;'>";
        for($i = 0; $i < 7; $i++){
            echo "<td>".$dayofweek[$i]."</td>";
        }
        echo "</tr>";
        
        echo "<tr style='text-align: left; vertical-align: text-top; margin: 10px;'>";
        for($i = 1; $i < 32; $i++){
            echo "<td>".$i."</td>";
            
            if(($i % 7) == 0){
                echo "</tr>";
                echo "<tr style='text-align: left; vertical-align: text-top; margin: 10px;'>";
            }
        }
        echo "</tr>";
        echo "</table>";
        
        
        
        ?>
    </body>
</html>
