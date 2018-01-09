<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4a39d79e03f1d043dcf3fc29dd87c11c59dcf5130138879dc641201f49bf98b0 extends Twig_Template
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
        $__internal_d77faa1490af6f799db628b3e78e76eb06f860760f660ed17b7f5cd90f455ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77faa1490af6f799db628b3e78e76eb06f860760f660ed17b7f5cd90f455ddc->enter($__internal_d77faa1490af6f799db628b3e78e76eb06f860760f660ed17b7f5cd90f455ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1e2f3df7b180cad23233424efd966aaf30bc1a79f6bf2db12ac6ddbb524f80d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2f3df7b180cad23233424efd966aaf30bc1a79f6bf2db12ac6ddbb524f80d3->enter($__internal_1e2f3df7b180cad23233424efd966aaf30bc1a79f6bf2db12ac6ddbb524f80d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d77faa1490af6f799db628b3e78e76eb06f860760f660ed17b7f5cd90f455ddc->leave($__internal_d77faa1490af6f799db628b3e78e76eb06f860760f660ed17b7f5cd90f455ddc_prof);

        
        $__internal_1e2f3df7b180cad23233424efd966aaf30bc1a79f6bf2db12ac6ddbb524f80d3->leave($__internal_1e2f3df7b180cad23233424efd966aaf30bc1a79f6bf2db12ac6ddbb524f80d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_276a94d845ed32cea5442b2a0054fd6510d815d748003193d025af588deec849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276a94d845ed32cea5442b2a0054fd6510d815d748003193d025af588deec849->enter($__internal_276a94d845ed32cea5442b2a0054fd6510d815d748003193d025af588deec849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a923316e877d3a6235a1a58c7e2b2edd6f07f70212d3ea588142245f6ec7202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a923316e877d3a6235a1a58c7e2b2edd6f07f70212d3ea588142245f6ec7202->enter($__internal_1a923316e877d3a6235a1a58c7e2b2edd6f07f70212d3ea588142245f6ec7202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1a923316e877d3a6235a1a58c7e2b2edd6f07f70212d3ea588142245f6ec7202->leave($__internal_1a923316e877d3a6235a1a58c7e2b2edd6f07f70212d3ea588142245f6ec7202_prof);

        
        $__internal_276a94d845ed32cea5442b2a0054fd6510d815d748003193d025af588deec849->leave($__internal_276a94d845ed32cea5442b2a0054fd6510d815d748003193d025af588deec849_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7d0aa70bafc1134423e945ef4743ff17a14b66d5a0d3cf5a54831d95157a136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d0aa70bafc1134423e945ef4743ff17a14b66d5a0d3cf5a54831d95157a136->enter($__internal_d7d0aa70bafc1134423e945ef4743ff17a14b66d5a0d3cf5a54831d95157a136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87508855c6964d830ee2cb612ba7a656f27efbdf81efc91aa72c6e12a2d192de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87508855c6964d830ee2cb612ba7a656f27efbdf81efc91aa72c6e12a2d192de->enter($__internal_87508855c6964d830ee2cb612ba7a656f27efbdf81efc91aa72c6e12a2d192de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_87508855c6964d830ee2cb612ba7a656f27efbdf81efc91aa72c6e12a2d192de->leave($__internal_87508855c6964d830ee2cb612ba7a656f27efbdf81efc91aa72c6e12a2d192de_prof);

        
        $__internal_d7d0aa70bafc1134423e945ef4743ff17a14b66d5a0d3cf5a54831d95157a136->leave($__internal_d7d0aa70bafc1134423e945ef4743ff17a14b66d5a0d3cf5a54831d95157a136_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_80e531ef74af4665ace624641ae586bd01297701beb10d7d87d30a3ea749e611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e531ef74af4665ace624641ae586bd01297701beb10d7d87d30a3ea749e611->enter($__internal_80e531ef74af4665ace624641ae586bd01297701beb10d7d87d30a3ea749e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1083e9be3983c3f3d290bd846f5fe88bb88ed54ddf79c97fa9a118ee92386205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1083e9be3983c3f3d290bd846f5fe88bb88ed54ddf79c97fa9a118ee92386205->enter($__internal_1083e9be3983c3f3d290bd846f5fe88bb88ed54ddf79c97fa9a118ee92386205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1083e9be3983c3f3d290bd846f5fe88bb88ed54ddf79c97fa9a118ee92386205->leave($__internal_1083e9be3983c3f3d290bd846f5fe88bb88ed54ddf79c97fa9a118ee92386205_prof);

        
        $__internal_80e531ef74af4665ace624641ae586bd01297701beb10d7d87d30a3ea749e611->leave($__internal_80e531ef74af4665ace624641ae586bd01297701beb10d7d87d30a3ea749e611_prof);

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
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
