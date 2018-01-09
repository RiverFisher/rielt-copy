<?php

/* RealProperty/RealProperty/new.html.twig */
class __TwigTemplate_7b58224491101f8e22546c39535a0d28f98384e82637ada1dc6fcee047021365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RealProperty/RealProperty/new.html.twig", 1);
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
        $__internal_2b4cd60012aee0791e174490b9c1f723d4509e6372625589d8ee566c11ec00a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4cd60012aee0791e174490b9c1f723d4509e6372625589d8ee566c11ec00a6->enter($__internal_2b4cd60012aee0791e174490b9c1f723d4509e6372625589d8ee566c11ec00a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealProperty/new.html.twig"));

        $__internal_5dc5a8f302d1da0e16e66134fe29d181f5da532588038f9ee48d792780ac225f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc5a8f302d1da0e16e66134fe29d181f5da532588038f9ee48d792780ac225f->enter($__internal_5dc5a8f302d1da0e16e66134fe29d181f5da532588038f9ee48d792780ac225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RealProperty/RealProperty/new.html.twig"));

        // line 3
        $context["widget_prototype_macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4cd60012aee0791e174490b9c1f723d4509e6372625589d8ee566c11ec00a6->leave($__internal_2b4cd60012aee0791e174490b9c1f723d4509e6372625589d8ee566c11ec00a6_prof);

        
        $__internal_5dc5a8f302d1da0e16e66134fe29d181f5da532588038f9ee48d792780ac225f->leave($__internal_5dc5a8f302d1da0e16e66134fe29d181f5da532588038f9ee48d792780ac225f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_203a99c84e3ec89598e79b23d66caedc7781b063b85d3f838bc78cc5d1deb11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203a99c84e3ec89598e79b23d66caedc7781b063b85d3f838bc78cc5d1deb11b->enter($__internal_203a99c84e3ec89598e79b23d66caedc7781b063b85d3f838bc78cc5d1deb11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dac8a2ab50041d73abcf09f19fcaea500384edd89118d58e160cc6e531985dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac8a2ab50041d73abcf09f19fcaea500384edd89118d58e160cc6e531985dd2->enter($__internal_dac8a2ab50041d73abcf09f19fcaea500384edd89118d58e160cc6e531985dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
    <h1 class=\"mx-auto\"
        style=\"margin: 5px 0 20px 0; text-align: center;
        color: #ffffff; font-weight: 100;\">
      Добавление объявления
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "address", array()), 'row');
        echo "
          ";
        // line 27
        echo "                 ";
        // line 28
        echo "          ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "
            ";
        // line 33
        echo "            ";
        // line 34
        echo "
            ";
        // line 36
        echo "            ";
        // line 37
        echo "
            ";
        // line 39
        echo "            ";
        // line 40
        echo "          ";
        // line 41
        echo "          <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "originalAdText", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "area", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "cost", array()), 'row');
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "purpose", array()), 'row');
        echo "
        </div>

        <h4>Добавьте изображения</h4>

        <div class=\"card-columns gallery\"
             data-prototype=\"";
        // line 59
        echo twig_escape_filter($this->env, $context["widget_prototype_macro"]->macro_widget_prototype(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 60
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "images", array()), "vars", array()), "prototype", array())));
        // line 61
        echo "\">
          ";
        // line 63
        echo "            ";
        // line 64
        echo "          ";
        // line 65
        echo "        </div>

        <br>
        <div class=\"form-group\">
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), "submit", array()), 'row');
        echo "
        </div>
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), 'form_end');
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
        
        $__internal_dac8a2ab50041d73abcf09f19fcaea500384edd89118d58e160cc6e531985dd2->leave($__internal_dac8a2ab50041d73abcf09f19fcaea500384edd89118d58e160cc6e531985dd2_prof);

        
        $__internal_203a99c84e3ec89598e79b23d66caedc7781b063b85d3f838bc78cc5d1deb11b->leave($__internal_203a99c84e3ec89598e79b23d66caedc7781b063b85d3f838bc78cc5d1deb11b_prof);

    }

    // line 112
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_330b4ebaca215f69f8a2b15bcfc72ee7c1de1280b835a6ae2c7e747f65fc70bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330b4ebaca215f69f8a2b15bcfc72ee7c1de1280b835a6ae2c7e747f65fc70bd->enter($__internal_330b4ebaca215f69f8a2b15bcfc72ee7c1de1280b835a6ae2c7e747f65fc70bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2474177ed2c6173c25358e0a240018e3ecaee593a3b0bd108d372903470a00f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2474177ed2c6173c25358e0a240018e3ecaee593a3b0bd108d372903470a00f3->enter($__internal_2474177ed2c6173c25358e0a240018e3ecaee593a3b0bd108d372903470a00f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 113
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
        
        $__internal_2474177ed2c6173c25358e0a240018e3ecaee593a3b0bd108d372903470a00f3->leave($__internal_2474177ed2c6173c25358e0a240018e3ecaee593a3b0bd108d372903470a00f3_prof);

        
        $__internal_330b4ebaca215f69f8a2b15bcfc72ee7c1de1280b835a6ae2c7e747f65fc70bd->leave($__internal_330b4ebaca215f69f8a2b15bcfc72ee7c1de1280b835a6ae2c7e747f65fc70bd_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f0ddac9cf4839ce3a3bb851dedb6f13744c2267182b9024ddc378dae48be48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0ddac9cf4839ce3a3bb851dedb6f13744c2267182b9024ddc378dae48be48c->enter($__internal_5f0ddac9cf4839ce3a3bb851dedb6f13744c2267182b9024ddc378dae48be48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a27fa6229337a9bdf2f1e5d15b0d9c0a6485aed9c5da9f7c9cf08feb0b8ede8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27fa6229337a9bdf2f1e5d15b0d9c0a6485aed9c5da9f7c9cf08feb0b8ede8c->enter($__internal_a27fa6229337a9bdf2f1e5d15b0d9c0a6485aed9c5da9f7c9cf08feb0b8ede8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js\"></script>
  <script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.8688, lng: 151.2195},
        zoom: 13
      });
      var input = /** @type {!HTMLInputElement} */(
        document.getElementById('real_property_real_property_address'));

      var types = document.getElementById('type-selector');
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo('bounds', map);

      var infowindow = new google.maps.InfoWindow();
      var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
      });

      autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          // User entered the name of a Place that was not suggested and
          // pressed the Enter key, or the Place Details request failed.
          window.alert(\"No details available for input: '\" + place.name + \"'\");
          return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setIcon(/** @type {google.maps.Icon} */({
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }

        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
      });

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
//      function setupClickListener(id, types) {
//        var radioButton = document.getElementById(id);
//        radioButton.addEventListener('click', function() {
//          autocomplete.setTypes(types);
//        });
//      }

//      setupClickListener('changetype-all', []);
//      setupClickListener('changetype-address', ['address']);
//      setupClickListener('changetype-establishment', ['establishment']);
//      setupClickListener('changetype-geocode', ['geocode']);
    }
  </script>
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
        
        $__internal_a27fa6229337a9bdf2f1e5d15b0d9c0a6485aed9c5da9f7c9cf08feb0b8ede8c->leave($__internal_a27fa6229337a9bdf2f1e5d15b0d9c0a6485aed9c5da9f7c9cf08feb0b8ede8c_prof);

        
        $__internal_5f0ddac9cf4839ce3a3bb851dedb6f13744c2267182b9024ddc378dae48be48c->leave($__internal_5f0ddac9cf4839ce3a3bb851dedb6f13744c2267182b9024ddc378dae48be48c_prof);

    }

    // line 98
    public function macro_widget_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8b64ee4017bc2ee70a47832c0605675dce58180fd6e37a24d20c01a30c2c3d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8b64ee4017bc2ee70a47832c0605675dce58180fd6e37a24d20c01a30c2c3d94->enter($__internal_8b64ee4017bc2ee70a47832c0605675dce58180fd6e37a24d20c01a30c2c3d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            $__internal_da6cf7e43785311e354cff49e2b3845c6d6bf178b249301e77a4a70ed7983edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_da6cf7e43785311e354cff49e2b3845c6d6bf178b249301e77a4a70ed7983edc->enter($__internal_da6cf7e43785311e354cff49e2b3845c6d6bf178b249301e77a4a70ed7983edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widget_prototype"));

            // line 99
            echo "  <div class=\"card text-white bg-dark text-right\">
    <img class=\"card-img-top\"
         src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cloud.png"), "html", null, true);
            echo "\" alt=\"\" data-was-changed=\"false\">
    <div class=\"card-body\">
      ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 103, $this->getSourceContext()); })()), "imageFile", array()), 'widget');
            echo "
      ";
            // line 105
            echo "      ";
            // line 106
            echo "      ";
            // line 107
            echo "      ";
            // line 108
            echo "    </div>
  </div>
