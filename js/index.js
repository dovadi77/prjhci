function mySearchFunction() {
  var input, filter, ul, li, item, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("stateList");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    item = li[i];
    txtValue = item.textContent || item.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

(function ($) {
  "use strict";

  // Add active state to sidbar nav links
  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
  $("#layoutSidenav_nav .sidebar a.nav-link").each(function () {
    if (this.href === path) {
      $(this).addClass("active");
    }
  });
})(jQuery);

$("#myInput").on("keyup", function () {
  var input = $(this);
  if (input.val().length === 0) {
    input.addClass("empty");
  } else {
    input.removeClass("empty");
  }
});

var val = 0;
function calculateTotal(id) {
  var doc = document.getElementById(id);
  if (doc.classList.contains("selected")) {
    doc.classList.remove("selected");
    val -= parseInt(doc.getAttribute("data-value"));
  } else {
    val += parseInt(doc.getAttribute("data-value"));
    doc.classList.add("selected");
  }
  rupiah.innerHTML = formatRupiah(val, "Rp. ");
}

var rupiah = document.getElementById("rupiah");
/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
