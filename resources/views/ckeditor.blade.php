{{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
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
</script> --}}

{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'powerpaste advcode table lists checklist',
        toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
    });
</script> --}}

<!-- include summernote css/js -->
{{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script> --}}

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<style>
    .note-modal-content {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 600px;
        width: 100%;
        padding: 20px;
        background-color: #fff;
    }
</style>
<script>
    $(document).ready(function() {
        $('#editor').summernote({
            tabsize: 2,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['codeview', 'help']]
            ],
            callbacks: {
                onInit: function() {
                    $('.note-group-select-from-files').hide();
                }
            },
        });

        // Mengatur ulang posisi popup "Help" saat jendela browser diubah ukurannya
        $(window).resize(function() {
            $('.note-modal-content').css({
                top: '50%',
                width: '400px',
                transform: 'translate(-50%, -50%)'
            });
        });
    });
</script>
