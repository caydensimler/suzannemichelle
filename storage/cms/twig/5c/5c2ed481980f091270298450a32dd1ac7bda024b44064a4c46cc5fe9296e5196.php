<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav-items.htm */
class __TwigTemplate_713d1474d2ca57aa012fa55c2c7ebdeeda6a93ed5763ef9f2601799b69ff7554 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_enabled", array())) {
            // line 2
            echo "<li>
    <a class=\"page-scroll\" href=\"#download\">Download</a>
</li>
";
        }
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_enabled", array())) {
            // line 7
            echo "<li>
    <a class=\"page-scroll\" href=\"#features\">Features</a>
</li>
";
        }
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_enabled", array())) {
            // line 12
            echo "<li>
    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  35 => 11,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.download_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#download\">Download</a>
</li>
{% endif %}
{% if this.theme.features_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#features\">Features</a>
</li>
{% endif %}
{% if this.theme.contact_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
</li>
{% endif %}", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/modules/nav-items.htm", "");
    }
}
