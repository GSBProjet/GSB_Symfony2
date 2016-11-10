<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b8c2a2e794c0ea80b72ff137bd62baf751a549ed0de27af30e609b07544b3fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_939cdc06ff492ab8bca0eaa48c6ec3879c3ea7a288d9ae556612b67ea3fd25e4 = $this->env->getExtension("native_profiler");
        $__internal_939cdc06ff492ab8bca0eaa48c6ec3879c3ea7a288d9ae556612b67ea3fd25e4->enter($__internal_939cdc06ff492ab8bca0eaa48c6ec3879c3ea7a288d9ae556612b67ea3fd25e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_939cdc06ff492ab8bca0eaa48c6ec3879c3ea7a288d9ae556612b67ea3fd25e4->leave($__internal_939cdc06ff492ab8bca0eaa48c6ec3879c3ea7a288d9ae556612b67ea3fd25e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8410eb068c1859d84c0e849b6dd1959601b22628fd2c4910edcffaf6ae950adf = $this->env->getExtension("native_profiler");
        $__internal_8410eb068c1859d84c0e849b6dd1959601b22628fd2c4910edcffaf6ae950adf->enter($__internal_8410eb068c1859d84c0e849b6dd1959601b22628fd2c4910edcffaf6ae950adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8410eb068c1859d84c0e849b6dd1959601b22628fd2c4910edcffaf6ae950adf->leave($__internal_8410eb068c1859d84c0e849b6dd1959601b22628fd2c4910edcffaf6ae950adf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_637174ddd1522294168a8ca35b65969b04179d74c84414eee4a1272bb990b786 = $this->env->getExtension("native_profiler");
        $__internal_637174ddd1522294168a8ca35b65969b04179d74c84414eee4a1272bb990b786->enter($__internal_637174ddd1522294168a8ca35b65969b04179d74c84414eee4a1272bb990b786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_637174ddd1522294168a8ca35b65969b04179d74c84414eee4a1272bb990b786->leave($__internal_637174ddd1522294168a8ca35b65969b04179d74c84414eee4a1272bb990b786_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50af0f02f7c859b36dcf1c29c170b9d3e6c6d3dd381384a7984c3ae047db5587 = $this->env->getExtension("native_profiler");
        $__internal_50af0f02f7c859b36dcf1c29c170b9d3e6c6d3dd381384a7984c3ae047db5587->enter($__internal_50af0f02f7c859b36dcf1c29c170b9d3e6c6d3dd381384a7984c3ae047db5587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50af0f02f7c859b36dcf1c29c170b9d3e6c6d3dd381384a7984c3ae047db5587->leave($__internal_50af0f02f7c859b36dcf1c29c170b9d3e6c6d3dd381384a7984c3ae047db5587_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
