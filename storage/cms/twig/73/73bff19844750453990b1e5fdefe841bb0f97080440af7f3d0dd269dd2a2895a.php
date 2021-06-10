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

/* /var/www/cis-web-site.localhost/themes/cis/layouts/layout.htm */
class __TwigTemplate_e3c26abe61867a35fd2958718015bcb17bf28941f68d71924a3d7aaadc7f81a7 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">

<head>

    <!--====== Required meta tags ======-->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!--====== Title ======-->
    <title>CIS</title>

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo/cis.png");
        echo "\" type=\"image/png' |theme }}\">

    <!--====== Bootstrap css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">

    <!--====== Fontawesome Pro css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/all.css");
        echo "\">

    <!--====== Magnific Popup css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">

    <!--====== Animate css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.min.css");
        echo "\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">

    <!--====== Default css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/default.css");
        echo "\">

    <!--====== Style css ======-->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">


</head>

<body>

<!--  PRELOADER PART START -->
<div class=\"preloader\">
    <div class=\"loading\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</div>
<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "
<!--====== HEADER PART ENDS ======-->

<!--====== BANNER PART START ======-->

<div class=\"banner-area-3 bg_cover\" style=\"background-image: url(../assets/images/banner-bg-3.jpg);\">
    <div class=\"banner-overlay\">
        <img class=\"item-1\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-shape-1.png");
        echo "\" >
        <img class=\"item-2\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-shape-2.png");
        echo "\" >
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"banner-content text-center\">
                        <span>Get Quality Item & Goods</span>
                        <h1 class=\"title\">IT Solutions</h1>
                        <p>Make your products with good & professionals</p>
                    </div> <!-- banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</div>

<!--====== BANNER PART ENDS ======-->

<!--====== BRAND PART START ======-->

<div class=\"brand-area brand-active\">
    <div class=\"brand-item\">
        <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-1.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-2.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-5.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-4.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-5.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-4.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-1.png");
        echo "\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand-2.png");
        echo "\"> 
    </div> <!-- brand item -->
</div>

<!--====== BRAND PART ENDS ======-->

<!--====== FEATURES PART START ======-->

<div class=\"features-area pt-120 pb-120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"features-item\">
                    <strong>Core features</strong>
                    <h2 class=\"title\">Get More Good Experience.</h2>
                    <span>Our knowledge of computers will help us</span>
                    <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                    <ul>
                        <li><a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">Learn More</a></li>
                        <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>
                    </ul>
                    <img class=\"d-none d-lg-block\" src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/features-thumb.jpg");
        echo "\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single-features mt-30\">
                    <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-1.png");
        echo "\"> 
                    <h4 class=\"title\">UI/UX Design</h4>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single-features mt-30\">
                    <img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services-2.png");
        echo "\"> 
                    <h4 class=\"title\">Digital Product</h4>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"features-sub mt-30\">
                    <h5 class=\"title\">Subscribe Now</h5>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <form action=\"#\">
                        <div class=\"input-box\">
                            <input type=\"text\" placeholder=\"Enter your email....\">
                            <button class=\"main-btn\">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== FEATURES PART ENDS ======-->

<!--====== CHOOSE PART START ======-->

<div class=\"choose-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title\">
                    <span>Who we are</span>
                    <h3 class=\"title\">Why Choose Us</h3>
                </div>
                <div class=\"choose-cat\">
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"choose-thumb-area mt-30\">
                    <div class=\"choose-thumb-1\">
                        <img class=\"item-1\" src=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-thumb-1.jpg");
        echo "\">
                    </div>
                    <div class=\"choose-thumb-2\">
                        <img class=\"item-2\" src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-thumb-2.jpg");
        echo "\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"choose-video-thumb mt-115\">
                    <img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/choose-video-thumb.jpg");
        echo "\">
                    <a href=\"#\"><i class=\"fal fa-play\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== CHOOSE PART ENDS ======-->

<!--====== PORTFOLIO 3 PART START ======-->

