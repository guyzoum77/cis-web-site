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
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1569913375800!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div> <!-- map area -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"contact-info mr-30 mt-30\">
                            <div class=\"contact-item-1\">
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-phone\"></i>
                                    <h5 class=\"title\">Numéro de téléphone</h5>
                                    <p>+225 (21) 22 00 45 69</p>
                                </div>
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-envelope\"></i>
                                    <h5 class=\"title\">Email Address</h5>
                                    <p>info@webmail.com</p>
                                </div>
                            </div>
                            <div class=\"contact-item-1\">
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-map\"></i>
                                    <h5 class=\"title\">Office Location</h5>
                                    <p>12/A, Cocody, Nos Contacts</p>
                                </div>
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-globe\"></i>
                                    <h5 class=\"title\">Social Network</h5>
                                    <p>fb.com/example</p>
                                </div>
                            </div>
                        </div> <!-- contact info -->
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
                        <div class=\"map-area mt-30\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1569913375800!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div> <!-- map area -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"contact-info mr-30 mt-30\">
                            <div class=\"contact-item-1\">
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-phone\"></i>
                                    <h5 class=\"title\">Numéro de téléphone</h5>
                                    <p>+225 (21) 22 00 45 69</p>
                                </div>
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-envelope\"></i>
                                    <h5 class=\"title\">Email Address</h5>
                                    <p>info@webmail.com</p>
                                </div>
                            </div>
                            <div class=\"contact-item-1\">
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-map\"></i>
                                    <h5 class=\"title\">Office Location</h5>
                                    <p>12/A, Cocody, Nos Contacts</p>
                                </div>
                                <div class=\"contact-info-item text-center\">
                                    <i class=\"fal fa-globe\"></i>
                                    <h5 class=\"title\">Social Network</h5>
                                    <p>fb.com/example</p>
                                </div>
                            </div>
                        </div> <!-- contact info -->
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
