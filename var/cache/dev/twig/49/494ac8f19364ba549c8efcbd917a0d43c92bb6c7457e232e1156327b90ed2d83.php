<?php

/* Platform/Container/new.html.twig */
class __TwigTemplate_a2d5a26141373bd83b86943511ec29fb58afd6f6d06e7acf79701452c4132727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/Container/new.html.twig", 1);
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
        $__internal_d6295f3b1dd985fa2aafdbe00725a9845a3fc7c71e60dc792f52239f78d7b52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6295f3b1dd985fa2aafdbe00725a9845a3fc7c71e60dc792f52239f78d7b52f->enter($__internal_d6295f3b1dd985fa2aafdbe00725a9845a3fc7c71e60dc792f52239f78d7b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Container/new.html.twig"));

        $__internal_9b04ccffa9e2c987dec0672a329f0b3879a585de1b068d5053a19cfe061e8dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b04ccffa9e2c987dec0672a329f0b3879a585de1b068d5053a19cfe061e8dee->enter($__internal_9b04ccffa9e2c987dec0672a329f0b3879a585de1b068d5053a19cfe061e8dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/Container/new.html.twig"));

        // line 3
        $context["widget_prototype_macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6295f3b1dd985fa2aafdbe00725a9845a3fc7c71e60dc792f52239f78d7b52f->leave($__internal_d6295f3b1dd985fa2aafdbe00725a9845a3fc7c71e60dc792f52239f78d7b52f_prof);

        
        $__internal_9b04ccffa9e2c987dec0672a329f0b3879a585de1b068d5053a19cfe061e8dee->leave($__internal_9b04ccffa9e2c987dec0672a329f0b3879a585de1b068d5053a19cfe061e8dee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37ca990776c61a914c416be676636395c0e86f051af88ad63054e69ba604ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37ca990776c61a914c416be676636395c0e86f051af88ad63054e69ba604ec9->enter($__internal_f37ca990776c61a914c416be676636395c0e86f051af88ad63054e69ba604ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3349c361bb563fdd0eefcaba05359c02b167e82c62683ad7b33aaf43e983f00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3349c361bb563fdd0eefcaba05359c02b167e82c62683ad7b33aaf43e983f00d->enter($__internal_3349c361bb563fdd0eefcaba05359c02b167e82c62683ad7b33aaf43e983f00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление контейнер
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Разместите ваше объявление, и оно станет доступно всем пользователям SweetHome
    </p>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      ";
        // line 19
        echo "      <div class=\"card-body\">
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
          ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "text", array()), 'row');
        echo "
        </div>

        <h4>Добавьте изображения</h4>

        <div class=\"card-columns gallery\"
             data-prototype=\"";
        // line 28
        echo twig_escape_filter($this->env, $context["widget_prototype_macro"]->macro_widget_prototype(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "containerImages", array()), "vars", array()), "prototype", array())));
        // line 30
        echo "\">
          ";
        // line 32
        echo "            ";
        // line 33
        echo "          ";
        // line 34
        echo "        </div>

        <br>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "submit", array()), 'row');
        echo "
        </div>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"uploadingDisabledModal\" tabindex=\"-1\" role=\"dialog\"
       aria-labelledby=\"uploadingDisabledModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"uploadingDisabledModalLongTitle\">Действие невозможно</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>Некоторые из изображений не были добавлены. Попробуйте добавить их заново.</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_3349c361bb563fdd0eefcaba05359c02b167e82c62683ad7b33aaf43e983f00d->leave($__internal_3349c361bb563fdd0eefcaba05359c02b167e82c62683ad7b33aaf43e983f00d_prof);

        
        $__internal_f37ca990776c61a914c416be676636395c0e86f051af88ad63054e69ba604ec9->leave($__internal_f37ca990776c61a914c416be676636395c0e86f051af88ad63054e69ba604ec9_prof);

    }

    // line 81
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09985579e3d9ad730eba21adb9e7ad475eacaae1a116a26b6e388ef1ab1a4772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09985579e3d9ad730eba21adb9e7ad475eacaae1a116a26b6e388ef1ab1a4772->enter($__internal_09985579e3d9ad730eba21adb9e7ad475eacaae1a116a26b6e388ef1ab1a4772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_189597cc802522d3b2691590157239553795b81488b5d2a5a1524b87cece15da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189597cc802522d3b2691590157239553795b81488b5d2a5a1524b87cece15da->enter($__internal_189597cc802522d3b2691590157239553795b81488b5d2a5a1524b87cece15da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 82
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

    .for-adding {
      cursor: pointer;
    }
    .vich-image {
      /*display: none;*/
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
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 400px;
      border-radius: .25rem;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .controls {
      margin-top: 10px;
      border: 1px solid transparent;
      border-radius: 2px 0 0 2px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      height: 32px;
      outline: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #real_property_real_property_address {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      border-radius: .25rem !important;
      width: 70%;
    }

    #pac-input {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 300px;
    }

    #pac-input:focus {
      border-color: #4d90fe;
    }

    .pac-container {
      font-family: Roboto;
    }

    #type-selector {
      color: #fff;
      background-color: #4d90fe;
      padding: 5px 11px 0px 11px;
    }

    #type-selector label {
      font-family: Roboto;
      font-size: 13px;
      font-weight: 300;
    }
  </style>
