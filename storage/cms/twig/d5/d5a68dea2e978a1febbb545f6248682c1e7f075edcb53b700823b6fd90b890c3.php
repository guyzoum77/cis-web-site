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

/* /var/www/cis-web-site/themes/cis/partials/header.htm */
class __TwigTemplate_79c169779d4fa9ac2dfe93d550b263ea528ac7071870a72f36c7b497b4f6c282 extends \Twig\Template
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
        echo "<header class=\"header-area header-area-2 header-area-4\">
    <div class=\"header-top pl-30 pr-30 white-bg\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6 col-sm-7\">
                <div class=\"header-left-side text-center text-sm-left\">
                    <ul>
                        <li><strong><a href=\"#\"><i class=\"fal fa-envelope\"></i> support@cis-africa.net</a></strong></li>
                        <li><strong><a href=\"#\"><i class=\"fal fa-phone\"></i> +225 25 21 00 32 58</a></strong></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-5\">
                <div class=\"header-right-social text-center text-sm-right\">
                    <ul>
                        <li><a href=\"https://web.facebook.com/ciswestafrica/\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"https://www.linkedin.com/company/cis-west-africa?trk\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"https://twitter.com/cis_west\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-nav\">
        <div class=\"navigation\">
            <nav class=\"navbar navbar-expand-lg navbar-light \">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo/cis.png");
        echo "\" width=\"73\" height=\"65\" alt=\"\">
                </a> <!-- logo -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                </button> <!-- navbar toggler -->

                <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav offset-4\">
                        <li class=\"nav-item ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37) == "accueil")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 40), "id", [], "any", false, false, true, 40) == "nos-services")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nos-services");
        echo "\">Nos services</a>
                        </li>
                        <li class=\"nav-item ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "id", [], "any", false, false, true, 43) == "success-story")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("success-story");
        echo "\">Success Story</a>
                        </li>
                        <li class=\"nav-item ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46) == "nos-services")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("qui-nous-sommes");
        echo "\">Qui sommes Nous ?</a>
                        </li>
                        <li class=\"nav-item ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "id", [], "any", false, false, true, 49) == "nos-contacts")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contactez-nous");
        echo "\">Contactez Nous</a>
                        </li>
                    </ul>
                </div> <!-- navbar collapse -->
            </nav>
        </div> <!-- navigation -->
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  124 => 49,  119 => 47,  113 => 46,  108 => 44,  102 => 43,  97 => 41,  91 => 40,  86 => 38,  80 => 37,  67 => 27,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header-area header-area-2 header-area-4\">
    <div class=\"header-top pl-30 pr-30 white-bg\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6 col-sm-7\">
                <div class=\"header-left-side text-center text-sm-left\">
                    <ul>
                        <li><strong><a href=\"#\"><i class=\"fal fa-envelope\"></i> support@cis-africa.net</a></strong></li>
                        <li><strong><a href=\"#\"><i class=\"fal fa-phone\"></i> +225 25 21 00 32 58</a></strong></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-5\">
                <div class=\"header-right-social text-center text-sm-right\">
                    <ul>
                        <li><a href=\"https://web.facebook.com/ciswestafrica/\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"https://www.linkedin.com/company/cis-west-africa?trk\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"https://twitter.com/cis_west\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-nav\">
        <div class=\"navigation\">
            <nav class=\"navbar navbar-expand-lg navbar-light \">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"{{ 'assets/logo/cis.png'| theme}}\" width=\"73\" height=\"65\" alt=\"\">
                </a> <!-- logo -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                </button> <!-- navbar toggler -->

                <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav offset-4\">
                        <li class=\"nav-item {% if this.page.id == 'accueil' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'accueil'|page }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item {% if this.page.id == 'nos-services' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'nos-services'|page }}\">Nos services</a>
                        </li>
                        <li class=\"nav-item {% if this.page.id == 'success-story' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'success-story'|page }}\">Success Story</a>
                        </li>
                        <li class=\"nav-item {% if this.page.id == 'nos-services' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'qui-nous-sommes'|page }}\">Qui sommes Nous ?</a>
                        </li>
                        <li class=\"nav-item {% if this.page.id == 'nos-contacts' %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'contactez-nous'|page }}\">Contactez Nous</a>
                        </li>
                    </ul>
                </div> <!-- navbar collapse -->
            </nav>
        </div> <!-- navigation -->
    </div>
</header>", "/var/www/cis-web-site/themes/cis/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37);
        static $filters = array("theme" => 27, "page" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['theme', 'page'],
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
