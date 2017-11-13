<?php
/* 
 * Coded by :Balaji.J.B
 * The code used to checking a variable is numberic or not
 * License : Apache 2.0
 */
$balaji = array('5', 'Bill', '89', 'hello_world');

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checking a variable is Numeric or not </title>
    </head>
    <body>

<?php
foreach($balaji as $checknumber) {
    $findnumeric = is_numeric($checknumber);
    print "The value $checknumber is numberic? ";
    if(is_numeric($checknumber)) {
        print "yes";
        echo "</br>";   
    } else {
        print "no";
          echo "</br>";
    }
   
}
?>

    </body>
</html>
