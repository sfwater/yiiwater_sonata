<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_daef41e5fdbf67a3ec65f34ccb891d0ac4bdb3396fa384ced2dacbf460278062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95390371531c357194e85d2a0957a3e44a15e57970f523de44a431f066c690c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95390371531c357194e85d2a0957a3e44a15e57970f523de44a431f066c690c4->enter($__internal_95390371531c357194e85d2a0957a3e44a15e57970f523de44a431f066c690c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_95390371531c357194e85d2a0957a3e44a15e57970f523de44a431f066c690c4->leave($__internal_95390371531c357194e85d2a0957a3e44a15e57970f523de44a431f066c690c4_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_f0c79791df1557e848724a4e71ab6bc638ee3c26907e8c8d806e6b909b5e079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c79791df1557e848724a4e71ab6bc638ee3c26907e8c8d806e6b909b5e079d->enter($__internal_f0c79791df1557e848724a4e71ab6bc638ee3c26907e8c8d806e6b909b5e079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:Core:user_block.html.twig"));

        
        $__internal_f0c79791df1557e848724a4e71ab6bc638ee3c26907e8c8d806e6b909b5e079d->leave($__internal_f0c79791df1557e848724a4e71ab6bc638ee3c26907e8c8d806e6b909b5e079d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
