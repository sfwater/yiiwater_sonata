<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_29bc112526a55f5f59e570003a6d1262960c62ae583354220537584a1eb8050b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a87bd5622f828e82bcafc975653b9477d2e05d9f2b1e33fe07bb80ba4b85c2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87bd5622f828e82bcafc975653b9477d2e05d9f2b1e33fe07bb80ba4b85c2a7->enter($__internal_a87bd5622f828e82bcafc975653b9477d2e05d9f2b1e33fe07bb80ba4b85c2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87bd5622f828e82bcafc975653b9477d2e05d9f2b1e33fe07bb80ba4b85c2a7->leave($__internal_a87bd5622f828e82bcafc975653b9477d2e05d9f2b1e33fe07bb80ba4b85c2a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb82dfabab8799743ca60ef8f87f5b2783f9402f7ce969201bae3af1c42daa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb82dfabab8799743ca60ef8f87f5b2783f9402f7ce969201bae3af1c42daa7d->enter($__internal_fb82dfabab8799743ca60ef8f87f5b2783f9402f7ce969201bae3af1c42daa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_fb82dfabab8799743ca60ef8f87f5b2783f9402f7ce969201bae3af1c42daa7d->leave($__internal_fb82dfabab8799743ca60ef8f87f5b2783f9402f7ce969201bae3af1c42daa7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40bd85fc59661b62f091eaa365e826501b9643f2ca5c46424dfce66ac3c195cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bd85fc59661b62f091eaa365e826501b9643f2ca5c46424dfce66ac3c195cf->enter($__internal_40bd85fc59661b62f091eaa365e826501b9643f2ca5c46424dfce66ac3c195cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_40bd85fc59661b62f091eaa365e826501b9643f2ca5c46424dfce66ac3c195cf->leave($__internal_40bd85fc59661b62f091eaa365e826501b9643f2ca5c46424dfce66ac3c195cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
