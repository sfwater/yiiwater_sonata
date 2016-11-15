<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9101cc1a5149663a35a57a5f8a80e1d8b42213ae41827114379c86d3ac6cb940 extends Twig_Template
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
        $__internal_63c588a03e932b5b522de6ce4318f1cf45859b0b9e9db9addbeabd8a49dff769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c588a03e932b5b522de6ce4318f1cf45859b0b9e9db9addbeabd8a49dff769->enter($__internal_63c588a03e932b5b522de6ce4318f1cf45859b0b9e9db9addbeabd8a49dff769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_63c588a03e932b5b522de6ce4318f1cf45859b0b9e9db9addbeabd8a49dff769->leave($__internal_63c588a03e932b5b522de6ce4318f1cf45859b0b9e9db9addbeabd8a49dff769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
