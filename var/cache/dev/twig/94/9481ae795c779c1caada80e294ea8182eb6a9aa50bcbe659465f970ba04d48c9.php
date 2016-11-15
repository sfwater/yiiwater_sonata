<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_162adbd6545b51950a92b3ad31a6a4f9af4771b2fc545dd0441ff2abe050bb78 extends Twig_Template
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
        $__internal_d2f0cc27c3481eb7ee5b4514c184ba468ebbabb12299cf4d7b20a3ef18d81e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f0cc27c3481eb7ee5b4514c184ba468ebbabb12299cf4d7b20a3ef18d81e7a->enter($__internal_d2f0cc27c3481eb7ee5b4514c184ba468ebbabb12299cf4d7b20a3ef18d81e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d2f0cc27c3481eb7ee5b4514c184ba468ebbabb12299cf4d7b20a3ef18d81e7a->leave($__internal_d2f0cc27c3481eb7ee5b4514c184ba468ebbabb12299cf4d7b20a3ef18d81e7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
