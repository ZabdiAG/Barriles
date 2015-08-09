<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 02:18 AM
 */
?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Mapa actual</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Part number</th>
                                <th>Localizacion Random</th>
                                <th class="numeric">Sufijo Random</th>
                                <th class="numeric">Localizacion servicio</th>
                                <th class="numeric">Sufijo servicio</th>
                                <th class="numeric">estacion</th>
                                <th class="numeric">EmailMRP</th>
                                <th class="numeric">Email supervisor</th>
                                <th class="numeric">Maximo servicio</th>
                                <th class="numeric">Caminares entrada</th>
                                <th class="numeric">Caminares Salida</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idMapaActual?></td>
                                    <td><?php echo $row->partNumber?></td>
                                    <td><?php echo $row->localizacionRandom?></td>
                                    <td><?php echo $row->sufijoRandom?></td>
                                    <td><?php echo $row->localizacionServicio?></td>
                                    <td><?php echo $row->sufijoServicio?></td>
                                    <td><?php echo $row->estacion?></td>
                                    <td><?php echo $row->emailMRP?></td>
                                    <td><?php echo $row->emailSupervisor?></td>
                                    <td><?php echo $row->maximoServicio?></td>
                                    <td><?php echo $row->caminaresEntrada?></td>
                                    <td><?php echo $row->caminaresSalida?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Mapa actual</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Mapa actual</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>
                <div class="form-group">
                    <label for="inputFormLocalizacionRandom">localizacion Random</label>
                    <input type="text" class="form-control" id="inputFormLocalizacionRandom">
                </div>
                <div class="form-group">
                    <label for="inputFormSufijoRandom">Sufijo random</label>
                    <input type="text" class="form-control" id="inputFormSufijoRandom">
                </div>
                <div class="form-group">
                    <label for="inputFormLocalizacionServicio">Localizacion Servicio</label>
                    <input type="text" class="form-control" id="inputFormLocalizacionServicio">
                </div>
                <div class="form-group">
                    <label for="inputFormsufijoServicio">Sufijo servicio</label>
                    <input type="text" class="form-control" id="inputFormsufijoServicio">
                </div>
                <div class="form-group">
                    <label for="inputFormEstacion">Estacion</label>
                    <input type="text" class="form-control" id="inputFormEstacion">
                </div>
                <div class="form-group">
                    <label for="inputFormEmailMRP">EmailMRP</label>
                    <input type="text" class="form-control" id="inputFormEmailMRP">
                </div>
                <div class="form-group">
                    <label for="inputFormEmailSupervisor">Email supervisor</label>
                    <input type="text" class="form-control" id="inputFormEmailSupervisor">
                </div>
                <div class="form-group">
                    <label for="inputFormMaximoServicio">Maximo servicio</label>
                    <input type="text" class="form-control" id="inputFormMaximoServicio">
                </div>
                <div class="form-group">
                    <label for="inputFormCaminaresEntrada">Caminares Entrada</label>
                    <input type="text" class="form-control" id="inputFormCaminaresEntrada">
                </div>
                <div class="form-group">
                    <label for="inputFormCaminaresSalida">Caminares salida</label>
                    <input type="text" class="form-control" id="inputFormCaminaresSalida">

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
            $.post('<?php echo base_url('index.php/MapaActual/add')?>',
                {
                    partNumber          : $('#inputFormPartNumber').val(),
                    LocalizacionRandom  : $('#inputFormLocalizacionRandom').val(),
                    sufijoRandom        : $('#inputFormSufijoRandom').val(),
                    localizacionServicio: $('#inputFormLocalizacionServicio').val(),
                    sufijoServicio      : $('#inputFormsufijoServicio').val(),
                    estacion            : $('#inputFormEstacion').val(),
                    emailMRP            : $('#inputFormEmailMRP').val(),
                    emailSupervisor     : $('#inputFormEmailSupervisor').val(),
                    maximoServicio      : $('#inputFormMaximoServicio').val(),
                    caminaresEntrada    : $('#inputFormCaminaresEntrada').val(),
                    caminaresSalida     : $('#inputFormCaminaresSalida').val()
                },
                function (data) {
                    console.log(data);
                    location.reload();
                }
            );
        });
    });


</script>
