<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_3cd399a1fb8d105ff246fd0adb3dc3c523ac5c93b9e39cb917974967e1f526a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c1774681168428f4a6f8a06144208bc6bb9842f9e29e8932e51af6a51962a2 = $this->env->getExtension("native_profiler");
        $__internal_92c1774681168428f4a6f8a06144208bc6bb9842f9e29e8932e51af6a51962a2->enter($__internal_92c1774681168428f4a6f8a06144208bc6bb9842f9e29e8932e51af6a51962a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c1774681168428f4a6f8a06144208bc6bb9842f9e29e8932e51af6a51962a2->leave($__internal_92c1774681168428f4a6f8a06144208bc6bb9842f9e29e8932e51af6a51962a2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49c5a79b08195b43b9a3b739b964db82f48e05c5e3bdc2c98ca6960525a7547 = $this->env->getExtension("native_profiler");
        $__internal_b49c5a79b08195b43b9a3b739b964db82f48e05c5e3bdc2c98ca6960525a7547->enter($__internal_b49c5a79b08195b43b9a3b739b964db82f48e05c5e3bdc2c98ca6960525a7547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_b49c5a79b08195b43b9a3b739b964db82f48e05c5e3bdc2c98ca6960525a7547->leave($__internal_b49c5a79b08195b43b9a3b739b964db82f48e05c5e3bdc2c98ca6960525a7547_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_ca2cf84c3e9fc3b8c26a72385da8eb7542b2c7dff5d39130cbdccee67f84f009 = $this->env->getExtension("native_profiler");
        $__internal_ca2cf84c3e9fc3b8c26a72385da8eb7542b2c7dff5d39130cbdccee67f84f009->enter($__internal_ca2cf84c3e9fc3b8c26a72385da8eb7542b2c7dff5d39130cbdccee67f84f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_ca2cf84c3e9fc3b8c26a72385da8eb7542b2c7dff5d39130cbdccee67f84f009->leave($__internal_ca2cf84c3e9fc3b8c26a72385da8eb7542b2c7dff5d39130cbdccee67f84f009_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %} */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined )%}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}*/
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*         <p>*/
/*           <label for="nom">Login*</label>*/
/*            <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*         </p>*/
/* 	<p>*/
/*             <label for="mdp">Mot de passe*</label>*/
/*             <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*         </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* </div>*/
/*     {% endblock %}    */
/*     {% endblock%}*/
/*      */
