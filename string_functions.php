<?php
    // For tests: string_functions.php?money=R$19,99&link=https://github.com/Haple

    //remove "https://"
    if (!isset($_GET['link'])) return;

    $httpsLess = substr($_GET['link'], 8);

    echo $httpsLess . " | Lenght: " . strlen($httpsLess);
    
    echo "<br>  Trim link: " . trim($httpsLess);

    echo "<br>  Upper link: " . strtoupper($httpsLess);

    echo "<br>  Lower link: " . strtolower($httpsLess);

    echo "<br>  Capitalized link: " . ucwords($httpsLess);

    echo "<br>  No github here: " . str_replace("github", "bitbucket", $httpsLess);

    echo "<br>  Compressed link: " . gzcompress($httpsLess);

    echo "<br>  Uncompressed link: " .gzuncompress(gzcompress($httpsLess));
    

    echo "<hr>";
    //get cents
    if (!isset($_GET['money'])) return;

    $cents = substr($_GET['money'], -2);

    echo "R$0,$cents | First nine position: " . strpos($cents, "9") . " | Second nine position: " . strrpos($cents, "9");

    
    
?>