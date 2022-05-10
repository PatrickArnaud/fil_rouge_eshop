<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tags/all_tags.html.twig */
class __TwigTemplate_2f2deb0abd50cf5af79f8a8e78104de2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "tags/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("tags/base.html.twig", "tags/all_tags.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div id=\"content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>ALL-TAGS</h1>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 10
            echo "\t\t\t\t\t\t<a href=\"one/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id_tag", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<li>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name_tag", [], "any", false, false, false, 11), "html", null, true);
            echo "</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "tags/all_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  66 => 11,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tags/base.html.twig\"%}

{% block content %}
\t<div id=\"content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>ALL-TAGS</h1>
\t\t\t\t<ul>
\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t<a href=\"one/{{tag.id_tag }}\">
\t\t\t\t\t\t\t<li>{{ tag.name_tag }}</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
{% endblock %}
", "tags/all_tags.html.twig", "C:\\xampp\\htdocs\\fil_rouge_eshop\\app\\Views\\tags\\all_tags.html.twig");
    }
}
