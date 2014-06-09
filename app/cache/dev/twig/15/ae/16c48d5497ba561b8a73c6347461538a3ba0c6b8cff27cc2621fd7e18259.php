<?php

/* MainHomeBundle:Default:about.html.twig */
class __TwigTemplate_15ae16c48d5497ba561b8a73c6347461538a3ba0c6b8cff27cc2621fd7e18259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t
\t";
        // line 8
        $this->env->loadTemplate("MainHomeBundle::public/header.html.twig")->display($context);
        // line 9
        echo "    
\t<!-- body starts here -->
\t<div class=\"container-fluid about-founder\">
\t\t<div class=\"col-lg-6\">
\t\t\t<h3>State of the art application</h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer as adip cing elit, sed diam nonummy nibhuis a mod tin cid unt ut laoreet dolore magna aliq uam erat vol ut pat. Ut wisi enim ad minim ve niam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea comm odo consequat.</p>
\t\t\t
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/edem.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"about edem\" />
\t\t</div>
\t\t
\t</div>
\t<div class=\"container-fluid step-panel\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 step-content\">
\t\t\t\t<h2>OUR MISSION</h2>
\t\t\t\t<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</P>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process1.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process2.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process3.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process4.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process5.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/process6.png"), "html", null, true);
        echo "\" alt=\"process1\" class=\"img-responsive\"/>
\t\t\t\t<P>Lorem ipsum dolor sit amet</P>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t
\t</div>\t
\t<div class=\"container-fluid contact-map\">
\t\t\t<iframe class=\"col-lg-12 col-xs-12 col-sm-12 contact-map\" height=\"500px;\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=kolkata&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=kolkata&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>
\t</div>

\t<!-- body ends here -->
    
    ";
        // line 67
        $this->env->loadTemplate("MainHomeBundle::public/footer.html.twig")->display($context);
        // line 68
        echo "    
\t</div>
\t<!-- main container ends here -->
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t// Yep, that's it!
\t\t\$('#scene').parallax();
\t</script>
";
    }

    public function getTemplateName()
    {
        return "MainHomeBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 74,  134 => 73,  127 => 68,  125 => 67,  108 => 53,  101 => 49,  94 => 45,  85 => 39,  78 => 35,  71 => 31,  55 => 18,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 4,);
    }
}
