<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_6705223acde995e7af2795285e40ec7dd33e68d294832de47e3b7afd1ad38a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a017be5fbbab723101823dcf84e0acd3f0903a6156ba836ad1b0422335baf3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a017be5fbbab723101823dcf84e0acd3f0903a6156ba836ad1b0422335baf3ef->enter($__internal_a017be5fbbab723101823dcf84e0acd3f0903a6156ba836ad1b0422335baf3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a017be5fbbab723101823dcf84e0acd3f0903a6156ba836ad1b0422335baf3ef->leave($__internal_a017be5fbbab723101823dcf84e0acd3f0903a6156ba836ad1b0422335baf3ef_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_dd886ae71f9900e151614bc9c83f58a579dc5cb8337a01089d049ce8a2437f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd886ae71f9900e151614bc9c83f58a579dc5cb8337a01089d049ce8a2437f41->enter($__internal_dd886ae71f9900e151614bc9c83f58a579dc5cb8337a01089d049ce8a2437f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_dd886ae71f9900e151614bc9c83f58a579dc5cb8337a01089d049ce8a2437f41->leave($__internal_dd886ae71f9900e151614bc9c83f58a579dc5cb8337a01089d049ce8a2437f41_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c5e79c4bdf7045397a7e0a3f9cd59036745180577d2eca05c73159d603f42eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e79c4bdf7045397a7e0a3f9cd59036745180577d2eca05c73159d603f42eb7->enter($__internal_c5e79c4bdf7045397a7e0a3f9cd59036745180577d2eca05c73159d603f42eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_c5e79c4bdf7045397a7e0a3f9cd59036745180577d2eca05c73159d603f42eb7->leave($__internal_c5e79c4bdf7045397a7e0a3f9cd59036745180577d2eca05c73159d603f42eb7_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3d28b3cdb3b10f31d01d86fe56cb148a9fcadb4766dc133dac08e621d606ba5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d28b3cdb3b10f31d01d86fe56cb148a9fcadb4766dc133dac08e621d606ba5f->enter($__internal_3d28b3cdb3b10f31d01d86fe56cb148a9fcadb4766dc133dac08e621d606ba5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_3d28b3cdb3b10f31d01d86fe56cb148a9fcadb4766dc133dac08e621d606ba5f->leave($__internal_3d28b3cdb3b10f31d01d86fe56cb148a9fcadb4766dc133dac08e621d606ba5f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8875162fd76298b8320edb4c93ecd459d94996a5903e22e823f7efc4499be55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8875162fd76298b8320edb4c93ecd459d94996a5903e22e823f7efc4499be55->enter($__internal_c8875162fd76298b8320edb4c93ecd459d94996a5903e22e823f7efc4499be55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_c8875162fd76298b8320edb4c93ecd459d94996a5903e22e823f7efc4499be55->leave($__internal_c8875162fd76298b8320edb4c93ecd459d94996a5903e22e823f7efc4499be55_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8599151bb1aa991eaf3c2a54834c51c9a45ff799e69c925c08208cadcf8c836d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8599151bb1aa991eaf3c2a54834c51c9a45ff799e69c925c08208cadcf8c836d->enter($__internal_8599151bb1aa991eaf3c2a54834c51c9a45ff799e69c925c08208cadcf8c836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_8599151bb1aa991eaf3c2a54834c51c9a45ff799e69c925c08208cadcf8c836d->leave($__internal_8599151bb1aa991eaf3c2a54834c51c9a45ff799e69c925c08208cadcf8c836d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4c9851995d141146b6574419add2b00735815b6f6d1eb2bf9497d5f04f1dbe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9851995d141146b6574419add2b00735815b6f6d1eb2bf9497d5f04f1dbe74->enter($__internal_4c9851995d141146b6574419add2b00735815b6f6d1eb2bf9497d5f04f1dbe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_4c9851995d141146b6574419add2b00735815b6f6d1eb2bf9497d5f04f1dbe74->leave($__internal_4c9851995d141146b6574419add2b00735815b6f6d1eb2bf9497d5f04f1dbe74_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_14430411845ca541b84c3865b91ea2aab121be92362b7c8950b497c4effed57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14430411845ca541b84c3865b91ea2aab121be92362b7c8950b497c4effed57e->enter($__internal_14430411845ca541b84c3865b91ea2aab121be92362b7c8950b497c4effed57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_14430411845ca541b84c3865b91ea2aab121be92362b7c8950b497c4effed57e->leave($__internal_14430411845ca541b84c3865b91ea2aab121be92362b7c8950b497c4effed57e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
