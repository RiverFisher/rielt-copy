<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_621c7a884187460abaa9c83e4c30c4e296aea272ce2c3e82a2ef7dbd01b6396f extends Twig_Template
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
        $__internal_71ce325f4359719fab3036eb2213e795e97a2814f845ca179bc48313892a94a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ce325f4359719fab3036eb2213e795e97a2814f845ca179bc48313892a94a1->enter($__internal_71ce325f4359719fab3036eb2213e795e97a2814f845ca179bc48313892a94a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ec138b7716d49af01eb2e615ffdf5c6602515873e20b8609f5377929ecc9624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec138b7716d49af01eb2e615ffdf5c6602515873e20b8609f5377929ecc9624d->enter($__internal_ec138b7716d49af01eb2e615ffdf5c6602515873e20b8609f5377929ecc9624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ce325f4359719fab3036eb2213e795e97a2814f845ca179bc48313892a94a1->leave($__internal_71ce325f4359719fab3036eb2213e795e97a2814f845ca179bc48313892a94a1_prof);

        
        $__internal_ec138b7716d49af01eb2e615ffdf5c6602515873e20b8609f5377929ecc9624d->leave($__internal_ec138b7716d49af01eb2e615ffdf5c6602515873e20b8609f5377929ecc9624d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1326863da292683293588e8edf3680a00da171d547e2ba0ab3aa5fb141996c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1326863da292683293588e8edf3680a00da171d547e2ba0ab3aa5fb141996c1d->enter($__internal_1326863da292683293588e8edf3680a00da171d547e2ba0ab3aa5fb141996c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c29dbfc4dafdd97a16324c48a00e54ed55bb7bc6c78e11299190ff94f082225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c29dbfc4dafdd97a16324c48a00e54ed55bb7bc6c78e11299190ff94f082225->enter($__internal_5c29dbfc4dafdd97a16324c48a00e54ed55bb7bc6c78e11299190ff94f082225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c29dbfc4dafdd97a16324c48a00e54ed55bb7bc6c78e11299190ff94f082225->leave($__internal_5c29dbfc4dafdd97a16324c48a00e54ed55bb7bc6c78e11299190ff94f082225_prof);

        
        $__internal_1326863da292683293588e8edf3680a00da171d547e2ba0ab3aa5fb141996c1d->leave($__internal_1326863da292683293588e8edf3680a00da171d547e2ba0ab3aa5fb141996c1d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7d8a8406c99d9f6b1e75fa8d1ff6b0ede56f8d45ced65c33a905748db4cc015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d8a8406c99d9f6b1e75fa8d1ff6b0ede56f8d45ced65c33a905748db4cc015->enter($__internal_b7d8a8406c99d9f6b1e75fa8d1ff6b0ede56f8d45ced65c33a905748db4cc015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3dfbeb61da322663333b279764c1def915c7f3d0d5ead54320cd5a69bcb0b6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfbeb61da322663333b279764c1def915c7f3d0d5ead54320cd5a69bcb0b6d8->enter($__internal_3dfbeb61da322663333b279764c1def915c7f3d0d5ead54320cd5a69bcb0b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3dfbeb61da322663333b279764c1def915c7f3d0d5ead54320cd5a69bcb0b6d8->leave($__internal_3dfbeb61da322663333b279764c1def915c7f3d0d5ead54320cd5a69bcb0b6d8_prof);

        
        $__internal_b7d8a8406c99d9f6b1e75fa8d1ff6b0ede56f8d45ced65c33a905748db4cc015->leave($__internal_b7d8a8406c99d9f6b1e75fa8d1ff6b0ede56f8d45ced65c33a905748db4cc015_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ea16d04c29b0cc57ace7a279dd0b64851de21c4fb2e36444cb2416865231b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea16d04c29b0cc57ace7a279dd0b64851de21c4fb2e36444cb2416865231b6e->enter($__internal_5ea16d04c29b0cc57ace7a279dd0b64851de21c4fb2e36444cb2416865231b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51ed9aebc3838dc5baf5ff215d2914061200c61f1c835eee8152a648426ce618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ed9aebc3838dc5baf5ff215d2914061200c61f1c835eee8152a648426ce618->enter($__internal_51ed9aebc3838dc5baf5ff215d2914061200c61f1c835eee8152a648426ce618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_51ed9aebc3838dc5baf5ff215d2914061200c61f1c835eee8152a648426ce618->leave($__internal_51ed9aebc3838dc5baf5ff215d2914061200c61f1c835eee8152a648426ce618_prof);

        
        $__internal_5ea16d04c29b0cc57ace7a279dd0b64851de21c4fb2e36444cb2416865231b6e->leave($__internal_5ea16d04c29b0cc57ace7a279dd0b64851de21c4fb2e36444cb2416865231b6e_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/rielt/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
