<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_15ceda1843e35f0f7d65f4f455cd176e2f536c168beeca6ea12ef9cd1f3918a3 extends Twig_Template
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
        $__internal_dd81f1a63daa1c0e0dc7a831f1329b18b1a96c8d969184510077ce5d750e5c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd81f1a63daa1c0e0dc7a831f1329b18b1a96c8d969184510077ce5d750e5c30->enter($__internal_dd81f1a63daa1c0e0dc7a831f1329b18b1a96c8d969184510077ce5d750e5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_dd81f1a63daa1c0e0dc7a831f1329b18b1a96c8d969184510077ce5d750e5c30->leave($__internal_dd81f1a63daa1c0e0dc7a831f1329b18b1a96c8d969184510077ce5d750e5c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
