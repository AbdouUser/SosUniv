<?php

/* profile-editor.ejs */
class __TwigTemplate_eaa2d58b672b48e7ea028f7d5930784948f066b8bfbc6e4d3cfaebe28a720b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editor.ejs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editor.ejs"));

        // line 1
        echo "<h1>ok</h1>
<div id=\"#profile-editor\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Modifier le profil
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>

            <form action=\"/profile-update\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "nom"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>

                    <!-- description -->
                    <textarea rows=\"3\" placeholder=\"Foramtion actuelle\" class=\"form-control mt-2\"
                              name=\"formation\"
                              data-default=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "formation"], "method"), "html", null, true);
        echo "\"></textarea>
                    <textarea rows=\"3\" placeholder=\"Foramtion actuelle\" class=\"form-control mt-2\"
                            name=\"university\"
                            data-default=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "university"], "method"), "html", null, true);
        echo "\"></textarea>

                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                        ANNULER
                    </button>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregister\"/>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formulaire.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile-editor.ejs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 48,  73 => 34,  67 => 31,  55 => 24,  47 => 21,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>ok</h1>
<div id=\"#profile-editor\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Modifier le profil
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>

            <form action=\"/profile-update\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"{{app.session.get('prenom')}}\" data-default=\"{{app.session.get('prenom')}}\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"{{app.session.get('nom')}}\" data-default=\"{{app.session.get('prenom')}}\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>

                    <!-- description -->
                    <textarea rows=\"3\" placeholder=\"Foramtion actuelle\" class=\"form-control mt-2\"
                              name=\"formation\"
                              data-default=\"{{app.session.get('formation')}}\"></textarea>
                    <textarea rows=\"3\" placeholder=\"Foramtion actuelle\" class=\"form-control mt-2\"
                            name=\"university\"
                            data-default=\"{{app.session.get('university')}}\"></textarea>

                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                        ANNULER
                    </button>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregister\"/>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"{{asset('js/formulaire.js')}}\" ></script>
", "profile-editor.ejs", "/var/www/web2/SOSDiderot/app/Resources/views/profile-editor.ejs");
    }
}
