<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/view/template/common/filemanager.twig */
class __TwigTemplate_82a01c5d70b035fc4bc3111f93a1b622 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"modal-image\" class=\"modal\">
  <div id=\"filemanager\" class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\"></div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#modal-image .modal-body').load('index.php?route=common/filemanager|list&user_token=";
        // line 12
        echo ($context["user_token"] ?? null);
        echo "');

  \$('#modal-image').on('click', '#button-parent', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', '#button-refresh', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('keydown', '#input-search', function(e) {
      if (e.which == 13) {
          \$('#button-search').trigger('click');
      }
  });

  \$('#modal-image').on('click', '#button-search', function(e) {
      var url = 'index.php?route=common/filemanager|list&user_token=";
        // line 33
        echo ($context["user_token"] ?? null);
        echo "';

      var directory = \$('##input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      var filter_name = \$('##input-search').val();

      if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
      }

    ";
        // line 47
        if (($context["thumb"] ?? null)) {
            // line 48
            echo "      url += '&thumb=";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
            echo "';
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($context["target"] ?? null)) {
            // line 52
            echo "      url += '&target=";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "';
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (($context["ckeditor"] ?? null)) {
            // line 56
            echo "      url += '&ckeditor=";
            echo twig_escape_filter($this->env, ($context["ckeditor"] ?? null), "js");
            echo "';
    ";
        }
        // line 58
        echo "
      \$('#modal-image .modal-body').load(url);
  });

  \$('#modal-image').on('click', '#button-upload', function() {
      \$('#form-upload').remove();

      \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\"/></form>');

      \$('#form-upload input[name=\\'file[]\\']').trigger('click');

      \$('#form-upload input[name=\\'file[]\\']').on('change', function() {
          for (i = 0; i < this.files.length; i++) {
              if (this.files[i].size > ";
        // line 71
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
                  \$(this).val('');

                  alert('";
        // line 74
        echo ($context["error_upload_size"] ?? null);
        echo "');
              }
          }
      });

      if (typeof timer != 'undefined') {
          clearInterval(timer);
      }

      timer = setInterval(function() {
          if (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
              clearInterval(timer);

              var url = 'index.php?route=common/filemanager|upload&user_token=";
        // line 87
        echo ($context["user_token"] ?? null);
        echo "';

              var directory = \$('#input-directory').val();

              if (directory) {
                  url += '&directory=' + encodeURIComponent(directory);
              }

              \$.ajax({
                  url: url,
                  type: 'post',
                  dataType: 'json',
                  data: new FormData(\$('#form-upload')[0]),
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function() {
                      \$('#button-upload i').replaceWith('<i class=\"fas fa-circle-notch fa-spin fa-fw\"></i>');
                      \$('#button-upload').prop('disabled', true);
                  },
                  complete: function() {
                      \$('#button-upload i').replaceWith('<i class=\"fas fa-upload fa-fw\"></i>');
                      \$('#button-upload').prop('disabled', false);
                  },
                  success: function(json) {
                      if (json['error']) {
                          alert(json['error']);
                      }

                      if (json['success']) {
                          alert(json['success']);

                          \$('#button-refresh').trigger('click');
                      }
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                  }
              });
          }
      }, 500);
  });

  \$('#modal-image').on('click', '#button-folder', function() {
      \$('#modal-folder').slideToggle();
  });

  \$('#modal-image').on('click', '#button-create', function() {
      var url = 'index.php?route=common/filemanager|folder&user_token=";
        // line 135
        echo ($context["user_token"] ?? null);
        echo "';

      var directory = \$('#input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      \$.ajax({
          url: url,
          type: 'post',
          dataType: 'json',
          data: 'folder=' + encodeURIComponent(\$('#input-folder').val()),
          beforeSend: function() {
              \$('#button-create').prop('disabled', true);
          },
          complete: function() {
              \$('#button-create').prop('disabled', false);
          },
          success: function(json) {
              if (json['error']) {
                  alert(json['error']);
              }

              if (json['success']) {
                  alert(json['success']);

                  \$('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#modal-image').on('click', '#button-delete', function(e) {
      if (confirm('";
        // line 172
        echo ($context["text_confirm"] ?? null);
        echo "')) {
          \$.ajax({
              url: 'index.php?route=common/filemanager|delete&user_token=";
        // line 174
        echo ($context["user_token"] ?? null);
        echo "',
              type: 'post',
              dataType: 'json',
              data: \$('input[name^=\\'path\\']:checked'),
              beforeSend: function() {
                  \$('#button-delete i').replaceWith('<i class=\"fas fa-circle-notch fa-spin fa-fw\"></i>');
                  \$('#button-delete').prop('disabled', true);
              },
              complete: function() {
                  \$('#button-delete i').replaceWith('<i class=\"fas fa-trash-alt fa-fw\"></i>');
                  \$('#button-delete').prop('disabled', false);
              },
              success: function(json) {
                  if (json['error']) {
                      alert(json['error']);
                  }

                  if (json['success']) {
                      alert(json['success']);

                      \$('#button-refresh').trigger('click');
                  }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });

  \$('#modal-image').on('click', 'a.directory', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', 'a.thumbnail', function(e) {
      e.preventDefault();

    ";
        // line 213
        if (($context["thumb"] ?? null)) {
            // line 214
            echo "      \$('";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
            echo "').attr('src', \$(this).find('img').attr('src'));

      \$('";
            // line 216
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "').val(\$(this).parent().find('input').val());
    ";
        }
        // line 218
        echo "
    ";
        // line 219
        if (($context["ckeditor"] ?? null)) {
            // line 220
            echo "      CKEDITOR.instances['";
            echo twig_escape_filter($this->env, ($context["ckeditor"] ?? null), "js");
            echo "'].insertHtml('<img src=\"' + \$(this).attr('href') + '\" alt=\"\" title=\"\" />');
    ";
        }
        // line 222
        echo "
      \$('#modal-image').modal('hide');
  });

  \$('#modal-image').on('click', '.pagination a', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });
  //--></script>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 222,  317 => 220,  315 => 219,  312 => 218,  307 => 216,  301 => 214,  299 => 213,  257 => 174,  252 => 172,  212 => 135,  161 => 87,  145 => 74,  139 => 71,  124 => 58,  118 => 56,  116 => 55,  113 => 54,  107 => 52,  105 => 51,  102 => 50,  96 => 48,  94 => 47,  77 => 33,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/filemanager.twig", "C:\\xampp\\htdocs\\opencart\\admin\\view\\template\\common\\filemanager.twig");
    }
}
