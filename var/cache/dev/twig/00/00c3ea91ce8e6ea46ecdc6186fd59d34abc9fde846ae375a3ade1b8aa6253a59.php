<?php

/* @biblio/home.html.twig */
class __TwigTemplate_f20e16f163320bb62549f94ecd4a0d54839916823d80999fc1ab31b9f7eba827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'global' => array($this, 'block_global'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>ACCUEIL</title>

 <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">   
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"Your description\">
<meta name=\"keywords\" content=\"Your keywords\">
<meta name=\"author\" content=\"Your name\">
<meta name = \"format-detection\" content = \"telephone=no\" />
<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
<!--CSS-->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

 <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tm_docs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/touchTouch.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" >
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/camera.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\">

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'SN-776767949']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--[if lt IE 9]>
    <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>  
  <![endif]-->
  <!--[if lt IE 9]><script src=\"../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
  <![endif]-->

</head>
<body>
    <div id=\"panel\">
        <div class=\"navbar navbar-inverse navbar-fixed-top bs-docs-nav\" role=\"banner\" id=\"advanced\" style=\"margin-top: 0px; position: fixed;\"><span class=\"trigger\"><strong></strong><em></em></span>
            <div class=\"container\">
                <div class=\"navbar-header\"><button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button></div>
                <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"home\">
                            <a href=\"#\" class=\"glyphicon glyphicon-home\"></a>
                        </li>
                        <li class=\"divider-vertical\"></li>
                        <li><a href=\"#\">VENNER ME VOIR</a></li>
                        <li><a href=\"#\">DE BELLE</a></li>
                        <li><a href=\"#\">JE PEUX BIEN</a></li>
                        <li><a href=\"#\">Responsive</a></li>
                        <li class=\"divider-vertical\"></li>
                        <li class=\"dropdown -tm-dropdown\"><a data-toggle=\"dropdown\" href=\"#\">VOUS ALLER ETRE SATISFAIT<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">HEUREUX</a>
                                    <ul class=\"pages\">
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">POWER</a></li>
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">CONSTRUCTEUR</a></li>
                                    </ul>
                                </li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">PROFIL</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">BEAUTÉ</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Social and media</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!--header-->
";
        // line 83
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "    ";
        $this->displayBlock('slider', $context, $blocks);
        // line 133
        $this->displayBlock('global', $context, $blocks);
        // line 331
        echo "<!--footer-->
";
        // line 332
        $this->displayBlock('footer', $context, $blocks);
        // line 350
        echo "<!--JS-->
<script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/widgets.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/holder.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prettify.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/application.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "></script>
<script type=\"text/javascript\" async=\"\" src=";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ec.js"), "html", null, true);
        echo "></script>
<script type=\"text/javascript\" async=\"\" src=";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/analytics.js"), "html", null, true);
        echo "></script>
<script async=\"\" src=";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gtm.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/touchTouch.jquery.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/camera.js"), "html", null, true);
        echo "></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src=";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.carouFredSel-6.1.0-packed.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mousewheel.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "></script>
<script>
\$(window).load(function() {
    \$(function() {
            \$('#foo2').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev2',
                next: '#next2',
                scroll: 1,
                items: {
                    height: 'auto',
                    width:320,
                    visible: {
                        min: 1,
                        max: 1
                    }
                },
                mousewheel: true,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
        });                     
    });
</script> 
<script>
    \$(document).ready(function(){
    
        jQuery('.camera_wrap').camera();
    });
</script>

    <noscript>&lt;iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"&gt;&lt;/iframe&gt;</noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>


    <script>
        \$(window).load(function() {
            // Initialize the gallery
            \$('.thumb-pad4 figure a').touchTouch();
        });
    </script>

</body>
  <iframe name=\"oauth2relay342085569\" id=\"oauth2relay342085569\" src=\"\" tabindex=\"-1\" aria-hidden=\"true\" style=\"width: 1px; height: 1px; position: absolute; top: -100px;\">
    </iframe>  
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->




