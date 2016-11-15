<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_c2fbabf8d2f3db9df9c4f183962a09bf197c045e53126cab69bb1946efae3d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05000b571802e4435b79e7c16900640b9b588f3b8ed2f8f0f20fa4d22145eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05000b571802e4435b79e7c16900640b9b588f3b8ed2f8f0f20fa4d22145eea->enter($__internal_c05000b571802e4435b79e7c16900640b9b588f3b8ed2f8f0f20fa4d22145eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05000b571802e4435b79e7c16900640b9b588f3b8ed2f8f0f20fa4d22145eea->leave($__internal_c05000b571802e4435b79e7c16900640b9b588f3b8ed2f8f0f20fa4d22145eea_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0c97bc803723168afae1e2ac33e040b5a075d0f84c5c220e41d92367ee209c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c97bc803723168afae1e2ac33e040b5a075d0f84c5c220e41d92367ee209c4e->enter($__internal_0c97bc803723168afae1e2ac33e040b5a075d0f84c5c220e41d92367ee209c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_0c97bc803723168afae1e2ac33e040b5a075d0f84c5c220e41d92367ee209c4e->leave($__internal_0c97bc803723168afae1e2ac33e040b5a075d0f84c5c220e41d92367ee209c4e_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_b046e8f303e3003dff884ac220cef52ab8b0734e27e50fdf222fe9d33b52b147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b046e8f303e3003dff884ac220cef52ab8b0734e27e50fdf222fe9d33b52b147->enter($__internal_b046e8f303e3003dff884ac220cef52ab8b0734e27e50fdf222fe9d33b52b147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_b046e8f303e3003dff884ac220cef52ab8b0734e27e50fdf222fe9d33b52b147->leave($__internal_b046e8f303e3003dff884ac220cef52ab8b0734e27e50fdf222fe9d33b52b147_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_321104957fbaef5971270f9b6c25d21f0b970d6032171e5a2f24e273936ce02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321104957fbaef5971270f9b6c25d21f0b970d6032171e5a2f24e273936ce02e->enter($__internal_321104957fbaef5971270f9b6c25d21f0b970d6032171e5a2f24e273936ce02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_321104957fbaef5971270f9b6c25d21f0b970d6032171e5a2f24e273936ce02e->leave($__internal_321104957fbaef5971270f9b6c25d21f0b970d6032171e5a2f24e273936ce02e_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_33c9c09d0fa454f7cc721b5a1694a943528b1a9d0b4b2d384ad4737c18ada1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c9c09d0fa454f7cc721b5a1694a943528b1a9d0b4b2d384ad4737c18ada1f9->enter($__internal_33c9c09d0fa454f7cc721b5a1694a943528b1a9d0b4b2d384ad4737c18ada1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_33c9c09d0fa454f7cc721b5a1694a943528b1a9d0b4b2d384ad4737c18ada1f9->leave($__internal_33c9c09d0fa454f7cc721b5a1694a943528b1a9d0b4b2d384ad4737c18ada1f9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
