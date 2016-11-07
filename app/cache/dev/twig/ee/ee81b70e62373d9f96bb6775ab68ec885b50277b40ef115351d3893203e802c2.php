<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_c8f3f6b235b49b6ce5c2847bacddb32024d6ef494859cef2a5723411ad8539e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a78dd0a73a359dd10ef160c714d36354be49ee9989496119b7bf94a28a3bf6f = $this->env->getExtension("native_profiler");
        $__internal_4a78dd0a73a359dd10ef160c714d36354be49ee9989496119b7bf94a28a3bf6f->enter($__internal_4a78dd0a73a359dd10ef160c714d36354be49ee9989496119b7bf94a28a3bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_4a78dd0a73a359dd10ef160c714d36354be49ee9989496119b7bf94a28a3bf6f->leave($__internal_4a78dd0a73a359dd10ef160c714d36354be49ee9989496119b7bf94a28a3bf6f_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c6d0bf4b004c1bf868bc5bf2d95566ef9c15c766964f3dadf82fd60c0237d2e = $this->env->getExtension("native_profiler");
        $__internal_1c6d0bf4b004c1bf868bc5bf2d95566ef9c15c766964f3dadf82fd60c0237d2e->enter($__internal_1c6d0bf4b004c1bf868bc5bf2d95566ef9c15c766964f3dadf82fd60c0237d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_1c6d0bf4b004c1bf868bc5bf2d95566ef9c15c766964f3dadf82fd60c0237d2e->leave($__internal_1c6d0bf4b004c1bf868bc5bf2d95566ef9c15c766964f3dadf82fd60c0237d2e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_6db9b930603a5e3750b0dceaa70a889831f3dad1f5f2d899d2f83f6648221363 = $this->env->getExtension("native_profiler");
        $__internal_6db9b930603a5e3750b0dceaa70a889831f3dad1f5f2d899d2f83f6648221363->enter($__internal_6db9b930603a5e3750b0dceaa70a889831f3dad1f5f2d899d2f83f6648221363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_6db9b930603a5e3750b0dceaa70a889831f3dad1f5f2d899d2f83f6648221363->leave($__internal_6db9b930603a5e3750b0dceaa70a889831f3dad1f5f2d899d2f83f6648221363_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_7465f2d73ce360bbb5d48dfe7f1f9fb44277d30c418569d5fcbe4b7b1dd1b969 = $this->env->getExtension("native_profiler");
        $__internal_7465f2d73ce360bbb5d48dfe7f1f9fb44277d30c418569d5fcbe4b7b1dd1b969->enter($__internal_7465f2d73ce360bbb5d48dfe7f1f9fb44277d30c418569d5fcbe4b7b1dd1b969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_7465f2d73ce360bbb5d48dfe7f1f9fb44277d30c418569d5fcbe4b7b1dd1b969->leave($__internal_7465f2d73ce360bbb5d48dfe7f1f9fb44277d30c418569d5fcbe4b7b1dd1b969_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/framework/css/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/framework/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
