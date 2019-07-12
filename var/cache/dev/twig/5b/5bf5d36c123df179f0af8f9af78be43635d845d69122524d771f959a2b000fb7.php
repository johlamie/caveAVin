<?php

/* base.html.twig */
class __TwigTemplate_8b01588b8a959a491a5da0218ceec2ed62b919be26a4bccc41936f4fa374810f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bar' => [$this, 'block_bar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>L3 - Cave à Vin</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"images/icon.jpeg\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/blog.css\">
</head>

<body>
<!-- START NAV -->
";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "    <nav class=\"navbar is-primary\">
";
        } else {
            // line 21
            echo "    <nav class=\"navbar is-danger\">
";
        }
        // line 23
        echo "        <div class=\"container\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item\" >
                    <img src=\"images/fac.jpg\" alt=\"Logo\">
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
                            <a class=\"navbar-item\" href=\"/vin\" >
                                Vin
                            </a>
                            ";
        // line 51
        echo "                            <a class=\"navbar-item\" href=\"/Bouteille\" >
                                Bouteille
                            </a>
                        </div>
                    </div>
                    <a class=\"navbar-item\" href=\"/equipe\">
                        Equipes
                    </a>
                    <a class=\"navbar-item\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "#paramCo\">
                        Aide ?
                    </a>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <a class=\"navbar-link is-danger\">
                            Compte
                        </a>
                        <div class=\"navbar-dropdown\">
                            ";
        // line 68
        echo "
                            ";
        // line 70
        echo "                            ";
        // line 71
        echo "                            ";
        // line 72
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "                            <a class=\"navbar-item\" href=\"/logout\" >
                                <span class=\"icon\"><i class=\"fas fa-sign-out-alt\"></i></span>
                                <span>logout</span>
                                ";
        } else {
            // line 77
            echo "                                <a class=\"navbar-item\" href=\"/login\" >
                                    <span class=\"icon\"><i class=\"fas fa-sign-out-alt\"></i></span>
                                    <span>login</span>
                                </a>
                                ";
        }
        // line 82
        echo "
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAV -->


