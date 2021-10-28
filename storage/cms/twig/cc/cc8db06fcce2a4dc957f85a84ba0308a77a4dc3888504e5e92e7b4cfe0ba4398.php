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

/* /var/www/cis-web-site/themes/cis/pages/qui-nous-sommes.htm */
class __TwigTemplate_7903fe96c0830677eed80185edf70b44d4e966c6585fdd7161abccfb44b44954 extends \Twig\Template
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
        echo "<section>
    <div class=\"body\">
        <div class=\"page-title-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-title-item text-center\">
                            <h2 class=\"title\">Qui nous sommes</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Qui nous sommes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"about-experience-area pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"experience-item\">
                            <span>Une expertise de plus de 30 ans</span>
                            <h2 class=\"title\">
                                Distributeur et Intégrateur de solution ...
                            </h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>
                                Le Groupe CIS possède une expertise de plus de
                                30 ans dans la distribution et l’intégration de
                                solutions, produits et services technologiques.
                            </p>
                            <p>
                                La société est organisée en unités opérationnelles qui sont bien compétentes au sein de leurs segments de
                                marché respectifs. La compétence commerciale et technique de nos équipes, ainsi que leur faculté d’adaptation
                                aux besoins et aux attentes des différents marchés ont profondément contribué au développement du Groupe.
                            </p>
                            <p>
                                La croissance récente n’aurait pas été possible sans la confiance des clients, des entreprises technologiques, des
                                petites, moyennes et grandes entreprises qui font confiance à CIS pour la conception et l’exécution de leurs projets
                                TIC, et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                        </div> <!-- experience item -->
                    </div>
                </div>

            </div> <!-- container -->
        </div>

        <div class=\"contact-details-area mt-n5 pb-120\">
            <div class=\"container mt-n5\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Ou nous trouver </h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 mt-n3\">
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1569913375800!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        <div class=\"brand-2-area pb-120\">-->
<!--            <div class=\"container\">-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-12\">-->
<!--                        <h3 class=\"title\">Nos Partenaires</h3>-->
<!--                        <p class=\"\">Nous offrons une meilleure solution  pour votre entreprise informatique</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-12\">-->
<!--                        <div class=\"brand-active\">-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/solution-provider.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/hp-partner.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/dell.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/micro-focus.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/oracle.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/microsoft.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/keysight.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/veritas.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/quantum.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/freebalance.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/telenity.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div><div class=\"brand-item\">-->
<!--                                <img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/netApp.png");
        echo "\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; brand item &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--            </div> &lt;!&ndash; container &ndash;&gt;-->
<!--        </div>-->

        <div class=\"pt-240\">
            ";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/qui-nous-sommes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 127,  205 => 126,  193 => 117,  188 => 115,  182 => 112,  176 => 109,  170 => 106,  164 => 103,  158 => 100,  152 => 97,  146 => 94,  140 => 91,  134 => 88,  128 => 85,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"body\">
        <div class=\"page-title-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-title-item text-center\">
                            <h2 class=\"title\">Qui nous sommes</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ 'accueil'|page }}\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Qui nous sommes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"about-experience-area pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"experience-item\">
                            <span>Une expertise de plus de 30 ans</span>
                            <h2 class=\"title\">
                                Distributeur et Intégrateur de solution ...
                            </h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>
                                Le Groupe CIS possède une expertise de plus de
                                30 ans dans la distribution et l’intégration de
                                solutions, produits et services technologiques.
                            </p>
                            <p>
                                La société est organisée en unités opérationnelles qui sont bien compétentes au sein de leurs segments de
                                marché respectifs. La compétence commerciale et technique de nos équipes, ainsi que leur faculté d’adaptation
                                aux besoins et aux attentes des différents marchés ont profondément contribué au développement du Groupe.
                            </p>
                            <p>
                                La croissance récente n’aurait pas été possible sans la confiance des clients, des entreprises technologiques, des
                                petites, moyennes et grandes entreprises qui font confiance à CIS pour la conception et l’exécution de leurs projets
                                TIC, et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                        </div> <!-- experience item -->
                    </div>
                </div>

            </div> <!-- container -->
        </div>

        <div class=\"contact-details-area mt-n5 pb-120\">
            <div class=\"container mt-n5\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Ou nous trouver </h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 mt-n3\">
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1569913375800!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        <div class=\"brand-2-area pb-120\">-->
<!--            <div class=\"container\">-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-12\">-->
<!--                        <h3 class=\"title\">Nos Partenaires</h3>-->
<!--                        <p class=\"\">Nous offrons une meilleure solution  pour votre entreprise informatique</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-12\">-->
<!--                        <div class=\"brand-active\">-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/solution-provider.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/hp-partner.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/dell.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/micro-focus.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/oracle.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/microsoft.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/keysight.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/veritas.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/quantum.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/freebalance.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                            <div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/telenity.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div><div class=\"brand-item\">-->
<!--                                <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/netApp.png' |theme }}\" alt=\"brand name\">-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; brand item &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--            </div> &lt;!&ndash; container &ndash;&gt;-->
<!--        </div>-->

        <div class=\"pt-240\">
            {% partial 'nos-partenaires' %}
        </div>
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/qui-nous-sommes.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 126);
        static $filters = array("page" => 11, "theme" => 85);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['page', 'theme'],
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
