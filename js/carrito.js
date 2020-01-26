$(document).ready(function () {
    $(".btnEliminar").click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);
        $.ajax({
            method: 'POST',
            url: './php/eliminarCarrito.php',
            data: {
                id: id
            }
        }).done(function (respuesta) {
            boton.parent('td').parent('tr').remove();
        });
    });
    $(".txtCantidad").keyup(function () {
        var cantidad = $(this).val();
        var precio = $(this).data('precio');
        var id = $(this).data('id');
        incrementar(cantidad, precio, id);

    });
    
    function incrementar(cantidad, precio, id) {
        var mult = parseFloat(cantidad) * parseFloat(precio);
        $(".cant" + id).text("$" + mult);

    }


});