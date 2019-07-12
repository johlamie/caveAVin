<?php

/* lesBouteilles.html.twig */
class __TwigTemplate_b9e4d5de86c0455896800a5e862f7b5fce62b7bd925b8a6cea8ffc98b3cad0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lesBouteilles.html.twig", 2);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesBouteilles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesBouteilles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"article-title\">LISTE DES BOUTEILLES</h1> <br>

    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertBouteille");
        echo "\" >Ajouter une Bouteille </a><br>
<table class=\"table\">
    <thead>
    <tr><th>Vin</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th> <th>Options</th>  </tr>
    </thead>
    <tbody>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bouteilles"] ?? $this->getContext($context, "bouteilles")));
        foreach ($context['_seq'] as $context["_key"] => $context["bouteille"]) {
            // line 18
            echo "        <tr>
            <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bouteille"], "idVin", []), "nomVin", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "millesime", []), "html", null, true);
            echo "</td>
            <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "prix", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "quantite", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "note", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "dateNote", []), "html", null, true);
            echo " </td>
            <td>  <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateBouteille", ["id" => $this->getAttribute($this->getAttribute($context["bouteille"], "idVin", []), "idVin", []), "millesime" => $this->getAttribute($context["bouteille"], "millesime", [])]), "html", null, true);
            echo "\"> Update</a> |
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteBouteille", ["id" => $this->getAttribute($this->getAttribute($context["bouteille"], "idVin", []), "idVin", []), "millesime" => $this->getAttribute($context["bouteille"], "millesime", [])]), "html", null, true);
            echo "\"> Delete</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouteille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lesBouteilles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  63 => 17,  54 => 11,  49 => 8,  40 => 7,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lesBouteilles.html.twig #}
{% extends 'base.html.twig' %}




{% block body %}

    <h1 class=\"article-title\">LISTE DES BOUTEILLES</h1> <br>

    <a href=\"{{ path('insertBouteille') }}\" >Ajouter une Bouteille </a><br>
<table class=\"table\">
    <thead>
    <tr><th>Vin</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th> <th>Options</th>  </tr>
    </thead>
    <tbody>
    {% for bouteille in bouteilles %}
        <tr>
            <td> {{ bouteille.idVin.nomVin }} </td>
            <td> {{ bouteille.millesime }}</td>
            <td> {{ bouteille.prix }} </td>
            <td> {{ bouteille.quantite }} </td>
            <td> {{ bouteille.note }} </td>
            <td> {{ bouteille.dateNote }} </td>
            <td>  <a href=\"{{ path('updateBouteille',{'id':bouteille.idVin.idVin,'millesime': bouteille.millesime}) }}\"> Update</a> |
                <a href=\"{{ path('deleteBouteille',{'id':bouteille.idVin.idVin,'millesime': bouteille.millesime}) }}\"> Delete</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}", "lesBouteilles.html.twig", "/home/lamien/caveSymfony/app/Resources/views/lesBouteilles.html.twig");
    }
}
