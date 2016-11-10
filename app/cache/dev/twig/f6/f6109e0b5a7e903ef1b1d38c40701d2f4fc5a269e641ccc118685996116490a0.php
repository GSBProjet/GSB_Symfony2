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
        $__internal_0ffdd6f9f33823cfb006a14d32f6ec4c75a4d8c041a0c61da8e001ad53f1a3c7 = $this->env->getExtension("native_profiler");
        $__internal_0ffdd6f9f33823cfb006a14d32f6ec4c75a4d8c041a0c61da8e001ad53f1a3c7->enter($__internal_0ffdd6f9f33823cfb006a14d32f6ec4c75a4d8c041a0c61da8e001ad53f1a3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffdd6f9f33823cfb006a14d32f6ec4c75a4d8c041a0c61da8e001ad53f1a3c7->leave($__internal_0ffdd6f9f33823cfb006a14d32f6ec4c75a4d8c041a0c61da8e001ad53f1a3c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27885a02c9b52d5cf364367f7b1f1adedf96f22fefad970e6709fc6f61a09d2f = $this->env->getExtension("native_profiler");
        $__internal_27885a02c9b52d5cf364367f7b1f1adedf96f22fefad970e6709fc6f61a09d2f->enter($__internal_27885a02c9b52d5cf364367f7b1f1adedf96f22fefad970e6709fc6f61a09d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_27885a02c9b52d5cf364367f7b1f1adedf96f22fefad970e6709fc6f61a09d2f->leave($__internal_27885a02c9b52d5cf364367f7b1f1adedf96f22fefad970e6709fc6f61a09d2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6236215c39cac2dc6280042d724ff98b53bb4455de72629c3830e93960fea9e3 = $this->env->getExtension("native_profiler");
        $__internal_6236215c39cac2dc6280042d724ff98b53bb4455de72629c3830e93960fea9e3->enter($__internal_6236215c39cac2dc6280042d724ff98b53bb4455de72629c3830e93960fea9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6236215c39cac2dc6280042d724ff98b53bb4455de72629c3830e93960fea9e3->leave($__internal_6236215c39cac2dc6280042d724ff98b53bb4455de72629c3830e93960fea9e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65e6c0ee62031e671ee5ab12f69638c12d47e123469f904f61841326b4783def = $this->env->getExtension("native_profiler");
        $__internal_65e6c0ee62031e671ee5ab12f69638c12d47e123469f904f61841326b4783def->enter($__internal_65e6c0ee62031e671ee5ab12f69638c12d47e123469f904f61841326b4783def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65e6c0ee62031e671ee5ab12f69638c12d47e123469f904f61841326b4783def->leave($__internal_65e6c0ee62031e671ee5ab12f69638c12d47e123469f904f61841326b4783def_prof);

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
