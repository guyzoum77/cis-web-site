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

/* /var/www/cis-web-site/themes/cis/partials/nos-partenaires.htm */
class __TwigTemplate_98736edeca263d51b8a97466376668489986f3d8cd744deb3fef30cb0de3e98c extends \Twig\Template
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
        echo "<div class=\"what-we-do-area yellow-bg pt-105 pb-120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h4 class=\"title text-center\">Nos partenaires</h4>
                <p class=\"h4 text-pure-blue font-weight-bold text-center\">Nous offrons une meilleur solution pour votre entreprise informatique</p>
            </div>
        </div>
    </div>
</div>

<div class=\"latest-services-area\">
    <div class=\"container\">
        <div class=\"row justify-content-center mt-115\">
            <div class=\"col-lg-2  wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\"0s\" style=\"visibility: visible; animation-duration: 0.5s; animation-delay: 0s; animation-name: fadeInUp;\">
                <div class=\"card mt-15 mb-55\">
                    <div class=\"card-body\">
                        <div class=\"services-thumb text-center\">
                            <img src=\"";
        // line 19
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
        // line 28
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
        // line 37
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
        // line 46
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
        // line 55
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
        // line 64
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
        // line 75
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
        // line 84
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
        // line 93
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
        // line 102
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
        // line 111
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
        // line 120
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
        // line 131
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
        // line 140
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
        // line 149
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
        // line 158
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
        // line 167
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
        // line 176
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
        // line 187
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
        // line 196
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
        // line 205
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
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images-cis/il-nous-ont-fait-confiance/cisco.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site/themes/cis/partials/nos-partenaires.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 214,  305 => 205,  293 => 196,  281 => 187,  267 => 176,  255 => 167,  243 => 158,  231 => 149,  219 => 140,  207 => 131,  193 => 120,  181 => 111,  169 => 102,  157 => 93,  145 => 84,  133 => 75,  119 => 64,  107 => 55,  95 => 46,  83 => 37,  71 => 28,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"what-we-do-area yellow-bg pt-105 pb-120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h4 class=\"title text-center\">Nos partenaires</h4>
                <p class=\"h4 text-pure-blue font-weight-bold text-center\">Nous offrons une meilleur solution pour votre entreprise informatique</p>
            </div>
        </div>
    </div>
</div>

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
</div>", "/var/www/cis-web-site/themes/cis/partials/nos-partenaires.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
