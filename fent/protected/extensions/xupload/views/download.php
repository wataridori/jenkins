<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name"><span>{%=file.name%}</span></td>
            <td class="size"><span>({%=o.formatFileSize(file.size)%}</span>)</td>
            <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else { %}
            <td class="preview" style="width:75px">{% if (file.thumbnail_url) { %}
                <div class="image">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
                </div>
            {% } %}</td>                    
        {% } %}     
        <td><div style="width: 100px;"></div></td>
        <td class="delete">
            <div class="btn small danger">
            <button data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">                
                {%=locale.fileupload.destroy%}
            </button>
            </div>            
        </td>
    </tr>
{% } %}
</script>
