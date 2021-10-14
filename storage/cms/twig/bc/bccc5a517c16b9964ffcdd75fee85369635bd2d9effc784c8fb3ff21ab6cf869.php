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

/* /var/www/cis-web-site/themes/cis/pages/accueil.htm */
class __TwigTemplate_3447924db49f75b63183d7749e973d125cc2f35af53853186f12b758c9dc2335 extends \Twig\Template
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
        <!--====== BANNER PART START ======-->
        <div class=\"banner-active\">
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide1.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 1</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 1<br>En attente suite slide 1</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nos-services");
        echo "\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>

            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide2.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 2</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 2<br>En attente suite slide 2</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide3.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 3</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 3<br>En attente suite slide 3</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
        </div>
        <!--====== BANNER PART ENDS ======-->


        <div class=\"who-we-are-area pt-110 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;\">
                        <div class=\"section-title\">
                            <span>Expert en Distribution et Intégration de solutions</span>
                            <h2 class=\"title\">
                                Pourquoi nous pour votre infrastructure informatique
                            </h2>
                        </div> <!-- section title -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1 wow fadeInRight\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInRight;\">
                        <div class=\"section-title\">
                            <p>
                                CIS WEST AFRICA, expert de plus de 30 ans dans la distribution et l’intégration de solutions, est fournisseur de produits et services technologiques,
                                adapté à vos besoins et attentes
                                <br><a href=\"#\" class=\"main-btn wow fadeInUp text-muted\">En savoir plus sur nous <i class=\"fal fa-long-arrow-right\"></i></a>

                            </p>
                        </div> <!-- section title -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-database\"></i>
                            <h5 class=\"title\">infrastructure</h5>
                            <p>Approches cohérentes dans le domaine des technologies de l’Information et de la communication (TIC)...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-laptop-code\"></i>
                            <h5 class=\"title\">Microsoft Soluations</h5>
                            <p>Repensez votre entreprise grâce aux solutions Microsoft basées sur la technologie Microsoft ...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-fingerprint\"></i>
                            <h5 class=\"title\">Réseaux et Sécurités</h5>
                            <p>Protéger efficacement votre réseau informatique, grâce à des briques logicielles ...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-user-cog\"></i>
                            <h5 class=\"title\">Infogérence</h5>
                            <p>
                                Managed Print Service (MPS) vous assure l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.)...
                            </p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class=\"what-we-are-shape-1\">
                <img src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/what-we-are-shape-1.png");
        echo "\" alt=\"shape\">
            </div>
            <div class=\"what-we-are-shape-2\">
                <img src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/what-we-are-shape-2.png");
        echo "\" alt=\"shape\">
            </div>
        </div>


        <div class=\"what-we-do-area gray-bg pt-105 pb-120\"></div>

        <!--====== SERVICES TITLE PART START ======-->
        <div class=\"services-title-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"services-title-item text-center\">
                            <div class=\"ring-shape\"></div>
                            <span>Nos Partenaires</span>
                            <h3 class=\"title\">Nous offrons une meilleure solution pour votre entreprise informatique</h3>
                        </div> <!-- services title item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== SERVICES TITLE PART END ======-->

        <!--====== LATEST SERVICES PART START ======-->
        <div class=\"latest-services-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center mt-115\">
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/solution-provider.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/hp-partner.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/dell.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/micro-focus.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/oracle.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/microsoft.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/keysight.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card  mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/veritas.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 226
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/quantum.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/freebalance.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 244
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/telenity.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 253
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/netApp.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/symantec.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/riverbed.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 282
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/oracle-comm.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/sas.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/xerox.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 309
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/vmware.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 320
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/avaya.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 329
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/fortinet.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 338
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/veeam.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"";
        // line 347
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cisco.png");
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>
        <!--====== LATEST SERVICES PART END ======-->


        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-3 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Qui sommes nous ?</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"features-item\">
                            <p>
                                CIS WEST AFRICA possède une expertise de plus de 30 ans dans la distribution
                                et l’intégration de solutions, produits et services technologiques.
                                La société est organisée en unités opérationnelles qui sont bien
                                compétentes au sein de leurs segments de marché respectifs.
                            </p>
                            <p class=\"mt-3\">
                                La compétence commerciale et technique de nos équipes, ainsi
                                que leur faculté d’adaptation aux besoins et aux attentes des
                                différents marchés ont profondément contribué au développement du Groupe.
                            </p>
                            <p class=\"mt-3\">
                                La croissance récente n’aurait pas été possible sans la confiance des clients,
                                des entreprises technologiques, des petites, moyennes et grandes entreprises
                                qui font confiance à CIS pour la conception et l’exécution de leurs projets TIC,
                                et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                            <ul>
                                <li><a class=\"main-btn wow fadeInUp\" href=\"";
        // line 387
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">En savoir plus sur nous</a></li>
<!--                                <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"";
        // line 388
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>-->
                            </ul>
                            <img class=\"d-none d-lg-block h-100\" src=\"";
        // line 390
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/accueil/qui-sommes-nous.jpg");
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 \">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">CÔTE D'IVOIRE</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Rue Washington, sise à Cocody Centre
                                derrière la résidence de l’ambassadeur du Niger.
                                <br>01 BP 1942 Abidjan 01
                            </p>
                            <p class=\"mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 \">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title mt-n5 text-center\">MALI</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Hamdallaye ACI 2000
                                Rue 432 – porte 1275, Bamako, Mali
                                <br>BP : 03 BP 01N, Bamako, Mali
                            </p>
                            <p class=\"pt-45\">
                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">SENEGAL</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Allées Seydou Tall No 4313, 1er étage
                                Dakar, Sénégal
                                <br>&nbsp;
                            </p>
                            <p class=\"pt-45\"><i class=\"fa fa-phone-office\"></i> +221 33 825 47 43</p>
                            <p class=\"mt-0\">&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">GUINEE</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> tdi@cis-africa.net
                                <br><i class=\"fa fa-envelope\"></i> iko@cis-africa.net
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                61, rue des Sorkhos, République du Niger
                                <br>BP : 07 Niamey, République du Niger
                            </p>
                            <p class=\"pt-2\">
                                <i class=\"fa fa-phone-office\"></i> +224 620 90 90 90
                                <br><i class=\"fa fa-phone-office\"></i> +224 666 30 44 30
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">NIGER</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i>  bdj@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold pt-65\">
                                Rue BCRG, Immeuble Koula sise à Kaloum, 4ème étage D4, Conakry, Rep. de Guinée
                            </p>
                            <p class=\"pt-4 mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +227 90 97 99 99
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                        <!--<img src=\"";
        // line 491
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-1.png");
        echo "\">                          -->
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">TOGO</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold pt-65\">
                                146 Boulevard Jean Paul 2, Lomé, Togo
                                <br>01 BP : 351 Lomé, Togo
                            </p>
                            <p class=\"pt-4 mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +228 22 22 01 81
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-115 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
<!--                            <span>Portfolio</span>-->
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 528
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-1.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>Digital Computing</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Nous proposons à nos clients une large gamme de services
                                    de sécurité pour les aider à contrôler l’infrastructure, identifier
                                    les risques et se conformer aux différentes réglementations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 544
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses2.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>it consultant</span>
                                <a href=\"#\"><h4 class=\"title\">Today, the term Information Technology (IT)</h4></a>
                                <p>
                                    Le Groupe CIS présente à tous ses clients des approches
                                    cohérentes dans le domaine des technologies de
                                    L’Information et de la communication (TIC).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 560
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses3.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>design & development</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Chaque entreprise a des processus et des besoins
                                    uniques, quels qu’en soient le secteur d’activité
                                    et la taille. Néanmoins, chaque entreprise devra aussi se
                                    doter d’outils technologiques ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 577
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses4.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>ui/ux</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Notre équipe hautement qualifiée est experte
                                    en matière de:
                                    <strong>gestion des services informatiques,  des entreprises, de la performance des applications et du cycle de vie des actifs ...</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 593
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses5.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>game design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                                <p>
                                    CIS fournit des solutions soutenant les départements
                                    d’informatique gouvernementaux en vue de fournir des
                                    services multiplateformes destinés aux utilisateurs internes et
                                    aux citoyens externes ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"";
        // line 610
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses6.jpg");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Services avant et après-vente : Outre la gamme complète des
                                    solutions clés et des produits, le Groupe CIS offre des services professionnels,
                                    y compris le déploiement et  l’interconnexion de réseaux multifournisseurs ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== PORTFOLIO 3 PART ENDS ======-->


        <!--====== COUNTER PART START ======-->
        <div class=\"why-choose-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <span>why choose us</span>
                            <h2 class=\"title\">We Are Very Different Form Others IT Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-laptop-code\"></i>
                            </div>
                            <h4 class=\"title\">Modify Whole System</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-server\"></i>
                            </div>
                            <h4 class=\"title\">Beneficial Strategies</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-tools\"></i>
                            </div>
                            <h4 class=\"title\">Automated Software</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"choose-dot\">
                <img src=\"";
        // line 674
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-dot.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"choose-shape\">
                <img src=\"";
        // line 677
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-shape.png");
        echo "\" alt=\"\">
            </div>
        </div>
        <!--====== COUNTER PART ENDS ======-->


        <!--====== FAQ PART START ======-->
        <div class=\"faq-area faq-area-3 pt-115\">
            <div class=\"container\">

                <div class=\"row mt-4\">

                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".6s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid\" src=\"\" alt=\"\">
                                <p class=\"mt-15\">
                                    <a href=\"#\" class=\"btn btn-link\">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".6s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid\" src=\"\" alt=\"\">
                                <p class=\"mt-15\">
                                    <a href=\"#\" class=\"btn btn-link\">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div> <!-- container -->
        </div>


        <div class=\"leadership-area gray-bg pt-105 pb-160\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Ils nous ont fait confiance ...</h2>
                    </div>
                </div> <!-- row -->
                <div class=\"row leadership-active\">
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 809
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET  </h5>
                                <span>AZURE STACK HCI</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 818
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cepici.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET  </h5>
                                <span>DOING BUSINESS</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 827
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/bcrg.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>VIRTUALISATION</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 836
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cnps.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>MANAGEENGINE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 845
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/nsia.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>UPGRADE DATA STORE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 854
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/mtn.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>POWERMAX</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 863
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/inphb.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET </h5>
                                <span>INFRASTRUCTURE SERVEURS ET SOLUTION DE SAUVEGARDE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 872
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/orange-guinée.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>BIG DATA</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 881
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/bicici.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>PLAN DE REPRISE D'ACTIVITES</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 890
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/advans.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>VIRTUALISATION</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 899
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/agds.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>MISE EN OEUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== FAQ PART ENDS ======-->


        <!--====== Nous laisser vos coordonnées ======-->
        <div class=\"get-in-touch-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title text-left\">
                            <span>Nous contactez</span>
                            <h2 class=\"title\">Laissez nous vos coordonnées</h2>
                        </div> <!-- section title -->
                        <div class=\"form-area\">
                            <form action=\"#\">
                                <div class=\"input-box pt-45 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <input type=\"text\" placeholder=\"Enter your name\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                                    <input type=\"email\" placeholder=\"Enter your email\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"get-map d-none d-lg-block\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993207.564767118!2d-77.9807899414373!3d42.92219345357043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1569310771254!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/accueil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 899,  1068 => 890,  1056 => 881,  1044 => 872,  1032 => 863,  1020 => 854,  1008 => 845,  996 => 836,  984 => 827,  972 => 818,  960 => 809,  825 => 677,  819 => 674,  752 => 610,  732 => 593,  713 => 577,  693 => 560,  674 => 544,  655 => 528,  615 => 491,  511 => 390,  506 => 388,  502 => 387,  459 => 347,  447 => 338,  435 => 329,  423 => 320,  409 => 309,  397 => 300,  385 => 291,  373 => 282,  361 => 273,  349 => 264,  335 => 253,  323 => 244,  311 => 235,  299 => 226,  287 => 217,  275 => 208,  261 => 197,  249 => 188,  237 => 179,  225 => 170,  213 => 161,  201 => 152,  167 => 121,  161 => 118,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"body\">
        <!--====== BANNER PART START ======-->
        <div class=\"banner-active\">
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide1.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 1</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 1<br>En attente suite slide 1</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"{{ 'nos-services'|page }}\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>

            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide2.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 2</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 2<br>En attente suite slide 2</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
            <div class=\"single-banner bg_cover\" style=\"background-image: url(themes/cis/assets/images-cis/slides/slide3.jpg);\">
                <div class=\"banner-overlay\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-9\">
                                <div class=\"banner-content\">
                                    <span data-animation=\"fadeInLeft\" data-delay=\"0.5s\">En attente slide 3</span>
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.9s\" class=\"title\">En attente slide 3<br>En attente suite slide 3</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"1.3s\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis </p>
                                    <a data-animation=\"fadeInUp\" data-delay=\"1.6s\" class=\"main-btn text-muted\" href=\"#\">Nos Services <i class=\"fal fa-long-arrow-right\"></i></a>
                                </div> <!-- banner content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
            </div>
        </div>
        <!--====== BANNER PART ENDS ======-->


        <div class=\"who-we-are-area pt-110 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;\">
                        <div class=\"section-title\">
                            <span>Expert en Distribution et Intégration de solutions</span>
                            <h2 class=\"title\">
                                Pourquoi nous pour votre infrastructure informatique
                            </h2>
                        </div> <!-- section title -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1 wow fadeInRight\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInRight;\">
                        <div class=\"section-title\">
                            <p>
                                CIS WEST AFRICA, expert de plus de 30 ans dans la distribution et l’intégration de solutions, est fournisseur de produits et services technologiques,
                                adapté à vos besoins et attentes
                                <br><a href=\"#\" class=\"main-btn wow fadeInUp text-muted\">En savoir plus sur nous <i class=\"fal fa-long-arrow-right\"></i></a>

                            </p>
                        </div> <!-- section title -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-database\"></i>
                            <h5 class=\"title\">infrastructure</h5>
                            <p>Approches cohérentes dans le domaine des technologies de l’Information et de la communication (TIC)...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-laptop-code\"></i>
                            <h5 class=\"title\">Microsoft Soluations</h5>
                            <p>Repensez votre entreprise grâce aux solutions Microsoft basées sur la technologie Microsoft ...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-fingerprint\"></i>
                            <h5 class=\"title\">Réseaux et Sécurités</h5>
                            <p>Protéger efficacement votre réseau informatique, grâce à des briques logicielles ...</p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-user-cog\"></i>
                            <h5 class=\"title\">Infogérence</h5>
                            <p>
                                Managed Print Service (MPS) vous assure l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.)...
                            </p>
                            <a href=\"case-details.html\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class=\"what-we-are-shape-1\">
                <img src=\"{{ 'assets/images-cis/what-we-are-shape-1.png'|theme }}\" alt=\"shape\">
            </div>
            <div class=\"what-we-are-shape-2\">
                <img src=\"{{ 'assets/images-cis/what-we-are-shape-2.png'|theme }}\" alt=\"shape\">
            </div>
        </div>


        <div class=\"what-we-do-area gray-bg pt-105 pb-120\"></div>

        <!--====== SERVICES TITLE PART START ======-->
        <div class=\"services-title-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"services-title-item text-center\">
                            <div class=\"ring-shape\"></div>
                            <span>Nos Partenaires</span>
                            <h3 class=\"title\">Nous offrons une meilleure solution pour votre entreprise informatique</h3>
                        </div> <!-- services title item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== SERVICES TITLE PART END ======-->

        <!--====== LATEST SERVICES PART START ======-->
        <div class=\"latest-services-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center mt-115\">
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/solution-provider.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/hp-partner.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/dell.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/micro-focus.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/oracle.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mt-15 mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/microsoft.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/keysight.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card  mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/veritas.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/quantum.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/freebalance.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/telenity.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/netApp.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/symantec.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/riverbed.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/oracle-comm.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/sas.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/xerox.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"3s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 3s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/vmware.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/avaya.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/fortinet.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/veeam.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0s; animation-name: fadeInUp;\">
                        <div class=\"card mb-55\">
                            <div class=\"card-body\">
                                <div class=\"services-thumb text-center\">
                                    <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cisco.png'|theme }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>
        <!--====== LATEST SERVICES PART END ======-->


        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-3 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Qui sommes nous ?</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"features-item\">
                            <p>
                                CIS WEST AFRICA possède une expertise de plus de 30 ans dans la distribution
                                et l’intégration de solutions, produits et services technologiques.
                                La société est organisée en unités opérationnelles qui sont bien
                                compétentes au sein de leurs segments de marché respectifs.
                            </p>
                            <p class=\"mt-3\">
                                La compétence commerciale et technique de nos équipes, ainsi
                                que leur faculté d’adaptation aux besoins et aux attentes des
                                différents marchés ont profondément contribué au développement du Groupe.
                            </p>
                            <p class=\"mt-3\">
                                La croissance récente n’aurait pas été possible sans la confiance des clients,
                                des entreprises technologiques, des petites, moyennes et grandes entreprises
                                qui font confiance à CIS pour la conception et l’exécution de leurs projets TIC,
                                et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                            <ul>
                                <li><a class=\"main-btn wow fadeInUp\" href=\"{{ 'presentation'|page }}\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">En savoir plus sur nous</a></li>
