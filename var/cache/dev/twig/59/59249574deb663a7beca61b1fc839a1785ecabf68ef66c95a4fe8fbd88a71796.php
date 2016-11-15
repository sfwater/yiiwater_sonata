<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_7086def36968572fa0fa27fcb0bc87f569dcf6b2701977968ccfab2b8684c9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cbefb650e5039fc8ae2c22188b09d066dbc261f946be1d67619a958ab0bbef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbefb650e5039fc8ae2c22188b09d066dbc261f946be1d67619a958ab0bbef2->enter($__internal_3cbefb650e5039fc8ae2c22188b09d066dbc261f946be1d67619a958ab0bbef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbefb650e5039fc8ae2c22188b09d066dbc261f946be1d67619a958ab0bbef2->leave($__internal_3cbefb650e5039fc8ae2c22188b09d066dbc261f946be1d67619a958ab0bbef2_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_8d1ddec0b1b90453b8ecd573f8f2ca1c6e577b6099d926c425eaa6f509b5a296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1ddec0b1b90453b8ecd573f8f2ca1c6e577b6099d926c425eaa6f509b5a296->enter($__internal_8d1ddec0b1b90453b8ecd573f8f2ca1c6e577b6099d926c425eaa6f509b5a296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_email.html.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_8d1ddec0b1b90453b8ecd573f8f2ca1c6e577b6099d926c425eaa6f509b5a296->leave($__internal_8d1ddec0b1b90453b8ecd573f8f2ca1c6e577b6099d926c425eaa6f509b5a296_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
