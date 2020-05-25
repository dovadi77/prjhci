//Algoritma Async Search
function mySearchFunction() {
  var input, filter, ul, li, item, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("allMenu");
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
// Get the button that opens the modal
$("li[id^='c']").on("click", function () {
  $("#myModal").css("display", "block");
});

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
$("span[class^='close'").on("click", function () {
  $("#myModal").css("display", "none");
});

// When the user clicks on <span> (x), close the modal
// span.onclick = function () {
//   modal.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == $("div[class='modal']")) {
//     modal.style.display = "none";
//   }
// };

$(window).on("click", function (event) {
  var modal = $("#myModal");
  if ($(event.target).closest(modal).length) {
    $(modal).css("display", "none");
    event.stopPropagation();
  }
});

// Cache selectors
