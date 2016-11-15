<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_07fa202ea490854b62359041fc87098b1b9c95c1825f19732787ef5d6c8d7349 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92dbffb6d90482f8209774c49c6ec8d2427dab696acedf510419d2e9fb26db80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dbffb6d90482f8209774c49c6ec8d2427dab696acedf510419d2e9fb26db80->enter($__internal_92dbffb6d90482f8209774c49c6ec8d2427dab696acedf510419d2e9fb26db80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92dbffb6d90482f8209774c49c6ec8d2427dab696acedf510419d2e9fb26db80->leave($__internal_92dbffb6d90482f8209774c49c6ec8d2427dab696acedf510419d2e9fb26db80_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ec25fdc1cfc4518ee659c111a368007c4fdc1508ba353cf30380367d5ac5f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec25fdc1cfc4518ee659c111a368007c4fdc1508ba353cf30380367d5ac5f3cc->enter($__internal_ec25fdc1cfc4518ee659c111a368007c4fdc1508ba353cf30380367d5ac5f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_ec25fdc1cfc4518ee659c111a368007c4fdc1508ba353cf30380367d5ac5f3cc->leave($__internal_ec25fdc1cfc4518ee659c111a368007c4fdc1508ba353cf30380367d5ac5f3cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
