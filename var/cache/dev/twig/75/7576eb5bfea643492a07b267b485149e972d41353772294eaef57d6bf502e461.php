<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_08edeb78b4d9a18851c50542c776f1871147cc18a4613c79dbca77bea5b6e55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_ba717ce3ffac1a14780aaab4330228c54651f5c61db97070994ee7b069bd1946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba717ce3ffac1a14780aaab4330228c54651f5c61db97070994ee7b069bd1946->enter($__internal_ba717ce3ffac1a14780aaab4330228c54651f5c61db97070994ee7b069bd1946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba717ce3ffac1a14780aaab4330228c54651f5c61db97070994ee7b069bd1946->leave($__internal_ba717ce3ffac1a14780aaab4330228c54651f5c61db97070994ee7b069bd1946_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_08433935d7e9a2e69e29846c7305f3817cde7ea9360b12f323af0366d93d107b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08433935d7e9a2e69e29846c7305f3817cde7ea9360b12f323af0366d93d107b->enter($__internal_08433935d7e9a2e69e29846c7305f3817cde7ea9360b12f323af0366d93d107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_08433935d7e9a2e69e29846c7305f3817cde7ea9360b12f323af0366d93d107b->leave($__internal_08433935d7e9a2e69e29846c7305f3817cde7ea9360b12f323af0366d93d107b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
