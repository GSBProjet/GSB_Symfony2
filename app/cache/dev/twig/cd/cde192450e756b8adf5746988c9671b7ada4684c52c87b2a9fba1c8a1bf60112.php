<?php

/* base.html.twig */
class __TwigTemplate_c86f746e1d48ebefa51cd702c93a8edd1e73910052fc1ddde4f9e0ca6c04a9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e21b587c166b852c25ad2b43b2b97262c3655a2a61afeb3dc4c16c7208f5b2 = $this->env->getExtension("native_profiler");
        $__internal_25e21b587c166b852c25ad2b43b2b97262c3655a2a61afeb3dc4c16c7208f5b2->enter($__internal_25e21b587c166b852c25ad2b43b2b97262c3655a2a61afeb3dc4c16c7208f5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_25e21b587c166b852c25ad2b43b2b97262c3655a2a61afeb3dc4c16c7208f5b2->leave($__internal_25e21b587c166b852c25ad2b43b2b97262c3655a2a61afeb3dc4c16c7208f5b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea2039ac5dd0f0a79efce874179e50927dbc30e12758c01af4667a747695136c = $this->env->getExtension("native_profiler");
        $__internal_ea2039ac5dd0f0a79efce874179e50927dbc30e12758c01af4667a747695136c->enter($__internal_ea2039ac5dd0f0a79efce874179e50927dbc30e12758c01af4667a747695136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea2039ac5dd0f0a79efce874179e50927dbc30e12758c01af4667a747695136c->leave($__internal_ea2039ac5dd0f0a79efce874179e50927dbc30e12758c01af4667a747695136c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3f8988e95a3daf702af34510491998267829fe2534fd31415c546250fccb33b = $this->env->getExtension("native_profiler");
        $__internal_d3f8988e95a3daf702af34510491998267829fe2534fd31415c546250fccb33b->enter($__internal_d3f8988e95a3daf702af34510491998267829fe2534fd31415c546250fccb33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3f8988e95a3daf702af34510491998267829fe2534fd31415c546250fccb33b->leave($__internal_d3f8988e95a3daf702af34510491998267829fe2534fd31415c546250fccb33b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cd8ca500c78520d02fcdf7ba636bb74849aab542a89ee2735c371496406ea5b = $this->env->getExtension("native_profiler");
        $__internal_0cd8ca500c78520d02fcdf7ba636bb74849aab542a89ee2735c371496406ea5b->enter($__internal_0cd8ca500c78520d02fcdf7ba636bb74849aab542a89ee2735c371496406ea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cd8ca500c78520d02fcdf7ba636bb74849aab542a89ee2735c371496406ea5b->leave($__internal_0cd8ca500c78520d02fcdf7ba636bb74849aab542a89ee2735c371496406ea5b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f25403e0659dc7e2389717fe617173bbc0215e62cff95bb8df2fec70e5b5a25 = $this->env->getExtension("native_profiler");
        $__internal_9f25403e0659dc7e2389717fe617173bbc0215e62cff95bb8df2fec70e5b5a25->enter($__internal_9f25403e0659dc7e2389717fe617173bbc0215e62cff95bb8df2fec70e5b5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f25403e0659dc7e2389717fe617173bbc0215e62cff95bb8df2fec70e5b5a25->leave($__internal_9f25403e0659dc7e2389717fe617173bbc0215e62cff95bb8df2fec70e5b5a25_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 13,  90 => 12,  79 => 6,  67 => 5,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
