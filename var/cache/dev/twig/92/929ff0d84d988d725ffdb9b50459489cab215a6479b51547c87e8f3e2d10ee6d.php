<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e03b331f26138a26b772ae3ca3aea9bff1f2637d9a33d0838d2dd4ecdf1b60a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5ab7f443342e354d61efbc8139450b5b4f73f66ed151a934b837d97caea3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5ab7f443342e354d61efbc8139450b5b4f73f66ed151a934b837d97caea3e8->enter($__internal_8c5ab7f443342e354d61efbc8139450b5b4f73f66ed151a934b837d97caea3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5ab7f443342e354d61efbc8139450b5b4f73f66ed151a934b837d97caea3e8->leave($__internal_8c5ab7f443342e354d61efbc8139450b5b4f73f66ed151a934b837d97caea3e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b417b8ac8abcf9c914b0142e51390303725946b05ca32aadf4c3f622677cec35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b417b8ac8abcf9c914b0142e51390303725946b05ca32aadf4c3f622677cec35->enter($__internal_b417b8ac8abcf9c914b0142e51390303725946b05ca32aadf4c3f622677cec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_b417b8ac8abcf9c914b0142e51390303725946b05ca32aadf4c3f622677cec35->leave($__internal_b417b8ac8abcf9c914b0142e51390303725946b05ca32aadf4c3f622677cec35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78bc596991e045566e8d4fc293d36e32260560f2efcb7efd797da048dcd19370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bc596991e045566e8d4fc293d36e32260560f2efcb7efd797da048dcd19370->enter($__internal_78bc596991e045566e8d4fc293d36e32260560f2efcb7efd797da048dcd19370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78bc596991e045566e8d4fc293d36e32260560f2efcb7efd797da048dcd19370->leave($__internal_78bc596991e045566e8d4fc293d36e32260560f2efcb7efd797da048dcd19370_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dd990cbce7ca063532e8509b69d51034f06349df9da93819fd585bea729c7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd990cbce7ca063532e8509b69d51034f06349df9da93819fd585bea729c7df->enter($__internal_5dd990cbce7ca063532e8509b69d51034f06349df9da93819fd585bea729c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dd990cbce7ca063532e8509b69d51034f06349df9da93819fd585bea729c7df->leave($__internal_5dd990cbce7ca063532e8509b69d51034f06349df9da93819fd585bea729c7df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
