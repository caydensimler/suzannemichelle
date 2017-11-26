<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/features.htm */
class __TwigTemplate_aa4b2372c23999389c88d5a4e40566648a31024f554a587a574d915563a714ea extends Twig_Template
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
        echo "<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"section-heading\">
                    <h2>";
        // line 6
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_headline", array());
        echo "</h2>
                    <p class=\"text-muted\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_subheadline", array()), "html", null, true);
        echo "</p>
                    <hr />
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- You can put an image here, some HTML, an animation, video, or anything else -->
                                ";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_img", array())) {
            // line 20
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_img", array()), "getThumb", array(0 => 621, 1 => 1104, 2 => "crop"), "method"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
            echo " features\" />
                                ";
        } else {
            // line 22
            echo "                                <img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
            echo " features\" />
                                ";
        }
        // line 24
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"container-fluid\">
                    ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_list", array())) {
            // line 35
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/items"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "                    ";
        } else {
            // line 37
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/dummy"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "                    ";
        }
        // line 39
        echo "                </div>
            </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  90 => 38,  85 => 37,  82 => 36,  77 => 35,  75 => 34,  63 => 24,  55 => 22,  47 => 20,  45 => 19,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"section-heading\">
                    <h2>{{ this.theme.features_headline | raw }}</h2>
                    <p class=\"text-muted\">{{ this.theme.features_subheadline }}</p>
                    <hr />
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- You can put an image here, some HTML, an animation, video, or anything else -->
                                {% if this.theme.features_img %}
                                <img src=\"{{ this.theme.features_img.getThumb(621, 1104, 'crop') }}\" class=\"img-responsive\" alt=\"{{ this.theme.site_title }} features\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-responsive\" alt=\"{{ this.theme.site_title }} features\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"container-fluid\">
                    {% if this.theme.features_list %}
                        {% partial 'features/items' %}
                    {% else %}
                        {% partial 'features/dummy' %}
                    {% endif %}
                </div>
            </div>
        </div>
</section>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/partials/sections/features.htm", "");
    }
}