<div class=\"portfolio-3-area pt-115 pb-120\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-center\">
                    <span>Portfolio</span>
                    <h2 class=\"title\">We Have Done So Much Stuffs</h2>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-1.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>Digital Computing</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 255
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-2.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>it consultant</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 267
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-3.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>design & development</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-4.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>ui/ux</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-5.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>game design</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 303
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio-thumb-6.jpg");
        echo "\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>interior design</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PORTFOLIO 3 PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<div class=\"counter-area bg_cover pt-80 pb-115\" style=\"background-image: url(../assets/images/video-bg.jpg);\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">869</span>+</h3>
                    <p>Project We Have Done</p>
                    <i class=\"fal fa-box\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">100</span>+</h3>
                    <p>People Involved With Us</p>
                    <i class=\"fal fa-users\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">50</span>+</h3>
                    <p>We Are Worldwide</p>
                    <i class=\"fal fa-globe\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">10</span>+</h3>
                    <p>We Got Too Much Awards</p>
                    <i class=\"fal fa-award\"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== COUNTER PART ENDS ======-->

<!--====== FAQ PART START ======-->

<div class=\"faq-area faq-area-3 pt-115\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 order-2 order-lg-1 d-none d-sm-block\">
                <div class=\"faq-thumb\">
                    <div class=\"faq-thumb-1 text-right\">
                        <img src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/faq-thumb-1.jpg");
        echo "\">
                    </div>
                    <div class=\"faq-thumb-2\">
                        <img src=\"";
        // line 368
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/faq-thumb-2.jpg");
        echo "\">
                    </div>
                </div> <!-- faq thumb -->
            </div>
            <div class=\"col-lg-6 order-1 order-lg-2\">
                <div class=\"section-title text-left\">
                    <span>faq</span>
                    <h2 class=\"title\">Get Every Single Answers Here.</h2>
                </div> <!-- section title -->
                <div class=\"faq-accordion\">
                    <div class=\"accordion\" id=\"accordionExample\">
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingOne\">
                                <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Today, the term Information Technology
                                </a>
                            </div>

                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingTwo\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Over the years, a wide range of developments
                                </a>
                            </div>
                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingThree\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    As a result, most of us need to know
                                </a>
                            </div>
                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingFour\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                    Our knowledge of computers will help us
                                </a>
                            </div>
                            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- faq accordion -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== FAQ PART ENDS ======-->

<!--====== GET IN TOUCH PART START ======-->

<div class=\"get-in-touch-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title text-left\">
                    <span>Get In Touch</span>
                    <h2 class=\"title\">Estimate For Your Projects.</h2>
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
                            <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Submit Now</button>
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

<!--====== footer PART START ======-->
";
        // line 476
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 477
        echo "<!--====== footer PART ENDS ======-->

<!--====== BACK TO TOP ======-->
<div class=\"back-to-top back-to-top-2\">
    <a href=\"\">
        <i class=\"fas fa-arrow-up\"></i>
    </a>
</div>
<!--====== BACK TO TOP ======-->



<!--====== jquery js ======-->
<script src=\"";
        // line 490
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.6.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 491
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-1.12.4.min.js");
        echo "\"></script>

<!--====== Bootstrap js ======-->
<script src=\"";
        // line 494
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 495
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>

<!--====== Slick js ======-->
<script src=\"";
        // line 498
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick.min.js");
        echo "\"></script>

<!--====== Isotope js ======-->
<script src=\"";
        // line 501
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.min.js");
        echo "\"></script>

<!--====== Images Loaded js ======-->
<script src=\"";
        // line 504
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 507
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 510
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.counterup.min.js");
        echo "\"></script>

<!--====== Circle Progress js ======-->
<script src=\"";
        // line 513
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/circle-progress.min.js");
        echo "\"></script>



<!--====== Syotimer js ======-->
<script src=\"";
        // line 518
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.syotimer.min.js");
        echo "\"></script>

<!--====== Nice Select js ======-->
<script src=\"";
        // line 521
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.nice-select.min.js");
        echo "\"></script>

