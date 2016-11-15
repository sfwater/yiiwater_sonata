<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_88e3d659da9ec9a787f77ef674b15ca418ee9bd7af174bafc7a0289b06c53cd4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3228d558d21695574b11c36e14edeea39c407b52ba1755d0d53e09ff0b6f81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3228d558d21695574b11c36e14edeea39c407b52ba1755d0d53e09ff0b6f81e->enter($__internal_e3228d558d21695574b11c36e14edeea39c407b52ba1755d0d53e09ff0b6f81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3228d558d21695574b11c36e14edeea39c407b52ba1755d0d53e09ff0b6f81e->leave($__internal_e3228d558d21695574b11c36e14edeea39c407b52ba1755d0d53e09ff0b6f81e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a3c1f87ef996fcf64e54fd0fe0d8d6b50e4359449da3e374cc09d9feb5b0830e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c1f87ef996fcf64e54fd0fe0d8d6b50e4359449da3e374cc09d9feb5b0830e->enter($__internal_a3c1f87ef996fcf64e54fd0fe0d8d6b50e4359449da3e374cc09d9feb5b0830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_core_action.html.twig"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_a3c1f87ef996fcf64e54fd0fe0d8d6b50e4359449da3e374cc09d9feb5b0830e->leave($__internal_a3c1f87ef996fcf64e54fd0fe0d8d6b50e4359449da3e374cc09d9feb5b0830e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
