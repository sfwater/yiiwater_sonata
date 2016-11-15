<?php

/* ::base.html.twig */
class __TwigTemplate_05092342de4ae9fc7a4047c8f2ca8a859b797ec929aa7d0fd6d1ce49e997e141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c8e8c5e5a1c3417c3080d6a47c38fbbe570d60615c11d748351e2f60f2b072f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8e8c5e5a1c3417c3080d6a47c38fbbe570d60615c11d748351e2f60f2b072f->enter($__internal_3c8e8c5e5a1c3417c3080d6a47c38fbbe570d60615c11d748351e2f60f2b072f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3c8e8c5e5a1c3417c3080d6a47c38fbbe570d60615c11d748351e2f60f2b072f->leave($__internal_3c8e8c5e5a1c3417c3080d6a47c38fbbe570d60615c11d748351e2f60f2b072f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8362728a56607eb59a7eb4d72e1f636eaef5f71d60e38348986f0fb848968bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8362728a56607eb59a7eb4d72e1f636eaef5f71d60e38348986f0fb848968bea->enter($__internal_8362728a56607eb59a7eb4d72e1f636eaef5f71d60e38348986f0fb848968bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_8362728a56607eb59a7eb4d72e1f636eaef5f71d60e38348986f0fb848968bea->leave($__internal_8362728a56607eb59a7eb4d72e1f636eaef5f71d60e38348986f0fb848968bea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7bbf065193b1ee7ef74b3ab2ecf12c9891c528344dbd3037b535b9fd2569c762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbf065193b1ee7ef74b3ab2ecf12c9891c528344dbd3037b535b9fd2569c762->enter($__internal_7bbf065193b1ee7ef74b3ab2ecf12c9891c528344dbd3037b535b9fd2569c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_7bbf065193b1ee7ef74b3ab2ecf12c9891c528344dbd3037b535b9fd2569c762->leave($__internal_7bbf065193b1ee7ef74b3ab2ecf12c9891c528344dbd3037b535b9fd2569c762_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7b43d9d5754bff8facac8477ac322830eb7f1f7dd66b0ee5ef581924bd29f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7b43d9d5754bff8facac8477ac322830eb7f1f7dd66b0ee5ef581924bd29f9->enter($__internal_8b7b43d9d5754bff8facac8477ac322830eb7f1f7dd66b0ee5ef581924bd29f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_8b7b43d9d5754bff8facac8477ac322830eb7f1f7dd66b0ee5ef581924bd29f9->leave($__internal_8b7b43d9d5754bff8facac8477ac322830eb7f1f7dd66b0ee5ef581924bd29f9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea86d93686d9c4de7dce057315b575b72efeb5126e64861b3aeac29bd4a246ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea86d93686d9c4de7dce057315b575b72efeb5126e64861b3aeac29bd4a246ab->enter($__internal_ea86d93686d9c4de7dce057315b575b72efeb5126e64861b3aeac29bd4a246ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_ea86d93686d9c4de7dce057315b575b72efeb5126e64861b3aeac29bd4a246ab->leave($__internal_ea86d93686d9c4de7dce057315b575b72efeb5126e64861b3aeac29bd4a246ab_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/water/web/www/sonata_admin/app/Resources/views/base.html.twig");
    }
}
