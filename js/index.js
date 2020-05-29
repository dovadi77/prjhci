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
$("li[id]").on("click", function () {
  var id = $(this).attr("id");
  $("#myModal" + id).css("display", "block");
  calculateTotal(id);
});

// When the user clicks the button, close the modal
$("span[class^='close'").on("click", function () {
  $("div[class='modal']").css("display", "none");
});

//get button that open payment
$('.paybut').on("click", function () {
  $('.pay_pop').css("display", "block");
});

// When the user clicks the button, open the payment
$("span[class^='close'").on("click", function () {
  $(".pay_pop").css("display", "none");
});

//payment method selection
$('#cash').on("click",function(){
	if ($('#cash').is(':checked')) {
		$(".pay_cash, .confirm").css("display", "block");
		$(".pay_ewallet, .pay_edc, .pnum").css("display", "none");
		$("#ovo, #dana, #gopay, #bca, #bni, #mandiri").prop('checked', false);
	}
});
$('#ewallet').on("click",function(){
	if ($('#ewallet').is(':checked')) {
		$(".pay_cash, .pay_edc").css("display", "none");
		$(".pay_ewallet").css("display", "block");
		$("#cashpay").val(null);
	}
	if (!$('.ovo, .gopay, .dana').is(':checked')) {
		$(".confirm2").css("display", "none");
	}
});
$('#edc').on("click",function(){
	if ($('#edc').is(':checked')) {
		$(".pay_cash, .pay_ewallet").css("display", "none");
		$(".pay_edc").css("display", "block");
		$("#cashpay").val(null);
	if (!$('.bca, .bni, .mandiri').is(':checked')) {
		$(".confirm").css("display", "none");
	}
	}
});
$('#ovo, #gopay').on("click",function(){
	if ($('#ovo, #gopay').is(':checked')) {
		$(".pnum").css("display", "block");
		$(".confirm2").css("display", "block");
	}
});
$('#dana').on("click",function(){
	if ($('#dana').is(':checked')) {
		$(".pnum").css("display", "none");
		$(".confirm2").css("display", "block");
	}
});
$('#bca, #bni, #mandiri').on("click",function(){
	if ($('#dana, #bca, #bni, #mandiri').is(':checked')) {
		$(".pnum").css("display", "none");
		$(".confirm3").css("display", "block");
	}
});

function confirmpay(id) {
	var beli = document.getElementById(id);
	var bayar = document.getElementById('cashpay');
}

//jeda 2 detik
function confirmpay2(){
	$('.payprocess').css("display", "block");
	var proses = setTimeout(function(){
		alert("Pembelian telah diproses!");
		$('#ewallet, #edc, #ovo, #dana, #gopay, #bca, #bni, #mandiri').prop('checked', false);
		$(".pay_cash, .pay_ewallet, .pay_edc").css("display", "none");
		$(".pnum").css("display", "none");
		$('#pnum, #cashpay').val(null);
		$('#pay_pop').hide();
		$('#payprocess').hide();
	}, 2000);
}