<!-- Google Tag Manager --><noscript>
<iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\">
</iframe></noscript>
<!-- End Google Tag Manager -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 84
        echo "<div class=\"main\">
   <header>
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-12 col-md-12 col-sm-12\">
                    <h1 class=\"navbar-brand navbar-brand_\"><a href=\"\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logoss.png"), "html", null, true);
        echo "\" style=\"width: 150px\" alt=\"\"></a></h1>
                    <div class=\"menuBox clearfix\">
                        <nav class=\"navbar navbar-default navbar-static-top tm_navbar clearfix\" role=\"navigation\">
                            <ul class=\"nav sf-menu clearfix\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li class=\"sub-menu\"><a href=\"#\">about us<span></span></a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">Dolore ipsu</a></li>
                                        <li><a href=\"#\">Consecte</a></li>
                                        <li><a href=\"#\">Elit Conseq</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"#\">Dolore ipsu</a></li>
                                                <li><a href=\"#\">Consecte</a></li>
                                                <li><a href=\"#\">Elit Conseq</a></li>
                                                <li class=\"tr\"></li>
                                            </ul>
                                        </li>
                                        <li class=\"tr1\"></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">programs</a></li>
                                <li><a href=\"#\">blog</a>
                                </li>
                                <li><a href=\"#\">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            </div>
        </div>
    </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 122
        echo "    <article class=\"slider\">
       <div class=\"camera_wrap\">
            <div data-src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture1.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture2.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture3.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
        </div>

    </article>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_global($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        // line 134
        echo "<div class=\"global\">
<section class=\"welcomeBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <h2>PLONGEZ DANS LE MERVEILLEUX 
<br>MONDE DE LA LECTURE</h2>
            </article>
        </div>
    </div>

</section>
<section class=\"popularBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 banner-box\">
                <h3>LES PLUS POPULAIRES</h3>
                <div class=\"row\">
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">LA ROUTE</a> 
                                    <p class=\"title\">PAR CORMAC MCCARTHY</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">INTERPRÈTE DE MALADIE</a> 
                                    <p class=\"title\">PAR JHUMPA LAHIRI</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">MIDDLESEX: UN ROMAN</a> 
                                    <p class=\"title\">par Jeffrey Eugenides</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">GILEAD: UN ROMAN</a> 
                                    <p class=\"title\">par Marilynne Robinson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">KAVALIER ET ARGILE</a> 
                                    <p class=\"title\">par michael chabon</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">UN CANTIQUE POUR LEIBOWITZ</a> 
                                    <p class=\"title\">par walter m. miller jr.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">les Corrections</a> 
                                    <p class=\"title\">par jonathan franzen</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic8.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">ARBRE DE FUMÉE: UN ROMAN</a> 
                                    <p class=\"title\">par denis johnson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </div>
</section>
   <section class=\"circleIconBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Demandez à un bibliothécaire</h2>
                            <div class=\"badge\"><span class=\"fa fa-comment\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Innovations</h2>
                            <div class=\"badge\"><span class=\"fa fa-lightbulb-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Join the Library</h2>
                            <div class=\"badge\"><span class=\"fa fa-pencil-square-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Help</h2>
                            <div class=\"badge\"><span class=\"fa fa-search\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class=\"carouselBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1\">
                    <div class=\"list_carousel2 responsive clearfix\">
                        <ul id=\"foo2\">
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"foo-btn clearfix\">
                        <a id=\"prev2\" class=\"prev\" href=\"#\"></a>
                        <a id=\"next2\" class=\"next\" href=\"#\"></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 332
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 333
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <p><span>Bibliocommune Commune</span> &copy; <em id=\"copyright-year\"></em> | <a href=\"index-5.html\">Privacy Policy</a></p>
                <ul>
                    <li><a href=\"#\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                </ul>
            </article>
        </div>
    </div>
  <!-- FOOTER_LINK -->
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@biblio/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 342,  696 => 341,  692 => 340,  688 => 339,  680 => 333,  671 => 332,  562 => 232,  548 => 221,  534 => 210,  520 => 199,  506 => 188,  492 => 177,  478 => 166,  464 => 155,  441 => 134,  432 => 133,  415 => 126,  411 => 125,  407 => 124,  403 => 122,  394 => 121,  352 => 89,  345 => 84,  336 => 83,  252 => 376,  248 => 375,  244 => 374,  240 => 373,  235 => 371,  231 => 370,  227 => 369,  223 => 368,  219 => 367,  215 => 366,  211 => 365,  207 => 364,  203 => 363,  199 => 362,  195 => 361,  191 => 360,  187 => 359,  183 => 358,  179 => 357,  175 => 356,  171 => 355,  167 => 354,  162 => 352,  158 => 351,  155 => 350,  153 => 332,  150 => 331,  148 => 133,  145 => 121,  143 => 83,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  55 => 16,  51 => 15,  46 => 13,  42 => 12,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>ACCUEIL</title>

 <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">   
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"Your description\">
<meta name=\"keywords\" content=\"Your keywords\">
<meta name=\"author\" content=\"Your name\">
<meta name = \"format-detection\" content = \"telephone=no\" />
<link rel=\"icon\" href=\"{{asset ('img/favicon.ico')}}\" type=\"image/x-icon\">
<link rel=\"shortcut icon\" href=\"{{ asset ('img/favicon.ico')}}\" type=\"image/x-icon\" />
<!--CSS-->
<link href=\"{{asset ('css/docs.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset ('css/prettify.css')}}\" rel=\"stylesheet\">

 <link rel=\"stylesheet\" href=\"{{ asset ('css/tm_docs.css')}}\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/touchTouch.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/bootstrap.css')}}\" >
<link rel=\"stylesheet\" href=\"{{ asset ('css/style.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('css/camera.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset ('fonts/font-awesome.css')}}\">
<script type=\"text/javascript\">

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'SN-776767949']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--[if lt IE 9]>
    <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>  
  <![endif]-->
  <!--[if lt IE 9]><script src=\"../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
  <![endif]-->

