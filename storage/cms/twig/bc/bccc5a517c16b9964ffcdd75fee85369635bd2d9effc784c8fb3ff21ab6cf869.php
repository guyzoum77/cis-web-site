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
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-laptop-code\"></i>
                            <h5 class=\"title\">Microsoft Soluations</h5>
                            <p>Repensez votre entreprise grâce aux solutions Microsoft basées sur la technologie Microsoft ...</p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-fingerprint\"></i>
                            <h5 class=\"title\">Réseaux et Sécurités</h5>
                            <p>Protéger efficacement votre réseau informatique, grâce à des briques logicielles ...</p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-user-cog\"></i>
                            <h5 class=\"title\">Infogérence</h5>
                            <p>
                                Managed Print Service (MPS) vous assure l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.)...
                            </p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
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

        <!--====== NOS PARTENAIRES =====-->
        ";
        // line 129
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 130
        echo "        <!--====== FIN NOS PARTENAIRES =====-->


        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-115 pb-120\">
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
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">En savoir plus sur nous</a></li>
<!--                                <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("presentation");
        echo "\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>-->
                            </ul>
                            <img class=\"d-none d-lg-block h-100\" src=\"";
        // line 165
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/accueil/qui-sommes-nous.jpg");
        echo "\">
                        </div>
                    </div>
                </div>
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 \">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">CÔTE D'IVOIRE</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Rue Washington, sise à Cocody Centre-->
<!--                                derrière la résidence de l’ambassadeur du Niger.-->
<!--                                <br>01 BP 1942 Abidjan 01-->
<!--                            </p>-->
<!--                            <p class=\"mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 \">-->
<!--                            <h4 class=\"title \">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5 \">MALI</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Hamdallaye ACI 2000-->
<!--                                Rue 432 – porte 1275, Bamako, Mali-->
<!--                                <br>BP : 03 BP 01N, Bamako, Mali-->
<!--                            </p>-->
<!--                            <p class=\"pt-45\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30\">-->
<!--                            <h4 class=\"title \">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">SENEGAL</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Allées Seydou Tall No 4313, 1er étage-->
<!--                                Dakar, Sénégal-->
<!--                                <br>&nbsp;-->
<!--                            </p>-->
<!--                            <p class=\"pt-45\"><i class=\"fa fa-phone-office\"></i> +221 33 825 47 43</p>-->
<!--                            <p class=\"mt-0\">&nbsp;</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">GUINEE</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> tdi@cis-africa.net-->
<!--                                <br><i class=\"fa fa-envelope\"></i> iko@cis-africa.net-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                61, rue des Sorkhos, République du Niger-->
<!--                                <br>BP : 07 Niamey, République du Niger-->
<!--                            </p>-->
<!--                            <p class=\"pt-2\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +224 620 90 90 90-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +224 666 30 44 30-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">NIGER</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i>  bdj@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold pt-65\">-->
<!--                                Rue BCRG, Immeuble Koula sise à Kaloum, 4ème étage D4, Conakry, Rep. de Guinée-->
<!--                            </p>-->
<!--                            <p class=\"pt-4 mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +227 90 97 99 99-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                        &lt;!&ndash;<img src=\"";
        // line 266
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-1.png");
        echo "\">                          &ndash;&gt;-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">TOGO</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold pt-65\">-->
<!--                                146 Boulevard Jean Paul 2, Lomé, Togo-->
<!--                                <br>01 BP : 351 Lomé, Togo-->
<!--                            </p>-->
<!--                            <p class=\"pt-4 mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +228 22 22 01 81-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-25 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"inphb\" class=\"img-fluid\" src=\"";
        // line 302
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/inphb.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET </span>
                                <a href=\"#\"><h4 class=\"title\">SOLUTION DE SAUVEGARDE</h4></a>
                                <p class=\"mt-n1\">
                                    Mise en œuvre d’un nouvel environnement d’infrastructure
                                    serveurs et solution de sauvegarde Backup Exe compose de
                                    serveurs HPE, 360 ...
                                    <!-- compose de :-->
