<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_74e4fd63b0ec7cf0383b39e3e1143773e1bb748c08fc4636e71578363da56550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d576644c0673e6ab4bbfd700be65fe9afa0bcc9ecaa8a2853fed84956ec2812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d576644c0673e6ab4bbfd700be65fe9afa0bcc9ecaa8a2853fed84956ec2812f->enter($__internal_d576644c0673e6ab4bbfd700be65fe9afa0bcc9ecaa8a2853fed84956ec2812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dcecaf35cdb9928c1af7c19cb4063fcfb71ed12ab968a26d13057abba67e238c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcecaf35cdb9928c1af7c19cb4063fcfb71ed12ab968a26d13057abba67e238c->enter($__internal_dcecaf35cdb9928c1af7c19cb4063fcfb71ed12ab968a26d13057abba67e238c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d576644c0673e6ab4bbfd700be65fe9afa0bcc9ecaa8a2853fed84956ec2812f->leave($__internal_d576644c0673e6ab4bbfd700be65fe9afa0bcc9ecaa8a2853fed84956ec2812f_prof);

        
        $__internal_dcecaf35cdb9928c1af7c19cb4063fcfb71ed12ab968a26d13057abba67e238c->leave($__internal_dcecaf35cdb9928c1af7c19cb4063fcfb71ed12ab968a26d13057abba67e238c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb8e4fb297cf6851603261798f8c953363b9cdcea58e56397efc04fc882b68be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8e4fb297cf6851603261798f8c953363b9cdcea58e56397efc04fc882b68be->enter($__internal_fb8e4fb297cf6851603261798f8c953363b9cdcea58e56397efc04fc882b68be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4d038e8dd8f70007c8436fc385694464dddca89457217944072701eaea7587c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d038e8dd8f70007c8436fc385694464dddca89457217944072701eaea7587c->enter($__internal_a4d038e8dd8f70007c8436fc385694464dddca89457217944072701eaea7587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a4d038e8dd8f70007c8436fc385694464dddca89457217944072701eaea7587c->leave($__internal_a4d038e8dd8f70007c8436fc385694464dddca89457217944072701eaea7587c_prof);

        
        $__internal_fb8e4fb297cf6851603261798f8c953363b9cdcea58e56397efc04fc882b68be->leave($__internal_fb8e4fb297cf6851603261798f8c953363b9cdcea58e56397efc04fc882b68be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/rielt/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
