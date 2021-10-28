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

/* /var/www/cis-web-site/themes/cis/pages/expertise.htm */
class __TwigTemplate_cf1ce80ab372cc8d0a2de2c543c08fe31c07bc37ccff08ca063936ee76776cf4 extends \Twig\Template
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
                            <h2 class=\"title\">Expertise</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
        echo "\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("expertise");
        echo "\">Expertise</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
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

        <div class=\"features-area pt-1 mt-n5 pb-120\">
            <div class=\"container mt-n5\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100 text-center\">
                            <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/infra.jpeg");
        echo "\" alt=\"team-member\" style=\"width: 63%;\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\">Infrastructure <br>H & S</h4>
                               <p class=\"\">
                                   L’infrastructure informatique regroupe l’ensemble des équipements matériels (postes de travail,
                                   serveurs, routeurs, périphériques…) et des logiciels (ERP, CRM, messagerie, …) d’une entreprise.
                                   Elle représente l’agencement entre : les différentes applications, les serveurs, les stockages et le réseau
                                   d’entreprise. Tous ces éléments, qui sont connectés entre eux, forment l’infrastructure informatique.
                                   On parle également de système informatique ou d’architecture informatique.
                               </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/microsoft-azure-640x401-1.png");
        echo "\" alt=\"team-member\">
                            <h4 class=\"title\"> Microsoft Azure</h4>
                            <p class=\"\">
                                Microsoft Azure est une plateforme applicative en nuage conçue par Microsoft.
                                C’est un concept de « cloud computing » qui permet de sauvegarder ses
                                données informatiques sur des serveurs distants, d'où l'idée de nuage. 
                                Il s’agit d’une offre d’hébergement d’applications et de donnes que nous
                                pouvons stockés sur leurs serveurs.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/MicrosoftOffice.jpg");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\">Microsoft Office 365</h4>
                                <p class=\"\">
                                    Office 365 est une collection de programmes informatiques intégrant plusieurs
                                    logiciels informatiques, à l’instar d’Outlook, Power point, Excel, Word…
                                    Autrement dit, c’est un ensemble d’applications ayant pour objectif la
                                    facilitation des travaux inhérent à la bureautique.

                                    C’est un outil simplifié, permettant un rendement plus performant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/Virtual_infrastructures.jpeg");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\"> Infrastructure Virtuelle</h4>
                                <p class=\"\">
                                    La virtualisation permet de créer une version virtuelle d’équipements
                                    physiques, comme des serveurs, des applications, des systèmes de stockage ou
                                    des réseaux virtuels ; l’objectif étant de rationaliser et d’optimiser l’utilisation
                                    des ressources physiques pour apporter flexibilité et agilité aux utilisateurs, le
                                    tout dans un environnement virtuel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/backup.png");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\">Archivage Backup</h4>

                                <p class=\"\">
                                    La sauvegarde des données est une opération une copie préventive des
                                    données des systèmes informatique sur des supports indépendants tels que les
                                    disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en sécurité des informations et de pallier toute
                                    éventualité de panne matérielle, d'infection par un logiciel malveillant, et de
                                    suppression volontaire ou fortuite.
                                    L'utilité de la sauvegarde est de pouvoir restaurer le plus rapidement possible
                                    un système après une défaillance ou un incident.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/securite-reseaux-informatiques.jpg");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay \">
                                <h4 class=\"title text-center\">Réseaux et sécurités</h4>
                                <p class=\"\">
                                    Notre Expert réseau et sécurité assure la sécurité, la sûreté et la pérennité
                                    des systèmes et réseaux d’information et de communication au niveau de l’ensemble
                                    d’une entité ou d’un système particulier. Son rôle comporte une dimension technique
                                    forte mais nécessite également une bonne vision managériale et organisationnelle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/print.jpg");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\"> Managed Print Service</h4>
                                <p class=\"\">
                                    Managed Print Service (MPS) désigne l'ensemble de logiciels et méthodes qui permettent la gestion et
                                    l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs
                                    multifonction, etc.).
                                    Dans le contexte économique actuel, la réduction et la maîtrise des coûts sont une priorité.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/infogérence.jpg");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\"> Infogérence</h4>
                                <p class=\"\">
                                    Afin de permettre à nos Clients de se concentrer sur leurs cœurs de métiers respectifs, CIS
                                    AFRICA a développé des offres d’infogérance adaptées et axées principalement à votre besoin.
                                    CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de
                                    votre infrastructure afin de vous permettre de vous recentrer sur votre cœur de métier.
                                    Nous accompagnons également les Directions Informatiques.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/Info_GED.png");
        echo "\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\"> GED</h4>
                                <p class=\"\">
                                    Avec la solution GED CIS vos informations prennent vie et se relient entre elles, elles circulent entre
                                    collègues ou au-delà des frontières de l’entreprise, vous renforcez le travail collaboratif entre les
                                    différents services tout en maitrisant le flux des données.
                                    La rapidité d’accès offerte par l'archivage électronique des documents accroit votre productivité et
                                    renforce votre efficacité.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"pt-240\">
            ";
        // line 207
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 208
        echo "        </div>


        <div class=\"contact-us-area bg_cover pt-115\">
            <div class=\"contact-overlay\">
                <div class=\"container mt-n5\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 mt-n5\">
                            <div class=\"contact-details d-flex mt-n2\">
                                <div class=\"contact-form-area\">
                                    <form action=\"#\">
                                        <div class=\"input-title\">
                                            <h3 class=\"title\">N'hésitez pas à nous contacter</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Nom et prénoms\">
                                                    <i class=\"fal fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"email\" placeholder=\"Email\">
                                                    <i class=\"fal fa-envelope-open\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Téléphone\">
                                                    <i class=\"fal fa-phone\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Objet\">
                                                    <i class=\"fal fa-edit\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-12\">
                                                <div class=\"input-box mt-30\">
                                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Laissez un message\"></textarea>
                                                    <i class=\"fal fa-pencil\"></i>
                                                    <button class=\"main-btn wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" type=\"submit\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                                                        Envoyer le message <i class=\"fal fa-paper-plane\"></i>
                                                    </button>
                                                </div> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- contact details -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>


        <!--====== ABOUT HISTORY PART START ======-->