<!--                                    <br>• 04 serveurs HPE ProLiant DL 380 Gen 10-->
<!--                                    <br>• 02 serveurs HPE 360 Gen 10-->
<!--                                    <br>• HPE MSA 2050 SAN Dual Controller-->
<!--                                    <br>• HPE StoreEver MSL 1/8 G2 0-drive Tape Autoloader-->
<!--                                    <br>• 06 licences Windows Server standard  2019-->
<!--                                    <br>07 Licences Backup Exec ( d’une baie MSA4)-->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"orange-banque\" class=\"img-fluid\" src=\"";
        // line 325
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <br><a href=\"#\"><h4 class=\"title\"> AZURE STACK HCI</h4></a>
                                <p class=\"pt-65\">
                                    Mise en œuvre d’une infrastructure hyperconvergée Azure
                                    Stack composée de deux (02) serveurs HPE ProLiant DL 380 G10.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"cepici\" class=\"img-fluid\" src=\"";
        // line 340
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cepici.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <br> <a href=\"#\"><h4 class=\"title\">DOING BUSINESS</h4></a>
                                <p class=\"pt-65\">
                                    Mise en œuvre de deux Vx block (réseau, sécurité, stockage et computer),
                                    infrastructure hyper convergée hautement disponible
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row justify-content-center pt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"agds\" class=\"img-fluid\" src=\"";
        // line 358
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/agds.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <a href=\"#\"><h4 class=\"title\">MISE EN ŒUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</h4></a>
                                <p>
                                    Mise en œuvre d’une nouvelle infrastructure serveurs et baie :
                                    <br>03 serveurs HPE ProLiant DL380 Gen10
                                    <br>02 HPE StoreEasy 1660 32TB SAS Storage et 01 KVM + console
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"mtn\" class=\"img-fluid\" src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/mtn.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET </span>
                                <br> <a href=\"#\"><h4 class=\"title\">VXRAIL</h4></a>
                                <p class=\"pt-100\">
                                    Déploiement de la plateforme VXRAIL500 P570 HYBRID
                                    + P570F ALL FLASH sur site Bingerville (6 nœuds vxrail) et sur site Yamoussoukro (3 nœuds)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img class=\"img-fluid\" alt=\"cnps\" src=\"";
        // line 389
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cnps.png");
        echo "\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p class=\"pt-65\">
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
        // line 417
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
        // line 426
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
        // line 435
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
        // line 444
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
        // line 453
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
        // line 462
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
        // line 471
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/inphb.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET </h5>
                                <span>SOLUTION DE SAUVEGARDE</span>
                            </div>
                        </div> <!-- leadership item -->
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"leadership-item mt-30\">
                            <img src=\"";
        // line 480
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
        // line 489
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
        // line 498
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
        // line 507
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/agds.png");
        echo "\" alt=\"\">
                            <div class=\"leadership-content\">
                                <h5 class=\"title\">PROJET</h5>
                                <span>REPLICATION DES DONNEES</span>
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
        return array (  621 => 507,  609 => 498,  597 => 489,  585 => 480,  573 => 471,  561 => 462,  549 => 453,  537 => 444,  525 => 435,  513 => 426,  501 => 417,  470 => 389,  452 => 374,  433 => 358,  412 => 340,  394 => 325,  368 => 302,  329 => 266,  225 => 165,  220 => 163,  216 => 162,  182 => 130,  178 => 129,  167 => 121,  161 => 118,  54 => 14,  39 => 1,);
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
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-laptop-code\"></i>
                            <h5 class=\"title\">Microsoft Soluations</h5>
                            <p>Repensez votre entreprise grâce aux solutions Microsoft basées sur la technologie Microsoft ...</p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-fingerprint\"></i>
                            <h5 class=\"title\">Réseaux et Sécurités</h5>
                            <p>Protéger efficacement votre réseau informatique, grâce à des briques logicielles ...</p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                        </div> <!-- what we do item -->
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                        <div class=\"what-we-do-item text-center mt-30 h-100\">
                            <i class=\"fal fa-user-cog\"></i>
                            <h5 class=\"title\">Infogérence</h5>
                            <p>
                                Managed Print Service (MPS) vous assure l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.)...
                            </p>
                            <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
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

        <!--====== NOS PARTENAIRES =====-->
        {% partial 'nos-partenaires' %}
        <!--====== FIN NOS PARTENAIRES =====-->


        <!--====== FEATURES PART START ======-->
        <div class=\"features-area pt-115 pb-120\">
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
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 \">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">CÔTE D'IVOIRE</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Rue Washington, sise à Cocody Centre-->
<!--                                derrière la résidence de l’ambassadeur du Niger.-->
<!--                                <br>01 BP 1942 Abidjan 01-->
<!--                            </p>-->
<!--                            <p class=\"mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 \">-->
<!--                            <h4 class=\"title \">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5 \">MALI</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Hamdallaye ACI 2000-->
<!--                                Rue 432 – porte 1275, Bamako, Mali-->
<!--                                <br>BP : 03 BP 01N, Bamako, Mali-->
<!--                            </p>-->
<!--                            <p class=\"pt-45\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +223 20 29 11 40-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30\">-->
<!--                            <h4 class=\"title \">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">SENEGAL</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                Allées Seydou Tall No 4313, 1er étage-->
<!--                                Dakar, Sénégal-->
<!--                                <br>&nbsp;-->
<!--                            </p>-->
<!--                            <p class=\"pt-45\"><i class=\"fa fa-phone-office\"></i> +221 33 825 47 43</p>-->
<!--                            <p class=\"mt-0\">&nbsp;</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">GUINEE</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> tdi@cis-africa.net-->
<!--                                <br><i class=\"fa fa-envelope\"></i> iko@cis-africa.net-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold mt-2\">-->
<!--                                61, rue des Sorkhos, République du Niger-->
<!--                                <br>BP : 07 Niamey, République du Niger-->
<!--                            </p>-->
<!--                            <p class=\"pt-2\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +224 620 90 90 90-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +224 666 30 44 30-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">NIGER</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i>  bdj@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold pt-65\">-->
<!--                                Rue BCRG, Immeuble Koula sise à Kaloum, 4ème étage D4, Conakry, Rep. de Guinée-->
<!--                            </p>-->
<!--                            <p class=\"pt-4 mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +227 90 97 99 99-->
<!--                                <br><i class=\"fa fa-phone-office\"></i> +223 44 24 67 23-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-4 col-md-6\">-->
<!--                        <div class=\"single-features mt-30 h-100\">-->
<!--                        &lt;!&ndash;<img src=\"{{ 'assets/images/services-1.png' |theme }}\">                          &ndash;&gt;-->
<!--                            <h4 class=\"title\">CIS</h4>-->
<!--                            <h4 class=\"title mt-n5\">TOGO</h4>-->
<!--                            <p>-->
<!--                                <i class=\"fa fa-envelope\"></i> support@cis.com-->
<!--                                <br><i class=\"fa fa-envelope\"></i> cha@cis-africa.net-->
<!--                            </p>-->
<!--                            <p class=\"font-weight-bold pt-65\">-->
<!--                                146 Boulevard Jean Paul 2, Lomé, Togo-->
<!--                                <br>01 BP : 351 Lomé, Togo-->
<!--                            </p>-->
<!--                            <p class=\"pt-4 mt-3\">-->
<!--                                <i class=\"fa fa-phone-office\"></i> +228 22 22 01 81-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <!--====== FEATURES PART ENDS ======-->


        <!--====== PORTFOLIO 3 PART START ======-->
        <div class=\"portfolio-3-area pt-25 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title text-center\">
                            <h2 class=\"title\">Nous avons faire tellement de choses</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"inphb\" class=\"img-fluid\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/inphb.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET </span>
                                <a href=\"#\"><h4 class=\"title\">SOLUTION DE SAUVEGARDE</h4></a>
                                <p class=\"mt-n1\">
                                    Mise en œuvre d’un nouvel environnement d’infrastructure
                                    serveurs et solution de sauvegarde Backup Exe compose de
                                    serveurs HPE, 360 ...
                                    <!-- compose de :-->
