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

/* /var/www/cis-web-site.localhost/themes/cis/partials/header.htm */
class __TwigTemplate_fd3115fccac4ddac001bc9ad84e496c7f9cff54db05b8fe11ec5d3f4f430d922 extends \Twig\Template
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
        echo "<header class=\"header-area-2 header-area-3\">
    <div class=\"header-nav\">
        <div class=\"navigation\">
            <nav class=\"navbar navbar-expand-lg navbar-light \">
                <a class=\"navbar-brand\" ><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo/cis.png");
        echo "\"> </a> <!-- logo -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                </button> <!-- navbar toggler -->

                <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav m-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Présentation</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Nos Services</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Services Details</a></li>
                            </ul> <!-- sub menu -->
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Blog</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Blog Standard</a></li>
                                <li><a href=\"#\">Blog Grid</a></li>
                                <li><a href=\"#\">Blog Details</a></li>
                            </ul> <!-- sub menu -->
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#l\">Nos Contacts</a>
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
        return "/var/www/cis-web-site.localhost/themes/cis/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header-area-2 header-area-3\">
    <div class=\"header-nav\">
        <div class=\"navigation\">
            <nav class=\"navbar navbar-expand-lg navbar-light \">
                <a class=\"navbar-brand\" ><img src=\"{{ 'assets/logo/cis.png' |theme }}\"> </a> <!-- logo -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                    <span class=\"toggler-icon\"></span>
                </button> <!-- navbar toggler -->

                <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav m-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Accueil</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Présentation</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Nos Services</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Services Details</a></li>
                            </ul> <!-- sub menu -->
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Blog</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"#\">Blog Standard</a></li>
                                <li><a href=\"#\">Blog Grid</a></li>
                                <li><a href=\"#\">Blog Details</a></li>
                            </ul> <!-- sub menu -->
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#l\">Nos Contacts</a>
                        </li>
                    </ul>
                </div> <!-- navbar collapse -->
            </nav>
        </div> <!-- navigation -->
    </div>
</header>", "/var/www/cis-web-site.localhost/themes/cis/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