<!--====== wow js ======-->
<script src=\"";
        // line 524
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"";
        // line 527
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/waypoints.min.js");
        echo "\"></script>

<!--====== Main js ======-->
<script src=\"";
        // line 530
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/cis-web-site.localhost/themes/cis/layouts/layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 530,  715 => 527,  709 => 524,  703 => 521,  697 => 518,  689 => 513,  683 => 510,  677 => 507,  671 => 504,  665 => 501,  659 => 498,  653 => 495,  649 => 494,  643 => 491,  639 => 490,  624 => 477,  620 => 476,  509 => 368,  503 => 365,  438 => 303,  423 => 291,  408 => 279,  393 => 267,  378 => 255,  363 => 243,  334 => 217,  323 => 209,  317 => 206,  259 => 151,  248 => 143,  238 => 136,  214 => 115,  208 => 112,  202 => 109,  196 => 106,  190 => 103,  184 => 100,  178 => 97,  172 => 94,  148 => 73,  144 => 72,  135 => 65,  131 => 64,  104 => 40,  98 => 37,  92 => 34,  86 => 31,  80 => 28,  74 => 25,  68 => 22,  62 => 19,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>

    <!--====== Required meta tags ======-->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!--====== Title ======-->
    <title>CIS</title>

    <!--====== Favicon Icon ======-->
    <link rel=\"shortcut icon\" href=\"{{ 'assets/logo/cis.png' |theme }}\" type=\"image/png' |theme }}\">

    <!--====== Bootstrap css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css' |theme }}\">

    <!--====== Fontawesome Pro css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/all.css' |theme }}\">

    <!--====== Magnific Popup css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' |theme }}\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/nice-select.css' |theme }}\">

    <!--====== Animate css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.min.css' |theme }}\">

    <!--====== Slick css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css' |theme }}\">

    <!--====== Default css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/default.css' |theme }}\">

    <!--====== Style css ======-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' |theme }}\">


</head>

<body>

<!--  PRELOADER PART START -->
<div class=\"preloader\">
    <div class=\"loading\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</div>
<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

{% partial 'header' %}

<!--====== HEADER PART ENDS ======-->

<!--====== BANNER PART START ======-->

<div class=\"banner-area-3 bg_cover\" style=\"background-image: url(../assets/images/banner-bg-3.jpg);\">
    <div class=\"banner-overlay\">
        <img class=\"item-1\" src=\"{{ 'assets/images/banner-shape-1.png' |theme }}\" >
        <img class=\"item-2\" src=\"{{ 'assets/images/banner-shape-2.png' |theme }}\" >
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"banner-content text-center\">
                        <span>Get Quality Item & Goods</span>
                        <h1 class=\"title\">IT Solutions</h1>
                        <p>Make your products with good & professionals</p>
                    </div> <!-- banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</div>

<!--====== BANNER PART ENDS ======-->

<!--====== BRAND PART START ======-->

<div class=\"brand-area brand-active\">
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-1.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-2.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-5.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-4.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-5.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-4.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-1.png' |theme }}\"> 
    </div> <!-- brand item -->
    <div class=\"brand-item\">
        <img src=\"{{ 'assets/images/brand-2.png' |theme }}\"> 
    </div> <!-- brand item -->
</div>

<!--====== BRAND PART ENDS ======-->

<!--====== FEATURES PART START ======-->

