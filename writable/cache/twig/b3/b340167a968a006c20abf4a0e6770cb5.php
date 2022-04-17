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

/* tags/sign_up.html.twig */
class __TwigTemplate_d4711a282b6d9fb460fee8121b8bdbf6 extends Template
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
        $this->parent = $this->loadTemplate("tags/base.html.twig", "tags/sign_up.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"container\">
<div class=\"col-12 \">
<h5>Username</h5>
<input type=\"text\" name=\"username\" value=\"\" size=\"50\"/>
<h5>Password</h5>
<input type=\"password\" name=\"password\" value=\"\" size=\"50\"/>
<h5>Password Confirm</h5>
<input type=\"password\" name=\"passconf\" value=\"\" size=\"50\"/>
<h5>Email Address</h5>
<input type=\"text\" name=\"email\" value=\"\" size=\"50\"/>
<div><input type=\"submit\" value=\"Submit\"/></div></form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tags/sign_up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tags/base.html.twig\"%}
{% block content %}
<div class=\"container\">
<div class=\"col-12 \">
<h5>Username</h5>
<input type=\"text\" name=\"username\" value=\"\" size=\"50\"/>
<h5>Password</h5>
<input type=\"password\" name=\"password\" value=\"\" size=\"50\"/>
<h5>Password Confirm</h5>
<input type=\"password\" name=\"passconf\" value=\"\" size=\"50\"/>
<h5>Email Address</h5>
<input type=\"text\" name=\"email\" value=\"\" size=\"50\"/>
<div><input type=\"submit\" value=\"Submit\"/></div></form>
</div>
</div>
{% endblock %}
", "tags/sign_up.html.twig", "C:\\xampp\\htdocs\\fil_rouge_code_igniter\\app\\Views\\tags\\sign_up.html.twig");
    }
}
