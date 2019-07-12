<?php

/* equipe.html.twig */
class __TwigTemplate_b1c75072b416021a1749b50a2b59e1f363f68ade63ccef799c61b76604459945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipe.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Equipe - Cave à Vin</title>
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
            echo "<nav class=\"navbar is-primary\">
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
                                    ";
        }
        // line 81
        echo "
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->



    <div class=\"container\">
    <div id=\"flow\">
        <span class=\"flow-1\"></span>
        <span class=\"flow-2\"></span>
        <span class=\"flow-3\"></span>
    </div>
    <div class=\"section\">

        <!-- Developers -->
        <div class=\"row columns\">
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/johnCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/john.jpeg\" alt=\"Image\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">Doubalo</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/ld162555\">@ld162555</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiant en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-twitter\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/jawCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/jaw.png\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">Jawaher</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/tj177314\">@tj177314</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiante en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-facebook\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/agCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/gass.png\" alt=\"Image\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">AbdoulKader</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/ga141227\">@ga141227</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiant en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-barcode\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Developers -->

    </div>
</div>

    <footer class=\"footer has-text-centered\">
        <div class=\"container\">
            <div class=\"columns\">
                <div class=\"column is-8-desktop is-offset-2-desktop\">
                    <p> &copy 2019, Doubalo LAMIEN, Abdoulkader GASSAMA, Jawaher TAHEREDDINE </p>
                    Powered by Symfony ";
        // line 195
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

    public function getTemplateName()
    {
        return "equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 195,  126 => 81,  120 => 77,  114 => 73,  111 => 72,  109 => 71,  107 => 70,  104 => 68,  93 => 59,  83 => 51,  54 => 23,  50 => 21,  46 => 19,  44 => 18,  25 => 1,);
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
    <title>Equipe - Cave à Vin</title>
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
                                    {% endif %}

                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->



    <div class=\"container\">
    <div id=\"flow\">
        <span class=\"flow-1\"></span>
        <span class=\"flow-2\"></span>
        <span class=\"flow-3\"></span>
    </div>
    <div class=\"section\">

        <!-- Developers -->
        <div class=\"row columns\">
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/johnCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/john.jpeg\" alt=\"Image\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">Doubalo</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/ld162555\">@ld162555</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiant en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-twitter\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/jawCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/jaw.png\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">Jawaher</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/tj177314\">@tj177314</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiante en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-facebook\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"column is-one-third\">
                <div class=\"card large\">
                    <div class=\"card-image\">
                        <figure class=\"image\">
                            <img src=\"images/agCouv.jpg\" alt=\"Image\">
                        </figure>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <figure class=\"image is-96x96\">
                                    <img src=\"images/gass.png\" alt=\"Image\">
                                </figure>
                            </div>
                            <div class=\"media-content\">
                                <p class=\"title is-4 no-padding\">AbdoulKader</p>
                                <p><span class=\"title is-6\"><a href=\"https://www-apps.univ-lehavre.fr/forge/ga141227\">@ga141227</a></span></p>
                            </div>
                        </div>
                        <div class=\"content\">
                            Etudiant en 3ème année de licence informatique, passionné par l'informatique
                            et les nouvelles technologies.
                            <div class=\"background-icon\"><span class=\"icon-barcode\"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Developers -->

    </div>
</div>

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

</html>", "equipe.html.twig", "/home/lamien/caveSymfony/app/Resources/views/equipe.html.twig");
    }
}
