<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a255d63afb1c332674a6e532aff591cceb4bc60abd4e97fa828fbf6f4a5ffcc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0f49eb40219934cdceda288cd957847e5bf2547ad6a6910a4a0f3f9399b8b2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f49eb40219934cdceda288cd957847e5bf2547ad6a6910a4a0f3f9399b8b2d6->enter($__internal_0f49eb40219934cdceda288cd957847e5bf2547ad6a6910a4a0f3f9399b8b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f49eb40219934cdceda288cd957847e5bf2547ad6a6910a4a0f3f9399b8b2d6->leave($__internal_0f49eb40219934cdceda288cd957847e5bf2547ad6a6910a4a0f3f9399b8b2d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_930b69251a74895a3a638ae79a8036ed73436e996da71859b22dbc2277c82c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930b69251a74895a3a638ae79a8036ed73436e996da71859b22dbc2277c82c3c->enter($__internal_930b69251a74895a3a638ae79a8036ed73436e996da71859b22dbc2277c82c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_930b69251a74895a3a638ae79a8036ed73436e996da71859b22dbc2277c82c3c->leave($__internal_930b69251a74895a3a638ae79a8036ed73436e996da71859b22dbc2277c82c3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d653730f385161e66c5e355a1a7cda7d06592c0143ee92dc8ba5e8d23f10093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d653730f385161e66c5e355a1a7cda7d06592c0143ee92dc8ba5e8d23f10093->enter($__internal_0d653730f385161e66c5e355a1a7cda7d06592c0143ee92dc8ba5e8d23f10093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d653730f385161e66c5e355a1a7cda7d06592c0143ee92dc8ba5e8d23f10093->leave($__internal_0d653730f385161e66c5e355a1a7cda7d06592c0143ee92dc8ba5e8d23f10093_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae5b9b6c35eb2e7ffb919aed09519d0421582a9dc1d171d55c18807e7334c1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5b9b6c35eb2e7ffb919aed09519d0421582a9dc1d171d55c18807e7334c1d2->enter($__internal_ae5b9b6c35eb2e7ffb919aed09519d0421582a9dc1d171d55c18807e7334c1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ae5b9b6c35eb2e7ffb919aed09519d0421582a9dc1d171d55c18807e7334c1d2->leave($__internal_ae5b9b6c35eb2e7ffb919aed09519d0421582a9dc1d171d55c18807e7334c1d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
