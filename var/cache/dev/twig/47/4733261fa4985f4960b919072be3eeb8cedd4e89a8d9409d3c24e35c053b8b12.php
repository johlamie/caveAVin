<?php

/* security/login.html.twig */
class __TwigTemplate_9c5555a4949f6340a8570018e7665ae94bc5f4c6c7192c0937e58462a74860ec extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Login</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/login.css\">
</head>

<body>
<section class=\"hero is-success is-fullheight\">
    <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
            <div class=\"column is-4 is-offset-4\">
                <h3 class=\"title has-text-grey\"></h3>
                <p class=\"subtitle has-text-grey\">Veuillez vous connecter pour continuer</p>
                <div class=\"box\">
                    <figure class=\"avatar\">
                        <img class=\"is-rounded\" src=\"images/coderNinja.png\">
                    </figure>
                    <br>
                    <form action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                        <div class=\"field\">
                            <div class=\"control\">
                                ";
        // line 33
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 34
            echo "                                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 36
        echo "                                <label for=\"username\"></label>
                                <input class=\"input is-large\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Identifiant \" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
                            </div>
                        </div>

                        <div class=\"field\">
                            <div class=\"control\">
                                <label for=\"password\"></label>
                                <input class=\"input is-large\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\"/>

                            </div>
                        </div>
                        <div class=\"field\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\">
                                Se souvrnir de moi
                            </label>
                        </div>
                        <button class=\"button is-block is-info is-large is-fullwidth\" type=\"submit\">Connection</button>
                    </form>
                </div>
                <p class=\"has-text-grey\">
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "#paramCo\">Aide?</a>
                </p>
            </div>
        </div>
    </div>
</section>
<script async type=\"text/javascript\" src=\"../js/bulma.js\"></script>
</body>

</html>



";
        // line 72
        echo "    ";
        // line 73
        echo "        ";
        // line 74
        echo "    ";
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        // line 77
        echo "
    ";
        // line 79
        echo "    ";
        // line 80
        echo "
    ";
        // line 82
        echo "

        ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "

    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 87,  137 => 86,  135 => 85,  131 => 82,  128 => 80,  126 => 79,  123 => 77,  121 => 76,  119 => 75,  117 => 74,  115 => 73,  113 => 72,  97 => 58,  73 => 37,  70 => 36,  64 => 34,  62 => 33,  56 => 30,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Login</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.4/css/bulma.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/login.css\">
</head>

<body>
<section class=\"hero is-success is-fullheight\">
    <div class=\"hero-body\">
        <div class=\"container has-text-centered\">
            <div class=\"column is-4 is-offset-4\">
                <h3 class=\"title has-text-grey\"></h3>
                <p class=\"subtitle has-text-grey\">Veuillez vous connecter pour continuer</p>
                <div class=\"box\">
                    <figure class=\"avatar\">
                        <img class=\"is-rounded\" src=\"images/coderNinja.png\">
                    </figure>
                    <br>
                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <div class=\"field\">
                            <div class=\"control\">
                                {% if error %}
                                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <label for=\"username\"></label>
                                <input class=\"input is-large\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Identifiant \" value=\"{{ last_username }}\"/>
                            </div>
                        </div>

                        <div class=\"field\">
                            <div class=\"control\">
                                <label for=\"password\"></label>
                                <input class=\"input is-large\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\"/>

                            </div>
                        </div>
                        <div class=\"field\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\">
                                Se souvrnir de moi
                            </label>
                        </div>
                        <button class=\"button is-block is-info is-large is-fullwidth\" type=\"submit\">Connection</button>
                    </form>
                </div>
                <p class=\"has-text-grey\">
                    <a href=\"{{ path('home') }}#paramCo\">Aide?</a>
                </p>
            </div>
        </div>
    </div>
</section>
<script async type=\"text/javascript\" src=\"../js/bulma.js\"></script>
</body>

</html>



{#<form action=\"{{ path('login') }}\" method=\"post\">#}
    {#{% if error %}#}
        {#<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
    {#{% endif %}#}
    {#<label for=\"username\">Username:</label>#}
    {#<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>#}

    {#<label for=\"password\">Password:</label>#}
    {#<input type=\"password\" id=\"password\" name=\"_password\"/>#}

    {#<input type=\"hidden\" name=\"_target_path\" value=\"/\"/>#}


        {#If you want to control the URL the user#}
        {#is redirected to on success (more details below)#}
        {#<input type=\"hidden\" name=\"_target_path\" value=\"/account\"/>#}


    {#<button type=\"submit\">login</button>#}
{#</form>#}", "security/login.html.twig", "/home/lamien/caveSymfony/app/Resources/views/security/login.html.twig");
    }
}
