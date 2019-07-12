<?php

/* lesOrigines.html.twig */
class __TwigTemplate_5fc15a1ea266800f6f492370734118e8b4b2a7e17d0a4e320b6e40b009360522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lesOrigines.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesOrigines.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesOrigines.html.twig"));

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
    <h1 class=\"article-title\">LISTE DES ORIGINES</h1> <br>

    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertOrigine");
        echo "\" >Ajouter une origine </a><br>
    <table class=\"table\">
        <thead>
        <tr><th>Appellation </th> <th>Region</th><th>Options</th></tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["origines"] ?? $this->getContext($context, "origines")));
        foreach ($context['_seq'] as $context["_key"] => $context["origine"]) {
            // line 14
            echo "            <tr>
                <td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["origine"], "nomAppellation", []), "html", null, true);
            echo "</td>
                <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["origine"], "region", []), "html", null, true);
            echo " </td>
                <td>  <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateOrigine", ["id" => $this->getAttribute($context["origine"], "idAppellation", [])]), "html", null, true);
            echo "\">Update</a> |
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteOrigine", ["id" => $this->getAttribute($context["origine"], "idAppellation", [])]), "html", null, true);
            echo "\">Delete</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['origine'], $context['_parent'], $context['loop']);
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
        return "lesOrigines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  54 => 7,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lesOrigines.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}

    <h1 class=\"article-title\">LISTE DES ORIGINES</h1> <br>

    <a href=\"{{ path('insertOrigine') }}\" >Ajouter une origine </a><br>
    <table class=\"table\">
        <thead>
        <tr><th>Appellation </th> <th>Region</th><th>Options</th></tr>
        </thead>
        <tbody>
        {% for origine in origines %}
            <tr>
                <td> {{ origine.nomAppellation }}</td>
                <td> {{ origine.region }} </td>
                <td>  <a href=\"{{ path('updateOrigine',{'id':origine.idAppellation }) }}\">Update</a> |
                    <a href=\"{{ path('deleteOrigine',{'id':origine.idAppellation}) }}\">Delete</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "lesOrigines.html.twig", "/home/lamien/caveSymfony/app/Resources/views/lesOrigines.html.twig");
    }
}
