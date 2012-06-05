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
      ";
        // line 17
        $this->env->loadTemplate("menu.html")->display($context);
        // line 18
        echo "      <ul class=\"social\">
        <li class=\"twitter\">
          <a href=\"https://twitter.com/windmillwindup\" class=\"twitter-follow-button\" data-show-count=\"false\" data-show-screen-name=\"false\">Follow @windmillwindup</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
        </li>
        <li>
          <div class=\"fb-like\" data-href=\"http://www.facebook.com/WindmillWindup\" data-send=\"true\" data-layout=\"button_count\" data-width=\"131\" data-show-faces=\"false\"></div>
        </li>
      </ul>
    </div>
    <div id=\"site\">
    \t";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
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

    // line 29
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
        return array (  110 => 29,  105 => 9,  99 => 5,  65 => 30,  63 => 29,  50 => 18,  48 => 17,  39 => 10,  37 => 9,  30 => 6,  26 => 5,  20 => 1,);
    }
}
