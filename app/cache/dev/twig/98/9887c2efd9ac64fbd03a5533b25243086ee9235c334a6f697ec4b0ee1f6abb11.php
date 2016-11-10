<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_261dbb8539733d9391fcbee90a2606faebd277f77ce42d8185fc9af9f1007829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdbc75a773ea175e03ff7edeff44e0d71837cf1c983ab3f1d4bbc149343ded70 = $this->env->getExtension("native_profiler");
        $__internal_cdbc75a773ea175e03ff7edeff44e0d71837cf1c983ab3f1d4bbc149343ded70->enter($__internal_cdbc75a773ea175e03ff7edeff44e0d71837cf1c983ab3f1d4bbc149343ded70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdbc75a773ea175e03ff7edeff44e0d71837cf1c983ab3f1d4bbc149343ded70->leave($__internal_cdbc75a773ea175e03ff7edeff44e0d71837cf1c983ab3f1d4bbc149343ded70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01ef1026c0edec7cd5d6e195966b44f458296f39ae79ba719c47869414babfd8 = $this->env->getExtension("native_profiler");
        $__internal_01ef1026c0edec7cd5d6e195966b44f458296f39ae79ba719c47869414babfd8->enter($__internal_01ef1026c0edec7cd5d6e195966b44f458296f39ae79ba719c47869414babfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01ef1026c0edec7cd5d6e195966b44f458296f39ae79ba719c47869414babfd8->leave($__internal_01ef1026c0edec7cd5d6e195966b44f458296f39ae79ba719c47869414babfd8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ec2dc476820c34c9c56a0248f678725b577422b76dea043ad36f0a549eb21e8 = $this->env->getExtension("native_profiler");
        $__internal_3ec2dc476820c34c9c56a0248f678725b577422b76dea043ad36f0a549eb21e8->enter($__internal_3ec2dc476820c34c9c56a0248f678725b577422b76dea043ad36f0a549eb21e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ec2dc476820c34c9c56a0248f678725b577422b76dea043ad36f0a549eb21e8->leave($__internal_3ec2dc476820c34c9c56a0248f678725b577422b76dea043ad36f0a549eb21e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b85b2cca4a7922b2fba1b5bbca469d9ab605c88a63d75837c7d5f567a0a1018e = $this->env->getExtension("native_profiler");
        $__internal_b85b2cca4a7922b2fba1b5bbca469d9ab605c88a63d75837c7d5f567a0a1018e->enter($__internal_b85b2cca4a7922b2fba1b5bbca469d9ab605c88a63d75837c7d5f567a0a1018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b85b2cca4a7922b2fba1b5bbca469d9ab605c88a63d75837c7d5f567a0a1018e->leave($__internal_b85b2cca4a7922b2fba1b5bbca469d9ab605c88a63d75837c7d5f567a0a1018e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
