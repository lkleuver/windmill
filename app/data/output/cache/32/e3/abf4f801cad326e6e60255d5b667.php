<?php

/* home.html */
class __TwigTemplate_32e3abf4f801cad326e6e60255d5b667 extends Twig_Template
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
    <div class=\"welcome block\">
      <h1>";
        // line 7
        if (isset($context["welcome"])) { $_welcome_ = $context["welcome"]; } else { $_welcome_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_welcome_, "post_title"), "html", null, true);
        echo "</h1>
      ";
        // line 8
        if (isset($context["welcome"])) { $_welcome_ = $context["welcome"]; } else { $_welcome_ = null; }
        echo $this->getAttribute($_welcome_, "post_content");
        echo "
    </div>

    <div class=\"news block\">
      <h1>The News</h1>
      ";
        // line 13
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <div class=\"post\">
          <h3><a href=\"/news/post/";
            // line 15
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "post_name"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "post_title"), "html", null, true);
            echo "</a></h3>
          ";
            // line 16
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "post_excerpt");
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </div>
  </div>
  
  <div id=\"side-content\">
    bla bla
  </div>
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
        return array (  74 => 19,  64 => 16,  56 => 15,  53 => 14,  48 => 13,  39 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
