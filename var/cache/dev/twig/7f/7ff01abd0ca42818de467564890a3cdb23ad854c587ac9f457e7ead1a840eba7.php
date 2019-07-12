<?php

/* vinId.html.twig */
class __TwigTemplate_e1ab47fe6c2ba8edc515bb1fcf7e02c4fe18b0ffaca4e25546c2c69eab9afd1a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vinId.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vinId.html.twig"));

        // line 2
        echo "

<h1>vin : </h1>


<table border=\"1\">
     <tr><th>Identifiant</th> <th>nom </th> <th>Type</th> <th> id de l'origine  </th>  </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? $this->getContext($context, "vins")));
        foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
            // line 10
            echo "        <tr>
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "idVin", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "nomVin", []), "html", null, true);
            echo "</td>
            <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "typeVin", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "idAppellation", []), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vinId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  38 => 10,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/vin.html.twig #}


<h1>vin : </h1>


<table border=\"1\">
     <tr><th>Identifiant</th> <th>nom </th> <th>Type</th> <th> id de l'origine  </th>  </tr>
    {% for vin in vins %}
        <tr>
            <td> {{ vin.idVin }} </td>
            <td> {{ vin.nomVin }}</td>
            <td> {{ vin.typeVin }} </td>
            <td> {{ vin.idAppellation }} </td>
        </tr>
    {% endfor %}
</table>", "vinId.html.twig", "/home/lamien/caveSymfony/app/Resources/views/vinId.html.twig");
    }
}
