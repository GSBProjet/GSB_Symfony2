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
        $__internal_969842dc519921dea1c5bb59b760ee73673c18e2cecfecb2544d2d7999cd599e = $this->env->getExtension("native_profiler");
        $__internal_969842dc519921dea1c5bb59b760ee73673c18e2cecfecb2544d2d7999cd599e->enter($__internal_969842dc519921dea1c5bb59b760ee73673c18e2cecfecb2544d2d7999cd599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969842dc519921dea1c5bb59b760ee73673c18e2cecfecb2544d2d7999cd599e->leave($__internal_969842dc519921dea1c5bb59b760ee73673c18e2cecfecb2544d2d7999cd599e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eaff270275591173511d6228da4859753a593f4d2d6f7a1549ff85b530de851d = $this->env->getExtension("native_profiler");
        $__internal_eaff270275591173511d6228da4859753a593f4d2d6f7a1549ff85b530de851d->enter($__internal_eaff270275591173511d6228da4859753a593f4d2d6f7a1549ff85b530de851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eaff270275591173511d6228da4859753a593f4d2d6f7a1549ff85b530de851d->leave($__internal_eaff270275591173511d6228da4859753a593f4d2d6f7a1549ff85b530de851d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6091f9459f4401cf90f2cf84f6b2b5835c6fee83555573490c8d739fdb665517 = $this->env->getExtension("native_profiler");
        $__internal_6091f9459f4401cf90f2cf84f6b2b5835c6fee83555573490c8d739fdb665517->enter($__internal_6091f9459f4401cf90f2cf84f6b2b5835c6fee83555573490c8d739fdb665517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6091f9459f4401cf90f2cf84f6b2b5835c6fee83555573490c8d739fdb665517->leave($__internal_6091f9459f4401cf90f2cf84f6b2b5835c6fee83555573490c8d739fdb665517_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5c47f514edbb41878bbc0932d474c9f430de2956182081e23de48f4c1ca41b = $this->env->getExtension("native_profiler");
        $__internal_4c5c47f514edbb41878bbc0932d474c9f430de2956182081e23de48f4c1ca41b->enter($__internal_4c5c47f514edbb41878bbc0932d474c9f430de2956182081e23de48f4c1ca41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c5c47f514edbb41878bbc0932d474c9f430de2956182081e23de48f4c1ca41b->leave($__internal_4c5c47f514edbb41878bbc0932d474c9f430de2956182081e23de48f4c1ca41b_prof);

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
