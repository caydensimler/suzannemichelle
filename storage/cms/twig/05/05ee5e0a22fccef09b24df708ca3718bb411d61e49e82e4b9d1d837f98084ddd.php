<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/pages/home.htm */
class __TwigTemplate_bce894559e5bf43264080122ff756d35522bff34bce470a79b6089e198903d4b extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_enabled", array())) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/intro"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_enabled", array())) {
            // line 6
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/download"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_enabled", array())) {
            // line 10
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/features"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "cta_enabled", array())) {
            // line 14
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/cta"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_enabled", array())) {
            // line 18
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/contact"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  63 => 17,  60 => 16,  54 => 14,  52 => 13,  49 => 12,  43 => 10,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.intro_enabled %}
    {% partial 'sections/intro' %}
{% endif %}

{% if this.theme.download_enabled %}
    {% partial 'sections/download' %}
{% endif %}

{% if this.theme.features_enabled %}
    {% partial 'sections/features' %}
{% endif %}

{% if this.theme.cta_enabled %}
    {% partial 'sections/cta' %}
{% endif %}

{% if this.theme.contact_enabled %}
    {% partial 'sections/contact' %}
{% endif %}", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/pages/home.htm", "");
    }
}
