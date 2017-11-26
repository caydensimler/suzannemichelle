<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/intro.htm */
class __TwigTemplate_affe6a48cb372eab3996bbb0a86ba149d8785d11802b17b53378d6d2e279f927 extends Twig_Template
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
        echo "<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <div class=\"header-content\">
                    <div class=\"header-content-inner\">
                        <h1>";
        // line 7
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_headline", array());
        echo "</h1>
                        ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_button_link", array())) {
            // line 9
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_button_link", array()), "html", null, true);
            echo "\" class=\"btn btn-outline btn-xl page-scroll\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_button", array()), "html", null, true);
            echo "</a>
                        ";
        }
        // line 11
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- You can put an image here, some HTML, an animation, video, or anything else! -->
                                ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_img", array())) {
            // line 21
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "intro_img", array()), "getThumb", array(0 => 621, 1 => 1104, 2 => "crop"), "method"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 23
            echo "                                <img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
            echo "\" />
                                ";
        }
        // line 25
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  62 => 23,  54 => 21,  52 => 20,  41 => 11,  33 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <div class=\"header-content\">
                    <div class=\"header-content-inner\">
                        <h1>{{ this.theme.intro_headline | raw }}</h1>
                        {% if this.theme.intro_button_link %}
                        <a href=\"{{ this.theme.intro_button_link }}\" class=\"btn btn-outline btn-xl page-scroll\">{{ this.theme.intro_button }}</a>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- You can put an image here, some HTML, an animation, video, or anything else! -->
                                {% if this.theme.intro_img %}
                                <img src=\"{{ this.theme.intro_img.getThumb(621, 1104, 'crop') }}\" class=\"img-responsive\" alt=\"{{ this.theme.site_title }}\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-responsive\" alt=\"{{ this.theme.site_title }}\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/intro.htm", "");
    }
}
