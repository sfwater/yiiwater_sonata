<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5864f18373b51dd072c84c1e6bd31b04dad71cdaa8713166dee029b3b83184d1 extends Twig_Template
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
        $__internal_e03cf7711b52456bca679d5b2d1c8e0fcf6406beb0a2d186b76be96960e90e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03cf7711b52456bca679d5b2d1c8e0fcf6406beb0a2d186b76be96960e90e56->enter($__internal_e03cf7711b52456bca679d5b2d1c8e0fcf6406beb0a2d186b76be96960e90e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e03cf7711b52456bca679d5b2d1c8e0fcf6406beb0a2d186b76be96960e90e56->leave($__internal_e03cf7711b52456bca679d5b2d1c8e0fcf6406beb0a2d186b76be96960e90e56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
