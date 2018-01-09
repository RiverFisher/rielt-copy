<?php

/* Platform/main.html.twig */
class __TwigTemplate_8e10d7865e6d8fdc6f093d2c612893b25ecbb158d292b9d5ad2fe27821c9198a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Platform/main.html.twig", 1);
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
        $__internal_f8c535fbc78701ddc829a639333ceb56640215cc9bfd58b02ee78c43afdbbd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c535fbc78701ddc829a639333ceb56640215cc9bfd58b02ee78c43afdbbd30->enter($__internal_f8c535fbc78701ddc829a639333ceb56640215cc9bfd58b02ee78c43afdbbd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/main.html.twig"));

        $__internal_cf08d2f7cf04a38367f4969a474366edacd0a4b6f74d8c27c430cee8bcf40a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf08d2f7cf04a38367f4969a474366edacd0a4b6f74d8c27c430cee8bcf40a5a->enter($__internal_cf08d2f7cf04a38367f4969a474366edacd0a4b6f74d8c27c430cee8bcf40a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Platform/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c535fbc78701ddc829a639333ceb56640215cc9bfd58b02ee78c43afdbbd30->leave($__internal_f8c535fbc78701ddc829a639333ceb56640215cc9bfd58b02ee78c43afdbbd30_prof);

        
        $__internal_cf08d2f7cf04a38367f4969a474366edacd0a4b6f74d8c27c430cee8bcf40a5a->leave($__internal_cf08d2f7cf04a38367f4969a474366edacd0a4b6f74d8c27c430cee8bcf40a5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11ed206f553ce8dd6ac9c3da13c64a916567253fa0e9e707a3a79638750097b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ed206f553ce8dd6ac9c3da13c64a916567253fa0e9e707a3a79638750097b2->enter($__internal_11ed206f553ce8dd6ac9c3da13c64a916567253fa0e9e707a3a79638750097b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b5043ce5477c13b0051b65b83a7bd11b3b7a992d3b1017a2ed187df8417a282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5043ce5477c13b0051b65b83a7bd11b3b7a992d3b1017a2ed187df8417a282->enter($__internal_4b5043ce5477c13b0051b65b83a7bd11b3b7a992d3b1017a2ed187df8417a282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery_1st.jpg"), "html", null, true);
        echo "\"
             alt=\"First slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <a href=\"\" data-content=\"Rielt ING\">
              Rielt
              <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home_logo.png"), "html", null, true);
        echo "\"
              width=\"200px\">
              ING&nbsp;&nbsp;
            </a>
            <div class=\"main-section-text\">
              Недвижимость Северного Кавказа
              <br>
              Найди то, о чём мечтаешь!
            </div>
          </section>
        </div>
      </div>
      <div class=\"carousel-item\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/grozny.jpg"), "html", null, true);
        echo "\"
             alt=\"Second slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <div class=\"auxiliary-section-text\">
              Здесь Вы можете самостоятельно выбрать застройщика, площадь,
              планировку и другие параметры желаемого жилья!
            </div>
          </section>
        </div>
      </div>
      <div class=\"carousel-item\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/maxres.jpg"), "html", null, true);
        echo "\"
             alt=\"Third slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <div class=\"auxiliary-section-text\">
              А здесь просто текст. Дальше текст будет начинаться со следующей строки.
              <br>
              Я же говорил! Выбирай и приобретай!
            </div>
          </section>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>

  <div class=\"container\">
    ";
        // line 74
        echo "    ";
        // line 75
        echo "
    ";
        // line 77
        echo "    <h1 class=\"deepshadow\">Недвижимость от разных застройщиков</h1>

    <div class=\"card-deck\">
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_1.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_2.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_3.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div><br>

    <div class=\"card-deck\">
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_4.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class=\"card-footer\">
          <small class=\"text-muted\">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_5.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
          <div class=\"card-body\">
            <h4 class=\"card-title\">Card title</h4>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/buildings/house_6.jpg"), "html", null, true);
        echo "\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class=\"card-footer\">
          <small class=\"text-muted\">Last updated 3 mins ago</small>
        </div>
      </div>
    </div><br>
  </div>

  <footer id=\"myFooter\">
    <div class=\"container\" style=\"max-width: 100% !important;\">
      <div class=\"row\">
        <div class=\"col-sm-3\">
          <h5>Get started</h5>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Sign up</a></li>
            <li><a href=\"#\">Downloads</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>About us</h5>
          <ul>
            <li><a href=\"#\">Company Information</a></li>
            <li><a href=\"#\">Contact us</a></li>
            <li><a href=\"#\">Reviews</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>Support</h5>
          <ul>
            <li><a href=\"#\">FAQ</a></li>
            <li><a href=\"#\">Help desk</a></li>
            <li><a href=\"#\">Forums</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>Legal</h5>
          <ul>
            <li><a href=\"#\">Terms of Service</a></li>
            <li><a href=\"#\">Terms of Use</a></li>
            <li><a href=\"#\">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <!-- Here we use the Google Embed API to show Google Maps. -->
      <!-- In order for this to work in your project you will need to generate a unique API key.  -->
      <iframe id=\"map-container\" frameborder=\"0\" style=\"border:0\"
              src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOwg_06VPwokRYv534QaPC8g&key=AIzaSyBdJm9Amm4KALkKlZObWn40dcpRyH119zg\" >
      </iframe>
    </div>
    <div class=\"social-networks\">
      <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook\"></i></a>
      <a href=\"#\" class=\"google\"><i class=\"fab fa-google-plus\"></i></a>
    </div>
    <div class=\"footer-copyright\">
      <p>© 2016 Copyright Text </p>
    </div>
  </footer>