";
        
        $__internal_189597cc802522d3b2691590157239553795b81488b5d2a5a1524b87cece15da->leave($__internal_189597cc802522d3b2691590157239553795b81488b5d2a5a1524b87cece15da_prof);

        
        $__internal_09985579e3d9ad730eba21adb9e7ad475eacaae1a116a26b6e388ef1ab1a4772->leave($__internal_09985579e3d9ad730eba21adb9e7ad475eacaae1a116a26b6e388ef1ab1a4772_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3444db5946b4afc20b16966571308a39b52a893756bdc7884af2c6ab6da656cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3444db5946b4afc20b16966571308a39b52a893756bdc7884af2c6ab6da656cc->enter($__internal_3444db5946b4afc20b16966571308a39b52a893756bdc7884af2c6ab6da656cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e313634767d741070b935888ee9309d6c0b269bd311a7ec07973e49ac8f7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e313634767d741070b935888ee9309d6c0b269bd311a7ec07973e49ac8f7b28->enter($__internal_1e313634767d741070b935888ee9309d6c0b269bd311a7ec07973e49ac8f7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyArObW_yEBXQ_KB5EVd5k00rXdfjNcP-EI&libraries=places&callback=initMap\"
          async defer></script>
  <script>
    \$(\"input[type='file']\").each(function() {
      \$(this).on('click', function() {
        console.log(\"clicked!\");
        var reader = new FileReader();

        reader.onload = function(e) {
            console.log(e.target.result);
          input.parent().parent().parent().children('img').attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
      });
    });
  </script>

  <script>
    var collectionHolder;

    var addImageButton = \$('<p class=\"card-text\">Добавить фото</p>');
    var addImageCardBody = \$('<div class=\"card-body\"></div>').append(addImageButton);
    var addImageCardImgTop = \$('<img class=\"card-img-top\" src=\"https://png.icons8.com/windows/540//add-camera.png\" alt=\"\">');
    var addImageCard = \$('<div class=\"card text-white bg-dark text-right for-adding\"></div>')
      .append(addImageCardImgTop)
      .append(addImageCardBody);

    jQuery(document).ready(function() {
      // Get the .card-columns container that holds the collection of cards
      collectionHolder = \$('.gallery');

      // Add the \"add a tag\" anchor and li to the tags ul
      collectionHolder.append(addImageCard);

      // count the current form inputs we have (e.g. 2), use that as the new
      // index when inserting a new item (e.g. 2)
      collectionHolder.data('index', collectionHolder.find(':input').length);

      addImageCard.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        var allowedToAdd = true;
        \$('.gallery > .card:not(.for-adding) > img').each(function () {
          console.log('data-was-changed = ' + \$(this).data('was-changed'));
          if (\$(this).data('was-changed') != 'true') {
            allowedToAdd = false;
          }
        });

        if (allowedToAdd) {
          // add a new tag form (see next code block)
          addCardToCollection(collectionHolder, addImageCard);
        }
        else {
          \$('#uploadingDisabledModal').modal();
        }
      });

      // add a delete link to all of the existing tag form li elements
      collectionHolder.find('tr').each(function() {
        if (!\$(this).hasClass('for-adding')) {
          addDeleteButtonToCard(\$(this));
        }
      });
    });

    function addCardToCollection(collectionHolder, addImageCard) {
      var deleteAfterPerforming = false;

      // Get the data-prototype explained earlier
      var prototype = collectionHolder.data('prototype');

      // get the new index
      var index = collectionHolder.data('index');

      // Replace 'name' in the prototype's HTML to
      // instead be a number based on how many items we have
      var newCard = \$(prototype.replace(/name/g, index));

      // increase the index with one for the next item
      collectionHolder.data('index', index + 1);

      // Display the form in the page in an li, before the \"Add a tag\" link li
      addImageCard.before(newCard);

      newCard.find('input').change(function () {
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            newCard.find('img').attr('src', e.target.result);
            newCard.find('img').data('was-changed', 'true');
          };
          reader.readAsDataURL(this.files[0]);
        }
      });

      addUploadButtonToCard(newCard);

      // add a delete link to the new form
      addDeleteButtonToCard(newCard);

      newCard.find('input').click();
    }

    function addDeleteButtonToCard(card) {
      var deleteButton = \$('<a href=\"\" class=\"btn btn-secondary\"><i class=\"fas fa-trash-alt fa-lg\"></i></a>');
      var cardBody = \$(card).find('div.card-body');

      cardBody.append(deleteButton);

      deleteButton.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        card.remove();
      });
    }

    function addUploadButtonToCard(card) {
        var uploadButton = \$('<a href=\"\" class=\"btn btn-secondary\"><i class=\"fas fa-search fa-lg\"></i></a>');
        var cardBody = \$(card).find('div.card-body');

        cardBody.append(uploadButton);

        uploadButton.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // remove the li for the tag form
            \$(card).find('input').click();
        });
    }
  </script>
