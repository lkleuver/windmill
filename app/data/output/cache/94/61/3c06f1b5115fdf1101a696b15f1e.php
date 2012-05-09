<?php

/* base.html */
class __TwigTemplate_94613c06f1b5115fdf1101a696b15f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\" />
\t";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "</head>
<body>
  \t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Windmill Windup 2012";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo " base ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  50 => 7,  44 => 5,  39 => 11,  37 => 10,  33 => 8,  31 => 7,  20 => 1,  29 => 4,  26 => 5,);
    }
}
