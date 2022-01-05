$("#departamento_id").change(function(event){
    console.log($(this).val());
    $.get(`/departamento/${event.target.value}`, function(res, sta){
        console.log(res);
        $("#ciudad_id").empty();
        $("#ciudad_id").append("<option value='null'>Seleccione una ciudad...</option>");
        res.forEach(element => {
            $("#ciudad_id").append(`<option value=${element.id}>${element.nombre}</option>`);
        });
    });
});