</head>
<body>
    <div id=\"panel\">
        <div class=\"navbar navbar-inverse navbar-fixed-top bs-docs-nav\" role=\"banner\" id=\"advanced\" style=\"margin-top: 0px; position: fixed;\"><span class=\"trigger\"><strong></strong><em></em></span>
            <div class=\"container\">
                <div class=\"navbar-header\"><button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button></div>
                <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"home\">
                            <a href=\"#\" class=\"glyphicon glyphicon-home\"></a>
                        </li>
                        <li class=\"divider-vertical\"></li>
                        <li><a href=\"#\">VENNER ME VOIR</a></li>
                        <li><a href=\"#\">DE BELLE</a></li>
                        <li><a href=\"#\">JE PEUX BIEN</a></li>
                        <li><a href=\"#\">Responsive</a></li>
                        <li class=\"divider-vertical\"></li>
                        <li class=\"dropdown -tm-dropdown\"><a data-toggle=\"dropdown\" href=\"#\">VOUS ALLER ETRE SATISFAIT<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">HEUREUX</a>
                                    <ul class=\"pages\">
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">POWER</a></li>
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">CONSTRUCTEUR</a></li>
                                    </ul>
                                </li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">PROFIL</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">BEAUTÉ</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Social and media</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!--header-->
{% block header %}
<div class=\"main\">
   <header>
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-12 col-md-12 col-sm-12\">
                    <h1 class=\"navbar-brand navbar-brand_\"><a href=\"\"><img src=\"{{asset ('img/logoss.png')}}\" style=\"width: 150px\" alt=\"\"></a></h1>
                    <div class=\"menuBox clearfix\">
                        <nav class=\"navbar navbar-default navbar-static-top tm_navbar clearfix\" role=\"navigation\">
                            <ul class=\"nav sf-menu clearfix\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li class=\"sub-menu\"><a href=\"#\">about us<span></span></a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">Dolore ipsu</a></li>
                                        <li><a href=\"#\">Consecte</a></li>
                                        <li><a href=\"#\">Elit Conseq</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"#\">Dolore ipsu</a></li>
                                                <li><a href=\"#\">Consecte</a></li>
                                                <li><a href=\"#\">Elit Conseq</a></li>
                                                <li class=\"tr\"></li>
                                            </ul>
                                        </li>
                                        <li class=\"tr1\"></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">programs</a></li>
                                <li><a href=\"#\">blog</a>
                                </li>
                                <li><a href=\"#\">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            </div>
        </div>
    </header>
    {% endblock %}
    {% block slider %}
    <article class=\"slider\">
       <div class=\"camera_wrap\">
            <div data-src=\"{{asset ('img/picture1.jpg')}}\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"{{asset ('img/picture2.jpg')}}\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"{{asset ('img/picture3.jpg')}}\"><div class=\"camera-caption fadeIn\"></div></div>
        </div>

    </article>

</div>
{% endblock %}
{% block global %}
<div class=\"global\">
<section class=\"welcomeBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <h2>PLONGEZ DANS LE MERVEILLEUX 
<br>MONDE DE LA LECTURE</h2>
            </article>
        </div>
    </div>

</section>
<section class=\"popularBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 banner-box\">
                <h3>LES PLUS POPULAIRES</h3>
                <div class=\"row\">
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic1.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">LA ROUTE</a> 
                                    <p class=\"title\">PAR CORMAC MCCARTHY</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic2.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">INTERPRÈTE DE MALADIE</a> 
                                    <p class=\"title\">PAR JHUMPA LAHIRI</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic3.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">MIDDLESEX: UN ROMAN</a> 
                                    <p class=\"title\">par Jeffrey Eugenides</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic4.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">GILEAD: UN ROMAN</a> 
                                    <p class=\"title\">par Marilynne Robinson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic5.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">KAVALIER ET ARGILE</a> 
                                    <p class=\"title\">par michael chabon</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic6.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">UN CANTIQUE POUR LEIBOWITZ</a> 
                                    <p class=\"title\">par walter m. miller jr.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic7.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">les Corrections</a> 
                                    <p class=\"title\">par jonathan franzen</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"{{asset ('img/page1_pic8.jpg')}}\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">ARBRE DE FUMÉE: UN ROMAN</a> 
                                    <p class=\"title\">par denis johnson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </div>
