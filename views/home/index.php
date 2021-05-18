<?php 
include("../menu_lateral.php"); 
?>  
<link rel="stylesheet" href="../../css/reporte.css">
<div id="perfil_estudiante" class="row" >
    <div style="background-color: white; width:80%; margin-top:50px;padding:40px; margin-left:8%;">
        <h3>Mensajería</h3>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Destinatario" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button style="float: right;" class="btn btn-primary">Enviar</button>
        </div>
        <br>
        <p>Mensajes recibidos</p>
        <hr>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Neitan:</strong> Esto solo es diseño 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Freddy:</strong> Reporta a SK Danger <div style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">Leer</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje completo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Esto es un ejemplo para leer un mensaje de texto mendiante writedbook
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Responder</button>
      </div>
    </div>
  </div>
</div>
</div>