<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82bfe9dedc33b130e56531c01a1225f10e697172de0be61d35fc2b53845910b3 extends Twig_Template
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
        $__internal_33056cf01f01a0467f3e6a36d0565e6bcd0ca0268872f1372a494b318089ef23 = $this->env->getExtension("native_profiler");
        $__internal_33056cf01f01a0467f3e6a36d0565e6bcd0ca0268872f1372a494b318089ef23->enter($__internal_33056cf01f01a0467f3e6a36d0565e6bcd0ca0268872f1372a494b318089ef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33056cf01f01a0467f3e6a36d0565e6bcd0ca0268872f1372a494b318089ef23->leave($__internal_33056cf01f01a0467f3e6a36d0565e6bcd0ca0268872f1372a494b318089ef23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ef180c18c6877d9f435b263801550e7ac08a0285d14422fc61d349ee4d264d3 = $this->env->getExtension("native_profiler");
        $__internal_9ef180c18c6877d9f435b263801550e7ac08a0285d14422fc61d349ee4d264d3->enter($__internal_9ef180c18c6877d9f435b263801550e7ac08a0285d14422fc61d349ee4d264d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ef180c18c6877d9f435b263801550e7ac08a0285d14422fc61d349ee4d264d3->leave($__internal_9ef180c18c6877d9f435b263801550e7ac08a0285d14422fc61d349ee4d264d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a66f7e097f591bc6b8ec80e5c75911615ad54367c9d66321b2eec60e8fb3a629 = $this->env->getExtension("native_profiler");
        $__internal_a66f7e097f591bc6b8ec80e5c75911615ad54367c9d66321b2eec60e8fb3a629->enter($__internal_a66f7e097f591bc6b8ec80e5c75911615ad54367c9d66321b2eec60e8fb3a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a66f7e097f591bc6b8ec80e5c75911615ad54367c9d66321b2eec60e8fb3a629->leave($__internal_a66f7e097f591bc6b8ec80e5c75911615ad54367c9d66321b2eec60e8fb3a629_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69ce3f74afbfed11084e4f2fd59b4604e0305cc27c8f6d24bc7f9b667dd1bceb = $this->env->getExtension("native_profiler");
        $__internal_69ce3f74afbfed11084e4f2fd59b4604e0305cc27c8f6d24bc7f9b667dd1bceb->enter($__internal_69ce3f74afbfed11084e4f2fd59b4604e0305cc27c8f6d24bc7f9b667dd1bceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69ce3f74afbfed11084e4f2fd59b4604e0305cc27c8f6d24bc7f9b667dd1bceb->leave($__internal_69ce3f74afbfed11084e4f2fd59b4604e0305cc27c8f6d24bc7f9b667dd1bceb_prof);

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
