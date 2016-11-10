<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_7bcb7d1973106e76be5d0f8f6acb9847487a7f7a9aac6722f14f7fa346f621d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bc1aace3fb8024ddd8f2941a21f05b6aaf8eeb88dfd1534b5bd892de6c8bffc = $this->env->getExtension("native_profiler");
        $__internal_5bc1aace3fb8024ddd8f2941a21f05b6aaf8eeb88dfd1534b5bd892de6c8bffc->enter($__internal_5bc1aace3fb8024ddd8f2941a21f05b6aaf8eeb88dfd1534b5bd892de6c8bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc1aace3fb8024ddd8f2941a21f05b6aaf8eeb88dfd1534b5bd892de6c8bffc->leave($__internal_5bc1aace3fb8024ddd8f2941a21f05b6aaf8eeb88dfd1534b5bd892de6c8bffc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8648d0a053934954dc2e9db015cebd9c51e235d95910e785275e589f32c317e6 = $this->env->getExtension("native_profiler");
        $__internal_8648d0a053934954dc2e9db015cebd9c51e235d95910e785275e589f32c317e6->enter($__internal_8648d0a053934954dc2e9db015cebd9c51e235d95910e785275e589f32c317e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_8648d0a053934954dc2e9db015cebd9c51e235d95910e785275e589f32c317e6->leave($__internal_8648d0a053934954dc2e9db015cebd9c51e235d95910e785275e589f32c317e6_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9934b92f35535a14d5ed87a0dacfba38d51b573b773b847fe5dd8356d4f2a5de = $this->env->getExtension("native_profiler");
        $__internal_9934b92f35535a14d5ed87a0dacfba38d51b573b773b847fe5dd8356d4f2a5de->enter($__internal_9934b92f35535a14d5ed87a0dacfba38d51b573b773b847fe5dd8356d4f2a5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" =>         // line 6
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_9934b92f35535a14d5ed87a0dacfba38d51b573b773b847fe5dd8356d4f2a5de->leave($__internal_9934b92f35535a14d5ed87a0dacfba38d51b573b773b847fe5dd8356d4f2a5de_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*  {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,*/
/* 'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
