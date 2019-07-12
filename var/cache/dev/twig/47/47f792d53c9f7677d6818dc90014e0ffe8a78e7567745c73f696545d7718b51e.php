<?php

/* base2.html.twig */
class __TwigTemplate_ab1aaff5676a76fc9e579480c81ea035a2d8f2db56aba4061cf2561c060e3463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Home - Cave à Vin</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"images/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    <!-- Bulma Version 0.7.2-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/blog.css\">
</head>

<body>
<!-- START NAV -->
<nav class=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" >
                <img src=\"images/bulma.png\" alt=\"Logo\">
            </a>
            <span class=\"navbar-burger burger\" data-target=\"navbarMenu\">
                        <span></span>
                <span></span>
                <span></span>
                </span>
        </div>
        <div id=\"navbarMenu\" class=\"navbar-menu\">
            <div class=\"navbar-end\">
                <a class=\"navbar-item is-active\" href=\"/\">
                    Home
                </a>
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\">
                        Tables
                    </a>
                    <div class=\"navbar-dropdown\">
                        <a class=\"navbar-item\" href=\"/Origine\" >
                            Origine
                        </a>
                        <a class=\"navbar-item\" href=\"/Vin\" >
                            Vin
                        </a>
                        ";
        // line 48
        echo "                        <a class=\"navbar-item\" href=\"/Bouteille\" >
                            Bouteille
                        </a>
                    </div>
                </div>
                <a class=\"navbar-item\">
                    Equipes
                </a>
                <a class=\"navbar-item\">
                    Help
                </a>
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\">
                        Account
                    </a>
                    <div class=\"navbar-dropdown\">
                        <a class=\"navbar-item\">
                            Profile
                        </a>
                        <a class=\"navbar-item\">
                            Settings
                        </a>
                        <hr class=\"navbar-divider\">
                        <a class=\"navbar-item\" href=\"/logout\" >
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->


";
        // line 83
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method") == "home")) {
            // line 84
            echo "
    <section class=\"hero is-info is-medium is-bold\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <h1 class=\"title\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
            </div>
        </div>
    </section>


    <div class=\"container\">
        <!-- START ARTICLE FEED -->
        <section class=\"articles\">
            <div class=\"column is-8 is-offset-2\">
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Introducing a new feature for paid subscribers</p>
                                <div class=\"tags has-addons level-item\">
                                    <span class=\"tag is-rounded is-info\">@skeetskeet</span>
                                    <span class=\"tag is-rounded\">May 10, 2018</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                            <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat. Non sodales neque sodales ut etiam.
                                Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                            <h3 class=\"has-text-centered\">How to properly center tags in bulma?</h3>
                            <p> Proper centering of tags in bulma is done with class: <pre>level-item</pre>
                            Voluptat ut farmacium tellus in metus vulputate. Feugiat in fermentum posuere urna nec. Pharetra convallis posuere morbi leo urna molestie.
                            Accumsan lacus vel facilisis volutpat est velit egestas. Fermentum leo vel orci porta. Faucibus interdum posuere lorem ipsum.</p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"http://www.radfaces.com/images/avatars/daria-morgendorffer.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Sapien eget mi proin sed 🔱</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"#\">@daria</a> on February 17, 2018
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                            </p>
                            <p>
                                Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                            </p>
                            <h3 class=\"has-text-centered\">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Cras tincidunt lobortis feugiat vivamus.</h3>
                            <p>
                                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                                Arcu non sodales neque sodales ut etiam sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START PROMO BLOCK -->
                <section class=\"hero is-info is-bold is-small promo-block\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                <i class=\"fa fa-bell-o\"></i> Nemo enim ipsam voluptatem quia.</h1>
                            <span class=\"tag is-black is-medium is-rounded\">
                                        Natus error sit voluptatem
                                    </span>
                        </div>
                    </div>
                </section>
                <!-- END PROMO BLOCK -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"http://www.radfaces.com/images/avatars/angela-chase.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Cras tincidunt lobortis feugiat vivamus.</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"#\">@angela</a> on October 7, 2017
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                            </p>
                            <p>
                                Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                            </p>
                            <h3 class=\"has-text-centered\">“Everyone should be able to do one card trick, tell two jokes, and recite three poems, in case they are ever trapped in an elevator.”</h3>
                            <p>
                                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                                Arcu non sodales neque sodales ut etiam sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
        </section>
        <!-- END ARTICLE FEED -->
    </div>

