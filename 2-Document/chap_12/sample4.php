<?php
$cpdf = cpdf_open(0);
cpdf_page_init($cpdf, 1, 0, 595, 842, 1.0);
// set the fill color to red
cpdf_setrgbcolor($cpdf, 1, 0, 0);
// draw a (180 * 100) rectangle
cpdf_rect($cpdf, 645, 400, 180, 100);
// fill the rectangle
cpdf_fill($cpdf);
cpdf_finalize($cpdf);
Header("Content-type: application/pdf");
cpdf_output_buffer($cpdf);
cpdf_close($cpdf);
?>
