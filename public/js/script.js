const pesanBerhasil = document.querySelector(".msg-berhasil");
const tombolMahasiswa = document.querySelectorAll(".hapus-mahasiswa");
const tombolJurusan = document.querySelectorAll(".hapus-jurusan");
const tombolMataKuliah = document.querySelectorAll(".hapus-mata-kuliah");

if (pesanBerhasil) {
  const pesan = pesanBerhasil.getAttribute("data-berhasil");
  Swal.fire({
    title: "Berhasil",
    text: pesan,
    icon: "success",
  });
}

// Hapus Mahasiswa
tombolMahasiswa.forEach((jurusan) => {
  jurusan.addEventListener("click", function (e) {
    const nim = e.target.getAttribute("data-nim-mahasiswa");

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
        fetch("http://localhost:8080/mahasiswa/" + nim + "/hapus", {
          method: "DELETE",
          body: JSON.stringify({ nim }),
        })
          .then(() => {
            Swal.fire({
              title: "Berhasil",
              text: "Mahasiswa Berhasil Dihapus",
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
        fetch("http://localhost:8080/jurusan/" + kodeJurusan + "/hapus", {
          method: "DELETE",
          body: JSON.stringify({ kodeJurusan }),
        })
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
tombolMataKuliah.forEach((tombol) => {
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
        fetch("http://localhost:8080/matakuliah/" + kodeMataKuliah + "/hapus", {
          method: "DELETE",
          body: JSON.stringify({
            kode,
          }),
        })
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
