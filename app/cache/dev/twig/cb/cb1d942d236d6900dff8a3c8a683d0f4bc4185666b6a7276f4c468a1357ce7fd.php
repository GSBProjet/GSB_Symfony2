<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_f4cb5e976ba63f202caef02c41318ee58c066d471de15540361d2597f81ea376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b8f21662b70bf91852d62e52d8d52a7e06ae4936d9fa81ae83341a9c488cd9 = $this->env->getExtension("native_profiler");
        $__internal_f7b8f21662b70bf91852d62e52d8d52a7e06ae4936d9fa81ae83341a9c488cd9->enter($__internal_f7b8f21662b70bf91852d62e52d8d52a7e06ae4936d9fa81ae83341a9c488cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b8f21662b70bf91852d62e52d8d52a7e06ae4936d9fa81ae83341a9c488cd9->leave($__internal_f7b8f21662b70bf91852d62e52d8d52a7e06ae4936d9fa81ae83341a9c488cd9_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06f3a82340f0d30cba3ebb847f30c82da77e18715f203c2cc079ea6e7ee1dd51 = $this->env->getExtension("native_profiler");
        $__internal_06f3a82340f0d30cba3ebb847f30c82da77e18715f203c2cc079ea6e7ee1dd51->enter($__internal_06f3a82340f0d30cba3ebb847f30c82da77e18715f203c2cc079ea6e7ee1dd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "EstDaf"), "method") == true)) {
            // line 14
            echo "          <li class=\"smenu\">
              <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerfraishorsforfais");
            echo "\" title=\"valider les frais\">Valider les frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"daf\" title=\"valider les frais\">Affectation tablettes</a>
           </li>
           
           ";
        } else {
            // line 22
            echo "              <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
            echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
            echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           ";
        }
        // line 28
        echo "           <li class=\"smenu\">
              <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_06f3a82340f0d30cba3ebb847f30c82da77e18715f203c2cc079ea6e7ee1dd51->leave($__internal_06f3a82340f0d30cba3ebb847f30c82da77e18715f203c2cc079ea6e7ee1dd51_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  87 => 28,  81 => 25,  74 => 22,  64 => 15,  61 => 14,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*          <h3>*/
/*             {%if(app.session.get('nom') is defined )%}*/
/*                            Visiteur: bonjour {{app.session.get('nom')}}<br>   */
/*             {%endif%}*/
/*         </h3>*/
/*      </div>  */
/*         <ul id="menuList">*/
/* 	   <li class="smenu">*/
/*               {% if app.session.get('EstDaf') == true %}*/
/*           <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_validerfraishorsforfais')}}" title="valider les frais">Valider les frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="daf" title="valider les frais">Affectation tablettes</a>*/
/*            </li>*/
/*            */
/*            {% else %}*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>	*/
/*            {% endif %}*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/*          </ul>*/
/*      </div> */
/* {% endblock%}*/
/* */
/* */
/* {#*/
/*  <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/* #}*/
