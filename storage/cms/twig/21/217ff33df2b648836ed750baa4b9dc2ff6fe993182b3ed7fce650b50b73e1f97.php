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

/* /var/www/cis-web-site/themes/cis/pages/nos-services.htm */
class __TwigTemplate_4cf1a49545528136452e1c7d3b4e5030bc8fdcc48460e1097f0843c44cf2f617 extends \Twig\Template
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
        <div class=\"about-experience-area pb-35\">
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

        <div class=\"container\">
            <section class=\"tabs-wrapper\">
                <div class=\"tabs-container\">
                    <div class=\"tabs-block\">
                        <div id=\"tabs-section\" class=\"tabs\">
                            <ul class=\"tab-head\">
                                <li>
                                    <a href=\"#tab-1\" class=\"tab-link active\"><span class=\"tab-label\">Infrastructure H & S</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-2\" class=\"tab-link\"><span class=\"tab-label\">Microsoft Azure</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-3\" class=\"tab-link\"><span class=\"tab-label\">Microsoft Office 365</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-4\" class=\"tab-link\"><span class=\"tab-label\">Archivage Backup</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-5\" class=\"tab-link\"><span class=\"tab-label\">Infrastructure Virtuelle</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-6\" class=\"tab-link\"><span class=\"tab-label\">Réseaux et sécurités</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-7\" class=\"tab-link\"><span class=\"tab-label\">Managed Print Service</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-8\" class=\"tab-link\"><span class=\"tab-label\">Infogérence</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-9\" class=\"tab-link\"><span class=\"tab-label\">GED</span></a>
                                </li>
                            </ul>

                            <section id=\"tab-1\" class=\"tab-body entry-content active active-content\">
                                <h2>Infrastructure H & S</h2>
                                <p>
                                    Il regroupe l’ensemble des équipements matériels (postes de travail, serveurs, routeurs, périphériques…) et des logiciels (ERP, CRM, messagerie, …) d’une entreprise.
                                    Elle représente l’agencement entre : les différentes applications, les serveurs,
                                    les stockages et le réseau d’entreprise. Tous ces éléments, qui sont connectés entre eux,
                                    forment l’infrastructure informatique. On parle également de système informatique ou
                                    d’architecture informatique.
                                    Comme Hardware CIS propose entre autre:
                                    Des ordinateurs portables et de bureau Des Imprimantes Des serveurs, des baies de stockages de dernières générations Des Appliances de sauvegarde
                                    Des switchs, routeurs, Firewall… Des racks
                                    Comme solutions softwares nous proposons entre autres :
                                    OS : Windows Linux Unix
                                    Monitoring : PRTG MANAGE ENGINE
                                    SIEM : ArcSight Qradar OUTILS DE SAUVEGARDE Veeam BACKUP Dell EMC Networker Veritas netbackup
                                    Backup exe
                                </p>
                            </section>

                            <section id=\"tab-2\" class=\"tab-body entry-content\">
                                <h2>Microsoft Azure</h2>
                                <p class=\"p-color\">
                                    C'est une plateforme applicative en nuage conçue par Microsoft. C’est un concept de « cloud computing » qui permet de sauvegarder ses données informatiques sur des serveurs distants, d'où l'idée de nuage. 
                                    <br>Il s’agit d’une offre d’hébergement d’applications et de donnes que nous pouvons stockés sur leurs serveurs. Et également des services de stockage et synchronisation des données, bus de messages, contacts etc…
                                    Un ensemble d'API permettent d'utiliser et d'accéder à cette plateforme et aux services proposés. Un environnement d'exécution (le Live Operating Environment) permet une intégration avec les principaux systèmes d'exploitation existant comme Windows, MacOs et Windows phone.
                                    <br>Comme les autres fournisseurs de services Cloud, Microsoft Azure <span class=\"font-weight-bold\">permet de profiter de ressources de Cloud Computing à la demande.</span> Il permet aux entreprises de faire d’importantes économies en leur évitant d’avoir à ériger un centre de données sur site, de le maintenir, de le mettre à jour, de le refroidir et de payer l’électricité.
                                    <br>Cette plateforme Cloud permet aussi de <span class=\"font-weight-bold\">simplifier l’utilisation et l’administration de technologies Microsoft</span> comme Windows Server, Active Directory et SharePoint. Ainsi, les équipes informatiques peuvent se concentrer sur d’autres projets.
                                    <br><span class=\"font-weight-bold\">Microsoft Azure :  les différents services</span>
                                    <br>Microsoft Azure <span class=\"font-weight-bold\">regroupe différents services Cloud</span>. Comme chez les concurrents, on retrouve notamment un service de stockage, des machines virtuelles, et des réseaux de diffusion de contenu. Azure propose également des services exploitant les technologies propriétaires de Microsoft.
                                    Par exemple, RemoteApp <span class=\"font-weight-bold\">permet le déploiement de programmes Windows</span> sur différents OS par le biais d’une machine virtuelle. De même, la plateforme regroupe des versions Cloud des solutions d’entreprise populaires de Microsoft, comme Active Directory ou SQL Server.
                                    Parmi les <span class=\"font-weight-bold\">autres services les plus populaires de Microsoft Azure</span>, on retrouve Azure IoT Suite permettant de connecter et de surveiller les objets connectés. Ce service offre aussi des fonctionnalités de télémétrie et d’analyse.
                                    Le service HDInsight est un déploiement customisé de la plateforme Big Data Hadoop. Azure Cosmos DB est une base de données NoSQL hébergée pour des cas d’usage spécifiques. Azure Media Services propose des services de lecture, d’indexation, de transcodage et de protection de contenu vidéo.
                                    Au total, <span class=\"font-weight-bold\">Microsoft Azure propose plus d’une vingtaine de catégories</span> de services différentes. Outre les services de calcul, de stockage, de développement web et mobile, on retrouve aussi des services d’intégration, de networking, de conteneurisation et d’analyse de données.
                                </p>
                            </section>

                            <section id=\"tab-3\" class=\"tab-body entry-content\">
                                <h2>Office 365</h2>
                                <p class=\"p-color\">
                                    C'est une collection de programmes informatiques intégrant plusieurs logiciels informatiques, à l’instar d’Outlook, Power point, Excel, Word…
                                    Autrement dit, c’est un ensemble d’applications ayant pour objectif la facilitation des travaux inhérent à la bureautique. C’est un outil simplifié, permettant un rendement plus performant, que ce soit dans le traitement de textes, des données de l’entreprise ou de la transmission des documents. On peut aussi le considérer comme une suite bureautique ayant pour outils Word, Excel, Outlook, OneNote, Publisher, One drive entreprise, SharePoint, Microsoft team, Yammer. Office365 regorge un éventail d’offres qu’il met à votre disposition

                                    <br>Une fois ces services configurés et leurs modèles d'emploi bien personnalisés, une solution d'affaires voit le jour avec un environnement unifié de travail, à la fois ouvert et sécurisé, accessible au personnel et à ses partenaires d'affaires.  
                                    Il serait incomplet de terminer cette partie du guide sans <span class=\"font-weight-bold\">comparer Office 365 à ses concurrents.</span> Ils sont plusieurs à offrir des services sur l'infonuagique. On y retrouve Google G Suite, IBM Cloud, Zoho, HyperOffice et quelques autres. 
                                    C'est d'abord par l'étendue de ses services, sa richesse fonctionnelle et sa flexibilité qu'Office 365 se démarque nettement en tête.
                                    La cohésion d'ensemble des services d'Office 365 est aussi remarquable et fait l'objet d'innovations en continue par Microsoft. Entre autres, plusieurs développements sont en cours pour simplifier l'automatisation de processus métier de partout en tout temps.
                                    Avec Office 365, vous n'avez pas à toujours à être connecté à l'Internet pour accéder aux documents, données et courriels.
                                    Avec Microsoft, vous ne risqué pas de subir les tracas d'un éventuel rachat ou fermeture de l'hébergeur.
                                    CIS WEST AFRICA vos propose Microsoft office 365 avec des garanties de conformité et de sécurité qui répondent aux enjeux des très grandes entreprises en la matière.

                                </p>
                            </section>

                            <section id=\"tab-4\" class=\"tab-body entry-content\">
                                <h2>ARCHIVAGE & BACKUP</h2>
                                <p class=\"p-color\">
                                    La sauvegarde des données est une opération une copie préventive des données des systèmes informatique sur des supports indépendants tels que les disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en sécurité des informations et de pallier toute éventualité de panne matérielle, d'infection par un logiciel malveillant, et de suppression volontaire ou fortuite.
                                    L'utilité de la sauvegarde est de pouvoir restaurer le plus rapidement possible un système après une défaillance ou un incident.
                                    Les avantages de la sauvegarde
                                    <br><span class=\"font-weight-bold\">• Protéger les données.</span>
                                    <br><span class=\"font-weight-bold\">• Rendre les données disponibles pour les utilisateurs.</span>

                                    <br>Les solutions de sauvegarde que CIS propose sont en entre autres :
                                    <br><span class=\"font-weight-bold\">- Veeam Backup and Replication</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Networker</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Avamar</span>
                                    <br><span class=\"font-weight-bold\">- Veritas Backup Exec</span>
                                    <br><span class=\"font-weight-bold\">- Veritas NetBAckup</span>
                                </p>
                            </section>

                            <section id=\"tab-5\" class=\"tab-body entry-content\">
                                <h2>INFRASTRUCTURE VIRTUELLE</h2>

                                <p class=\"p-color\">
                                    La virtualisation permet de créer une version virtuelle d’équipements physiques, comme des serveurs, des applications, des systèmes de stockage ou des réseaux virtuels ; l’objectif étant de rationaliser et d’optimiser l’utilisation des ressources physiques pour apporter flexibilité et agilité aux utilisateurs, le tout dans un environnement virtuel.
                                    <span class=\"font-weight-bold\">Les avantages de la virtualisation</span>
                                    <br>• Une meilleure répartition des charges,
                                    <br>• Un gain de place (moins de serveurs physiques nécessaires, par exemple)
                                    <br>• Des économies d’énergie, puisque moins d’équipements fonctionnent simultanément, donc économies financières également,
                                    <br>• Une continuité de service,
                                    <br>• La centralisation des ressources informatiques,
                                    <br>• Plus de disponibilité : les opérations de migrations ou de sauvegardes, par exemple, peuvent être exécutées pendant l’exploitation, sans interruption de service,
                                    <br>• Le renforcement de la reprise d’activité,
                                    <br>• Une meilleure sauvegarde des données, en cas d’incident,
                                    <br>• Plus de mobilité pour les utilisateurs dans la mesure où les applications sont accessibles depuis n’importe quel poste ou système d’exploitation,
                                    <br>• Un niveau de sécurité renforcé.

                                    <br><span class=\"font-weight-bold\">Les solutions de virtualisations que CIS propose :</span>
                                    <br>- VMware
                                    <br>- Hyper V
                                    <br>- Nutanix
                                    <br>- Citrix
                                    <br>- OVM
                                </p>
                            </section>

                            <section id=\"tab-6\" class=\"tab-body entry-content\">
                                <h2>RESEAUX ET SECURITE</h2>

                                <p class=\"\">
                                    Notre Expert réseau et sécurité assure la sécurité, la sûreté et la pérennité des systèmes et réseaux d’information et de communication au niveau de l’ensemble d’une entité ou d’un système particulier.
                                    <br>Son rôle comporte une dimension technique forte mais nécessite également une bonne vision managériale et organisationnelle. Notre Expert   effectue un diagnostic avant de proposer des procédures de sécurité. Ce diagnostic permet à la direction de l’entreprise d’avoir conscience des failles de sécurité et ainsi de prendre des décisions en connaissance de cause. Elles permettent également une rationalisation du système d’information.
                                    <br>Ainsi, notre Expert sécurité Identifie en premier les lieux les risques et définie la politique de sécurité en réalisant des audits du système de sécurité, le plus souvent avec l’aide de prestataires et en analysant les risques et les dysfonctionnements, les marges d’amélioration des systèmes de sécurité afin d’établir un plan de prévention des risques informatiques et un plan de continuité d’activité ou plan de maintien en conditions opérationnelles du SI.
                                    <br>L’Expert réseau et sécurité s’occupe de la mise en œuvre et suivi du dispositif de sécurité en appliquant les normes et standards de sécurité et en mettant en place les méthodes et outils de sécurité adaptés, et accompagnant leur implémentation auprès des utilisateurs.
                                    <br>Il s’occupe aussi de la communication et formation sur les normes de sécurité en réalisant le référentiel de sécurité, l’actualisant régulièrement, en assurer la diffusion et veiller à son application.
                                    <br>Enfin, notre expert réseau et sécurité se charge de la veille technologique et réglementaire en assurant une veille technologique, de manière à garantir la sécurité logique et physique du système d’information et en assurant une veille réglementaire sur la protection des données personnelles.
                                    Missions principales
                                    <br><span class=\"font-weight-bold\">Définition des objectifs généraux de sécurité des systèmes de la société</span>
                                    <br><span class=\"font-weight-bold\">Définition et mise en place des règles et procédures de sécurité</span>
                                    <br><span class=\"font-weight-bold\">Prise en compte des évolutions réglementaires dans la politique de sécurité</span>
                                    <br><span class=\"font-weight-bold\">Gestion des risques SSI encourus par les systèmes et réseaux d’information et de communication</span>
                                    <br><span class=\"font-weight-bold\">Audit et administration du domaine sécurité des systèmes d’information (SSI)</span>
                                    <br><span class=\"font-weight-bold\">Vérification de la pertinence et de la performance du système de sécurité des systèmes d’information, des outils associés et des réseaux de télécommunication.</span>
                                    <br>Vous êtes responsable de la sécurité de votre réseau. Notre équipe de services consultatifs de sécurité vous aidera à progresser avec la stratégie appropriée afin de protéger vos activités numériques.
                                    <br>Utilisez nos services de mise en œuvre pour intégrer une étendue de technologies de sécurité et migrez à partir d’autres solutions, incluant les anciens produits. Ceci vous permettra aussi d’optimiser vos technologies de sécurité existante pour améliorer l'efficacité de la sécurité.

                                </p>
                            </section>

                            <section id=\"tab-7\" class=\"tab-body entry-content\">
                                <h2>Managed Print Service MPS</h2>
                                <p>
                                    Il désigne l'ensemble de logiciels et méthodes qui permettent la gestion et l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.).
                                    <br>Dans le contexte économique actuel, la réduction et la maîtrise des coûts sont une priorité pour les entreprises. Ça implique l’intégration de la gestion documentaire dans les plans de dépenses stratégiques.
                                    <br>CIS, vous propose de mettre en place une politique d’impression globale via une solution de MPS afin de :
                                    <br><span class=\"font-weight-bold\">Réduire les coûts liés aux documents,</span>
                                    <br><span class=\"font-weight-bold\">Maîtriser les coûts d’impression,</span>
                                    <br><span class=\"font-weight-bold\">Augmenter la productivité,</span>
                                    <br><span class=\"font-weight-bold\">Réduire les déchets (papiers, cartouches etc.),</span>
                                    <br><span class=\"font-weight-bold\">Améliorer le cycle de vie des documents,</span>
                                    <br><span class=\"font-weight-bold\">Avoir un statut d’entreprise citoyenne environnemental.</span>

                                    <br>Un audit et des conseils personnalisés pour optimiser les coûts :
                                    <br>Premièrement, on audite attentivement votre situation actuelle (mesure des coûts d’impression, analyse des volumes et étude des besoins) pour mieux comprendre et optimiser votre besoin en impression.
                                    <br>À partir de là, on identifie les zones de gaspillages cachées, on rationalise le nombre de périphériques et de fournisseurs à gérer et on vous donne nos conseils pour superviser et changer vos habitudes d’impression. Et par la même occasion, vos impressions deviennent plus sûres, plus écologiques et plus ergonomiques, aussi bien pour les utilisateurs que pour le département informatique.
                                    CIS supervise et on gère pour vous toute votre infrastructure d‘impression, et on supprime des activités quotidiennes et répétitives. En résumé, on vous fait gagner du temps et de l’argent !

                                </p>
                            </section>

                            <section id=\"tab-8\" class=\"tab-body entry-content\">
                                <h2>Infogérence</h2>
                                <p>
                                    Afin de permettre à nos Clients de se concentrer sur leurs cœurs de métiers respectifs, CIS AFRICA a développé des offres d’infogérance adaptées et axées principalement à votre besoin.
                                    <br>CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de votre infrastructure afin de vous permettre de vous recentrer sur votre cœur de métier.
                                    <br>Nous accompagnons également les Directions Informatiques dans l’étude et dans la mise en œuvre des projets d’infogérance et offre des solutions d’exploitation adaptées pour chacune d’elles.
                                    <br>Nos Offres CIS AFRICA vous propose par ses contrats d’infogérance de prendre en charge tout ou une partie de votre fonction informatique durant une période définie. Ce service permet de :
                                    Gérer votre infrastructure et votre Matériels informatique
                                    <br>Disposer d’équipes qualifiées et compétentes, formées aux dernières solutions et technologies
                                    <br>Agir rapidement et efficacement sur votre préoccupation.
                                    <br>Gérer l’évolution de votre infrastructure et les applications de votre système d’information
                                    Services & Clauses
                                    <br>Selon les besoins du client, CIS AFRICA assure une prestation de haut niveau selon le portefeuille du client, à savoir :
                                    <br>Le maintien en conditions opérationnelles du Matériels informatique
                                    <br>L'assistance aux utilisateurs
                                    <br>La maintenance de préventive et curative
                                    Avantages
                                    Grâce à nos différents types de contrats d’infogérance, nous nous adaptons à vos besoins. Nous vous offrons quelques nombreux avantages :
                                    <br>Le but initial est d’externaliser tout le processus informatique de votre société. Théoriquement, vous allez ainsi pouvoir concentrer les efforts de votre société sur son savoir-faire, sur ses produits et ses services. CIS AFRICA gèrera votre parc informatique à votre place, ce qui vous permettra de réduire vos coûts.
                                    <br>Nous sommes des experts en la matière nous nous imprégnons des dernières technologies et méthodes à mettre en place pour optimiser votre parc informatique.
                                    <br>Nous offrons un moyen sûr pour le bon fonctionnement de votre entreprise.
                                    CIS AFRICA a des obligations de moyens et de résultats, c'est un gage de qualité. Nous avons une vision extérieure et nous aidons à l'évolution de votre entreprise.
                                </p>
                            </section>

                            <section id=\"tab-9\" class=\"tab-body entry-content\">
                                <h2>GED</h2>
                                <p>
                                    Avec la solution GED  CIS vos informations prennent vie et se relient entre elles, elles circulent entre collègues ou au-delà des frontières de l’entreprise, vous renforcez le travail collaboratif entre les différents services tout en maitrisant le flux des données.
                                    <br>La rapidité d’accès offerte par l'archivage électronique des documents accroit votre productivité et renforce votre efficacité.
                                    <br>La Gestion Électronique des Documents utilise des outils et des fonctionnalités pour gérer toutes les étapes du cycle de vie d'un document numérique :
                                    <br>Création ou acquisition du document (ex : numérisation) ;
                                    <br>Stockage, indexation et organisation du document électronique ;
                                    <br>Gestion de la sécurité des données du document électronique ;
                                    <br>Recherche, consultation du document électronique et échange des informations ;
                                    <br>Archivage électronique du document durant son délai de conservation.

                                    <br> <span class=\"font-weight-bold\">À QUOI SERT LA GED POUR votre ENTREPRISES ?</span>
                                    <br>Numériser des documents papier est parfois indispensable pour les entreprises (travail en ligne, échange d'informations). Mais les documents électroniques nécessitent une gestion à part entière : organisation des fichiers, protection du contenu, etc. Mettre en place un projet GED permet aux entreprises d'optimiser la gestion des fichiers (numérisation, classement, archivage…) tout en garantissant leur validité juridique.
                                    Les solutions GED permettent de faciliter la recherche documentaire, le stockage, l'échange, grâce à un logiciel GED à l'interface intuitive. Les données et les contenus de l'entreprise sont accessibles 24 h/24 dans le cloud sur PC, tablette ou smartphone. L'interface peut être également reliée avec les différents logiciels métiers de l'entreprise. Par exemple, le contenu des factures fournisseurs est communiqué au logiciel de gestion comptable dès leur stockage sur l'application. Il sert alors aussi de base unique documentaire administrative.
                                     
                                    <br><span class=\"font-weight-bold\">QUELS SONT LES BÉNÉFICES DE LA GED ?</span>
                                    <br>La mise en place d'une solution GED présente de nombreux atouts par rapport à une gestion classique des documents. Elle permet de réaliser des économies importantes sur l'impression, la diffusion et l'archivage des documents papier. De plus, l'automatisation de certains processus métier et la recherche documentaire facilitée représentent un gros gain de temps. Les collaborateurs de l'entreprise peuvent se concentrer sur du travail à réelle valeur ajoutée. De plus, la GED se charge de donner la même valeur juridique au fichier numérique qu'à son document papier original. Il devient alors très simple de trouver une information demandée par l'URSSAF ou par les impôts. Enfin, la dématérialisation et l'utilisation d'un outil de GED présentent une dimension environnementale assez évidente, grâce à la réduction du papier.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class=\"pt-240\">
            ";
        // line 269
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 270
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
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/pages/nos-services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 270,  309 => 269,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"body\">
        <div class=\"about-experience-area pb-35\">
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

        <div class=\"container\">
            <section class=\"tabs-wrapper\">
                <div class=\"tabs-container\">
                    <div class=\"tabs-block\">
                        <div id=\"tabs-section\" class=\"tabs\">
                            <ul class=\"tab-head\">
                                <li>
                                    <a href=\"#tab-1\" class=\"tab-link active\"><span class=\"tab-label\">Infrastructure H & S</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-2\" class=\"tab-link\"><span class=\"tab-label\">Microsoft Azure</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-3\" class=\"tab-link\"><span class=\"tab-label\">Microsoft Office 365</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-4\" class=\"tab-link\"><span class=\"tab-label\">Archivage Backup</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-5\" class=\"tab-link\"><span class=\"tab-label\">Infrastructure Virtuelle</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-6\" class=\"tab-link\"><span class=\"tab-label\">Réseaux et sécurités</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-7\" class=\"tab-link\"><span class=\"tab-label\">Managed Print Service</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-8\" class=\"tab-link\"><span class=\"tab-label\">Infogérence</span></a>
                                </li>
                                <li>
                                    <a href=\"#tab-9\" class=\"tab-link\"><span class=\"tab-label\">GED</span></a>
                                </li>
                            </ul>

                            <section id=\"tab-1\" class=\"tab-body entry-content active active-content\">
                                <h2>Infrastructure H & S</h2>
                                <p>
                                    Il regroupe l’ensemble des équipements matériels (postes de travail, serveurs, routeurs, périphériques…) et des logiciels (ERP, CRM, messagerie, …) d’une entreprise.
                                    Elle représente l’agencement entre : les différentes applications, les serveurs,
                                    les stockages et le réseau d’entreprise. Tous ces éléments, qui sont connectés entre eux,
                                    forment l’infrastructure informatique. On parle également de système informatique ou
                                    d’architecture informatique.
                                    Comme Hardware CIS propose entre autre:
                                    Des ordinateurs portables et de bureau Des Imprimantes Des serveurs, des baies de stockages de dernières générations Des Appliances de sauvegarde
                                    Des switchs, routeurs, Firewall… Des racks
                                    Comme solutions softwares nous proposons entre autres :
                                    OS : Windows Linux Unix
                                    Monitoring : PRTG MANAGE ENGINE
                                    SIEM : ArcSight Qradar OUTILS DE SAUVEGARDE Veeam BACKUP Dell EMC Networker Veritas netbackup
                                    Backup exe
                                </p>
                            </section>

                            <section id=\"tab-2\" class=\"tab-body entry-content\">
                                <h2>Microsoft Azure</h2>
                                <p class=\"p-color\">
                                    C'est une plateforme applicative en nuage conçue par Microsoft. C’est un concept de « cloud computing » qui permet de sauvegarder ses données informatiques sur des serveurs distants, d'où l'idée de nuage. 
                                    <br>Il s’agit d’une offre d’hébergement d’applications et de donnes que nous pouvons stockés sur leurs serveurs. Et également des services de stockage et synchronisation des données, bus de messages, contacts etc…
                                    Un ensemble d'API permettent d'utiliser et d'accéder à cette plateforme et aux services proposés. Un environnement d'exécution (le Live Operating Environment) permet une intégration avec les principaux systèmes d'exploitation existant comme Windows, MacOs et Windows phone.
                                    <br>Comme les autres fournisseurs de services Cloud, Microsoft Azure <span class=\"font-weight-bold\">permet de profiter de ressources de Cloud Computing à la demande.</span> Il permet aux entreprises de faire d’importantes économies en leur évitant d’avoir à ériger un centre de données sur site, de le maintenir, de le mettre à jour, de le refroidir et de payer l’électricité.
                                    <br>Cette plateforme Cloud permet aussi de <span class=\"font-weight-bold\">simplifier l’utilisation et l’administration de technologies Microsoft</span> comme Windows Server, Active Directory et SharePoint. Ainsi, les équipes informatiques peuvent se concentrer sur d’autres projets.
                                    <br><span class=\"font-weight-bold\">Microsoft Azure :  les différents services</span>
                                    <br>Microsoft Azure <span class=\"font-weight-bold\">regroupe différents services Cloud</span>. Comme chez les concurrents, on retrouve notamment un service de stockage, des machines virtuelles, et des réseaux de diffusion de contenu. Azure propose également des services exploitant les technologies propriétaires de Microsoft.
                                    Par exemple, RemoteApp <span class=\"font-weight-bold\">permet le déploiement de programmes Windows</span> sur différents OS par le biais d’une machine virtuelle. De même, la plateforme regroupe des versions Cloud des solutions d’entreprise populaires de Microsoft, comme Active Directory ou SQL Server.
                                    Parmi les <span class=\"font-weight-bold\">autres services les plus populaires de Microsoft Azure</span>, on retrouve Azure IoT Suite permettant de connecter et de surveiller les objets connectés. Ce service offre aussi des fonctionnalités de télémétrie et d’analyse.
                                    Le service HDInsight est un déploiement customisé de la plateforme Big Data Hadoop. Azure Cosmos DB est une base de données NoSQL hébergée pour des cas d’usage spécifiques. Azure Media Services propose des services de lecture, d’indexation, de transcodage et de protection de contenu vidéo.
                                    Au total, <span class=\"font-weight-bold\">Microsoft Azure propose plus d’une vingtaine de catégories</span> de services différentes. Outre les services de calcul, de stockage, de développement web et mobile, on retrouve aussi des services d’intégration, de networking, de conteneurisation et d’analyse de données.
                                </p>
                            </section>

                            <section id=\"tab-3\" class=\"tab-body entry-content\">
                                <h2>Office 365</h2>
                                <p class=\"p-color\">
                                    C'est une collection de programmes informatiques intégrant plusieurs logiciels informatiques, à l’instar d’Outlook, Power point, Excel, Word…
                                    Autrement dit, c’est un ensemble d’applications ayant pour objectif la facilitation des travaux inhérent à la bureautique. C’est un outil simplifié, permettant un rendement plus performant, que ce soit dans le traitement de textes, des données de l’entreprise ou de la transmission des documents. On peut aussi le considérer comme une suite bureautique ayant pour outils Word, Excel, Outlook, OneNote, Publisher, One drive entreprise, SharePoint, Microsoft team, Yammer. Office365 regorge un éventail d’offres qu’il met à votre disposition

                                    <br>Une fois ces services configurés et leurs modèles d'emploi bien personnalisés, une solution d'affaires voit le jour avec un environnement unifié de travail, à la fois ouvert et sécurisé, accessible au personnel et à ses partenaires d'affaires.  
                                    Il serait incomplet de terminer cette partie du guide sans <span class=\"font-weight-bold\">comparer Office 365 à ses concurrents.</span> Ils sont plusieurs à offrir des services sur l'infonuagique. On y retrouve Google G Suite, IBM Cloud, Zoho, HyperOffice et quelques autres. 
                                    C'est d'abord par l'étendue de ses services, sa richesse fonctionnelle et sa flexibilité qu'Office 365 se démarque nettement en tête.
                                    La cohésion d'ensemble des services d'Office 365 est aussi remarquable et fait l'objet d'innovations en continue par Microsoft. Entre autres, plusieurs développements sont en cours pour simplifier l'automatisation de processus métier de partout en tout temps.
                                    Avec Office 365, vous n'avez pas à toujours à être connecté à l'Internet pour accéder aux documents, données et courriels.
                                    Avec Microsoft, vous ne risqué pas de subir les tracas d'un éventuel rachat ou fermeture de l'hébergeur.
                                    CIS WEST AFRICA vos propose Microsoft office 365 avec des garanties de conformité et de sécurité qui répondent aux enjeux des très grandes entreprises en la matière.

                                </p>
                            </section>

                            <section id=\"tab-4\" class=\"tab-body entry-content\">
                                <h2>ARCHIVAGE & BACKUP</h2>
                                <p class=\"p-color\">
                                    La sauvegarde des données est une opération une copie préventive des données des systèmes informatique sur des supports indépendants tels que les disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en sécurité des informations et de pallier toute éventualité de panne matérielle, d'infection par un logiciel malveillant, et de suppression volontaire ou fortuite.
                                    L'utilité de la sauvegarde est de pouvoir restaurer le plus rapidement possible un système après une défaillance ou un incident.
                                    Les avantages de la sauvegarde
                                    <br><span class=\"font-weight-bold\">• Protéger les données.</span>
                                    <br><span class=\"font-weight-bold\">• Rendre les données disponibles pour les utilisateurs.</span>

                                    <br>Les solutions de sauvegarde que CIS propose sont en entre autres :
                                    <br><span class=\"font-weight-bold\">- Veeam Backup and Replication</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Networker</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Avamar</span>
                                    <br><span class=\"font-weight-bold\">- Veritas Backup Exec</span>
                                    <br><span class=\"font-weight-bold\">- Veritas NetBAckup</span>
                                </p>
                            </section>

                            <section id=\"tab-5\" class=\"tab-body entry-content\">
                                <h2>INFRASTRUCTURE VIRTUELLE</h2>

                                <p class=\"p-color\">
                                    La virtualisation permet de créer une version virtuelle d’équipements physiques, comme des serveurs, des applications, des systèmes de stockage ou des réseaux virtuels ; l’objectif étant de rationaliser et d’optimiser l’utilisation des ressources physiques pour apporter flexibilité et agilité aux utilisateurs, le tout dans un environnement virtuel.
                                    <span class=\"font-weight-bold\">Les avantages de la virtualisation</span>
                                    <br>• Une meilleure répartition des charges,
                                    <br>• Un gain de place (moins de serveurs physiques nécessaires, par exemple)
                                    <br>• Des économies d’énergie, puisque moins d’équipements fonctionnent simultanément, donc économies financières également,
                                    <br>• Une continuité de service,
                                    <br>• La centralisation des ressources informatiques,
                                    <br>• Plus de disponibilité : les opérations de migrations ou de sauvegardes, par exemple, peuvent être exécutées pendant l’exploitation, sans interruption de service,
                                    <br>• Le renforcement de la reprise d’activité,
                                    <br>• Une meilleure sauvegarde des données, en cas d’incident,
                                    <br>• Plus de mobilité pour les utilisateurs dans la mesure où les applications sont accessibles depuis n’importe quel poste ou système d’exploitation,
                                    <br>• Un niveau de sécurité renforcé.

                                    <br><span class=\"font-weight-bold\">Les solutions de virtualisations que CIS propose :</span>
                                    <br>- VMware
                                    <br>- Hyper V
                                    <br>- Nutanix
                                    <br>- Citrix
                                    <br>- OVM
                                </p>
                            </section>

                            <section id=\"tab-6\" class=\"tab-body entry-content\">
                                <h2>RESEAUX ET SECURITE</h2>

                                <p class=\"\">
                                    Notre Expert réseau et sécurité assure la sécurité, la sûreté et la pérennité des systèmes et réseaux d’information et de communication au niveau de l’ensemble d’une entité ou d’un système particulier.
                                    <br>Son rôle comporte une dimension technique forte mais nécessite également une bonne vision managériale et organisationnelle. Notre Expert   effectue un diagnostic avant de proposer des procédures de sécurité. Ce diagnostic permet à la direction de l’entreprise d’avoir conscience des failles de sécurité et ainsi de prendre des décisions en connaissance de cause. Elles permettent également une rationalisation du système d’information.
                                    <br>Ainsi, notre Expert sécurité Identifie en premier les lieux les risques et définie la politique de sécurité en réalisant des audits du système de sécurité, le plus souvent avec l’aide de prestataires et en analysant les risques et les dysfonctionnements, les marges d’amélioration des systèmes de sécurité afin d’établir un plan de prévention des risques informatiques et un plan de continuité d’activité ou plan de maintien en conditions opérationnelles du SI.
                                    <br>L’Expert réseau et sécurité s’occupe de la mise en œuvre et suivi du dispositif de sécurité en appliquant les normes et standards de sécurité et en mettant en place les méthodes et outils de sécurité adaptés, et accompagnant leur implémentation auprès des utilisateurs.
                                    <br>Il s’occupe aussi de la communication et formation sur les normes de sécurité en réalisant le référentiel de sécurité, l’actualisant régulièrement, en assurer la diffusion et veiller à son application.
                                    <br>Enfin, notre expert réseau et sécurité se charge de la veille technologique et réglementaire en assurant une veille technologique, de manière à garantir la sécurité logique et physique du système d’information et en assurant une veille réglementaire sur la protection des données personnelles.
                                    Missions principales
                                    <br><span class=\"font-weight-bold\">Définition des objectifs généraux de sécurité des systèmes de la société</span>
                                    <br><span class=\"font-weight-bold\">Définition et mise en place des règles et procédures de sécurité</span>
                                    <br><span class=\"font-weight-bold\">Prise en compte des évolutions réglementaires dans la politique de sécurité</span>
                                    <br><span class=\"font-weight-bold\">Gestion des risques SSI encourus par les systèmes et réseaux d’information et de communication</span>
                                    <br><span class=\"font-weight-bold\">Audit et administration du domaine sécurité des systèmes d’information (SSI)</span>
                                    <br><span class=\"font-weight-bold\">Vérification de la pertinence et de la performance du système de sécurité des systèmes d’information, des outils associés et des réseaux de télécommunication.</span>
                                    <br>Vous êtes responsable de la sécurité de votre réseau. Notre équipe de services consultatifs de sécurité vous aidera à progresser avec la stratégie appropriée afin de protéger vos activités numériques.
                                    <br>Utilisez nos services de mise en œuvre pour intégrer une étendue de technologies de sécurité et migrez à partir d’autres solutions, incluant les anciens produits. Ceci vous permettra aussi d’optimiser vos technologies de sécurité existante pour améliorer l'efficacité de la sécurité.

                                </p>
                            </section>

                            <section id=\"tab-7\" class=\"tab-body entry-content\">
                                <h2>Managed Print Service MPS</h2>
                                <p>
                                    Il désigne l'ensemble de logiciels et méthodes qui permettent la gestion et l’optimisation des dispositifs de production de documents (parc d’imprimantes, copieurs multifonction, etc.).
                                    <br>Dans le contexte économique actuel, la réduction et la maîtrise des coûts sont une priorité pour les entreprises. Ça implique l’intégration de la gestion documentaire dans les plans de dépenses stratégiques.
                                    <br>CIS, vous propose de mettre en place une politique d’impression globale via une solution de MPS afin de :
                                    <br><span class=\"font-weight-bold\">Réduire les coûts liés aux documents,</span>
                                    <br><span class=\"font-weight-bold\">Maîtriser les coûts d’impression,</span>
                                    <br><span class=\"font-weight-bold\">Augmenter la productivité,</span>
                                    <br><span class=\"font-weight-bold\">Réduire les déchets (papiers, cartouches etc.),</span>
                                    <br><span class=\"font-weight-bold\">Améliorer le cycle de vie des documents,</span>
                                    <br><span class=\"font-weight-bold\">Avoir un statut d’entreprise citoyenne environnemental.</span>

                                    <br>Un audit et des conseils personnalisés pour optimiser les coûts :
                                    <br>Premièrement, on audite attentivement votre situation actuelle (mesure des coûts d’impression, analyse des volumes et étude des besoins) pour mieux comprendre et optimiser votre besoin en impression.
                                    <br>À partir de là, on identifie les zones de gaspillages cachées, on rationalise le nombre de périphériques et de fournisseurs à gérer et on vous donne nos conseils pour superviser et changer vos habitudes d’impression. Et par la même occasion, vos impressions deviennent plus sûres, plus écologiques et plus ergonomiques, aussi bien pour les utilisateurs que pour le département informatique.
                                    CIS supervise et on gère pour vous toute votre infrastructure d‘impression, et on supprime des activités quotidiennes et répétitives. En résumé, on vous fait gagner du temps et de l’argent !

                                </p>
                            </section>

                            <section id=\"tab-8\" class=\"tab-body entry-content\">
                                <h2>Infogérence</h2>
                                <p>
                                    Afin de permettre à nos Clients de se concentrer sur leurs cœurs de métiers respectifs, CIS AFRICA a développé des offres d’infogérance adaptées et axées principalement à votre besoin.
                                    <br>CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de votre infrastructure afin de vous permettre de vous recentrer sur votre cœur de métier.
                                    <br>Nous accompagnons également les Directions Informatiques dans l’étude et dans la mise en œuvre des projets d’infogérance et offre des solutions d’exploitation adaptées pour chacune d’elles.
                                    <br>Nos Offres CIS AFRICA vous propose par ses contrats d’infogérance de prendre en charge tout ou une partie de votre fonction informatique durant une période définie. Ce service permet de :
                                    Gérer votre infrastructure et votre Matériels informatique
                                    <br>Disposer d’équipes qualifiées et compétentes, formées aux dernières solutions et technologies
                                    <br>Agir rapidement et efficacement sur votre préoccupation.
                                    <br>Gérer l’évolution de votre infrastructure et les applications de votre système d’information
                                    Services & Clauses
                                    <br>Selon les besoins du client, CIS AFRICA assure une prestation de haut niveau selon le portefeuille du client, à savoir :
                                    <br>Le maintien en conditions opérationnelles du Matériels informatique
                                    <br>L'assistance aux utilisateurs
                                    <br>La maintenance de préventive et curative
                                    Avantages
                                    Grâce à nos différents types de contrats d’infogérance, nous nous adaptons à vos besoins. Nous vous offrons quelques nombreux avantages :
                                    <br>Le but initial est d’externaliser tout le processus informatique de votre société. Théoriquement, vous allez ainsi pouvoir concentrer les efforts de votre société sur son savoir-faire, sur ses produits et ses services. CIS AFRICA gèrera votre parc informatique à votre place, ce qui vous permettra de réduire vos coûts.
                                    <br>Nous sommes des experts en la matière nous nous imprégnons des dernières technologies et méthodes à mettre en place pour optimiser votre parc informatique.
                                    <br>Nous offrons un moyen sûr pour le bon fonctionnement de votre entreprise.
                                    CIS AFRICA a des obligations de moyens et de résultats, c'est un gage de qualité. Nous avons une vision extérieure et nous aidons à l'évolution de votre entreprise.
                                </p>
                            </section>

                            <section id=\"tab-9\" class=\"tab-body entry-content\">
                                <h2>GED</h2>
                                <p>
                                    Avec la solution GED  CIS vos informations prennent vie et se relient entre elles, elles circulent entre collègues ou au-delà des frontières de l’entreprise, vous renforcez le travail collaboratif entre les différents services tout en maitrisant le flux des données.
                                    <br>La rapidité d’accès offerte par l'archivage électronique des documents accroit votre productivité et renforce votre efficacité.
                                    <br>La Gestion Électronique des Documents utilise des outils et des fonctionnalités pour gérer toutes les étapes du cycle de vie d'un document numérique :
                                    <br>Création ou acquisition du document (ex : numérisation) ;
                                    <br>Stockage, indexation et organisation du document électronique ;
                                    <br>Gestion de la sécurité des données du document électronique ;
                                    <br>Recherche, consultation du document électronique et échange des informations ;
                                    <br>Archivage électronique du document durant son délai de conservation.

                                    <br> <span class=\"font-weight-bold\">À QUOI SERT LA GED POUR votre ENTREPRISES ?</span>
                                    <br>Numériser des documents papier est parfois indispensable pour les entreprises (travail en ligne, échange d'informations). Mais les documents électroniques nécessitent une gestion à part entière : organisation des fichiers, protection du contenu, etc. Mettre en place un projet GED permet aux entreprises d'optimiser la gestion des fichiers (numérisation, classement, archivage…) tout en garantissant leur validité juridique.
                                    Les solutions GED permettent de faciliter la recherche documentaire, le stockage, l'échange, grâce à un logiciel GED à l'interface intuitive. Les données et les contenus de l'entreprise sont accessibles 24 h/24 dans le cloud sur PC, tablette ou smartphone. L'interface peut être également reliée avec les différents logiciels métiers de l'entreprise. Par exemple, le contenu des factures fournisseurs est communiqué au logiciel de gestion comptable dès leur stockage sur l'application. Il sert alors aussi de base unique documentaire administrative.
                                     
                                    <br><span class=\"font-weight-bold\">QUELS SONT LES BÉNÉFICES DE LA GED ?</span>
                                    <br>La mise en place d'une solution GED présente de nombreux atouts par rapport à une gestion classique des documents. Elle permet de réaliser des économies importantes sur l'impression, la diffusion et l'archivage des documents papier. De plus, l'automatisation de certains processus métier et la recherche documentaire facilitée représentent un gros gain de temps. Les collaborateurs de l'entreprise peuvent se concentrer sur du travail à réelle valeur ajoutée. De plus, la GED se charge de donner la même valeur juridique au fichier numérique qu'à son document papier original. Il devient alors très simple de trouver une information demandée par l'URSSAF ou par les impôts. Enfin, la dématérialisation et l'utilisation d'un outil de GED présentent une dimension environnementale assez évidente, grâce à la réduction du papier.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
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
    </div>
</section>", "/var/www/cis-web-site/themes/cis/pages/nos-services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 269);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
