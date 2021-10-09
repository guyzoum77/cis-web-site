<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/cis-web-site/themes/cis/layouts/layout.htm */
class __TwigTemplate_1bf74ffde505de3b074aef950784eea0b6ebf9db2a8fc3ae439e32b04b13f7cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>

    <!--====== Required meta tags ======-->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!--====== Title ======-->
    <title>CIS</title>

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo/cis.png");
        echo "\" type=\"image/png' |theme }}\">

    <!--====== Bootstrap css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">

    <!--====== Fontawesome Pro css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/all.css");
        echo "\">

    <!--====== Magnific Popup css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">

    <!--====== Animate css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.min.css");
        echo "\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">

    <!--====== Default css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/default.css");
        echo "\">

    <!--====== Style css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">


</head>

<body>

<!--  PRELOADER PART START -->
<div class=\"preloader\">
    <div class=\"loading\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</div>
<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "
<!--====== HEADER PART ENDS ======-->

<section id=\"layout-content\" class=\"body\">

    ";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 71
        echo "
</section>

<!--====== footer PART START ======-->
";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "<!--====== footer PART ENDS ======-->

<!--====== BACK TO TOP ======-->
<div class=\"back-to-top back-to-top-2\">
    <a href=\"\">
        <i class=\"fas fa-arrow-up\"></i>
    </a>
</div>
<!--====== BACK TO TOP ======-->


<!--====== jquery js ======-->
<script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.6.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-1.12.4.min.js");
        echo "\"></script>

<!--====== Bootstrap js ======-->
<script src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>

<!--====== Slick js ======-->
<script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick.min.js");
        echo "\"></script>

<!--====== Isotope js ======-->
<script src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.min.js");
        echo "\"></script>

<!--====== Images Loaded js ======-->
<script src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.counterup.min.js");
        echo "\"></script>

<!--====== Circle Progress js ======-->
<script src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/circle-progress.min.js");
        echo "\"></script>


<!--====== Syotimer js ======-->
<script src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.syotimer.min.js");
        echo "\"></script>

<!--====== Nice Select js ======-->
<script src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.nice-select.min.js");
        echo "\"></script>

<!--====== wow js ======-->
<script src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/waypoints.min.js");
        echo "\"></script>

<!--====== Main js ======-->
<script src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/layouts/layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 127,  243 => 124,  237 => 121,  231 => 118,  225 => 115,  218 => 111,  212 => 108,  206 => 105,  200 => 102,  194 => 99,  188 => 96,  182 => 93,  178 => 92,  172 => 89,  168 => 88,  154 => 76,  150 => 75,  144 => 71,  142 => 70,  135 => 65,  131 => 64,  104 => 40,  98 => 37,  92 => 34,  86 => 31,  80 => 28,  74 => 25,  68 => 22,  62 => 19,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>

    <!--====== Required meta tags ======-->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!--====== Title ======-->
    <title>CIS</title>

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"{{ 'assets/logo/cis.png' |theme }}\" type=\"image/png' |theme }}\">

    <!--====== Bootstrap css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css' |theme }}\">

    <!--====== Fontawesome Pro css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/all.css' |theme }}\">

    <!--====== Magnific Popup css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' |theme }}\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/nice-select.css' |theme }}\">

    <!--====== Animate css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.min.css' |theme }}\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css' |theme }}\">

    <!--====== Default css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/default.css' |theme }}\">

    <!--====== Style css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' |theme }}\">


</head>

<body>

<!--  PRELOADER PART START -->
<div class=\"preloader\">
    <div class=\"loading\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</div>
<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

{% partial 'header' %}

<!--====== HEADER PART ENDS ======-->

<section id=\"layout-content\" class=\"body\">

    {% page %}

</section>

<!--====== footer PART START ======-->
{% partial 'footer' %}
<!--====== footer PART ENDS ======-->

<!--====== BACK TO TOP ======-->
<div class=\"back-to-top back-to-top-2\">
    <a href=\"\">
        <i class=\"fas fa-arrow-up\"></i>
    </a>
</div>
<!--====== BACK TO TOP ======-->


<!--====== jquery js ======-->
<script src=\"{{ 'assets/js/vendor/modernizr-3.6.0.min.js' | theme}}\"></script>
<script src=\"{{ 'assets/js/vendor/jquery-1.12.4.min.js' | theme}}\"></script>

<!--====== Bootstrap js ======-->
<script src=\"{{ 'assets/js/bootstrap.min.js' | theme}}\"></script>
<script src=\"{{ 'assets/js/popper.min.js' | theme}}\"></script>

<!--====== Slick js ======-->
<script src=\"{{ 'assets/js/slick.min.js' | theme}}\"></script>

<!--====== Isotope js ======-->
<script src=\"{{ 'assets/js/isotope.pkgd.min.js' | theme}}\"></script>

<!--====== Images Loaded js ======-->
<script src=\"{{ 'assets/js/imagesloaded.pkgd.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/jquery.magnific-popup.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/jquery.counterup.min.js' | theme}}\"></script>

<!--====== Circle Progress js ======-->
<script src=\"{{ 'assets/js/circle-progress.min.js' | theme}}\"></script>


<!--====== Syotimer js ======-->
<script src=\"{{ 'assets/js/jquery.syotimer.min.js' | theme}}\"></script>

<!--====== Nice Select js ======-->
<script src=\"{{ 'assets/js/jquery.nice-select.min.js' | theme}}\"></script>

<!--====== wow js ======-->
<script src=\"{{ 'assets/js/wow.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/waypoints.min.js' | theme}}\"></script>

<!--====== Main js ======-->
<script src=\"{{ 'assets/js/main.js' | theme}}\"></script>

</body>

</html>", "/var/www/cis-web-site/themes/cis/layouts/layout.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 64, "page" => 70);
        static $filters = array("theme" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