";
        // line 93
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "_route"], "method") == "home")) {
            // line 94
            echo "
    <section class=\"hero is-info is-medium is-bold\">
        <div class=\"hero-body\">
            <div class=\"container has-text-centered\">
                <h1 class=\"title\"> Bienvenue sur notre site de gestion pourr votre cave à vin<br> Ce site est notre compte rendu pour notre projet web de Licence 3 </h1>
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
                                <p class=\"title article-title\">Description d'une cave à vin et du projet</p>
                                <div class=\"tags has-addons level-item\">
                                    <span class=\"tag is-rounded is-info\">On wikipedia</span>
                                    <span class=\"tag is-rounded\">26 Mars 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>Une cave à vin est une cave dont on utilise l'ambiance atmosphérique particulière et tempérée
                                (humidité et température stables) pour conserver les vins et autres spiritueux. Ce local,
                                par ses dimensions, peut généralement abriter tout type de conditionnements des alcools.
                                Le terme cellier est aussi utilisé. Une cave à vin est généralement un édifice maçonné
                                enterré ou semi-enterré mais d'anciens lieux d'extraction miniers peuvent être dévolus à
                                la même fonction. Elles peuvent être aujourd'hui préfabriquées pour les petites dimensions. </p>

                            <h3 class=\"has-text-centered\">Projet</h3>

                            <p> Notre travail a consisté à élaborer d'abord une base de données pour la gestion de la cave à vin d’un
                                particulier. Pour ce faire, à partir de la décomposition et l'étude du schéma relationnel, nous avons réussi à avoir trois (03)
                                entités (origine, vin, bouteille) et deux associations.
                                L’entité origine nous permet d’avoir l’origine du vin, c’est-à-dire le lieu et l’appellation de
                                la culture des raisins qui ont été utilisé pour faire le vin ; l’entité vin sera là pour décrire le vin
                                (son nom et son type) ; l’entité bouteille, quand t'a elle, elle sera là pour matérialisé en quelques sorte
                                le vin, car un vin peut être produit dans plusieurs années différentes un vin produit dans l’an
                                1998 et un autre produit en 2014 sont un même vin mais sont différent, c’est ainsi qu’apparait
                                la notion de bouteille pour les différencier.</p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"images/mayo.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Un peu de culture sur le vin</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"https://fr.wikipedia.org/wiki/Vin\">@wikipedia,26/03/2019</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <h3 class=\"has-text-centered\">Le vin</h3>
                            <p>
                                Le vin est une boisson alcoolisée obtenue par la fermentation du raisin, fruit de la vigne viticole.

                                La transformation du raisin en vin est appelée la vinification. L'étude du vin est l'œnologie.
                                La grande variété de vins existant au monde s'explique par les différences de terroirs, de cépages,
                                de modes de vinification ou de types d'élevage. Ainsi ils peuvent donner des vins rouges, rosés ou
                                blancs, mais aussi des vins avec un taux de sucre résiduel variant (secs ou doux), ou une
                                effervescence variante (tranquilles ou effervescents). La viticulture a colonisé une vaste partie
                                du monde et de très nombreux pays sont producteurs de vin.
                            </p>

                            <h3 class=\"has-text-centered\">Histoire</h3>
                            <p>
                                L’histoire de la vigne et du vin est si ancienne qu’elle se confond avec l'histoire de l’humanité.
                                La vigne et le vin ont représenté un élément important des sociétés, intimement associés à leurs économies
                                et à leurs cultures. Le vin synonyme de fête, d'ivresse, de convivialité, qui a investi le vaste champ des
                                valeurs symboliques, est aujourd'hui présent dans la plupart des pays du monde. Son existence est le fruit
                                d’une longue histoire mouvementée.
                                Cependant, les scientifiques s'accordent à dire qu'elle a été d'abord pratiquée
                                dans la région du Caucase, considérée depuis le XIXe siècle comme la patrie de la vigne domestique,
                                car on y trouve une grande diversité de vignes sauvages et aussi de cépages (le pays qui compte le plus
                                grand nombre de cépages est la Géorgie, où l'on en dénombre plus de 500)6. Plusieurs découvertes archéologiques
                                appuient cette théorie :
                            </p>

                            <h3 class=\"has-text-centered\">Production de vin</h3>

                            <p>
                                Dans son acception initiale, le néologisme viniculture désigne l'ensemble des activités consacrées à la production
                                de vin, en incluant la viticulture. Cette dernière étant une activité purement agricole ayant pour finalité la
                                production générale de raisin, la viniculture tend à ne désigner stricto sensu que l'ensemble des opérations
                                d'élaboration du vin ainsi que des produits procédant de ce dernier et du marc de raisin dit de cuve ou de
                                vin. Dès lors, la viniculture relève de l'Industrie agroalimentaire, ses opérations constitutives
                                (en particulier la vinification) étant postérieures à la vendange ou éventuellement au passerillage,
                                jusqu'au conditionnement du produit fini.

                                Le secteur viti-vinicole se sépare en deux professions : les vignerons indépendants (représentés en France
                                par les Vignerons Indépendants de France) qui assurent la production de leur vin, du cep de vigne à la mise en bouteille,
                                en passant par la vinification et qui constitue la branche artisanale, et les viticulteurs coopérateurs qui n'effectuent pas
                                la vinification. La ajeure partie de la commercialisation en France passe par les « négociants » et « négociants
                                manipulateurs » qui achètent du moût de raisin, voire du raisin frais et assurent la vinification eux-mêmes.
                            </p>

                            <p>
                                Le changement climatique modifie le cycle de croissance de la vigne et notamment la maturité des raisins.
                                Il en découle une modification importante des vinifications et des vins produits dans la majorité des régions viticoles.
                                Les vins ne correspondent alors plus avec ceux qui ont put être produit auparavant, et met en péril la typicité des
                                appellations. Les instituts de recherche mènent de nombreuses études et mettent en garde sur le sujet, tel que l'INRA
                                ou les chambres d'agriculture.

                                Certaines régions peuvent voir leurs qualités pour la viticulture être anéanties, tandis que de nouvelles régions
                                jusque là au climat défavorable peuvent se lancer dans la production de vin.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START PROMO BLOCK -->
                <section class=\"hero is-info is-bold is-small promo-block\">
                    <div class=\"hero-body2\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                <i class=\"fa fa-bell-o\"></i> Champ de raisin </h1>
                            <a>
                                <span class=\"tag is-black is-medium is-rounded\">
                                        Sources : 1zoom.me
                                </span>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- END PROMO BLOCK -->

                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"images/admin.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Paramètres de connection 🔱</p>
                            </div>
                        </div>
                        <div class=\"content article-body\" id =\"paramCo\">
                            <pre>ident : admin; password : user</pre>
                            <p>
                                Pour aller plus loin, et pouvoir avoir accès à nos différentes données et consultés nos tables, vous devez auparavant être identifiés en tant que
                                \"UTILISATEUR\" au minimun.
                            </p>
                            <p>
                                Pour vous permettre de consulter et tester nos diffférentes fonctionnalités, nous vous avons fournis des identifiants ci-dessos
                            </p>




                        </div>
                    </div>
                </div>
            </div>
            <!-- END ARTICLE -->
        </section>
        <!-- END ARTICLE FEED -->
    </div>

";
        } else {
            // line 267
            echo "
    ";
            // line 268
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 269
                echo "        <section class=\"section \">
            <div class=\"container\">
                <div class=\"columns\">
                    ";
                // line 272
                $this->displayBlock('bar', $context, $blocks);
                // line 273
                echo "
                    <div class=\"column is-one-quarter-desktop\">
                        <aside class=\"menu is-hidden-touch\">
                            <p class=\"menu-label\">
                                <a href=\"";
                // line 277
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilOrigine");
                echo "\">Region</a>
                            </p>
                            <ul class=\"menu-list\">
                                ";
                // line 280
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["origines"] ?? $this->getContext($context, "origines")));
                foreach ($context['_seq'] as $context["_key"] => $context["origine"]) {
                    // line 281
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("OrigineVin", ["id" => $this->getAttribute($context["origine"], "idAppellation", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["origine"], "nomAppellation", []), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['origine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 283
                echo "                            </ul>
                            <p class=\"menu-label\">
                                <a href=\"";
                // line 285
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilVin");
                echo "\">Vin</a>
                            </p>
                            <ul class=\"menu-list\">
                                ";
                // line 288
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? $this->getContext($context, "vins")));
                foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
                    // line 289
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bouteilleID", ["id" => $this->getAttribute($context["vin"], "idVin", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "nomVin", []), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "                            </ul>
                        </aside>
                    </div> <!-- is-one-quarter-desktop -->




                    <div class =\"column is-three-quarters\">

                        ";
                // line 300
                $this->displayBlock('body', $context, $blocks);
                // line 301
                echo "                        ";
                $this->displayBlock('javascripts', $context, $blocks);
                // line 302
                echo "                    </div>


                </div> <!--columns-->
            </div><!--Container-->
        </section>

    ";
            } else {
                // line 310
                echo "
        <div class=\"notification is-danger\">
            <button class=\"delete\"></button>
            Veuillez vous connecter avant d'avoir accès aux tables.
            Consulter la rubrique aide pour avoir des informations sur les paramètres de connexions.
        </div>

    ";
            }
            // line 318
            echo "

";
        }
        // line 321
        echo "
