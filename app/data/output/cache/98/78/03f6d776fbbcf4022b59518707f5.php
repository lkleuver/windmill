<?php

/* menu.html */
class __TwigTemplate_987803f6d776fbbcf4022b59518707f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"menu\">
  <li";
        // line 2
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/\">Home</a></li>
  <li";
        // line 3
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "about")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about\">About Us</a>
    <ul>
      <li><a href=\"";
        // line 5
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#whatiswindmillwindup\">What is Windmill Windup?</a></li>
      <li><a href=\"";
        // line 6
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about#\">What is Ultimate Frisbee?</a></li>
      <li><a href=\"";
        // line 7
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/green\">Green Windmill</a></li>
      <li><a href=\"";
        // line 8
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/charity\">Charity</a></li>
      <li><a href=\"";
        // line 9
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/history\">History</a></li>
      <li><a href=\"";
        // line 10
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/sponsors\">Our Sponsors</a></li>
      <li><a href=\"";
        // line 11
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/crew\">Our Crew</a></li>
      <li><a href=\"";
        // line 12
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/about/volunteers\">Volunteers</a></li>
    </ul>
  </li>

  <li";
        // line 16
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "tourney")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Tourney</a>
    <ul>
      <li><a href=\"";
        // line 18
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Registration and fees</a></li>
      <li><a href=\"";
        // line 19
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Schedule of Events</a></li>
      <li><a href=\"";
        // line 20
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Accommodation</a></li>
      <li><a href=\"";
        // line 21
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Food</a></li>
      <li><a href=\"";
        // line 22
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Field Map</a></li>
      <li><a href=\"";
        // line 23
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Directions</a></li>
      <li><a href=\"";
        // line 24
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Teams</a></li>
      <li><a href=\"";
        // line 25
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Pickup</a></li>
      <li><a href=\"";
        // line 26
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/tourney\">Rules and format</a></li>
    </ul>
  </li>

  <li";
        // line 30
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "media")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/media\">Photos &amp; Video</a>
    <ul>
      <li><a href=\"";
        // line 32
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/media#photos\">Photos</a></li>
      <li><a href=\"";
        // line 33
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/media#video\">Video</a></li>
    </ul>
  </li>
  
  <li";
        // line 37
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "gear")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/gear\">Windmill gear</a>
    <ul>
      <li><a href=\"";
        // line 39
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/gear\">Buy yours</a></li>
      <li><a href=\"";
        // line 40
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/wherehasyourgearbeen\">Where has your gear been?</a></li>
    </ul>
  </li>
  
  <li";
        // line 44
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "amsterdam")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam\">Amsterdam</a>
    <ul>
      <li><a href=\"";
        // line 46
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam\">Tourist info</a></li>
      <li><a href=\"";
        // line 47
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam#bikes\">Bikes</a></li>
      <li><a href=\"";
        // line 48
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam#eat\">Places to Eat</a></li>
      <li><a href=\"";
        // line 49
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/amsterdam#hotels\">Hotels</a></li>
    </ul>
  </li>
  
  <li";
        // line 53
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "contact")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/contact\">Contact</a></li>
  <li";
        // line 54
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($_section_ == "press")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["base"])) { $_base_ = $context["base"]; } else { $_base_ = null; }
        echo twig_escape_filter($this->env, $_base_, "html", null, true);
        echo "/press\">Press</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 54,  225 => 53,  217 => 49,  212 => 48,  207 => 47,  202 => 46,  191 => 44,  183 => 40,  178 => 39,  167 => 37,  159 => 33,  154 => 32,  143 => 30,  135 => 26,  130 => 25,  125 => 24,  120 => 23,  115 => 22,  100 => 19,  95 => 18,  84 => 16,  76 => 12,  71 => 11,  66 => 10,  61 => 9,  56 => 8,  51 => 7,  46 => 6,  41 => 5,  17 => 1,  110 => 21,  105 => 20,  99 => 5,  65 => 30,  63 => 29,  50 => 18,  48 => 17,  39 => 10,  37 => 9,  30 => 3,  26 => 5,  20 => 2,);
    }
}
