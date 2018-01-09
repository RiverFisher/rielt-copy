<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_657976809a3f6a874bb61879bb022a3797109438a4b4f09aa1c14f05730a3800 extends Twig_Template
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
        $__internal_d780f3279f9a5b91647f8e2caa758527039f1fb45d94d0ed4899a74e71eb15d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d780f3279f9a5b91647f8e2caa758527039f1fb45d94d0ed4899a74e71eb15d2->enter($__internal_d780f3279f9a5b91647f8e2caa758527039f1fb45d94d0ed4899a74e71eb15d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3979442abd97da17f522519f191bceb5ca1d7a0cac223815842cdf694c614f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3979442abd97da17f522519f191bceb5ca1d7a0cac223815842cdf694c614f06->enter($__internal_3979442abd97da17f522519f191bceb5ca1d7a0cac223815842cdf694c614f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d780f3279f9a5b91647f8e2caa758527039f1fb45d94d0ed4899a74e71eb15d2->leave($__internal_d780f3279f9a5b91647f8e2caa758527039f1fb45d94d0ed4899a74e71eb15d2_prof);

        
        $__internal_3979442abd97da17f522519f191bceb5ca1d7a0cac223815842cdf694c614f06->leave($__internal_3979442abd97da17f522519f191bceb5ca1d7a0cac223815842cdf694c614f06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2577098c90c4c929000d97b9b44d4c3c4b3396b59db9f61c43a4f74b136746c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2577098c90c4c929000d97b9b44d4c3c4b3396b59db9f61c43a4f74b136746c->enter($__internal_d2577098c90c4c929000d97b9b44d4c3c4b3396b59db9f61c43a4f74b136746c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66eae55b8b9e1fc2a5d5de608c19e3e48ee0fb1e0e9d6aa93d30a7843c22c4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66eae55b8b9e1fc2a5d5de608c19e3e48ee0fb1e0e9d6aa93d30a7843c22c4a5->enter($__internal_66eae55b8b9e1fc2a5d5de608c19e3e48ee0fb1e0e9d6aa93d30a7843c22c4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66eae55b8b9e1fc2a5d5de608c19e3e48ee0fb1e0e9d6aa93d30a7843c22c4a5->leave($__internal_66eae55b8b9e1fc2a5d5de608c19e3e48ee0fb1e0e9d6aa93d30a7843c22c4a5_prof);

        
        $__internal_d2577098c90c4c929000d97b9b44d4c3c4b3396b59db9f61c43a4f74b136746c->leave($__internal_d2577098c90c4c929000d97b9b44d4c3c4b3396b59db9f61c43a4f74b136746c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d0f37000c22afdd24ef2218ed271f57eeff20fdd0e1f98c23546c7d2fd74fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0f37000c22afdd24ef2218ed271f57eeff20fdd0e1f98c23546c7d2fd74fcf->enter($__internal_6d0f37000c22afdd24ef2218ed271f57eeff20fdd0e1f98c23546c7d2fd74fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3700767e8c490db39c86bf3fcfa0e27f291b3504675da728a39e1f5cfa40439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3700767e8c490db39c86bf3fcfa0e27f291b3504675da728a39e1f5cfa40439->enter($__internal_b3700767e8c490db39c86bf3fcfa0e27f291b3504675da728a39e1f5cfa40439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3700767e8c490db39c86bf3fcfa0e27f291b3504675da728a39e1f5cfa40439->leave($__internal_b3700767e8c490db39c86bf3fcfa0e27f291b3504675da728a39e1f5cfa40439_prof);

        
        $__internal_6d0f37000c22afdd24ef2218ed271f57eeff20fdd0e1f98c23546c7d2fd74fcf->leave($__internal_6d0f37000c22afdd24ef2218ed271f57eeff20fdd0e1f98c23546c7d2fd74fcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be7f95140d003087865291231f7add7c7b0e0c113f85cb682cabcf334d0145f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7f95140d003087865291231f7add7c7b0e0c113f85cb682cabcf334d0145f9->enter($__internal_be7f95140d003087865291231f7add7c7b0e0c113f85cb682cabcf334d0145f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06c034817c44b9898d7c39ee8bfb7d91771312c9f76af477501206ac439e21ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c034817c44b9898d7c39ee8bfb7d91771312c9f76af477501206ac439e21ff->enter($__internal_06c034817c44b9898d7c39ee8bfb7d91771312c9f76af477501206ac439e21ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_06c034817c44b9898d7c39ee8bfb7d91771312c9f76af477501206ac439e21ff->leave($__internal_06c034817c44b9898d7c39ee8bfb7d91771312c9f76af477501206ac439e21ff_prof);

        
        $__internal_be7f95140d003087865291231f7add7c7b0e0c113f85cb682cabcf334d0145f9->leave($__internal_be7f95140d003087865291231f7add7c7b0e0c113f85cb682cabcf334d0145f9_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/rielt/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
