<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav.htm */
class __TwigTemplate_f550cc4bd0659a5d7e340e22a6d14079a7eaeccf283637520e4d4bd991810e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav
    id=\"mainNav\"
    class=\"navbar ";
        // line 3
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "menu_transparent", array())) ? ("navbar-default") : ("navbar-inverse"));
        echo " navbar-fixed-top\"
>
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
        echo "</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav-items.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  41 => 15,  33 => 10,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav
    id=\"mainNav\"
    class=\"navbar {{ this.theme.menu_transparent ? 'navbar-default' : 'navbar-inverse' }} navbar-fixed-top\"
>
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">{{ this.theme.site_title }}</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% partial 'modules/nav-items.htm' %}
            </ul>
        </div>
    </div>
</nav>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav.htm", "");
    }
}
