<?php

/* Platform/Image/index.html.twig */
class __TwigTemplate_6a162071669d06829d47fe0d90cd9f410891a69f9d0604d4a9cede3b3a949330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/Image/index.html.twig", 1);
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
        $__internal_0e2075adfc72e4a048c9ac6b8f128efcd237dc7ab93eb533906b8d60ce17254a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2075adfc72e4a048c9ac6b8f128efcd237dc7ab93eb533906b8d60ce17254a->enter($__internal_0e2075adfc72e4a048c9ac6b8f128efcd237dc7ab93eb533906b8d60ce17254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Image/index.html.twig"));

        $__internal_cc36d55a2a37c1e5115f7dece44ed0d0bdc256dda6baf0da4fa48553f85d438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc36d55a2a37c1e5115f7dece44ed0d0bdc256dda6baf0da4fa48553f85d438e->enter($__internal_cc36d55a2a37c1e5115f7dece44ed0d0bdc256dda6baf0da4fa48553f85d438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Image/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2075adfc72e4a048c9ac6b8f128efcd237dc7ab93eb533906b8d60ce17254a->leave($__internal_0e2075adfc72e4a048c9ac6b8f128efcd237dc7ab93eb533906b8d60ce17254a_prof);

        
        $__internal_cc36d55a2a37c1e5115f7dece44ed0d0bdc256dda6baf0da4fa48553f85d438e->leave($__internal_cc36d55a2a37c1e5115f7dece44ed0d0bdc256dda6baf0da4fa48553f85d438e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_549182e7c3fd775a150a49f23f0fc2c9f6980ce2ca9147b4a77eccbd838719db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549182e7c3fd775a150a49f23f0fc2c9f6980ce2ca9147b4a77eccbd838719db->enter($__internal_549182e7c3fd775a150a49f23f0fc2c9f6980ce2ca9147b4a77eccbd838719db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f13c03ffd665d3c8e735dc825f236bd8ea0a0babe55ae7bf10fdb84a6ad4c832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13c03ffd665d3c8e735dc825f236bd8ea0a0babe55ae7bf10fdb84a6ad4c832->enter($__internal_f13c03ffd665d3c8e735dc825f236bd8ea0a0babe55ae7bf10fdb84a6ad4c832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Изображения
    </h1>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Изображение</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "      <tr>
        <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
            echo "</th>
        <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "imageName", array()))), "html", null, true);
            echo "\"></td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            ";
            // line 27
            echo "              ";
            // line 28
            echo "            ";
            // line 29
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_new");
        echo "\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить изображение
    </a>
  </div>
";
        
        $__internal_f13c03ffd665d3c8e735dc825f236bd8ea0a0babe55ae7bf10fdb84a6ad4c832->leave($__internal_f13c03ffd665d3c8e735dc825f236bd8ea0a0babe55ae7bf10fdb84a6ad4c832_prof);

        
        $__internal_549182e7c3fd775a150a49f23f0fc2c9f6980ce2ca9147b4a77eccbd838719db->leave($__internal_549182e7c3fd775a150a49f23f0fc2c9f6980ce2ca9147b4a77eccbd838719db_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2191bc548d1a070d3c451c5e5b6be17735a54ebc3e9070e65559cfafbe3bf25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2191bc548d1a070d3c451c5e5b6be17735a54ebc3e9070e65559cfafbe3bf25b->enter($__internal_2191bc548d1a070d3c451c5e5b6be17735a54ebc3e9070e65559cfafbe3bf25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5623f53ce5c019892128566c2a8995f289283f252585e1aa3a3ad9774713f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5623f53ce5c019892128566c2a8995f289283f252585e1aa3a3ad9774713f3e6->enter($__internal_5623f53ce5c019892128566c2a8995f289283f252585e1aa3a3ad9774713f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 45
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5623f53ce5c019892128566c2a8995f289283f252585e1aa3a3ad9774713f3e6->leave($__internal_5623f53ce5c019892128566c2a8995f289283f252585e1aa3a3ad9774713f3e6_prof);

        
        $__internal_2191bc548d1a070d3c451c5e5b6be17735a54ebc3e9070e65559cfafbe3bf25b->leave($__internal_2191bc548d1a070d3c451c5e5b6be17735a54ebc3e9070e65559cfafbe3bf25b_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31d5e521ca077e5aa97345f3cc2893355225fcba37c487512311462cb8b47644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d5e521ca077e5aa97345f3cc2893355225fcba37c487512311462cb8b47644->enter($__internal_31d5e521ca077e5aa97345f3cc2893355225fcba37c487512311462cb8b47644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e356a95f149da0ab331f04f30c76dda0543368468b14e128372b802bcee7d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e356a95f149da0ab331f04f30c76dda0543368468b14e128372b802bcee7d79->enter($__internal_6e356a95f149da0ab331f04f30c76dda0543368468b14e128372b802bcee7d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6e356a95f149da0ab331f04f30c76dda0543368468b14e128372b802bcee7d79->leave($__internal_6e356a95f149da0ab331f04f30c76dda0543368468b14e128372b802bcee7d79_prof);

        
        $__internal_31d5e521ca077e5aa97345f3cc2893355225fcba37c487512311462cb8b47644->leave($__internal_31d5e521ca077e5aa97345f3cc2893355225fcba37c487512311462cb8b47644_prof);

    }

    public function getTemplateName()
    {
        return "Platform/Image/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  145 => 48,  132 => 45,  123 => 44,  108 => 38,  104 => 36,  90 => 29,  88 => 28,  86 => 27,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Изображения
    </h1>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Изображение</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      {% for image in images %}
      <tr>
        <th scope=\"row\">{{ image.id }}</th>
        <td><img src=\"{{ asset('images/images/' ~ image.imageName) }}\"></td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            {#<a href=\"{{ path('real_property_type_show', {id: type.id}) }}\" class=\"btn btn-dark\">#}
              {#<i class=\"fas fa-search fa-lg\"></i>#}
            {#</a>#}
            <a href=\"{{ path('image_edit', {id: image.id}) }}\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      {% endfor %}
      </tbody>
    </table>
    <a href=\"{{ path('image_new') }}\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить изображение
    </a>
  </div>
{% endblock body %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}
", "Platform/Image/index.html.twig", "/var/www/rielt/templates/Platform/Image/index.html.twig");
    }
}
