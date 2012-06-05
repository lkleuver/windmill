<?php

/* home.html */
class __TwigTemplate_32e3abf4f801cad326e6e60255d5b667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/style/section/home.css\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
  <div id=\"main-content\">
    <div class=\"welcome block\">
      <h1>";
        // line 11
        if (isset($context["welcome"])) { $_welcome_ = $context["welcome"]; } else { $_welcome_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_welcome_, "post_title"), "html", null, true);
        echo "</h1>
      
      ";
        // line 13
        if (isset($context["welcome"])) { $_welcome_ = $context["welcome"]; } else { $_welcome_ = null; }
        echo $this->getAttribute($_welcome_, "post_content");
        echo "
    </div>

    <div class=\"news block\">
      <h1>The News</h1>
      ";
        // line 18
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "        <div class=\"post\">
          <h3><a href=\"/news/post/";
            // line 20
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "post_name"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "post_title"), "html", null, true);
            echo "</a><span>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "post_date"), "D F jS \\a\\t g:ia"), "html", null, true);
            echo "</span></h3>
          ";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "post_excerpt");
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </div>
    
    <div class=\"sponsors block\">
      <h1>";
        // line 27
        if (isset($context["sponsors"])) { $_sponsors_ = $context["sponsors"]; } else { $_sponsors_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sponsors_, "post_title"), "html", null, true);
        echo "</h1>
      ";
        // line 28
        if (isset($context["sponsors"])) { $_sponsors_ = $context["sponsors"]; } else { $_sponsors_ = null; }
        echo $this->getAttribute($_sponsors_, "post_content");
        echo "
    </div>
    
  </div>
  
  <div id=\"side-content\">
    ";
        // line 34
        if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sidebar_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "      <div class=\"sidebar-post\">
        ";
            // line 36
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "post_content");
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  118 => 36,  115 => 35,  110 => 34,  100 => 28,  95 => 27,  90 => 24,  80 => 21,  69 => 20,  66 => 19,  61 => 18,  52 => 13,  46 => 11,  41 => 8,  38 => 7,  30 => 4,  27 => 3,);
    }
}
