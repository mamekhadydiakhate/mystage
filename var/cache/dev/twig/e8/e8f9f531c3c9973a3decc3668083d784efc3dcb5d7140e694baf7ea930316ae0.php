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

/* baseException.html.twig */
class __TwigTemplate_5ad0a8a6b06055e31b6a1604d293ceb48c7310d78f261d29b0d1337c298fa5b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseException.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseException.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body class=\"hold-transition sidebar-mini sidebar-collapse layout-fixed\">

    <div class=\"aside position-fixed\">

    <!-- Site content -->
    <div class=\"container-fluid content\">
        <div class=\"row\">
            <!--  COL SECTION -->
            <div class=\"col-md-8 col-lg-9 section\">
                <div class=\"row\">
                    <!-- ROW SEARCH AND DATE -->
                    <div class=\"col-sm-12 col-lg-7\">
                        <!-- ROW SEARCH + small_notif -->
                        <div class=\"row m-0 mb-3 p-0\">
                            <div class=\"search-accueil\">
                                <div class=\"row\">
                                    <div class=\"col-11 pl-\">
                                        <form class=\"search-form\">
                                            <input disabled class=\"form-control form-control-sm search-input\" type=\"search\" placeholder=\"Exeption controller\" style=\"background-color:transparent\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                </div>
            </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TORCH";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "  
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseException.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  102 => 9,  89 => 40,  87 => 38,  54 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {# <link rel=\"icon\" type=\"image/x-icon\" href=\"/favicon.ico\" /> #}
    <title>{% block title %}TORCH{% endblock %}</title>
</head>
<body class=\"hold-transition sidebar-mini sidebar-collapse layout-fixed\">

    <div class=\"aside position-fixed\">

    <!-- Site content -->
    <div class=\"container-fluid content\">
        <div class=\"row\">
            <!--  COL SECTION -->
            <div class=\"col-md-8 col-lg-9 section\">
                <div class=\"row\">
                    <!-- ROW SEARCH AND DATE -->
                    <div class=\"col-sm-12 col-lg-7\">
                        <!-- ROW SEARCH + small_notif -->
                        <div class=\"row m-0 mb-3 p-0\">
                            <div class=\"search-accueil\">
                                <div class=\"row\">
                                    <div class=\"col-11 pl-\">
                                        <form class=\"search-form\">
                                            <input disabled class=\"form-control form-control-sm search-input\" type=\"search\" placeholder=\"Exeption controller\" style=\"background-color:transparent\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {% block content %}  
                    {% endblock %}
                </div>
            </div>
</body>
</html>", "baseException.html.twig", "/home/mkd/Bureau/STAGE-SONATEL/Roadmap-Suivi-DCIRE-Back/templates/baseException.html.twig");
    }
}