<!--        <div class=\"about-history-area\">-->
<!--            <div class=\"container\">-->
<!--                <div class=\"row justify-content-center\">-->
<!--                    <div class=\"col-lg-6 col-md-8\">-->
<!--                        <div class=\"section-title text-center\">-->
<!--                            <h2 class=\"title\">Notre Histoire</h2>-->
<!--                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>-->
<!--                        </div> &lt;!&ndash; section title &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-6 col-md-6\">-->
<!--                        <div class=\"history-item  pt-240\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"";
        // line 282
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/presentation/notre_histoire/nos_histoire3.jpg");
        echo "\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    CIS choisit avec soin ses partenaires-->
<!--                                    commerciaux et se donne à fond dans le but-->
<!--                                    De construire des relations durables avec eux.-->
<!--                                    Nous faisons tout ce qui est en notre pouvoir-->
<!--                                    pour que nos employés soient pleinement-->
<!--                                    Engagés avec nos partenaires et qu’ils disposent-->
<!--                                    du niveau d’expertise requis en matière-->
<!--                                    De technologie.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>02</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                        <div class=\"history-item\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/presentation/notre_histoire/nos_histoire4.jpg");
        echo "\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Solutions clés : Nos solutions TIC offrent aux clients des-->
<!--                                    applications innovantes dans le domaine des affaires et des-->
<!--                                    Solutions d’intégration de systèmes pour augmenter l’efficacité et-->
<!--                                    réduire les coûts de la possession totale. CIS offre les-->
<!--                                    Meilleures solutions logicielles et utilise les technologies les plus-->
<!--                                    récentes pour répondre aux attentes de ses clients.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>03</span>-->
<!--                            </div>-->

<!--                            <div class=\"number-box-2\">-->
<!--                                <i class=\"fal fa-plus\"></i>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-6 col-md-6\">-->
<!--                        <div class=\"history-item history-item-2\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"";
        // line 330
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/presentation/notre_histoire/nos_histoire1.jpg");
        echo "\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Nos clients constituent l’épine dorsale de notre société,-->
