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

/* /var/www/cis-web-site.localhost/themes/cis/partials/footer.htm */
class __TwigTemplate_0aba7fb0ac5f7bea022faa439a7e4a4d9ba56e9e04ad4610aa2e5526ec115d7d extends \Twig\Template
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
        echo "<footer class=\"footer-area footer-area-2 footer-area-3\">
    <div class=\"footer-overlay\">
        <div class=\"container position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-7\">
                    <div class=\"widget-item-1 mt-30\">
                        <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-1.1.png");
        echo "\" alt=\"\">
                        <p>The web has changed a lot since Vitaly posted his first article back in 2006. The team at Smashing has changed too, as have the things that we bring to our community onferences, books, and our membership added to the online magazine.</p>
                        <p>One thing that hasn’t changed is that we’re a small team — with most of us not working</p>
                    </div> <!-- widget item 1 -->
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-5\">
                    <div class=\"widget-item-2 mt-30\">
                        <h4 class=\"title\">Pages</h4>
                        <div class=\"footer-list\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Home</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Services</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> About</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Career</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Refund</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Terms</a></li>
                            </ul>
                            <ul>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Details</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Contact</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Business</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Affiliate</a></li>
                            </ul>
                        </div>
                    </div> <!-- widget item 2 -->
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"widget-item-2 widget-item-3 mt-30\">
                        <h4 class=\"title\">Working Hours</h4>
                        <ul>
                            <li>Monday - Friday: 7:00 - 17:00</li>
                            <li>Saturday: 7:00 - 12:00</li>
                            <li>Sunday and holidays: 8:00 - 10:00</li>
                        </ul>
                        <p><span>For more then 30 years,</span> IT Service has been a reliable partner in the field of logistics and cargo forwarding.</p>
                        <a href=\"#\"><i class=\"fal fa-angle-right\"></i>Discover More</a>
                    </div> <!-- widget item 3 -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-copyright\">
                        <p>Copyright By@ <span>WebTend</span> - 2021</p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
            <div class=\"shape-1\"></div>
            <div class=\"shape-2\"></div>
            <div class=\"shape-3\"></div>
        </div> <!-- container -->
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site.localhost/themes/cis/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-area footer-area-2 footer-area-3\">
    <div class=\"footer-overlay\">
        <div class=\"container position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-7\">
                    <div class=\"widget-item-1 mt-30\">
                        <img src=\"{{ 'assets/images/logo-1.1.png'|theme }}\" alt=\"\">
                        <p>The web has changed a lot since Vitaly posted his first article back in 2006. The team at Smashing has changed too, as have the things that we bring to our community onferences, books, and our membership added to the online magazine.</p>
                        <p>One thing that hasn’t changed is that we’re a small team — with most of us not working</p>
                    </div> <!-- widget item 1 -->
                </div>
                <div class=\"col-lg-3 offset-lg-1 col-md-5\">
                    <div class=\"widget-item-2 mt-30\">
                        <h4 class=\"title\">Pages</h4>
                        <div class=\"footer-list\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Home</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Services</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> About</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Career</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Refund</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Terms</a></li>
                            </ul>
                            <ul>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Details</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Contact</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Business</a></li>
                                <li><a href=\"#\"><i class=\"fal fa-angle-right\"></i> Affiliate</a></li>
                            </ul>
                        </div>
                    </div> <!-- widget item 2 -->
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"widget-item-2 widget-item-3 mt-30\">
                        <h4 class=\"title\">Working Hours</h4>
                        <ul>
                            <li>Monday - Friday: 7:00 - 17:00</li>
                            <li>Saturday: 7:00 - 12:00</li>
                            <li>Sunday and holidays: 8:00 - 10:00</li>
                        </ul>
                        <p><span>For more then 30 years,</span> IT Service has been a reliable partner in the field of logistics and cargo forwarding.</p>
                        <a href=\"#\"><i class=\"fal fa-angle-right\"></i>Discover More</a>
                    </div> <!-- widget item 3 -->
                </div>
            </div> <!-- row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-copyright\">
                        <p>Copyright By@ <span>WebTend</span> - 2021</p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
            <div class=\"shape-1\"></div>
            <div class=\"shape-2\"></div>
            <div class=\"shape-3\"></div>
        </div> <!-- container -->
    </div>
</footer>", "/var/www/cis-web-site.localhost/themes/cis/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7);
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
