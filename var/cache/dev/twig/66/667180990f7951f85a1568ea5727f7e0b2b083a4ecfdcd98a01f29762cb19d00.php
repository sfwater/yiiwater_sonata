<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1aff9dc8f29f88351b664af3c038a0c8b8435483bd75a293497e96eadb1b16e2 extends Twig_Template
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
        $__internal_1d60bc79d949eb205c7ea80ca7bf7faf5942baa3e2eee1f8f31142706e7058d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d60bc79d949eb205c7ea80ca7bf7faf5942baa3e2eee1f8f31142706e7058d6->enter($__internal_1d60bc79d949eb205c7ea80ca7bf7faf5942baa3e2eee1f8f31142706e7058d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_1d60bc79d949eb205c7ea80ca7bf7faf5942baa3e2eee1f8f31142706e7058d6->leave($__internal_1d60bc79d949eb205c7ea80ca7bf7faf5942baa3e2eee1f8f31142706e7058d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
