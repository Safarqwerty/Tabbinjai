<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>

{{-- TRIXEDITOR --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

</script>


{{-- SWEETALERT --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $(function () {
        // ALERT
        $(document).on('click', '#saveButton', function (e) {
            e.preventDefault();

            var link = $(this).attr("href");

            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Kamu akan memverifikasi ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Verifikasi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire(
                        'Berhasil diverifikasi!',
                    )
                }
            })
        })

        // ALERT DELETE
        $(document).on('click', '#deleteButton', function (e) {
            e.preventDefault();

            var link = $(this).attr("href");

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikannya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire(
                        'Terhapus!',
                        'Data berhasil dihapus!',
                        'success'
                    )
                }
            })
        })

        // ALERT SUCCESS
        $(document).on('click', '#successAlert', function (e) {
            e.preventDefault();

            var link = $(this).attr("href");

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1000
            })
        })
    })

</script>

{{-- IMAGE PRIVIEW --}}
{{-- 
<script>
    function previewImage() {
        const imageInput = document.getElementById('image');
        const imgPreview = document.querySelector('.img-preview');

        const file = imageInput.files[0];
        const reader = new FileReader();

        reader.onload = function () {
            imgPreview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
            imgPreview.style.display = 'block'; // Tampilkan elemen gambar jika ada gambar yang dipilih.
        } else {
            imgPreview.src = '';
            imgPreview.style.display = 'none'; // Sembunyikan elemen gambar jika tidak ada gambar yang dipilih.
        }
    }

    // Panggil previewImage() saat halaman dimuat jika Anda ingin menampilkan gambar default jika ada yang telah dipilih sebelumnya
    window.addEventListener('DOMContentLoaded', function () {
        previewImage();
    });

</script> --}}
<script>
      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>