";
        } else {
            // line 200
            echo "
    <section class=\"section \">
        <div class=\"container\">
            <div class=\"columns\">
                <div class=\"column is-one-quarter-desktop\">
                    <aside class=\"menu is-hidden-touch\">
                        <p class=\"menu-label\">
                            <a href=\"";
            // line 207
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilOrigine");
            echo "\">Region</a>
                        </p>
                        ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["origines"] ?? $this->getContext($context, "origines")));
            foreach ($context['_seq'] as $context["_key"] => $context["origine"]) {
                // line 210
                echo "                            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["origine"], "nomAppellation", []), "html", null, true);
                echo "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['origine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "
                        <p class=\"menu-label\">
                            <a href=\"";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilVin");
            echo "\">Vin</a>
                        </p>
                        ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? $this->getContext($context, "vins")));
            foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
                // line 217
                echo "                            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "nomVin", []), "html", null, true);
                echo "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "

                    </aside>
                </div> <!-- is-one-quarter-desktop -->




                <div class =\"column is-three-quarters\">

                    ";
            // line 230
            echo "                    ";
            // line 231
            echo "                    ";
            // line 232
            echo "                    ";
            // line 233
            echo "                    ";
            // line 234
            echo "                    ";
            // line 235
            echo "                    ";
            // line 236
            echo "                    ";
            // line 237
            echo "                    ";
            // line 238
            echo "                    ";
            // line 239
            echo "                    ";
            // line 240
            echo "                    ";
            // line 241
            echo "                    ";
            // line 242
            echo "                    ";
            // line 243
            echo "                    ";
            // line 244
            echo "                    ";
            // line 245
            echo "                    ";
            // line 246
            echo "
                    ";
            // line 248
            echo "                    ";
            // line 249
            echo "

                    ";
            // line 251
            $this->displayBlock('body', $context, $blocks);
            // line 252
            echo "                    ";
            $this->displayBlock('javascripts', $context, $blocks);
            // line 253
            echo "                </div>


            </div> <!--columns-->
        </div><!--Container-->
    </section>

";
        }
        // line 261
        echo "
<footer class=\"footer has-text-centered\">
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-8-desktop is-offset-2-desktop\">
                <p> &copy 2019, Doubalo LAMIEN, Abdoulkader GASSAMA, Jawaher TAHEREDDINE </p>
                Powered by Symfony ";
        // line 267
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "
                and Bulma 0.7.4
            </div>
        </div>
    </div>
</footer>

<script async type=\"text/javascript\" src=\"_javascript/bulma.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 251
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 252,  378 => 251,  357 => 267,  349 => 261,  339 => 253,  336 => 252,  334 => 251,  330 => 249,  328 => 248,  325 => 246,  323 => 245,  321 => 244,  319 => 243,  317 => 242,  315 => 241,  313 => 240,  311 => 239,  309 => 238,  307 => 237,  305 => 236,  303 => 235,  301 => 234,  299 => 233,  297 => 232,  295 => 231,  293 => 230,  281 => 219,  272 => 217,  268 => 216,  263 => 214,  259 => 212,  250 => 210,  246 => 209,  241 => 207,  232 => 200,  114 => 84,  112 => 83,  75 => 48,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Home - Cave à Vin</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"images/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    <!-- Bulma Version 0.7.2-->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/blog.css\">
</head>

