<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_511ff64f59b39522c88ffa3a661cdf6f5f48d025f74e87dbab5d8b8488297575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dcb9400c76703412c962a51453a3f32f2d48c4facb5aee90453ec3ca2dfb120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcb9400c76703412c962a51453a3f32f2d48c4facb5aee90453ec3ca2dfb120->enter($__internal_2dcb9400c76703412c962a51453a3f32f2d48c4facb5aee90453ec3ca2dfb120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcb9400c76703412c962a51453a3f32f2d48c4facb5aee90453ec3ca2dfb120->leave($__internal_2dcb9400c76703412c962a51453a3f32f2d48c4facb5aee90453ec3ca2dfb120_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e7004f83c150db2156f49c076e9a2807003aa3ecf28960570c9cbc5f97935f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7004f83c150db2156f49c076e9a2807003aa3ecf28960570c9cbc5f97935f23->enter($__internal_e7004f83c150db2156f49c076e9a2807003aa3ecf28960570c9cbc5f97935f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_exception.html.twig"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_e7004f83c150db2156f49c076e9a2807003aa3ecf28960570c9cbc5f97935f23->leave($__internal_e7004f83c150db2156f49c076e9a2807003aa3ecf28960570c9cbc5f97935f23_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
