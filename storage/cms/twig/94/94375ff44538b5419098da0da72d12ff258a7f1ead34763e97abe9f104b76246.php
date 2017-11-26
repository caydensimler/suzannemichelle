<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/download.htm */
class __TwigTemplate_f813354c065bcf7dcb531ced594e1e14549016b1802a88cce7349acfe6f26b5f extends Twig_Template
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
        echo "<section id=\"download\" class=\"download bg-primary text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h2 class=\"section-heading\">";
        // line 5
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_headline", array());
        echo "</h2>
                ";
        // line 6
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_content", array());
        echo "
                <div class=\"badges\">
                    ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_google_link", array())) {
            // line 9
            echo "                    <a class=\"badge-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_google_link", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/google-play-badge.svg");
            echo "\" alt=\"Google Play link\">
                    </a>
                    ";
        }
        // line 13
        echo "                    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_appstore_link", array())) {
            // line 14
            echo "                    <a class=\"badge-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_appstore_link", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 15
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/app-store-badge.svg");
            echo "\" alt=\"App Store link\">
                    </a>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/download.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  55 => 15,  50 => 14,  47 => 13,  41 => 10,  36 => 9,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"download\" class=\"download bg-primary text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h2 class=\"section-heading\">{{ this.theme.download_headline | raw }}</h2>
                {{ this.theme.download_content | raw }}
                <div class=\"badges\">
                    {% if this.theme.download_google_link %}
                    <a class=\"badge-link\" href=\"{{ this.theme.download_google_link }}\">
                        <img src=\"{{ 'assets/img/google-play-badge.svg' | theme }}\" alt=\"Google Play link\">
                    </a>
                    {% endif %}
                    {% if this.theme.download_appstore_link %}
                    <a class=\"badge-link\" href=\"{{ this.theme.download_appstore_link }}\">
                        <img src=\"{{ 'assets/img/app-store-badge.svg' | theme }}\" alt=\"App Store link\">
                    </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/download.htm", "");
    }
}
