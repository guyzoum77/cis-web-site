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

/* /var/www/cis-web-site/themes/cis/pages/success-story.htm */
class __TwigTemplate_8ed3c79bf3f7f910356de049e26081e0c5a95a426db5ad18c55dd93ca90163d2 extends \Twig\Template
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
                            <h2 class=\"title\">Success Story</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Success Story</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== PAGE TITLE PART ENDS ======-->

        <!--======  ======-->
        <div class=\"news-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title-2 text-center pl-25 pr-25\">
                            <h2 class=\"title\">Nos Références Clients</h2>
                        </div>
                    </div>
                </div>
                <div class=\"section-title row\">
                    <div class=\"col-12\">
                        <p class=\"title-country\">Côte d'Ivoire</p>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET AZURE STACK HCI</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’une infrastructure hyperconvergée Azure Stack composée
                                    de deux (02) serveurs HPE ProLiant DL 380 G10.
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/inphb.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : INFRASTRUCTURE SERVEURS ET SOLUTION DE SAUVEGARDE</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’un nouvel environnement d’infrastructure serveurs et solution de sauvegarde Backup Exe compose de :
                                    <br>• 04 serveurs HPE ProLiant DL 380 Gen 10
                                    <br>• 02 serveurs HPE 360 Gen 10
                                    <br>• HPE MSA 2050 SAN Dual Controller
                                    <br>• HPE StoreEver MSL 1/8 G2 0-drive Tape Autoloader
                                    <br>• 06 licences Windows Server standard  2019
                                    <br>07 Licences Backup Exec (d’une baie MSA)
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cepici.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET CEPICI</span>
                                <p class=\"text-black\">
                                    Mise en œuvre de deux Vx block (réseau, sécurité, stockage et computer), infrastructure hyper convergée hautement disponible composée de :
                                    <br>• 01 Cisco USC C220; 02 Cisco NEXUS 9148; 02 Cisco NEXUS 3172;
                                    <br>•  02 Cisco NEXUS UCS 5108; 02 Cisco MDS 6248; EMC UNITY 300;
                                    <br>• 02 EMC RPA Gen6; 01 BIG-IP F5; 02 Cisco ASR 1001-X;
                                    <br>•  01 Cisco FMC; 02 Cisco Firepower 4110
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/agds.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : MISE EN ŒUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’une nouvelle infrastructure serveurs et baie composée de 03
                                    serveurs HPE ProLiant DL380 Gen10 ; 02 HPE StoreEasy 1660 32TB SAS Storage et 01 KVM + console
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/mtn.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : VXRAIL </span>
                                <p class=\"text-black\">
                                    Déploiement de la plateforme VXRAIL500 P570 HYBRID + P570F ALL FLASH
                                    sur site Bingerville (6 nœuds vxrail) et sur site Yamoussoukro (3 nœuds)
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cnps.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : MANAGEENGINE</span>
                                <p class=\"text-black\">
                                    Mise en œuvre de l’outil de supervision MANAGEENGINE comprenant :
                                    <br>• Installation et configuration de OPMANAGER PLUS
                                    <br>• Installation et configuration de ADMANAGER PLUS
                                    Installation et configuration de ADSELFSERVICE PLUS
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/bicici.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : Projet de Reprise d’Activité (PRA)</span>
                                <p class=\"text-black\">
                                    Mise en place d’une nouvelle plateforme virtuelle VMWare dans un environnement SAN composée de : 
                                    02 baies DELL UNITY 450F ; 06 serveurs PowerEdge R740xd ; 04 SAN Switch FC DS-6510-B
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/mtn.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : POWERMAX</span>
                                <p class=\"text-black\">
                                    Installation et configuration de PowerMax 2000
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/mtn.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : POWERMAX</span>
                                <p class=\"text-black\">
                                    Installation et configuration de 15 x HPE PROLIANT
                                    DL360 Gen10 et de 05 Serveurs HPE PROLIANT DL380 Gen10
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/orange.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : CEPH</span>
                                <p class=\"text-black\">
                                    Mise œuvre d’un environnement Redhat CEPH composé de 06 serveurs
                                    DELL PowerEdge R740XD 02 serveurs PowerEdge R740
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 175
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/advans.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : VIRTUALISATION</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’un environnement VMWare ESXi 6.7
                                    composé de 02serveurs HP PROLIANT DL 380 G10
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/nsia.png");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET NSIA BANQUE CI</span>
                                <p class=\"text-black\">
                                    Installation et mise en raid de 20 disques
                                    (10 disques sur chaque serveur HPE PROLIANT DL 380 G10)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class=\"checkout-area pt-1\" style=\"background-image: url('assets/images-cis/nous-contacter/action-pattern.png')\">
            <div class=\"user-actions pb-90\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <h3 class=title\">
                                Besoin d'expert ?
                                <br>Nous sommes là pour vous satisfaire.
                            </h3>
                        </div>
                        <div class=\"col-4\">
                            <p class=\"\">
                                <a class=\"main-btn\" href=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contactez-nous");
        echo "\">Contactez-nous</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/success-story.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 213,  263 => 187,  248 => 175,  233 => 163,  216 => 149,  202 => 138,  187 => 126,  168 => 110,  153 => 98,  138 => 86,  118 => 69,  98 => 52,  83 => 40,  51 => 11,  39 => 1,);
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
                            <h2 class=\"title\">Success Story</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ 'accueil'|page }}\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Success Story</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== PAGE TITLE PART ENDS ======-->

        <!--======  ======-->
        <div class=\"news-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title-2 text-center pl-25 pr-25\">
                            <h2 class=\"title\">Nos Références Clients</h2>
                        </div>
                    </div>
                </div>
                <div class=\"section-title row\">
                    <div class=\"col-12\">
                        <p class=\"title-country\">Côte d'Ivoire</p>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/orange-banque.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET AZURE STACK HCI</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’une infrastructure hyperconvergée Azure Stack composée
                                    de deux (02) serveurs HPE ProLiant DL 380 G10.
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/inphb.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : INFRASTRUCTURE SERVEURS ET SOLUTION DE SAUVEGARDE</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’un nouvel environnement d’infrastructure serveurs et solution de sauvegarde Backup Exe compose de :
                                    <br>• 04 serveurs HPE ProLiant DL 380 Gen 10
                                    <br>• 02 serveurs HPE 360 Gen 10
                                    <br>• HPE MSA 2050 SAN Dual Controller
                                    <br>• HPE StoreEver MSL 1/8 G2 0-drive Tape Autoloader
                                    <br>• 06 licences Windows Server standard  2019
                                    <br>07 Licences Backup Exec (d’une baie MSA)
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cepici.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET CEPICI</span>
                                <p class=\"text-black\">
                                    Mise en œuvre de deux Vx block (réseau, sécurité, stockage et computer), infrastructure hyper convergée hautement disponible composée de :
                                    <br>• 01 Cisco USC C220; 02 Cisco NEXUS 9148; 02 Cisco NEXUS 3172;
                                    <br>•  02 Cisco NEXUS UCS 5108; 02 Cisco MDS 6248; EMC UNITY 300;
                                    <br>• 02 EMC RPA Gen6; 01 BIG-IP F5; 02 Cisco ASR 1001-X;
                                    <br>•  01 Cisco FMC; 02 Cisco Firepower 4110
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/agds.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : MISE EN ŒUVRE INFRASTRUCTURE DE REPLICATION DES DONNEES ET SERVEURS</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’une nouvelle infrastructure serveurs et baie composée de 03
                                    serveurs HPE ProLiant DL380 Gen10 ; 02 HPE StoreEasy 1660 32TB SAS Storage et 01 KVM + console
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/mtn.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : VXRAIL </span>
                                <p class=\"text-black\">
                                    Déploiement de la plateforme VXRAIL500 P570 HYBRID + P570F ALL FLASH
                                    sur site Bingerville (6 nœuds vxrail) et sur site Yamoussoukro (3 nœuds)
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/cnps.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : MANAGEENGINE</span>
                                <p class=\"text-black\">
                                    Mise en œuvre de l’outil de supervision MANAGEENGINE comprenant :
                                    <br>• Installation et configuration de OPMANAGER PLUS
                                    <br>• Installation et configuration de ADMANAGER PLUS
                                    Installation et configuration de ADSELFSERVICE PLUS
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/bicici.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : Projet de Reprise d’Activité (PRA)</span>
                                <p class=\"text-black\">
                                    Mise en place d’une nouvelle plateforme virtuelle VMWare dans un environnement SAN composée de : 
                                    02 baies DELL UNITY 450F ; 06 serveurs PowerEdge R740xd ; 04 SAN Switch FC DS-6510-B
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/mtn.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : POWERMAX</span>
                                <p class=\"text-black\">
                                    Installation et configuration de PowerMax 2000
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/mtn.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : POWERMAX</span>
                                <p class=\"text-black\">
                                    Installation et configuration de 15 x HPE PROLIANT
                                    DL360 Gen10 et de 05 Serveurs HPE PROLIANT DL380 Gen10
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div>
                <div class=\"row justify-content-center mt-4\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/orange.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : CEPH</span>
                                <p class=\"text-black\">
                                    Mise œuvre d’un environnement Redhat CEPH composé de 06 serveurs
                                    DELL PowerEdge R740XD 02 serveurs PowerEdge R740
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/advans.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET : VIRTUALISATION</span>
                                <p class=\"text-black\">
                                    Mise en œuvre d’un environnement VMWare ESXi 6.7
                                    composé de 02serveurs HP PROLIANT DL 380 G10
                                </p>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/il-nous-ont-fait-confiance/nsia.png'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>PROJET NSIA BANQUE CI</span>
                                <p class=\"text-black\">
                                    Installation et mise en raid de 20 disques
                                    (10 disques sur chaque serveur HPE PROLIANT DL 380 G10)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class=\"checkout-area pt-1\" style=\"background-image: url('assets/images-cis/nous-contacter/action-pattern.png')\">
            <div class=\"user-actions pb-90\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <h3 class=title\">
                                Besoin d'expert ?
                                <br>Nous sommes là pour vous satisfaire.
                            </h3>
                        </div>
                        <div class=\"col-4\">
                            <p class=\"\">
                                <a class=\"main-btn\" href=\"{{ 'contactez-nous'|page }}\">Contactez-nous</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/success-story.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 11, "theme" => 40);
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
