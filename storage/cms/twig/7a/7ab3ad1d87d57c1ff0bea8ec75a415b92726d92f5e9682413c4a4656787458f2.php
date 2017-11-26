<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/contact.htm */
class __TwigTemplate_f40d03a7411e5e92d253144d6d7d8c9ddc4ce1fde0926c3e0c678dc82b7aafb4 extends Twig_Template
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
        echo "<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_headline", array());
        echo "</h2>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_content", array())) {
            // line 5
            echo "        <p>
            ";
            // line 6
            echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_content", array());
            echo "
        </p>
        ";
        }
        // line 9
        echo "        <ul class=\"list-inline list-social\">
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_twitter", array())) {
            // line 11
            echo "            <li class=\"social-twitter\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_twitter", array()), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a>
            </li>
            ";
        }
        // line 15
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_facebook", array())) {
            // line 16
            echo "            <li class=\"social-facebook\">
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_facebook", array()), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
            </li>
            ";
        }
        // line 20
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_google", array())) {
            // line 21
            echo "            <li class=\"social-google-plus\">
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_google", array()), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus\"></i></a>
            </li>
            ";
        }
        // line 25
        echo "        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  70 => 22,  67 => 21,  64 => 20,  58 => 17,  55 => 16,  52 => 15,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>{{ this.theme.contact_headline | raw }}</h2>
        {% if this.theme.contact_content %}
        <p>
            {{ this.theme.contact_content | raw }}
        </p>
        {% endif %}
        <ul class=\"list-inline list-social\">
            {% if this.theme.contact_twitter %}
            <li class=\"social-twitter\">
                <a href=\"{{ this.theme.contact_twitter }}\"><i class=\"fa fa-twitter\"></i></a>
            </li>
            {% endif %}
            {% if this.theme.contact_facebook %}
            <li class=\"social-facebook\">
                <a href=\"{{ this.theme.contact_facebook }}\"><i class=\"fa fa-facebook\"></i></a>
            </li>
            {% endif %}
            {% if this.theme.contact_google %}
            <li class=\"social-google-plus\">
                <a href=\"{{ this.theme.contact_google }}\"><i class=\"fa fa-google-plus\"></i></a>
            </li>
            {% endif %}
        </ul>
    </div>
</section>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/contact.htm", "");
    }
}
