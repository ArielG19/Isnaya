calculos.on("click", function()){
    var opcion_seleccionada = $("#id_rubro:selected").text();
    $("#vol1").val($opcion_seleccionada.text());

}
