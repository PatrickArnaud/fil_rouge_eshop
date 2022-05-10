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

/* tags/one_tag.html.twig */
class __TwigTemplate_ade4f8283ff80370684a0f678eebe9fb extends Template
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
        $this->parent = $this->loadTemplate("tags/base.html.twig", "tags/one_tag.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"col-12\">
\t\t\t<h1>ONE-TAG</h1>
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "name_tag", [], "any", false, false, false, 7), "html", null, true);
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "tags/one_tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tags/base.html.twig\"%}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"col-12\">
\t\t\t<h1>ONE-TAG</h1>
\t\t\t{{tag.name_tag}}
\t\t</div>
\t</div>
{% endblock %}
", "tags/one_tag.html.twig", "C:\\xampp\\htdocs\\fil_rouge_eshop\\app\\Views\\tags\\one_tag.html.twig");
    }
}
