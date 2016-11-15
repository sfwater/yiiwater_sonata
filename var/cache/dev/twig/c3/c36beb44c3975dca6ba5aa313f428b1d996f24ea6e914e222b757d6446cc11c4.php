<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_683f7794714fab2b02ebb27a9266664a6d6728ca63f2d68dcacd254df3895e4d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5edf309338d1c533fbcb0ae438eff8bc969b88bebb8c03a747530e28423a40f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edf309338d1c533fbcb0ae438eff8bc969b88bebb8c03a747530e28423a40f0->enter($__internal_5edf309338d1c533fbcb0ae438eff8bc969b88bebb8c03a747530e28423a40f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5edf309338d1c533fbcb0ae438eff8bc969b88bebb8c03a747530e28423a40f0->leave($__internal_5edf309338d1c533fbcb0ae438eff8bc969b88bebb8c03a747530e28423a40f0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cadc0b5271cc1253327def15585ef90ac31032d0b134cc74f898da3ddfa444e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadc0b5271cc1253327def15585ef90ac31032d0b134cc74f898da3ddfa444e3->enter($__internal_cadc0b5271cc1253327def15585ef90ac31032d0b134cc74f898da3ddfa444e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_cadc0b5271cc1253327def15585ef90ac31032d0b134cc74f898da3ddfa444e3->leave($__internal_cadc0b5271cc1253327def15585ef90ac31032d0b134cc74f898da3ddfa444e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
