<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 10:13 PM
 */?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Detalle maestro</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Tipo movimiento</th>
                                <th>Fecha</th>
                                <th>Peso actual</th>
                                <th>Consumo Kg</th>
                                <th>Consumo longitud</th>
                                <th>Localizacion</th>
                                <th>Gafete</th>
                                <th>Maestro serie</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idDetalleMaestro?></td>
                                    <td><?php echo $row->tipoMovimiento?></td>
                                    <td><?php echo $row->fecha?></td>
                                    <td><?php echo $row->pesoActual?></td>
                                    <td><?php echo $row->consumoKg?></td>
                                    <td><?php echo $row->consumoLongitud?></td>
                                    <td><?php echo $row->localizacion?></td>
                                    <td><?php echo $row->gafete?></td>
                                    <td><?php echo $row->serie?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Detalle maestro</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Detalle maestro</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormTipoMovimiento"> Tipo movimiento</label>
                    <input type="text" class="form-control" id="inputFormTipoMovimiento">
                </div>
                <div class="form-group">
                    <label for="inputFormFecha"> Fecha</label>
                    <input type="date" class="form-control" id="inputFormFecha">
                </div>
                <div class="form-group">
                    <label for="inputFormPesoActual"> Peso actual</label>
                    <input type="text" class="form-control" id="inputFormPesoActual">
                </div>
                <div class="form-group">
                    <label for="inputFormConsumoKg"> Consumo Kg</label>
                    <input type="text" class="form-control" id="inputFormConsumoKg">
                </div>
                <div class="form-group">
                    <label for="inputFormConsumoLongitud"> Consumo longitud</label>
                    <input type="text" class="form-control" id="inputFormConsumoLongitud">
                </div>
                <div class="form-group">
                    <label for="inputFormLocalizacion"> Localizacion</label>
                    <input type="text" class="form-control" id="inputFormLocalizacion">
                </div>
                <div class="form-group">
                    <label for="inputFormGafete"> Gafete</label>
                    <input type="text" class="form-control" id="inputFormGafete">
                </div>
                <div class="form-group">
                    <label for="inputFormIdMaestroSerie">Maestro Series:</label>
                    <select class="form-control" id="inputFormIdMaestroSerie">
                        <?php foreach($maestroSeries as $row):?>
                        <option value="<?php echo $row->idMaestroSerie?>"><?php echo $row->serie?></option>
                        <?php endforeach ?>
                    </select>
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
            $.post('<?php echo base_url('index.php/DetalleMaestro/add')?>',
                {
                    tipoMovimiento  : $('#inputFormTipoMovimiento').val(),
                    fecha           : $('#inputFormFecha').val(),
                    pesoActual      : $('#inputFormPesoActual').val(),
                    consumoKg       : $('#inputFormConsumoKg').val(),
                    consumoLongitud : $('#inputFormConsumoLongitud').val(),
                    localizacion    : $('#inputFormLocalizacion').val(),
                    gafete          : $('#inputFormGafete').val(),
                    idMaestroSerie  : $('#inputFormIdMaestroSerie').val()

                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>
