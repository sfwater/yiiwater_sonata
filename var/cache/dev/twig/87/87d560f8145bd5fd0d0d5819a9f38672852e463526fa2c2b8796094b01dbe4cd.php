<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_2f59f8eba9e1f1ee907a19d2bfb50d43c00ef98abba0e040590ab547b9994a3b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57571e2727c74e5984b8904a99e36df0c9b0e69a67dc2b57b45f9bdb2a479038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57571e2727c74e5984b8904a99e36df0c9b0e69a67dc2b57b45f9bdb2a479038->enter($__internal_57571e2727c74e5984b8904a99e36df0c9b0e69a67dc2b57b45f9bdb2a479038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57571e2727c74e5984b8904a99e36df0c9b0e69a67dc2b57b45f9bdb2a479038->leave($__internal_57571e2727c74e5984b8904a99e36df0c9b0e69a67dc2b57b45f9bdb2a479038_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_82de0ea811ab652e9e290c878806328c932ccc3bf08ce33c574bc0671b368bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de0ea811ab652e9e290c878806328c932ccc3bf08ce33c574bc0671b368bbe->enter($__internal_82de0ea811ab652e9e290c878806328c932ccc3bf08ce33c574bc0671b368bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_82de0ea811ab652e9e290c878806328c932ccc3bf08ce33c574bc0671b368bbe->leave($__internal_82de0ea811ab652e9e290c878806328c932ccc3bf08ce33c574bc0671b368bbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