<div class=\"features-area pt-120 pb-120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"features-item\">
                    <strong>Core features</strong>
                    <h2 class=\"title\">Get More Good Experience.</h2>
                    <span>Our knowledge of computers will help us</span>
                    <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                    <ul>
                        <li><a class=\"main-btn wow fadeInUp\" href=\"#\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">Learn More</a></li>
                        <li><a class=\"main-btn main-btn-2 wow fadeInUp\" href=\"#\" data-wow-duration=\"1s\" data-wow-delay=\".6s\"> <i class=\"fal fa-video\"></i>Learn More</a></li>
                    </ul>
                    <img class=\"d-none d-lg-block\" src=\"{{ 'assets/images/features-thumb.jpg' |theme }}\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single-features mt-30\">
                    <img src=\"{{ 'assets/images/services-1.png' |theme }}\"> 
                    <h4 class=\"title\">UI/UX Design</h4>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single-features mt-30\">
                    <img src=\"{{ 'assets/images/services-2.png' |theme }}\"> 
                    <h4 class=\"title\">Digital Product</h4>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <a href=\"services-details.html\"><i class=\"fal fa-angle-right\"></i> Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"features-sub mt-30\">
                    <h5 class=\"title\">Subscribe Now</h5>
                    <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                    <form action=\"#\">
                        <div class=\"input-box\">
                            <input type=\"text\" placeholder=\"Enter your email....\">
                            <button class=\"main-btn\">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== FEATURES PART ENDS ======-->

<!--====== CHOOSE PART START ======-->

<div class=\"choose-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title\">
                    <span>Who we are</span>
                    <h3 class=\"title\">Why Choose Us</h3>
                </div>
                <div class=\"choose-cat\">
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\".5s\" data-wow-delay=\".4s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\".6s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                    <div class=\"choose-cat-item mt-40 wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\".8s\">
                        <h4 class=\"title\">Information Technology</h4>
                        <p>Many aspects of computing and technology and the term is more recognizable than before.</p>
                        <i class=\"fal fa-check\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"choose-thumb-area mt-30\">
                    <div class=\"choose-thumb-1\">
                        <img class=\"item-1\" src=\"{{ 'assets/images/choose-thumb-1.jpg' |theme }}\">
                    </div>
                    <div class=\"choose-thumb-2\">
                        <img class=\"item-2\" src=\"{{ 'assets/images/choose-thumb-2.jpg' |theme }}\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"choose-video-thumb mt-115\">
                    <img src=\"{{ 'assets/images/choose-video-thumb.jpg' |theme }}\">
                    <a href=\"#\"><i class=\"fal fa-play\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== CHOOSE PART ENDS ======-->

<!--====== PORTFOLIO 3 PART START ======-->

<div class=\"portfolio-3-area pt-115 pb-120\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"section-title text-center\">
                    <span>Portfolio</span>
                    <h2 class=\"title\">We Have Done So Much Stuffs</h2>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-1.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>Digital Computing</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.2s\" data-wow-delay=\".4s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-2.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>it consultant</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.4s\" data-wow-delay=\".6s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-3.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>design & development</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".8s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-4.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>ui/ux</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Aspects of computing and technology and the term</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"1.8s\" data-wow-delay=\"1s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-5.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>game design</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Today, the term Informati on Technology (IT)</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-9 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\"1.2s\">
                <div class=\"single-portfolio mt-30\">
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/portfolio-thumb-6.jpg' |theme }}\">
                    </div>
                    <div class=\"portfolio-content\">
                        <span>interior design</span>
                        <a href=\"case-details.html\"><h4 class=\"title\">Has ballooned to encomp ass many aspects</h4></a>
                        <p>Today, the term Information Technology (IT) has ballooned to encompass many aspects of computing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PORTFOLIO 3 PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<div class=\"counter-area bg_cover pt-80 pb-115\" style=\"background-image: url(../assets/images/video-bg.jpg);\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">869</span>+</h3>
                    <p>Project We Have Done</p>
                    <i class=\"fal fa-box\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">100</span>+</h3>
                    <p>People Involved With Us</p>
                    <i class=\"fal fa-users\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">50</span>+</h3>
                    <p>We Are Worldwide</p>
                    <i class=\"fal fa-globe\"></i>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item mt-30\">
                    <h3 class=\"title\"><span class=\"counter\">10</span>+</h3>
                    <p>We Got Too Much Awards</p>
                    <i class=\"fal fa-award\"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== COUNTER PART ENDS ======-->

<!--====== FAQ PART START ======-->

