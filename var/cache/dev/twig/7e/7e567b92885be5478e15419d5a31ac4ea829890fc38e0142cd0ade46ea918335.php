<?php

/* Platform/Image/new.html.twig */
class __TwigTemplate_345b5aee2825d3eb0238222139bfbd4851df3fb99a114116702e0f710dfd5f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/Image/new.html.twig", 1);
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
        $__internal_c7a9618b169012b83c6a2ea990f9e2fefb0896ccaaaa0673cbb48f81987d1f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a9618b169012b83c6a2ea990f9e2fefb0896ccaaaa0673cbb48f81987d1f0c->enter($__internal_c7a9618b169012b83c6a2ea990f9e2fefb0896ccaaaa0673cbb48f81987d1f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Image/new.html.twig"));

        $__internal_198b85077c90bcb1d31e733057c90bb5386974f6016e56240b1667affb63d99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198b85077c90bcb1d31e733057c90bb5386974f6016e56240b1667affb63d99a->enter($__internal_198b85077c90bcb1d31e733057c90bb5386974f6016e56240b1667affb63d99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Image/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a9618b169012b83c6a2ea990f9e2fefb0896ccaaaa0673cbb48f81987d1f0c->leave($__internal_c7a9618b169012b83c6a2ea990f9e2fefb0896ccaaaa0673cbb48f81987d1f0c_prof);

        
        $__internal_198b85077c90bcb1d31e733057c90bb5386974f6016e56240b1667affb63d99a->leave($__internal_198b85077c90bcb1d31e733057c90bb5386974f6016e56240b1667affb63d99a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b673e83b27012220484d062f4f95b0fe0712e3279d6420c178c890359ab264da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b673e83b27012220484d062f4f95b0fe0712e3279d6420c178c890359ab264da->enter($__internal_b673e83b27012220484d062f4f95b0fe0712e3279d6420c178c890359ab264da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd36fb2f8ed13628d0445067fd7a51eb83b4b5e230999b25c88a5096989e85d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd36fb2f8ed13628d0445067fd7a51eb83b4b5e230999b25c88a5096989e85d5->enter($__internal_bd36fb2f8ed13628d0445067fd7a51eb83b4b5e230999b25c88a5096989e85d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление изображения
    </h1>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      ";
        // line 13
        echo "      <div class=\"card-body\">
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "imageFile", array()), 'row');
        echo "
        </div>
        <br>
        <div class=\"form-group\">
          <input type=\"submit\" value=\"Сохранить\">
        </div>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>
";
        
        $__internal_bd36fb2f8ed13628d0445067fd7a51eb83b4b5e230999b25c88a5096989e85d5->leave($__internal_bd36fb2f8ed13628d0445067fd7a51eb83b4b5e230999b25c88a5096989e85d5_prof);

        
        $__internal_b673e83b27012220484d062f4f95b0fe0712e3279d6420c178c890359ab264da->leave($__internal_b673e83b27012220484d062f4f95b0fe0712e3279d6420c178c890359ab264da_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cd5566e086fcb48089175b55047c5d441a1c30921042d07efd109fdcfc61538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd5566e086fcb48089175b55047c5d441a1c30921042d07efd109fdcfc61538->enter($__internal_5cd5566e086fcb48089175b55047c5d441a1c30921042d07efd109fdcfc61538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4cad758e4e65061eab989ac0a16b081cf155219ea45fae3773233615832dd982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cad758e4e65061eab989ac0a16b081cf155219ea45fae3773233615832dd982->enter($__internal_4cad758e4e65061eab989ac0a16b081cf155219ea45fae3773233615832dd982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
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
        
        $__internal_4cad758e4e65061eab989ac0a16b081cf155219ea45fae3773233615832dd982->leave($__internal_4cad758e4e65061eab989ac0a16b081cf155219ea45fae3773233615832dd982_prof);

        
        $__internal_5cd5566e086fcb48089175b55047c5d441a1c30921042d07efd109fdcfc61538->leave($__internal_5cd5566e086fcb48089175b55047c5d441a1c30921042d07efd109fdcfc61538_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c584e0666b35907e24d00f648552811e28b5057ada315e0f165e296f1439964c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c584e0666b35907e24d00f648552811e28b5057ada315e0f165e296f1439964c->enter($__internal_c584e0666b35907e24d00f648552811e28b5057ada315e0f165e296f1439964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f7d0bf65aa0d3cd06518b69e358c20c243b8266bb95cdfb3e5e4aa295366588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7d0bf65aa0d3cd06518b69e358c20c243b8266bb95cdfb3e5e4aa295366588->enter($__internal_3f7d0bf65aa0d3cd06518b69e358c20c243b8266bb95cdfb3e5e4aa295366588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3f7d0bf65aa0d3cd06518b69e358c20c243b8266bb95cdfb3e5e4aa295366588->leave($__internal_3f7d0bf65aa0d3cd06518b69e358c20c243b8266bb95cdfb3e5e4aa295366588_prof);

        
        $__internal_c584e0666b35907e24d00f648552811e28b5057ada315e0f165e296f1439964c->leave($__internal_c584e0666b35907e24d00f648552811e28b5057ada315e0f165e296f1439964c_prof);

    }

    public function getTemplateName()
    {
        return "Platform/Image/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  160 => 77,  102 => 29,  93 => 28,  78 => 22,  69 => 16,  64 => 14,  61 => 13,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление изображения
    </h1>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      {#<div class=\"card-header\"></div>#}
      <div class=\"card-body\">
        {{ form_start(form) }}
        <div class=\"form-group\">
          {{ form_row(form.imageFile) }}
        </div>
        <br>
        <div class=\"form-group\">
          <input type=\"submit\" value=\"Сохранить\">
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
", "Platform/Image/new.html.twig", "/var/www/rielt/templates/Platform/Image/new.html.twig");
    }
}
