<?
function startElement($xml_parser, $name, $attributes) {
 print("<p><i>Encountered Start Element For:</i>$name\n");
   }

function endElement($xml_parser, $name) {
     print("<p><i>Encountered End Element For:</i>$name\n");
   }

function characterData($xml_parser, $data) {
    if($data != "\n") { 
      print("<p><i>Encountered Character Data:</i>$data\n");
    }
  }

function load_data($file) {
    $fh = fopen($file, "r") or die ("<P>COULD NOT OPEN FILE!");
    $data = fread($fh, filesize($file));
    return $data;
  }
/***** MAIN *****/
  $file = "simple.xml";
  $xml_parser = xml_parser_create();
  xml_set_element_handler($xml_parser, "startElement", "endElement");
  xml_set_character_data_handler($xml_parser, "characterData");
  xml_parse($xml_parser, load_data($file)) or die ("<P>ERROR PARSING XML!");
  xml_parser_free($xml_parser);
?>
