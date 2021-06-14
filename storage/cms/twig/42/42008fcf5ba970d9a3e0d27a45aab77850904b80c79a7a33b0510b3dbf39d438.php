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

/* /var/www/cis-web-site.localhost/themes/cis/pages/presentation.htm */
class __TwigTemplate_0b7ee61a2575b3400070053db960bee4887284d2d61e8b774697cbc113addd46 extends \Twig\Template
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
                            <span>25 Years Of Experience</span>
                            <h2 class=\"title\">Not only explore for job done.</h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                            <a href=\"#\">Read More</a>
                        </div> <!-- experience item -->
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-8 wow fadeInUp\" data-wow-duration=\".5s\" data-wow-delay=\".2s\">
                        <div class=\"single-experience mt-30\">
                            <img src=\"";
        // line 44
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
        // line 56
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
        // line 67
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
        // line 89
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
        // line 124
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
        // line 136
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
        // line 153
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
        // line 165
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

        <div class=\"about-faq-area pb-100 bg_cover\" style=\"background-image: url(themme/cis/assets/images/faq-bg.jpg);\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-faq-content\">
                            <span>FAQ</span>
                            <h2 class=\"title\">Get Every answer from here.</h2>
                        </div>
                        <div class=\"faq-accordion-3 mt-30\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".2s\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".3s\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".4s\">
                                    <div class=\"card-header\" id=\"headingThree\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".5s\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".6s\">
                                    <div class=\"card-header\" id=\"headingFive\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingFive\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT FAQ PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site.localhost/themes/cis/pages/presentation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 165,  217 => 153,  197 => 136,  182 => 124,  144 => 89,  119 => 67,  105 => 56,  90 => 44,  56 => 13,  52 => 12,  39 => 1,);
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
                            <span>25 Years Of Experience</span>
                            <h2 class=\"title\">Not only explore for job done.</h2>
                        </div> <!-- experience item -->
                    </div>
                    <div class=\"col-lg-6 offset-lg-1\">
                        <div class=\"experience-item\">
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                            <a href=\"#\">Read More</a>
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

        <div class=\"about-faq-area pb-100 bg_cover\" style=\"background-image: url(themme/cis/assets/images/faq-bg.jpg);\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-faq-content\">
                            <span>FAQ</span>
                            <h2 class=\"title\">Get Every answer from here.</h2>
                        </div>
                        <div class=\"faq-accordion-3 mt-30\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".2s\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>

                                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".3s\">
                                    <div class=\"card-header\" id=\"headingTwo\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".4s\">
                                    <div class=\"card-header\" id=\"headingThree\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".5s\">
                                    <div class=\"card-header\" id=\"headingFour\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class=\"card wow fadeInLeft\" data-wow-duration=\".1.2s\" data-wow-delay=\".6s\">
                                    <div class=\"card-header\" id=\"headingFive\">
                                        <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            <i class=\"fal fa-magic\"></i>Technical content may have persuasive objectives
                                        </a>
                                    </div>
                                    <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingFive\" data-parent=\"#accordionExample\">
                                        <div class=\"card-body\">
                                            <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== ABOUT FAQ PART ENDS ======-->
    </div>
</section>", "/var/www/cis-web-site.localhost/themes/cis/pages/presentation.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 12, "theme" => 44);
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
