<?php

/* help.html.twig */
class __TwigTemplate_9ac0db80e27b2d76875700139caf4787e06d0fdf4c849d1bb47ca820093e66d9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "help.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "help.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Aide</title>

    <link rel='stylesheet' id='wp-block-library-css'  href='https://jethromay.com/wp-includes/css/dist/block-library/style.min.css?ver=5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='https://jethromay.com/wp-content/themes/jethromay/style.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='https://api.w.org/' href='https://jethromay.com/wp-json/' />

    <link rel=\"canonical\" href=\"https://jethromay.com/\" />


    <link rel=\"apple-touch-icon-precomposed\" href=\"https://jethromay.com/wp-content/uploads/2019/01/favicon.png\" />
</head>

<body>


    <section class=\"section hero is-dark contact\">
        <div class=\"container\">
            <div class=\"header-intro\">
                <h5 class=\"has-text-centered is-uppercase\">Contact</h5>
                <h6 class=\"has-text-centered has-text-white\">Bonjour, pour toute question relative à l'utilisation de notre site </h6>
                <h6 class=\"has-text-centered has-text-white\">veuillez remplir ce formulaire ci-dessous</h6>

            </div>
            <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
            <script>
                function onSubmit(token) {
                    document.getElementById(\"form\").submit();
                }
            </script>
            <form id=\"form\" accept-charset=\"UTF-8\" method=\"POST\">
                <div class=\"columns is-centered\">
                    <div class=\"column is-half\">
                        <div class=\"field\">
                            <label class=\"label\">Nom</label>
                            <div class=\"control is-expanded\">
                                <input class=\"input is-medium\" name=\"name\" id=\"name\" type=\"text\" required>
                            </div>
                        </div>
                    </div>
                    <div class=\"column is-half\">
                        <div class=\"field\">
                            <label class=\"label\">Email</label>
                            <div class=\"control is-expanded\">
                                <input class=\"input is-medium\" type=\"email\" id=\"email\" name=\"email\" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"columns is-centered\">
                    <div class=\"column\">
                        <div class=\"field\">
                            <label class=\"label\">Message</label>
                            <div class=\"control is-expanded\">
                                <textarea class=\"textarea is-medium\" name=\"comment\" rows=\"5\" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"columns is-centered\">
                    <div class=\"column is-one-third\">
                        <div class=\"field\">
                            <div class=\"control\">
                                <a href=\"/\"><button class=\"button is-medium is-rounded g-recaptcha\">Validé</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "help.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
    <title>Aide</title>

    <link rel='stylesheet' id='wp-block-library-css'  href='https://jethromay.com/wp-includes/css/dist/block-library/style.min.css?ver=5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='https://jethromay.com/wp-content/themes/jethromay/style.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='https://api.w.org/' href='https://jethromay.com/wp-json/' />

    <link rel=\"canonical\" href=\"https://jethromay.com/\" />


    <link rel=\"apple-touch-icon-precomposed\" href=\"https://jethromay.com/wp-content/uploads/2019/01/favicon.png\" />
</head>

<body>


    <section class=\"section hero is-dark contact\">
        <div class=\"container\">
            <div class=\"header-intro\">
                <h5 class=\"has-text-centered is-uppercase\">Contact</h5>
                <h6 class=\"has-text-centered has-text-white\">Bonjour, pour toute question relative à l'utilisation de notre site </h6>
                <h6 class=\"has-text-centered has-text-white\">veuillez remplir ce formulaire ci-dessous</h6>

            </div>
            <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
            <script>
                function onSubmit(token) {
                    document.getElementById(\"form\").submit();
                }
            </script>
            <form id=\"form\" accept-charset=\"UTF-8\" method=\"POST\">
                <div class=\"columns is-centered\">
                    <div class=\"column is-half\">
                        <div class=\"field\">
                            <label class=\"label\">Nom</label>
                            <div class=\"control is-expanded\">
                                <input class=\"input is-medium\" name=\"name\" id=\"name\" type=\"text\" required>
                            </div>
                        </div>
                    </div>
                    <div class=\"column is-half\">
                        <div class=\"field\">
                            <label class=\"label\">Email</label>
                            <div class=\"control is-expanded\">
                                <input class=\"input is-medium\" type=\"email\" id=\"email\" name=\"email\" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"columns is-centered\">
                    <div class=\"column\">
                        <div class=\"field\">
                            <label class=\"label\">Message</label>
                            <div class=\"control is-expanded\">
                                <textarea class=\"textarea is-medium\" name=\"comment\" rows=\"5\" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"columns is-centered\">
                    <div class=\"column is-one-third\">
                        <div class=\"field\">
                            <div class=\"control\">
                                <a href=\"/\"><button class=\"button is-medium is-rounded g-recaptcha\">Validé</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>", "help.html.twig", "/home/lamien/caveSymfony/app/Resources/views/help.html.twig");
    }
}
