<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_cd1c83574e0333236b91e8584358f800b6580501d44923175179f9d7137f23b4 extends Twig_Template
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
        $__internal_0a28937882b1023832c4faee9fd2c74eeafa444a615cbed5c1bdb48461e0556c = $this->env->getExtension("native_profiler");
        $__internal_0a28937882b1023832c4faee9fd2c74eeafa444a615cbed5c1bdb48461e0556c->enter($__internal_0a28937882b1023832c4faee9fd2c74eeafa444a615cbed5c1bdb48461e0556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a28937882b1023832c4faee9fd2c74eeafa444a615cbed5c1bdb48461e0556c->leave($__internal_0a28937882b1023832c4faee9fd2c74eeafa444a615cbed5c1bdb48461e0556c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c2249a47a33c6a5b4c5d6481b91eaaec5c96093fb2cba91a943c3ac7b3135de = $this->env->getExtension("native_profiler");
        $__internal_5c2249a47a33c6a5b4c5d6481b91eaaec5c96093fb2cba91a943c3ac7b3135de->enter($__internal_5c2249a47a33c6a5b4c5d6481b91eaaec5c96093fb2cba91a943c3ac7b3135de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_5c2249a47a33c6a5b4c5d6481b91eaaec5c96093fb2cba91a943c3ac7b3135de->leave($__internal_5c2249a47a33c6a5b4c5d6481b91eaaec5c96093fb2cba91a943c3ac7b3135de_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9c32fb5a9bb770d60935eb40364f5a2a9cd779c9cb5d795145dfdd6ea18e50ff = $this->env->getExtension("native_profiler");
        $__internal_9c32fb5a9bb770d60935eb40364f5a2a9cd779c9cb5d795145dfdd6ea18e50ff->enter($__internal_9c32fb5a9bb770d60935eb40364f5a2a9cd779c9cb5d795145dfdd6ea18e50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_9c32fb5a9bb770d60935eb40364f5a2a9cd779c9cb5d795145dfdd6ea18e50ff->leave($__internal_9c32fb5a9bb770d60935eb40364f5a2a9cd779c9cb5d795145dfdd6ea18e50ff_prof);

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
