<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig */
class __TwigTemplate_a4ae80eb77e4f839fdaaf0a62200e3884b9fed8d12461511e673cc5dc850005a extends Twig_Template
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
        // line 11
        echo "<div class=\"sonata-ba-tabs\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
            // line 13
            echo "        <div>
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formgroups", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 17
                echo "                        <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\">
                            <a
                                href=\"#";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                                data-toggle=\"tab\"
                            >
                                <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formgroups", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 31
                echo "                        <div
                            class=\"tab-pane ";
                // line 32
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\"
                            id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form_group"], "fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 38
                    echo "                                        ";
                    $context["nested_field"] = $this->getAttribute($this->getAttribute($context["nested_group_field"], "children", array()), $context["field_name"], array(), "array");
                    // line 39
                    echo "                                        <div class=\"sonata-ba-field-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\">
                                            ";
                    // line 40
                    if ($this->getAttribute($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 41
                        echo "                                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row', array("inline" => "natural", "edit" => "inline"));
                        // line 44
                        echo "
                                                ";
                        // line 45
                        $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                        // line 46
                        echo "                                            ";
                    } else {
                        // line 47
                        echo "                                                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row');
                        echo "
                                            ";
                    }
                    // line 49
                    echo "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                                </div>
                            </fieldset>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </div>
            </div>

            ";
            // line 58
            if ($this->getAttribute($context["nested_group_field"], "_delete", array(), "array", true, true)) {
                // line 59
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(                // line 60
$context["nested_group_field"], "_delete", array(), "array"), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle")));
                // line 62
                echo "
            ";
            }
            // line 64
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 66,  212 => 64,  208 => 62,  206 => 60,  204 => 59,  202 => 58,  197 => 55,  180 => 51,  173 => 49,  167 => 47,  164 => 46,  162 => 45,  159 => 44,  156 => 41,  154 => 40,  147 => 39,  144 => 38,  140 => 37,  129 => 33,  123 => 32,  120 => 31,  103 => 30,  98 => 27,  80 => 23,  69 => 19,  61 => 17,  44 => 16,  39 => 13,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig", "/home/water/web/www/sonata_admin/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many_inline_tabs.html.twig");
    }
}
