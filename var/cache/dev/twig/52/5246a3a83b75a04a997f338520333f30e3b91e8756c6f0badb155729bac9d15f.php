<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_66e9bc04b83c9ec94fbca1a19ae62dc6a81aace2c3b5a4e37ce2ff225c038566 extends Twig_Template
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
        $__internal_686cc905af2097e64f8d0b34bca8aa60b6cb7a15802268a7198d0ba890b3de90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686cc905af2097e64f8d0b34bca8aa60b6cb7a15802268a7198d0ba890b3de90->enter($__internal_686cc905af2097e64f8d0b34bca8aa60b6cb7a15802268a7198d0ba890b3de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_686cc905af2097e64f8d0b34bca8aa60b6cb7a15802268a7198d0ba890b3de90->leave($__internal_686cc905af2097e64f8d0b34bca8aa60b6cb7a15802268a7198d0ba890b3de90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
