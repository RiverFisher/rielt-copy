<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_77bfaa458558d8b61ab06e1077e59104c6b3b21d5a31db744a3d41b4ad564b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13639ce9a4eb7b1f8153bdf46137cffd988239e17e1488f8e373b7ba9567721d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13639ce9a4eb7b1f8153bdf46137cffd988239e17e1488f8e373b7ba9567721d->enter($__internal_13639ce9a4eb7b1f8153bdf46137cffd988239e17e1488f8e373b7ba9567721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_13639ce9a4eb7b1f8153bdf46137cffd988239e17e1488f8e373b7ba9567721d->leave($__internal_13639ce9a4eb7b1f8153bdf46137cffd988239e17e1488f8e373b7ba9567721d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19f077a9c10bc08065c9fb31e51c74dc74d41b77b15d05e9ba56f590a9fd928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f077a9c10bc08065c9fb31e51c74dc74d41b77b15d05e9ba56f590a9fd928f->enter($__internal_19f077a9c10bc08065c9fb31e51c74dc74d41b77b15d05e9ba56f590a9fd928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19f077a9c10bc08065c9fb31e51c74dc74d41b77b15d05e9ba56f590a9fd928f->leave($__internal_19f077a9c10bc08065c9fb31e51c74dc74d41b77b15d05e9ba56f590a9fd928f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_337cbc81ca07aa72a6748bb0c34f241d31d973a7bc1afdf5b44f3ea757dceca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337cbc81ca07aa72a6748bb0c34f241d31d973a7bc1afdf5b44f3ea757dceca3->enter($__internal_337cbc81ca07aa72a6748bb0c34f241d31d973a7bc1afdf5b44f3ea757dceca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_337cbc81ca07aa72a6748bb0c34f241d31d973a7bc1afdf5b44f3ea757dceca3->leave($__internal_337cbc81ca07aa72a6748bb0c34f241d31d973a7bc1afdf5b44f3ea757dceca3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1fc2042be810a14504cb005660889f7ca16b93cee62f1d5e6334f03e80edd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fc2042be810a14504cb005660889f7ca16b93cee62f1d5e6334f03e80edd2d->enter($__internal_a1fc2042be810a14504cb005660889f7ca16b93cee62f1d5e6334f03e80edd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1fc2042be810a14504cb005660889f7ca16b93cee62f1d5e6334f03e80edd2d->leave($__internal_a1fc2042be810a14504cb005660889f7ca16b93cee62f1d5e6334f03e80edd2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/rielt/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