<!--                                    et nous nous efforçons de gagner leur fidélité à long-->
<!--                                    Terme. Ainsi, CIS accorde une Attention particulière à-->
<!--                                    leurs Commentaires et cherche Continuellement à-->
<!--                                    améliorer Leur expérience.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>01</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->

<!--                        <div class=\"history-item history-item-2\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"";
        // line 350
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/presentation/notre_histoire/nos_histoire2.jpg");
        echo "\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Nous avons la pleine certitude que nos employés-->
<!--                                    constituent la force majeure du groupe grâce à leurs-->
<!--                                    expériences et connaissances.-->
<!--                                    CIS recrute des professionnels de la technologie de-->
<!--                                    l’information titulaires de certifications-->
<!--                                    internationales et elle met à leur disposition des-->
<!--                                    ressources spécifiques qui leur assurent une-->
<!--                                    excellente formation et une mise à jour perpétuelle-->
<!--                                    avec les technologies les plus récentes.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>02</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--            </div> &lt;!&ndash; container &ndash;&gt;-->
<!--        </div>-->
        <!--====== ABOUT HISTORY PART ENDS ======-->

    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/expertise.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 350,  414 => 330,  385 => 304,  360 => 282,  284 => 208,  280 => 207,  259 => 189,  241 => 174,  224 => 160,  204 => 143,  182 => 124,  164 => 109,  142 => 90,  126 => 77,  108 => 62,  56 => 13,  52 => 12,  39 => 1,);
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
                            <h2 class=\"title\">Expertise</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ 'accueil'|page }}\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"{{ 'expertise'|page }}\">Expertise</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
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

        <div class=\"features-area pt-1 mt-n5 pb-120\">
            <div class=\"container mt-n5\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100 text-center\">
                            <img src=\"{{ 'assets/images-cis/infra.jpeg'|theme }}\" alt=\"team-member\" style=\"width: 63%;\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\">Infrastructure <br>H & S</h4>
                               <p class=\"\">
                                   L’infrastructure informatique regroupe l’ensemble des équipements matériels (postes de travail,
                                   serveurs, routeurs, périphériques…) et des logiciels (ERP, CRM, messagerie, …) d’une entreprise.
                                   Elle représente l’agencement entre : les différentes applications, les serveurs, les stockages et le réseau
                                   d’entreprise. Tous ces éléments, qui sont connectés entre eux, forment l’infrastructure informatique.
                                   On parle également de système informatique ou d’architecture informatique.
                               </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/microsoft-azure-640x401-1.png'|theme }}\" alt=\"team-member\">
                            <h4 class=\"title\"> Microsoft Azure</h4>
                            <p class=\"\">
                                Microsoft Azure est une plateforme applicative en nuage conçue par Microsoft.
                                C’est un concept de « cloud computing » qui permet de sauvegarder ses
                                données informatiques sur des serveurs distants, d'où l'idée de nuage. 
                                Il s’agit d’une offre d’hébergement d’applications et de donnes que nous
                                pouvons stockés sur leurs serveurs.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/MicrosoftOffice.jpg' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\">Microsoft Office 365</h4>
                                <p class=\"\">
                                    Office 365 est une collection de programmes informatiques intégrant plusieurs
                                    logiciels informatiques, à l’instar d’Outlook, Power point, Excel, Word…
                                    Autrement dit, c’est un ensemble d’applications ayant pour objectif la
                                    facilitation des travaux inhérent à la bureautique.

                                    C’est un outil simplifié, permettant un rendement plus performant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/Virtual_infrastructures.jpeg' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\"> Infrastructure Virtuelle</h4>
                                <p class=\"\">
                                    La virtualisation permet de créer une version virtuelle d’équipements
                                    physiques, comme des serveurs, des applications, des systèmes de stockage ou
                                    des réseaux virtuels ; l’objectif étant de rationaliser et d’optimiser l’utilisation
                                    des ressources physiques pour apporter flexibilité et agilité aux utilisateurs, le
                                    tout dans un environnement virtuel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/backup.png' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\">Archivage Backup</h4>

                                <p class=\"\">
                                    La sauvegarde des données est une opération une copie préventive des
                                    données des systèmes informatique sur des supports indépendants tels que les
                                    disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en sécurité des informations et de pallier toute
                                    éventualité de panne matérielle, d'infection par un logiciel malveillant, et de
                                    suppression volontaire ou fortuite.
                                    L'utilité de la sauvegarde est de pouvoir restaurer le plus rapidement possible
                                    un système après une défaillance ou un incident.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/securite-reseaux-informatiques.jpg' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay \">
                                <h4 class=\"title text-center\">Réseaux et sécurités</h4>
                                <p class=\"\">
                                    Notre Expert réseau et sécurité assure la sécurité, la sûreté et la pérennité
                                    des systèmes et réseaux d’information et de communication au niveau de l’ensemble
                                    d’une entité ou d’un système particulier. Son rôle comporte une dimension technique
                                    forte mais nécessite également une bonne vision managériale et organisationnelle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/print.jpg' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title text-center\"> Managed Print Service</h4>
                                <p class=\"\">
                                    Managed Print Service (MPS) désigne l'ensemble de logiciels et méthodes qui permettent la gestion et
                                    l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs
                                    multifonction, etc.).
                                    Dans le contexte économique actuel, la réduction et la maîtrise des coûts sont une priorité.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/infogérence.jpg' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\"> Infogérence</h4>
                                <p class=\"\">
                                    Afin de permettre à nos Clients de se concentrer sur leurs cœurs de métiers respectifs, CIS
                                    AFRICA a développé des offres d’infogérance adaptées et axées principalement à votre besoin.
                                    CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de
                                    votre infrastructure afin de vous permettre de vous recentrer sur votre cœur de métier.
                                    Nous accompagnons également les Directions Informatiques.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-12\">
                        <div class=\"single-features mt-30 h-100\">
                            <img src=\"{{ 'assets/images-cis/Info_GED.png' |theme }}\" alt=\"team-member\">
                            <div class=\"team-member-overlay\">
                                <h4 class=\"title\"> GED</h4>
                                <p class=\"\">
                                    Avec la solution GED CIS vos informations prennent vie et se relient entre elles, elles circulent entre
                                    collègues ou au-delà des frontières de l’entreprise, vous renforcez le travail collaboratif entre les
                                    différents services tout en maitrisant le flux des données.
                                    La rapidité d’accès offerte par l'archivage électronique des documents accroit votre productivité et
                                    renforce votre efficacité.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"pt-240\">
            {% partial 'nos-partenaires' %}
        </div>


        <div class=\"contact-us-area bg_cover pt-115\">
            <div class=\"contact-overlay\">
                <div class=\"container mt-n5\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 mt-n5\">
                            <div class=\"contact-details d-flex mt-n2\">
                                <div class=\"contact-form-area\">
                                    <form action=\"#\">
                                        <div class=\"input-title\">
                                            <h3 class=\"title\">N'hésitez pas à nous contacter</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Nom et prénoms\">
                                                    <i class=\"fal fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"email\" placeholder=\"Email\">
                                                    <i class=\"fal fa-envelope-open\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Téléphone\">
                                                    <i class=\"fal fa-phone\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Objet\">
                                                    <i class=\"fal fa-edit\"></i>
                                                </div> 
                                            </div>
                                            <div class=\"col-lg-12\">
                                                <div class=\"input-box mt-30\">
                                                    <textarea name=\"#\" id=\"#\" cols=\"30\" rows=\"10\" placeholder=\"Laissez un message\"></textarea>
                                                    <i class=\"fal fa-pencil\"></i>
                                                    <button class=\"main-btn wow slideInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"0s\" type=\"submit\" style=\"visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: slideInUp;\">
                                                        Envoyer le message <i class=\"fal fa-paper-plane\"></i>
                                                    </button>
                                                </div> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- contact details -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>


        <!--====== ABOUT HISTORY PART START ======-->
