<?php

/* news/post.html */
class __TwigTemplate_c83db553918552dea3310752067c6d8c extends Twig_Template
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
  <div id=\"main-content\">
    
    <div class=\"block\">
      <h1>";
        // line 8
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "post_title"), "html", null, true);
        echo "</h1>
      ";
        // line 9
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "post_content");
        echo "
    </div>
    
    <div class=\"block\">
      <div class=\"fb-comments\" data-href=\"http://windmillwindup.com/news/post/";
        // line 13
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "post_name"), "html", null, true);
        echo "\" data-num-posts=\"2\" data-width=\"608\"></div>
    </div>
    
  </div>
  
  <div id=\"side-content\">
    bla bla
  </div>
";
    }

    public function getTemplateName()
    {
        return "news/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  40 => 9,  35 => 8,  29 => 4,  26 => 3,);
    }
}