<div class=\"faq-area faq-area-3 pt-115\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 order-2 order-lg-1 d-none d-sm-block\">
                <div class=\"faq-thumb\">
                    <div class=\"faq-thumb-1 text-right\">
                        <img src=\"{{ 'assets/images/faq-thumb-1.jpg' |theme }}\">
                    </div>
                    <div class=\"faq-thumb-2\">
                        <img src=\"{{ 'assets/images/faq-thumb-2.jpg' |theme }}\">
                    </div>
                </div> <!-- faq thumb -->
            </div>
            <div class=\"col-lg-6 order-1 order-lg-2\">
                <div class=\"section-title text-left\">
                    <span>faq</span>
                    <h2 class=\"title\">Get Every Single Answers Here.</h2>
                </div> <!-- section title -->
                <div class=\"faq-accordion\">
                    <div class=\"accordion\" id=\"accordionExample\">
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingOne\">
                                <a class=\"\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Today, the term Information Technology
                                </a>
                            </div>

                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingTwo\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    Over the years, a wide range of developments
                                </a>
                            </div>
                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingThree\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    As a result, most of us need to know
                                </a>
                            </div>
                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingFour\">
                                <a class=\"collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                    Our knowledge of computers will help us
                                </a>
                            </div>
                            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real. Today, the term Information Technology (IT) has ballooned to encompass is real.Today, the term Information Technology (IT) has ballooned to encompass is real. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- faq accordion -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== FAQ PART ENDS ======-->

<!--====== GET IN TOUCH PART START ======-->

<div class=\"get-in-touch-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title text-left\">
                    <span>Get In Touch</span>
                    <h2 class=\"title\">Estimate For Your Projects.</h2>
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
                            <button class=\"main-btn wow fadeInUp\" data-wow-duration=\"1.6s\" data-wow-delay=\".2s\" type=\"submit\">Submit Now</button>
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

<!--====== footer PART START ======-->
{% partial 'footer' %}
<!--====== footer PART ENDS ======-->

<!--====== BACK TO TOP ======-->
<div class=\"back-to-top back-to-top-2\">
    <a href=\"\">
        <i class=\"fas fa-arrow-up\"></i>
    </a>
</div>
<!--====== BACK TO TOP ======-->



<!--====== jquery js ======-->
<script src=\"{{ 'assets/js/vendor/modernizr-3.6.0.min.js' | theme}}\"></script>
<script src=\"{{ 'assets/js/vendor/jquery-1.12.4.min.js' | theme}}\"></script>

<!--====== Bootstrap js ======-->
<script src=\"{{ 'assets/js/bootstrap.min.js' | theme}}\"></script>
<script src=\"{{ 'assets/js/popper.min.js' | theme}}\"></script>

<!--====== Slick js ======-->
<script src=\"{{ 'assets/js/slick.min.js' | theme}}\"></script>

<!--====== Isotope js ======-->
<script src=\"{{ 'assets/js/isotope.pkgd.min.js' | theme}}\"></script>

<!--====== Images Loaded js ======-->
<script src=\"{{ 'assets/js/imagesloaded.pkgd.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/jquery.magnific-popup.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/jquery.counterup.min.js' | theme}}\"></script>

<!--====== Circle Progress js ======-->
<script src=\"{{ 'assets/js/circle-progress.min.js' | theme}}\"></script>



<!--====== Syotimer js ======-->
<script src=\"{{ 'assets/js/jquery.syotimer.min.js' | theme}}\"></script>

<!--====== Nice Select js ======-->
<script src=\"{{ 'assets/js/jquery.nice-select.min.js' | theme}}\"></script>

<!--====== wow js ======-->
<script src=\"{{ 'assets/js/wow.min.js' | theme}}\"></script>

<!--====== Magnific Popup js ======-->
<script src=\"{{ 'assets/js/waypoints.min.js' | theme}}\"></script>

<!--====== Main js ======-->
<script src=\"{{ 'assets/js/main.js' | theme}}\"></script>

</body>

</html>", "/var/www/cis-web-site.localhost/themes/cis/layouts/layout.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 64);
        static $filters = array("theme" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
