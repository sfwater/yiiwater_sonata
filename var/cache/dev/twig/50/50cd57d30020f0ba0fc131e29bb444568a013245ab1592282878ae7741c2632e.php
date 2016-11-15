<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2c137aac45ee9109096cfd67fbe40deafa1913e4cd3d1614847ad6776515cb82 extends Twig_Template
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
        $__internal_ae24de9c9abc3b1c60abd0b51edebe1c762942740e80ea64688de93ace93f2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae24de9c9abc3b1c60abd0b51edebe1c762942740e80ea64688de93ace93f2ef->enter($__internal_ae24de9c9abc3b1c60abd0b51edebe1c762942740e80ea64688de93ace93f2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ae24de9c9abc3b1c60abd0b51edebe1c762942740e80ea64688de93ace93f2ef->leave($__internal_ae24de9c9abc3b1c60abd0b51edebe1c762942740e80ea64688de93ace93f2ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/water/web/www/sonata_admin/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
