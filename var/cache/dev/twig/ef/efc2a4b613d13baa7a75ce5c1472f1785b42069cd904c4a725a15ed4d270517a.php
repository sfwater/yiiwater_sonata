<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_3d0347fbf95ee17d3c858c24d059cb7b4989d1d265875b824acd2a52787db702 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f01df0bf0e3d8a3e965f46b86bb48e55a281e46de6dd6c80ca0eec73b0af752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f01df0bf0e3d8a3e965f46b86bb48e55a281e46de6dd6c80ca0eec73b0af752->enter($__internal_8f01df0bf0e3d8a3e965f46b86bb48e55a281e46de6dd6c80ca0eec73b0af752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f01df0bf0e3d8a3e965f46b86bb48e55a281e46de6dd6c80ca0eec73b0af752->leave($__internal_8f01df0bf0e3d8a3e965f46b86bb48e55a281e46de6dd6c80ca0eec73b0af752_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3afd0eef81deba0d64b3a9ed2d8015da4889ca2987347a3972e381addd08265b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afd0eef81deba0d64b3a9ed2d8015da4889ca2987347a3972e381addd08265b->enter($__internal_3afd0eef81deba0d64b3a9ed2d8015da4889ca2987347a3972e381addd08265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_3afd0eef81deba0d64b3a9ed2d8015da4889ca2987347a3972e381addd08265b->leave($__internal_3afd0eef81deba0d64b3a9ed2d8015da4889ca2987347a3972e381addd08265b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
