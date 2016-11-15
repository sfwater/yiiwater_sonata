<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74ec5aea24eff93e011961c4759251115283297cfd171c6cc4f63fd33118e184 extends Twig_Template
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
        $__internal_99b767889a617db036f44df205cff3b8a5998e6dd7d7ccf05e7d25dbd79f1f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b767889a617db036f44df205cff3b8a5998e6dd7d7ccf05e7d25dbd79f1f7b->enter($__internal_99b767889a617db036f44df205cff3b8a5998e6dd7d7ccf05e7d25dbd79f1f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_99b767889a617db036f44df205cff3b8a5998e6dd7d7ccf05e7d25dbd79f1f7b->leave($__internal_99b767889a617db036f44df205cff3b8a5998e6dd7d7ccf05e7d25dbd79f1f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
