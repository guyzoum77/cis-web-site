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

/* /var/www/cis-web-site.localhost/themes/cis/pages/nos-services.htm */
class __TwigTemplate_cdbf7f558f1b08bf6713ae20b06221ba0deccbcf6d1a523b6d84184928d327fa extends \Twig\Template
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
                            <h2 class=\"title\">Nos Services</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Nos Services</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== PAGE TITLE PART ENDS ======-->

        <!--====== SERVICES OPTIMIZATION PART START ======-->

        <div class=\"services-optimization-area pt-80 pb-120\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 order-lg-1 order-2\">
                        <div class=\"services-optimization-thumb mt-40\">
                            <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-op-1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"services-optimization-thumb-2\">
                            <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-op-2.jpg");
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 order-lg-2 order-1\">
                        <div class=\"services-optimization-content mt-40\">
                            <span>Search Enging Optimization</span>
                            <h3 class=\"title\">Nothing to do anything.</h3>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                            <div class=\"action-support-item\">
                                <p>Make A Call</p>
                                <span>897 876 76 56 4</span>
                                <i class=\"fal fa-phone\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== SERVICES OPTIMIZATION PART ENDS ======-->

        <!--====== INTRO VIDEO PART START ======-->

        <div class=\"intro-video-area  bg_cover\" style=\"background-image: url(themes/cis/assets/images/intro-video-bg.jpg);\">
            <div class=\"intro-overlay\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"intro-video-content  mt-30\">
                                <span class=\"bar\">Intro Video</span>
                                <h2 class=\"title\">How we growth our business.</h2>
                                <p class=\"text-1\">The introduction of cloud and mobile technologies into enterprise software.</p>
                                <p class=\"text-2\">hether you are building an enterprise web portal or a state-of-the-art website, you always need the right modern tools. Well-built and maintained PHP frameworks provide those tools in abundance, allowing maintained PHP frameworks provide those tools in abundance, allowing developers to save time, re-use code, and streamline the back end. As software development tools continuously.</p>
                                <a class=\"main-btn\" href=\"#\">Learn More</a>
                            </div> <!-- intro video content -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"intro-thumb mt-30\">
                                <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/intro-thumb.jpg");
        echo "\" alt=\"\">
                                <a class=\"video-popup\" href=\"index.html\"><i class=\"fas fa-play\"></i></a>
                            </div> <!-- intro thumb -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>

        <!--====== INTRO VIDEO PART ENDS ======-->

        <!--====== SERVICES PLANS PART START ======-->

        <div class=\"services-plans-area\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"services-title mb-50\">
                            <span>plans</span>
                            <h2 class=\"title\">Here is plans</h2>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"plans-tab-btn d-flex justify-content-md-end justify-content-start\">
                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Monthly</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Early Birds</b>
                                    <h3 class=\"title\">\$ <span>9</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Team</b>
                                    <h3 class=\"title\">\$ <span>32</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Personal</b>
                                    <h3 class=\"title\">\$ <span>69</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Plutinum</b>
                                    <h3 class=\"title\">\$ <span>99</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Early Birds</b>
                                    <h3 class=\"title\">\$ <span>56</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Team</b>
                                    <h3 class=\"title\">\$ <span>99</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Personal</b>
                                    <h3 class=\"title\">\$ <span>133</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Plutinum</b>
                                    <h3 class=\"title\">\$ <span>599</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== SERVICES PLANS PART ENDS ======-->

        <!--====== NEWS PART START ======-->

        <div class=\"news-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-9\">
                        <div class=\"section-title-2 text-center pl-25 pr-25\">
                            <h2 class=\"title\">News Feeds</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title 2 -->
                    </div>
                </div> <!-- row -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/news-1.jpg");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/news-2.jpg");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/news-3.jpg");
        echo "\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== NEWS PART ENDS ======-->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site.localhost/themes/cis/pages/nos-services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 229,  271 => 219,  258 => 209,  117 => 71,  76 => 33,  70 => 30,  39 => 1,);
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
                            <h2 class=\"title\">Nos Services</h2>
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil </a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Nos Services</li>
                                </ol>
                            </nav>
                        </div> <!-- page title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--====== PAGE TITLE PART ENDS ======-->

        <!--====== SERVICES OPTIMIZATION PART START ======-->

        <div class=\"services-optimization-area pt-80 pb-120\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 order-lg-1 order-2\">
                        <div class=\"services-optimization-thumb mt-40\">
                            <img src=\"{{ 'assets/images/services-op-1.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"services-optimization-thumb-2\">
                            <img src=\"{{ 'assets/images/services-op-2.jpg'|theme }}\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 order-lg-2 order-1\">
                        <div class=\"services-optimization-content mt-40\">
                            <span>Search Enging Optimization</span>
                            <h3 class=\"title\">Nothing to do anything.</h3>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                            <div class=\"action-support-item\">
                                <p>Make A Call</p>
                                <span>897 876 76 56 4</span>
                                <i class=\"fal fa-phone\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== SERVICES OPTIMIZATION PART ENDS ======-->

        <!--====== INTRO VIDEO PART START ======-->

        <div class=\"intro-video-area  bg_cover\" style=\"background-image: url(themes/cis/assets/images/intro-video-bg.jpg);\">
            <div class=\"intro-overlay\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"intro-video-content  mt-30\">
                                <span class=\"bar\">Intro Video</span>
                                <h2 class=\"title\">How we growth our business.</h2>
                                <p class=\"text-1\">The introduction of cloud and mobile technologies into enterprise software.</p>
                                <p class=\"text-2\">hether you are building an enterprise web portal or a state-of-the-art website, you always need the right modern tools. Well-built and maintained PHP frameworks provide those tools in abundance, allowing maintained PHP frameworks provide those tools in abundance, allowing developers to save time, re-use code, and streamline the back end. As software development tools continuously.</p>
                                <a class=\"main-btn\" href=\"#\">Learn More</a>
                            </div> <!-- intro video content -->
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"intro-thumb mt-30\">
                                <img src=\"{{ 'assets/images/intro-thumb.jpg'|theme }}\" alt=\"\">
                                <a class=\"video-popup\" href=\"index.html\"><i class=\"fas fa-play\"></i></a>
                            </div> <!-- intro thumb -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
        </div>

        <!--====== INTRO VIDEO PART ENDS ======-->

        <!--====== SERVICES PLANS PART START ======-->

        <div class=\"services-plans-area\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"services-title mb-50\">
                            <span>plans</span>
                            <h2 class=\"title\">Here is plans</h2>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"plans-tab-btn d-flex justify-content-md-end justify-content-start\">
                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Monthly</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Early Birds</b>
                                    <h3 class=\"title\">\$ <span>9</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Team</b>
                                    <h3 class=\"title\">\$ <span>32</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Personal</b>
                                    <h3 class=\"title\">\$ <span>69</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Plutinum</b>
                                    <h3 class=\"title\">\$ <span>99</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Early Birds</b>
                                    <h3 class=\"title\">\$ <span>56</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Team</b>
                                    <h3 class=\"title\">\$ <span>99</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Personal</b>
                                    <h3 class=\"title\">\$ <span>133</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-8 mt-30\">
                                <div class=\"plans-item bg_cover text-center\" style=\"background-image: url(theme/cis/assets/images/plans-thumb.jpg);\">
                                    <b>Plutinum</b>
                                    <h3 class=\"title\">\$ <span>599</span></h3>
                                    <span>Per Month</span>
                                    <p>The functional goal of technical content is to help people use a product successfully.</p>
                                    <a class=\"main-btn main-btn-2\" href=\"#\">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== SERVICES PLANS PART ENDS ======-->

        <!--====== NEWS PART START ======-->

        <div class=\"news-area\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-9\">
                        <div class=\"section-title-2 text-center pl-25 pr-25\">
                            <h2 class=\"title\">News Feeds</h2>
                            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology.</p>
                        </div> <!-- section title 2 -->
                    </div>
                </div> <!-- row -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"{{ 'assets/images/news-1.jpg'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"{{ 'assets/images/news-2.jpg'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                    <div class=\"col-lg-4 col-md-6 col-sm-9\">
                        <div class=\"single-news mt-30\">
                            <img src=\"{{ 'assets/images/news-3.jpg'|theme }}\" alt=\"\">
                            <div class=\"single-news-overlay\">
                                <span>Design/SEO</span>
                                <h5 class=\"title\"><a href=\"#\">A series of iOS 7 inspired vector icons.</a></h5>
                                <a href=\"#\"><i class=\"fal fa-long-arrow-right\"></i></a>
                            </div>
                        </div> <!-- single news -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--====== NEWS PART ENDS ======-->
    </div>
</section>", "/var/www/cis-web-site.localhost/themes/cis/pages/nos-services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 30);
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