<footer class=\"footer has-text-centered\">
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-8-desktop is-offset-2-desktop\">
                <p> &copy 2019, Doubalo LAMIEN, Abdoulkader GASSAMA, Jawaher TAHEREDDINE </p>
                Powered by Symfony ";
        // line 327
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

    // line 272
    public function block_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 300
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 301
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 301,  471 => 300,  454 => 272,  433 => 327,  425 => 321,  420 => 318,  410 => 310,  400 => 302,  397 => 301,  395 => 300,  384 => 291,  373 => 289,  369 => 288,  363 => 285,  359 => 283,  348 => 281,  344 => 280,  338 => 277,  332 => 273,  330 => 272,  325 => 269,  323 => 268,  320 => 267,  145 => 94,  143 => 93,  130 => 82,  123 => 77,  117 => 73,  114 => 72,  112 => 71,  110 => 70,  107 => 68,  96 => 59,  86 => 51,  57 => 23,  53 => 21,  49 => 19,  47 => 18,  28 => 1,);
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
    <title>L3 - Cave à Vin</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"images/icon.jpeg\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/blog.css\">
</head>

<body>
<!-- START NAV -->
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <nav class=\"navbar is-primary\">
{% else %}
    <nav class=\"navbar is-danger\">
{% endif %}
        <div class=\"container\">
            <div class=\"navbar-brand\">
                <a class=\"navbar-item\" >
                    <img src=\"images/fac.jpg\" alt=\"Logo\">
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
                            <a class=\"navbar-item\" href=\"/vin\" >
                                Vin
                            </a>
                            {#<hr class=\"navbar-divider\">#}
                            <a class=\"navbar-item\" href=\"/Bouteille\" >
                                Bouteille
                            </a>
                        </div>
                    </div>
                    <a class=\"navbar-item\" href=\"/equipe\">
                        Equipes
                    </a>
                    <a class=\"navbar-item\" href=\"{{ path('home') }}#paramCo\">
                        Aide ?
                    </a>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <a class=\"navbar-link is-danger\">
                            Compte
                        </a>
                        <div class=\"navbar-dropdown\">
                            {#<a class=\"navbar-item\">#}

                            {#</a>#}
                            {##}
                            {#<hr class=\"navbar-divider\">#}
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <a class=\"navbar-item\" href=\"/logout\" >
                                <span class=\"icon\"><i class=\"fas fa-sign-out-alt\"></i></span>
                                <span>logout</span>
                                {% else %}
                                <a class=\"navbar-item\" href=\"/login\" >
                                    <span class=\"icon\"><i class=\"fas fa-sign-out-alt\"></i></span>
                                    <span>login</span>
                                </a>
                                {% endif %}

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
                <h1 class=\"title\"> Bienvenue sur notre site de gestion pourr votre cave à vin<br> Ce site est notre compte rendu pour notre projet web de Licence 3 </h1>
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
                                <p class=\"title article-title\">Description d'une cave à vin et du projet</p>
                                <div class=\"tags has-addons level-item\">
                                    <span class=\"tag is-rounded is-info\">On wikipedia</span>
                                    <span class=\"tag is-rounded\">26 Mars 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <p>Une cave à vin est une cave dont on utilise l'ambiance atmosphérique particulière et tempérée
                                (humidité et température stables) pour conserver les vins et autres spiritueux. Ce local,
                                par ses dimensions, peut généralement abriter tout type de conditionnements des alcools.
                                Le terme cellier est aussi utilisé. Une cave à vin est généralement un édifice maçonné
                                enterré ou semi-enterré mais d'anciens lieux d'extraction miniers peuvent être dévolus à
                                la même fonction. Elles peuvent être aujourd'hui préfabriquées pour les petites dimensions. </p>

                            <h3 class=\"has-text-centered\">Projet</h3>

                            <p> Notre travail a consisté à élaborer d'abord une base de données pour la gestion de la cave à vin d’un
                                particulier. Pour ce faire, à partir de la décomposition et l'étude du schéma relationnel, nous avons réussi à avoir trois (03)
                                entités (origine, vin, bouteille) et deux associations.
                                L’entité origine nous permet d’avoir l’origine du vin, c’est-à-dire le lieu et l’appellation de
                                la culture des raisins qui ont été utilisé pour faire le vin ; l’entité vin sera là pour décrire le vin
                                (son nom et son type) ; l’entité bouteille, quand t'a elle, elle sera là pour matérialisé en quelques sorte
                                le vin, car un vin peut être produit dans plusieurs années différentes un vin produit dans l’an
                                1998 et un autre produit en 2014 sont un même vin mais sont différent, c’est ainsi qu’apparait
                                la notion de bouteille pour les différencier.</p>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"images/mayo.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Un peu de culture sur le vin</p>
                                <p class=\"subtitle is-6 article-subtitle\">
                                    <a href=\"https://fr.wikipedia.org/wiki/Vin\">@wikipedia,26/03/2019</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"content article-body\">
                            <h3 class=\"has-text-centered\">Le vin</h3>
                            <p>
                                Le vin est une boisson alcoolisée obtenue par la fermentation du raisin, fruit de la vigne viticole.

                                La transformation du raisin en vin est appelée la vinification. L'étude du vin est l'œnologie.
                                La grande variété de vins existant au monde s'explique par les différences de terroirs, de cépages,
                                de modes de vinification ou de types d'élevage. Ainsi ils peuvent donner des vins rouges, rosés ou
                                blancs, mais aussi des vins avec un taux de sucre résiduel variant (secs ou doux), ou une
                                effervescence variante (tranquilles ou effervescents). La viticulture a colonisé une vaste partie
                                du monde et de très nombreux pays sont producteurs de vin.
                            </p>

                            <h3 class=\"has-text-centered\">Histoire</h3>
                            <p>
                                L’histoire de la vigne et du vin est si ancienne qu’elle se confond avec l'histoire de l’humanité.
                                La vigne et le vin ont représenté un élément important des sociétés, intimement associés à leurs économies
                                et à leurs cultures. Le vin synonyme de fête, d'ivresse, de convivialité, qui a investi le vaste champ des
                                valeurs symboliques, est aujourd'hui présent dans la plupart des pays du monde. Son existence est le fruit
                                d’une longue histoire mouvementée.
                                Cependant, les scientifiques s'accordent à dire qu'elle a été d'abord pratiquée
                                dans la région du Caucase, considérée depuis le XIXe siècle comme la patrie de la vigne domestique,
                                car on y trouve une grande diversité de vignes sauvages et aussi de cépages (le pays qui compte le plus
                                grand nombre de cépages est la Géorgie, où l'on en dénombre plus de 500)6. Plusieurs découvertes archéologiques
                                appuient cette théorie :
                            </p>

                            <h3 class=\"has-text-centered\">Production de vin</h3>

                            <p>
                                Dans son acception initiale, le néologisme viniculture désigne l'ensemble des activités consacrées à la production
                                de vin, en incluant la viticulture. Cette dernière étant une activité purement agricole ayant pour finalité la
                                production générale de raisin, la viniculture tend à ne désigner stricto sensu que l'ensemble des opérations
                                d'élaboration du vin ainsi que des produits procédant de ce dernier et du marc de raisin dit de cuve ou de
                                vin. Dès lors, la viniculture relève de l'Industrie agroalimentaire, ses opérations constitutives
                                (en particulier la vinification) étant postérieures à la vendange ou éventuellement au passerillage,
                                jusqu'au conditionnement du produit fini.

                                Le secteur viti-vinicole se sépare en deux professions : les vignerons indépendants (représentés en France
                                par les Vignerons Indépendants de France) qui assurent la production de leur vin, du cep de vigne à la mise en bouteille,
                                en passant par la vinification et qui constitue la branche artisanale, et les viticulteurs coopérateurs qui n'effectuent pas
                                la vinification. La ajeure partie de la commercialisation en France passe par les « négociants » et « négociants
                                manipulateurs » qui achètent du moût de raisin, voire du raisin frais et assurent la vinification eux-mêmes.
                            </p>

                            <p>
                                Le changement climatique modifie le cycle de croissance de la vigne et notamment la maturité des raisins.
                                Il en découle une modification importante des vinifications et des vins produits dans la majorité des régions viticoles.
                                Les vins ne correspondent alors plus avec ceux qui ont put être produit auparavant, et met en péril la typicité des
                                appellations. Les instituts de recherche mènent de nombreuses études et mettent en garde sur le sujet, tel que l'INRA
                                ou les chambres d'agriculture.

                                Certaines régions peuvent voir leurs qualités pour la viticulture être anéanties, tandis que de nouvelles régions
                                jusque là au climat défavorable peuvent se lancer dans la production de vin.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
                <!-- START PROMO BLOCK -->
                <section class=\"hero is-info is-bold is-small promo-block\">
                    <div class=\"hero-body2\">
                        <div class=\"container\">
                            <h1 class=\"title\">
                                <i class=\"fa fa-bell-o\"></i> Champ de raisin </h1>
                            <a>
                                <span class=\"tag is-black is-medium is-rounded\">
                                        Sources : 1zoom.me
                                </span>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- END PROMO BLOCK -->

                <!-- START ARTICLE -->
                <div class=\"card article\">
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-center\">
                                <img src=\"images/admin.jpg\" class=\"author-image\" alt=\"Placeholder image\">
                            </div>
                            <div class=\"media-content has-text-centered\">
                                <p class=\"title article-title\">Paramètres de connection 🔱</p>
                            </div>
                        </div>
                        <div class=\"content article-body\" id =\"paramCo\">
                            <pre>ident : admin; password : user</pre>
                            <p>
                                Pour aller plus loin, et pouvoir avoir accès à nos différentes données et consultés nos tables, vous devez auparavant être identifiés en tant que
                                \"UTILISATEUR\" au minimun.
                            </p>
                            <p>
                                Pour vous permettre de consulter et tester nos diffférentes fonctionnalités, nous vous avons fournis des identifiants ci-dessos
                            </p>




                        </div>
                    </div>
                </div>
            </div>
            <!-- END ARTICLE -->
        </section>
        <!-- END ARTICLE FEED -->
    </div>

{% else %}

    {% if is_granted('ROLE_USER') %}
        <section class=\"section \">
            <div class=\"container\">
                <div class=\"columns\">
                    {% block bar %}{% endblock %}

                    <div class=\"column is-one-quarter-desktop\">
                        <aside class=\"menu is-hidden-touch\">
                            <p class=\"menu-label\">
                                <a href=\"{{ path('acceuilOrigine') }}\">Region</a>
                            </p>
                            <ul class=\"menu-list\">
                                {% for origine in origines %}
                                    <li><a href=\"{{ path('OrigineVin',{'id':origine.idAppellation }) }}\">{{origine.nomAppellation}}</a></li>
                                {% endfor %}
                            </ul>
                            <p class=\"menu-label\">
                                <a href=\"{{ path('acceuilVin') }}\">Vin</a>
                            </p>
                            <ul class=\"menu-list\">
                                {% for vin in vins %}
                                    <li><a href=\"{{ path('bouteilleID',{'id':vin.idVin }) }}\">{{ vin.nomVin }}</a></li>
                                {% endfor %}
                            </ul>
                        </aside>
                    </div> <!-- is-one-quarter-desktop -->




                    <div class =\"column is-three-quarters\">

                        {% block body %}{% endblock %}
                        {% block javascripts %}{% endblock %}
                    </div>


                </div> <!--columns-->
            </div><!--Container-->
        </section>

    {% else %}

        <div class=\"notification is-danger\">
            <button class=\"delete\"></button>
            Veuillez vous connecter avant d'avoir accès aux tables.
            Consulter la rubrique aide pour avoir des informations sur les paramètres de connexions.
        </div>

    {% endif %}


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

</html>", "base.html.twig", "/home/lamien/caveSymfony/app/Resources/views/base.html.twig");
    }
}
