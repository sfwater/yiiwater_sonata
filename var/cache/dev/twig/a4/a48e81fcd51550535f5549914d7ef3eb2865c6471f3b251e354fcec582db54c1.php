<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8daf81b13800d6f4713797f4b1f0a210780fb635f01983fc25ca6c415c7368a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd0fdf5b532fa1eedd6de5110118d8bafd38f428677e7fa8d1f1ae4644e2a87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0fdf5b532fa1eedd6de5110118d8bafd38f428677e7fa8d1f1ae4644e2a87d->enter($__internal_dd0fdf5b532fa1eedd6de5110118d8bafd38f428677e7fa8d1f1ae4644e2a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0fdf5b532fa1eedd6de5110118d8bafd38f428677e7fa8d1f1ae4644e2a87d->leave($__internal_dd0fdf5b532fa1eedd6de5110118d8bafd38f428677e7fa8d1f1ae4644e2a87d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de4a7a257b1c40b7d79c28e6473350972f88e82583f53ac68694838820708fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4a7a257b1c40b7d79c28e6473350972f88e82583f53ac68694838820708fa8->enter($__internal_de4a7a257b1c40b7d79c28e6473350972f88e82583f53ac68694838820708fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de4a7a257b1c40b7d79c28e6473350972f88e82583f53ac68694838820708fa8->leave($__internal_de4a7a257b1c40b7d79c28e6473350972f88e82583f53ac68694838820708fa8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3671d4984da93aa8a87ce8fdbd5a8b52cccb5ec1f45565132fe12680e566afd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3671d4984da93aa8a87ce8fdbd5a8b52cccb5ec1f45565132fe12680e566afd2->enter($__internal_3671d4984da93aa8a87ce8fdbd5a8b52cccb5ec1f45565132fe12680e566afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3671d4984da93aa8a87ce8fdbd5a8b52cccb5ec1f45565132fe12680e566afd2->leave($__internal_3671d4984da93aa8a87ce8fdbd5a8b52cccb5ec1f45565132fe12680e566afd2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a482f8a707386c97c6a58804c3d7173b5f7def463533e530f690b77b4a6089e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a482f8a707386c97c6a58804c3d7173b5f7def463533e530f690b77b4a6089e->enter($__internal_3a482f8a707386c97c6a58804c3d7173b5f7def463533e530f690b77b4a6089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3a482f8a707386c97c6a58804c3d7173b5f7def463533e530f690b77b4a6089e->leave($__internal_3a482f8a707386c97c6a58804c3d7173b5f7def463533e530f690b77b4a6089e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