<!--        <div class=\"about-history-area\">-->
<!--            <div class=\"container\">-->
<!--                <div class=\"row justify-content-center\">-->
<!--                    <div class=\"col-lg-6 col-md-8\">-->
<!--                        <div class=\"section-title text-center\">-->
<!--                            <h2 class=\"title\">Notre Histoire</h2>-->
<!--                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>-->
<!--                        </div> &lt;!&ndash; section title &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--                <div class=\"row\">-->
<!--                    <div class=\"col-lg-6 col-md-6\">-->
<!--                        <div class=\"history-item  pt-240\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"{{ 'assets/images-cis/presentation/notre_histoire/nos_histoire3.jpg'|theme }}\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    CIS choisit avec soin ses partenaires-->
<!--                                    commerciaux et se donne à fond dans le but-->
<!--                                    De construire des relations durables avec eux.-->
<!--                                    Nous faisons tout ce qui est en notre pouvoir-->
<!--                                    pour que nos employés soient pleinement-->
<!--                                    Engagés avec nos partenaires et qu’ils disposent-->
<!--                                    du niveau d’expertise requis en matière-->
<!--                                    De technologie.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>02</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                        <div class=\"history-item\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"{{ 'assets/images-cis/presentation/notre_histoire/nos_histoire4.jpg'|theme }}\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Solutions clés : Nos solutions TIC offrent aux clients des-->
<!--                                    applications innovantes dans le domaine des affaires et des-->
<!--                                    Solutions d’intégration de systèmes pour augmenter l’efficacité et-->
<!--                                    réduire les coûts de la possession totale. CIS offre les-->
<!--                                    Meilleures solutions logicielles et utilise les technologies les plus-->
<!--                                    récentes pour répondre aux attentes de ses clients.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>03</span>-->
<!--                            </div>-->

