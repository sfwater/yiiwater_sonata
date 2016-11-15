<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_6a60d772468cbcf45889286297b26eb96add1009ba62be74df5a3c56b0035e5e extends Twig_Template
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
        $__internal_213185a66a7a9369e739bbd21a8559e2de7a0fa5dccd73b840a48f498edff7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213185a66a7a9369e739bbd21a8559e2de7a0fa5dccd73b840a48f498edff7ce->enter($__internal_213185a66a7a9369e739bbd21a8559e2de7a0fa5dccd73b840a48f498edff7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213185a66a7a9369e739bbd21a8559e2de7a0fa5dccd73b840a48f498edff7ce->leave($__internal_213185a66a7a9369e739bbd21a8559e2de7a0fa5dccd73b840a48f498edff7ce_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_576e98b7b5adb572d5b11bd6c5c7303324c7d7740444efe08cb4c45e869a734b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576e98b7b5adb572d5b11bd6c5c7303324c7d7740444efe08cb4c45e869a734b->enter($__internal_576e98b7b5adb572d5b11bd6c5c7303324c7d7740444efe08cb4c45e869a734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

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
        
        $__internal_576e98b7b5adb572d5b11bd6c5c7303324c7d7740444efe08cb4c45e869a734b->leave($__internal_576e98b7b5adb572d5b11bd6c5c7303324c7d7740444efe08cb4c45e869a734b_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_a05531468ef868a265ede4aefd6513b3f75b1cdc5a03a18ae97183f15d26f7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05531468ef868a265ede4aefd6513b3f75b1cdc5a03a18ae97183f15d26f7bd->enter($__internal_a05531468ef868a265ede4aefd6513b3f75b1cdc5a03a18ae97183f15d26f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a05531468ef868a265ede4aefd6513b3f75b1cdc5a03a18ae97183f15d26f7bd->leave($__internal_a05531468ef868a265ede4aefd6513b3f75b1cdc5a03a18ae97183f15d26f7bd_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e09a2598026a9c580643084f6f4f3d85c2287e05fc82d4455b19e1f6c7237778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09a2598026a9c580643084f6f4f3d85c2287e05fc82d4455b19e1f6c7237778->enter($__internal_e09a2598026a9c580643084f6f4f3d85c2287e05fc82d4455b19e1f6c7237778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_e09a2598026a9c580643084f6f4f3d85c2287e05fc82d4455b19e1f6c7237778->leave($__internal_e09a2598026a9c580643084f6f4f3d85c2287e05fc82d4455b19e1f6c7237778_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7f6d5f16888745dd20169efdfc005429123a2dbda4010714e607d27a2a535c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6d5f16888745dd20169efdfc005429123a2dbda4010714e607d27a2a535c27->enter($__internal_7f6d5f16888745dd20169efdfc005429123a2dbda4010714e607d27a2a535c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_7f6d5f16888745dd20169efdfc005429123a2dbda4010714e607d27a2a535c27->leave($__internal_7f6d5f16888745dd20169efdfc005429123a2dbda4010714e607d27a2a535c27_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_dd8c558074eade9c6401005b324f08f4fc14b993e310a5ca4da0ad26ad58ad96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8c558074eade9c6401005b324f08f4fc14b993e310a5ca4da0ad26ad58ad96->enter($__internal_dd8c558074eade9c6401005b324f08f4fc14b993e310a5ca4da0ad26ad58ad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_dd8c558074eade9c6401005b324f08f4fc14b993e310a5ca4da0ad26ad58ad96->leave($__internal_dd8c558074eade9c6401005b324f08f4fc14b993e310a5ca4da0ad26ad58ad96_prof);

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
