$(document).ready(function () {
    //Show | Hide Discount Option -> Bill
    $(".disc").hide();
    $("select[name=discount_option]").on("change", function () {
        // hide optional element(s)
        $(".disc").hide();

        $("select[name=discount_option] option:selected").each(function () {
            var value = $(this).val();
            if (value == "Percentage") {
                $(".disc").show();
                $("#option1").hide();
            }
            if (value == "Fixed Amount") {
                $(".disc").show();
                $("#option2").hide();
            }
        });
    });
    $(document).on("click", "#checkAll", function () {
        $(".itemRow").prop("checked", this.checked);
    });
    $(document).on("click", ".itemRow", function () {
        if ($(".itemRow:checked").length == $(".itemRow").length) {
            $("#checkAll").prop("checked", true);
        } else {
            $("#checkAll").prop("checked", false);
        }
    });
    var count = $(".itemRow").length;
    $(document).on("click", "#addRows", function () {
        count++;
        var htmlRows = "";
        htmlRows += "<tr>";
        htmlRows += '<td><input class="itemRow" type="checkbox"></td>';
        htmlRows +=
            '<td class="text-center"><input type="text" class="form-control " id="description_' +
            count +
            '" name="item_description" autocomplete="off" required></td>';
        htmlRows +=
            '<td class="text-center"><input type="text" class="form-control " id="part_no_' +
            count +
            '" name="part_no" autocomplete="off"></td>';
        htmlRows +=
            '<td class="text-center"><input type="text" class="form-control " id="uom_' +
            count +
            '" name="uom" autocomplete="off"></td>';
        htmlRows +=
            '<td class="text-center"><input type="text" class="form-control quantity" id="quantity_' +
            count +
            '" name="quantity" autocomplete="off" required></td>';
        htmlRows +=
            '<td class="text-center"><input type="text" class="form-control price" id="unit_price_' +
            count +
            '" name="unit_price" autocomplete="off" required></td>';
        htmlRows +=
            '<td class="text-end"><input type="text" class="form-control amount" id="amount_' +
            count +
            '" name="amount" autocomplete="off" required></td>';
        htmlRows += "</tr>";
        $("#billItem").append(htmlRows);
    });

    $(document).on("click", "#removeRows", function () {
        $(".itemRow:checked").each(function () {
            $(this).closest("tr").remove();
            // var id = $("[id^='unit_price_']").attr("id");
            // id = id.replace("unit_price_", "");
            // $.ajax({
            //     url: "{{url('billDetails/destroy')}}",
            //     type: "DELETE",
            //     dataType: "json",
            //     data: { id: id },
            //     success: function () {
            //         $(this).closest("tr").remove();
            //     },
            // });
        });

        // $(document).on("click", ".deleteInvoice", function () {
        //     var id = $(this).attr("id");
        //     if (confirm("Are you sure you want to remove this?")) {
        //         $.ajax({
        //             url: "action.php",
        //             method: "POST",
        //             dataType: "json",
        //             data: { id: id, action: "delete_invoice" },
        //             success: function (response) {
        //                 if (response.status == 1) {
        //                     $("#" + id)
        //                         .closest("tr")
        //                         .remove();
        //                 }
        //             },
        //         });
        //     } else {
        //         return false;
        //     }
        // });

        $("#checkAll").prop("checked", false);
        calculateAmount();
    });
    $(document).on("input", "[id^=quantity_]", function () {
        calculateAmount();
    });
    $(document).on("input", "[id^=unit_price_]", function () {
        calculateAmount();
    });
    $(document).on("input", "#vat_rate", function () {
        calculateAmount();
    });
    $(document).on("input", "#discount1", function () {
        $("#discount2").val("");
        calculateAmount();
    });
    $(document).on("input", "#discount2", function () {
        $("#discount1").val("");
        calculateAmount();
    });
});

function calculateAmount() {
    var totalAmount = 0;
    var subTotal = 0;
    $("[id^='unit_price_']").each(function () {
        var id = $(this).attr("id");
        id = id.replace("unit_price_", "");
        var price = $("#unit_price_" + id).val();
        var quantity = $("#quantity_" + id).val();
        // if (!quantity) {
        //     quantity = 1;
        // }
        var amount = price * quantity;
        $("#amount_" + id).val(parseFloat(amount));
        subTotal += amount;
    });

    $("#subTotal").val(parseFloat(subTotal));
    var vat_rate = $("#vat_rate").val();
    // var subTotal = $("#subTotal").val();
    var discount1 = $("#discount1").val(); //fixed
    var discount2 = $("#discount2").val(); //percentage
    if (subTotal) {
        var vat = subTotal * (vat_rate / 100);
        $("#vat").val(vat);
        var totalAftertax = parseFloat(subTotal) + parseFloat(vat);
        $("#totalAftertax").val(totalAftertax);

        $("#total").val(parseFloat(totalAftertax));
        if (discount1) {
            $("#total").val(parseFloat(totalAftertax - discount1));
        }
        if (discount2) {
            $("#total").val(
                parseFloat(totalAftertax - (discount2 / 100) * totalAftertax)
            );
        }
        // $("#total").val(parseFloat(totalAftertax - discount1)) ||
        //     $("#total").val(
        //         parseFloat(totalAftertax - (discount2 / 100) * totalAftertax)
        //     );
    }
}
