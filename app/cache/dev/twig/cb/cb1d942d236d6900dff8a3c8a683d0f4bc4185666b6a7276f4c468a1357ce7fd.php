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
        $__internal_8ddef4cfb3ebb78a46ac08e1f3992f6a6498f1edf8700230f9cdd77892dac318 = $this->env->getExtension("native_profiler");
        $__internal_8ddef4cfb3ebb78a46ac08e1f3992f6a6498f1edf8700230f9cdd77892dac318->enter($__internal_8ddef4cfb3ebb78a46ac08e1f3992f6a6498f1edf8700230f9cdd77892dac318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddef4cfb3ebb78a46ac08e1f3992f6a6498f1edf8700230f9cdd77892dac318->leave($__internal_8ddef4cfb3ebb78a46ac08e1f3992f6a6498f1edf8700230f9cdd77892dac318_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3362ef63e25dacc7630aabf77af5127def192f903f7b770e00263ce43f9543b = $this->env->getExtension("native_profiler");
        $__internal_d3362ef63e25dacc7630aabf77af5127def192f903f7b770e00263ce43f9543b->enter($__internal_d3362ef63e25dacc7630aabf77af5127def192f903f7b770e00263ce43f9543b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
              <a href=\"index.php?uc=validerFrais&action=voirFrais\" title=\"valider les frais\">Valider les frais</a>
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
        
        $__internal_d3362ef63e25dacc7630aabf77af5127def192f903f7b770e00263ce43f9543b->leave($__internal_d3362ef63e25dacc7630aabf77af5127def192f903f7b770e00263ce43f9543b_prof);

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
        return array (  87 => 29,  84 => 28,  78 => 25,  71 => 22,  61 => 14,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
/*               <a href="index.php?uc=validerFrais&action=voirFrais" title="valider les frais">Valider les frais</a>*/
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
