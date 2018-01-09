<?php

/* RealProperty/RealProperty/index.html.twig */
class __TwigTemplate_fc322aedf5bfc534ff09c67e896af24a845b86a89985f3996feb15a8b4fca592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RealProperty/RealProperty/index.html.twig", 1);
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
        $__internal_7d181f5fe912c92c48cc39ba78fb08d2dd2b257e5fe81521cf397977b12db00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d181f5fe912c92c48cc39ba78fb08d2dd2b257e5fe81521cf397977b12db00a->enter($__internal_7d181f5fe912c92c48cc39ba78fb08d2dd2b257e5fe81521cf397977b12db00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealProperty/index.html.twig"));

        $__internal_b95fff263af311009edbc6942cd7c5a4efe13221c0321db4cefaf4b6d7ddab8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95fff263af311009edbc6942cd7c5a4efe13221c0321db4cefaf4b6d7ddab8b->enter($__internal_b95fff263af311009edbc6942cd7c5a4efe13221c0321db4cefaf4b6d7ddab8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealProperty/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d181f5fe912c92c48cc39ba78fb08d2dd2b257e5fe81521cf397977b12db00a->leave($__internal_7d181f5fe912c92c48cc39ba78fb08d2dd2b257e5fe81521cf397977b12db00a_prof);

        
        $__internal_b95fff263af311009edbc6942cd7c5a4efe13221c0321db4cefaf4b6d7ddab8b->leave($__internal_b95fff263af311009edbc6942cd7c5a4efe13221c0321db4cefaf4b6d7ddab8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b9875cdbc14ebcded349ce746ec14de1249201111513d2d9f448c3833313233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9875cdbc14ebcded349ce746ec14de1249201111513d2d9f448c3833313233->enter($__internal_9b9875cdbc14ebcded349ce746ec14de1249201111513d2d9f448c3833313233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2840cfc1b4ecf29428f46aeac6719cc843ca6ae7966fb487954de91db228daaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2840cfc1b4ecf29428f46aeac6719cc843ca6ae7966fb487954de91db228daaa->enter($__internal_2840cfc1b4ecf29428f46aeac6719cc843ca6ae7966fb487954de91db228daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Список объявлений
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Воспользуйтесь фильтрацией и сортировкой для поиска необходимой Вам недвижимости по параметрам
    </p>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Тип недвижимости</th>
        <th scope=\"col\">Адрес</th>
        <th scope=\"col\">Оригинальный текст объявления</th>
        <th scope=\"col\">Площадь</th>
        <th scope=\"col\">Стоимость</th>
        <th scope=\"col\">Цель подачи объявления</th>
        <th scope=\"col\">Изображения</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realProperties"]) || array_key_exists("realProperties", $context) ? $context["realProperties"] : (function () { throw new Twig_Error_Runtime('Variable "realProperties" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["realProperty"]) {
            // line 31
            echo "      <tr>
        <th scope=\"row\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "id", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "address", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "originalAdText", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "area", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "cost", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "purpose", array()), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "            <img class=\"user-avatar-mobile mobile-content\"
                 src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "imageName", array()))), "html", null, true);
                echo "\">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            ";
            // line 48
            echo "              ";
            // line 49
            echo "            ";
            // line 50
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("real_property_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["realProperty"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("real_property_new");
        echo "\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить объявление
    </a>
  </div>
";
        
        $__internal_2840cfc1b4ecf29428f46aeac6719cc843ca6ae7966fb487954de91db228daaa->leave($__internal_2840cfc1b4ecf29428f46aeac6719cc843ca6ae7966fb487954de91db228daaa_prof);

        
        $__internal_9b9875cdbc14ebcded349ce746ec14de1249201111513d2d9f448c3833313233->leave($__internal_9b9875cdbc14ebcded349ce746ec14de1249201111513d2d9f448c3833313233_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6c15ad338b79b5c32067c92084581ea678570974d639b727edd2ea1ac1cee16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c15ad338b79b5c32067c92084581ea678570974d639b727edd2ea1ac1cee16->enter($__internal_d6c15ad338b79b5c32067c92084581ea678570974d639b727edd2ea1ac1cee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62d0e52aa55c91c2ad853aa2341c4b5b48097459d5e22d6994b6e3b019064253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d0e52aa55c91c2ad853aa2341c4b5b48097459d5e22d6994b6e3b019064253->enter($__internal_62d0e52aa55c91c2ad853aa2341c4b5b48097459d5e22d6994b6e3b019064253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_62d0e52aa55c91c2ad853aa2341c4b5b48097459d5e22d6994b6e3b019064253->leave($__internal_62d0e52aa55c91c2ad853aa2341c4b5b48097459d5e22d6994b6e3b019064253_prof);

        
        $__internal_d6c15ad338b79b5c32067c92084581ea678570974d639b727edd2ea1ac1cee16->leave($__internal_d6c15ad338b79b5c32067c92084581ea678570974d639b727edd2ea1ac1cee16_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adf72eb6688ac7bb3b5941fff5f2350d1623270ab8191afb84deda8141f55c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf72eb6688ac7bb3b5941fff5f2350d1623270ab8191afb84deda8141f55c96->enter($__internal_adf72eb6688ac7bb3b5941fff5f2350d1623270ab8191afb84deda8141f55c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19e7ac3caa257126a64ddec05340be8495e8aea9521d475b61ad4e317d3dedb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e7ac3caa257126a64ddec05340be8495e8aea9521d475b61ad4e317d3dedb2->enter($__internal_19e7ac3caa257126a64ddec05340be8495e8aea9521d475b61ad4e317d3dedb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_19e7ac3caa257126a64ddec05340be8495e8aea9521d475b61ad4e317d3dedb2->leave($__internal_19e7ac3caa257126a64ddec05340be8495e8aea9521d475b61ad4e317d3dedb2_prof);

        
        $__internal_adf72eb6688ac7bb3b5941fff5f2350d1623270ab8191afb84deda8141f55c96->leave($__internal_adf72eb6688ac7bb3b5941fff5f2350d1623270ab8191afb84deda8141f55c96_prof);

    }

    public function getTemplateName()
    {
        return "RealProperty/RealProperty/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 70,  194 => 69,  181 => 66,  172 => 65,  157 => 59,  153 => 57,  139 => 50,  137 => 49,  135 => 48,  130 => 44,  122 => 42,  119 => 41,  115 => 40,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  83 => 31,  79 => 30,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Список объявлений
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Воспользуйтесь фильтрацией и сортировкой для поиска необходимой Вам недвижимости по параметрам
    </p>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Тип недвижимости</th>
        <th scope=\"col\">Адрес</th>
        <th scope=\"col\">Оригинальный текст объявления</th>
        <th scope=\"col\">Площадь</th>
        <th scope=\"col\">Стоимость</th>
        <th scope=\"col\">Цель подачи объявления</th>
        <th scope=\"col\">Изображения</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      {% for realProperty in realProperties %}
      <tr>
        <th scope=\"row\">{{ realProperty.id }}</th>
        <td>{{ realProperty.type }}</td>
        <td>{{ realProperty.address }}</td>
        <td>{{ realProperty.originalAdText }}</td>
        <td>{{ realProperty.area }}</td>
        <td>{{ realProperty.cost }}</td>
        <td>{{ realProperty.purpose }}</td>
        <td>
          {% for image in realProperty.images %}
            <img class=\"user-avatar-mobile mobile-content\"
                 src=\"{{ asset('images/images/' ~ image.imageName) }}\">
          {% endfor %}
        </td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            {#<a href=\"{{ path('real_property_show', {id: realProperty.id}) }}\" class=\"btn btn-dark\">#}
              {#<i class=\"fas fa-search fa-lg\"></i>#}
            {#</a>#}
            <a href=\"{{ path('real_property_edit', {id: realProperty.id}) }}\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      {% endfor %}
      </tbody>
    </table>
    <a href=\"{{ path('real_property_new') }}\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить объявление
    </a>
  </div>
{% endblock body %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}
", "RealProperty/RealProperty/index.html.twig", "/var/www/rielt/templates/RealProperty/RealProperty/index.html.twig");
    }
}
