$(function(){   
       $("#file0").on("change", function(){
           /* Limpiar vista previa */
           $("#vista-previa0").html('');
           var archivos = document.getElementById('file0').files;
           var navegador = window.URL || window.webkitURL;
           /* Recorrer los archivos */
           for(x=0; x<archivos.length; x++)
           {
               /* Validar tamaño y tipo de archivo */
               var type = archivos[x].type;
               var name = archivos[x].name;
               if(type !== 'image/jpeg' && type !== 'image/jpg' && type !== 'image/png' && type !== 'image/gif')
               {
                   $("#vista-previa0").append("<p style='color: red'>El archivo "+name+" no es del tipo de imagen permitida.</p>");
               }
               else
               {
                 var objeto_url = navegador.createObjectURL(archivos[x]);
                 $("#vista-previa0").append("<img src="+objeto_url+" width='380' height='250' style='padding: 5px 5px 5px 5px'>");
               }
           }
       });
       
       $("#btn").on("click", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "multiple-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
           });
       
     });