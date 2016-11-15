<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_81485d2f0151d968c0bde56967e69a0904a2126363ebca210866cb6b7e1858b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa5751f547d62edda57cd3695b5fa14f2a2cec67f49ac313bb578c599f6a473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa5751f547d62edda57cd3695b5fa14f2a2cec67f49ac313bb578c599f6a473->enter($__internal_1fa5751f547d62edda57cd3695b5fa14f2a2cec67f49ac313bb578c599f6a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1fa5751f547d62edda57cd3695b5fa14f2a2cec67f49ac313bb578c599f6a473->leave($__internal_1fa5751f547d62edda57cd3695b5fa14f2a2cec67f49ac313bb578c599f6a473_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_180355c4d810becbd7da906e6769d3a30d1b2cf9313a47d45a446d73783e1b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180355c4d810becbd7da906e6769d3a30d1b2cf9313a47d45a446d73783e1b9a->enter($__internal_180355c4d810becbd7da906e6769d3a30d1b2cf9313a47d45a446d73783e1b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_180355c4d810becbd7da906e6769d3a30d1b2cf9313a47d45a446d73783e1b9a->leave($__internal_180355c4d810becbd7da906e6769d3a30d1b2cf9313a47d45a446d73783e1b9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
