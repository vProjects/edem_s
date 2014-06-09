<?php

/* MainHomeBundle:Default:faq.html.twig */
class __TwigTemplate_5c3a1bba3d1751f747bb252a3dc1e5d7681e23040daf781f5dd9bb6efcc3742f extends Twig_Template
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
    <div class=\"container-fluid faq_info_outline\">
    \t<div class=\"col-md-8\">
        \t<h3>Find Answers</h3>
            <form action=\"#\" class=\"form-inline faq_answer_form\" role=\"form\">
            \t<input type=\"text\" class=\"form-control faq_answer_search\">
                <input type=\"button\" class=\"btn btn-info\" value=\"Search\">
            </form>
            <div class=\"faq_qusetions_outline\">
            \t<div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t1. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseOne\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t2. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseTwo\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t3. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseThree\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t4. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseFour\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseFour\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t5. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseFive\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseFive\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t6. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseSix\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseSix\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t7. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseSeven\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseSeven\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t8. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseEight\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseEight\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t9. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseNine\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseNine\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class=\"accordion-group faq_qusetions_part\">
                \t<h5 class=\"accordion-heading faq_qusetions_text\">
                    \t10. <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTen\">Lorem Ipsum is simply dummy text?</a>
                    </h5>
                    <p class=\"faq_qusetions_para\">Lorem | March 01, 2014</p>
                    
                    <div id=\"collapseTen\" class=\"accordion-body collapse\">
                    \t<p class=\"faq_answer_outline\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class=\"col-md-4\">
        \t
        </div>
    </div>
    <!-- body ends here -->
    
    ";
        // line 128
        $this->env->loadTemplate("MainHomeBundle::public/footer.html.twig")->display($context);
        // line 129
        echo "    
\t</div>
\t<!-- main container ends here -->
";
    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        // line 135
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
        return "MainHomeBundle:Default:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 135,  174 => 134,  167 => 129,  165 => 128,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 4,);
    }
}
