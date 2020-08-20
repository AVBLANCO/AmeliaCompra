/*
 -------Creado por-------
 \(x.x )/ Anarchy \( x.x)/
 ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\

var rutaBack = '../back/controller/Router.php';

/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mÃ­nimos requeridos
 */
function validarForm(idForm) {
    var form = $('#' + idForm)[0];
    for (var i = 0; i < form.length; i++) {
        var input = form[i];
        if (input.required && input.value == "") {
            return false;
        }
    }
    return true;
}

////////// CARRITO \\\\\\\\\\
function preCarritoInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "CarritoInsert";
        enviar(formData, rutaBack, postCarritoInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postCarritoInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Carrito registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preCarritoList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'CarritoList.html');
    var formData = {};
    formData["ruta"] = "CarritoList";
    enviar(formData, rutaBack, postCarritoList);
}

function postCarritoList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Carrito = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("CarritoList").appendChild(createTR(Carrito));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// CATEGORIA \\\\\\\\\\
function preCategoriaInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "CategoriaInsert";
        enviar(formData, rutaBack, postCategoriaInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postCategoriaInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Categoria registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preCategoriaList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'CategoriaList.html');
    var formData = {};
    formData["ruta"] = "CategoriaList";
    enviar(formData, rutaBack, postCategoriaList);
}

function postCategoriaList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Categoria = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("CategoriaList").appendChild(createTR(Categoria));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// FACTURA \\\\\\\\\\
function preFacturaInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "FacturaInsert";
        enviar(formData, rutaBack, postFacturaInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postFacturaInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Factura registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preFacturaList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'FacturaList.html');
    var formData = {};
    formData["ruta"] = "FacturaList";
    enviar(formData, rutaBack, postFacturaList);
}

function postFacturaList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Factura = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("FacturaList").appendChild(createTR(Factura));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// FOTO \\\\\\\\\\
function preFotoInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "FotoInsert";
        enviar(formData, rutaBack, postFotoInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postFotoInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Foto registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preFotoList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'FotoList.html');
    var formData = {};
    formData["ruta"] = "FotoList";
    enviar(formData, rutaBack, postFotoList);
}

function postFotoList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Foto = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("FotoList").appendChild(createTR(Foto));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// PRODUCTO \\\\\\\\\\
function preProductoInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "ProductoInsert";
        enviar(formData, rutaBack, postProductoInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postProductoInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Producto registrado con Exito");
        } else {
            alert("Hubo un errror en la insercion ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preProductoList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'ProductoList.html');
    var formData = {};
    formData["ruta"] = "ProductoList";
    enviar(formData, rutaBack, postProductoList);
}

function postProductoList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Producto = json[i];
                Producto.viewHrefB = 'mostrarTodo("' + Producto.idproducto + '");';
                
                // Producto.deleteHrefB = 'mostrarEliminar("' + Producto.idproducto + '");';
                //----------------- Para una tabla -----------------------
                document.getElementById("ProductoList").appendChild(createTR(Producto));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}
function postProductoListAdmin(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Producto = json[i];
                Producto.viewHrefB = 'mostrarTodo("' + Producto.idproducto + '");';               
                Producto.deleteHrefB = 'mostrarEliminar("' + Producto.idproducto + '");';
                //----------------- Para una tabla -----------------------
                document.getElementById("ProductoList").appendChild(createTR(Producto));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// PUBLICACION \\\\\\\\\\
function prePublicacionInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "PublicacionInsert";
        enviar(formData, rutaBack, postPublicacionInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postPublicacionInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Publicacion registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function prePublicacionList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'PublicacionList.html');
    var formData = {};
    formData["ruta"] = "PublicacionList";
    enviar(formData, rutaBack, postPublicacionList);
}

function postPublicacionList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Publicacion = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("PublicacionList").appendChild(createTR(Publicacion));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

////////// TIPOUSUARIO \\\\\\\\\\
function preTipousuarioInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "TipousuarioInsert";
        enviar(formData, rutaBack, postTipousuarioInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postTipousuarioInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Tipousuario registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preTipousuarioList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'TipousuarioList.html');
    var formData = {};
    formData["ruta"] = "TipousuarioList";
    enviar(formData, rutaBack, postTipousuarioList);
}

function postTipousuarioList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Tipousuario = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("TipousuarioList").appendChild(createTR(Tipousuario));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}




////////// USUARIO \\\\\\\\\\
function preUsuarioInsert(idForm) {
    //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
    if (validarForm(idForm)) {
        var formData = $('#' + idForm).serialize();
        formData["ruta"] = "UsuarioInsert";
        enviar(formData, rutaBack, postUsuarioInsert);
    } else {
        alert("Debe llenar los campos requeridos");
    }
}

function postUsuarioInsert(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
    if (state == "success") {
        if (result == "true") {
            alert("Usuario registrado con Ã©xito");
        } else {
            alert("Hubo un errror en la inserciÃ³n ( u.u)\n" + result);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

function preUsuarioList(container) {
    //Solicite informaciÃ³n del servidor
    cargaContenido(container, 'UsuarioList.html');
    var formData = {};
    formData["ruta"] = "UsuarioList";
    enviar(formData, rutaBack, postUsuarioList);
}

function postUsuarioList(result, state) {
    //Maneje aquÃ­ la respuesta del servidor.
    if (state == "success") {
        var json = JSON.parse(result);
        if (json[0].msg == "exito") {

            for (var i = 1; i < Object.keys(json).length; i++) {
                var Usuario = json[i];
                //Producto.updateHrefB = 'mostrarActualizar("' + Producto.idproducto + '");';

                Usuario.viewHrefB = 'mostrarTodo("' + Usuario.idUsuario + '");';
                Usuario.updateHrefB = 'mostrarActualizar("' + Usuario.idUsuario + '");';

                //----------------- Para una tabla -----------------------
                document.getElementById("UsuarioList").appendChild(createTR(Usuario));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
        } else {
            alert(json[0].msg);
        }
    } else {
        alert("Hubo un errror interno ( u.u)\n" + result);
    }
}

//That`s all folks!