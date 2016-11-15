<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1af546daf2af4882c0ccec74ca68d955cd3fbceb12ba5dbc676fb44e03d3f928 extends Twig_Template
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
        $__internal_dbcc43e58b92caf143e6580bcb4c681d150630108731828f48f7cc78bb72db03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcc43e58b92caf143e6580bcb4c681d150630108731828f48f7cc78bb72db03->enter($__internal_dbcc43e58b92caf143e6580bcb4c681d150630108731828f48f7cc78bb72db03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_dbcc43e58b92caf143e6580bcb4c681d150630108731828f48f7cc78bb72db03->leave($__internal_dbcc43e58b92caf143e6580bcb4c681d150630108731828f48f7cc78bb72db03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
