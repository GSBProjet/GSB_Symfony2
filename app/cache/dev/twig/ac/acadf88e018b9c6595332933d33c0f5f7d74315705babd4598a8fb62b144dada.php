<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cbff197e7dc1255dacb2712c28ac00ba6dc8d8a763870a20a8c0986b92c46ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3de62b006120e2f3cf4981f86551ed26b5d098d006770f2310ecbca9883d1d13 = $this->env->getExtension("native_profiler");
        $__internal_3de62b006120e2f3cf4981f86551ed26b5d098d006770f2310ecbca9883d1d13->enter($__internal_3de62b006120e2f3cf4981f86551ed26b5d098d006770f2310ecbca9883d1d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de62b006120e2f3cf4981f86551ed26b5d098d006770f2310ecbca9883d1d13->leave($__internal_3de62b006120e2f3cf4981f86551ed26b5d098d006770f2310ecbca9883d1d13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b5958fe235aaccd32c9e1d948195b40135b9a1d411bcffbd02ac94aa856eb44 = $this->env->getExtension("native_profiler");
        $__internal_8b5958fe235aaccd32c9e1d948195b40135b9a1d411bcffbd02ac94aa856eb44->enter($__internal_8b5958fe235aaccd32c9e1d948195b40135b9a1d411bcffbd02ac94aa856eb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8b5958fe235aaccd32c9e1d948195b40135b9a1d411bcffbd02ac94aa856eb44->leave($__internal_8b5958fe235aaccd32c9e1d948195b40135b9a1d411bcffbd02ac94aa856eb44_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb50894ed5c81bfb6e5d4099b95d821e315a6f11b868f1ae0387352cc4a39fb3 = $this->env->getExtension("native_profiler");
        $__internal_fb50894ed5c81bfb6e5d4099b95d821e315a6f11b868f1ae0387352cc4a39fb3->enter($__internal_fb50894ed5c81bfb6e5d4099b95d821e315a6f11b868f1ae0387352cc4a39fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb50894ed5c81bfb6e5d4099b95d821e315a6f11b868f1ae0387352cc4a39fb3->leave($__internal_fb50894ed5c81bfb6e5d4099b95d821e315a6f11b868f1ae0387352cc4a39fb3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d0a9d03c31912ee2fc5147341591d9ecfc572703109604cbda2b0dfff988cde = $this->env->getExtension("native_profiler");
        $__internal_1d0a9d03c31912ee2fc5147341591d9ecfc572703109604cbda2b0dfff988cde->enter($__internal_1d0a9d03c31912ee2fc5147341591d9ecfc572703109604cbda2b0dfff988cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1d0a9d03c31912ee2fc5147341591d9ecfc572703109604cbda2b0dfff988cde->leave($__internal_1d0a9d03c31912ee2fc5147341591d9ecfc572703109604cbda2b0dfff988cde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
