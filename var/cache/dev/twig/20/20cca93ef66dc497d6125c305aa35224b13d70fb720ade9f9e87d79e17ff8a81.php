<?php

/* lesVins.html.twig */
class __TwigTemplate_9e4ea4d92e0f9cbf8bb87b93b7a9286c9199b686cf048fa6855d019d7a6c69b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lesVins.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesVins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesVins.html.twig"));

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
    <h1 class=\"article-title\">LISTE DES VINS</h1> <br>

    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertVin");
        echo "\" >Ajouter un vin </a><br>

<table class=\"table\">
    <thead>
    <tr><th>Nom des vins</th> <th>Types</th> <th>Provenance</th> <th>Options</th>  </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vins"] ?? $this->getContext($context, "vins")));
        foreach ($context['_seq'] as $context["_key"] => $context["vin"]) {
            // line 15
            echo "        <tr>
            <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "nomVin", []), "html", null, true);
            echo "</td>
            <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["vin"], "typeVin", []), "html", null, true);
            echo " </td>
            <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vin"], "idAppellation", []), "nomAppellation", []), "html", null, true);
            echo " </td>
            <td>  <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierVin", ["id" => $this->getAttribute($context["vin"], "idVin", [])]), "html", null, true);
            echo "\">Update</a> |
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteVin", ["id" => $this->getAttribute($context["vin"], "idVin", [])]), "html", null, true);
            echo "\">Delete</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lesVins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  54 => 7,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lesVins.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}

    <h1 class=\"article-title\">LISTE DES VINS</h1> <br>

    <a href=\"{{ path('insertVin') }}\" >Ajouter un vin </a><br>

<table class=\"table\">
    <thead>
    <tr><th>Nom des vins</th> <th>Types</th> <th>Provenance</th> <th>Options</th>  </tr>
    </thead>
    <tbody>
    {% for vin in vins %}
        <tr>
            <td> {{ vin.nomVin }}</td>
            <td> {{ vin.typeVin }} </td>
            <td> {{ vin.idAppellation.nomAppellation }} </td>
            <td>  <a href=\"{{ path('modifierVin',{'id':vin.idVin}) }}\">Update</a> |
                <a href=\"{{ path('deleteVin',{'id':vin.idVin}) }}\">Delete</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}", "lesVins.html.twig", "/home/lamien/caveSymfony/app/Resources/views/lesVins.html.twig");
    }
}
