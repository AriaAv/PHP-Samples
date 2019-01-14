<?php
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}
//*****************************************
class BadTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>
