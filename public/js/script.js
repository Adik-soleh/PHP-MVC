    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".btn-delete");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault(); 

                const deleteUrl = this.getAttribute("href");

                Swal.fire({
                    title: "Apakah kamu yakin?",
                    text: "Data siswa akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = deleteUrl;
                    }
                });
            });
        });
    });


    $(function () {

        $(".tombolTambahData").on("click", function () {
          $("#formModalLabel").html("Tambah Data Mahasiswa");
          $('.modal-footer button[type=submit]').html('Tambah Data')
        });
      
      
        $(".modalEdit").on("click", function () {
          $("#formModalLabel").html("Ubah Data Mahasiswa");
          $('.modal-footer button[type=submit]').html('Ubah Data')
          $('.modal-body form').attr('action', 'http://localhost/php-mvc/public/siswa/ubah');

            const id = $(this).data('id');
            
            
            $.ajax({
                url: 'http://localhost/php-mvc/public/siswa/getubah',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#name').val(data.name);
                    $('#nis').val(data.nis);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                    $('#id').val(data.id);
                }
            })

        });
      });
      

  