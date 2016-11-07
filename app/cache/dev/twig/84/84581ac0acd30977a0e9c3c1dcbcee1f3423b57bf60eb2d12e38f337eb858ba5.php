<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8de795b598e1404ffd90621cb8c66c33b6a79ad7e022366bd7e83d3fc2ee08ea extends Twig_Template
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
        $__internal_ecd4af98f20d6ed7ddc458ff5bef4dfe665aa801302cec9163ff04de6edb0688 = $this->env->getExtension("native_profiler");
        $__internal_ecd4af98f20d6ed7ddc458ff5bef4dfe665aa801302cec9163ff04de6edb0688->enter($__internal_ecd4af98f20d6ed7ddc458ff5bef4dfe665aa801302cec9163ff04de6edb0688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd4af98f20d6ed7ddc458ff5bef4dfe665aa801302cec9163ff04de6edb0688->leave($__internal_ecd4af98f20d6ed7ddc458ff5bef4dfe665aa801302cec9163ff04de6edb0688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fb14444ae9a60224897ff5677a40eac44284c7bdc72080200dd945c50036dab = $this->env->getExtension("native_profiler");
        $__internal_5fb14444ae9a60224897ff5677a40eac44284c7bdc72080200dd945c50036dab->enter($__internal_5fb14444ae9a60224897ff5677a40eac44284c7bdc72080200dd945c50036dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fb14444ae9a60224897ff5677a40eac44284c7bdc72080200dd945c50036dab->leave($__internal_5fb14444ae9a60224897ff5677a40eac44284c7bdc72080200dd945c50036dab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f958132d076102f851805aa1f854878b99234df076feddede68cfa2426226b96 = $this->env->getExtension("native_profiler");
        $__internal_f958132d076102f851805aa1f854878b99234df076feddede68cfa2426226b96->enter($__internal_f958132d076102f851805aa1f854878b99234df076feddede68cfa2426226b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f958132d076102f851805aa1f854878b99234df076feddede68cfa2426226b96->leave($__internal_f958132d076102f851805aa1f854878b99234df076feddede68cfa2426226b96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb59708007093c4064ec977380a1d47f1e2ab963332c9e72df64731033278521 = $this->env->getExtension("native_profiler");
        $__internal_eb59708007093c4064ec977380a1d47f1e2ab963332c9e72df64731033278521->enter($__internal_eb59708007093c4064ec977380a1d47f1e2ab963332c9e72df64731033278521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb59708007093c4064ec977380a1d47f1e2ab963332c9e72df64731033278521->leave($__internal_eb59708007093c4064ec977380a1d47f1e2ab963332c9e72df64731033278521_prof);

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
