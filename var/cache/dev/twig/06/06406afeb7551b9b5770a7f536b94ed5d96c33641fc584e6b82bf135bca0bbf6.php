<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_774126ef9912f2139e4d55a30f7170d12a64efbf315002e64bcf29358e2bab57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d8ed6d154c2234e9a705ff9cc63cab0502dfbae26c2c8d4f3d7b3b714b34e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8ed6d154c2234e9a705ff9cc63cab0502dfbae26c2c8d4f3d7b3b714b34e97->enter($__internal_1d8ed6d154c2234e9a705ff9cc63cab0502dfbae26c2c8d4f3d7b3b714b34e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8ed6d154c2234e9a705ff9cc63cab0502dfbae26c2c8d4f3d7b3b714b34e97->leave($__internal_1d8ed6d154c2234e9a705ff9cc63cab0502dfbae26c2c8d4f3d7b3b714b34e97_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_64d86ade172721c72431ccb2721d0a4e08d00ee31bac4c9d8d3944483efbbc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d86ade172721c72431ccb2721d0a4e08d00ee31bac4c9d8d3944483efbbc9e->enter($__internal_64d86ade172721c72431ccb2721d0a4e08d00ee31bac4c9d8d3944483efbbc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 18
        echo "    ";
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role"))), "method"))) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 20
                echo "            <li>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 28
                echo "            <li>
                ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "    </ul>
";
        
        $__internal_64d86ade172721c72431ccb2721d0a4e08d00ee31bac4c9d8d3944483efbbc9e->leave($__internal_64d86ade172721c72431ccb2721d0a4e08d00ee31bac4c9d8d3944483efbbc9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  93 => 32,  84 => 29,  81 => 28,  76 => 27,  73 => 26,  63 => 22,  59 => 21,  56 => 20,  51 => 19,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% set route_role = route_name | upper %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.isGranted(route_role)%}
        {% for element in value %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% endfor %}
    {% else %}
        {% for element in value %}
            <li>
                {{ element|render_relation_element(field_description) }}
            </li>
        {% endfor %}
    {% endif %}
    </ul>
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
