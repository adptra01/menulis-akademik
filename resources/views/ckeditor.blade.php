<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '{{ route('image.upload') . '?_token=' . csrf_token() }}',
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
