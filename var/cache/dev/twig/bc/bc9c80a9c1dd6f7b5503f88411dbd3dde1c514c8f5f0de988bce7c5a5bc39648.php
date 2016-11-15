<?php

/* base.html.twig */
class __TwigTemplate_3e6c36eceaff7088c7d49ec5659cacc3b7617f970e23de48c66c453cd365087d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7d557af8f7e08f466ab5fa60a0c1ac60fd151d49915199252c9aef28529fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7d557af8f7e08f466ab5fa60a0c1ac60fd151d49915199252c9aef28529fb6->enter($__internal_bf7d557af8f7e08f466ab5fa60a0c1ac60fd151d49915199252c9aef28529fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bf7d557af8f7e08f466ab5fa60a0c1ac60fd151d49915199252c9aef28529fb6->leave($__internal_bf7d557af8f7e08f466ab5fa60a0c1ac60fd151d49915199252c9aef28529fb6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb7d42b6cf988be92dd97396685b4aa30f9a874d40c0c09169b6b6e1d3add029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7d42b6cf988be92dd97396685b4aa30f9a874d40c0c09169b6b6e1d3add029->enter($__internal_bb7d42b6cf988be92dd97396685b4aa30f9a874d40c0c09169b6b6e1d3add029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_bb7d42b6cf988be92dd97396685b4aa30f9a874d40c0c09169b6b6e1d3add029->leave($__internal_bb7d42b6cf988be92dd97396685b4aa30f9a874d40c0c09169b6b6e1d3add029_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2300c45e9fee77e2e334775bf6589cffcbbf441b8257140f27c9c8e70e464ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2300c45e9fee77e2e334775bf6589cffcbbf441b8257140f27c9c8e70e464ba2->enter($__internal_2300c45e9fee77e2e334775bf6589cffcbbf441b8257140f27c9c8e70e464ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_2300c45e9fee77e2e334775bf6589cffcbbf441b8257140f27c9c8e70e464ba2->leave($__internal_2300c45e9fee77e2e334775bf6589cffcbbf441b8257140f27c9c8e70e464ba2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_237c856cf6320d5db92ca171324475ccb5da3726c565ae609bd60bf0f8b167b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237c856cf6320d5db92ca171324475ccb5da3726c565ae609bd60bf0f8b167b9->enter($__internal_237c856cf6320d5db92ca171324475ccb5da3726c565ae609bd60bf0f8b167b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_237c856cf6320d5db92ca171324475ccb5da3726c565ae609bd60bf0f8b167b9->leave($__internal_237c856cf6320d5db92ca171324475ccb5da3726c565ae609bd60bf0f8b167b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4e1aab0ee307cba6875473a32af9b7a88c0d720d966ca25552a91088d38a71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e1aab0ee307cba6875473a32af9b7a88c0d720d966ca25552a91088d38a71d->enter($__internal_a4e1aab0ee307cba6875473a32af9b7a88c0d720d966ca25552a91088d38a71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a4e1aab0ee307cba6875473a32af9b7a88c0d720d966ca25552a91088d38a71d->leave($__internal_a4e1aab0ee307cba6875473a32af9b7a88c0d720d966ca25552a91088d38a71d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/water/web/www/sonata_admin/app/Resources/views/base.html.twig");
    }
}
