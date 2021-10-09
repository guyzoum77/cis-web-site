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

/* /var/www/cis-web-site/themes/cis/partials/footer.htm */
class __TwigTemplate_476df9891ee36032331c66041bb1cdb773afa9727b8fffa78e0d3ac245d37b70 extends \Twig\Template
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
        echo "<footer class=\"footer-area footer-area-2 footer-area-3\">
    <div class=\"footer-overlay\">
        <div class=\"container position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-7\">
                    <div class=\"widget-item-1 mt-30\">
                        <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo/cis.png");
        echo "\" alt=\"\">
<!--                        <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-1.1.png");
        echo "\" alt=\"\">-->
                        <p>
                            Le Groupe CIS experte de plus de 30 ans dans la distribution et l’intégration de solutions, produits et services technologiques.
                        </p>
                    </div> <!-- widget item 1 -->
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-5\">
                    <div class=\"widget-item-2 mt-30\">
                        <h4 class=\"title\">Pages</h4>
                        <div class=\"footer-list\">
                            <ul>
                                <li><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\"><i class=\"fal fa-angle-right\"></i>Accueil</a></li>
                                <li><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\"><i class=\"fal fa-angle-right\"></i>Présentation</a></li>
                                <li><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nos-services");
        echo "\"><i class=\"fal fa-angle-right\"></i>Nos Services</a></li>
                                <li><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nos-contacts");
        echo "\"><i class=\"fal fa-angle-right\"></i>Nos Contacts</a></li>
                            </ul>
                        </div>
                    </div> <!-- widget item 2 -->
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"widget-item-2 widget-item-3 mt-30\">
                        <h4 class=\"title\">Heures d'ouverture</h4>
                        <ul>
                            <li>Lundi - Vendredi: 7h:00 - 17h:00</li>
                            <li>Samedi: 7h:00 - 12:00</li>
                        </ul>
                        <p><span>For more then 30 years,</span> IT Service has been a reliable partner in the field of logistics and cargo forwarding.</p>
                        <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\"><i class=\"fal fa-angle-right\"></i>En savoir plus de nous</a>
                    </div> <!-- widget item 3 -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-copyright\">
                        <p>Copyright By@ <span>CIS</span> - 2021</p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
            <div class=\"shape-1\"></div>
            <div class=\"shape-2\"></div>
            <div class=\"shape-3\"></div>
        </div> <!-- container -->
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-area footer-area-2 footer-area-3\">
    <div class=\"footer-overlay\">
        <div class=\"container position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-7\">
                    <div class=\"widget-item-1 mt-30\">
                        <img src=\"{{ 'assets/logo/cis.png'|theme }}\" alt=\"\">
<!--                        <img src=\"{{ 'assets/images/logo-1.1.png'|theme }}\" alt=\"\">-->
                        <p>
                            Le Groupe CIS experte de plus de 30 ans dans la distribution et l’intégration de solutions, produits et services technologiques.
                        </p>
                    </div> <!-- widget item 1 -->
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-5\">
                    <div class=\"widget-item-2 mt-30\">
                        <h4 class=\"title\">Pages</h4>
                        <div class=\"footer-list\">
                            <ul>
                                <li><a href=\"{{ 'accueil'|page }}\"><i class=\"fal fa-angle-right\"></i>Accueil</a></li>
                                <li><a href=\"{{ 'presentation'|page }}\"><i class=\"fal fa-angle-right\"></i>Présentation</a></li>
                                <li><a href=\"{{ 'nos-services'|page }}\"><i class=\"fal fa-angle-right\"></i>Nos Services</a></li>
                                <li><a href=\"{{ 'nos-contacts'|page }}\"><i class=\"fal fa-angle-right\"></i>Nos Contacts</a></li>
                            </ul>
                        </div>
                    </div> <!-- widget item 2 -->
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"widget-item-2 widget-item-3 mt-30\">
                        <h4 class=\"title\">Heures d'ouverture</h4>
                        <ul>
                            <li>Lundi - Vendredi: 7h:00 - 17h:00</li>
                            <li>Samedi: 7h:00 - 12:00</li>
                        </ul>
                        <p><span>For more then 30 years,</span> IT Service has been a reliable partner in the field of logistics and cargo forwarding.</p>
                        <a href=\"{{ 'presentation'|page }}\"><i class=\"fal fa-angle-right\"></i>En savoir plus de nous</a>
                    </div> <!-- widget item 3 -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-copyright\">
                        <p>Copyright By@ <span>CIS</span> - 2021</p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
            <div class=\"shape-1\"></div>
            <div class=\"shape-2\"></div>
            <div class=\"shape-3\"></div>
        </div> <!-- container -->
    </div>
</footer>", "/var/www/cis-web-site/themes/cis/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7, "page" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
