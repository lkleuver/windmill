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
    <div></div>
  </div>
  <div id=\"content\">
    <div id=\"nav\">
      <ul class=\"menu\">
        <li><a href=\"";
        // line 18
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/\">Home</a></li>
        <li><a href=\"";
        // line 19
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about\">About Us</a>
          <ul>
            <li><a href=\"";
        // line 21
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#whatiswindmillwindup\">What is Windmill Windup?</a><li>
            <li><a href=\"";
        // line 22
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">What is Ultimate Frisbee?</a></li>
            <li><a href=\"";
        // line 23
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Green Windmill</a></li>
            <li><a href=\"";
        // line 24
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Charity</a></li>
            <li><a href=\"";
        // line 25
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">History</a></li>
            <li><a href=\"";
        // line 26
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Our Sponsors</a></li>
            <li><a href=\"";
        // line 27
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Our Crew</a></li>
            <li><a href=\"";
        // line 28
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">Volunteers</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 31
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Tourney</a></li>
        <li><a href=\"";
        // line 32
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/media\">Photos &amp; Video</a></li>
        <li><a href=\"";
        // line 33
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/gear\">Windmill gear</a></li>
        <li><a href=\"";
        // line 34
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam\">Amsterdam</a></li>
        <li><a href=\"";
        // line 35
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/contact\">Contact</a></li>
        <li><a href=\"";
        // line 36
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
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>
    <div id=\"footer\">
      
    </div>
    
  </div>
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

    // line 44
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
        return array (  186 => 44,  181 => 9,  175 => 5,  141 => 45,  139 => 44,  127 => 36,  122 => 35,  117 => 34,  112 => 33,  107 => 32,  102 => 31,  95 => 28,  90 => 27,  85 => 26,  80 => 25,  75 => 24,  70 => 23,  65 => 22,  60 => 21,  54 => 19,  49 => 18,  39 => 10,  37 => 9,  30 => 6,  26 => 5,  20 => 1,);
    }
}
