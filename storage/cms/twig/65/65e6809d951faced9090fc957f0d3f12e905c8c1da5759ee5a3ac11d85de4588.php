<?php

/* /home/vagrant/Code/mom/themes/vojtasvoboda-newage/layouts/default.htm */
class __TwigTemplate_c48d8142fa00f313d126bfb1d8be1d5286f6436f8358cff8dccad7ecec51a91c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "\">

    <title>";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
            echo " &#124; ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_title", array()), "html", null, true);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/font-awesome/css/font-awesome.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/simple-line-icons/css/simple-line-icons.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/device-mockups/device-mockups.min.css");
        echo "\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/new-age.min.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 27
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "
<script src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.easing.min.js");
        echo "\"></script>
<script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/new-age.min.js");
        echo "\"></script>
";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 48
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  101 => 42,  97 => 41,  95 => 40,  91 => 39,  77 => 27,  74 => 26,  70 => 25,  64 => 22,  60 => 21,  56 => 20,  45 => 12,  35 => 9,  30 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ this.theme.site_locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.description }}\">

    <title>{% if this.page.title %}{{ this.page.title}} &#124; {% endif %}{{ this.theme.site_title }}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css' | theme }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/font-awesome/css/font-awesome.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/simple-line-icons/css/simple-line-icons.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/device-mockups/device-mockups.min.css' | theme }}\">

    <!-- Theme CSS -->
    <link href=\"{{ 'assets/css/new-age.min.css' | theme }}\" rel=\"stylesheet\">
    {% styles %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

{% partial 'modules/nav' %}
{% page %}
{% partial 'modules/footer' %}

<script src=\"{{ 'assets/vendor/jquery/jquery.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/js/jquery.easing.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/js/new-age.min.js' | theme }}\"></script>
{% scripts %}

</body>
</html>", "/home/vagrant/Code/mom/themes/vojtasvoboda-newage/layouts/default.htm", "");
    }
}
