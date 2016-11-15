<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_90f04a8f24c51b2d37a2415b1923d91b855bddf101920c111e10bbc2884805ce extends Twig_Template
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
        $__internal_44ec768dcced180bc2f86fdcb3b46b76be451044a5da5a4711f17076f37e4842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec768dcced180bc2f86fdcb3b46b76be451044a5da5a4711f17076f37e4842->enter($__internal_44ec768dcced180bc2f86fdcb3b46b76be451044a5da5a4711f17076f37e4842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_44ec768dcced180bc2f86fdcb3b46b76be451044a5da5a4711f17076f37e4842->leave($__internal_44ec768dcced180bc2f86fdcb3b46b76be451044a5da5a4711f17076f37e4842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
