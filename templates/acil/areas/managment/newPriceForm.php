<!-- DATOS PARA CONSTRUIR FUNCION -->
<?php
        $inputForm = "form";
        $routeProcess = "newPriceProcessGenerate.php";
        $generalCanvas = "principal";
        $table = "";
        $elementsToHide = "formulario, verCoti"; 
        $optionalFunction = "reloadPage()";

        #CONSTRUCCIÓN DE FUNCIÓN
        $functionParameters = " 
        getProcessForm(
            '{$inputForm}',  
            '{$routeProcess}', 
            '{$generalCanvas}', 
            '{$table}', 
            '{$elementsToHide}', 
            {$optionalFunction}
        );
        showBarProgress();
                            ";
?>

<!-- Formulario de Contrato -->
<div id="formulario" class="container p-5 mb-5">
  <form id="form">
    <div class="container-sm container_form_custom">

    <!-- Fecha -->
    <div class="d-flex justify-content-end align-items-center gap-2">
        <?php
            date_default_timezone_set('America/Mexico_City');
            $fecha = date('d-m-Y');
        ?>
        <label for="fecha" class="form-label label-custom">Fecha:</label>
          <div class="col-md-2 mb-2">
            <input type="text" class="text-center form-control form-input" id="fecha" name="fecha" value='<?php echo $fecha?>' disabled>
          </div>
    </div>
    
    <hr><center><p class="fs-5"><b>DATOS DEL CLIENTE</b></p></center><hr>

    <!-- --- DATOS DE CLIENTE --- -->
    <!-- Nombre, Telefono - Email -->
    <div class="mb-3">
        <div class="row mb-3">
          <div class="col-md-5 mb-2">
            <input type="text" class="form-control form-input" id="nombre" name="nombre" placeholder="Nombre/Razón Social" required>
            <div class="invalid-feedback">Introduce el nombre/razón social</div>
          </div>
          <div class="col-md-3 mb-2">
            <input type="text" class="form-control form-input" placeholder="Telefono" id="telefono" name="telefono" required>
            <div class="invalid-feedback">Introduce telefono</div>
          </div>
          <div class="col-md-4 mb-2">
            <input type="text" class="form-control form-input" placeholder="Email" id="email" name="email" required>
            <div class="invalid-feedback">Introduce email</div>
          </div>
        </div>
    </div>

    <hr><center><p class="fs-5"><b>SERVICIOS A COTIZAR</b></p></center><hr>

    <!-- Servicio 1 -->
    <div  id="containerServices1" class="row mt-3 mb-3">
        <div class="col-md-9"><!-- Tipo de Servicio -->
            <label for="typeService1" class="form-label label-custom">Servicio:</label>
            <input class="form-select" name="typeService1" id="typeService1" aria-label="Default select example" required></input>
            <div class="invalid-feedback">Ingrese Tipo de Servicio</div>
        </div>

        <div class="col-md-3"><!-- Costo -->
            <label for="costo1" class="form-label label-custom">Costo($):</label>
            <input type="number" class="form-control form-input" id="costo1" name="costo1" required>
            <div class="invalid-feedback">Introduce costo</div>
        </div>

    </div>

    <!-- Servicio 2 -->
    <div  id="containerServices2" class="row mt-3 mb-3">
        <div class="col-md-9"><!-- Tipo de Servicio 2 -->
            <label for="typeService2" class="form-label label-custom">Servicio:</label>
            <input class="form-select" name="typeService2" id="typeService2" aria-label="Default select example"></input>
            <div class="invalid-feedback">Ingrese Tipo de Servicio</div>
        </div>

        <div class="col-md-3"><!-- Costo 2-->
            <label for="costo2" class="form-label label-custom">Costo($):</label>
            <input type="number" class="form-control form-input" id="costo2" name="costo2">
            <div class="invalid-feedback">Introduce costo</div>
        </div>

    </div>

    <!-- Servicio 3 -->
    <div  id="containerServices3" class="row mt-3 mb-3">
        <div class="col-md-9"><!-- Tipo de Servicio 3 -->
            <label for="typeService3" class="form-label label-custom">Servicio:</label>
            <input class="form-select" name="typeService3" id="typeService3" aria-label="Default select example"></input>
            <div class="invalid-feedback">Ingrese Tipo de Servicio</div>
        </div>

        <div class="col-md-3"><!-- Costo 3-->
            <label for="costo3" class="form-label label-custom">Costo($):</label>
            <input type="number" class="form-control form-input" id="costo3" name="costo3">
            <div class="invalid-feedback">Introduce costo</div>
        </div>

    </div>    

     <!-- ------------------ CON O SIN IVA ----------------------------------------- -->
     <div  id="containerTotal" class="row mt-3 mb-3 justify-content-end">
        <div class="col-md-3 "><!-- CON O SIN IVA -->
            <label for="addIva" class="form-label label-custom">Incluye IVA?:</label>
            <select class="form-select" name="addIva" id="addIva">
                <option value="0">No</option>
                <option value="1">Si</option>
            </select>
        </div>
    </div>

    <!-- ------------------------TOTAL----------------------------------------- -->
    <div  id="containerTotal" class="row mt-3 mb-3 justify-content-end">
        <div class="col-md-3 "><!-- TOTAL -->
            <label for="total" class="form-label label-custom">TOTAL($):</label>
            <input type="number" class="form-control form-input" id="total" name="total" disabled required>
        </div>
    </div>

    
    <div class="container mt-5 d-flex justify-content-center align-items-center gap-2">
        <center><button type="button" id="addService" class="btn btn-primary text-center btn-custom">Agregar Servicio</button></center>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary btn-custom dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Opciones
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="verCot">Ver Cotización</a></li>
                <?php
                    //Se asigna boton para generar cotizacion
                    $btn="<li><a class='dropdown-item' onclick=\"{$functionParameters}\">Enviar Cotización</a></li>";
                    echo $btn;
                ?>
                <li><a class="dropdown-item" href="newPrice.php">Nueva Cotización</a></li>
                </ul>
            </div>
        </div>

        
    </div>

    </div>
  </form>
