<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_871331c4cd4650ca545abb075158d83a21dcd6ce3de6836ceaa633dabf2ee9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_978c70e7c3a0547a51e3cb50d686ca0f331aa6f2e89b6ac0cc8dabccbe6b2f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978c70e7c3a0547a51e3cb50d686ca0f331aa6f2e89b6ac0cc8dabccbe6b2f7d->enter($__internal_978c70e7c3a0547a51e3cb50d686ca0f331aa6f2e89b6ac0cc8dabccbe6b2f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_978c70e7c3a0547a51e3cb50d686ca0f331aa6f2e89b6ac0cc8dabccbe6b2f7d->leave($__internal_978c70e7c3a0547a51e3cb50d686ca0f331aa6f2e89b6ac0cc8dabccbe6b2f7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a4054187af2f3fb78579e5b761ac7fd704e18985ffc0c50ba5c16c87c9c8b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4054187af2f3fb78579e5b761ac7fd704e18985ffc0c50ba5c16c87c9c8b20->enter($__internal_5a4054187af2f3fb78579e5b761ac7fd704e18985ffc0c50ba5c16c87c9c8b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_5a4054187af2f3fb78579e5b761ac7fd704e18985ffc0c50ba5c16c87c9c8b20->leave($__internal_5a4054187af2f3fb78579e5b761ac7fd704e18985ffc0c50ba5c16c87c9c8b20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80adf105287beeafd9eef3a9dfd20e1696035d5b7666bc8fbf488fb029bf609b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80adf105287beeafd9eef3a9dfd20e1696035d5b7666bc8fbf488fb029bf609b->enter($__internal_80adf105287beeafd9eef3a9dfd20e1696035d5b7666bc8fbf488fb029bf609b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80adf105287beeafd9eef3a9dfd20e1696035d5b7666bc8fbf488fb029bf609b->leave($__internal_80adf105287beeafd9eef3a9dfd20e1696035d5b7666bc8fbf488fb029bf609b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_316c4edf5da0657af5daa3f51520bf19be2a329eca9998a3c2c8b1ee8fe0c4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316c4edf5da0657af5daa3f51520bf19be2a329eca9998a3c2c8b1ee8fe0c4ae->enter($__internal_316c4edf5da0657af5daa3f51520bf19be2a329eca9998a3c2c8b1ee8fe0c4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_316c4edf5da0657af5daa3f51520bf19be2a329eca9998a3c2c8b1ee8fe0c4ae->leave($__internal_316c4edf5da0657af5daa3f51520bf19be2a329eca9998a3c2c8b1ee8fe0c4ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
