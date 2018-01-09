<?php

/* RealProperty/RealPropertyType/new.html.twig */
class __TwigTemplate_75d3525ba38ea4e2cf57bdbc30b1774cc1e1000a85985463ddb27b0dbc4b8d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RealProperty/RealPropertyType/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd3e64141768bbd6fd5ff1a439abb7592f82838ce647762849f2066857cc710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd3e64141768bbd6fd5ff1a439abb7592f82838ce647762849f2066857cc710->enter($__internal_1fd3e64141768bbd6fd5ff1a439abb7592f82838ce647762849f2066857cc710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/new.html.twig"));

        $__internal_c38ee687b731f0564d37ab79ff5786e21df54106b0e334a4dbf7567254061535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38ee687b731f0564d37ab79ff5786e21df54106b0e334a4dbf7567254061535->enter($__internal_c38ee687b731f0564d37ab79ff5786e21df54106b0e334a4dbf7567254061535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd3e64141768bbd6fd5ff1a439abb7592f82838ce647762849f2066857cc710->leave($__internal_1fd3e64141768bbd6fd5ff1a439abb7592f82838ce647762849f2066857cc710_prof);

        
        $__internal_c38ee687b731f0564d37ab79ff5786e21df54106b0e334a4dbf7567254061535->leave($__internal_c38ee687b731f0564d37ab79ff5786e21df54106b0e334a4dbf7567254061535_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f307f878b4998d4fb36ec70b7e3345de2af93f390b970fd0920e270145fe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f307f878b4998d4fb36ec70b7e3345de2af93f390b970fd0920e270145fe3f->enter($__internal_23f307f878b4998d4fb36ec70b7e3345de2af93f390b970fd0920e270145fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b67697f7cc469c81b92c17229f737a3c6c6a57a2782b7f277e097298996f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b67697f7cc469c81b92c17229f737a3c6c6a57a2782b7f277e097298996f3cc->enter($__internal_5b67697f7cc469c81b92c17229f737a3c6c6a57a2782b7f277e097298996f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление типа недвижимости
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Добавьте тип недвижимости в платформу SweetHome, если он не существует
    </p>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      ";
        // line 17
        echo "      <div class=\"card-body\">
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
        </div>
        <br>
        <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "submit", array()), 'row');
        echo "
        </div>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>
";
        
        $__internal_5b67697f7cc469c81b92c17229f737a3c6c6a57a2782b7f277e097298996f3cc->leave($__internal_5b67697f7cc469c81b92c17229f737a3c6c6a57a2782b7f277e097298996f3cc_prof);

        
        $__internal_23f307f878b4998d4fb36ec70b7e3345de2af93f390b970fd0920e270145fe3f->leave($__internal_23f307f878b4998d4fb36ec70b7e3345de2af93f390b970fd0920e270145fe3f_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4c4bd98e3d9618f0c8d07a4d8bf08800630e3390d7e7b3a80f90f3ad7a59a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c4bd98e3d9618f0c8d07a4d8bf08800630e3390d7e7b3a80f90f3ad7a59a08->enter($__internal_a4c4bd98e3d9618f0c8d07a4d8bf08800630e3390d7e7b3a80f90f3ad7a59a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2ad900cc7a782fde0085c31afd4e8d81627fc42d3d279c8b30715defc9338e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ad900cc7a782fde0085c31afd4e8d81627fc42d3d279c8b30715defc9338e4->enter($__internal_d2ad900cc7a782fde0085c31afd4e8d81627fc42d3d279c8b30715defc9338e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <style>
    /* Template styles */
    :root {
      --main-bg-color: #423443;
      --grape-color: #2A212B;
      --grape-color-transparent: rgba(42, 33, 43, 0.7);
      --light-color: #AA7E7B;
      --light-color-hover: #986f6d;
      --dark-color: #2A212B;
      --light-color-transparent: rgba(170, 126, 123, 0.95);
    }
    body {
      /*background-image: url(\"bundles/platformlanding/images/body_background.jpg\");*/
      /*background-repeat: repeat;*/
      background-color: var(--main-bg-color);
    }

    .bg-q {
      background-color: var(--dark-color);
    }

    /* Content area styles */
    .bg-grape {
      background-color: var(--grape-color);
    }

    /* Navigation bar styles */
    .navbar {
      padding: .7rem 1rem;
      /*position: fixed;*/
      /*left: 0;*/
      /*right: 0;*/
    }
    .navbar-transparent {
      background: none;
    }

    body{
      display: flex;
      display: -webkit-flex;
      flex-direction: column;
      -webkit-flex-direction: column;
      height: 100%;
    }
  </style>
";
        
        $__internal_d2ad900cc7a782fde0085c31afd4e8d81627fc42d3d279c8b30715defc9338e4->leave($__internal_d2ad900cc7a782fde0085c31afd4e8d81627fc42d3d279c8b30715defc9338e4_prof);

        
        $__internal_a4c4bd98e3d9618f0c8d07a4d8bf08800630e3390d7e7b3a80f90f3ad7a59a08->leave($__internal_a4c4bd98e3d9618f0c8d07a4d8bf08800630e3390d7e7b3a80f90f3ad7a59a08_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19645ea2e2c3e0a139db4908478ff479be29275da47595c6ceec5b9384eed2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19645ea2e2c3e0a139db4908478ff479be29275da47595c6ceec5b9384eed2f5->enter($__internal_19645ea2e2c3e0a139db4908478ff479be29275da47595c6ceec5b9384eed2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85ad9edda48246d4ef75d56885915a191f5649f56c0abfd9a38e2c1090e5426b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad9edda48246d4ef75d56885915a191f5649f56c0abfd9a38e2c1090e5426b->enter($__internal_85ad9edda48246d4ef75d56885915a191f5649f56c0abfd9a38e2c1090e5426b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_85ad9edda48246d4ef75d56885915a191f5649f56c0abfd9a38e2c1090e5426b->leave($__internal_85ad9edda48246d4ef75d56885915a191f5649f56c0abfd9a38e2c1090e5426b_prof);

        
        $__internal_19645ea2e2c3e0a139db4908478ff479be29275da47595c6ceec5b9384eed2f5->leave($__internal_19645ea2e2c3e0a139db4908478ff479be29275da47595c6ceec5b9384eed2f5_prof);

    }

    public function getTemplateName()
    {
        return "RealProperty/RealPropertyType/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 82,  167 => 81,  109 => 33,  100 => 32,  85 => 26,  80 => 24,  73 => 20,  68 => 18,  65 => 17,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление типа недвижимости
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Добавьте тип недвижимости в платформу SweetHome, если он не существует
    </p>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      {#<div class=\"card-header\"></div>#}
      <div class=\"card-body\">
        {{ form_start(form) }}
        <div class=\"form-group\">
          {{ form_row(form.name) }}
        </div>
        <br>
        <div class=\"form-group\">
          {{ form_row(form.submit) }}
        </div>
        {{ form_end(form) }}
      </div>
    </div>
  </div>
{% endblock body %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    /* Template styles */
    :root {
      --main-bg-color: #423443;
      --grape-color: #2A212B;
      --grape-color-transparent: rgba(42, 33, 43, 0.7);
      --light-color: #AA7E7B;
      --light-color-hover: #986f6d;
      --dark-color: #2A212B;
      --light-color-transparent: rgba(170, 126, 123, 0.95);
    }
    body {
      /*background-image: url(\"bundles/platformlanding/images/body_background.jpg\");*/
      /*background-repeat: repeat;*/
      background-color: var(--main-bg-color);
    }

    .bg-q {
      background-color: var(--dark-color);
    }

    /* Content area styles */
    .bg-grape {
      background-color: var(--grape-color);
    }

    /* Navigation bar styles */
    .navbar {
      padding: .7rem 1rem;
      /*position: fixed;*/
      /*left: 0;*/
      /*right: 0;*/
    }
    .navbar-transparent {
      background: none;
    }

    body{
      display: flex;
      display: -webkit-flex;
      flex-direction: column;
      -webkit-flex-direction: column;
      height: 100%;
    }
  </style>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}
", "RealProperty/RealPropertyType/new.html.twig", "/var/www/rielt/templates/RealProperty/RealPropertyType/new.html.twig");
    }
}
