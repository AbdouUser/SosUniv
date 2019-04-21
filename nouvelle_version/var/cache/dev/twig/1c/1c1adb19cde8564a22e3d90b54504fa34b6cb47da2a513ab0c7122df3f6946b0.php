<?php

/* preferences.ejs */
class __TwigTemplate_44887724130748913e42cbbb282c549d9cd9ab2ce50de843f11de115c290b99b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preferences.ejs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preferences.ejs"));

        // line 1
        echo "<div id=\"preferences\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Préférences de compte
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>

            <form action=\"/reference-update\" method=\"post\" onsubmit=\"return validateForm3();\">
                <div class=\"modal-body\">
                    <h6 class=\"border-bottom pb-2\">
                        Quelles personnes vous cherchez?
                    </h6>

                    <!-- age -->
                    <h6 class=\"mt-3 pt-1\">
                        Age
                    </h6>
                    <div class=\"d-flex\">
                        <div class=\"form-inline\">
                        <span class=\"mr-1\">
                            Min
                        </span>
                            <input type=\"number\" id=\"min\" name=\"ageMin\" class=\"form-control form-control-sm mr-1\"
                                   value=\"<%= user['pref_min_age'] %>\"
                                    data-default=\"<%= user['pref_min_age'] %>\" placeholder=\"Pas de min\"/>
                        </div>
                        <div class=\"form-inline\">
                        <span class=\"mr-1\">
                            Max
                        </span>
                            <input type=\"number\" id=\"max\" name=\"ageMax\" class=\"form-control form-control-sm\"
                                   value=\"<%= user['pref_max_age'] %>\"
                                    data-default=\"<%= user['pref_max_age'] %>\" placeholder=\"Pas de max\"/>
                        </div>
                    </div>

                    <!-- lieu -->
                    <h6 class=\"mt-3 pt-1\">
                        Lieu
                    </h6>
                    <input type=\"text\" class=\"form-control\"
                           data-default=\"<%= user['pref_lieu'] %>\" name=\"place\"
                           value=\"<%= user['pref_lieu'] %>\" placeholder=\"Aucun lieu spécifié\"/>


                    <div class=\"modal-footer\">
                        <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                            ANNULER
                        </button>
                        <input type=\"submit\" class=\"btn --btn-primary\" value=\"Enregister\"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"/js/FindMe.js\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "preferences.ejs";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"preferences\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Préférences de compte
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>

            <form action=\"/reference-update\" method=\"post\" onsubmit=\"return validateForm3();\">
                <div class=\"modal-body\">
                    <h6 class=\"border-bottom pb-2\">
                        Quelles personnes vous cherchez?
                    </h6>

                    <!-- age -->
                    <h6 class=\"mt-3 pt-1\">
                        Age
                    </h6>
                    <div class=\"d-flex\">
                        <div class=\"form-inline\">
                        <span class=\"mr-1\">
                            Min
                        </span>
                            <input type=\"number\" id=\"min\" name=\"ageMin\" class=\"form-control form-control-sm mr-1\"
                                   value=\"<%= user['pref_min_age'] %>\"
                                    data-default=\"<%= user['pref_min_age'] %>\" placeholder=\"Pas de min\"/>
                        </div>
                        <div class=\"form-inline\">
                        <span class=\"mr-1\">
                            Max
                        </span>
                            <input type=\"number\" id=\"max\" name=\"ageMax\" class=\"form-control form-control-sm\"
                                   value=\"<%= user['pref_max_age'] %>\"
                                    data-default=\"<%= user['pref_max_age'] %>\" placeholder=\"Pas de max\"/>
                        </div>
                    </div>

                    <!-- lieu -->
                    <h6 class=\"mt-3 pt-1\">
                        Lieu
                    </h6>
                    <input type=\"text\" class=\"form-control\"
                           data-default=\"<%= user['pref_lieu'] %>\" name=\"place\"
                           value=\"<%= user['pref_lieu'] %>\" placeholder=\"Aucun lieu spécifié\"/>


                    <div class=\"modal-footer\">
                        <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                            ANNULER
                        </button>
                        <input type=\"submit\" class=\"btn --btn-primary\" value=\"Enregister\"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"/js/FindMe.js\"></script>
", "preferences.ejs", "/var/www/web2/SOSDiderot/app/Resources/views/preferences.ejs");
    }
}
