<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d0ee0b2a651a4c9dd1dbb29da00371520077472bd01ba61a127091d20b7b0070 extends Twig_Template
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
        $__internal_cbdfb90ac6676fca187f09c93ef91f72ed7a3a77cfadc6c2f82b39896b81a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdfb90ac6676fca187f09c93ef91f72ed7a3a77cfadc6c2f82b39896b81a817->enter($__internal_cbdfb90ac6676fca187f09c93ef91f72ed7a3a77cfadc6c2f82b39896b81a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cbdfb90ac6676fca187f09c93ef91f72ed7a3a77cfadc6c2f82b39896b81a817->leave($__internal_cbdfb90ac6676fca187f09c93ef91f72ed7a3a77cfadc6c2f82b39896b81a817_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
