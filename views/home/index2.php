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
            <strong>Freddy:</strong> Reporta a SK Danger
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>  
</div>

 