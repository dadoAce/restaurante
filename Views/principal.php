<!DOCTYPE html>
 
<html>
    <head>
        <?php require_once 'Referencias/ref_header.php'; ?>
    </head> 
    <body>

        <?php require_once $pagina; ?> 

    </body>

</html>

<?php
require_once 'Referencias/ref_footer.php';
?>

<script>
    var total = 0;
    var contador = 0;
    $(".btn-add").click(function () {
        console.log("asdasd");
        contador++;
        var precio = $(this).val();
        var nombre = $(this).attr("data-nombre");
        var producto = $(this).attr("data-producto");
        var size = $(this).attr("data-size");
        var precioN = mystring = precio.replace('$', '');
        total = total + Number(precioN);

        var tr = "<tr id='tr_" + contador + "'><td>" + producto + "</td><td>" + nombre + "</td><td>" + size + "</td><td class='pr'>"
                + precio + "</td><td><button  class='btn-remove btn btn-warning' data-tr='tr_" + contador + "' data-precio='" + precio + "'><i class='bi bi-trash'></i></button> </td></tr>";

        $("#tabla-total tbody").append(tr);
        $("#total-pagar").html("$" + total);
        $("#btn-realizar-pedido").removeClass("d-none");
        $('#alerta-add').removeClass("d-none");
        setTimeout(function () {
            $(".alert").addClass("d-none");
        }, 2000);
    });

    $(document).on('click', '.btn-remove', function () {

        var tr = $(this).attr("data-tr");
        var precio = $(this).attr("data-precio");
        var precioN = mystring = precio.replace('$', '');
        total -= precioN;
//        console.log(total);
        console.log(total);
        $("#" + tr).remove();
        if (total == 0) {

            $("#btn-realizar-pedido").addClass("d-none");
        } else {

            $("#total-pagar").html("$" + total);
        }
        $('#alerta-remove').removeClass("d-none");
        setTimeout(function () {
            $(".alert").addClass("d-none");
        }, 2000);
    });

    $("#btn-realizar-pedido").click(function () {
        var tabla = $("#s-total").html();
        console.log("--");
        console.log(tabla);
        $(".modal-body").html(tabla);
        $(".modal-body #btn-realizar-pedido").remove();
        $(".modal-body .btn-remove").remove();
    });
</script>