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
  } else {
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

var id = "";
var curQty = 0;
// Get the button that opens the modal
$("li[id]").on("click", function () {
  id = $(this).attr("id");
  $("#myModal" + id).css("display", "block");
  curQty = parseInt($("span[id='quantity" + id + "']").html());
});

// When the user clicks the button, close the modal + if there any change in modal after click x button undo or cancel that change
$("span[name]").on("click", function () {
  $("div[class='modal']").css("display", "none");
  var clsQty = parseInt($("span[id='quantity" + id + "']").html());
  if (curQty != clsQty) {
    var result = curQty - clsQty;
    if (result < 0) {
      //hasil nya minus makanya jd +
      val = val + result * cPrice;
    } else {
      val = val + Math.abs(result * cPrice);
    }
    $("span[id='quantity" + id + "']").html(curQty);
  }
  if (curQty > 0) {
    if ($("li[id='" + id + "']").hasClass("selected") == false)
      $("li[id='" + id + "']").addClass("selected");
  } else {
    $("li[id='" + id + "']").removeClass("selected");
  }
  $("#rupiah").html(formatRupiah(val, "Rp. "));
});

var variant_arr = [];
var sales_arr = [];
var add_arr = [];
var qty_arr = [];
var val_arr = [];
var menu_arr = [];
//close modal when add click and verify the input, also append data to array for sending
$("span[class^='add']").on("click", function () {
  var variant = $("input[name='variant']:checked").val();
  var sales = $("input[name='sales']:checked").val();
  var add = $("textarea[id='" + id + "']").val();
  var patt = /c/;
  if (count > 0) {
    if (variant == null || sales == null) {
      alert("Please input correctly");
    } else {
      $("div[class='modal']").css("display", "none");
      val_arr.push(cPrice * count);
      variant_arr.push(variant);
      add_arr.push(add);
      sales_arr.push(sales);
      qty_arr.push(count);
      menu_arr.push(id);
    }
  } else {
    alert("Please use button X if nothing to input");
  }
  $("#rupiah").html(formatRupiah(val, "Rp. "));
});

//get button that open payment
$(".paybut").on("click", function () {
  if (val == 0) {
    alert("Menu not selected");
    return;
  }
  $("#total").html(formatRupiah(val, "Rp. "));
  $("#pay_pop").css("display", "block");
});

// When the user clicks the button, open the payment
$("#closex").on("click", function () {
  $("#pay_pop").css("display", "none");
  console.log("lalalaal");
});

//payment method selection
$("#cash").on("click", function () {
  if ($("#cash").is(":checked")) {
    $(".pay_cash, .confirm").css("display", "block");
    $(".pay_ewallet, .pay_edc, .pnum").css("display", "none");
    $("#ovo, #dana, #gopay, #bca, #bni, #mandiri").prop("checked", false);
  }
});
$("#ewallet").on("click", function () {
  if ($("#ewallet").is(":checked")) {
    $(".pay_cash, .pay_edc").css("display", "none");
    $(".pay_ewallet").css("display", "block");
    $("#cashpay").val(null);
  }
  if (!$(".ovo, .gopay, .dana").is(":checked")) {
    $(".confirm2").css("display", "none");
  }
});
$("#edc").on("click", function () {
  if ($("#edc").is(":checked")) {
    $(".pay_cash, .pay_ewallet").css("display", "none");
    $(".pay_edc").css("display", "block");
    $("#cashpay").val(null);
    if (!$(".bca, .bni, .mandiri").is(":checked")) {
      $(".confirm").css("display", "none");
    }
  }
});
$("#ovo, #gopay").on("click", function () {
  if ($("#ovo, #gopay").is(":checked")) {
    $(".pnum").css("display", "block");
    $(".confirm2").css("display", "block");
  }
});
$("#dana").on("click", function () {
  if ($("#dana").is(":checked")) {
    $(".pnum").css("display", "none");
    $(".confirm2").css("display", "block");
  }
});
$("#bca, #bni, #mandiri").on("click", function () {
  if ($("#dana, #bca, #bni, #mandiri").is(":checked")) {
    $(".pnum").css("display", "none");
    $(".confirm3").css("display", "block");
  }
});

$("#cashpay").keyup(function () {
  var rp = $(this);
  $("#showRp").html(formatRupiah(rp.val(), "Rp. "));
});

function confirmpay(id) {
  var beli = document.getElementById(id);
  var bayar = parseInt(document.getElementById("cashpay").value);
  if (bayar >= val) {
    $("#loadinggif").attr("hidden", true);
    $(".payprocess").css("display", "block");
    if (bayar - val > 0) {
      alert("Kembalian " + formatRupiah(bayar - val, "Rp. "));
    }
    if (sendDatatoPHP() == "ok") {
      alert("ok");
    }
    anime
      .timeline({ loop: true })
      .add({
        targets: ".ml8 .circle-white",
        scale: [0, 3],
        opacity: [1, 0],
        easing: "easeInOutExpo",
        rotateZ: 360,
        duration: 1100,
      })
      .add({
        targets: ".ml8 .circle-container",
        scale: [0, 1],
        duration: 1100,
        easing: "easeInOutExpo",
        offset: "-=1000",
      })
      .add({
        targets: ".ml8 .circle-dark",
        scale: [0, 1],
        duration: 1100,
        easing: "easeOutExpo",
        offset: "-=600",
      })
      .add({
        targets: ".ml8 .letters-left",
        scale: [0, 1],
        duration: 1200,
        offset: "-=550",
      })
      .add({
        targets: ".ml8 .bang",
        scale: [0, 1],
        rotateZ: [45, 0],
        duration: 2000,
        offset: "-=1000",
      })
      .add({
        targets: ".ml8",
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1400,
      });

    anime({
      targets: ".ml8 .circle-dark-dashed",
      rotateZ: 360,
      duration: 8000,
      easing: "linear",
      loop: true,
    });
    setTimeout(function () {
      $("#pay_pop").hide();
      $("#payprocess").hide();
      window.location.href = "index.html";
    }, 3000);
  } else {
    alert("Nominal uang kurang!!!");
  }
}

//after confirm
function confirmpay2() {
  $(".payprocess").css("display", "block");
  setTimeout(function () {
    $("#ewallet, #edc, #ovo, #dana, #gopay, #bca, #bni, #mandiri").prop(
      "checked",
      false
    );
    $(".pay_cash, .pay_ewallet, .pay_edc").css("display", "none");
    $(".pnum").css("display", "none");
    $("#pnum, #cashpay").val(null);
  }, 3000);
  anime
    .timeline({ loop: false })
    .add({
      targets: ".ml8 .circle-white",
      scale: [0, 3],
      opacity: [1, 0],
      easing: "easeInOutExpo",
      rotateZ: 360,
      duration: 1100,
    })
    .add({
      targets: ".ml8 .circle-container",
      scale: [0, 1],
      duration: 1100,
      easing: "easeInOutExpo",
      offset: "-=1000",
    })
    .add({
      targets: ".ml8 .circle-dark",
      scale: [0, 1],
      duration: 1100,
      easing: "easeOutExpo",
      offset: "-=600",
    })
    .add({
      targets: ".ml8 .letters-left",
      scale: [0, 1],
      duration: 1200,
      offset: "-=550",
    })
    .add({
      targets: ".ml8 .bang",
      scale: [0, 1],
      rotateZ: [45, 0],
      duration: 2000,
      offset: "-=1000",
    })
    .add({
      targets: ".ml8",
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1400,
    });

  anime({
    targets: ".ml8 .circle-dark-dashed",
    rotateZ: 360,
    duration: 8000,
    easing: "linear",
    loop: true,
  });
  setTimeout(function () {
    $("#pay_pop").hide();
    $("#payprocess").hide();
    window.location.href = "index.html";
  }, 3000);
}
var count = 0;
var cPrice = 0;
//increment decrement
function add(id, price) {
  var quan = document.getElementById("quantity" + id);
  count = parseInt(quan.innerHTML);
  price = parseInt(price);
  cPrice = price;
  count++;
  val += price;
  quan.innerHTML = count;
  if (count > 0) {
    $("li[id='" + id + "']").addClass("selected");
  } else {
    $("li[id='" + id + "']").removeClass("selected");
  }
}

function less(id, price) {
  price = parseInt(price);
  cPrice = price;
  var quan = document.getElementById("quantity" + id);
  count = parseInt(quan.innerHTML);
  if (count == 0) {
    return;
  } else {
    count--;
  }
  val -= price;
  quan.innerHTML = count;
  if (count > 0) {
    $("li[id='" + id + "']").addClass("selected");
  } else {
    $("li[id='" + id + "']").removeClass("selected");
  }
}

function sendDatatoPHP() {
  $.ajax({
    type: "post",
    url: "_config/data.php",
    data: {
      variant: variant_arr,
      sales: sales_arr,
      add: add_arr,
      qty: qty_arr,
      val: val_arr,
      menu: menu_arr,
      pay: val,
    },
    success: function (response) {
      var patt = /success/g;
      if (patt.test(response) == true) {
        return "ok";
      } else if (response == "errorerror") {
        alert("Error in data!!");
      } else {
        alert(response);
      }
    },
    error: function () {
      alert("Server have trouble!!");
    },
  });
}
