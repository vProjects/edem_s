<?php

/* MainHomeBundle::public/footer.html.twig */
class __TwigTemplate_fe0341eb5a9a08caa84aa5e17942291ad66fb74b997cce1ba7a6dcbbcfb504b0 extends Twig_Template
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
        echo "<div class=\"container-fluid footer\">
\t<div class=\"col-lg-6\">\t\t\t\t
\t\t<ul class=\"navbar-nav\">
\t\t\t<li class=\"mynav\"><a href=\"#\">2012 DE. ALL Rights Reserved</a></li>
\t\t</ul>\t\t\t
\t</div>
\t<div class=\"col-lg-6\">
\t      <ul class=\"navbar-nav navbar-right\">
\t        <li class=\"active mynav\"><a href=\"#\">FAQ</a></li>
\t        <li class=\"mynav\"><a href=\"#\">About Us</a></li>
\t        <li class=\"mynav\"><a href=\"#\">Terms of Use</a></li>
\t        <li class=\"mynav\"><a href=\"#\">Contact Us</a></li>
\t        <li class=\"mynav\"><a href=\"#\">Privacy Policy</a></li>
\t        <li class=\"social\"><a href=\"#\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\" /></a></li>
\t        <li class=\"social\"><a href=\"#\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"twitter\" /></a></li>
\t      </ul>
\t\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "MainHomeBundle::public/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 14,  19 => 1,);
    }
}
