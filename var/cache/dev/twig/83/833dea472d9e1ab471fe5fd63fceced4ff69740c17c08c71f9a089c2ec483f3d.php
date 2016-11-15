<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_235800cab7964513d06b5c3b5d489e0bd792bb22a099bd0e041b442f1aaa712c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a00896e93e236d9a0d86d5a9d49a812dd186a46df186fbd28ed246f486a61c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a00896e93e236d9a0d86d5a9d49a812dd186a46df186fbd28ed246f486a61c9->enter($__internal_5a00896e93e236d9a0d86d5a9d49a812dd186a46df186fbd28ed246f486a61c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_5a00896e93e236d9a0d86d5a9d49a812dd186a46df186fbd28ed246f486a61c9->leave($__internal_5a00896e93e236d9a0d86d5a9d49a812dd186a46df186fbd28ed246f486a61c9_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/water/web/www/sonata_admin/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
