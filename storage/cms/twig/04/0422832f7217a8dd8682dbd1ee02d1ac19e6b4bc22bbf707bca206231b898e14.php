<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/cta.htm */
class __TwigTemplate_1c832e4e7c069c1ecd5ff33fd9e49f4c6ec908cd1aba7d9a53b873cded8adc8e extends Twig_Template
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
        echo "<section class=\"cta\">
    <div class=\"cta-content\">
        <div class=\"container\">
            <h2>";
        // line 4
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "cta_headline", array());
        echo "</h2>
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "cta_button_link", array())) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "cta_button_link", array()), "html", null, true);
            echo "\" class=\"btn btn-outline btn-xl page-scroll\">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "cta_button", array()), "html", null, true);
            echo "
            </a>
            ";
        }
        // line 10
        echo "        </div>
    </div>
    <div class=\"overlay\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 7,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"cta\">
    <div class=\"cta-content\">
        <div class=\"container\">
            <h2>{{ this.theme.cta_headline | raw }}</h2>
            {% if this.theme.cta_button_link %}
            <a href=\"{{ this.theme.cta_button_link }}\" class=\"btn btn-outline btn-xl page-scroll\">
                {{ this.theme.cta_button }}
            </a>
            {% endif %}
        </div>
    </div>
    <div class=\"overlay\"></div>
</section>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/cta.htm", "");
    }
}
