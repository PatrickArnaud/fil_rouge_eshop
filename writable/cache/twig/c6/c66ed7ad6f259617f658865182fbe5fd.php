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

/* common/footer.html.twig */
class __TwigTemplate_4c94c9c0e25fe522d3db86fc0898901b extends Template
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
        echo "</body>
<footer class=\"bg-dark text-center text-white text-lg-start fixed-bottom\">
    <!-- Grid container -->
    <div class=\"container p-4\">
        <!--Grid row-->
        <div class=\"row\">
            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                <h5 class=\"text-uppercase\"></h5>
                <p>
                    <i>
                        \"Génial\"
                    </i>

                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                <h5 class=\"text-uppercase\"></h5>
                <p>
                    <i>
                        \" Des Recettes Toutes savoureuse\" !
                    </i>

                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        © 2022 Copyright: NESTI
    </div>
    <!-- Copyright -->
</footer>


</html>";
    }

    public function getTemplateName()
    {
        return "common/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</body>
<footer class=\"bg-dark text-center text-white text-lg-start fixed-bottom\">
    <!-- Grid container -->
    <div class=\"container p-4\">
        <!--Grid row-->
        <div class=\"row\">
            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                <h5 class=\"text-uppercase\"></h5>
                <p>
                    <i>
                        \"Génial\"
                    </i>

                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                <h5 class=\"text-uppercase\"></h5>
                <p>
                    <i>
                        \" Des Recettes Toutes savoureuse\" !
                    </i>

                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        © 2022 Copyright: NESTI
    </div>
    <!-- Copyright -->
</footer>


</html>", "common/footer.html.twig", "C:\\xampp\\htdocs\\fil_rouge_eshop\\app\\Views\\common\\footer.html.twig");
    }
}
