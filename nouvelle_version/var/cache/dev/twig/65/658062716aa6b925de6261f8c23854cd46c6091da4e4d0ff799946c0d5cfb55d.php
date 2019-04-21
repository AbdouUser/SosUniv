<?php

/* header-authenticated.ejs */
class __TwigTemplate_7970a5edda502b3c34ddb6a7b1aaf4f817e5a5b09045c3e4923b238d913d1f60 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-authenticated.ejs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-authenticated.ejs"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark --bg-primary\">
        <a class=\"navbar-brand\" href=\"/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>

        <!--
        <input id=\"find_people\" type=\"text\" >
        <img src=\"img/svg/chercher.png\"class=\"pointable\" id=\"people-finder\"/>
        -->

        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"/settings\" class=\"nav-link text-light\">
                        Paramétres
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/logout\" class=\"nav-link text-light\">
                        Se déconnecter
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<nav class=\"navbar navbar-expand navbar-light --bg-light justify-content-center sticky-nav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a href=\"/accueil\" class=\"nav-link px-3\">
                <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/notification\" class=\"nav-link px-3\">
                <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
  <!--
                <% if(nb_unseen_notifs > 0) { %>
                    <span class=\"badge badge-danger\">
                        <%= nb_unseen_notifs %>
                    </span>
                <% } else { %>
                    <span class=\"badge badge-danger\"></span>
                <% } %> -->
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/profile\" class=\"nav-link px-3\">
                <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
            </a>
        </li>

        <li class=\"nav-item\">
            <a href=\"/rendez_vous\" class=\"nav-link px-3\">
                <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
            </a>
        </li>
    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header-authenticated.ejs";
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
        return new Twig_Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark --bg-primary\">
        <a class=\"navbar-brand\" href=\"/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>

        <!--
        <input id=\"find_people\" type=\"text\" >
        <img src=\"img/svg/chercher.png\"class=\"pointable\" id=\"people-finder\"/>
        -->

        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"/settings\" class=\"nav-link text-light\">
                        Paramétres
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/logout\" class=\"nav-link text-light\">
                        Se déconnecter
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<nav class=\"navbar navbar-expand navbar-light --bg-light justify-content-center sticky-nav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a href=\"/accueil\" class=\"nav-link px-3\">
                <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/notification\" class=\"nav-link px-3\">
                <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
  <!--
                <% if(nb_unseen_notifs > 0) { %>
                    <span class=\"badge badge-danger\">
                        <%= nb_unseen_notifs %>
                    </span>
                <% } else { %>
                    <span class=\"badge badge-danger\"></span>
                <% } %> -->
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/profile\" class=\"nav-link px-3\">
                <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
            </a>
        </li>

        <li class=\"nav-item\">
            <a href=\"/rendez_vous\" class=\"nav-link px-3\">
                <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
            </a>
        </li>
    </ul>
</nav>
", "header-authenticated.ejs", "/var/www/web2/SOSDiderot/app/Resources/views/header-authenticated.ejs");
    }
}
