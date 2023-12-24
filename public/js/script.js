const pesanBerhasil = document.querySelector(".msg-berhasil");
const tombolHapus = document.querySelectorAll(".btn-hapus");
const tombolJurusan = document.querySelectorAll(".hapus-jurusan");

if (pesanBerhasil) {
  const pesan = pesanBerhasil.getAttribute("data-berhasil");
  Swal.fire({
    title: "Berhasil",
    text: pesan,
    icon: "success",
  });
}

// Hapus Jurusan
tombolJurusan.forEach((jurusan) => {
  jurusan.addEventListener("click", function (e) {
    const kodeJurusan = e.target.getAttribute("data-kode-jurusan");

    Swal.fire({
      title: "Kamu Yakin Mau Menghapus ?",
      icon: "warning",
      showCancelButton: true,
      cancelButtonColor: "#858796",
      confirmButtonColor: "#d33",
      cancelButtonText: "Tidak",
      confirmButtonText: "Hapus",
    }).then((result) => {
      if (result.isConfirmed) {
        console.log(result);
        fetch(
          "http://localhost:8080/dashboard/jurusan/" + kodeJurusan + "/hapus",
          {
            method: "DELETE",
            body: JSON.stringify({ kodeJurusan }),
          }
        )
          .then(() => {
            Swal.fire({
              title: "Berhasil",
              text: "Jurusan Berhasil Dihapus",
              icon: "success",
            });
          })
          .then(() => {
            setTimeout(() => {
              location.reload();
            }, 1000);
          });
      }
    });
  });
});

// Hapus Mata Kuliah
tombolHapus.forEach((tombol) => {
  tombol.addEventListener("click", function (e) {
    const kodeMataKuliah = e.target.getAttribute("data-kode-mata-kuliah");
    Swal.fire({
      title: "Kamu Yakin Mau Menghapus ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#858796",
      cancelButtonText: "Tidak",
      confirmButtonText: "Hapus",
    }).then((result) => {
      if (result.isConfirmed) {
        fetch(
          "http://localhost:8080/dashboard/matakuliah/" +
            kodeMataKuliah +
            "/hapus",
          {
            method: "DELETE",
            body: JSON.stringify({
              kode,
            }),
          }
        )
          .then(() => {
            Swal.fire({
              title: "Deleted!",
              text: "Your file has been deleted.",
              icon: "success",
            });
          })
          .then(() => {
            setTimeout(() => {
              location.reload();
            }, 1000);
          });
      }
    });
  });
});

// function hapus(url, method) {}
