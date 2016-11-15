<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_a293ad438cf54abe590192868333c7d154f4e98c40c871058834ffc0dee40e4b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0caff33321958c4fe5b0c585dabc7b01079d9ec08e8276bf8f14686ab51648e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caff33321958c4fe5b0c585dabc7b01079d9ec08e8276bf8f14686ab51648e0->enter($__internal_0caff33321958c4fe5b0c585dabc7b01079d9ec08e8276bf8f14686ab51648e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caff33321958c4fe5b0c585dabc7b01079d9ec08e8276bf8f14686ab51648e0->leave($__internal_0caff33321958c4fe5b0c585dabc7b01079d9ec08e8276bf8f14686ab51648e0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_304fc02f6b53e7202b80444edbd7a4d7e3e9bf3bd7f716b5e97c4ae4d0a70572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304fc02f6b53e7202b80444edbd7a4d7e3e9bf3bd7f716b5e97c4ae4d0a70572->enter($__internal_304fc02f6b53e7202b80444edbd7a4d7e3e9bf3bd7f716b5e97c4ae4d0a70572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_304fc02f6b53e7202b80444edbd7a4d7e3e9bf3bd7f716b5e97c4ae4d0a70572->leave($__internal_304fc02f6b53e7202b80444edbd7a4d7e3e9bf3bd7f716b5e97c4ae4d0a70572_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