";
        
        $__internal_4b5043ce5477c13b0051b65b83a7bd11b3b7a992d3b1017a2ed187df8417a282->leave($__internal_4b5043ce5477c13b0051b65b83a7bd11b3b7a992d3b1017a2ed187df8417a282_prof);

        
        $__internal_11ed206f553ce8dd6ac9c3da13c64a916567253fa0e9e707a3a79638750097b2->leave($__internal_11ed206f553ce8dd6ac9c3da13c64a916567253fa0e9e707a3a79638750097b2_prof);

    }

    // line 205
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4eed01b06ad281a1a7c04572d1417ebdecbb892398832968784a6651e9161e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eed01b06ad281a1a7c04572d1417ebdecbb892398832968784a6651e9161e9->enter($__internal_e4eed01b06ad281a1a7c04572d1417ebdecbb892398832968784a6651e9161e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a011730bb9c7e6e9a2b40e32f11d35ea4a2ab4fde962229adf3e3c97edfbf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a011730bb9c7e6e9a2b40e32f11d35ea4a2ab4fde962229adf3e3c97edfbf54->enter($__internal_3a011730bb9c7e6e9a2b40e32f11d35ea4a2ab4fde962229adf3e3c97edfbf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 206
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

    .elegantshadow {
      color: #131313;
      background-color: #e7e5e4;
      letter-spacing: .15em;
      text-shadow:
        1px -1px 0 #767676,
        -1px 2px 1px #737272,
        -2px 4px 1px #767474,
        -3px 6px 1px #787777,
        -4px 8px 1px #7b7a7a,
        -5px 10px 1px #7f7d7d,
        -6px 12px 1px #828181,
        -7px 14px 1px #868585,
        -8px 16px 1px #8b8a89,
        -9px 18px 1px #8f8e8d,
        -10px 20px 1px #949392,
        -11px 22px 1px #999897,
        -12px 24px 1px #9e9c9c,
        -13px 26px 1px #a3a1a1,
        -14px 28px 1px #a8a6a6,
        -15px 30px 1px #adabab,
        -16px 32px 1px #b2b1b0,
        -17px 34px 1px #b7b6b5,
        -18px 36px 1px #bcbbba,
        -19px 38px 1px #c1bfbf,
        -20px 40px 1px #c6c4c4,
        -21px 42px 1px #cbc9c8,
        -22px 44px 1px #cfcdcd,
        -23px 46px 1px #d4d2d1,
        -24px 48px 1px #d8d6d5,
        -25px 50px 1px #dbdad9,
        -26px 52px 1px #dfdddc,
        -27px 54px 1px #e2e0df,
        -28px 56px 1px #e4e3e2;
    }
    .deepshadow {
      color: #e0dfdc;
      /*background-color: #333;*/
      letter-spacing: .1em;
      text-shadow:
        0 -1px 0 #fff,
        0 1px 0 #2e2e2e,
        0 2px 0 #2c2c2c,
        0 3px 0 #2a2a2a,
        0 4px 0 #282828,
        0 5px 0 #262626,
        0 6px 0 #242424,
        0 7px 0 #222,
        0 8px 0 #202020,
        0 9px 0 #1e1e1e,
        0 10px 0 #1c1c1c,
        0 11px 0 #1a1a1a,
        0 12px 0 #181818,
        0 13px 0 #161616,
        0 14px 0 #141414,
        0 15px 0 #121212,
        0 22px 30px rgba(0, 0, 0, 0.9);
    }
    .elegantshadow, .deepshadow {
      /*font-family:*/
        /*\"Avant Garde\", Avantgarde,*/
        /*\"Century Gothic\", CenturyGothic,*/
        /*\"AppleGothic\", sans-serif;*/
      /*font-size: 92px;*/
      padding: 50px;
      text-align: center;
      text-transform: uppercase;
      text-rendering: optimizeLegibility;
    }

    /* Header styles */
    .cover {
      object-fit: cover;
      height: 100vh;
    }

    /*background: url(\"bundles/platformlanding/images/city_art.jpg\") no-repeat;*/
    .section {
      position: fixed;
      left: 0;
      top: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      text-align: center;
    }
    section.section a {
        margin: auto;
    }
    section a {
      /*text-transform: uppercase;*/
      text-align: center;
      text-decoration: none;
      font-size: 4.875em;
      font-weight: 900;
      color: #fff;
    }
    a:active, a:hover {
      outline-width: 0;
    }
    a {
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }
    section a:hover {
      color: #ffffff;
      text-decoration: none;
    }
    section.section a:hover::before {
      opacity: 1;
    }
    section.section a::before {
      content: '';
      position: absolute;
      width: 334px;
      height: 326px;
      top: 50%;
      left: 50%;
      margin-left: -167px;
      margin-top: -163px;
      background-size: contain;
      opacity: 0;
      -webkit-animation: rodarodajequiti 50s infinite linear;
      -moz-animation: rodarodajequiti 50s infinite linear;
      animation: rodarodajequiti 50s infinite linear;
      -webkit-transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      -moz-transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      background-image: url(../../public/images/index.png);
    }
    section a::after, section a::before {
      content: '';
    }
    *, *::before, *::after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    @-webkit-keyframes rodarodajequiti {
      from {
        -webkit-transform: rotate(0);
      }
      to {
        -webkit-transform: rotate(360deg);
      }
    }
    @-moz-keyframes rodarodajequiti {
      from {
        -moz-transform: rotate(0);
      }
      to {
        -moz-transform: rotate(360deg);
      }
    }
    @keyframes rodarodajequiti {
      from {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }
      to {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .main-section-text {
      position: fixed;
      bottom: 50px;

      text-decoration: none;
      font-size: 2em;
      font-weight: 700;
      color: #fff;

      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%)
    }
    .auxiliary-section-text {
      position: fixed;
      bottom: 50px;
      background-color: rgba(0,0,0,0.5);
      padding: 20px 30px;
      width: 100vw;

      text-decoration: none;
      font-size: 2em;
      font-weight: 700;
      color: #ffffff;

      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    /* Carousel styles */

    /* Content area styles */
    .bg-grape {
      background-color: var(--grape-color);
    }

    /* Navigation bar styles */
    .navbar-grape {
      background-color: var(--grape-color-transparent);
    }
    .navbar {
      padding: .7rem 1rem;
      position: fixed;
      left: 0;
      right: 0;
    }

    /* Dropdown menu styles */
    .dropdown-menu {
      top: 125%;
    }
    .dropdown-menu-grape {
      background-color: var(--grape-color);
    }
    .dropdown-menu-grape > .dropdown-item {
      color: #ffffff;
    }
    .dropdown-menu-grape > .dropdown-item:hover,
    .dropdown-menu-grape > .dropdown-item:focus {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .dropdown-menu-grape > .dropdown-divider {
      border-top-color: var(--main-bg-color);
    }

    /* Footer styles */

    #myFooter {
      background-color: #182c39;
      color: white;
      padding-top: 20px;
    }

    #map-container {
      height: 240px;
      width: 100%;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    #myFooter .row {
      margin: 0 85px;
    }

    #myFooter .footer-copyright {
      background-color: #10222e;
      padding-top: 3px;
      padding-bottom: 3px;
      text-align: center;
    }

    #myFooter .footer-copyright p {
      margin: 10px;
      color: #ccc;
    }

    #myFooter .container {
      width: auto;
    }

    #myFooter ul {
      list-style-type: none;
      padding-left: 0;
      line-height: 1.7;
    }

    #myFooter h5 {
      font-size: 18px;
      color: white;
      font-weight: bold;
      margin-top: 30px;
    }

    #myFooter a {
      color: #d2d1d1;
      text-decoration: none;
    }

    #myFooter a:hover,
    #myFooter a:focus {
      text-decoration: none;
      color: white;
    }

    #myFooter .social-networks {
      text-align: center;
      padding-top: 30px;
      padding-bottom: 38px;
    }

    #myFooter .fa {
      font-size: 30px;
      margin-right: 15px;
      margin-left: 20px;
      background-color: white;
      color: #182c39;
      border-radius: 51%;
      padding: 10px;
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 31px;
      text-decoration: none;
      transition: color 0.2s;
    }

    #myFooter .fa-facebook:hover {
      color: #2b55ff;
    }

    #myFooter .fa-facebook:focus {
      color: #2b55ff;
    }

    #myFooter .fa-google-plus:hover {
      color: red;
    }

    #myFooter .fa-google-plus:focus {
      color: red;
    }

    #myFooter .fa-twitter:hover {
      color: #00aced;
    }

    #myFooter .fa-twitter:focus {
      color: #00aced;
    }

    @media screen and (max-width: 767px) {
      #myFooter {
        text-align: center;
      }
      #myFooter .row {
        margin: 0;
      }
    }

    /* CSS used for positioning the footers at the bottom of the page. */
    /* You can remove this. */

    /*html{*/
      /*height: 100%;*/
    /*}*/

    body{
      display: flex;
      display: -webkit-flex;
      flex-direction: column;
      -webkit-flex-direction: column;
      height: 100%;
    }

    .content{
      flex: 1 0 auto;
      -webkit-flex: 1 0 auto;
      min-height: 200px;
    }

    #myFooter{
      flex: 0 0 auto;
      -webkit-flex: 0 0 auto;
    }
  </style>