<!--                                <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"{{ 'presentation'|page }}\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>-->
                            </ul>
                            <img class=\"d-none d-lg-block h-100\" src=\"{{ 'assets/images-cis/accueil/qui-sommes-nous.jpg' |theme }}\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 \">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">CÔTE D'IVOIRE</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Rue Washington, sise à Cocody Centre
                                derrière la résidence de l’ambassadeur du Niger.
                                <br>01 BP 1942 Abidjan 01
                            </p>
                            <p class=\"mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 \">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title mt-n5 text-center\">MALI</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Hamdallaye ACI 2000
                                Rue 432 – porte 1275, Bamako, Mali
                                <br>BP : 03 BP 01N, Bamako, Mali
                            </p>
                            <p class=\"pt-45\">
                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">SENEGAL</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                Allées Seydou Tall No 4313, 1er étage
                                Dakar, Sénégal
                                <br>&nbsp;
                            </p>
                            <p class=\"pt-45\"><i class=\"fa fa-phone-office\"></i> +221 33 825 47 43</p>
                            <p class=\"mt-0\">&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">GUINEE</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> tdi@cis-africa.net
                                <br><i class=\"fa fa-envelope\"></i> iko@cis-africa.net
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold mt-2\">
                                61, rue des Sorkhos, République du Niger
                                <br>BP : 07 Niamey, République du Niger
                            </p>
                            <p class=\"pt-2\">
                                <i class=\"fa fa-phone-office\"></i> +224 620 90 90 90
                                <br><i class=\"fa fa-phone-office\"></i> +224 666 30 44 30
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">NIGER</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i>  bdj@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold pt-65\">
                                Rue BCRG, Immeuble Koula sise à Kaloum, 4ème étage D4, Conakry, Rep. de Guinée
                            </p>
                            <p class=\"pt-4 mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +227 90 97 99 99
                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                        <!--<img src=\"{{ 'assets/images/services-1.png' |theme }}\">                          -->
                            <h4 class=\"title text-center\">CIS</h4>
                            <h4 class=\"title text-center mt-n5\">TOGO</h4>
                            <p>
                                <i class=\"fa fa-envelope\"></i> support@cis.com
                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net
                            </p>
                            <p class=\"font-weight-bold pt-65\">
                                146 Boulevard Jean Paul 2, Lomé, Togo
                                <br>01 BP : 351 Lomé, Togo
                            </p>
                            <p class=\"pt-4 mt-3\">
                                <i class=\"fa fa-phone-office\"></i> +228 22 22 01 81
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-115 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
<!--                            <span>Portfolio</span>-->
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images/portfolio-thumb-1.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>Digital Computing</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Nous proposons à nos clients une large gamme de services
                                    de sécurité pour les aider à contrôler l’infrastructure, identifier
                                    les risques et se conformer aux différentes réglementations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses2.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>it consultant</span>
                                <a href=\"#\"><h4 class=\"title\">Today, the term Information Technology (IT)</h4></a>
                                <p>
                                    Le Groupe CIS présente à tous ses clients des approches
                                    cohérentes dans le domaine des technologies de
                                    L’Information et de la communication (TIC).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses3.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>design & development</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Chaque entreprise a des processus et des besoins
                                    uniques, quels qu’en soient le secteur d’activité
                                    et la taille. Néanmoins, chaque entreprise devra aussi se
                                    doter d’outils technologiques ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses4.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>ui/ux</span>
                                <a href=\"#\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                                <p>
                                    Notre équipe hautement qualifiée est experte
                                    en matière de:
                                    <strong>gestion des services informatiques,  des entreprises, de la performance des applications et du cycle de vie des actifs ...</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses5.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>game design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                                <p>
                                    CIS fournit des solutions soutenant les départements
                                    d’informatique gouvernementaux en vue de fournir des
                                    services multiplateformes destinés aux utilisateurs internes et
                                    aux citoyens externes ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30\">
                            <div class=\"portfolio-thumb\">
                                <img width=\"370\" height=\"250\" src=\"{{ 'assets/images-cis/nous_avons_faires_des_choses/nous_avons_faire_des_choses6.jpg' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p>
                                    Services avant et après-vente : Outre la gamme complète des
                                    solutions clés et des produits, le Groupe CIS offre des services professionnels,
                                    y compris le déploiement et  l’interconnexion de réseaux multifournisseurs ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== PORTFOLIO 3 PART ENDS ======-->


        <!--====== COUNTER PART START ======-->
        <div class=\"why-choose-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <span>why choose us</span>
                            <h2 class=\"title\">We Are Very Different Form Others IT Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-laptop-code\"></i>
                            </div>
                            <h4 class=\"title\">Modify Whole System</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-server\"></i>
                            </div>
                            <h4 class=\"title\">Beneficial Strategies</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\">
                        <div class=\"single-choose text-center mt-30\">
                            <div class=\"icon-box\">
                                <span></span>
                                <i class=\"fal fa-tools\"></i>
                            </div>
                            <h4 class=\"title\">Automated Software</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan-tium totam rem aperiam eaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"choose-dot\">
                <img src=\"{{ 'assets/images/choose-dot.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"choose-shape\">
                <img src=\"{{ 'assets/images/choose-shape.png'|theme }}\" alt=\"\">
            </div>
        </div>
        <!--====== COUNTER PART ENDS ======-->


        <!--====== FAQ PART START ======-->
        <div class=\"faq-area faq-area-3 pt-115\">
            <div class=\"container\">

                <div class=\"row mt-4\">

                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".6s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid\" src=\"\" alt=\"\">
                                <p class=\"mt-15\">
                                    <a href=\"#\" class=\"btn btn-link\">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".6s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid\" src=\"\" alt=\"\">
                                <p class=\"mt-15\">
                                    <a href=\"#\" class=\"btn btn-link\">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".2s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xxl-3 col-xl-3 col-lg-3 col-md-3 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".4s\">
                        <div class=\"card custom-shadow-card\">
                            <div class=\"card-body text-center\">
                                <img class=\"img-fluid \" src=\"\" alt=\"\">
                                <p class=\"mt-15 \">
                                    <a href=\"#\" class=\"btn btn-link \">Voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div> <!-- container -->
        </div>


        <div class=\"leadership-area gray-bg pt-105 pb-160\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12\">
                        <h2 class=\"title\">Ils nous ont fait confiance ...</h2>
                    </div>
                </div> <!-- row -->
                <div class=\"row leadership-active\">
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET  </h5>
                                <span>AZURE STACK HCI</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cepici.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET  </h5>
                                <span>DOING BUSINESS</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/bcrg.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>VIRTUALISATION</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cnps.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>MANAGEENGINE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/nsia.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>UPGRADE DATA STORE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/mtn.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>POWERMAX</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/inphb.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET </h5>
                                <span>INFRASTRUCTURE SERVEURS ET SOLUTION DE SAUVEGARDE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/orange-guinée.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>BIG DATA</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/bicici.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>PLAN DE REPRISE D'ACTIVITES</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/advans.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>VIRTUALISATION</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/agds.png'|theme }}\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>MISE EN OEUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== FAQ PART ENDS ======-->


        <!--====== Nous laisser vos coordonnées ======-->
        <div class=\"get-in-touch-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title text-left\">
                            <span>Nous contactez</span>
                            <h2 class=\"title\">Laissez nous vos coordonnées</h2>
                        </div> <!-- section title -->
                        <div class=\"form-area\">
                            <form action=\"#\">
                                <div class=\"input-box pt-45 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                                    <input type=\"text\" placeholder=\"Enter your name\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                                    <input type=\"email\" placeholder=\"Enter your email\">
                                </div>
                                <div class=\"input-box mt-20 wow fadeInLeft\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Enter your message\"></textarea>
                                </div>
                                <div class=\"input-box mt-20\">
                                    <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"get-map d-none d-lg-block\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993207.564767118!2d-77.9807899414373!3d42.92219345357043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1569310771254!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== GET IN TOUCH PART ENDS ======-->
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/accueil.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 14, "theme" => 118);
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
