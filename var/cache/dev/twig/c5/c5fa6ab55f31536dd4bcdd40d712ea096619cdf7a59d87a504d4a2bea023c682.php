<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_93817e926f9608a2b83df708dec225f8f0db7acaadb007731d6f6f8ee1c82c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_21dea69bc06e9a1a830214da82b110bd0722d3128411e7e937e61d899e73379e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dea69bc06e9a1a830214da82b110bd0722d3128411e7e937e61d899e73379e->enter($__internal_21dea69bc06e9a1a830214da82b110bd0722d3128411e7e937e61d899e73379e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dea69bc06e9a1a830214da82b110bd0722d3128411e7e937e61d899e73379e->leave($__internal_21dea69bc06e9a1a830214da82b110bd0722d3128411e7e937e61d899e73379e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0d475f0947090d531e46afdd1f7e1e7b64a7490aeee84e30384c3122511a6d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d475f0947090d531e46afdd1f7e1e7b64a7490aeee84e30384c3122511a6d79->enter($__internal_0d475f0947090d531e46afdd1f7e1e7b64a7490aeee84e30384c3122511a6d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_time.html.twig"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_0d475f0947090d531e46afdd1f7e1e7b64a7490aeee84e30384c3122511a6d79->leave($__internal_0d475f0947090d531e46afdd1f7e1e7b64a7490aeee84e30384c3122511a6d79_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
