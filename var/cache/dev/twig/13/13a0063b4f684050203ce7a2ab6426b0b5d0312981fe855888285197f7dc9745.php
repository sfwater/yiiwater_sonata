<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_40b62a65a769f33d63da898cbe733fa5ce23896a0392e842376e6b7256ed29c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c131559bc3f050eb2b8e0dbb62b59ff69c9ccab81b6198eba4a7cb51e960d84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c131559bc3f050eb2b8e0dbb62b59ff69c9ccab81b6198eba4a7cb51e960d84f->enter($__internal_c131559bc3f050eb2b8e0dbb62b59ff69c9ccab81b6198eba4a7cb51e960d84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c131559bc3f050eb2b8e0dbb62b59ff69c9ccab81b6198eba4a7cb51e960d84f->leave($__internal_c131559bc3f050eb2b8e0dbb62b59ff69c9ccab81b6198eba4a7cb51e960d84f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_04f4669be277cb43020fd939499082b87c5717171ec0e9563263311a193fbd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f4669be277cb43020fd939499082b87c5717171ec0e9563263311a193fbd75->enter($__internal_04f4669be277cb43020fd939499082b87c5717171ec0e9563263311a193fbd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_04f4669be277cb43020fd939499082b87c5717171ec0e9563263311a193fbd75->leave($__internal_04f4669be277cb43020fd939499082b87c5717171ec0e9563263311a193fbd75_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
