<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_9aa2fd19a57dfd2b601d966726a5711b1c1707bfa40b511d211877095ccd0922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f998b4d2505d45540974ddcaffcc8837b8e0f94e77cfce508c01cc47d7e80067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f998b4d2505d45540974ddcaffcc8837b8e0f94e77cfce508c01cc47d7e80067->enter($__internal_f998b4d2505d45540974ddcaffcc8837b8e0f94e77cfce508c01cc47d7e80067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_f998b4d2505d45540974ddcaffcc8837b8e0f94e77cfce508c01cc47d7e80067->leave($__internal_f998b4d2505d45540974ddcaffcc8837b8e0f94e77cfce508c01cc47d7e80067_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_c888a7bdc4042630d8a90826998488de6b3559672d97eef793b5e730429781ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c888a7bdc4042630d8a90826998488de6b3559672d97eef793b5e730429781ab->enter($__internal_c888a7bdc4042630d8a90826998488de6b3559672d97eef793b5e730429781ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_base.html.twig"));

        echo "EMPTY CONTENT";
        
        $__internal_c888a7bdc4042630d8a90826998488de6b3559672d97eef793b5e730429781ab->leave($__internal_c888a7bdc4042630d8a90826998488de6b3559672d97eef793b5e730429781ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
