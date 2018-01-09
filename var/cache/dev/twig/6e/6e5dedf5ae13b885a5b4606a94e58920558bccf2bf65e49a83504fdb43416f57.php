<?php

/* Platform/Container/index.html.twig */
class __TwigTemplate_ad594dd73dd38bc3ef054847e770cc9b74049be7a421e66d8e5049cab0da20a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/Container/index.html.twig", 1);
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
        $__internal_64ae50d47258eff56810d8dbe908a0c17acaa1f52d030c0a80f6ddd3ccff1c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ae50d47258eff56810d8dbe908a0c17acaa1f52d030c0a80f6ddd3ccff1c43->enter($__internal_64ae50d47258eff56810d8dbe908a0c17acaa1f52d030c0a80f6ddd3ccff1c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Container/index.html.twig"));

        $__internal_3d8c7836706a8ae9160ac18626307ca7dacf78a817094a1b050e6988d99bf1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8c7836706a8ae9160ac18626307ca7dacf78a817094a1b050e6988d99bf1af->enter($__internal_3d8c7836706a8ae9160ac18626307ca7dacf78a817094a1b050e6988d99bf1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Container/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ae50d47258eff56810d8dbe908a0c17acaa1f52d030c0a80f6ddd3ccff1c43->leave($__internal_64ae50d47258eff56810d8dbe908a0c17acaa1f52d030c0a80f6ddd3ccff1c43_prof);

        
        $__internal_3d8c7836706a8ae9160ac18626307ca7dacf78a817094a1b050e6988d99bf1af->leave($__internal_3d8c7836706a8ae9160ac18626307ca7dacf78a817094a1b050e6988d99bf1af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9de295b3966bf79f8afbf34e455110a64b0cb68cce7cd50cc807b45ee5f592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9de295b3966bf79f8afbf34e455110a64b0cb68cce7cd50cc807b45ee5f592c->enter($__internal_d9de295b3966bf79f8afbf34e455110a64b0cb68cce7cd50cc807b45ee5f592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_135bef84f7ebfd076e0642d4f4f9fce326e94a541cd3e46ff32d630351bd3b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135bef84f7ebfd076e0642d4f4f9fce326e94a541cd3e46ff32d630351bd3b93->enter($__internal_135bef84f7ebfd076e0642d4f4f9fce326e94a541cd3e46ff32d630351bd3b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Containers
    </h1>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Текст</th>
        <th scope=\"col\">Изображения</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) || array_key_exists("containers", $context) ? $context["containers"] : (function () { throw new Twig_Error_Runtime('Variable "containers" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 22
            echo "      <tr>
        <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["container"], "id", array()), "html", null, true);
            echo "</th>
        <td></td>
        <td><img src=\"\"></td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            ";
            // line 29
            echo "              ";
            // line 30
            echo "            ";
            // line 31
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["container"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
    </table>
    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("container_new");
        echo "\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить контейнер
    </a>
  </div>
";
        
        $__internal_135bef84f7ebfd076e0642d4f4f9fce326e94a541cd3e46ff32d630351bd3b93->leave($__internal_135bef84f7ebfd076e0642d4f4f9fce326e94a541cd3e46ff32d630351bd3b93_prof);

        
        $__internal_d9de295b3966bf79f8afbf34e455110a64b0cb68cce7cd50cc807b45ee5f592c->leave($__internal_d9de295b3966bf79f8afbf34e455110a64b0cb68cce7cd50cc807b45ee5f592c_prof);

    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a19ba2826f8772c1f9fba5998956c1dfbfbabeaac8789b7fa738d8067f2cea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a19ba2826f8772c1f9fba5998956c1dfbfbabeaac8789b7fa738d8067f2cea4->enter($__internal_9a19ba2826f8772c1f9fba5998956c1dfbfbabeaac8789b7fa738d8067f2cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2becbc681a8fb86e105be1f203062c21dfe61e2b218c7ba7002c0ad7a6b0a90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2becbc681a8fb86e105be1f203062c21dfe61e2b218c7ba7002c0ad7a6b0a90b->enter($__internal_2becbc681a8fb86e105be1f203062c21dfe61e2b218c7ba7002c0ad7a6b0a90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 47
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2becbc681a8fb86e105be1f203062c21dfe61e2b218c7ba7002c0ad7a6b0a90b->leave($__internal_2becbc681a8fb86e105be1f203062c21dfe61e2b218c7ba7002c0ad7a6b0a90b_prof);

        
        $__internal_9a19ba2826f8772c1f9fba5998956c1dfbfbabeaac8789b7fa738d8067f2cea4->leave($__internal_9a19ba2826f8772c1f9fba5998956c1dfbfbabeaac8789b7fa738d8067f2cea4_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f9fdf93b535920cc1b44c6ee87687f9c83ac939e250befcc3b7874c643758ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9fdf93b535920cc1b44c6ee87687f9c83ac939e250befcc3b7874c643758ce->enter($__internal_1f9fdf93b535920cc1b44c6ee87687f9c83ac939e250befcc3b7874c643758ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_22bd872e944d41fcaf581e8d1edb5dafa08b1a823034ced7a9392e154f03f761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bd872e944d41fcaf581e8d1edb5dafa08b1a823034ced7a9392e154f03f761->enter($__internal_22bd872e944d41fcaf581e8d1edb5dafa08b1a823034ced7a9392e154f03f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_22bd872e944d41fcaf581e8d1edb5dafa08b1a823034ced7a9392e154f03f761->leave($__internal_22bd872e944d41fcaf581e8d1edb5dafa08b1a823034ced7a9392e154f03f761_prof);

        
        $__internal_1f9fdf93b535920cc1b44c6ee87687f9c83ac939e250befcc3b7874c643758ce->leave($__internal_1f9fdf93b535920cc1b44c6ee87687f9c83ac939e250befcc3b7874c643758ce_prof);

    }

    public function getTemplateName()
    {
        return "Platform/Container/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  144 => 50,  131 => 47,  122 => 46,  107 => 40,  103 => 38,  89 => 31,  87 => 30,  85 => 29,  77 => 23,  74 => 22,  70 => 21,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Containers
    </h1>

    <table class=\"table table-bordered table-dark\">
      <thead>
      <tr>
        <th scope=\"col\">ID</th>
        <th scope=\"col\">Текст</th>
        <th scope=\"col\">Изображения</th>
        <th scope=\"col\">Действия</th>
      </tr>
      </thead>
      <tbody>
      {% for container in containers %}
      <tr>
        <th scope=\"row\">{{ container.id }}</th>
        <td></td>
        <td><img src=\"\"></td>
        <td>
          <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
            {#<a href=\"{{ path('real_property_type_show', {id: type.id}) }}\" class=\"btn btn-dark\">#}
              {#<i class=\"fas fa-search fa-lg\"></i>#}
            {#</a>#}
            <a href=\"{{ path('image_edit', {id: container.id}) }}\" class=\"btn btn-dark\">
              <i class=\"fas fa-pen-square fa-lg\"></i>
            </a>
          </div>
        </td>
      </tr>
      {% endfor %}
      </tbody>
    </table>
    <a href=\"{{ path('container_new') }}\" class=\"btn btn-dark\">
      <i class=\"fas fa-plus-circle fa-lg\"></i>&nbsp; Добавить контейнер
    </a>
  </div>
{% endblock body %}

{% block stylesheets %}
  {{ parent() }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}
", "Platform/Container/index.html.twig", "/var/www/rielt/templates/Platform/Container/index.html.twig");
    }
}