<!--                                    <br>• 04 serveurs HPE ProLiant DL 380 Gen 10-->
<!--                                    <br>• 02 serveurs HPE 360 Gen 10-->
<!--                                    <br>• HPE MSA 2050 SAN Dual Controller-->
<!--                                    <br>• HPE StoreEver MSL 1/8 G2 0-drive Tape Autoloader-->
<!--                                    <br>• 06 licences Windows Server standard  2019-->
<!--                                    <br>07 Licences Backup Exec ( d’une baie MSA4)-->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"orange-banque\" class=\"img-fluid\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <br><a href=\"#\"><h4 class=\"title\"> AZURE STACK HCI</h4></a>
                                <p class=\"pt-65\">
                                    Mise en œuvre d’une infrastructure hyperconvergée Azure
                                    Stack composée de deux (02) serveurs HPE ProLiant DL 380 G10.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"cepici\" class=\"img-fluid\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cepici.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <br> <a href=\"#\"><h4 class=\"title\">DOING BUSINESS</h4></a>
                                <p class=\"pt-65\">
                                    Mise en œuvre de deux Vx block (réseau, sécurité, stockage et computer),
                                    infrastructure hyper convergée hautement disponible
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row justify-content-center pt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"agds\" class=\"img-fluid\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/agds.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET</span>
                                <a href=\"#\"><h4 class=\"title\">MISE EN ŒUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</h4></a>
                                <p>
                                    Mise en œuvre d’une nouvelle infrastructure serveurs et baie :
                                    <br>03 serveurs HPE ProLiant DL380 Gen10
                                    <br>02 HPE StoreEasy 1660 32TB SAS Storage et 01 KVM + console
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img alt=\"mtn\" class=\"img-fluid\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/mtn.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>PROJET </span>
                                <br> <a href=\"#\"><h4 class=\"title\">VXRAIL</h4></a>
                                <p class=\"pt-100\">
                                    Déploiement de la plateforme VXRAIL500 P570 HYBRID
                                    + P570F ALL FLASH sur site Bingerville (6 nœuds vxrail) et sur site Yamoussoukro (3 nœuds)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                        <div class=\"single-portfolio mt-30 h-100\">
                            <div class=\"portfolio-thumb\">
                                <img class=\"img-fluid\" alt=\"cnps\" src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cnps.png' |theme }}\">
                            </div>
                            <div class=\"portfolio-content\">
                                <span>interior design</span>
                                <a href=\"#\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                                <p class=\"pt-65\">
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
                                <span>SOLUTION DE SAUVEGARDE</span>
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
                                <span>REPLICATION DES DONNEES</span>
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
        static $tags = array("partial" => 129);
        static $filters = array("page" => 14, "theme" => 118);
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
