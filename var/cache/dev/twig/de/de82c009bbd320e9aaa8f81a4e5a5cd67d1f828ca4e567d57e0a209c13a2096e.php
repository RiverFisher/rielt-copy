<?php

/* base.html.twig */
class __TwigTemplate_22d30cbb940db7afa9de75485f651ecb435d0df64ed617b43d35a448e33bc85f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acf3808a69ac4e5ecbad9fabf3cf07f59b08f222b49688c9526945d36d0af040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf3808a69ac4e5ecbad9fabf3cf07f59b08f222b49688c9526945d36d0af040->enter($__internal_acf3808a69ac4e5ecbad9fabf3cf07f59b08f222b49688c9526945d36d0af040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7038befa5229b79ff7f6faa3b1de4c6d589ad9495914b813fda620c2ac0fb195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7038befa5229b79ff7f6faa3b1de4c6d589ad9495914b813fda620c2ac0fb195->enter($__internal_7038befa5229b79ff7f6faa3b1de4c6d589ad9495914b813fda620c2ac0fb195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <nav class=\"navbar sticky-top navbar-expand-lg navbar-dark navbar-grape hidden\">
      <a class=\"navbar-brand\" href=\"#\">
        <img src=\"http://stores.clothes2order.com/images/uploads/store_layout/store-logo-6102.png\"
             width=\"30\" height=\"30\" alt=\"\">
        <span style=\"font-weight: 900;\">SweetHome</span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li>
        </ul>
      </div>

      <ul class=\"navbar-nav mr-auto list-inline\">
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-instagram fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-twitter fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-facebook fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-google fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-slack fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/guest_64.png"), "html", null, true);
        echo "\"
                 height=\"30\" width=\"30\" alt=\"\">
          </a>
          <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-grape\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">Register</a>
            ";
        // line 88
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "user", array())) {
            // line 89
            echo "              <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"fab fa-instagram fa-lg\"></i>Выйти</a>
            ";
        } else {
            // line 91
            echo "              <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Log In</a>
            ";
        }
        // line 93
        echo "          </div>
        </li>
      </ul>
    </nav>
    ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "  </body>