";
        
        $__internal_1e313634767d741070b935888ee9309d6c0b269bd311a7ec07973e49ac8f7b28->leave($__internal_1e313634767d741070b935888ee9309d6c0b269bd311a7ec07973e49ac8f7b28_prof);

        
        $__internal_3444db5946b4afc20b16966571308a39b52a893756bdc7884af2c6ab6da656cc->leave($__internal_3444db5946b4afc20b16966571308a39b52a893756bdc7884af2c6ab6da656cc_prof);

    }

    // line 67
    public function macro_widget_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_daee69f713f71d4f405fbcb1f8bedeb26edf6d3cf1f412b13c345321edd2c97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_daee69f713f71d4f405fbcb1f8bedeb26edf6d3cf1f412b13c345321edd2c97a->enter($__internal_daee69f713f71d4f405fbcb1f8bedeb26edf6d3cf1f412b13c345321edd2c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            $__internal_daa640db5fddecc30a87233d2bf57bd4390aede99eb2710d24f8017e0353f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_daa640db5fddecc30a87233d2bf57bd4390aede99eb2710d24f8017e0353f892->enter($__internal_daa640db5fddecc30a87233d2bf57bd4390aede99eb2710d24f8017e0353f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            // line 68
            echo "  <div class=\"card text-white bg-dark text-right\">
    <img class=\"card-img-top\"
         src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cloud.png"), "html", null, true);
            echo "\" alt=\"\" data-was-changed=\"false\">
    <div class=\"card-body\">
      ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 72, $this->getSourceContext()); })()), "imageFile", array()), 'widget');
            echo "
      ";
            // line 74
            echo "      ";
            // line 75
            echo "      ";
            // line 76
            echo "      ";
            // line 77
            echo "    </div>
  </div>
