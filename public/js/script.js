if ($(".msg-berhasil").data("berhasil")) {
  const msg = $(".msg-berhasil").data("berhasil");
  Swal.fire({
    title: "Berhasil",
    text: msg,
    icon: "success",
  });
}
