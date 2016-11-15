<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_739f54b111a816024e72d47629f176443e8435c7e6d4182500fd680f7fa5ee57 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be92eb4125587cad7af053be87058adc0122790f3d4775f7beb7b947e6292e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be92eb4125587cad7af053be87058adc0122790f3d4775f7beb7b947e6292e5->enter($__internal_7be92eb4125587cad7af053be87058adc0122790f3d4775f7beb7b947e6292e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be92eb4125587cad7af053be87058adc0122790f3d4775f7beb7b947e6292e5->leave($__internal_7be92eb4125587cad7af053be87058adc0122790f3d4775f7beb7b947e6292e5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b58cc9bf21591309e9e99ee119c9e3e21c17cf9eb42af82dd70b01545f900ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58cc9bf21591309e9e99ee119c9e3e21c17cf9eb42af82dd70b01545f900ae1->enter($__internal_b58cc9bf21591309e9e99ee119c9e3e21c17cf9eb42af82dd70b01545f900ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_email.html.twig"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_b58cc9bf21591309e9e99ee119c9e3e21c17cf9eb42af82dd70b01545f900ae1->leave($__internal_b58cc9bf21591309e9e99ee119c9e3e21c17cf9eb42af82dd70b01545f900ae1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
