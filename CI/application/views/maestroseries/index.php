<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 08:03 PM
 */?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Maestro series</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th class="numeric">Serie</th>
                                <th>Part number</th>
                                <th class="numeric">Std pack</th>
                                <th class="numeric">Ubicacion</th>
                                <th class="numeric">Fecha alta</th>
                                <th class="numeric">Fecha update</th>
                                <th class="numeric">Peso inicial</th>
                                <th class="numeric">Peso restante</th>
                                <th class="numeric">Cantidad restante</th>
                                <th class="numeric">Peso contenedor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idMaestroSerie?></td>
                                    <td><?php echo $row->serie?></td>
                                    <td><?php echo $row->partNumber?></td>
                                    <td><?php echo $row->stdPack?></td>
                                    <td><?php echo $row->ubicacion?></td>
                                    <td><?php echo $row->fechaAlta?></td>
                                    <td><?php echo $row->fechaUpdate?></td>
                                    <td><?php echo $row->pesoInicial?></td>
                                    <td><?php echo $row->pesoRestante?></td>
                                    <td><?php echo $row->cantidadRestante?></td>
                                    <td><?php echo $row->pesoContenedor?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Maestro Series</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Maestro series </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>
                <div class="form-group">
                    <label for="inputFormStdPack">Std pack</label>
                    <input type="text" class="form-control" id="inputFormStdPack">
                </div>
                <div class="form-group">
                    <label for="inputFormUbicacion"> Ubicacion</label>
                    <input type="text" class="form-control" id="inputFormUbicacion">
                </div>
                <div class="form-group">
                    <label for="inputFormFechaAlta"> Fecha alta</label>
                    <input type="datetime-local" class="form-control" id="inputFormFechaAlta">
                </div>
                <div class="form-group">
                    <label for="inputFormFechaUpdate"> Fecha Update</label>
                    <input type="datetime-local" class="form-control" id="inputFormFechaUpdate">
                </div>
                <div class="form-group">
                    <label for="inputFormPesoInicial"> Peso inicial</label>
                    <input type="text" class="form-control" id="inputFormPesoInicial">
                </div>
                <div class="form-group">
                    <label for="inputFormPesoRestante"> Peso restante</label>
                    <input type="text" class="form-control" id="inputFormPesoRestante">
                </div>
                <div class="form-group">
                    <label for="inputFormCantidadRestante"> Cantidad restante</label>
                    <input type="text" class="form-control" id="inputFormCantidadRestante">
                </div>
                <div class="form-group">
                    <label for="inputFormPesoContenedor"> Peso contenedor</label>
                    <input type="text" class="form-control" id="inputFormPesoContenedor">
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="btnConfirmAdd" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal -->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        UP
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->




<script>
    $( document ).ready(function () {
        $('#btnAgregarApi').click(function () {
        });

        $('#btnConfirmAdd').click(function () {
            console.log('clicked');
            $.post('<?php echo base_url('index.php/MaestroSeries/add')?>',
                {
                    serie           : $('#inputFormSerie').val(),
                    partNumber      : $('#inputFormPartNumber').val(),
                    stdPack         : $('#inputFormStdPack').val(),
                    ubicacion       : $('#inputFormUbicacion').val(),
                    fechaAlta       : $('#inputFormFechaAlta').val(),
                    fechaUpdate     : $('#inputFormFechaUpdate').val(),
                    pesoInicial     : $('#inputFormPesoInicial').val(),
                    pesoRestante    : $('#inputFormPesoRestante').val(),
                    cantidadRestante: $('#inputFormCantidadRestante').val(),
                    pesoContenedor  : $('#inputFormPesoContenedor').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
