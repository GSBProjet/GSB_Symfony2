<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_602a2bc5107529528d354fa39a49b2dffd376f446424bbaf483f1ff583253545 extends Twig_Template
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
        $__internal_f5d9136f6ebd88ba7cdabd42a2d228b8aefe9aa638e9b66d5136227871db9660 = $this->env->getExtension("native_profiler");
        $__internal_f5d9136f6ebd88ba7cdabd42a2d228b8aefe9aa638e9b66d5136227871db9660->enter($__internal_f5d9136f6ebd88ba7cdabd42a2d228b8aefe9aa638e9b66d5136227871db9660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

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
        
        $__internal_f5d9136f6ebd88ba7cdabd42a2d228b8aefe9aa638e9b66d5136227871db9660->leave($__internal_f5d9136f6ebd88ba7cdabd42a2d228b8aefe9aa638e9b66d5136227871db9660_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6efd747f06bed9775c487e82cc51bafd36e6db0e6806a384fc7fbcad724245f = $this->env->getExtension("native_profiler");
        $__internal_e6efd747f06bed9775c487e82cc51bafd36e6db0e6806a384fc7fbcad724245f->enter($__internal_e6efd747f06bed9775c487e82cc51bafd36e6db0e6806a384fc7fbcad724245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_e6efd747f06bed9775c487e82cc51bafd36e6db0e6806a384fc7fbcad724245f->leave($__internal_e6efd747f06bed9775c487e82cc51bafd36e6db0e6806a384fc7fbcad724245f_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_47020f757edec7ecebb1b87186e17430eeea2448d23a9b34b17d0281fd87db62 = $this->env->getExtension("native_profiler");
        $__internal_47020f757edec7ecebb1b87186e17430eeea2448d23a9b34b17d0281fd87db62->enter($__internal_47020f757edec7ecebb1b87186e17430eeea2448d23a9b34b17d0281fd87db62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_47020f757edec7ecebb1b87186e17430eeea2448d23a9b34b17d0281fd87db62->leave($__internal_47020f757edec7ecebb1b87186e17430eeea2448d23a9b34b17d0281fd87db62_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_bb832258c0a89fd80704c1d1708676c0a834ae29badeab821bcd454bcaf09e21 = $this->env->getExtension("native_profiler");
        $__internal_bb832258c0a89fd80704c1d1708676c0a834ae29badeab821bcd454bcaf09e21->enter($__internal_bb832258c0a89fd80704c1d1708676c0a834ae29badeab821bcd454bcaf09e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_bb832258c0a89fd80704c1d1708676c0a834ae29badeab821bcd454bcaf09e21->leave($__internal_bb832258c0a89fd80704c1d1708676c0a834ae29badeab821bcd454bcaf09e21_prof);

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
