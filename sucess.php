<script src="https://www.mercadopago.com/v2/security.js"></script>
<pre>
    ╰(*°▽°*)╯<br>
    <?php
    //echo $_SERVER['QUERY_STRING'];
    foreach(explode("&", $_SERVER['QUERY_STRING']) as $qs){
        echo $qs . '<br>';
    }
    ?>
</pre>
