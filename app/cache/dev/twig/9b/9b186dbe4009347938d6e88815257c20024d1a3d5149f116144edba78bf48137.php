<?php

/* PgGsbFraisBundle:SaisirFrais:erreurs.html.twig */
class __TwigTemplate_f29747bc635338ba65bb33d57796d2c520a4110961cbdd3ae7dbe31c7466ee1c extends Twig_Template
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
        $__internal_952f4c6a7ee163ab1899f67250c5ed2000b42313f04357982aa1e5a33f812d62 = $this->env->getExtension("native_profiler");
        $__internal_952f4c6a7ee163ab1899f67250c5ed2000b42313f04357982aa1e5a33f812d62->enter($__internal_952f4c6a7ee163ab1899f67250c5ed2000b42313f04357982aa1e5a33f812d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig"));

        // line 1
        echo "<div class =\"erreur\">
<ul>
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) ? $context["leserreurs"] : $this->getContext($context, "leserreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "\t
      <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul></div>
";
        
        $__internal_952f4c6a7ee163ab1899f67250c5ed2000b42313f04357982aa1e5a33f812d62->leave($__internal_952f4c6a7ee163ab1899f67250c5ed2000b42313f04357982aa1e5a33f812d62_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class ="erreur">*/
/* <ul>*/
/*  {% for erreur in  leserreurs %}*/
/* 	*/
/*       <li>{{erreur}}</li>*/
/* 	*/
/* {%endfor%}*/
/* </ul></div>*/
/* */
