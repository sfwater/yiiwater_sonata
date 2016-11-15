<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bc9c565f3c073363af3caabff95996bcb1ca131e6779302f4c33be3a9a92485c extends Twig_Template
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
        $__internal_a98cc8372d3a6af973d63e71f82b7ad93c22b76093a02bb10d939f78843ed371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98cc8372d3a6af973d63e71f82b7ad93c22b76093a02bb10d939f78843ed371->enter($__internal_a98cc8372d3a6af973d63e71f82b7ad93c22b76093a02bb10d939f78843ed371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a98cc8372d3a6af973d63e71f82b7ad93c22b76093a02bb10d939f78843ed371->leave($__internal_a98cc8372d3a6af973d63e71f82b7ad93c22b76093a02bb10d939f78843ed371_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