</div>

<!-- ------------------- Barra de progreso ------- -->
<div class="progressBarContainer mt-5" id="progressBarEmail">
    <div class="progress" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" style="width: 100%"></div>
    </div>
    <h4 class="mt-3 text-center">Enviando cotización ...</h4>
</div>

<div class="d-flex justify-content-center align-items-center flex-column principalCustom" id="principal"></div>

<script>
    function reloadPage(){
        $('#verCoti').hide()
        $('#progressBarEmail').hide()
        $('#containerServices2').hide()
        $('#containerServices3').hide()
    }   
</script>

<script>
    let a=0
    
    //Funion que muestra partida 2 y 3
    function addService(){
      if(a==0){
        $('#containerServices2').show()
        $('#typeService2').attr('required', 'required');
        $('#costo2').attr('required', 'required');
      }

      else if(a==1){
        $('#containerServices3').show()
        $('#typeService3').attr('required', 'required');
        $('#costo3').attr('required', 'required');
      }

      else{
        alert("Por el momento no se pueden agregar mas partidas, consulte al administrador")
      }

      a+=1
    }

    $(document).ready(function() {

        // Función para enviar el formulario mediante AJAX para ver cotizacion
        function verCotizacion() {
            // Obtener los valores de los campos del formulario
            var verifyCot=1
            var fecha = $("#fecha").val()
            var nombre = $("#nombre").val()
            var telefono = $("#telefono").val()
            var email = $("#email").val()

            //Valores de Primera Partida
            var typeService1 = $("#typeService1").val()
            var costo1 = $("#costo1").val()

            //Valores de Segunda Partida
            var typeService2 = $("#typeService2").val()
            var costo2 = $("#costo2").val()

            //Valores de Tercera Partida
            var typeService3 = $("#typeService3").val()
            var costo3 = $("#costo3").val()
           
            var addIva = $("#addIva").val()
            var total = $("#total").val()

            // Objeto con los datos del formulario
            var formData = {
                verifyCot: verifyCot,
                fecha: fecha,
                nombre: nombre,
                telefono: telefono,
                email: email,
                typeService1: typeService1,
                costo1: costo1,
                typeService2: typeService2,
                costo2: costo2,
                typeService3: typeService3,
                costo3: costo3,
                addIva: addIva,
                total: total
            };

            // Enviar los datos mediante AJAX
            $.ajax({
                type: "POST",
                url: "newPriceProcessGenerate.php",
                data: formData,
                success: function(result) {
                    $('#principal').html(result)
                }
            });
        }

        // Evento de clic para enviar el formulario
        $("#verCot").click(function() {
            verCotizacion()
        });

        //Oculta partidas al momento de iniciar
        $('#progressBarEmail').hide()
        $('#containerServices2').hide()
        $('#containerServices3').hide()
        $('#addService').click(addService)
        //Asigan valores en cero
        $('#costo1').val(0)
        $('#costo2').val(0)
        $('#costo3').val(0)

        //----------- FUNCIONES CHANGE PARA PRIMERA PARTIDA DE COTIZACION -------------

        $('#typeService1').on('input', function() {
                var maxLength = 200;
                var currentLength = $(this).val().length;
                if (currentLength > maxLength) {
                   alert("La descripción del servicio permite máximo 200 caracteres")
                }
        });

        //Funcion que se ejecuta cuando se cambia el costo del servicio seleccionado 
        $("#costo1").change(()=>{
            $('#total').val(parseInt($('#costo1').val())+parseInt($('#costo2').val())+parseInt($('#costo3').val()))
        })
        //------------------------------------------------------------------------------------------

        //----------- FUNCIONES CHANGE PARA SEGUNDA PARTIDA DE COTIZACION -------------

        $('#typeService2').on('input', function() {
                var maxLength = 200;
                var currentLength = $(this).val().length;
                if (currentLength > maxLength) {
                   alert("La descripción del servicio permite máximo 200 caracteres")
                }
        });

        //Funcion que se ejecuta cuando se cambia el costo del servicio seleccionado 
        $("#costo2").change(()=>{
            $('#total').val(parseInt($('#costo1').val())+parseInt($('#costo2').val())+parseInt($('#costo3').val()))
        })

         //----------- FUNCIONES CHANGE PARA TERCERA PARTIDA DE COTIZACION -------------

        //Funcion que se ejecuta cuando se cambia el costo del servicio seleccionado 
        $('#typeService3').on('input', function() {
                var maxLength = 200;
                var currentLength = $(this).val().length;
                if (currentLength > maxLength) {
                   alert("La descripción del servicio permite máximo 200 caracteres")
                }
        });

        $("#costo3").change(()=>{
            $('#total').val(parseInt($('#costo1').val())+parseInt($('#costo2').val())+parseInt($('#costo3').val()))
        })

    });

</script>
