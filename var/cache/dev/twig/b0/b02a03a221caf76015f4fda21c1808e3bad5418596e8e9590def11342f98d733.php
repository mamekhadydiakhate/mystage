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

/* exception/error.html.twig */
class __TwigTemplate_2063e77e374ca4ec582e66e10b1fad45362ffddd2dc23d172ea360a071449fa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title_page' => [$this, 'block_title_page'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseException.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exception/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exception/error.html.twig"));

        $this->parent = $this->loadTemplate("baseException.html.twig", "exception/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page"));

        echo "Erreur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <!-- ROW MENU  -->
    <div class=\"col-sm-12\">
        <div class=\"row\">
            <!-- row 1 -->
            <div class=\"col-12 \">
                <div class=\"page-reunion-item\">
                    <div class=\"page-reunion-item-title text-center\">
                        Une erreur est survenue !
                    </div>
                </div>
            </div>

            <!-- row 2 -->
        </div>
    </div>

    <div class=\"col-12 p-0 mb-4\">
        <div class=\"container-fluid\">
            <div class=\"form_wizard\" id=\"form_wizard\">
                <div class=\"new-card\">
                    <div class=\"card-header my-bottom-border\">
                        <!-- progressbar -->
                        <strong style=\"color: #009393\">
                            Message
                        </strong>
                    </div>
                    <!-- /.card-header -->

                    <!-- fieldset informations générales -->
                    <fieldset id=\"f1\">
                        <div class=\"card-body reunion-bloc-height\">
                            <div>
                                <div class=\"col-11 col-lg-12 reunion-table\">
                                    <br>
                                    <h4>
                                        Un mail de signalisation a été envoyé à l'administrateur du site.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseException.html.twig' %}

{% block title_page %}Erreur{% endblock %}

{% block content %}
    <!-- ROW MENU  -->
    <div class=\"col-sm-12\">
        <div class=\"row\">
            <!-- row 1 -->
            <div class=\"col-12 \">
                <div class=\"page-reunion-item\">
                    <div class=\"page-reunion-item-title text-center\">
                        Une erreur est survenue !
                    </div>
                </div>
            </div>

            <!-- row 2 -->
        </div>
    </div>

    <div class=\"col-12 p-0 mb-4\">
        <div class=\"container-fluid\">
            <div class=\"form_wizard\" id=\"form_wizard\">
                <div class=\"new-card\">
                    <div class=\"card-header my-bottom-border\">
                        <!-- progressbar -->
                        <strong style=\"color: #009393\">
                            Message
                        </strong>
                    </div>
                    <!-- /.card-header -->

                    <!-- fieldset informations générales -->
                    <fieldset id=\"f1\">
                        <div class=\"card-body reunion-bloc-height\">
                            <div>
                                <div class=\"col-11 col-lg-12 reunion-table\">
                                    <br>
                                    <h4>
                                        Un mail de signalisation a été envoyé à l'administrateur du site.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "exception/error.html.twig", "/home/mkd/Bureau/STAGE-SONATEL/Roadmap-Suivi-DCIRE-Back/templates/exception/error.html.twig");
    }
}