";
        
        $__internal_3a011730bb9c7e6e9a2b40e32f11d35ea4a2ab4fde962229adf3e3c97edfbf54->leave($__internal_3a011730bb9c7e6e9a2b40e32f11d35ea4a2ab4fde962229adf3e3c97edfbf54_prof);

        
        $__internal_e4eed01b06ad281a1a7c04572d1417ebdecbb892398832968784a6651e9161e9->leave($__internal_e4eed01b06ad281a1a7c04572d1417ebdecbb892398832968784a6651e9161e9_prof);

    }

    // line 603
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2192095b2741bacace46c0102e6ee19e6855dcfc7452df5c2386335a1762737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2192095b2741bacace46c0102e6ee19e6855dcfc7452df5c2386335a1762737->enter($__internal_b2192095b2741bacace46c0102e6ee19e6855dcfc7452df5c2386335a1762737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3a0f2943910227035ea08f5ffe1ded7346d5629a24fba815ec4ec4b93992c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a0f2943910227035ea08f5ffe1ded7346d5629a24fba815ec4ec4b93992c30->enter($__internal_f3a0f2943910227035ea08f5ffe1ded7346d5629a24fba815ec4ec4b93992c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 604
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js\"></script>
  <script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ofi.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function() {
      objectFitImages();

      \$(function () {
        \$(window).scroll(function () {
          // set distance user needs to scroll before we fadeIn navbar
          if (\$(this).scrollTop() > 100) {
            \$('.navbar').removeClass('hidden');
          } else {
            \$('.navbar').addClass('hidden');
          }
        });
      });
    });
  </script>
";
        
        $__internal_f3a0f2943910227035ea08f5ffe1ded7346d5629a24fba815ec4ec4b93992c30->leave($__internal_f3a0f2943910227035ea08f5ffe1ded7346d5629a24fba815ec4ec4b93992c30_prof);

        
        $__internal_b2192095b2741bacace46c0102e6ee19e6855dcfc7452df5c2386335a1762737->leave($__internal_b2192095b2741bacace46c0102e6ee19e6855dcfc7452df5c2386335a1762737_prof);

    }

    public function getTemplateName()
    {
        return "Platform/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 606,  718 => 604,  709 => 603,  302 => 206,  293 => 205,  218 => 139,  203 => 127,  188 => 115,  172 => 102,  159 => 92,  146 => 82,  139 => 77,  136 => 75,  134 => 74,  107 => 49,  90 => 35,  72 => 20,  63 => 14,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"{{ asset('images/gallery_1st.jpg') }}\"
             alt=\"First slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <a href=\"\" data-content=\"Rielt ING\">
              Rielt
              <img src=\"{{ asset('images/home_logo.png') }}\"
              width=\"200px\">
              ING&nbsp;&nbsp;
            </a>
            <div class=\"main-section-text\">
              Недвижимость Северного Кавказа
              <br>
              Найди то, о чём мечтаешь!
            </div>
          </section>
        </div>
      </div>
      <div class=\"carousel-item\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"{{ asset('images/grozny.jpg') }}\"
             alt=\"Second slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <div class=\"auxiliary-section-text\">
              Здесь Вы можете самостоятельно выбрать застройщика, площадь,
              планировку и другие параметры желаемого жилья!
            </div>
          </section>
        </div>
      </div>
      <div class=\"carousel-item\"
           style=\"\">
        <img class=\"d-block w-100 cover\"
             src=\"{{ asset('images/maxres.jpg') }}\"
             alt=\"Third slide\">
        <div class=\"carousel-caption d-none d-md-block\">
          <section class=\"section\">
            <div class=\"auxiliary-section-text\">
              А здесь просто текст. Дальше текст будет начинаться со следующей строки.
              <br>
              Я же говорил! Выбирай и приобретай!
            </div>
          </section>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>

  <div class=\"container\">
    {#{{ dump(app.user) }}#}
    {#<p class=\"h1\" style=\"min-height: 300px;\">Недвижимость от разных застройщиков</p>#}

    {#<h1 class=\"elegantshadow\">Elegant Shadow</h1>#}
    <h1 class=\"deepshadow\">Недвижимость от разных застройщиков</h1>

    <div class=\"card-deck\">
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_1.jpg') }}\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_2.jpg') }}\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_3.jpg') }}\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div><br>

    <div class=\"card-deck\">
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_4.jpg') }}\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class=\"card-footer\">
          <small class=\"text-muted\">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_5.jpg') }}\"
             alt=\"Card image cap\">
          <div class=\"card-body\">
            <h4 class=\"card-title\">Card title</h4>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
      </div>
      <div class=\"card text-white bg-grape\">
        <img class=\"card-img-top\"
             src=\"{{ asset('images/buildings/house_6.jpg') }}\"
             alt=\"Card image cap\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Card title</h4>
          <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class=\"card-footer\">
          <small class=\"text-muted\">Last updated 3 mins ago</small>
        </div>
      </div>
    </div><br>
  </div>

  <footer id=\"myFooter\">
    <div class=\"container\" style=\"max-width: 100% !important;\">
      <div class=\"row\">
        <div class=\"col-sm-3\">
          <h5>Get started</h5>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Sign up</a></li>
            <li><a href=\"#\">Downloads</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>About us</h5>
          <ul>
            <li><a href=\"#\">Company Information</a></li>
            <li><a href=\"#\">Contact us</a></li>
            <li><a href=\"#\">Reviews</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>Support</h5>
          <ul>
            <li><a href=\"#\">FAQ</a></li>
            <li><a href=\"#\">Help desk</a></li>
            <li><a href=\"#\">Forums</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h5>Legal</h5>
          <ul>
            <li><a href=\"#\">Terms of Service</a></li>
            <li><a href=\"#\">Terms of Use</a></li>
            <li><a href=\"#\">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <!-- Here we use the Google Embed API to show Google Maps. -->
      <!-- In order for this to work in your project you will need to generate a unique API key.  -->
      <iframe id=\"map-container\" frameborder=\"0\" style=\"border:0\"
              src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOwg_06VPwokRYv534QaPC8g&key=AIzaSyBdJm9Amm4KALkKlZObWn40dcpRyH119zg\" >
      </iframe>
    </div>
    <div class=\"social-networks\">
      <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a>
      <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook\"></i></a>
      <a href=\"#\" class=\"google\"><i class=\"fab fa-google-plus\"></i></a>
    </div>
    <div class=\"footer-copyright\">
      <p>© 2016 Copyright Text </p>
    </div>
  </footer>
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

    .elegantshadow {
      color: #131313;
      background-color: #e7e5e4;
      letter-spacing: .15em;
      text-shadow:
        1px -1px 0 #767676,
        -1px 2px 1px #737272,
        -2px 4px 1px #767474,
        -3px 6px 1px #787777,
        -4px 8px 1px #7b7a7a,
        -5px 10px 1px #7f7d7d,
        -6px 12px 1px #828181,
        -7px 14px 1px #868585,
        -8px 16px 1px #8b8a89,
        -9px 18px 1px #8f8e8d,
        -10px 20px 1px #949392,
        -11px 22px 1px #999897,
        -12px 24px 1px #9e9c9c,
        -13px 26px 1px #a3a1a1,
        -14px 28px 1px #a8a6a6,
        -15px 30px 1px #adabab,
        -16px 32px 1px #b2b1b0,
        -17px 34px 1px #b7b6b5,
        -18px 36px 1px #bcbbba,
        -19px 38px 1px #c1bfbf,
        -20px 40px 1px #c6c4c4,
        -21px 42px 1px #cbc9c8,
        -22px 44px 1px #cfcdcd,
        -23px 46px 1px #d4d2d1,
        -24px 48px 1px #d8d6d5,
        -25px 50px 1px #dbdad9,
        -26px 52px 1px #dfdddc,
        -27px 54px 1px #e2e0df,
        -28px 56px 1px #e4e3e2;
    }
    .deepshadow {
      color: #e0dfdc;
      /*background-color: #333;*/
      letter-spacing: .1em;
      text-shadow:
        0 -1px 0 #fff,
        0 1px 0 #2e2e2e,
        0 2px 0 #2c2c2c,
        0 3px 0 #2a2a2a,
        0 4px 0 #282828,
        0 5px 0 #262626,
        0 6px 0 #242424,
        0 7px 0 #222,
        0 8px 0 #202020,
        0 9px 0 #1e1e1e,
        0 10px 0 #1c1c1c,
        0 11px 0 #1a1a1a,
        0 12px 0 #181818,
        0 13px 0 #161616,
        0 14px 0 #141414,
        0 15px 0 #121212,
        0 22px 30px rgba(0, 0, 0, 0.9);
    }
    .elegantshadow, .deepshadow {
      /*font-family:*/
        /*\"Avant Garde\", Avantgarde,*/
        /*\"Century Gothic\", CenturyGothic,*/
        /*\"AppleGothic\", sans-serif;*/
      /*font-size: 92px;*/
      padding: 50px;
      text-align: center;
      text-transform: uppercase;
      text-rendering: optimizeLegibility;
    }

    /* Header styles */
    .cover {
      object-fit: cover;
      height: 100vh;
    }

    /*background: url(\"bundles/platformlanding/images/city_art.jpg\") no-repeat;*/
    .section {
      position: fixed;
      left: 0;
      top: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      text-align: center;
    }
    section.section a {
        margin: auto;
    }
    section a {
      /*text-transform: uppercase;*/
      text-align: center;
      text-decoration: none;
      font-size: 4.875em;
      font-weight: 900;
      color: #fff;
    }
    a:active, a:hover {
      outline-width: 0;
    }
    a {
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }
    section a:hover {
      color: #ffffff;
      text-decoration: none;
    }
    section.section a:hover::before {
      opacity: 1;
    }
    section.section a::before {
      content: '';
      position: absolute;
      width: 334px;
      height: 326px;
      top: 50%;
      left: 50%;
      margin-left: -167px;
      margin-top: -163px;
      background-size: contain;
      opacity: 0;
      -webkit-animation: rodarodajequiti 50s infinite linear;
      -moz-animation: rodarodajequiti 50s infinite linear;
      animation: rodarodajequiti 50s infinite linear;
      -webkit-transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      -moz-transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      transition: all 1s cubic-bezier(0.17, 0.67, 0.48, 1.32);
      background-image: url(../../public/images/index.png);
    }
    section a::after, section a::before {
      content: '';
    }
    *, *::before, *::after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    @-webkit-keyframes rodarodajequiti {
      from {
        -webkit-transform: rotate(0);
      }
      to {
        -webkit-transform: rotate(360deg);
      }
    }
    @-moz-keyframes rodarodajequiti {
      from {
        -moz-transform: rotate(0);
      }
      to {
        -moz-transform: rotate(360deg);
      }
    }
    @keyframes rodarodajequiti {
      from {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
      }
      to {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .main-section-text {
      position: fixed;
      bottom: 50px;

      text-decoration: none;
      font-size: 2em;
      font-weight: 700;
      color: #fff;

      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%)
    }
    .auxiliary-section-text {
      position: fixed;
      bottom: 50px;
      background-color: rgba(0,0,0,0.5);
      padding: 20px 30px;
      width: 100vw;

      text-decoration: none;
      font-size: 2em;
      font-weight: 700;
      color: #ffffff;

      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    /* Carousel styles */

    /* Content area styles */
    .bg-grape {
      background-color: var(--grape-color);
    }

    /* Navigation bar styles */
    .navbar-grape {
      background-color: var(--grape-color-transparent);
    }
    .navbar {
      padding: .7rem 1rem;
      position: fixed;
      left: 0;
      right: 0;
    }

    /* Dropdown menu styles */
    .dropdown-menu {
      top: 125%;
    }
    .dropdown-menu-grape {
      background-color: var(--grape-color);
    }
    .dropdown-menu-grape > .dropdown-item {
      color: #ffffff;
    }
    .dropdown-menu-grape > .dropdown-item:hover,
    .dropdown-menu-grape > .dropdown-item:focus {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .dropdown-menu-grape > .dropdown-divider {
      border-top-color: var(--main-bg-color);
    }

    /* Footer styles */

    #myFooter {
      background-color: #182c39;
      color: white;
      padding-top: 20px;
    }

    #map-container {
      height: 240px;
      width: 100%;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    #myFooter .row {
      margin: 0 85px;
    }

    #myFooter .footer-copyright {
      background-color: #10222e;
      padding-top: 3px;
      padding-bottom: 3px;
      text-align: center;
    }

    #myFooter .footer-copyright p {
      margin: 10px;
      color: #ccc;
    }

    #myFooter .container {
      width: auto;
    }

    #myFooter ul {
      list-style-type: none;
      padding-left: 0;
      line-height: 1.7;
    }

    #myFooter h5 {
      font-size: 18px;
      color: white;
      font-weight: bold;
      margin-top: 30px;
    }

    #myFooter a {
      color: #d2d1d1;
      text-decoration: none;
    }

    #myFooter a:hover,
    #myFooter a:focus {
      text-decoration: none;
      color: white;
    }

    #myFooter .social-networks {
      text-align: center;
      padding-top: 30px;
      padding-bottom: 38px;
    }

    #myFooter .fa {
      font-size: 30px;
      margin-right: 15px;
      margin-left: 20px;
      background-color: white;
      color: #182c39;
      border-radius: 51%;
      padding: 10px;
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 31px;
      text-decoration: none;
      transition: color 0.2s;
    }

    #myFooter .fa-facebook:hover {
      color: #2b55ff;
    }

    #myFooter .fa-facebook:focus {
      color: #2b55ff;
    }

    #myFooter .fa-google-plus:hover {
      color: red;
    }

    #myFooter .fa-google-plus:focus {
      color: red;
    }

    #myFooter .fa-twitter:hover {
      color: #00aced;
    }

    #myFooter .fa-twitter:focus {
      color: #00aced;
    }

    @media screen and (max-width: 767px) {
      #myFooter {
        text-align: center;
      }
      #myFooter .row {
        margin: 0;
      }
    }

    /* CSS used for positioning the footers at the bottom of the page. */
    /* You can remove this. */

    /*html{*/
      /*height: 100%;*/
    /*}*/

    body{
      display: flex;
      display: -webkit-flex;
      flex-direction: column;
      -webkit-flex-direction: column;
      height: 100%;
    }

    .content{
      flex: 1 0 auto;
      -webkit-flex: 1 0 auto;
      min-height: 200px;
    }

    #myFooter{
      flex: 0 0 auto;
      -webkit-flex: 0 0 auto;
    }
  </style>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js\"></script>
  <script src=\"{{ asset('js/ofi.min.js') }}\"></script>
  <script>
    \$(document).ready(function() {
      objectFitImages();

      \$(function () {
        \$(window).scroll(function () {
          // set distance user needs to scroll before we fadeIn navbar
          if (\$(this).scrollTop() > 100) {
            \$('.navbar').removeClass('hidden');
          } else {
            \$('.navbar').addClass('hidden');
          }
        });
      });
    });
  </script>
{% endblock %}
", "Platform/main.html.twig", "/var/www/rielt/templates/Platform/main.html.twig");
    }
}
