//metodo carga una imagen cargando
function loading(rta) {
    $(rta).html("<span class='fa fa-refresh fa-refresh-animate fa-2x'></span> Validando...");
}

//metodo para creacion de objecto ajax
function ajax(url, datos, rta) {
    var ajax = $.get(url, datos, function (respuesta) {
        $(rta).html(respuesta);
    });
    return ajax;
}

//function ValidarNit(nit) {
//    var url = "./php/validarnit.php?nit=" + nit;
//    var datos = {};
//    var rta = "#validanit";
//    ajax(url, datos, rta);
//}
//
//function Persona_Registrar() {  /**  mostrar formularios  */
//    var url = "PersonaInsert.html";
//    var datos = {};
//    var rta = "#mostrarcontenido";
//    ajax(url, datos, rta);
//
//}
// 
//
// 
//function Persona_Listar() {  /**  tabla de datos  */
//    var url = "Persona_list.html";
//    var datos = {};
//    var rta = "#mostrarcontenido";
//    ajax(url, datos, rta);
//
//
//}
//
//
//function Buscar_cc_2(empresa) {  /**  formulario con envio de datos  */
//
//    var url = "resportes_list_cc_tabla.html";
//    var datos = {};
//    var rta = "#mostrarcontenido2";
//    ajax(url, datos, rta);
//   
//enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 
// 
//}

function Producto_Registrar() {  /**  mostrar formularios  */
    var url = "ProductoInsertarCampesino.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function Producto_RegistrarAdmin() {  /**  mostrar formularios  */
    var url = "ProductoInsertarAdmin.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function Producto_Listar() {  /**  mostrar formularios  */
    var url = "ProductoList.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);    
    enviar("",'../back/controller/ProductoController_List.php',postProductoList); 
//    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 
    
}
function Producto_ListarAdmin() {  /**  mostrar formularios  */
    var url = "ProductoListAdmin.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    
    enviar("",'../back/controller/ProductoController_List_AdminTabla.php',postProductoListAdmin); 
//    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 
    
}
function Usuario_Listar() {  /**  mostrar formularios  */
    var url = "UsuarioList.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("",'../back/controller/UsuarioController_List.php',postUsuarioList); 
}

function Usuario_Registrar() {  /**  mostrar formularios  */
    var url = "UsuarioInsert.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function grid_Producto() {  /**  mostrar formularios  */
    var url = "gridProducto.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
function Detalle_Producto() {  /**  mostrar formularios  */
    var url = "detalleProducto.html";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
