<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_858183666c1a8913ba2a88608ce442a66532b25b0c213ceabab46724c4bcb173 extends Twig_Template
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
        $__internal_3bad64696a652f8b18efa924c43f285f73c8ecaa9d6fb1eaaec3db483b49dd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bad64696a652f8b18efa924c43f285f73c8ecaa9d6fb1eaaec3db483b49dd3c->enter($__internal_3bad64696a652f8b18efa924c43f285f73c8ecaa9d6fb1eaaec3db483b49dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3bad64696a652f8b18efa924c43f285f73c8ecaa9d6fb1eaaec3db483b49dd3c->leave($__internal_3bad64696a652f8b18efa924c43f285f73c8ecaa9d6fb1eaaec3db483b49dd3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