";
            
            $__internal_daa640db5fddecc30a87233d2bf57bd4390aede99eb2710d24f8017e0353f892->leave($__internal_daa640db5fddecc30a87233d2bf57bd4390aede99eb2710d24f8017e0353f892_prof);

            
            $__internal_daee69f713f71d4f405fbcb1f8bedeb26edf6d3cf1f412b13c345321edd2c97a->leave($__internal_daee69f713f71d4f405fbcb1f8bedeb26edf6d3cf1f412b13c345321edd2c97a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Platform/Container/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 77,  478 => 76,  476 => 75,  474 => 74,  470 => 72,  465 => 70,  461 => 68,  443 => 67,  292 => 205,  283 => 204,  151 => 82,  142 => 81,  106 => 40,  101 => 38,  95 => 34,  93 => 33,  91 => 32,  88 => 30,  86 => 29,  85 => 28,  76 => 22,  71 => 20,  68 => 19,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% import _self as widget_prototype_macro %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление контейнер
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Разместите ваше объявление, и оно станет доступно всем пользователям SweetHome
    </p>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      {#<div class=\"card-header\"></div>#}
      <div class=\"card-body\">
        {{ form_start(form) }}
        <div class=\"form-group\">
          {{ form_row(form.text) }}
        </div>

        <h4>Добавьте изображения</h4>

        <div class=\"card-columns gallery\"
             data-prototype=\"{{ widget_prototype_macro.widget_prototype(
             form.containerImages.vars.prototype
             )|e }}\">
          {#{% for image in form.images %}#}
            {#<td style=\"width: 30% !important;\">{{ form_row(image.imageFile) }}</td>#}
          {#{% endfor %}#}
        </div>

        <br>
        <div class=\"form-group\">
          {{ form_row(form.submit) }}
        </div>
        {{ form_end(form) }}
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"uploadingDisabledModal\" tabindex=\"-1\" role=\"dialog\"
       aria-labelledby=\"uploadingDisabledModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"uploadingDisabledModalLongTitle\">Действие невозможно</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <p>Некоторые из изображений не были добавлены. Попробуйте добавить их заново.</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
{% endblock body %}

{% macro widget_prototype(widget) %}
  <div class=\"card text-white bg-dark text-right\">
    <img class=\"card-img-top\"
         src=\"{{ asset('images/cloud.png') }}\" alt=\"\" data-was-changed=\"false\">
    <div class=\"card-body\">
      {{ form_widget(widget.imageFile) }}
      {#<h5 class=\"card-title\">Card title</h5>#}
      {#<p class=\"card-text\">Hello!</p>#}
      {#<p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>#}
      {#<a href=\"#\" class=\"btn btn-secondary\"><i class=\"fas fa-trash-alt fa-lg\"></i></a>#}
    </div>
  </div>
{% endmacro %}

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

    .for-adding {
      cursor: pointer;
    }
    .vich-image {
      /*display: none;*/
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
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 400px;
      border-radius: .25rem;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .controls {
      margin-top: 10px;
      border: 1px solid transparent;
      border-radius: 2px 0 0 2px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      height: 32px;
      outline: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #real_property_real_property_address {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      border-radius: .25rem !important;
      width: 70%;
    }

    #pac-input {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 300px;
    }

    #pac-input:focus {
      border-color: #4d90fe;
    }

    .pac-container {
      font-family: Roboto;
    }

    #type-selector {
      color: #fff;
      background-color: #4d90fe;
      padding: 5px 11px 0px 11px;
    }

    #type-selector label {
      font-family: Roboto;
      font-size: 13px;
      font-weight: 300;
    }
  </style>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyArObW_yEBXQ_KB5EVd5k00rXdfjNcP-EI&libraries=places&callback=initMap\"
          async defer></script>
  <script>
    \$(\"input[type='file']\").each(function() {
      \$(this).on('click', function() {
        console.log(\"clicked!\");
        var reader = new FileReader();

        reader.onload = function(e) {
            console.log(e.target.result);
          input.parent().parent().parent().children('img').attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
      });
    });
  </script>

  <script>
    var collectionHolder;

    var addImageButton = \$('<p class=\"card-text\">Добавить фото</p>');
    var addImageCardBody = \$('<div class=\"card-body\"></div>').append(addImageButton);
    var addImageCardImgTop = \$('<img class=\"card-img-top\" src=\"https://png.icons8.com/windows/540//add-camera.png\" alt=\"\">');
    var addImageCard = \$('<div class=\"card text-white bg-dark text-right for-adding\"></div>')
      .append(addImageCardImgTop)
      .append(addImageCardBody);

    jQuery(document).ready(function() {
      // Get the .card-columns container that holds the collection of cards
      collectionHolder = \$('.gallery');

      // Add the \"add a tag\" anchor and li to the tags ul
      collectionHolder.append(addImageCard);

      // count the current form inputs we have (e.g. 2), use that as the new
      // index when inserting a new item (e.g. 2)
      collectionHolder.data('index', collectionHolder.find(':input').length);

      addImageCard.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        var allowedToAdd = true;
        \$('.gallery > .card:not(.for-adding) > img').each(function () {
          console.log('data-was-changed = ' + \$(this).data('was-changed'));
          if (\$(this).data('was-changed') != 'true') {
            allowedToAdd = false;
          }
        });

        if (allowedToAdd) {
          // add a new tag form (see next code block)
          addCardToCollection(collectionHolder, addImageCard);
        }
        else {
          \$('#uploadingDisabledModal').modal();
        }
      });

      // add a delete link to all of the existing tag form li elements
      collectionHolder.find('tr').each(function() {
        if (!\$(this).hasClass('for-adding')) {
          addDeleteButtonToCard(\$(this));
        }
      });
    });

    function addCardToCollection(collectionHolder, addImageCard) {
      var deleteAfterPerforming = false;

      // Get the data-prototype explained earlier
      var prototype = collectionHolder.data('prototype');

      // get the new index
      var index = collectionHolder.data('index');

      // Replace 'name' in the prototype's HTML to
      // instead be a number based on how many items we have
      var newCard = \$(prototype.replace(/name/g, index));

      // increase the index with one for the next item
      collectionHolder.data('index', index + 1);

      // Display the form in the page in an li, before the \"Add a tag\" link li
      addImageCard.before(newCard);

      newCard.find('input').change(function () {
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            newCard.find('img').attr('src', e.target.result);
            newCard.find('img').data('was-changed', 'true');
          };
          reader.readAsDataURL(this.files[0]);
        }
      });

      addUploadButtonToCard(newCard);

      // add a delete link to the new form
      addDeleteButtonToCard(newCard);

      newCard.find('input').click();
    }

    function addDeleteButtonToCard(card) {
      var deleteButton = \$('<a href=\"\" class=\"btn btn-secondary\"><i class=\"fas fa-trash-alt fa-lg\"></i></a>');
      var cardBody = \$(card).find('div.card-body');

      cardBody.append(deleteButton);

      deleteButton.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        card.remove();
      });
    }

    function addUploadButtonToCard(card) {
        var uploadButton = \$('<a href=\"\" class=\"btn btn-secondary\"><i class=\"fas fa-search fa-lg\"></i></a>');
        var cardBody = \$(card).find('div.card-body');

        cardBody.append(uploadButton);

        uploadButton.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // remove the li for the tag form
            \$(card).find('input').click();
        });
    }
  </script>
{% endblock %}
", "Platform/Container/new.html.twig", "/var/www/rielt/templates/Platform/Container/new.html.twig");
    }
}
