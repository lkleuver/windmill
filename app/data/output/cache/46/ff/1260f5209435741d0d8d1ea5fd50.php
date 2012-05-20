<?php

/* content.html */
class __TwigTemplate_46ff1260f5209435741d0d8d1ea5fd50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  <h1>";
        // line 5
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "post_title"), "html", null, true);
        echo "</h1>
  ";
        // line 6
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->getAttribute($_content_, "post_content");
        echo "

";
    }

    public function getTemplateName()
    {
        return "content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
