collection.dao = {

    getCollections: function (category) {
        var funcion = "funcion=getCollections&id_category="+category;
        return $.ajax({
            url: 'controller/ConsultaController.php',
            type:'POST',
            dataType:'json',
            data: funcion
        });
    }


}
