<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2e85a4f0c71029f8916b2923add29e8b119ce3ac7576d6e40f33d3994c0565fb extends Twig_Template
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
        $__internal_773b7e6f3eb5070c326d6ce174c4bd0dc0aa10dd5838933d854d204318cac776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773b7e6f3eb5070c326d6ce174c4bd0dc0aa10dd5838933d854d204318cac776->enter($__internal_773b7e6f3eb5070c326d6ce174c4bd0dc0aa10dd5838933d854d204318cac776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_773b7e6f3eb5070c326d6ce174c4bd0dc0aa10dd5838933d854d204318cac776->leave($__internal_773b7e6f3eb5070c326d6ce174c4bd0dc0aa10dd5838933d854d204318cac776_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
