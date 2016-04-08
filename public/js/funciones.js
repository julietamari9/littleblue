$(document).ready(function(){

    get_data();   
});



  function get_data()
    {
          $.ajax({
            url : "./colegios/get_all",
            //data : {id:id},
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              
           //   $('#tabla-colegios').html();
            var td = "";
              $.each(data, function (index, value) {
                td += "<tr>";
                td += "<td>" + value.id_colegio + "</td>";
                td += "<td>" + value.nombre + "</td>";
                td += "</tr>";
              });
               
               $('tbody').html(td);
               
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //
            }
        });
    }