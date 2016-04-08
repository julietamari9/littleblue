$(document).ready(function(){
  var pagina = 0;
    
    get_data();

    $('.letra').click(function(){
      
      var letra = $(this).data('letra');
      get_by_letter(letra);
    });

    $('.ver-mas').click(function(){
      
        pagina+=10;
        get_data(pagina);

    });   

    $('.atras').click(function(){
        if (pagina!=0){
          pagina-=10;
        }
        get_data(pagina);

    });   

      $('#buscar').on('keyup',function(){
      
        var palabra = $(this).val();
        get_like(palabra);

    });   

});



  function get_data(pagina)
    {
          $.ajax({
            url : "./colegios/get_all",
            data : {pagina:pagina},
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              
           
             var td = "";
             if (data.length > 0){
                  $.each(data, function (index, value) {
                     
                        td += "<tr>";
                        td += "<td>" + value.id_colegio + "</td>";
                        td += "<td>" + value.nombre + "</td>";
                        td += "</tr>";
                    });
                
              }
              else
                  {
                    td += "<tr><td> No hay registro </td></tr>";
                  }

               
               $('tbody').html(td);
               
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //
            }
        });
    }


     function get_by_letter(letra)
    {
          $.ajax({
            url : "./colegios/get_by_letter",
            data : {letra:letra},
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              
           //   $('#tabla-colegios').html();
            var td = "";

             if (data.length > 0){
                $.each(data, function (index, value) {
                  td += "<tr>";
                  td += "<td>" + value.id_colegio + "</td>";
                  td += "<td>" + value.nombre + "</td>";
                  td += "</tr>";
                });
              }else{
                    td += "<tr><td> No hay registro </td></tr>";
                  }
               $('tbody').html(td);
               
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //
            }
        });
    } 

         function get_like(search)
    {
          $.ajax({
            url : "./colegios/get_like",
            data : {search:search},
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