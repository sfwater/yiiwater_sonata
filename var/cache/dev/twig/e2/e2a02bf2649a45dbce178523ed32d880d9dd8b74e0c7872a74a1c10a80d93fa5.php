<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_fb6b9eef6a14e4afb944afcc0ab6192e045d88ceeeb1c048635c8213f1667368 extends Twig_Template
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
        $__internal_7d6e329ca927a36880711f3b69f634b293a2d6abf78df3c902c4aa8f27461c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6e329ca927a36880711f3b69f634b293a2d6abf78df3c902c4aa8f27461c10->enter($__internal_7d6e329ca927a36880711f3b69f634b293a2d6abf78df3c902c4aa8f27461c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6e329ca927a36880711f3b69f634b293a2d6abf78df3c902c4aa8f27461c10->leave($__internal_7d6e329ca927a36880711f3b69f634b293a2d6abf78df3c902c4aa8f27461c10_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d452ba2ee17d572cf96b51c75bfd1fd832e76a3444165898c1423eedb42a1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d452ba2ee17d572cf96b51c75bfd1fd832e76a3444165898c1423eedb42a1c0->enter($__internal_5d452ba2ee17d572cf96b51c75bfd1fd832e76a3444165898c1423eedb42a1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_5d452ba2ee17d572cf96b51c75bfd1fd832e76a3444165898c1423eedb42a1c0->leave($__internal_5d452ba2ee17d572cf96b51c75bfd1fd832e76a3444165898c1423eedb42a1c0_prof);

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