</html>
";
        
        $__internal_acf3808a69ac4e5ecbad9fabf3cf07f59b08f222b49688c9526945d36d0af040->leave($__internal_acf3808a69ac4e5ecbad9fabf3cf07f59b08f222b49688c9526945d36d0af040_prof);

        
        $__internal_7038befa5229b79ff7f6faa3b1de4c6d589ad9495914b813fda620c2ac0fb195->leave($__internal_7038befa5229b79ff7f6faa3b1de4c6d589ad9495914b813fda620c2ac0fb195_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_320c05e4772227e84e907558615557ab21da5e078aaccff0b936372b3f79c2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320c05e4772227e84e907558615557ab21da5e078aaccff0b936372b3f79c2ee->enter($__internal_320c05e4772227e84e907558615557ab21da5e078aaccff0b936372b3f79c2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40c088537a7284b49e8f6284f75f19840b9892427066153feedf995e23b9fb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c088537a7284b49e8f6284f75f19840b9892427066153feedf995e23b9fb20->enter($__internal_40c088537a7284b49e8f6284f75f19840b9892427066153feedf995e23b9fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_40c088537a7284b49e8f6284f75f19840b9892427066153feedf995e23b9fb20->leave($__internal_40c088537a7284b49e8f6284f75f19840b9892427066153feedf995e23b9fb20_prof);

        
        $__internal_320c05e4772227e84e907558615557ab21da5e078aaccff0b936372b3f79c2ee->leave($__internal_320c05e4772227e84e907558615557ab21da5e078aaccff0b936372b3f79c2ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4998665077f56d218c426923832e865eceb2bca4840947924e5e773e22e25df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4998665077f56d218c426923832e865eceb2bca4840947924e5e773e22e25df5->enter($__internal_4998665077f56d218c426923832e865eceb2bca4840947924e5e773e22e25df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecf45eb70d7d92f34aa2154f73adf039938183bbce7957054dbb05292a5d7e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf45eb70d7d92f34aa2154f73adf039938183bbce7957054dbb05292a5d7e79->enter($__internal_ecf45eb70d7d92f34aa2154f73adf039938183bbce7957054dbb05292a5d7e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <!-- Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
          integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\"
          crossorigin=\"anonymous\">
    <!-- Animate -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" />
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\" />
    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.min.css"), "html", null, true);
        echo "\">
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
        
        $__internal_ecf45eb70d7d92f34aa2154f73adf039938183bbce7957054dbb05292a5d7e79->leave($__internal_ecf45eb70d7d92f34aa2154f73adf039938183bbce7957054dbb05292a5d7e79_prof);

        
        $__internal_4998665077f56d218c426923832e865eceb2bca4840947924e5e773e22e25df5->leave($__internal_4998665077f56d218c426923832e865eceb2bca4840947924e5e773e22e25df5_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eb7deae9bd0dd2322eb63df8aaece7cea47222c3c57e6636eb35903d830e1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb7deae9bd0dd2322eb63df8aaece7cea47222c3c57e6636eb35903d830e1d7->enter($__internal_4eb7deae9bd0dd2322eb63df8aaece7cea47222c3c57e6636eb35903d830e1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_329a9817e3ea0eb46439700f3fdcbbcb49fe05d42e7561cb3d4528e1f85e49c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329a9817e3ea0eb46439700f3fdcbbcb49fe05d42e7561cb3d4528e1f85e49c4->enter($__internal_329a9817e3ea0eb46439700f3fdcbbcb49fe05d42e7561cb3d4528e1f85e49c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_329a9817e3ea0eb46439700f3fdcbbcb49fe05d42e7561cb3d4528e1f85e49c4->leave($__internal_329a9817e3ea0eb46439700f3fdcbbcb49fe05d42e7561cb3d4528e1f85e49c4_prof);

        
        $__internal_4eb7deae9bd0dd2322eb63df8aaece7cea47222c3c57e6636eb35903d830e1d7->leave($__internal_4eb7deae9bd0dd2322eb63df8aaece7cea47222c3c57e6636eb35903d830e1d7_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1560459699455ec2fd5c84383e60c156fcf8d300cc21305b89588efcdd7bba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1560459699455ec2fd5c84383e60c156fcf8d300cc21305b89588efcdd7bba1->enter($__internal_c1560459699455ec2fd5c84383e60c156fcf8d300cc21305b89588efcdd7bba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44bd1b661013e0dca8b1f487fa04ac33b135ec19c538123568aa648b07371333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bd1b661013e0dca8b1f487fa04ac33b135ec19c538123568aa648b07371333->enter($__internal_44bd1b661013e0dca8b1f487fa04ac33b135ec19c538123568aa648b07371333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>
    ";
        // line 104
        echo "            ";
        // line 105
        echo "            ";
        // line 106
        echo "    <!-- Popper -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
            integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
            crossorigin=\"anonymous\"></script>
    <!-- Bootstrap 4 -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
            integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
            crossorigin=\"anonymous\"></script>
    <!-- Font Awesome 4 -->
    ";
        // line 116
        echo "    <!-- Font Awesome 5 -->
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.1/js/all.js\"></script>
    <!-- Bootstrap Datepicker -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/i18n/datepicker.ru-RU.js"), "html", null, true);
        echo "\"></script>
      <script>
        \$(document).ready(function() {
          \$('[data-toggle=\"datepicker\"]').each(function () {
            \$(this).datepicker({
              language: 'ru-RU',
              format: 'yyyy-mm-dd',
              autoHide: true
            });
          });
        });
      </script>
    ";
        
        $__internal_44bd1b661013e0dca8b1f487fa04ac33b135ec19c538123568aa648b07371333->leave($__internal_44bd1b661013e0dca8b1f487fa04ac33b135ec19c538123568aa648b07371333_prof);

        
        $__internal_c1560459699455ec2fd5c84383e60c156fcf8d300cc21305b89588efcdd7bba1->leave($__internal_c1560459699455ec2fd5c84383e60c156fcf8d300cc21305b89588efcdd7bba1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 120,  260 => 119,  255 => 116,  244 => 106,  242 => 105,  240 => 104,  234 => 99,  225 => 98,  208 => 97,  179 => 16,  168 => 7,  159 => 6,  141 => 5,  129 => 133,  126 => 98,  124 => 97,  118 => 93,  112 => 91,  106 => 89,  104 => 88,  100 => 87,  90 => 80,  41 => 35,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
          integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\"
          crossorigin=\"anonymous\">
    <!-- Animate -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" />
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\" />
    <!-- Bootstrap Datepicker -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/datepicker.min.css') }}\">
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>
  <body>
    <nav class=\"navbar sticky-top navbar-expand-lg navbar-dark navbar-grape hidden\">
      <a class=\"navbar-brand\" href=\"#\">
        <img src=\"http://stores.clothes2order.com/images/uploads/store_layout/store-logo-6102.png\"
             width=\"30\" height=\"30\" alt=\"\">
        <span style=\"font-weight: 900;\">SweetHome</span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li>
        </ul>
      </div>

      <ul class=\"navbar-nav mr-auto list-inline\">
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-instagram fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-twitter fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-facebook fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-google fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item\">
          <a class=\"nav-link\" href=\"\"><i class=\"fab fa-slack fa-lg\"></i></a>
        </li>
        <li class=\"nav-item list-inline-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <img src=\"{{ asset('images/guest_64.png') }}\"
                 height=\"30\" width=\"30\" alt=\"\">
          </a>
          <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-grape\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"{{ path('registration') }}\">Register</a>
            {% if app.user %}
              <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fab fa-instagram fa-lg\"></i>Выйти</a>
            {% else %}
              <a class=\"dropdown-item\" href=\"{{ path('login') }}\">Log In</a>
            {% endif %}
          </div>
        </li>
      </ul>
    </nav>
    {% block body %}{% endblock %}
    {% block javascripts %}
    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>
    {#<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"#}
            {#integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"#}
            {#crossorigin=\"anonymous\"></script>#}
    <!-- Popper -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
            integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
            crossorigin=\"anonymous\"></script>
    <!-- Bootstrap 4 -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
            integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
            crossorigin=\"anonymous\"></script>
    <!-- Font Awesome 4 -->
    {#<script src=\"https://use.fontawesome.com/d268fea347.js\"></script>#}
    <!-- Font Awesome 5 -->
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.1/js/all.js\"></script>
    <!-- Bootstrap Datepicker -->
    <script src=\"{{ asset('js/datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/i18n/datepicker.ru-RU.js') }}\"></script>
      <script>
        \$(document).ready(function() {
          \$('[data-toggle=\"datepicker\"]').each(function () {
            \$(this).datepicker({
              language: 'ru-RU',
              format: 'yyyy-mm-dd',
              autoHide: true
            });
          });
        });
      </script>
    {% endblock %}
  </body>
</html>
", "base.html.twig", "/var/www/rielt/templates/base.html.twig");
    }
}
