<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="preview" style="width:75px"><span class="fade"></span></td>
        <td class="name" style="width: 100px"><span>{%=file.name%}</span></td>
        <td><div style="width: 30px;"></div></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
            </td>
            <td class="start">{% if (!o.options.autoUpload) { %}
                <div class="btn small success">
                <button>                    
                    {%=locale.fileupload.start%}
                </button>
                </div>
            {% } %}</td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <div class="btn small danger">
            <button>                
                {%=locale.fileupload.cancel%}
            </button>
            </div>
        {% } %}</td>
    </tr>
{% } %}
</script>
