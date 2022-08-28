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

/* /var/www/cis-web-site/themes/cis/pages/contactez-nous.htm */
class __TwigTemplate_1d15dff261f6457170c0cb430e83c7f36c272466b312c1dce5571471a1477488 extends \Twig\Template
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
                            <h2 class=\"title\">Nos Contacts</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Nos Contacts</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div class=\"contact-details-area pt-90 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"title\">Adresse Géographique</h3>
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.1226828234846!2d-3.9999756255947334!3d5.341797762307845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8dd8b96585%3A0x962983ac134ca7d1!2sCIS%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1636058300388!5m2!1sfr!2sci\" width=\"600\" height=\"450\" style=\"border-radius: 2px; border: 1px solid #eeeeee; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        </div> <!-- map area -->
                    </div>
                </div>
                <div class=\"blog-area\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS COTE DIVOIRE</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Rue Washington, sise à Cocody Centre derrière la résidence de l’ambassadeur du Niger.
                                        01 BP 1942 Abidjan 01
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+223 20 29 11 40 &nbsp; +223 44 24 67 23</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS MALI</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Hamdallaye ACI 2000
                                        Rue 432 – porte 1275, Bamako, Mali
                                        BP : 03 BP 01N, Bamako, Mali
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+223 20 29 11 40 &nbsp; +223 44 24 67 23</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS SENEGAL</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Allées Seydou Tall No 4313, 1er étage
                                        Dakar, Sénégal
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+221 33 825 47 43</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS GUINEE</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Rue BCRG, Immeuble Koula sise à Kaloum,
                                        4ème étage D4, Conakry, Rep. de Guinée
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+224 620 90 90 90 &nbsp; +224 666 30 44 30</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i>
                                    support@cis.com &nbsp;
                                    tdi@cis-africa.net &nbsp;
                                    <i class=\"fa fa-mailbox\"></i> iko@cis-africa.net &nbsp;cha@cis-africa.net &nbsp;
                                    <i class=\"fa fa-mailbox\"></i> cha@cis-africa.net
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS NIGER</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        61, rue des Sorkhos, République du Niger
                                        BP : 07 Niamey, République du Niger
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i> +227 90 97 99 99</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; bdj@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS TOGO</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        146 Boulevard Jean Paul 2, Lomé, Togo
                                        01 BP : 351 Lomé, Togo
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i> +228 22 22 01 81</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> info@cis-africa.net</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>

        <div class=\"get-in-touch-area get-in-touch-area-2\">
            <div class=\"container\">
                <div class=\"section-title text-left\">
                    <span>Formulaire de contact</span>
                    <h2 class=\"title\">Laissez nous vos coordonnées</h2>
                </div> <!-- section title -->
                <div class=\"form-area\">
                    <form id=\"contact-form\" action=\"#\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"input-box mt-45\">
                                    <input type=\"text\" name=\"name\" placeholder=\"Nom et prénoms\">
                                    <i class=\"fal fa-user\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"email\" name=\"email\" placeholder=\"Email\">
                                    <i class=\"fal fa-envelope\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"tel\" name=\"phone\" placeholder=\"Téléphone\">
                                    <i class=\"fal fa-envelope\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"text\" name=\"enterprise\" placeholder=\"Entreprise\">
                                    <i class=\"fal fa-building\"></i>
                                </div>
                            </div>

                            <div class=\"col-lg-8\">
                                <div class=\"input-box mt-45\">
                                    <textarea name=\"message\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                    <i class=\"fal fa-edit\"></i>
                                </div>
                            </div>

                            <div class=\"col-lg-12\">
                                <button class=\"main-btn float-right\" type=\"submit\">Envoyer</button>
                            </div>
                        </div>
                    </form>
                    <p class=\"form-message\"></p>
                </div>

            </div>
        </div>

        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/contactez-nous.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  39 => 1,);
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
                            <h2 class=\"title\">Nos Contacts</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ 'accueil'|page }}\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Nos Contacts</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div class=\"contact-details-area pt-90 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"title\">Adresse Géographique</h3>
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.1226828234846!2d-3.9999756255947334!3d5.341797762307845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8dd8b96585%3A0x962983ac134ca7d1!2sCIS%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1636058300388!5m2!1sfr!2sci\" width=\"600\" height=\"450\" style=\"border-radius: 2px; border: 1px solid #eeeeee; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        </div> <!-- map area -->
                    </div>
                </div>
                <div class=\"blog-area\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS COTE DIVOIRE</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Rue Washington, sise à Cocody Centre derrière la résidence de l’ambassadeur du Niger.
                                        01 BP 1942 Abidjan 01
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+223 20 29 11 40 &nbsp; +223 44 24 67 23</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS MALI</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Hamdallaye ACI 2000
                                        Rue 432 – porte 1275, Bamako, Mali
                                        BP : 03 BP 01N, Bamako, Mali
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+223 20 29 11 40 &nbsp; +223 44 24 67 23</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS SENEGAL</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Allées Seydou Tall No 4313, 1er étage
                                        Dakar, Sénégal
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+221 33 825 47 43</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; cha@cis-africa.net</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS GUINEE</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        Rue BCRG, Immeuble Koula sise à Kaloum,
                                        4ème étage D4, Conakry, Rep. de Guinée
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i>+224 620 90 90 90 &nbsp; +224 666 30 44 30</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i>
                                    support@cis.com &nbsp;
                                    tdi@cis-africa.net &nbsp;
                                    <i class=\"fa fa-mailbox\"></i> iko@cis-africa.net &nbsp;cha@cis-africa.net &nbsp;
                                    <i class=\"fa fa-mailbox\"></i> cha@cis-africa.net
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS NIGER</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        61, rue des Sorkhos, République du Niger
                                        BP : 07 Niamey, République du Niger
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i> +227 90 97 99 99</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> support@cis.com &nbsp; bdj@cis-africa.net</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s; animation-name: fadeInUp;\">
                            <div class=\"single-blog mt-30 h-100\">
                                <h4 class=\"title\">CIS TOGO</h4>
                                <ul class=\"mt-2\">
                                    <li>
                                        <i class=\"fal fa-map-signs\"></i>
                                        146 Boulevard Jean Paul 2, Lomé, Togo
                                        01 BP : 351 Lomé, Togo
                                    </li>
                                </ul>
                                <p><i class=\"fa fa-phone-office\"></i> +228 22 22 01 81</p>

                                <p class=\"mt-n4\"><i class=\"fa fa-mailbox\"></i> info@cis-africa.net</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>

        <div class=\"get-in-touch-area get-in-touch-area-2\">
            <div class=\"container\">
                <div class=\"section-title text-left\">
                    <span>Formulaire de contact</span>
                    <h2 class=\"title\">Laissez nous vos coordonnées</h2>
                </div> <!-- section title -->
                <div class=\"form-area\">
                    <form id=\"contact-form\" action=\"#\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"input-box mt-45\">
                                    <input type=\"text\" name=\"name\" placeholder=\"Nom et prénoms\">
                                    <i class=\"fal fa-user\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"email\" name=\"email\" placeholder=\"Email\">
                                    <i class=\"fal fa-envelope\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"tel\" name=\"phone\" placeholder=\"Téléphone\">
                                    <i class=\"fal fa-envelope\"></i>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <input type=\"text\" name=\"enterprise\" placeholder=\"Entreprise\">
                                    <i class=\"fal fa-building\"></i>
                                </div>
                            </div>

                            <div class=\"col-lg-8\">
                                <div class=\"input-box mt-45\">
                                    <textarea name=\"message\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                    <i class=\"fal fa-edit\"></i>
                                </div>
                            </div>

                            <div class=\"col-lg-12\">
                                <button class=\"main-btn float-right\" type=\"submit\">Envoyer</button>
                            </div>
                        </div>
                    </form>
                    <p class=\"form-message\"></p>
                </div>

            </div>
        </div>

        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/contactez-nous.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
