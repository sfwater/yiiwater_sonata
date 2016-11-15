<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_e1ebad478b141c9c9fcbafe4e55e321605841b40fde74ac13e22554bb2fd3a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_5aab40dc78cd66dc2a72013429323c1ff529c7a322ff3f3a0313aa3e426b1d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aab40dc78cd66dc2a72013429323c1ff529c7a322ff3f3a0313aa3e426b1d17->enter($__internal_5aab40dc78cd66dc2a72013429323c1ff529c7a322ff3f3a0313aa3e426b1d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aab40dc78cd66dc2a72013429323c1ff529c7a322ff3f3a0313aa3e426b1d17->leave($__internal_5aab40dc78cd66dc2a72013429323c1ff529c7a322ff3f3a0313aa3e426b1d17_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_be29f6fe7cfabf0a83993ddbbf26dea2cf4e92ca0ce8fbd0da920c980de847bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be29f6fe7cfabf0a83993ddbbf26dea2cf4e92ca0ce8fbd0da920c980de847bf->enter($__internal_be29f6fe7cfabf0a83993ddbbf26dea2cf4e92ca0ce8fbd0da920c980de847bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_be29f6fe7cfabf0a83993ddbbf26dea2cf4e92ca0ce8fbd0da920c980de847bf->leave($__internal_be29f6fe7cfabf0a83993ddbbf26dea2cf4e92ca0ce8fbd0da920c980de847bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