";
            
            $__internal_da6cf7e43785311e354cff49e2b3845c6d6bf178b249301e77a4a70ed7983edc->leave($__internal_da6cf7e43785311e354cff49e2b3845c6d6bf178b249301e77a4a70ed7983edc_prof);

            
            $__internal_8b64ee4017bc2ee70a47832c0605675dce58180fd6e37a24d20c01a30c2c3d94->leave($__internal_8b64ee4017bc2ee70a47832c0605675dce58180fd6e37a24d20c01a30c2c3d94_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "RealProperty/RealProperty/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 108,  619 => 107,  617 => 106,  615 => 105,  611 => 103,  606 => 101,  602 => 99,  584 => 98,  350 => 236,  341 => 235,  209 => 113,  200 => 112,  164 => 71,  159 => 69,  153 => 65,  151 => 64,  149 => 63,  146 => 61,  144 => 60,  143 => 59,  134 => 53,  128 => 50,  122 => 47,  116 => 44,  111 => 41,  109 => 40,  107 => 39,  104 => 37,  102 => 36,  99 => 34,  97 => 33,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  82 => 25,  76 => 22,  71 => 20,  68 => 19,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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
      Добавление объявления
    </h1>

    <p id=\"description\" class=\"mx-auto;\" style=\"text-align: center; color: #ffffff;\">
      Разместите ваше объявление, и оно станет доступно всем пользователям SweetHome
    </p>

    <div class=\"card col-8 text-white bg-q mx-auto\" style=\"margin-bottom: 20px;\">
      {#<div class=\"card-header\"></div>#}
      <div class=\"card-body\">
        {{ form_start(form) }}
        <div class=\"form-group\">
          {{ form_row(form.type) }}
        </div>
        <div class=\"form-group\">
          {{ form_row(form.address) }}
          {#<input id=\"pac-input\" class=\"controls\" type=\"text\"#}
                 {#placeholder=\"Enter a location\">#}
          {#<div id=\"type-selector\" class=\"controls\">#}
            {#<input type=\"radio\" name=\"type\" id=\"changetype-all\" checked=\"checked\">#}
            {#<label for=\"changetype-all\">All</label>#}

            {#<input type=\"radio\" name=\"type\" id=\"changetype-establishment\">#}
            {#<label for=\"changetype-establishment\">Establishments</label>#}

            {#<input type=\"radio\" name=\"type\" id=\"changetype-address\">#}
            {#<label for=\"changetype-address\">Addresses</label>#}

            {#<input type=\"radio\" name=\"type\" id=\"changetype-geocode\">#}
            {#<label for=\"changetype-geocode\">Geocodes</label>#}
          {#</div>#}
          <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
          {{ form_row(form.originalAdText) }}
        </div>
        <div class=\"form-group\">
          {{ form_row(form.area) }}
        </div>
        <div class=\"form-group\">
          {{ form_row(form.cost) }}
        </div>
        <div class=\"form-group\">
          {{ form_row(form.purpose) }}
        </div>

        <h4>Добавьте изображения</h4>

        <div class=\"card-columns gallery\"
             data-prototype=\"{{ widget_prototype_macro.widget_prototype(
             form.images.vars.prototype
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
  <script>
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.8688, lng: 151.2195},
        zoom: 13
      });
      var input = /** @type {!HTMLInputElement} */(
        document.getElementById('real_property_real_property_address'));

      var types = document.getElementById('type-selector');
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo('bounds', map);

      var infowindow = new google.maps.InfoWindow();
      var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
      });

      autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          // User entered the name of a Place that was not suggested and
          // pressed the Enter key, or the Place Details request failed.
          window.alert(\"No details available for input: '\" + place.name + \"'\");
          return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setIcon(/** @type {google.maps.Icon} */({
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }

        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
      });

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
//      function setupClickListener(id, types) {
//        var radioButton = document.getElementById(id);
//        radioButton.addEventListener('click', function() {
//          autocomplete.setTypes(types);
//        });
//      }

//      setupClickListener('changetype-all', []);
//      setupClickListener('changetype-address', ['address']);
//      setupClickListener('changetype-establishment', ['establishment']);
//      setupClickListener('changetype-geocode', ['geocode']);
    }
  </script>
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
", "RealProperty/RealProperty/new.html.twig", "/var/www/rielt/templates/RealProperty/RealProperty/new.html.twig");
    }
}
