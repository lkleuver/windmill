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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/style/master.css\" />

\t<link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\" />
\t";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "</head>
<body>
  <div id=\"header\">
    
  </div>
  <div id=\"nav\">
    <ul class=\"menu\">
      <li><a href=\"";
        // line 17
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/\">Home</a></li>
      <li><a href=\"";
        // line 18
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about\">About Us</a>
        <ul>
          <li><a href=\"";
        // line 20
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#whatiswindmillwindup\">What is Windmill Windup?</a><li>
          <li><a href=\"";
        // line 21
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">What is Ultimate Frisbee?</a></li>
          <li><a href=\"";
        // line 22
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Green Windmill</a></li>
          <li><a href=\"";
        // line 23
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Charity</a></li>
          <li><a href=\"";
        // line 24
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">History</a></li>
          <li><a href=\"";
        // line 25
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Our Sponsors</a></li>
          <li><a href=\"";
        // line 26
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Our Crew</a></li>
          <li><a href=\"";
        // line 27
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Volunteers</a></li>
        </ul>
      </li>
      <li><a href=\"";
        // line 30
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Tourney</a></li>
      <li><a href=\"";
        // line 31
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/media\">Photos &amp; Video</a></li>
      <li><a href=\"";
        // line 32
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/gear\">Windmill gear</a></li>
      <li><a href=\"";
        // line 33
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam\">Amsterdam</a></li>
      <li><a href=\"";
        // line 34
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/contact\">Contact</a></li>
      <li><a href=\"";
        // line 35
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/press\">Press</a></li>
    </ul>
    <ul class=\"social\">
      <li>Tw</li>
      <li>Fb</li>
    </ul>
  </div>
  <div id=\"site\">
  \t";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "  </div>
  
  <div id=\"fb-root\"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '305820299501025', // App ID
        channelUrl : '//www.windmillwindup.com/channel.html', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });

      // Additional initialization code here
    };

    // Load the SDK Asynchronously
    (function(d){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = \"//connect.facebook.net/en_US/all.js\";
       ref.parentNode.insertBefore(js, ref);
     }(document));
  </script>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Windmill Windup 2012";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        echo " base ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 43,  176 => 9,  170 => 5,  140 => 44,  138 => 43,  126 => 35,  121 => 34,  116 => 33,  111 => 32,  106 => 31,  101 => 30,  94 => 27,  89 => 26,  84 => 25,  79 => 24,  74 => 23,  69 => 22,  64 => 21,  59 => 20,  53 => 18,  39 => 10,  37 => 9,  30 => 6,  20 => 1,  48 => 17,  40 => 9,  35 => 8,  29 => 4,  26 => 5,);
    }
}
