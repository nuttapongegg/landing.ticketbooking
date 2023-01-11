function buyTickets(id) {
  $(".btnCancel").text("ยกเลิก");
  $(".btnSave").css("display", "block");
  $("#modalChoose_Number").modal("show");
  var str_split_result = id.split("###");
  var id_user = str_split_result[0];
  var name_user = str_split_result[1];
  var id_tickets = str_split_result[2];
  var count_tickets_in_stock = str_split_result[3];
  var tickets_price = str_split_result[4];
  var count_tickets_in_stock_old = str_split_result[5];




  $("#numlabel").html(
    '<label for="number_select" id="numlabel" style="text-align: center;">กรอกจำนวนบัตร (<front style="color: red;">คงเหลือ: ' +
      count_tickets_in_stock +
      " </front>)</label>"
  );
  $("#number_select").attr("max", count_tickets_in_stock);
  $("#number_select").attr("min", 0);
  $("#number_select").on("keydown keyup", function () {
    var max = parseInt($(this).attr("max"));
    if ($(this).val() > max) {
      $(this).val(max);
    }
  });

  $(".btnSave").on("click", function () {
    let min = parseInt($("#number_select").attr("min"));
    let null_text = $("#number_select").val();
    if (null_text == "" || null_text <= min) {
      alert("กรุณากรอกจำนวน");
    } 
    else
     {
      let buy_ticket = $("#number_select").val();
      let count_tickets_in_stock_update =  parseInt(buy_ticket) + parseInt(count_tickets_in_stock_old);
      let price_sum = buy_ticket * tickets_price;
      let dataObj = {
        id_user,
        name_user,
        id_tickets,
        buy_ticket,
        price_sum,
        count_tickets_in_stock_update,
      };
      $.ajax({
        type: "POST",
        url: "/qrCreate",
        contentType: "application/json; charset=utf-8;",
        processData: false,
        data: JSON.stringify(dataObj),
        success: function (response) {
          if (response.message == "กรุณาลองใหม่อีกครั้งหลัง 1 นาที") {
            alert("กรุณาลองใหม่อีกครั้งหลัง 1 นาที");
          } else {
            $("#QR_code").html(
              "<div style='align: center;' class='mb-3'><img src='https://chart.googleapis.com/chart?cht=qr&chl=" +
                response.data.qrcode +
                "&chs=160x160&chld=L|0' class='qr-code img-thumbnail img-responsive' /></div>"
            );

            $('#QR_price').html("<div style='align: center;'>แสกนเพื่อชำระเงิน (จำนวน "+ buy_ticket +" ใบ) "+response.data.amount_format+" บาท</div>");

            $(".btnCancel").text("ปิด");
            $(".btnSave").css("display", "none");

           
            var timerId = setInterval(countdown, 1000);
            var timeLeft = 180;

              function countdown() {
                if (timeLeft == -1) {
                  clearTimeout(timerId);
                  // ทำอะไร
                  $("#modalChoose_Number").modal("hide");
                  $('#number_select').val('');
                  $("#QR_code").html('<div style="display: flex; justify-content: center;" id="QR_code"></div>');
                  $('#QR_price').html('<div style="display: flex; justify-content: center;" id="QR_price"></div>');
          
                  $.ajax({
                      type: 'get',
                      url: '/qrCancel',
                      contentType: 'application/json; charset=utf-8;',
                      processData: false,
                  });

                  window.location.reload();

                } else {
                  $(".btnCancel").text("ปิด (" + timeLeft + ")");
                  $('#number_select').val('');
                  getStatusLink();
                  timeLeft--;
                }
              }
          }
        },
      });
    }
  });
}


function getStatusLink(){
  $.ajax({
    type: 'get',
    url: '/status_link',
    contentType: 'application/json; charset=utf-8;',
    processData: false,
    success:  function (response) {
      var result = JSON.parse(response.message);

      if(result.id != null)
      {
        $('#QR_price').html('<div style="display: flex; justify-content: center;" id="QR_price"></div>');
        $("#QR_code").html('<div style="display: flex; justify-content: center;" class="mb-3 mt-3" id="QR_code"><a href="https://web.facebook.com/groups/870632387307392/?ref=share&mibextid=S66gvF&_rdc=1&_rdr" target="_blank"><font style="font-size:20px;"> คลิกเพื่อเข้ากลุ่ม facebook</font></a></div>');
      }
    }
});
}