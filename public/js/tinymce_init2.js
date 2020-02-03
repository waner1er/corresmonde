 var editor_config = {
      language:'fr_FR',
      path_absolute : "/",
      selector: ".image",
      themes:"modern",
      forced_root_block : false,
      force_br_newlines : true,
      force_p_newlines : false,
      toolbar_sticky: true,
      branding: false,
      convert_urls : false,

      menu:{
      insert: {title: 'Insert', items: 'link media | template hr'}
      },
      plugins: [
        "image imagetools"
      ],

      toolbar: "insertfile link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
