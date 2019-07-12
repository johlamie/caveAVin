<?php

/* bouteilleIdMillesime.html.twig */
class __TwigTemplate_74d96c0aec7188564d2b0b64ba6c1799049ded8d49c3d949d85a9ea97c55ccc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bouteilleIdMillesime.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bouteilleIdMillesime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bouteilleIdMillesime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Les bouteilles correspondant a ce vin sont :</h1>
    <table class=\"table\">
        <thead>
        <tr><th>Vin</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th></tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bouteilles"] ?? $this->getContext($context, "bouteilles")));
        foreach ($context['_seq'] as $context["_key"] => $context["bouteille"]) {
            // line 12
            echo "            <tr>
                <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bouteille"], "idVin", []), "nomVin", []), "html", null, true);
            echo " </td>
                <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "millesime", []), "html", null, true);
            echo "</td>
                <td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "prix", []), "html", null, true);
            echo " </td>
                <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "quantite", []), "html", null, true);
            echo " </td>
                <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "note", []), "html", null, true);
            echo " </td>
                <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "dateNote", []), "html", null, true);
            echo " </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouteille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bouteilleIdMillesime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/bouteilleIdMillesime.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}

    <h1>Les bouteilles correspondant a ce vin sont :</h1>
    <table class=\"table\">
        <thead>
        <tr><th>Vin</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th></tr>
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
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}", "bouteilleIdMillesime.html.twig", "/home/lamien/caveSymfony/app/Resources/views/bouteilleIdMillesime.html.twig");
    }
}
