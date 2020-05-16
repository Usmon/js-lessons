<?php
    if($_POST['my_val'])
        echo 100 + $_POST['my_val'];
    else 
        echo $_GET['val1'] + $_GET['val2'];
?>