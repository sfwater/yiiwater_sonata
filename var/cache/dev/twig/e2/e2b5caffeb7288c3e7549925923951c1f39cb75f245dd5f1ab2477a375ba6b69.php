<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_b594de0347f514eb725fdc16f4946108be720ba4abe29b82d47c0f816aa6621b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7aa1d989df1ee9df011e6617e4267bf03a6293bec34460b4ba0dc631cd37ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aa1d989df1ee9df011e6617e4267bf03a6293bec34460b4ba0dc631cd37ad0->enter($__internal_a7aa1d989df1ee9df011e6617e4267bf03a6293bec34460b4ba0dc631cd37ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7aa1d989df1ee9df011e6617e4267bf03a6293bec34460b4ba0dc631cd37ad0->leave($__internal_a7aa1d989df1ee9df011e6617e4267bf03a6293bec34460b4ba0dc631cd37ad0_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0f29ef76508071472e895c4462d239b697a87c6ffcdb972102974bca1905d88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f29ef76508071472e895c4462d239b697a87c6ffcdb972102974bca1905d88b->enter($__internal_0f29ef76508071472e895c4462d239b697a87c6ffcdb972102974bca1905d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:preview.html.twig"));

        
        $__internal_0f29ef76508071472e895c4462d239b697a87c6ffcdb972102974bca1905d88b->leave($__internal_0f29ef76508071472e895c4462d239b697a87c6ffcdb972102974bca1905d88b_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_6a1b882fe5c16aa477255d8719171f65ae7275405c1cf2456130e9fdf06f243a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b882fe5c16aa477255d8719171f65ae7275405c1cf2456130e9fdf06f243a->enter($__internal_6a1b882fe5c16aa477255d8719171f65ae7275405c1cf2456130e9fdf06f243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:preview.html.twig"));

        
        $__internal_6a1b882fe5c16aa477255d8719171f65ae7275405c1cf2456130e9fdf06f243a->leave($__internal_6a1b882fe5c16aa477255d8719171f65ae7275405c1cf2456130e9fdf06f243a_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_ced5a2eef0450f54026f7710cca9f88a178dc7aef3e8633261f8f6dec67dce44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced5a2eef0450f54026f7710cca9f88a178dc7aef3e8633261f8f6dec67dce44->enter($__internal_ced5a2eef0450f54026f7710cca9f88a178dc7aef3e8633261f8f6dec67dce44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:preview.html.twig"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_ced5a2eef0450f54026f7710cca9f88a178dc7aef3e8633261f8f6dec67dce44->leave($__internal_ced5a2eef0450f54026f7710cca9f88a178dc7aef3e8633261f8f6dec67dce44_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_43da51aa78ea6993ea03e76e9647d68ffd45ba1a4e402f66e1ffcc8ed0a468d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43da51aa78ea6993ea03e76e9647d68ffd45ba1a4e402f66e1ffcc8ed0a468d4->enter($__internal_43da51aa78ea6993ea03e76e9647d68ffd45ba1a4e402f66e1ffcc8ed0a468d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:preview.html.twig"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_43da51aa78ea6993ea03e76e9647d68ffd45ba1a4e402f66e1ffcc8ed0a468d4->leave($__internal_43da51aa78ea6993ea03e76e9647d68ffd45ba1a4e402f66e1ffcc8ed0a468d4_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_a5329e57a767079c847d2cd39890f3d9e835110c2d87616e40e2ba3cd4c16194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5329e57a767079c847d2cd39890f3d9e835110c2d87616e40e2ba3cd4c16194->enter($__internal_a5329e57a767079c847d2cd39890f3d9e835110c2d87616e40e2ba3cd4c16194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:preview.html.twig"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_a5329e57a767079c847d2cd39890f3d9e835110c2d87616e40e2ba3cd4c16194->leave($__internal_a5329e57a767079c847d2cd39890f3d9e835110c2d87616e40e2ba3cd4c16194_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
