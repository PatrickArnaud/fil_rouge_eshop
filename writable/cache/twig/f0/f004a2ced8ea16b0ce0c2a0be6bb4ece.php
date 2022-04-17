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

/* common/header.html.twig */
class __TwigTemplate_8db27a4709065d1ddf1acdab19377e6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Nesti</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t</head>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark \">
\t\t\t<div class=\"container-fluid \">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Nesti</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav justify-content-center\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Home</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">All-Tag</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/create\">Create-Tag</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</nav>
\t<body>
</html>
";
    }

    public function getTemplateName()
    {
        return "common/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Nesti</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t</head>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark \">
\t\t\t<div class=\"container-fluid \">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Nesti</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav justify-content-center\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Home</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">All-Tag</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/create\">Create-Tag</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</nav>
\t<body>
</html>
", "common/header.html.twig", "C:\\xampp\\htdocs\\fil_rouge_code_igniter\\app\\Views\\common\\header.html.twig");
    }
}
