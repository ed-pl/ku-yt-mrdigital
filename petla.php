<?php
        //Array - Looping - The Loop
        $names = array('Brad', 'John', 'Jane', 'Meowsalot', 'Antek', 'Tomek', 'Franek', 'Romek');
    
        $count = 0;

        while ($count < count($names)) {
            echo "<li>Hi, my name is $names[$count]</li>";
            $count++;
        }


        ?>