switch ($browser_type) {
case "NN": 
$loading_function = "load_nn";
break;
case "IE": 
$loading_function = "load_ie";
break;
default: 
$loading_function = "load_generic";
}
$loading_function($URL);
