<?php

/* Platform/login.html.twig */
class __TwigTemplate_1c39fd554e52aa1564e4674c03c916da198d3cd06f3183522228f12d7b6974d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ca953f5746dfe6dcd5fc2f3bdb6441d9daa12d38a84432e94d41b638085a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ca953f5746dfe6dcd5fc2f3bdb6441d9daa12d38a84432e94d41b638085a11->enter($__internal_81ca953f5746dfe6dcd5fc2f3bdb6441d9daa12d38a84432e94d41b638085a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/login.html.twig"));

        $__internal_49629d5f859c0aeed22b9a29590ee5f63ebc6a7958a28f907d1e9c09aadd3b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49629d5f859c0aeed22b9a29590ee5f63ebc6a7958a28f907d1e9c09aadd3b6c->enter($__internal_49629d5f859c0aeed22b9a29590ee5f63ebc6a7958a28f907d1e9c09aadd3b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ca953f5746dfe6dcd5fc2f3bdb6441d9daa12d38a84432e94d41b638085a11->leave($__internal_81ca953f5746dfe6dcd5fc2f3bdb6441d9daa12d38a84432e94d41b638085a11_prof);

        
        $__internal_49629d5f859c0aeed22b9a29590ee5f63ebc6a7958a28f907d1e9c09aadd3b6c->leave($__internal_49629d5f859c0aeed22b9a29590ee5f63ebc6a7958a28f907d1e9c09aadd3b6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d65385ba5cd286a75d4dcd24d4257af47c52bd9ba959139f378fe04c535cba19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65385ba5cd286a75d4dcd24d4257af47c52bd9ba959139f378fe04c535cba19->enter($__internal_d65385ba5cd286a75d4dcd24d4257af47c52bd9ba959139f378fe04c535cba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f31856f017684153020e0a77a91b9a1ebe5ca29c9a96e61d2e0f605539c6efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f31856f017684153020e0a77a91b9a1ebe5ca29c9a96e61d2e0f605539c6efa->enter($__internal_4f31856f017684153020e0a77a91b9a1ebe5ca29c9a96e61d2e0f605539c6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container d-flex\" style=\"height: 100vh;\">
    <div class=\"align-self-center mx-auto\">
      <h1 style=\"margin: 5px 0 20px 0; text-align: center;
          color: #ffffff; font-weight: 100;\">
        Вход
      </h1>

      <p id=\"description\" style=\"text-align: center; color: #ffffff;\">
        Пройдите регистрацию и выбирайте недвижимость быстро, просто и удобно!
      </p>

      <div class=\"card col-6 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
        ";
        // line 17
        echo "        <div class=\"card-body\">
          ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new Twig_Error_Runtime('Variable "login_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
          <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new Twig_Error_Runtime('Variable "login_form" does not exist.', 20, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new Twig_Error_Runtime('Variable "login_form" does not exist.', 23, $this->getSourceContext()); })()), "password", array()), 'row');
        echo "
          </div>
          <br>
          <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new Twig_Error_Runtime('Variable "login_form" does not exist.', 27, $this->getSourceContext()); })()), "submit", array()), 'row');
        echo "
          </div>
          ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new Twig_Error_Runtime('Variable "login_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
          ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 30, $this->getSourceContext()); })())) {
            // line 31
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 33
        echo "        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_4f31856f017684153020e0a77a91b9a1ebe5ca29c9a96e61d2e0f605539c6efa->leave($__internal_4f31856f017684153020e0a77a91b9a1ebe5ca29c9a96e61d2e0f605539c6efa_prof);

        
        $__internal_d65385ba5cd286a75d4dcd24d4257af47c52bd9ba959139f378fe04c535cba19->leave($__internal_d65385ba5cd286a75d4dcd24d4257af47c52bd9ba959139f378fe04c535cba19_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95429003700833e4a264695220286a2a1f0b8caea23e9c9bd827d9d9301bac0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95429003700833e4a264695220286a2a1f0b8caea23e9c9bd827d9d9301bac0c->enter($__internal_95429003700833e4a264695220286a2a1f0b8caea23e9c9bd827d9d9301bac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f39186804f04077e9a2e1957234616f9880a9c2e64f33daeba88e8883bb4d8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39186804f04077e9a2e1957234616f9880a9c2e64f33daeba88e8883bb4d8e7->enter($__internal_f39186804f04077e9a2e1957234616f9880a9c2e64f33daeba88e8883bb4d8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
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
  </style>
";
        
        $__internal_f39186804f04077e9a2e1957234616f9880a9c2e64f33daeba88e8883bb4d8e7->leave($__internal_f39186804f04077e9a2e1957234616f9880a9c2e64f33daeba88e8883bb4d8e7_prof);

        
        $__internal_95429003700833e4a264695220286a2a1f0b8caea23e9c9bd827d9d9301bac0c->leave($__internal_95429003700833e4a264695220286a2a1f0b8caea23e9c9bd827d9d9301bac0c_prof);

    }

    public function getTemplateName()
    {
        return "Platform/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  116 => 39,  102 => 33,  96 => 31,  94 => 30,  90 => 29,  85 => 27,  78 => 23,  72 => 20,  67 => 18,  64 => 17,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container d-flex\" style=\"height: 100vh;\">
    <div class=\"align-self-center mx-auto\">
      <h1 style=\"margin: 5px 0 20px 0; text-align: center;
          color: #ffffff; font-weight: 100;\">
        Вход
      </h1>

      <p id=\"description\" style=\"text-align: center; color: #ffffff;\">
        Пройдите регистрацию и выбирайте недвижимость быстро, просто и удобно!
      </p>

      <div class=\"card col-6 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
        {#<div class=\"card-header\"></div>#}
        <div class=\"card-body\">
          {{ form_start(login_form) }}
          <div class=\"form-group\">
            {{ form_row(login_form.username) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(login_form.password) }}
          </div>
          <br>
          <div class=\"form-group\">
            {{ form_row(login_form.submit) }}
          </div>
          {{ form_end(login_form) }}
          {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}
        </div>
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
  </style>
{% endblock %}
", "Platform/login.html.twig", "/var/www/rielt/templates/Platform/login.html.twig");
    }
}
