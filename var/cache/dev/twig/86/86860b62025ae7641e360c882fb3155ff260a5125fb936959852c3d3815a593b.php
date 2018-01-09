<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_6f6d94d8d908a11fbb43a40b0730e0eedf0c6b48b85fdad01f0055b9af6e746f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd1bbf3082900478eb3e421f1e1c9a41ffcc840d8e0c08073fa745bc98aa96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd1bbf3082900478eb3e421f1e1c9a41ffcc840d8e0c08073fa745bc98aa96b->enter($__internal_fcd1bbf3082900478eb3e421f1e1c9a41ffcc840d8e0c08073fa745bc98aa96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_f52486a80b70e2820eb9e1058955f9c3dffaf9c1d7f202d50aae062fb7902d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52486a80b70e2820eb9e1058955f9c3dffaf9c1d7f202d50aae062fb7902d1d->enter($__internal_f52486a80b70e2820eb9e1058955f9c3dffaf9c1d7f202d50aae062fb7902d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_fcd1bbf3082900478eb3e421f1e1c9a41ffcc840d8e0c08073fa745bc98aa96b->leave($__internal_fcd1bbf3082900478eb3e421f1e1c9a41ffcc840d8e0c08073fa745bc98aa96b_prof);

        
        $__internal_f52486a80b70e2820eb9e1058955f9c3dffaf9c1d7f202d50aae062fb7902d1d->leave($__internal_f52486a80b70e2820eb9e1058955f9c3dffaf9c1d7f202d50aae062fb7902d1d_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_71195bbc2d62d1b5cabacdafb66b9b1a4f783f7cd82d1ba37f9e8e5b88b00357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71195bbc2d62d1b5cabacdafb66b9b1a4f783f7cd82d1ba37f9e8e5b88b00357->enter($__internal_71195bbc2d62d1b5cabacdafb66b9b1a4f783f7cd82d1ba37f9e8e5b88b00357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_a66bc718d3c49a877262a8f5de10aa25dba834671d8cf8f8fa2379e88f9993a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66bc718d3c49a877262a8f5de10aa25dba834671d8cf8f8fa2379e88f9993a5->enter($__internal_a66bc718d3c49a877262a8f5de10aa25dba834671d8cf8f8fa2379e88f9993a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a66bc718d3c49a877262a8f5de10aa25dba834671d8cf8f8fa2379e88f9993a5->leave($__internal_a66bc718d3c49a877262a8f5de10aa25dba834671d8cf8f8fa2379e88f9993a5_prof);

        
        $__internal_71195bbc2d62d1b5cabacdafb66b9b1a4f783f7cd82d1ba37f9e8e5b88b00357->leave($__internal_71195bbc2d62d1b5cabacdafb66b9b1a4f783f7cd82d1ba37f9e8e5b88b00357_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5d62d40d5deaafef588951708fe42f40b58f356bd230d7448c7015c77cdc9f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d62d40d5deaafef588951708fe42f40b58f356bd230d7448c7015c77cdc9f30->enter($__internal_5d62d40d5deaafef588951708fe42f40b58f356bd230d7448c7015c77cdc9f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_7482a840ba9c4f8f875b75cee0161085da7f759c3f67a6e618de567b8ede96ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7482a840ba9c4f8f875b75cee0161085da7f759c3f67a6e618de567b8ede96ed->enter($__internal_7482a840ba9c4f8f875b75cee0161085da7f759c3f67a6e618de567b8ede96ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7482a840ba9c4f8f875b75cee0161085da7f759c3f67a6e618de567b8ede96ed->leave($__internal_7482a840ba9c4f8f875b75cee0161085da7f759c3f67a6e618de567b8ede96ed_prof);

        
        $__internal_5d62d40d5deaafef588951708fe42f40b58f356bd230d7448c7015c77cdc9f30->leave($__internal_5d62d40d5deaafef588951708fe42f40b58f356bd230d7448c7015c77cdc9f30_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_b4b660402f44451061c5d19d5fde3e0a4133c428ea4867917961af6b6f01281f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b660402f44451061c5d19d5fde3e0a4133c428ea4867917961af6b6f01281f->enter($__internal_b4b660402f44451061c5d19d5fde3e0a4133c428ea4867917961af6b6f01281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a308e864689933d3421cc5541dbef01a9b10c32fe81f8d8a929a2e2450c1b9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a308e864689933d3421cc5541dbef01a9b10c32fe81f8d8a929a2e2450c1b9b8->enter($__internal_a308e864689933d3421cc5541dbef01a9b10c32fe81f8d8a929a2e2450c1b9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a308e864689933d3421cc5541dbef01a9b10c32fe81f8d8a929a2e2450c1b9b8->leave($__internal_a308e864689933d3421cc5541dbef01a9b10c32fe81f8d8a929a2e2450c1b9b8_prof);

        
        $__internal_b4b660402f44451061c5d19d5fde3e0a4133c428ea4867917961af6b6f01281f->leave($__internal_b4b660402f44451061c5d19d5fde3e0a4133c428ea4867917961af6b6f01281f_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a79c6387f61a773fd8fb88799bff3e789f7a943749f88433d721ff9682980aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79c6387f61a773fd8fb88799bff3e789f7a943749f88433d721ff9682980aba->enter($__internal_a79c6387f61a773fd8fb88799bff3e789f7a943749f88433d721ff9682980aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_234bb8070d9b39200270d6102446736c92665f06d5c4354a5244d500c41eec6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234bb8070d9b39200270d6102446736c92665f06d5c4354a5244d500c41eec6a->enter($__internal_234bb8070d9b39200270d6102446736c92665f06d5c4354a5244d500c41eec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_234bb8070d9b39200270d6102446736c92665f06d5c4354a5244d500c41eec6a->leave($__internal_234bb8070d9b39200270d6102446736c92665f06d5c4354a5244d500c41eec6a_prof);

        
        $__internal_a79c6387f61a773fd8fb88799bff3e789f7a943749f88433d721ff9682980aba->leave($__internal_a79c6387f61a773fd8fb88799bff3e789f7a943749f88433d721ff9682980aba_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@VichUploader/Form/fields.html.twig", "/var/www/rielt/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
