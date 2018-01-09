<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f2180d77d3d1132e30badc603d41280d63a093bf8f859f099aa3b6bcb09f85ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75d245112ace9a17a2d0157d1f91e564cea89b8b8b3232717d4b16178bdd5175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d245112ace9a17a2d0157d1f91e564cea89b8b8b3232717d4b16178bdd5175->enter($__internal_75d245112ace9a17a2d0157d1f91e564cea89b8b8b3232717d4b16178bdd5175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bc318457b63e4a0d66932e5f49d230c7f27f601c85532a1d029a4763d92c533f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc318457b63e4a0d66932e5f49d230c7f27f601c85532a1d029a4763d92c533f->enter($__internal_bc318457b63e4a0d66932e5f49d230c7f27f601c85532a1d029a4763d92c533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d245112ace9a17a2d0157d1f91e564cea89b8b8b3232717d4b16178bdd5175->leave($__internal_75d245112ace9a17a2d0157d1f91e564cea89b8b8b3232717d4b16178bdd5175_prof);

        
        $__internal_bc318457b63e4a0d66932e5f49d230c7f27f601c85532a1d029a4763d92c533f->leave($__internal_bc318457b63e4a0d66932e5f49d230c7f27f601c85532a1d029a4763d92c533f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b67a3bf3cbedfda2e60da6a28e9963881ce4a0f38a7707d7fcc69e5c96da6345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67a3bf3cbedfda2e60da6a28e9963881ce4a0f38a7707d7fcc69e5c96da6345->enter($__internal_b67a3bf3cbedfda2e60da6a28e9963881ce4a0f38a7707d7fcc69e5c96da6345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d06b2a1bd2ea1c29dcfadf6b4006c8b6103bd500edcdde18f6cd60c25933b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d06b2a1bd2ea1c29dcfadf6b4006c8b6103bd500edcdde18f6cd60c25933b7e->enter($__internal_6d06b2a1bd2ea1c29dcfadf6b4006c8b6103bd500edcdde18f6cd60c25933b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6d06b2a1bd2ea1c29dcfadf6b4006c8b6103bd500edcdde18f6cd60c25933b7e->leave($__internal_6d06b2a1bd2ea1c29dcfadf6b4006c8b6103bd500edcdde18f6cd60c25933b7e_prof);

        
        $__internal_b67a3bf3cbedfda2e60da6a28e9963881ce4a0f38a7707d7fcc69e5c96da6345->leave($__internal_b67a3bf3cbedfda2e60da6a28e9963881ce4a0f38a7707d7fcc69e5c96da6345_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_51464310f405cc53ae68b1f40c80c41685830c605d5cd6b042b768ff1263c884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51464310f405cc53ae68b1f40c80c41685830c605d5cd6b042b768ff1263c884->enter($__internal_51464310f405cc53ae68b1f40c80c41685830c605d5cd6b042b768ff1263c884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a4b31c94f28bb4c57afaa1cde23641a8f5793fad24176c38f1dfd53f4e58d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4b31c94f28bb4c57afaa1cde23641a8f5793fad24176c38f1dfd53f4e58d42->enter($__internal_0a4b31c94f28bb4c57afaa1cde23641a8f5793fad24176c38f1dfd53f4e58d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_0a4b31c94f28bb4c57afaa1cde23641a8f5793fad24176c38f1dfd53f4e58d42->leave($__internal_0a4b31c94f28bb4c57afaa1cde23641a8f5793fad24176c38f1dfd53f4e58d42_prof);

        
        $__internal_51464310f405cc53ae68b1f40c80c41685830c605d5cd6b042b768ff1263c884->leave($__internal_51464310f405cc53ae68b1f40c80c41685830c605d5cd6b042b768ff1263c884_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a18ceb40c9dd3dd39e75776ba87edfac2950405ec1733e6661b842f09d9f084c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18ceb40c9dd3dd39e75776ba87edfac2950405ec1733e6661b842f09d9f084c->enter($__internal_a18ceb40c9dd3dd39e75776ba87edfac2950405ec1733e6661b842f09d9f084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce99f2896aea137f35fcfe5062f8022d47c515ab58ca3332f106206c57a21f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce99f2896aea137f35fcfe5062f8022d47c515ab58ca3332f106206c57a21f22->enter($__internal_ce99f2896aea137f35fcfe5062f8022d47c515ab58ca3332f106206c57a21f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ce99f2896aea137f35fcfe5062f8022d47c515ab58ca3332f106206c57a21f22->leave($__internal_ce99f2896aea137f35fcfe5062f8022d47c515ab58ca3332f106206c57a21f22_prof);

        
        $__internal_a18ceb40c9dd3dd39e75776ba87edfac2950405ec1733e6661b842f09d9f084c->leave($__internal_a18ceb40c9dd3dd39e75776ba87edfac2950405ec1733e6661b842f09d9f084c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/rielt/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
