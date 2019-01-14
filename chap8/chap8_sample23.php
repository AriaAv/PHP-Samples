<html>
<body>

<?php
$my_anon = create_function( '$a, $b', 'return $a+$b;' );
print $my_anon( 3, 9 );
?>
</body>
</html>
