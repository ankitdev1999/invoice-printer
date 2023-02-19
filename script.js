$(document).ready(function () {
//     JQ START

    // date PICker default function
    $(function () {
        $("#datepicker").datepicker();
        $.datepicker.formatDate("dd-mm-yy", new Date(2007, 1 - 1, 26));
        $("#datepicker").datepicker("option", "defaultDate", +7);

    });

    // Auto serial no handler
    function sno() {
        let sno = 1;
        $(".sno").each(function () {

            $(this).val(sno);
            sno++
        })

    }

    // add row btn listener

    $("#btn-add-row").click(function () {
        let row = `  <tr>

                    <td><input readonly class="form-control sno" type="text" value="${sno}" name="sno[]"></td>
                    <td><input class="form-control" type="text" name="pname[]" required></td>
                    <td><input class="form-control price" type="number" name="price[]" required></td>
                    <td><input class="form-control qt" type="number" name="qt[]" required></td>
                    <td><input class="form-control total" type="number" name="total[]" required></td>
                    <td><input class="btn btn-danger btn-row-remove btn-sm" type="button" value="X"></td>

                </tr>`
        $("#product-body").append(row)
            sno()


    })


    // grand total function call
    function grandtotal() {
        var grand_total = 0;
        $(".total").each(function (i, v) {

            grand_total += Number($(this).val());
        })
        $("#g_total").val(Number(grand_total));

    }


    // Appy listener on all row -remove btn
    $(document).on("click", ".btn-row-remove", function () {
        if (confirm("Are You shure")) {
            $(this).closest("tr").remove()
            sno()
            grandtotal()

        }

    })


    // apply listener on price keyup
    $(document).on("keyup", ".price", function () {
        var price = $(this).val()
        var qt = $(this).closest("tr").find(".qt").val()
        var total = $(this).closest("tr").find(".total").val(price * qt)

        grandtotal()
    })

// apply listener on qt keyup
    $(document).on("keyup", ".qt", function () {
        var qt = $(this).val()
        var price = $(this).closest("tr").find(".price").val()
        var total = $(this).closest("tr").find(".total").val(price * qt)

        grandtotal()

    })
    $("#save_inv").click(function () {
        // document.getElementById("myForm").reset();

    });



    // JQ END
})

