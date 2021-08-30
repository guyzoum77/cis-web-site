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

/* C:\xampp\htdocs\projects\cis/themes/cis/pages/presentation.htm */
class __TwigTemplate_16a8a94279c2bd201ef785fe4013b948b601115145bab2bdd947996f2e9a3c6c extends \Twig\Template
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
        <!--====== PAGE TITLE PART START ======-->
        <div class=\"page-title-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-title-item text-center\">
                            <h2 class=\"title\">Présentation</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\">Présentation</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== PAGE TITLE PART ENDS ======-->

        <!--====== ABOUT EXPERIENCE PART START ======-->

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
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".2s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/experience-1.jpg");
        echo "\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Design & Development</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-laptop-code\"></i>

                            </div>
                        </div> <!-- single experience -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/experience-2.jpg");
        echo "\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Technical Support</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-headphones-alt\"></i>
                            </div>
                        </div> <!-- single experience -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".6s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/experience-3.jpg");
        echo "\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Digital Marketing</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-analytics\"></i>
                            </div>
                        </div> <!-- single experience -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT EXPERIENCE PART ENDS ======-->

        <!--====== ABOUT INTRO PART START ======-->

        <div class=\"about-intro-area pt-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"intro-thumb\">
                            <img src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-intro-thumb.jpg");
        echo "\" alt=\"\">
                            <a class=\"video-popup\" href=\"http://bit.ly/2VuPnrx\"><i class=\"fas fa-play\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"intri-content\">
                            <span>Intro Video</span>
                            <h2 class=\"title\">How we growth <br> our business.</h2>
                            <p class=\"text-1\">The introduction of cloud and mobile technologies into enterprise software.</p>
                            <p class=\"text-2\">hether you are building an enterprise web portal or a state-of-the-art website, you always need the right modern tools. Well-built and maintained PHP frameworks provide those tools in abundance, allowing maintained PHP frameworks provide those tools in abundance, allowing developers to save time, re-use code, and streamline the back end. As software development tools continuously.</p>
                            <a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== ABOUT INTRO PART ENDS ======-->

        <!--====== ABOUT HISTORY PART START ======-->

        <div class=\"about-history-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Our History</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item  pt-240\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-1.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>02</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-2.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>04</span>
                            </div>
                            <div class=\"number-box-2\">
                                <i class=\"fal fa-plus\"></i>
                            </div>
                        </div> <!-- history item -->
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-3.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>01</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-4.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>03</span>
                            </div>
                        </div> <!-- history item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT HISTORY PART ENDS ======-->

        <!--====== ABOT FAQ PART START ======-->

        <div class=\"about-history-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Our History</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item  pt-240\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-1.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>02</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"";
        // line 225
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-2.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>04</span>
                            </div>
                            <div class=\"number-box-2\">
                                <i class=\"fal fa-plus\"></i>
                            </div>
                        </div> <!-- history item -->
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"";
        // line 242
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-3.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>01</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"";
        // line 254
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/history-4.jpg");
        echo "\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>03</span>
                            </div>
                        </div> <!-- history item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT HISTORY PART ENDS ======-->

        <!--====== ABOUT FAQ PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\projects\\cis/themes/cis/pages/presentation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 254,  318 => 242,  298 => 225,  283 => 213,  247 => 180,  232 => 168,  212 => 151,  197 => 139,  159 => 104,  134 => 82,  120 => 71,  105 => 59,  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"body\">
        <!--====== PAGE TITLE PART START ======-->
        <div class=\"page-title-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"page-title-item text-center\">
                            <h2 class=\"title\">Présentation</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ 'accueil'|page }}\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"{{ 'presentation'|page }}\">Présentation</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== PAGE TITLE PART ENDS ======-->

        <!--====== ABOUT EXPERIENCE PART START ======-->

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
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".2s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"{{ 'assets/images/experience-1.jpg'| theme}}\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Design & Development</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-laptop-code\"></i>

                            </div>
                        </div> <!-- single experience -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"{{ 'assets/images/experience-2.jpg'|theme }}\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Technical Support</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-headphones-alt\"></i>
                            </div>
                        </div> <!-- single experience -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\".6s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"{{ 'assets/images/experience-3.jpg'|theme}}\" alt=\"\">
                            <div class=\"experience-overlay\">
                                <h5 class=\"title\">Digital Marketing</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href=\"#\">Read More</a>
                                <i class=\"fal fa-analytics\"></i>
                            </div>
                        </div> <!-- single experience -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT EXPERIENCE PART ENDS ======-->

        <!--====== ABOUT INTRO PART START ======-->

        <div class=\"about-intro-area pt-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"intro-thumb\">
                            <img src=\"{{ 'assets/images/about-intro-thumb.jpg'|theme }}\" alt=\"\">
                            <a class=\"video-popup\" href=\"http://bit.ly/2VuPnrx\"><i class=\"fas fa-play\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"intri-content\">
                            <span>Intro Video</span>
                            <h2 class=\"title\">How we growth <br> our business.</h2>
                            <p class=\"text-1\">The introduction of cloud and mobile technologies into enterprise software.</p>
                            <p class=\"text-2\">hether you are building an enterprise web portal or a state-of-the-art website, you always need the right modern tools. Well-built and maintained PHP frameworks provide those tools in abundance, allowing maintained PHP frameworks provide those tools in abundance, allowing developers to save time, re-use code, and streamline the back end. As software development tools continuously.</p>
                            <a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== ABOUT INTRO PART ENDS ======-->

        <!--====== ABOUT HISTORY PART START ======-->

        <div class=\"about-history-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Our History</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item  pt-240\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"{{ 'assets/images/history-1.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>02</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"{{ 'assets/images/history-2.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>04</span>
                            </div>
                            <div class=\"number-box-2\">
                                <i class=\"fal fa-plus\"></i>
                            </div>
                        </div> <!-- history item -->
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"{{ 'assets/images/history-3.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>01</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"{{ 'assets/images/history-4.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>03</span>
                            </div>
                        </div> <!-- history item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT HISTORY PART ENDS ======-->

        <!--====== ABOT FAQ PART START ======-->

        <div class=\"about-history-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Our History</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item  pt-240\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"{{ 'assets/images/history-1.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>02</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"{{ 'assets/images/history-2.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>04</span>
                            </div>
                            <div class=\"number-box-2\">
                                <i class=\"fal fa-plus\"></i>
                            </div>
                        </div> <!-- history item -->
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <img src=\"{{ 'assets/images/history-3.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>01</span>
                            </div>
                        </div> <!-- history item -->
                        <div class=\"history-item history-item-2\">
                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <img src=\"{{ 'assets/images/history-4.jpg'|theme }}\" alt=\"history\">
                            </div>
                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">
                                <span>1990 - Startup</span>
                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>
                            </div>
                            <div class=\"number-box\">
                                <span>03</span>
                            </div>
                        </div> <!-- history item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT HISTORY PART ENDS ======-->

        <!--====== ABOUT FAQ PART ENDS ======-->
    </div>
</section>", "C:\\xampp\\htdocs\\projects\\cis/themes/cis/pages/presentation.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 12, "theme" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
