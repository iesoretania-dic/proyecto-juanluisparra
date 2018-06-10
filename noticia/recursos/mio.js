window.onload = function () {
	tinymce.init({
	language : "es",
    selector: '#mytextarea',
    plugins: "image",
    toolbar: "fontsizeselect | image | bold italic underline | fontselect",
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt"
  });
}