<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_4830c4a287678e0abba6fe9bcb958be31da2eced6d98385dfc499597c40a0744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa44c06a18104011cdea0276385543277a15ceb3bce81746d0dcec9841f9325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa44c06a18104011cdea0276385543277a15ceb3bce81746d0dcec9841f9325->enter($__internal_9aa44c06a18104011cdea0276385543277a15ceb3bce81746d0dcec9841f9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa44c06a18104011cdea0276385543277a15ceb3bce81746d0dcec9841f9325->leave($__internal_9aa44c06a18104011cdea0276385543277a15ceb3bce81746d0dcec9841f9325_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4c0688d1123f126761b87f6f7f6c2da30b6c85e68c2a5f714d4d16b1d8093093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0688d1123f126761b87f6f7f6c2da30b6c85e68c2a5f714d4d16b1d8093093->enter($__internal_4c0688d1123f126761b87f6f7f6c2da30b6c85e68c2a5f714d4d16b1d8093093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_4c0688d1123f126761b87f6f7f6c2da30b6c85e68c2a5f714d4d16b1d8093093->leave($__internal_4c0688d1123f126761b87f6f7f6c2da30b6c85e68c2a5f714d4d16b1d8093093_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6da28c91775435d888c28a15e461e667ece773e8115f6fbafe5a70895a9a476f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da28c91775435d888c28a15e461e667ece773e8115f6fbafe5a70895a9a476f->enter($__internal_6da28c91775435d888c28a15e461e667ece773e8115f6fbafe5a70895a9a476f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_6da28c91775435d888c28a15e461e667ece773e8115f6fbafe5a70895a9a476f->leave($__internal_6da28c91775435d888c28a15e461e667ece773e8115f6fbafe5a70895a9a476f_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cb9a631511d3bb785d8cf5ca70f6c02ca3a9a084053e54c408f0455eaf7bdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb9a631511d3bb785d8cf5ca70f6c02ca3a9a084053e54c408f0455eaf7bdfb->enter($__internal_8cb9a631511d3bb785d8cf5ca70f6c02ca3a9a084053e54c408f0455eaf7bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_8cb9a631511d3bb785d8cf5ca70f6c02ca3a9a084053e54c408f0455eaf7bdfb->leave($__internal_8cb9a631511d3bb785d8cf5ca70f6c02ca3a9a084053e54c408f0455eaf7bdfb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
