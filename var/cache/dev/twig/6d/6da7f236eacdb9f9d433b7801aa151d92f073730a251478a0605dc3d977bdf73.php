<?php

/* RealProperty/RealPropertyType/edit.html.twig */
class __TwigTemplate_481a601c2588e1f686be1e1763cedd292c22aa4e0a9cfbb9cb907e117ad02ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RealProperty/RealPropertyType/edit.html.twig", 1);
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
        $__internal_94d9c152a844a74ed6ecbdefd4cf6194903ff773fd32be25e9d28faa42363116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d9c152a844a74ed6ecbdefd4cf6194903ff773fd32be25e9d28faa42363116->enter($__internal_94d9c152a844a74ed6ecbdefd4cf6194903ff773fd32be25e9d28faa42363116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/edit.html.twig"));

        $__internal_0d8a2111a0f11ee337bf279883dad70aee321e3163ed0806eac19ea535397a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8a2111a0f11ee337bf279883dad70aee321e3163ed0806eac19ea535397a76->enter($__internal_0d8a2111a0f11ee337bf279883dad70aee321e3163ed0806eac19ea535397a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d9c152a844a74ed6ecbdefd4cf6194903ff773fd32be25e9d28faa42363116->leave($__internal_94d9c152a844a74ed6ecbdefd4cf6194903ff773fd32be25e9d28faa42363116_prof);

        
        $__internal_0d8a2111a0f11ee337bf279883dad70aee321e3163ed0806eac19ea535397a76->leave($__internal_0d8a2111a0f11ee337bf279883dad70aee321e3163ed0806eac19ea535397a76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a9d9d90cefada91ee8793b8d7c1bae5e8f39d9cbdf182913d4551df01014e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9d9d90cefada91ee8793b8d7c1bae5e8f39d9cbdf182913d4551df01014e81->enter($__internal_0a9d9d90cefada91ee8793b8d7c1bae5e8f39d9cbdf182913d4551df01014e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be81a678380e9f5651ef87a297d93fbd89d06715d0ac41adbf0ceeba00dd4b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be81a678380e9f5651ef87a297d93fbd89d06715d0ac41adbf0ceeba00dd4b57->enter($__internal_be81a678380e9f5651ef87a297d93fbd89d06715d0ac41adbf0ceeba00dd4b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Редактирование типа недвижимости
    </h1>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      <div class=\"card-body\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
        </div>
        <br>
        <div class=\"form-group\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "submit", array()), 'row');
        echo "
        </div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>
";
        
        $__internal_be81a678380e9f5651ef87a297d93fbd89d06715d0ac41adbf0ceeba00dd4b57->leave($__internal_be81a678380e9f5651ef87a297d93fbd89d06715d0ac41adbf0ceeba00dd4b57_prof);

        
        $__internal_0a9d9d90cefada91ee8793b8d7c1bae5e8f39d9cbdf182913d4551df01014e81->leave($__internal_0a9d9d90cefada91ee8793b8d7c1bae5e8f39d9cbdf182913d4551df01014e81_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f86b92ff662ebfadc965ca236b556da353a192686bb5e56520eec7dc2053653c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86b92ff662ebfadc965ca236b556da353a192686bb5e56520eec7dc2053653c->enter($__internal_f86b92ff662ebfadc965ca236b556da353a192686bb5e56520eec7dc2053653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4b4c5e9e98f0105e935a37b0fea4a8303ac601a2c4319714106df2a9fd8f6f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4c5e9e98f0105e935a37b0fea4a8303ac601a2c4319714106df2a9fd8f6f25->enter($__internal_4b4c5e9e98f0105e935a37b0fea4a8303ac601a2c4319714106df2a9fd8f6f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
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
        
        $__internal_4b4c5e9e98f0105e935a37b0fea4a8303ac601a2c4319714106df2a9fd8f6f25->leave($__internal_4b4c5e9e98f0105e935a37b0fea4a8303ac601a2c4319714106df2a9fd8f6f25_prof);

        
        $__internal_f86b92ff662ebfadc965ca236b556da353a192686bb5e56520eec7dc2053653c->leave($__internal_f86b92ff662ebfadc965ca236b556da353a192686bb5e56520eec7dc2053653c_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38906e1c2d1a9bbfe63b1a3f17f37afa485e4d52e3c8eca19e770e6175d28d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38906e1c2d1a9bbfe63b1a3f17f37afa485e4d52e3c8eca19e770e6175d28d24->enter($__internal_38906e1c2d1a9bbfe63b1a3f17f37afa485e4d52e3c8eca19e770e6175d28d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f12d746d85bde0f8094db66b437763889ccf972f13d621b4fd909a8a2be6f3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12d746d85bde0f8094db66b437763889ccf972f13d621b4fd909a8a2be6f3c2->enter($__internal_f12d746d85bde0f8094db66b437763889ccf972f13d621b4fd909a8a2be6f3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f12d746d85bde0f8094db66b437763889ccf972f13d621b4fd909a8a2be6f3c2->leave($__internal_f12d746d85bde0f8094db66b437763889ccf972f13d621b4fd909a8a2be6f3c2_prof);

        
        $__internal_38906e1c2d1a9bbfe63b1a3f17f37afa485e4d52e3c8eca19e770e6175d28d24->leave($__internal_38906e1c2d1a9bbfe63b1a3f17f37afa485e4d52e3c8eca19e770e6175d28d24_prof);

    }

    public function getTemplateName()
    {
        return "RealProperty/RealPropertyType/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 77,  161 => 76,  103 => 28,  94 => 27,  79 => 21,  74 => 19,  67 => 15,  62 => 13,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Редактирование типа недвижимости
    </h1>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
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
", "RealProperty/RealPropertyType/edit.html.twig", "/var/www/rielt/templates/RealProperty/RealPropertyType/edit.html.twig");
    }
}
