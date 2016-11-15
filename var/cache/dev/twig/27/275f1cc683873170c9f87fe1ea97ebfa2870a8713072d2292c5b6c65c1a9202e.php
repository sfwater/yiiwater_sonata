<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_40e78c9ff7ee39fc0958c765addb1e7c22cbda7b7500896c60c245f8bcbf2671 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500fdde42da7c458cd203d040cb4f25b96b875e1cfed33b57c3cbae5e40b5bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500fdde42da7c458cd203d040cb4f25b96b875e1cfed33b57c3cbae5e40b5bc9->enter($__internal_500fdde42da7c458cd203d040cb4f25b96b875e1cfed33b57c3cbae5e40b5bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500fdde42da7c458cd203d040cb4f25b96b875e1cfed33b57c3cbae5e40b5bc9->leave($__internal_500fdde42da7c458cd203d040cb4f25b96b875e1cfed33b57c3cbae5e40b5bc9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_08d1710943e6ef5b405ebf7965879362195b600389bcb77ea4a1c7a7905b7e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d1710943e6ef5b405ebf7965879362195b600389bcb77ea4a1c7a7905b7e50->enter($__internal_08d1710943e6ef5b405ebf7965879362195b600389bcb77ea4a1c7a7905b7e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_core_text.html.twig"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_08d1710943e6ef5b405ebf7965879362195b600389bcb77ea4a1c7a7905b7e50->leave($__internal_08d1710943e6ef5b405ebf7965879362195b600389bcb77ea4a1c7a7905b7e50_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
