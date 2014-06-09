<?php

/* MainHomeBundle:Default:index.html.twig */
class __TwigTemplate_853e52056a456c98231c67c9a3bf25054cecefc539837c0e2ca089903de5ef93 extends Twig_Template
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
        echo "        \t\t
\t<!-- body starts here -->
\t<div class=\"parallax\">
\t\t<ul id=\"scene\" class=\"scene\"
            data-calibrate-x=\"false\"
            data-calibrate-y=\"false\"
            data-invert-x=\"false\"
            data-invert-y=\"true\"
            data-limit-x=\"false\"
            data-limit-y=\"10\"
            data-scalar-x=\"2\"
            data-scalar-y=\"8\"
            data-friction-x=\"0.2\"
            data-friction-y=\"0.8\">\t\t
\t\t\t
\t\t\t<li class=\"layer\" data-depth=\"1.00\"><img class=\"img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide1.png"), "html", null, true);
        echo "\" alt=\"slide1\"></li>
\t\t\t<li class=\"layer\" data-depth=\"0.00\">
\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t  <h1>Manage Cources in a New Way</h1>
\t\t\t\t  <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</h2>
\t\t\t\t  <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</h2>
\t\t\t\t  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
\t\t\t\t  <p><button type=\"button\" class=\"btn btn-success btn-lg btn-black\" data-toggle=\"modal\" data-target=\"#videoBox\">Take a tour</button></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</div>
\t\t<!-- slider ends here -->
\t\t<!-- panel starts here -->
\t\t<div class=\"container-fluid step-panel\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 step-content\">
\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</P>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 step-box\">
\t\t\t\t\t<div class=\"step-ins\">
\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/step1.png"), "html", null, true);
        echo "\" alt=\"first step\" />
\t\t\t\t\t\t<h3>STEP I</h3>
\t\t\t\t\t\t<p>Sign Up to create an account</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 step-box\">
\t\t\t\t\t<div class=\"step-ins\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/step2.png"), "html", null, true);
        echo "\" alt=\"second step\" />
\t\t\t\t\t\t<h3>STEP II</h3>
\t\t\t\t\t\t<p>Create an Instituion</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 step-box\">
\t\t\t\t\t<div class=\"step-ins\">
\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/step3.png"), "html", null, true);
        echo "\" alt=\"third step\" />
\t\t\t\t\t\t<h3>STEP III</h3>
\t\t\t\t\t\t<p>Manage Instituion from anywhere</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t</div>\t\t
\t\t<!-- panel endss here -->
\t\t<!-- state of art section starts here -->
\t\t<div class=\"container-fluid state-art\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h3>State of the art application</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer as adip cing elit, sed diam nonummy nibhuis a mod tin cid unt ut laoreet dolore magna aliq uam erat vol ut pat. Ut wisi enim ad minim ve niam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea comm odo consequat.</p>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stateofart.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"stat of the art\" />
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div class=\"container-fluid state-art mng-inst\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/inst.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"institution\" />
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h3>Manage Whole Institution</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer as adip cing elit, sed diam nonummy nibhuis a mod tin cid unt ut laoreet dolore magna aliq uam erat vol ut pat. Ut wisi enim ad minim ve niam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea comm odo consequat.</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"container-fluid step-panel\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 newsletter\">
\t\t\t\t\t<h2>Ready to start using our application?</h2>
\t\t\t\t\t<P>Create an account by filling up the form.</P>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<form class=\"form-inline\" role=\"form\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
\t\t\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
\t\t\t\t  </div>
\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\">Sign Up</button>
\t\t\t\t</form>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
        // line 120
        $this->env->loadTemplate("MainHomeBundle::public/footer.html.twig")->display($context);
        // line 121
        echo "\t\t
\t\t<!-- state of art section ends here -->
\t\t
\t\t<!-- body ends here -->
\t</div>
\t<!-- main container ends here -->
";
    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
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
        return "MainHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 130,  187 => 129,  177 => 121,  175 => 120,  140 => 88,  130 => 81,  108 => 62,  98 => 55,  88 => 48,  61 => 24,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 4,);
    }
}
