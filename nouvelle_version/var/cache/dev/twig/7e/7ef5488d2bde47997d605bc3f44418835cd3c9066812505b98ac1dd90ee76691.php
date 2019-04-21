<?php

/* SOSDiderot/inscription.html.twig */
class __TwigTemplate_861b9c8f3179ed561318dad31b6342e8289c900b4ccc7862696df1ae3c936a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/inscription.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-lg-4 col-xs-4 mt-3\"></div>
   \t\t\t <div id=\"formulaire\" class=\"col-lg-4 col-xs-4 mt-3 bg-light\">
                        <form action=\"/inscription\" method=\"post\" class=\"ui form\" onsubmit=\"return validateForm();\">
                            <div class=\"form-style-5\">
                                <fieldset>
                                    <legend><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/diplome.png"), "html", null, true);
        echo "\"/>S'inscrire</legend>
                                    <input id=\"nom\" title=\"\" type=\"text\" name=\"nom\" placeholder=\"Votre nom *\" \" onblur=\"verifnom()\"
                                    required>
                                    <input id=\"prenom\" title=\"\"type=\"text\" name=\"prenom\" placeholder=\"Votre prénom *\" \"
                                    onblur=\"verifprenom()\" required>
                                    <input id=\"email\"type=\"email\" name=\"email\" placeholder=\"Votre e-email *\" onblur=\"verifMail()\"required>
                                    <input id=\"mdp\" title=\"\"type=\"password\" name=\"password\" placeholder=\"Votre mot de passe *\" onblur=\"verifmdp()\" required>
                                    <input id=\"mdpc\" type=\"password\" name=\"pswc\" placeholder=\"Confirmation mot de passe *\"
                                           onblur=\"verifmdpMatch()\" required>
                                    <input type=\"radio\" name=\"statut\" value=\"Etudiant\" required>Etudiant
                                    <input type=\"radio\" name=\"statut\" value=\"Professionel\">Professionel
                                    <br>
                                    <input id=\"submit\" type=\"submit\" value=\"INSCRIPTION\"/>
                                </fieldset>
                            </div>
                        </form>
             </div>
\t\t</div>
\t</div>
\t \t";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formulaire.js"), "html", null, true);
        echo "\" ></script>
       \t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  81 => 29,  59 => 10,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-lg-4 col-xs-4 mt-3\"></div>
   \t\t\t <div id=\"formulaire\" class=\"col-lg-4 col-xs-4 mt-3 bg-light\">
                        <form action=\"/inscription\" method=\"post\" class=\"ui form\" onsubmit=\"return validateForm();\">
                            <div class=\"form-style-5\">
                                <fieldset>
                                    <legend><img src=\"{{ asset('img/diplome.png') }}\"/>S'inscrire</legend>
                                    <input id=\"nom\" title=\"\" type=\"text\" name=\"nom\" placeholder=\"Votre nom *\" \" onblur=\"verifnom()\"
                                    required>
                                    <input id=\"prenom\" title=\"\"type=\"text\" name=\"prenom\" placeholder=\"Votre prénom *\" \"
                                    onblur=\"verifprenom()\" required>
                                    <input id=\"email\"type=\"email\" name=\"email\" placeholder=\"Votre e-email *\" onblur=\"verifMail()\"required>
                                    <input id=\"mdp\" title=\"\"type=\"password\" name=\"password\" placeholder=\"Votre mot de passe *\" onblur=\"verifmdp()\" required>
                                    <input id=\"mdpc\" type=\"password\" name=\"pswc\" placeholder=\"Confirmation mot de passe *\"
                                           onblur=\"verifmdpMatch()\" required>
                                    <input type=\"radio\" name=\"statut\" value=\"Etudiant\" required>Etudiant
                                    <input type=\"radio\" name=\"statut\" value=\"Professionel\">Professionel
                                    <br>
                                    <input id=\"submit\" type=\"submit\" value=\"INSCRIPTION\"/>
                                </fieldset>
                            </div>
                        </form>
             </div>
\t\t</div>
\t</div>
\t \t{% block javascripts %}
        \t<script src=\"{{asset('js/formulaire.js')}}\" ></script>
       \t{% endblock %}
{% endblock %}
", "SOSDiderot/inscription.html.twig", "/var/www/web2/SOSDiderot/app/Resources/views/SOSDiderot/inscription.html.twig");
    }
}
