<?php

/* MainHomeBundle::public/header.html.twig */
class __TwigTemplate_5fbf855f9e0015ebbcb03e2deb256cf48eb99cc3be43e3547779e1b4d85a3719 extends Twig_Template
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
        echo "<!--modal for login-->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title login-header\" id=\"myModalLabel\">Login</h4>
      </div>
      <div class=\"modal-body\">
      \t<div class=\"input-group v-form-element\">
        \t<p class=\"grey_text\">Please login to continue using the application.</p>
        </div>
      \t<!--form components starts here-->
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-user\"></span>
            <input type=\"text\" class=\"form-control v-textbox\" placeholder=\"Username\">
        </div>
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-info-sign\"></span>
            <input type=\"password\" class=\"form-control v-textbox\" placeholder=\"Password\">
        </div>
        <!--form component ends here-->
      </div>
      <div class=\"modal-footer\">
        <!--<button type=\"button\" class=\"btn btn-default btn-black\" data-dismiss=\"modal\">Close</button>-->
        <button type=\"button\" class=\"btn btn-default btn-black\">LOGIN</button>
      </div>
    </div>
  </div>
</div>
<!--modal for login ends here-->
<!--modal for sign up box-->
<div class=\"modal fade\" id=\"mySignUp\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title login-header\" id=\"mySignUpLabel\">Sign Up</h4>
      </div>
      <div class=\"modal-body\">
      \t<div class=\"input-group v-form-element\">
        \t<p class=\"grey_text\">Please sign up to explore the wide range of management tools we provide.</p>
        </div>
      \t<!--form components starts here-->
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-envelope\"></span>
            <input type=\"text\" class=\"form-control v-textbox\" placeholder=\"Email\">
        </div>
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-user\"></span>
            <input type=\"text\" class=\"form-control v-textbox\" placeholder=\"Username\">
        </div>
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-info-sign\"></span>
            <input type=\"password\" class=\"form-control v-textbox\" placeholder=\"Password\">
        </div>
        <div class=\"input-group v-form-element\">
            <span class=\"input-group-addon glyphicon glyphicon-info-sign\"></span>
            <input type=\"password\" class=\"form-control v-textbox\" placeholder=\"Confirm Password\">
        </div>
        <!--form component ends here-->
      </div>
      <div class=\"modal-footer\">
        <!--<button type=\"button\" class=\"btn btn-default btn-black\" data-dismiss=\"modal\">Close</button>-->
        <button type=\"button\" class=\"btn btn-default btn-black\">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!--modal for sign up box ends here-->
<!--modal for take a tour box-->
    <div class=\"modal fade bs-example-modal-lg\" id=\"videoBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title login-header\" id=\"mySignUpLabel\">Take a tour.</h4>
          </div>
          <div class=\"modal-body\">
          \t<!--form components starts here-->
            <div class=\"video_container\">
                <div class=\"video_box\">
                \t<iframe width=\"100%\" height=\"100%\" src=\"//www.youtube.com/embed/VRuoR--LdqQ\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
            </div>
            <!--form component ends here-->
          </div>
        </div>
      </div>
    </div>
<!--modal for take a tour box ends here-->
<div class=\"container-fluid main-container\">
\t<nav class=\"navbar navbar-default mynav navbar-fixed-top\" role=\"navigation\">
\t  <div class=\"container-fluid\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"#\"><img src=\"http://www.placehold.it/300X50&text=YourLogo\" class=\"img-responsive\" alt=\"your logo\"> </a>
\t    </div>
\t
\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse v_navbar\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li class=\"";
        // line 109
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "Home")) {
            echo "active";
        }
        echo " mynav\"><a href=\"index\">Home</a></li>
\t        <li class=\"";
        // line 110
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "FAQ")) {
            echo "active";
        }
        echo " mynav\"><a href=\"faq\">FAQ</a></li>
\t        <li class=\"mynav\"><a href=\"#\">Pricing</a></li>
\t        <li class=\"";
        // line 112
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "About")) {
            echo "active";
        }
        echo " mynav\"><a href=\"about\">About</a></li>
\t        <li class=\"mynav\"><button class=\"btn btn-success enroll-button\" data-toggle=\"modal\" data-target=\"#mySignUp\">Sign Up</button></li>
\t        <li class=\"mynav\"><button class=\"btn btn-success enroll-button\" data-toggle=\"modal\" data-target=\"#myModal\">Login</button></li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>";
    }

    public function getTemplateName()
    {
        return "MainHomeBundle::public/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 112,  135 => 110,  129 => 109,  19 => 1,);
    }
}
