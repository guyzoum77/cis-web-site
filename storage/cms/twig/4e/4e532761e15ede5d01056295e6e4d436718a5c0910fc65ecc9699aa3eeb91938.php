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

        <div class=\"about-experience-area pb-35\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"experience-item\">
                            <span>Une expertise de plus de 30 ans</span>
                            <h2 class=\"title\">
                                Distributeur et Int??grateur de solution ...
                            </h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>
                                Le Groupe CIS poss??de une expertise de plus de
                                30 ans dans la distribution et l???int??gration de
                                solutions, produits et services technologiques.
                            </p>
                            <p>
                                La soci??t?? est organis??e en unit??s op??rationnelles qui sont bien comp??tentes au sein de leurs segments de
                                march?? respectifs. La comp??tence commerciale et technique de nos ??quipes, ainsi que leur facult?? d???adaptation
                                aux besoins et aux attentes des diff??rents march??s ont profond??ment contribu?? au d??veloppement du Groupe.
                            </p>
                            <p>
                                La croissance r??cente n???aurait pas ??t?? possible sans la confiance des clients, des entreprises technologiques, des
                                petites, moyennes et grandes entreprises qui font confiance ?? CIS pour la conception et l???ex??cution de leurs projets
                                TIC, et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                        </div> <!-- experience item -->
                    </div>
                </div>

            </div> <!-- container -->
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"vertical-tab\" role=\"tabpanel\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\"><a href=\"#Section1\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Infrastructure H & S</a></li>
                            <li role=\"presentation\"><a href=\"#Section2\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Microsoft Azure</a></li>
                            <li role=\"presentation\"><a href=\"#Section3\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Microsoft Office 365</a></li>
                            <li role=\"presentation\"><a href=\"#Section4\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Archivage Backup</a></li>
                            <li role=\"presentation\"><a href=\"#Section5\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Infrastructure Virtuelle</a></li>
                            <li role=\"presentation\"><a href=\"#Section6\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">R??seaux et s??curit??s</a></li>
                            <li role=\"presentation\"><a href=\"#Section7\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Managed Print Service</a></li>
                            <li role=\"presentation\"><a href=\"#Section8\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Infog??rence</a></li>
                            <li role=\"presentation\"><a href=\"#Section9\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">GED</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content tabs\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Section1\">
                                <h3>L???infrastructure informatique</h3>
                                <p class=\"p-color\">
                                    Il regroupe l???ensemble des ??quipements mat??riels (postes de travail, serveurs, routeurs, p??riph??riques???) et des logiciels (ERP, CRM, messagerie, ???) d???une entreprise.
                                    Elle repr??sente l???agencement entre : les diff??rentes applications, les serveurs,
                                    les stockages et le r??seau d???entreprise. Tous ces ??l??ments, qui sont connect??s entre eux,
                                    forment l???infrastructure informatique. On parle ??galement de syst??me informatique ou
                                    d???architecture informatique.
                                    Comme Hardware CIS propose entre autre:
                                    Des ordinateurs portables et de bureau Des Imprimantes Des serveurs, des baies de stockages de derni??res g??n??rations Des Appliances de sauvegarde
                                    Des switchs, routeurs, Firewall??? Des racks
                                    Comme solutions softwares nous proposons entre autres :
                                    OS : Windows Linux Unix
                                    Monitoring : PRTG MANAGE ENGINE
                                    SIEM : ArcSight Qradar OUTILS DE SAUVEGARDE Veeam BACKUP Dell EMC Networker Veritas netbackup
                                    Backup exe
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section2\">
                                <h3>Microsoft Azure</h3>
                                <p class=\"p-color\">
                                    C'est une plateforme applicative en nuage con??ue par Microsoft. C???est un concept de ?? cloud computing ?? qui permet de sauvegarder ses donn??es informatiques sur des serveurs distants, d'o?? l'id??e de nuage.??
                                    <br>Il s???agit d???une offre d???h??bergement d???applications et de donnes que nous pouvons stock??s sur leurs serveurs. Et ??galement des services de stockage et synchronisation des donn??es, bus de messages, contacts etc???
                                    Un ensemble d'API permettent d'utiliser et d'acc??der ?? cette plateforme et aux services propos??s. Un environnement d'ex??cution (le Live Operating Environment) permet une int??gration avec les principaux syst??mes d'exploitation existant comme Windows, MacOs et Windows phone.
                                    <br>Comme les autres fournisseurs de services Cloud, Microsoft Azure??<span class=\"font-weight-bold\">permet de profiter de ressources de Cloud Computing ?? la demande.</span> Il permet aux entreprises de faire d???importantes ??conomies en leur ??vitant d???avoir ?? ??riger un centre de donn??es sur site, de le maintenir, de le mettre ?? jour, de le refroidir et de payer l?????lectricit??.
                                    <br>Cette plateforme Cloud permet aussi de??<span class=\"font-weight-bold\">simplifier l???utilisation et l???administration de technologies Microsoft</span>??comme Windows Server, Active Directory et SharePoint. Ainsi, les ??quipes informatiques peuvent se concentrer sur d???autres projets.
                                    <br><span class=\"font-weight-bold\">Microsoft Azure :  les diff??rents services</span>
                                    <br>Microsoft Azure??<span class=\"font-weight-bold\">regroupe diff??rents services Cloud</span>. Comme chez les concurrents, on retrouve notamment un service de stockage, des machines virtuelles, et des r??seaux de diffusion de contenu. Azure propose ??galement des services exploitant les technologies propri??taires de Microsoft.
                                    Par exemple, RemoteApp??<span class=\"font-weight-bold\">permet le d??ploiement de programmes Windows</span>??sur diff??rents OS par le biais d???une machine virtuelle. De m??me, la plateforme regroupe des versions Cloud des solutions d???entreprise populaires de Microsoft, comme Active Directory ou SQL Server.
                                    Parmi les??<span class=\"font-weight-bold\">autres services les plus populaires de Microsoft Azure</span>, on retrouve Azure IoT Suite permettant de connecter et de surveiller les objets connect??s. Ce service offre aussi des fonctionnalit??s de t??l??m??trie et d???analyse.
                                    Le service HDInsight est un d??ploiement customis????de la plateforme Big Data Hadoop. Azure Cosmos DB est une base de donn??es NoSQL h??berg??e pour des cas d???usage sp??cifiques. Azure Media Services propose des services de lecture, d???indexation, de transcodage et de protection de contenu vid??o.
                                    Au total,??<span class=\"font-weight-bold\">Microsoft Azure propose plus d???une vingtaine de cat??gories</span>??de services diff??rentes. Outre les services de calcul, de stockage, de d??veloppement web et mobile, on retrouve aussi des services d???int??gration, de networking, de conteneurisation et d???analyse de donn??es.
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section3\">
                                <h3>Office 365</h3>
                                <p class=\"p-color\">
                                    C'est une collection de programmes informatiques int??grant plusieurs logiciels informatiques, ?? l???instar d???Outlook, Power point, Excel, Word???
                                    Autrement dit, c???est un ensemble d???applications ayant pour objectif la facilitation des travaux inh??rent ?? la bureautique. C???est un outil simplifi??, permettant un rendement plus performant, que ce soit dans le traitement de textes, des donn??es de l???entreprise ou de la transmission des documents. On peut aussi le consid??rer comme une suite bureautique ayant pour outils Word, Excel, Outlook, OneNote, Publisher, One drive entreprise, SharePoint, Microsoft team, Yammer. Office365 regorge un ??ventail d???offres qu???il met ?? votre disposition

                                    <br>Une fois ces services configur??s et leurs mod??les d'emploi bien personnalis??s, une solution d'affaires voit le jour avec un environnement unifi?? de travail, ?? la fois ouvert et s??curis??, accessible au personnel et ????ses partenaires d'affaires.????
                                    Il serait incomplet de terminer cette partie du guide sans??<span class=\"font-weight-bold\">comparer??Office 365 ????ses concurrents.</span>??Ils sont plusieurs ?? offrir des services sur l'infonuagique. On y retrouve??Google G Suite,??IBM Cloud,??Zoho,??HyperOffice??et quelques autres.??
                                    C'est d'abord par l'??tendue de ses services, sa richesse fonctionnelle et sa flexibilit????qu'Office??365 se d??marque nettement en t??te.
                                    La coh??sion d'ensemble des services d'Office 365 est aussi remarquable et fait l'objet d'innovations??en continue??par Microsoft. Entre autres, plusieurs d??veloppements sont en cours pour simplifier l'automatisation??de processus m??tier de partout en tout temps.
                                    Avec Office 365,??vous n'avez pas ?? toujours???? ??tre connect?? ?? l'Internet??pour acc??der aux documents, donn??es et courriels.
                                    Avec Microsoft, vous ne risqu?? pas de subir les tracas d'un ??ventuel rachat ou fermeture de l'h??bergeur.
                                    CIS WEST AFRICA vos propose Microsoft office 365 avec des garanties de conformit?? et??de s??curit?? qui r??pondent aux enjeux des tr??s grandes entreprises en la mati??re.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section4\">
                                <h3>ARCHIVAGE & BACKUP</h3>
                                <p class=\"p-color\">
                                    La sauvegarde des donn??es est une op??ration une copie pr??ventive des donn??es des syst??mes informatique sur des supports ind??pendants tels que les disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en s??curit?? des informations et de pallier toute ??ventualit?? de panne mat??rielle, d'infection par un logiciel malveillant, et de suppression volontaire ou fortuite.
                                    L'utilit?? de la sauvegarde est de pouvoir restaurer le plus rapidement possible un syst??me apr??s une d??faillance ou un incident.
                                    Les avantages de la sauvegarde
                                    <br><span class=\"font-weight-bold\">??? Prot??ger les donn??es.</span>
                                    <br><span class=\"font-weight-bold\">??? Rendre les donn??es disponibles pour les utilisateurs.</span>

                                    <br>Les solutions de sauvegarde que CIS propose sont en entre autres :
                                    <br><span class=\"font-weight-bold\">- Veeam Backup and Replication</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Networker</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Avamar</span>
                                    <br><span class=\"font-weight-bold\">- Veritas Backup Exec</span>
                                    <br><span class=\"font-weight-bold\">- Veritas NetBAckup</span>
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section5\">
                                <h3>INFRASTRUCTURE VIRTUELLE</h3>

                                <p class=\"p-color\">
                                    La virtualisation permet de cr??er une version virtuelle d?????quipements physiques, comme des serveurs, des applications, des syst??mes de stockage ou des r??seaux virtuels ; l???objectif ??tant de rationaliser et d???optimiser l???utilisation des ressources physiques pour apporter flexibilit?? et agilit?? aux utilisateurs, le tout dans un environnement virtuel.
                                    <span class=\"font-weight-bold\">Les avantages de la virtualisation</span>
                                    <br>??? Une meilleure r??partition des charges,
                                    <br>??? Un gain de place (moins de serveurs physiques n??cessaires, par exemple)
                                    <br>??? Des ??conomies d?????nergie, puisque moins d?????quipements fonctionnent simultan??ment, donc ??conomies financi??res ??galement,
                                    <br>??? Une continuit?? de service,
                                    <br>??? La centralisation des ressources informatiques,
                                    <br>??? Plus de disponibilit?? : les op??rations de migrations ou de sauvegardes, par exemple, peuvent ??tre ex??cut??es pendant l???exploitation, sans interruption de service,
                                    <br>??? Le renforcement de la reprise d???activit??,
                                    <br>??? Une meilleure sauvegarde des donn??es, en cas d???incident,
                                    <br>??? Plus de mobilit?? pour les utilisateurs dans la mesure o?? les applications sont accessibles depuis n???importe quel poste ou syst??me d???exploitation,
                                    <br>??? Un niveau de s??curit?? renforc??.

                                    <br><span class=\"font-weight-bold\">Les solutions de virtualisations que CIS propose :</span>
                                    <br>- VMware
                                    <br>- Hyper V
                                    <br>- Nutanix
                                    <br>- Citrix
                                    <br>- OVM
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section6\">
                                <h3>RESEAUX ET SECURITE</h3>

                                <p class=\"p-color\">
                                    Notre Expert r??seau et s??curit?? assure la s??curit??, la s??ret?? et la p??rennit?? des syst??mes et r??seaux d???information et de communication au niveau de l???ensemble d???une entit?? ou d???un syst??me particulier.
                                    <br>Son r??le comporte une dimension technique forte mais n??cessite ??galement une bonne vision manag??riale et organisationnelle. Notre Expert   effectue un diagnostic avant de proposer des proc??dures de s??curit??. Ce diagnostic permet ?? la direction de l???entreprise d???avoir conscience des failles de s??curit?? et ainsi de prendre des d??cisions en connaissance de cause. Elles permettent ??galement une rationalisation du syst??me d???information.
                                    <br>Ainsi, notre Expert s??curit?? Identifie en premier les lieux les risques et d??finie la politique de s??curit?? en r??alisant des audits du syst??me de s??curit??, le plus souvent avec l???aide de prestataires et en analysant les risques et les dysfonctionnements, les marges d???am??lioration des syst??mes de s??curit?? afin d?????tablir un plan de pr??vention des risques informatiques et un plan de continuit?? d???activit?? ou plan de maintien en conditions op??rationnelles du SI.
                                    <br>L???Expert r??seau et s??curit?? s???occupe de la mise en ??uvre et suivi du dispositif de s??curit?? en??appliquant les normes et standards de s??curit?? et en mettant en place les m??thodes et outils de s??curit?? adapt??s, et accompagnant leur impl??mentation aupr??s des utilisateurs.
                                    <br>Il s???occupe aussi de la communication et formation sur les normes de s??curit?? en r??alisant le r??f??rentiel de s??curit??, l???actualisant r??guli??rement, en assurer la diffusion et veiller ?? son application.
                                    <br>Enfin, notre expert r??seau et s??curit?? se charge de la veille technologique et r??glementaire en assurant une veille technologique, de mani??re ?? garantir la s??curit?? logique et physique du syst??me d???information et en assurant une veille r??glementaire sur la protection des donn??es personnelles.
                                    Missions principales
                                    <br><span class=\"font-weight-bold\">D??finition des objectifs g??n??raux de s??curit?? des syst??mes de la soci??t??</span>
                                    <br><span class=\"font-weight-bold\">D??finition et mise en place des r??gles et proc??dures de s??curit??</span>
                                    <br><span class=\"font-weight-bold\">Prise en compte des ??volutions r??glementaires dans la politique de s??curit??</span>
                                    <br><span class=\"font-weight-bold\">Gestion des risques SSI encourus par les syst??mes et r??seaux d???information et de communication</span>
                                    <br><span class=\"font-weight-bold\">Audit et administration du domaine s??curit?? des syst??mes d???information (SSI)</span>
                                    <br><span class=\"font-weight-bold\">V??rification de la pertinence et de la performance du syst??me de s??curit?? des syst??mes d???information, des outils associ??s et des r??seaux de t??l??communication.</span>
                                    <br>Vous ??tes responsable de la s??curit?? de votre r??seau. Notre ??quipe de services consultatifs de s??curit?? vous aidera ?? progresser avec la strat??gie appropri??e afin de prot??ger vos activit??s num??riques.
                                    <br>Utilisez nos services de mise en ??uvre pour int??grer une ??tendue de technologies de s??curit?? et migrez ?? partir d???autres solutions, incluant les anciens produits. Ceci vous permettra aussi d???optimiser vos technologies de s??curit?? existante pour am??liorer l'efficacit?? de la s??curit??.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section7\">
                                <h3>Managed Print Service (MPS)</h3>
                                <p class=\"p-color\">
                                    Il d??signe l'ensemble de logiciels et m??thodes qui permettent la gestion et l???optimisation des dispositifs de production de documents (parc d???imprimantes, copieurs multifonction, etc.).
                                    <br>Dans le contexte ??conomique actuel, la r??duction et la ma??trise des co??ts sont une priorit?? pour les entreprises. ??a implique l???int??gration de la gestion documentaire dans les plans de d??penses strat??giques.
                                    <br>CIS, vous propose de mettre en place une politique d???impression globale via une solution de MPS afin de :
                                    <br><span class=\"font-weight-bold\">R??duire les co??ts li??s aux documents,</span>
                                    <br><span class=\"font-weight-bold\">Ma??triser les co??ts d???impression,</span>
                                    <br><span class=\"font-weight-bold\">Augmenter la productivit??,</span>
                                    <br><span class=\"font-weight-bold\">R??duire les d??chets (papiers, cartouches etc.),</span>
                                    <br><span class=\"font-weight-bold\">Am??liorer le cycle de vie des documents,</span>
                                    <br><span class=\"font-weight-bold\">Avoir un statut d???entreprise citoyenne environnemental.</span>

                                    <br>Un audit et des conseils personnalis??s pour optimiser les co??ts :
                                    <br>Premi??rement, on audite attentivement votre situation actuelle (mesure des co??ts d???impression, analyse des volumes et ??tude des besoins) pour mieux comprendre et optimiser votre besoin en impression.
                                    <br>?? partir de l??, on identifie les zones de gaspillages cach??es, on rationalise le nombre de p??riph??riques et de fournisseurs ?? g??rer et on vous donne nos conseils pour superviser et changer vos habitudes d???impression. Et par la m??me occasion, vos impressions deviennent plus s??res, plus ??cologiques et plus ergonomiques, aussi bien pour les utilisateurs que pour le d??partement informatique.
                                    CIS supervise et on g??re pour vous toute votre infrastructure d???impression, et on supprime des activit??s quotidiennes et r??p??titives. En r??sum??, on vous fait gagner du temps et de l???argent !
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section8\">
                                <h3>INFOGERENCE</h3>
                                <p class=\"p-color\">
                                    Afin de permettre ?? nos Clients de se concentrer sur leurs c??urs de m??tiers respectifs,??CIS AFRICA a d??velopp?? des offres d???infog??rance adapt??es et ax??es principalement ?? votre besoin.
                                    <br>CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de votre infrastructure afin de vous permettre de vous recentrer sur votre c??ur de m??tier.
                                    <br>Nous accompagnons ??galement les Directions Informatiques dans l?????tude et dans la mise en ??uvre des projets d???infog??rance et offre des solutions d???exploitation adapt??es pour chacune d???elles.
                                    <br>Nos Offres??CIS AFRICA vous propose par ses contrats d???infog??rance de prendre en charge tout ou une partie de votre fonction informatique durant une p??riode d??finie. Ce service permet??de :
                                    G??rer votre infrastructure et votre Mat??riels informatique
                                    <br>Disposer d?????quipes qualifi??es et comp??tentes, form??es aux derni??res solutions et technologies
                                    <br>Agir rapidement et efficacement sur votre pr??occupation.
                                    <br>G??rer l?????volution de votre infrastructure et les applications de votre syst??me d???information
                                    Services & Clauses
                                    <br>Selon les besoins du client, CIS AFRICA assure une prestation de haut niveau selon le portefeuille du client, ?? savoir :
                                    <br>Le maintien en conditions op??rationnelles du Mat??riels informatique
                                    <br>L'assistance aux utilisateurs
                                    <br>La maintenance de pr??ventive et curative
                                    Avantages
                                    Gr??ce ?? nos diff??rents types de contrats d???infog??rance, nous nous adaptons ?? vos besoins. Nous vous offrons quelques nombreux avantages :
                                    <br>Le but initial est d???externaliser tout le processus informatique de votre soci??t??. Th??oriquement, vous allez ainsi pouvoir concentrer les efforts de votre soci??t?? sur son savoir-faire, sur ses produits et ses services. CIS AFRICA g??rera votre parc informatique ?? votre place, ce qui vous permettra de r??duire vos co??ts.
                                    <br>Nous sommes des experts en la mati??re nous nous impr??gnons des derni??res technologies et m??thodes ?? mettre en place pour optimiser votre parc informatique.
                                    <br>Nous offrons un moyen s??r pour le bon fonctionnement de votre entreprise.
                                    CIS AFRICA a des obligations de moyens et de r??sultats, c'est un gage de qualit??. Nous avons une vision ext??rieure et nous aidons ?? l'??volution de votre entreprise.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section9\">
                                <h3>GED </h3>
                                <p class=\"p-color\">
                                    Avec la??solution GED?? CIS vos informations prennent vie et se relient entre elles, elles circulent entre coll??gues ou au-del?? des fronti??res de l???entreprise, vous renforcez le travail collaboratif entre les diff??rents services tout en maitrisant le flux des donn??es.
                                    <br>La rapidit?? d???acc??s offerte par??l'archivage ??lectronique des documents??accroit votre productivit?? et renforce votre efficacit??.
                                    <br>La Gestion ??lectronique des Documents utilise des outils et des fonctionnalit??s pour g??rer toutes les ??tapes du cycle de vie d'un document num??rique??:
                                    <br>Cr??ation ou acquisition du document (ex : num??risation) ;
                                    <br>Stockage, indexation et organisation du document ??lectronique ;
                                    <br>Gestion de la s??curit?? des donn??es du document ??lectronique ;
                                    <br>Recherche, consultation du document ??lectronique et ??change des informations ;
                                    <br>Archivage ??lectronique du document durant son d??lai de conservation.

                                    <br> <span class=\"font-weight-bold\">?? QUOI SERT LA GED POUR votre ENTREPRISES ?</span>
                                    <br>Num??riser des documents papier??est parfois indispensable pour les entreprises (travail en ligne, ??change d'informations). Mais les documents ??lectroniques n??cessitent une gestion ?? part enti??re : organisation des fichiers, protection du contenu, etc. Mettre en place un??projet GED??permet aux entreprises d'optimiser la gestion des fichiers (num??risation, classement, archivage???) tout en garantissant leur validit?? juridique.
                                    Les solutions??GED??permettent de faciliter la recherche documentaire, le stockage, l'??change, gr??ce ?? un??logiciel GED???? l'interface intuitive. Les donn??es et les contenus de l'entreprise sont accessibles 24 h/24 dans le cloud sur PC, tablette ou smartphone. L'interface peut ??tre ??galement reli??e avec les diff??rents logiciels m??tiers de l'entreprise. Par exemple, le contenu des factures fournisseurs est communiqu?? au logiciel de gestion comptable d??s leur stockage sur l'application. Il sert alors aussi de base unique documentaire administrative.
                                    ??
                                    <br><span class=\"font-weight-bold\">QUELS SONT LES B??N??FICES DE LA GED ?</span>
                                    <br>La mise en place d'une??solution GED??pr??sente de nombreux atouts par rapport ?? une gestion classique des documents. Elle permet de r??aliser des ??conomies importantes sur l'impression, la diffusion et l'archivage des documents papier. De plus, l'automatisation??de certains??processus m??tier??et la recherche documentaire facilit??e repr??sentent un gros gain de temps. Les collaborateurs de l'entreprise peuvent se concentrer sur du travail ?? r??elle valeur ajout??e. De plus, la GED se charge de donner la m??me valeur juridique au fichier num??rique qu'?? son document papier original. Il devient alors tr??s simple de trouver une information demand??e par l'URSSAF ou par les imp??ts. Enfin, la d??mat??rialisation et l'utilisation d'un??outil de GED??pr??sentent une dimension environnementale assez ??vidente, gr??ce ?? la r??duction du papier.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class=\"pt-240\">
            ";
        // line 268
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nos-partenaires"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 269
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
                                            <h3 class=\"title\">N'h??sitez pas ?? nous contacter</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Nom et pr??noms\">
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
                                                    <input type=\"text\" placeholder=\"T??l??phone\">
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
        return "/var/www/cis-web-site/themes/cis/pages/expertise.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 269,  314 => 268,  56 => 13,  52 => 12,  39 => 1,);
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

        <div class=\"about-experience-area pb-35\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"experience-item\">
                            <span>Une expertise de plus de 30 ans</span>
                            <h2 class=\"title\">
                                Distributeur et Int??grateur de solution ...
                            </h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>
                                Le Groupe CIS poss??de une expertise de plus de
                                30 ans dans la distribution et l???int??gration de
                                solutions, produits et services technologiques.
                            </p>
                            <p>
                                La soci??t?? est organis??e en unit??s op??rationnelles qui sont bien comp??tentes au sein de leurs segments de
                                march?? respectifs. La comp??tence commerciale et technique de nos ??quipes, ainsi que leur facult?? d???adaptation
                                aux besoins et aux attentes des diff??rents march??s ont profond??ment contribu?? au d??veloppement du Groupe.
                            </p>
                            <p>
                                La croissance r??cente n???aurait pas ??t?? possible sans la confiance des clients, des entreprises technologiques, des
                                petites, moyennes et grandes entreprises qui font confiance ?? CIS pour la conception et l???ex??cution de leurs projets
                                TIC, et qui ont choisi notre groupe comme leur distributeur/revendeur.
                            </p>
                        </div> <!-- experience item -->
                    </div>
                </div>

            </div> <!-- container -->
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"vertical-tab\" role=\"tabpanel\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\"><a href=\"#Section1\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Infrastructure H & S</a></li>
                            <li role=\"presentation\"><a href=\"#Section2\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Microsoft Azure</a></li>
                            <li role=\"presentation\"><a href=\"#Section3\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Microsoft Office 365</a></li>
                            <li role=\"presentation\"><a href=\"#Section4\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Archivage Backup</a></li>
                            <li role=\"presentation\"><a href=\"#Section5\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Infrastructure Virtuelle</a></li>
                            <li role=\"presentation\"><a href=\"#Section6\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">R??seaux et s??curit??s</a></li>
                            <li role=\"presentation\"><a href=\"#Section7\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Managed Print Service</a></li>
                            <li role=\"presentation\"><a href=\"#Section8\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Infog??rence</a></li>
                            <li role=\"presentation\"><a href=\"#Section9\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">GED</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content tabs\">
                            <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"Section1\">
                                <h3>L???infrastructure informatique</h3>
                                <p class=\"p-color\">
                                    Il regroupe l???ensemble des ??quipements mat??riels (postes de travail, serveurs, routeurs, p??riph??riques???) et des logiciels (ERP, CRM, messagerie, ???) d???une entreprise.
                                    Elle repr??sente l???agencement entre : les diff??rentes applications, les serveurs,
                                    les stockages et le r??seau d???entreprise. Tous ces ??l??ments, qui sont connect??s entre eux,
                                    forment l???infrastructure informatique. On parle ??galement de syst??me informatique ou
                                    d???architecture informatique.
                                    Comme Hardware CIS propose entre autre:
                                    Des ordinateurs portables et de bureau Des Imprimantes Des serveurs, des baies de stockages de derni??res g??n??rations Des Appliances de sauvegarde
                                    Des switchs, routeurs, Firewall??? Des racks
                                    Comme solutions softwares nous proposons entre autres :
                                    OS : Windows Linux Unix
                                    Monitoring : PRTG MANAGE ENGINE
                                    SIEM : ArcSight Qradar OUTILS DE SAUVEGARDE Veeam BACKUP Dell EMC Networker Veritas netbackup
                                    Backup exe
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section2\">
                                <h3>Microsoft Azure</h3>
                                <p class=\"p-color\">
                                    C'est une plateforme applicative en nuage con??ue par Microsoft. C???est un concept de ?? cloud computing ?? qui permet de sauvegarder ses donn??es informatiques sur des serveurs distants, d'o?? l'id??e de nuage.??
                                    <br>Il s???agit d???une offre d???h??bergement d???applications et de donnes que nous pouvons stock??s sur leurs serveurs. Et ??galement des services de stockage et synchronisation des donn??es, bus de messages, contacts etc???
                                    Un ensemble d'API permettent d'utiliser et d'acc??der ?? cette plateforme et aux services propos??s. Un environnement d'ex??cution (le Live Operating Environment) permet une int??gration avec les principaux syst??mes d'exploitation existant comme Windows, MacOs et Windows phone.
                                    <br>Comme les autres fournisseurs de services Cloud, Microsoft Azure??<span class=\"font-weight-bold\">permet de profiter de ressources de Cloud Computing ?? la demande.</span> Il permet aux entreprises de faire d???importantes ??conomies en leur ??vitant d???avoir ?? ??riger un centre de donn??es sur site, de le maintenir, de le mettre ?? jour, de le refroidir et de payer l?????lectricit??.
                                    <br>Cette plateforme Cloud permet aussi de??<span class=\"font-weight-bold\">simplifier l???utilisation et l???administration de technologies Microsoft</span>??comme Windows Server, Active Directory et SharePoint. Ainsi, les ??quipes informatiques peuvent se concentrer sur d???autres projets.
                                    <br><span class=\"font-weight-bold\">Microsoft Azure :  les diff??rents services</span>
                                    <br>Microsoft Azure??<span class=\"font-weight-bold\">regroupe diff??rents services Cloud</span>. Comme chez les concurrents, on retrouve notamment un service de stockage, des machines virtuelles, et des r??seaux de diffusion de contenu. Azure propose ??galement des services exploitant les technologies propri??taires de Microsoft.
                                    Par exemple, RemoteApp??<span class=\"font-weight-bold\">permet le d??ploiement de programmes Windows</span>??sur diff??rents OS par le biais d???une machine virtuelle. De m??me, la plateforme regroupe des versions Cloud des solutions d???entreprise populaires de Microsoft, comme Active Directory ou SQL Server.
                                    Parmi les??<span class=\"font-weight-bold\">autres services les plus populaires de Microsoft Azure</span>, on retrouve Azure IoT Suite permettant de connecter et de surveiller les objets connect??s. Ce service offre aussi des fonctionnalit??s de t??l??m??trie et d???analyse.
                                    Le service HDInsight est un d??ploiement customis????de la plateforme Big Data Hadoop. Azure Cosmos DB est une base de donn??es NoSQL h??berg??e pour des cas d???usage sp??cifiques. Azure Media Services propose des services de lecture, d???indexation, de transcodage et de protection de contenu vid??o.
                                    Au total,??<span class=\"font-weight-bold\">Microsoft Azure propose plus d???une vingtaine de cat??gories</span>??de services diff??rentes. Outre les services de calcul, de stockage, de d??veloppement web et mobile, on retrouve aussi des services d???int??gration, de networking, de conteneurisation et d???analyse de donn??es.
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section3\">
                                <h3>Office 365</h3>
                                <p class=\"p-color\">
                                    C'est une collection de programmes informatiques int??grant plusieurs logiciels informatiques, ?? l???instar d???Outlook, Power point, Excel, Word???
                                    Autrement dit, c???est un ensemble d???applications ayant pour objectif la facilitation des travaux inh??rent ?? la bureautique. C???est un outil simplifi??, permettant un rendement plus performant, que ce soit dans le traitement de textes, des donn??es de l???entreprise ou de la transmission des documents. On peut aussi le consid??rer comme une suite bureautique ayant pour outils Word, Excel, Outlook, OneNote, Publisher, One drive entreprise, SharePoint, Microsoft team, Yammer. Office365 regorge un ??ventail d???offres qu???il met ?? votre disposition

                                    <br>Une fois ces services configur??s et leurs mod??les d'emploi bien personnalis??s, une solution d'affaires voit le jour avec un environnement unifi?? de travail, ?? la fois ouvert et s??curis??, accessible au personnel et ????ses partenaires d'affaires.????
                                    Il serait incomplet de terminer cette partie du guide sans??<span class=\"font-weight-bold\">comparer??Office 365 ????ses concurrents.</span>??Ils sont plusieurs ?? offrir des services sur l'infonuagique. On y retrouve??Google G Suite,??IBM Cloud,??Zoho,??HyperOffice??et quelques autres.??
                                    C'est d'abord par l'??tendue de ses services, sa richesse fonctionnelle et sa flexibilit????qu'Office??365 se d??marque nettement en t??te.
                                    La coh??sion d'ensemble des services d'Office 365 est aussi remarquable et fait l'objet d'innovations??en continue??par Microsoft. Entre autres, plusieurs d??veloppements sont en cours pour simplifier l'automatisation??de processus m??tier de partout en tout temps.
                                    Avec Office 365,??vous n'avez pas ?? toujours???? ??tre connect?? ?? l'Internet??pour acc??der aux documents, donn??es et courriels.
                                    Avec Microsoft, vous ne risqu?? pas de subir les tracas d'un ??ventuel rachat ou fermeture de l'h??bergeur.
                                    CIS WEST AFRICA vos propose Microsoft office 365 avec des garanties de conformit?? et??de s??curit?? qui r??pondent aux enjeux des tr??s grandes entreprises en la mati??re.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section4\">
                                <h3>ARCHIVAGE & BACKUP</h3>
                                <p class=\"p-color\">
                                    La sauvegarde des donn??es est une op??ration une copie pr??ventive des donn??es des syst??mes informatique sur des supports ind??pendants tels que les disques, les bandes et/ou le cloud.
                                    Elle a pour but de mettre en s??curit?? des informations et de pallier toute ??ventualit?? de panne mat??rielle, d'infection par un logiciel malveillant, et de suppression volontaire ou fortuite.
                                    L'utilit?? de la sauvegarde est de pouvoir restaurer le plus rapidement possible un syst??me apr??s une d??faillance ou un incident.
                                    Les avantages de la sauvegarde
                                    <br><span class=\"font-weight-bold\">??? Prot??ger les donn??es.</span>
                                    <br><span class=\"font-weight-bold\">??? Rendre les donn??es disponibles pour les utilisateurs.</span>

                                    <br>Les solutions de sauvegarde que CIS propose sont en entre autres :
                                    <br><span class=\"font-weight-bold\">- Veeam Backup and Replication</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Networker</span>
                                    <br><span class=\"font-weight-bold\">- Dell EMC Avamar</span>
                                    <br><span class=\"font-weight-bold\">- Veritas Backup Exec</span>
                                    <br><span class=\"font-weight-bold\">- Veritas NetBAckup</span>
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section5\">
                                <h3>INFRASTRUCTURE VIRTUELLE</h3>

                                <p class=\"p-color\">
                                    La virtualisation permet de cr??er une version virtuelle d?????quipements physiques, comme des serveurs, des applications, des syst??mes de stockage ou des r??seaux virtuels ; l???objectif ??tant de rationaliser et d???optimiser l???utilisation des ressources physiques pour apporter flexibilit?? et agilit?? aux utilisateurs, le tout dans un environnement virtuel.
                                    <span class=\"font-weight-bold\">Les avantages de la virtualisation</span>
                                    <br>??? Une meilleure r??partition des charges,
                                    <br>??? Un gain de place (moins de serveurs physiques n??cessaires, par exemple)
                                    <br>??? Des ??conomies d?????nergie, puisque moins d?????quipements fonctionnent simultan??ment, donc ??conomies financi??res ??galement,
                                    <br>??? Une continuit?? de service,
                                    <br>??? La centralisation des ressources informatiques,
                                    <br>??? Plus de disponibilit?? : les op??rations de migrations ou de sauvegardes, par exemple, peuvent ??tre ex??cut??es pendant l???exploitation, sans interruption de service,
                                    <br>??? Le renforcement de la reprise d???activit??,
                                    <br>??? Une meilleure sauvegarde des donn??es, en cas d???incident,
                                    <br>??? Plus de mobilit?? pour les utilisateurs dans la mesure o?? les applications sont accessibles depuis n???importe quel poste ou syst??me d???exploitation,
                                    <br>??? Un niveau de s??curit?? renforc??.

                                    <br><span class=\"font-weight-bold\">Les solutions de virtualisations que CIS propose :</span>
                                    <br>- VMware
                                    <br>- Hyper V
                                    <br>- Nutanix
                                    <br>- Citrix
                                    <br>- OVM
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section6\">
                                <h3>RESEAUX ET SECURITE</h3>

                                <p class=\"p-color\">
                                    Notre Expert r??seau et s??curit?? assure la s??curit??, la s??ret?? et la p??rennit?? des syst??mes et r??seaux d???information et de communication au niveau de l???ensemble d???une entit?? ou d???un syst??me particulier.
                                    <br>Son r??le comporte une dimension technique forte mais n??cessite ??galement une bonne vision manag??riale et organisationnelle. Notre Expert   effectue un diagnostic avant de proposer des proc??dures de s??curit??. Ce diagnostic permet ?? la direction de l???entreprise d???avoir conscience des failles de s??curit?? et ainsi de prendre des d??cisions en connaissance de cause. Elles permettent ??galement une rationalisation du syst??me d???information.
                                    <br>Ainsi, notre Expert s??curit?? Identifie en premier les lieux les risques et d??finie la politique de s??curit?? en r??alisant des audits du syst??me de s??curit??, le plus souvent avec l???aide de prestataires et en analysant les risques et les dysfonctionnements, les marges d???am??lioration des syst??mes de s??curit?? afin d?????tablir un plan de pr??vention des risques informatiques et un plan de continuit?? d???activit?? ou plan de maintien en conditions op??rationnelles du SI.
                                    <br>L???Expert r??seau et s??curit?? s???occupe de la mise en ??uvre et suivi du dispositif de s??curit?? en??appliquant les normes et standards de s??curit?? et en mettant en place les m??thodes et outils de s??curit?? adapt??s, et accompagnant leur impl??mentation aupr??s des utilisateurs.
                                    <br>Il s???occupe aussi de la communication et formation sur les normes de s??curit?? en r??alisant le r??f??rentiel de s??curit??, l???actualisant r??guli??rement, en assurer la diffusion et veiller ?? son application.
                                    <br>Enfin, notre expert r??seau et s??curit?? se charge de la veille technologique et r??glementaire en assurant une veille technologique, de mani??re ?? garantir la s??curit?? logique et physique du syst??me d???information et en assurant une veille r??glementaire sur la protection des donn??es personnelles.
                                    Missions principales
                                    <br><span class=\"font-weight-bold\">D??finition des objectifs g??n??raux de s??curit?? des syst??mes de la soci??t??</span>
                                    <br><span class=\"font-weight-bold\">D??finition et mise en place des r??gles et proc??dures de s??curit??</span>
                                    <br><span class=\"font-weight-bold\">Prise en compte des ??volutions r??glementaires dans la politique de s??curit??</span>
                                    <br><span class=\"font-weight-bold\">Gestion des risques SSI encourus par les syst??mes et r??seaux d???information et de communication</span>
                                    <br><span class=\"font-weight-bold\">Audit et administration du domaine s??curit?? des syst??mes d???information (SSI)</span>
                                    <br><span class=\"font-weight-bold\">V??rification de la pertinence et de la performance du syst??me de s??curit?? des syst??mes d???information, des outils associ??s et des r??seaux de t??l??communication.</span>
                                    <br>Vous ??tes responsable de la s??curit?? de votre r??seau. Notre ??quipe de services consultatifs de s??curit?? vous aidera ?? progresser avec la strat??gie appropri??e afin de prot??ger vos activit??s num??riques.
                                    <br>Utilisez nos services de mise en ??uvre pour int??grer une ??tendue de technologies de s??curit?? et migrez ?? partir d???autres solutions, incluant les anciens produits. Ceci vous permettra aussi d???optimiser vos technologies de s??curit?? existante pour am??liorer l'efficacit?? de la s??curit??.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section7\">
                                <h3>Managed Print Service (MPS)</h3>
                                <p class=\"p-color\">
                                    Il d??signe l'ensemble de logiciels et m??thodes qui permettent la gestion et l???optimisation des dispositifs de production de documents (parc d???imprimantes, copieurs multifonction, etc.).
                                    <br>Dans le contexte ??conomique actuel, la r??duction et la ma??trise des co??ts sont une priorit?? pour les entreprises. ??a implique l???int??gration de la gestion documentaire dans les plans de d??penses strat??giques.
                                    <br>CIS, vous propose de mettre en place une politique d???impression globale via une solution de MPS afin de :
                                    <br><span class=\"font-weight-bold\">R??duire les co??ts li??s aux documents,</span>
                                    <br><span class=\"font-weight-bold\">Ma??triser les co??ts d???impression,</span>
                                    <br><span class=\"font-weight-bold\">Augmenter la productivit??,</span>
                                    <br><span class=\"font-weight-bold\">R??duire les d??chets (papiers, cartouches etc.),</span>
                                    <br><span class=\"font-weight-bold\">Am??liorer le cycle de vie des documents,</span>
                                    <br><span class=\"font-weight-bold\">Avoir un statut d???entreprise citoyenne environnemental.</span>

                                    <br>Un audit et des conseils personnalis??s pour optimiser les co??ts :
                                    <br>Premi??rement, on audite attentivement votre situation actuelle (mesure des co??ts d???impression, analyse des volumes et ??tude des besoins) pour mieux comprendre et optimiser votre besoin en impression.
                                    <br>?? partir de l??, on identifie les zones de gaspillages cach??es, on rationalise le nombre de p??riph??riques et de fournisseurs ?? g??rer et on vous donne nos conseils pour superviser et changer vos habitudes d???impression. Et par la m??me occasion, vos impressions deviennent plus s??res, plus ??cologiques et plus ergonomiques, aussi bien pour les utilisateurs que pour le d??partement informatique.
                                    CIS supervise et on g??re pour vous toute votre infrastructure d???impression, et on supprime des activit??s quotidiennes et r??p??titives. En r??sum??, on vous fait gagner du temps et de l???argent !
                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section8\">
                                <h3>INFOGERENCE</h3>
                                <p class=\"p-color\">
                                    Afin de permettre ?? nos Clients de se concentrer sur leurs c??urs de m??tiers respectifs,??CIS AFRICA a d??velopp?? des offres d???infog??rance adapt??es et ax??es principalement ?? votre besoin.
                                    <br>CIS AFRICA vous propose de prendre en charge tout ou une partie de la gestion de votre infrastructure afin de vous permettre de vous recentrer sur votre c??ur de m??tier.
                                    <br>Nous accompagnons ??galement les Directions Informatiques dans l?????tude et dans la mise en ??uvre des projets d???infog??rance et offre des solutions d???exploitation adapt??es pour chacune d???elles.
                                    <br>Nos Offres??CIS AFRICA vous propose par ses contrats d???infog??rance de prendre en charge tout ou une partie de votre fonction informatique durant une p??riode d??finie. Ce service permet??de :
                                    G??rer votre infrastructure et votre Mat??riels informatique
                                    <br>Disposer d?????quipes qualifi??es et comp??tentes, form??es aux derni??res solutions et technologies
                                    <br>Agir rapidement et efficacement sur votre pr??occupation.
                                    <br>G??rer l?????volution de votre infrastructure et les applications de votre syst??me d???information
                                    Services & Clauses
                                    <br>Selon les besoins du client, CIS AFRICA assure une prestation de haut niveau selon le portefeuille du client, ?? savoir :
                                    <br>Le maintien en conditions op??rationnelles du Mat??riels informatique
                                    <br>L'assistance aux utilisateurs
                                    <br>La maintenance de pr??ventive et curative
                                    Avantages
                                    Gr??ce ?? nos diff??rents types de contrats d???infog??rance, nous nous adaptons ?? vos besoins. Nous vous offrons quelques nombreux avantages :
                                    <br>Le but initial est d???externaliser tout le processus informatique de votre soci??t??. Th??oriquement, vous allez ainsi pouvoir concentrer les efforts de votre soci??t?? sur son savoir-faire, sur ses produits et ses services. CIS AFRICA g??rera votre parc informatique ?? votre place, ce qui vous permettra de r??duire vos co??ts.
                                    <br>Nous sommes des experts en la mati??re nous nous impr??gnons des derni??res technologies et m??thodes ?? mettre en place pour optimiser votre parc informatique.
                                    <br>Nous offrons un moyen s??r pour le bon fonctionnement de votre entreprise.
                                    CIS AFRICA a des obligations de moyens et de r??sultats, c'est un gage de qualit??. Nous avons une vision ext??rieure et nous aidons ?? l'??volution de votre entreprise.

                                </p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"Section9\">
                                <h3>GED </h3>
                                <p class=\"p-color\">
                                    Avec la??solution GED?? CIS vos informations prennent vie et se relient entre elles, elles circulent entre coll??gues ou au-del?? des fronti??res de l???entreprise, vous renforcez le travail collaboratif entre les diff??rents services tout en maitrisant le flux des donn??es.
                                    <br>La rapidit?? d???acc??s offerte par??l'archivage ??lectronique des documents??accroit votre productivit?? et renforce votre efficacit??.
                                    <br>La Gestion ??lectronique des Documents utilise des outils et des fonctionnalit??s pour g??rer toutes les ??tapes du cycle de vie d'un document num??rique??:
                                    <br>Cr??ation ou acquisition du document (ex : num??risation) ;
                                    <br>Stockage, indexation et organisation du document ??lectronique ;
                                    <br>Gestion de la s??curit?? des donn??es du document ??lectronique ;
                                    <br>Recherche, consultation du document ??lectronique et ??change des informations ;
                                    <br>Archivage ??lectronique du document durant son d??lai de conservation.

                                    <br> <span class=\"font-weight-bold\">?? QUOI SERT LA GED POUR votre ENTREPRISES ?</span>
                                    <br>Num??riser des documents papier??est parfois indispensable pour les entreprises (travail en ligne, ??change d'informations). Mais les documents ??lectroniques n??cessitent une gestion ?? part enti??re : organisation des fichiers, protection du contenu, etc. Mettre en place un??projet GED??permet aux entreprises d'optimiser la gestion des fichiers (num??risation, classement, archivage???) tout en garantissant leur validit?? juridique.
                                    Les solutions??GED??permettent de faciliter la recherche documentaire, le stockage, l'??change, gr??ce ?? un??logiciel GED???? l'interface intuitive. Les donn??es et les contenus de l'entreprise sont accessibles 24 h/24 dans le cloud sur PC, tablette ou smartphone. L'interface peut ??tre ??galement reli??e avec les diff??rents logiciels m??tiers de l'entreprise. Par exemple, le contenu des factures fournisseurs est communiqu?? au logiciel de gestion comptable d??s leur stockage sur l'application. Il sert alors aussi de base unique documentaire administrative.
                                    ??
                                    <br><span class=\"font-weight-bold\">QUELS SONT LES B??N??FICES DE LA GED ?</span>
                                    <br>La mise en place d'une??solution GED??pr??sente de nombreux atouts par rapport ?? une gestion classique des documents. Elle permet de r??aliser des ??conomies importantes sur l'impression, la diffusion et l'archivage des documents papier. De plus, l'automatisation??de certains??processus m??tier??et la recherche documentaire facilit??e repr??sentent un gros gain de temps. Les collaborateurs de l'entreprise peuvent se concentrer sur du travail ?? r??elle valeur ajout??e. De plus, la GED se charge de donner la m??me valeur juridique au fichier num??rique qu'?? son document papier original. Il devient alors tr??s simple de trouver une information demand??e par l'URSSAF ou par les imp??ts. Enfin, la d??mat??rialisation et l'utilisation d'un??outil de GED??pr??sentent une dimension environnementale assez ??vidente, gr??ce ?? la r??duction du papier.

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
                                            <h3 class=\"title\">N'h??sitez pas ?? nous contacter</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-box mt-30\">
                                                    <input type=\"text\" placeholder=\"Nom et pr??noms\">
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
                                                    <input type=\"text\" placeholder=\"T??l??phone\">
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
</section>", "/var/www/cis-web-site/themes/cis/pages/expertise.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 268);
        static $filters = array("page" => 12);
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
