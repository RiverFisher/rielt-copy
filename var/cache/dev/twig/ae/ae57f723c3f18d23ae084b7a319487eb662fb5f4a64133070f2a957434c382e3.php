<?php

/* RealProperty/RealPropertyType/index.html.twig */
class __TwigTemplate_03b68c37924d3d022ac126d778d2024b0479f82a8eb4bcca235ac34b86f09379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RealProperty/RealPropertyType/index.html.twig", 1);
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
        $__internal_595ae313cfef6d84a328617529db228f57d3fa445d1b3bb322fdeaf8e625180d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595ae313cfef6d84a328617529db228f57d3fa445d1b3bb322fdeaf8e625180d->enter($__internal_595ae313cfef6d84a328617529db228f57d3fa445d1b3bb322fdeaf8e625180d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/index.html.twig"));

        $__internal_c8bf87f70e50823dda7dcce9d3867fe651c239434c0ef7d1029cb17a4240526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bf87f70e50823dda7dcce9d3867fe651c239434c0ef7d1029cb17a4240526d->enter($__internal_c8bf87f70e50823dda7dcce9d3867fe651c239434c0ef7d1029cb17a4240526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealPropertyType/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595ae313cfef6d84a328617529db228f57d3fa445d1b3bb322fdeaf8e625180d->leave($__internal_595ae313cfef6d84a328617529db228f57d3fa445d1b3bb322fdeaf8e625180d_prof);

        
        $__internal_c8bf87f70e50823dda7dcce9d3867fe651c239434c0ef7d1029cb17a4240526d->leave($__internal_c8bf87f70e50823dda7dcce9d3867fe651c239434c0ef7d1029cb17a4240526d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0abdf0eeefd1bcd519f5bfc67d963bc95edc61c8543a37d787816d7ea4d1b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0abdf0eeefd1bcd519f5bfc67d963bc95edc61c8543a37d787816d7ea4d1b12->enter($__internal_a0abdf0eeefd1bcd519f5bfc67d963bc95edc61c8543a37d787816d7ea4d1b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b77bd46380c2f179d8b69eb816f288f2d26841eb9b263acd1ff054479f932f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b77bd46380c2f179d8b69eb816f288f2d26841eb9b263acd1ff054479f932f7->enter($__internal_0b77bd46380c2f179d8b69eb816f288f2d26841eb9b263acd1ff054479f932f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Типы недвижимости SweetHome
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Пройдите регистрацию и выбирайте недвижимость быстро, просто и удобно!
    </p>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Тип недвижимости</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 25
            echo "      <tr>
        <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "name", array()), "html", null, true);
            echo "</td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            ";
            // line 31
            echo "              ";
            // line 32
            echo "            ";
            // line 33
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("real_property_type_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("real_property_type_new");
        echo "\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить тип недвижимости
    </a>
  </div>
";
        
        $__internal_0b77bd46380c2f179d8b69eb816f288f2d26841eb9b263acd1ff054479f932f7->leave($__internal_0b77bd46380c2f179d8b69eb816f288f2d26841eb9b263acd1ff054479f932f7_prof);

        
        $__internal_a0abdf0eeefd1bcd519f5bfc67d963bc95edc61c8543a37d787816d7ea4d1b12->leave($__internal_a0abdf0eeefd1bcd519f5bfc67d963bc95edc61c8543a37d787816d7ea4d1b12_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64fb577b8d32a8e6774476c57945592ed08b76e185f96a8cf18f2f806d35dfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fb577b8d32a8e6774476c57945592ed08b76e185f96a8cf18f2f806d35dfaa->enter($__internal_64fb577b8d32a8e6774476c57945592ed08b76e185f96a8cf18f2f806d35dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_388ee84964d9cc72f5b1e9f47055e4cbefaaaab0961afe48115e31b43e409b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388ee84964d9cc72f5b1e9f47055e4cbefaaaab0961afe48115e31b43e409b03->enter($__internal_388ee84964d9cc72f5b1e9f47055e4cbefaaaab0961afe48115e31b43e409b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 49
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_388ee84964d9cc72f5b1e9f47055e4cbefaaaab0961afe48115e31b43e409b03->leave($__internal_388ee84964d9cc72f5b1e9f47055e4cbefaaaab0961afe48115e31b43e409b03_prof);

        
        $__internal_64fb577b8d32a8e6774476c57945592ed08b76e185f96a8cf18f2f806d35dfaa->leave($__internal_64fb577b8d32a8e6774476c57945592ed08b76e185f96a8cf18f2f806d35dfaa_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1213a62c06e873292df6965f39470bd32b12c4d7b3cdea8e7f44a71730a35c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1213a62c06e873292df6965f39470bd32b12c4d7b3cdea8e7f44a71730a35c08->enter($__internal_1213a62c06e873292df6965f39470bd32b12c4d7b3cdea8e7f44a71730a35c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_23db092258523a54d0cfdc1ae753197ba0c192a80471dd0e33fed58f03cc7f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23db092258523a54d0cfdc1ae753197ba0c192a80471dd0e33fed58f03cc7f67->enter($__internal_23db092258523a54d0cfdc1ae753197ba0c192a80471dd0e33fed58f03cc7f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_23db092258523a54d0cfdc1ae753197ba0c192a80471dd0e33fed58f03cc7f67->leave($__internal_23db092258523a54d0cfdc1ae753197ba0c192a80471dd0e33fed58f03cc7f67_prof);

        
        $__internal_1213a62c06e873292df6965f39470bd32b12c4d7b3cdea8e7f44a71730a35c08->leave($__internal_1213a62c06e873292df6965f39470bd32b12c4d7b3cdea8e7f44a71730a35c08_prof);

    }

    public function getTemplateName()
    {
        return "RealProperty/RealPropertyType/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  149 => 52,  136 => 49,  127 => 48,  112 => 42,  108 => 40,  94 => 33,  92 => 32,  90 => 31,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Типы недвижимости SweetHome
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Пройдите регистрацию и выбирайте недвижимость быстро, просто и удобно!
    </p>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Тип недвижимости</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      {% for type in types %}
      <tr>
        <th scope=\"row\">{{ type.id }}</th>
        <td>{{ type.name }}</td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            {#<a href=\"{{ path('real_property_type_show', {id: type.id}) }}\" class=\"btn btn-dark\">#}
              {#<i class=\"fas fa-search fa-lg\"></i>#}
            {#</a>#}
            <a href=\"{{ path('real_property_type_edit', {id: type.id}) }}\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      {% endfor %}
      </tbody>
    </table>
    <a href=\"{{ path('real_property_type_new') }}\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить тип недвижимости
    </a>
  </div>
{% endblock body %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}
", "RealProperty/RealPropertyType/index.html.twig", "/var/www/rielt/templates/RealProperty/RealPropertyType/index.html.twig");
    }
}