<!--                            <div class=\"number-box-2\">-->
<!--                                <i class=\"fal fa-plus\"></i>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=\"col-lg-6 col-md-6\">-->
<!--                        <div class=\"history-item history-item-2\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"{{ 'assets/images-cis/presentation/notre_histoire/nos_histoire1.jpg'|theme }}\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".8s\" data-wow-delay=\".1s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Nos clients constituent l’épine dorsale de notre société,-->
<!--                                    et nous nous efforçons de gagner leur fidélité à long-->
<!--                                    Terme. Ainsi, CIS accorde une Attention particulière à-->
<!--                                    leurs Commentaires et cherche Continuellement à-->
<!--                                    améliorer Leur expérience.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>01</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->

<!--                        <div class=\"history-item history-item-2\">-->
<!--                            <div class=\"history-thumb wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <img width=\"505\" height=\"300\" src=\"{{ 'assets/images-cis/presentation/notre_histoire/nos_histoire2.jpg'|theme }}\" alt=\"history\">-->
<!--                            </div>-->
<!--                            <div class=\"history-content wow fadeInUp\" data-wow-duration=\".1s\" data-wow-delay=\".2s\">-->
<!--                                <span>1990 - Startup</span>-->
<!--                                <h4 class=\"title\">Technical content may have per suasive objectives.</h4>-->
<!--                                <p>-->
<!--                                    Nous avons la pleine certitude que nos employés-->
<!--                                    constituent la force majeure du groupe grâce à leurs-->
<!--                                    expériences et connaissances.-->
<!--                                    CIS recrute des professionnels de la technologie de-->
<!--                                    l’information titulaires de certifications-->
<!--                                    internationales et elle met à leur disposition des-->
<!--                                    ressources spécifiques qui leur assurent une-->
<!--                                    excellente formation et une mise à jour perpétuelle-->
<!--                                    avec les technologies les plus récentes.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class=\"number-box\">-->
<!--                                <span>02</span>-->
<!--                            </div>-->
<!--                        </div> &lt;!&ndash; history item &ndash;&gt;-->
<!--                    </div>-->
<!--                </div> &lt;!&ndash; row &ndash;&gt;-->
<!--            </div> &lt;!&ndash; container &ndash;&gt;-->
<!--        </div>-->
        <!--====== ABOUT HISTORY PART ENDS ======-->

    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/expertise.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 207);
        static $filters = array("page" => 12, "theme" => 62);
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