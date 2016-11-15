<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_525740faa6aefc40a28adbee4fee389ed49ec59a6aac529d0a375505782108ab extends Twig_Template
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
        $__internal_049eee9d828c122d9e2285ecb0a525d84abdd5588eaca3a742a4fb6f47b68953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049eee9d828c122d9e2285ecb0a525d84abdd5588eaca3a742a4fb6f47b68953->enter($__internal_049eee9d828c122d9e2285ecb0a525d84abdd5588eaca3a742a4fb6f47b68953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_049eee9d828c122d9e2285ecb0a525d84abdd5588eaca3a742a4fb6f47b68953->leave($__internal_049eee9d828c122d9e2285ecb0a525d84abdd5588eaca3a742a4fb6f47b68953_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
