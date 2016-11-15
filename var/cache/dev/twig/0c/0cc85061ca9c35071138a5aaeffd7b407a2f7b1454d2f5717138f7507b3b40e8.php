<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_253e1a5882482bd9e04f52560f336817b6a2555f8e4f16d3bf0646ba5356c4f1 extends Twig_Template
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
        $__internal_f9b6b9a2f322dd9ff5d14c2cbb1ccc3ecdb8967eb8e56aa00e3ef1d218c1a994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b6b9a2f322dd9ff5d14c2cbb1ccc3ecdb8967eb8e56aa00e3ef1d218c1a994->enter($__internal_f9b6b9a2f322dd9ff5d14c2cbb1ccc3ecdb8967eb8e56aa00e3ef1d218c1a994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f9b6b9a2f322dd9ff5d14c2cbb1ccc3ecdb8967eb8e56aa00e3ef1d218c1a994->leave($__internal_f9b6b9a2f322dd9ff5d14c2cbb1ccc3ecdb8967eb8e56aa00e3ef1d218c1a994_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
