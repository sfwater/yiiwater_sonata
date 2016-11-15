<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_57709f61e6d9036f8e222fce7a136bce841f30cd8e54ece4fa59cd1a52838032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d87c88c8a4acc78d55c7599f86d7a28995ac19e2e44c37a3fa656417d25d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d87c88c8a4acc78d55c7599f86d7a28995ac19e2e44c37a3fa656417d25d05->enter($__internal_e7d87c88c8a4acc78d55c7599f86d7a28995ac19e2e44c37a3fa656417d25d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d87c88c8a4acc78d55c7599f86d7a28995ac19e2e44c37a3fa656417d25d05->leave($__internal_e7d87c88c8a4acc78d55c7599f86d7a28995ac19e2e44c37a3fa656417d25d05_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_215a207e2488ebf6835ab4eff768f8663b482f95446cef0dcff7c685d7f0906f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215a207e2488ebf6835ab4eff768f8663b482f95446cef0dcff7c685d7f0906f->enter($__internal_215a207e2488ebf6835ab4eff768f8663b482f95446cef0dcff7c685d7f0906f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_215a207e2488ebf6835ab4eff768f8663b482f95446cef0dcff7c685d7f0906f->leave($__internal_215a207e2488ebf6835ab4eff768f8663b482f95446cef0dcff7c685d7f0906f_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_a929186224f479b6a34641b6688fd6ae5ff2ec57b05d8bb03632d21f2a12e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a929186224f479b6a34641b6688fd6ae5ff2ec57b05d8bb03632d21f2a12e744->enter($__internal_a929186224f479b6a34641b6688fd6ae5ff2ec57b05d8bb03632d21f2a12e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a929186224f479b6a34641b6688fd6ae5ff2ec57b05d8bb03632d21f2a12e744->leave($__internal_a929186224f479b6a34641b6688fd6ae5ff2ec57b05d8bb03632d21f2a12e744_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_959062b56c06018c72c4144c75cd9f897dedc785f0d5de786641d4d6a209f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959062b56c06018c72c4144c75cd9f897dedc785f0d5de786641d4d6a209f3cc->enter($__internal_959062b56c06018c72c4144c75cd9f897dedc785f0d5de786641d4d6a209f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_959062b56c06018c72c4144c75cd9f897dedc785f0d5de786641d4d6a209f3cc->leave($__internal_959062b56c06018c72c4144c75cd9f897dedc785f0d5de786641d4d6a209f3cc_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_809d0b0f88b6e0e09b6630db060cf62149620c9d19247b968b9f0053d6d97422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809d0b0f88b6e0e09b6630db060cf62149620c9d19247b968b9f0053d6d97422->enter($__internal_809d0b0f88b6e0e09b6630db060cf62149620c9d19247b968b9f0053d6d97422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_809d0b0f88b6e0e09b6630db060cf62149620c9d19247b968b9f0053d6d97422->leave($__internal_809d0b0f88b6e0e09b6630db060cf62149620c9d19247b968b9f0053d6d97422_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_0e9ba74c7155a5f641ebecb597510f76632d68fbc3a860689406d4657fd91108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9ba74c7155a5f641ebecb597510f76632d68fbc3a860689406d4657fd91108->enter($__internal_0e9ba74c7155a5f641ebecb597510f76632d68fbc3a860689406d4657fd91108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_0e9ba74c7155a5f641ebecb597510f76632d68fbc3a860689406d4657fd91108->leave($__internal_0e9ba74c7155a5f641ebecb597510f76632d68fbc3a860689406d4657fd91108_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
