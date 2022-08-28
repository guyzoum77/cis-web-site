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
                            <img style=\"width: 86% !important;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17ed5b691ea%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17ed5b691ea%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" class=\"img-thumbnail\" alt=\"\">
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"experience-item\">
                            <p>
                                Bonjour Chers Clients,
                                <br>
                                Fort d’une expertise de plus de 25 ans et d’une présence confirmée sur le marché,
                                l’objectif de CIS West Africa est de vous offrir les meilleurs conseils et solutions
                                complètes “de bout en bout”, qui vous permettent non seulement d’optimiser vos
                                performances, mais aussi de se préparer davantage au processus de
                                développement. Voici ci-dessous quelques valeurs qui nous définies :
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Expertise</strong> en TIC est maintenue grâce à la formation continue et à
                                l’obtention d’un nombre croissant de certifications
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Innovation</strong> stimulée par des offres novatrices et par l’adoption de
                                nouveaux modèles commerciaux
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Respect</strong> visant à maintenir un milieu de travail
                                positif et à favoriser le travail d’équipe d’où la satisfaction des clients
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
                        <h2 class=\"title\">Notre Couverture</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 mt-n3\">
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.1226828234846!2d-3.9999756255947334!3d5.341797762307845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8dd8b96585%3A0x962983ac134ca7d1!2sCIS%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1636058300388!5m2!1sfr!2sci\" width=\"600\" height=\"450\" style=\"border-radius: 2px; border: 1px solid #eeeeee; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"what-we-do-area yellow-bg pt-105 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h4 class=\"title text-center\">Nos partenaires</h4>
                        <p class=\"h4 text-pure-blue font-weight-bold text-center\">Nous offrons une meilleur solution pour votre entreprise informatique</p>
                    </div>
                </div>
            </div>
        </div>

        <!--====== NOS PARTENAIRES =====-->
        ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "        <!--====== FIN NOS PARTENAIRES =====-->
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
        return array (  135 => 89,  131 => 88,  51 => 11,  39 => 1,);
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
                            <img style=\"width: 86% !important;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17ed5b691ea%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17ed5b691ea%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" class=\"img-thumbnail\" alt=\"\">
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"experience-item\">
                            <p>
                                Bonjour Chers Clients,
                                <br>
                                Fort d’une expertise de plus de 25 ans et d’une présence confirmée sur le marché,
                                l’objectif de CIS West Africa est de vous offrir les meilleurs conseils et solutions
                                complètes “de bout en bout”, qui vous permettent non seulement d’optimiser vos
                                performances, mais aussi de se préparer davantage au processus de
                                développement. Voici ci-dessous quelques valeurs qui nous définies :
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Expertise</strong> en TIC est maintenue grâce à la formation continue et à
                                l’obtention d’un nombre croissant de certifications
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Innovation</strong> stimulée par des offres novatrices et par l’adoption de
                                nouveaux modèles commerciaux
                            </p>
                            <p>
                                - <strong class=\"text-yellow\">Respect</strong> visant à maintenir un milieu de travail
                                positif et à favoriser le travail d’équipe d’où la satisfaction des clients
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
                        <h2 class=\"title\">Notre Couverture</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 mt-n3\">
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.1226828234846!2d-3.9999756255947334!3d5.341797762307845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8dd8b96585%3A0x962983ac134ca7d1!2sCIS%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1636058300388!5m2!1sfr!2sci\" width=\"600\" height=\"450\" style=\"border-radius: 2px; border: 1px solid #eeeeee; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"what-we-do-area yellow-bg pt-105 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h4 class=\"title text-center\">Nos partenaires</h4>
                        <p class=\"h4 text-pure-blue font-weight-bold text-center\">Nous offrons une meilleur solution pour votre entreprise informatique</p>
                    </div>
                </div>
            </div>
        </div>

        <!--====== NOS PARTENAIRES =====-->
        {% partial 'nos-partenaires' %}
        <!--====== FIN NOS PARTENAIRES =====-->
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/qui-nous-sommes.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 88);
        static $filters = array("page" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['page'],
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
