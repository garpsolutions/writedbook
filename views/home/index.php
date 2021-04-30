<?php 
include("../menu_lateral.php"); 
?>
<div class="row" id="numeros" style=" margin-top:50px;">

    <div class="numero_dashboard col-md-2" style="border-right:solid 2px gray; margin-left: 50px;">
        <strong>
        <div>
            Estudiantes
        </div>
        <div style="font-size: 30px; color:gray">
        <strong>
                2,900
                </strong>
        </div>
        <div>
        <span style="color:gray">4%</span> Nuevos este año
        </div>
        </strong>
    </div>
    <div class="numero_dashboard col-md-2" style="border-right:solid 2px gray;">
        <strong>
        <div>
            Promedio por aula
        </div>
        <div style="font-size: 30px;color:gray">
            <strong>
                2,900
            </strong>
        </div>
        <div>
        <span style="color:gray">4%</span> Nuevos este año
        </div>
        </strong>
    </div>
    <div class="numero_dashboard col-md-2" style="border-right:solid 1px gray;">
    <strong>
        <div>
            Cantidad por aula
        </div>
        <div style="font-size: 30px;color:gray">
            <strong>
                2,900
            </strong>
        </div>
        <div>
        <span style="color:gray">4%</span> Nuevos este año
        </div>
    </strong>
    </div>
    <div class="numero_dashboard col-md-2" style="border-right:solid 1px gray;">
    <strong>
        <div>
            Cobros pendiente
        </div>
        <div style="font-size: 30px;color:gray">
            <strong>
                2,900
            </strong>
        </div>
        <div>
        <span style="color:gray">4%</span> del total
        </div>
        </strong>
    </div>
    <div class="numero_dashboard col-md-2" style="border-right:solid 1px gray;">
    <strong>
        <div>
            Cobros realizados
        </div>
        <div style="font-size: 30px;color:gray">
            <strong>
                2,900
            </strong>
        </div>
        <div>
           <span style="color:gray">4%</span>  del total
        </div>
        </strong>
    </div>
</div>
<div style="margin-left:50px; width:50%; float:left; margin-top: 50px; background-color:white; padding:20px;">
  <canvas id="myChart"></canvas>
</div>
<script src="../../js/lineal.js"></script>