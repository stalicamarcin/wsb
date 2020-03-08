<?php

$potega = 2**10;

echo $potega,"<br>";

// systemy liczbowe:

$int = 10;
$hex = 0xA;
$oct = 012; //2 * 8^0 + 1 * 8^1  = 10
$bin=0b1011; //11(10)

echo $int,"<br>"; // 10
echo $oct,"<br>"; // 10
echo $hex,"<br>"; // 10
echo $bin,"<br>"; // 11

// echo phpinfo();

// operatory bitowe

$x = 0b1010;
echo $x; //10
$x = $x>>1;
echo $x; //5

$x=$x<<2;
echo $x; //20

//rowne / indentyczne

$x=1;
$y=1.0;

if($x == $y)
    echo "<br>Równe<br>";
    else
    echo "Różne<br>";


    if ($x === $y)
        echo "Identyczne";
    else
        echo "Nieidentyczne<br>";

        echo gettype ($x) ; //integer
        echo gettype ($y) ; //double   
        
        // operatory rzutowania danych
        $text = "123ssd";
        $x = (int)$text;
        echo $x; //123
        echo gettype ($x);

        $text=0;
        $x= (bool) $text;
        echo "\$text: $text";
        echo "\$text: $x";

        $text=10;
        $x=(unset)$text;
        echo "\$text: $text";
        echo "\$x: $x";

        echo gettype($text);
        echo gettype($x);


        // ??
        echo "<br>";
        echo PHP_INT_SIZE,"<br>";
        echo PHP_INT_MIN,"<br>";


        // kontrola typu zmiennych

        $x=10;

        echo is_int($x);

        echo is_string($x);

        echo is_bool($x);
        echo is_float($x);
        echo is_null($x);

        $w;
        echo @$w;
        echo gettype($w);

//        $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER, 

        echo $_SERVER['SERVER_PORT'];
        echo $_SERVER['SERVER_NAME'];
        echo $_SERVER['SCRIPT_NAME'];
        echo $_SERVER['DOCUMENT_ROOT'];

        $filelocal = $_SERVER['DOCUMENT_ROOT'];
        $filelocal .= $_SERVER['SCRIPT_NAME'];
        
        echo $filelocal,"<hr>";

        //stale

        define("NAME", "JANUSZ");
        echo NAME;

        define("surnamE", "Kowal", true);
        echo surnamE;

        echo PHP_VERSION;
        echo PHP_OS;
        echo __LINE__;
        echo __FILE__;
        echo __DIR__;

?>