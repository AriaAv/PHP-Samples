if(!($fp = fopen("./address.dat", "r")))
   die ("Cannot open the address data file.");
do{
   $address = '';
   $field = fread($fp, $name_field_len);
   $address .= $field;
   $field = fread($fp, $country_code_field_len);
   $address .= $field;
   $field = fread($fp, $country_field_len);
   $address .= $field;
   $field = fread($fp, $email_field_len);
   $address .= $field;
   echo "$address<BR>";
}while($field);
