<?php

/* bouteilleMillesime.html.twig */
class __TwigTemplate_6081d41c48047a97e2c0731e34029403f7d10bd863c29f9c7e658f80bd7ca184 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bouteilleMillesime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bouteilleMillesime.html.twig"));

        // line 2
        echo "

<h1>Bouteille : </h1>


<table border=\"1\">
    <tr><th>Identifiant</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th>  </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bout"] ?? $this->getContext($context, "bout")));
        foreach ($context['_seq'] as $context["_key"] => $context["bouteille"]) {
            // line 10
            echo "        <tr>
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bouteille"], "idVin", []), "idVin", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "millesime", []), "html", null, true);
            echo "</td>
            <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "prix", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "quantite", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "note", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouteille"], "dateNote", []), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouteille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bouteilleMillesime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  38 => 10,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/bouteille.html.twig #}


<h1>Bouteille : </h1>


<table border=\"1\">
    <tr><th>Identifiant</th> <th>millesime </th> <th>Prix</th> <th> quantite</th> <th>note</th> <th>date_note</th>  </tr>
    {% for bouteille in bout %}
        <tr>
            <td> {{ bouteille.idVin.idVin }} </td>
            <td> {{ bouteille.millesime }}</td>
            <td> {{ bouteille.prix }} </td>
            <td> {{ bouteille.quantite }} </td>
            <td> {{ bouteille.note }} </td>
            <td> {{ bouteille.dateNote }} </td>
        </tr>
    {% endfor %}
</table>", "bouteilleMillesime.html.twig", "/home/lamien/caveSymfony/app/Resources/views/bouteilleMillesime.html.twig");
    }
}
