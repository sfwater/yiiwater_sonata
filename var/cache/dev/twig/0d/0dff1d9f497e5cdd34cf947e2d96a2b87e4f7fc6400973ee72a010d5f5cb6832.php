<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_39f3a7dfa0b4bb382f489efd383c3e48f29d83ed6c188289ed9e869abdb4a457 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_618a089b632b471efcd6ee5f91c8238716857377cd68a740831ac7aa160644d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618a089b632b471efcd6ee5f91c8238716857377cd68a740831ac7aa160644d4->enter($__internal_618a089b632b471efcd6ee5f91c8238716857377cd68a740831ac7aa160644d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618a089b632b471efcd6ee5f91c8238716857377cd68a740831ac7aa160644d4->leave($__internal_618a089b632b471efcd6ee5f91c8238716857377cd68a740831ac7aa160644d4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ebb2762078cc4e9cbe79b6640c1e2e5ab92361ab932abfc7a58c1b6b96ba96d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb2762078cc4e9cbe79b6640c1e2e5ab92361ab932abfc7a58c1b6b96ba96d7->enter($__internal_ebb2762078cc4e9cbe79b6640c1e2e5ab92361ab932abfc7a58c1b6b96ba96d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_ebb2762078cc4e9cbe79b6640c1e2e5ab92361ab932abfc7a58c1b6b96ba96d7->leave($__internal_ebb2762078cc4e9cbe79b6640c1e2e5ab92361ab932abfc7a58c1b6b96ba96d7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
