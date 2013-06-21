<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php 
    if (!isset($columns)) {
        $columns = 2;
    }
    for ($i = 0; $i < sizeof($devices); $i = $i + $columns)
    {   
        echo '<div class="row device">';
        for ($t = 0; $t < $columns; $t++)
        {
            if ($columns == 3)
            {
                echo '<fieldset class="four columns">';
            } else {
                echo '<fieldset class="six columns">';
            }
            if (isset($devices[$i + $t]))
            {
                $this->renderPartial('/device/_view',array('data' => $devices[$i + $t]));
            }
            echo '</fieldset>';
        }
        echo '</div>';
    }
?>