<body>
<!-- START NAV -->
<nav class=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-item\" >
                <img src=\"images/bulma.png\" alt=\"Logo\">
            </a>
            <span class=\"navbar-burger burger\" data-target=\"navbarMenu\">
                        <span></span>
                <span></span>
                <span></span>
                </span>
        </div>
        <div id=\"navbarMenu\" class=\"navbar-menu\">
            <div class=\"navbar-end\">
                <a class=\"navbar-item is-active\" href=\"/\">
                    Home
                </a>
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\">
                        Tables
                    </a>
                    <div class=\"navbar-dropdown\">
                        <a class=\"navbar-item\" href=\"/Origine\" >
                            Origine
                        </a>
                        <a class=\"navbar-item\" href=\"/Vin\" >
                            Vin
                        </a>
                        {#<hr class=\"navbar-divider\">#}
                        <a class=\"navbar-item\" href=\"/Bouteille\" >
                            Bouteille
                        </a>
                    </div>
                </div>
                <a class=\"navbar-item\">
                    Equipes
                </a>
                <a class=\"navbar-item\">
                    Help
                </a>
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <a class=\"navbar-link\">
                        Account
                    </a>
                    <div class=\"navbar-dropdown\">
                        <a class=\"navbar-item\">
                            Profile
                        </a>
                        <a class=\"navbar-item\">
                            Settings
                        </a>
                        <hr class=\"navbar-divider\">
                        <a class=\"navbar-item\" href=\"/logout\" >
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->


{% if app.request.get('_route') == 'home' %}

    <section class=\"hero is-info is-medium is-bold\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <h1 class=\"title\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
            </div>
        </div>
    </section>


    <div class=\"container\">
        <!-- START ARTICLE FEED -->
        <section class=\"articles\">
            <div class=\"column is-8 is-offset-2\">
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Introducing a new feature for paid subscribers</p>
                                <div class=\"tags has-addons level-item\">
                                    <span class=\"tag is-rounded is-info\">@skeetskeet</span>
                                    <span class=\"tag is-rounded\">May 10, 2018</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                            <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat. Non sodales neque sodales ut etiam.
                                Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                            <h3 class=\"has-text-centered\">How to properly center tags in bulma?</h3>
                            <p> Proper centering of tags in bulma is done with class: <pre>level-item</pre>
                            Voluptat ut farmacium tellus in metus vulputate. Feugiat in fermentum posuere urna nec. Pharetra convallis posuere morbi leo urna molestie.
                            Accumsan lacus vel facilisis volutpat est velit egestas. Fermentum leo vel orci porta. Faucibus interdum posuere lorem ipsum.</p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"http://www.radfaces.com/images/avatars/daria-morgendorffer.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Sapien eget mi proin sed 🔱</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"#\">@daria</a> on February 17, 2018
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                            </p>
                            <p>
                                Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                            </p>
                            <h3 class=\"has-text-centered\">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Cras tincidunt lobortis feugiat vivamus.</h3>
                            <p>
                                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                                Arcu non sodales neque sodales ut etiam sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START PROMO BLOCK -->
                <section class=\"hero is-info is-bold is-small promo-block\">
                    <div class=\"hero-body\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                <i class=\"fa fa-bell-o\"></i> Nemo enim ipsam voluptatem quia.</h1>
                            <span class=\"tag is-black is-medium is-rounded\">
                                        Natus error sit voluptatem
                                    </span>
                        </div>
                    </div>
                </section>
                <!-- END PROMO BLOCK -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"http://www.radfaces.com/images/avatars/angela-chase.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Cras tincidunt lobortis feugiat vivamus.</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"#\">@angela</a> on October 7, 2017
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas. Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                            </p>
                            <p>
                                Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                            </p>
                            <h3 class=\"has-text-centered\">“Everyone should be able to do one card trick, tell two jokes, and recite three poems, in case they are ever trapped in an elevator.”</h3>
                            <p>
                                In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                                Arcu non sodales neque sodales ut etiam sit amet.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
        </section>
        <!-- END ARTICLE FEED -->
    </div>

{% else %}

    <section class=\"section \">
        <div class=\"container\">
            <div class=\"columns\">
                <div class=\"column is-one-quarter-desktop\">
                    <aside class=\"menu is-hidden-touch\">
                        <p class=\"menu-label\">
                            <a href=\"{{ path('acceuilOrigine') }}\">Region</a>
                        </p>
                        {% for origine in origines %}
                            <p>{{ origine.nomAppellation }}</p>
                        {% endfor %}

                        <p class=\"menu-label\">
                            <a href=\"{{ path('acceuilVin') }}\">Vin</a>
                        </p>
                        {% for vin in vins %}
                            <p>{{ vin.nomVin }}</p>
                        {% endfor %}


                    </aside>
                </div> <!-- is-one-quarter-desktop -->




                <div class =\"column is-three-quarters\">

                    {#<div class=\"tabs is-boxed\">#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"{{ path('acceuilOrigine') }}\">#}
                    {#<span>Origine</span>#}
                    {#</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"{{ path('acceuilVin') }}\">#}
                    {#<span>Vin</span>#}
                    {#</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"{{ path('acceuil') }}\" >#}
                    {#<span>Bouteille</span>#}
                    {#</a>#}
                    {#</li>#}

                    {#</ul>#}
                    {#</div>#}


                    {% block body %}{% endblock %}
                    {% block javascripts %}{% endblock %}
                </div>


            </div> <!--columns-->
        </div><!--Container-->
    </section>

{% endif %}

<footer class=\"footer has-text-centered\">
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-8-desktop is-offset-2-desktop\">
                <p> &copy 2019, Doubalo LAMIEN, Abdoulkader GASSAMA, Jawaher TAHEREDDINE </p>
                Powered by Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}
                and Bulma 0.7.4
            </div>
        </div>
    </div>
</footer>

<script async type=\"text/javascript\" src=\"_javascript/bulma.js\"></script>
</body>

</html>", "base2.html.twig", "/home/lamien/caveSymfony/app/Resources/views/base2.html.twig");
    }
}
