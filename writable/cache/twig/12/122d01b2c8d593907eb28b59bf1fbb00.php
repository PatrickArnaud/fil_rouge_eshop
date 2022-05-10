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

/* tags/base.html.twig */
class __TwigTemplate_ba8a39426f2fa246564b8ef392ba2f50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 6
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t";
        $this->loadTemplate("common/header.html.twig", "tags/base.html.twig", 2)->display($context);
        // line 3
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        $this->loadTemplate("common/footer.html.twig", "tags/base.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "tags/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  72 => 6,  66 => 5,  56 => 3,  53 => 2,  49 => 1,  45 => 6,  43 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
\t{% include 'common/header.html.twig' %}
\t{% block title %}{% endblock %}
{% endblock %}
{% block content %}{% endblock %}
{% block footer %}
\t{% include 'common/footer.html.twig' %}
{% endblock %}
", "tags/base.html.twig", "C:\\xampp\\htdocs\\fil_rouge_eshop\\app\\Views\\tags\\base.html.twig");
    }
}