</section>
   <section class=\"circleIconBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Demandez à un bibliothécaire</h2>
                            <div class=\"badge\"><span class=\"fa fa-comment\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Innovations</h2>
                            <div class=\"badge\"><span class=\"fa fa-lightbulb-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Join the Library</h2>
                            <div class=\"badge\"><span class=\"fa fa-pencil-square-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Help</h2>
                            <div class=\"badge\"><span class=\"fa fa-search\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class=\"carouselBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1\">
                    <div class=\"list_carousel2 responsive clearfix\">
                        <ul id=\"foo2\">
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"foo-btn clearfix\">
                        <a id=\"prev2\" class=\"prev\" href=\"#\"></a>
                        <a id=\"next2\" class=\"next\" href=\"#\"></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

</div>
{% endblock %}
<!--footer-->
{%block footer%}
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <p><span>Bibliocommune Commune</span> &copy; <em id=\"copyright-year\"></em> | <a href=\"index-5.html\">Privacy Policy</a></p>
                <ul>
                    <li><a href=\"#\"><img src=\"{{asset ('img/follow_icon1.png')}}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{asset ('img/follow_icon2.png')}}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{asset ('img/follow_icon3.png')}}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{asset ('img/follow_icon4.png')}}\" alt=\"\"></a></li>
                </ul>
            </article>
        </div>
    </div>
  <!-- FOOTER_LINK -->
</footer>
{% endblock%}
<!--JS-->
<script src={{asset ('js/widgets.js')}}></script>
<script src={{asset ('js/holder.js')}}></script>

<script src={{asset ('js/prettify.js')}}></script>
<script src={{asset ('js/application.js')}}></script>
<script src={{asset ('js/jquery.countdown.min.js')}}></script>
<script src={{asset ('js/bootstrap.min.js')}}></script>
<script src={{asset ('js/tm-scripts.js')}}></script>
<script type=\"text/javascript\" async=\"\" src={{ asset ('js/ec.js')}}></script>
<script type=\"text/javascript\" async=\"\" src={{ asset ('js/analytics.js')}}></script>
<script async=\"\" src={{ asset ('js/gtm.js')}}></script>
<script src={{ asset ('js/touchTouch.jquery.js')}}></script>
<script src={{ asset ('js/jquery.mobile.customized.min.js')}}></script>
<script src={{ asset ('js/jquery.js')}}></script>
<script src={{ asset ('js/jquery-migrate-1.2.1.min.js')}}></script>
<script src={{ asset ('js/superfish.js')}}></script>
<script src={{ asset ('js/jquery.easing.1.3.js')}}></script>
<script src={{ asset ('js/jquery.mobilemenu.js')}}></script>
<script src={{ asset ('js/jquery.ui.totop.js')}}></script>
<script src={{ asset ('js/jquery.equalheights.js')}}></script>
<script src={{ asset ('js/camera.js')}}></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src={{ asset ('js/jquery.mobile.customized.min.js')}}></script>
<script src={{ asset ('js/jquery.carouFredSel-6.1.0-packed.js')}}></script>
<script src={{ asset ('js/jquery.mousewheel.min.js')}}></script>
<script src={{ asset ('js/jquery.touchSwipe.min.js')}}></script>
<script>
\$(window).load(function() {
    \$(function() {
            \$('#foo2').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev2',
                next: '#next2',
                scroll: 1,
                items: {
                    height: 'auto',
                    width:320,
                    visible: {
                        min: 1,
                        max: 1
                    }
                },
                mousewheel: true,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
        });                     
    });
</script> 
<script>
    \$(document).ready(function(){
    
        jQuery('.camera_wrap').camera();
    });
</script>

    <noscript>&lt;iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"&gt;&lt;/iframe&gt;</noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>


    <script>
        \$(window).load(function() {
            // Initialize the gallery
            \$('.thumb-pad4 figure a').touchTouch();
        });
    </script>

</body>
  <iframe name=\"oauth2relay342085569\" id=\"oauth2relay342085569\" src=\"\" tabindex=\"-1\" aria-hidden=\"true\" style=\"width: 1px; height: 1px; position: absolute; top: -100px;\">
    </iframe>  
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->




<!-- Google Tag Manager --><noscript>
<iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\">
</iframe></noscript>
<!-- End Google Tag Manager -->
</html>", "@biblio/home.html.twig", "/var/www/html/bibliotheque/src/biblioBundle/Resources/views/home.html.twig");
    }
}
