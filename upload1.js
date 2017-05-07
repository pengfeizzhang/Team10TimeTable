function readURL(e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        $(reader).on('load', function(e) { $('#blah').attr('src', e.target.result); });
        reader.readAsDataURL(this.files[0]);
    }
}

$("#imgInp").change(readURL);