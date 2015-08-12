<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 7/08/15
 * Time: 01:52 PM
 */

?>




<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Bajas</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th class="numeric">ID</th>
                                <th>Sloc inicial</th>
                                <th>Sloc Destino</th>
                                <th class="numeric">Is baja SAP</th>
                                <th class="numeric">Serie maestro</th>
                                <th class="date">Date baja</th>
                                <th class="text">Documento</th>
                                <th class="numeric">Ajuste cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idBaja         ?></td>
                                    <td><?php echo $row->slocInicial    ?></td>
                                    <td><?php echo $row->slocDestino    ?></td>
                                    <td><?php echo $row->isBajaSAP      ?></td>
                                    <td><?php echo $row->serieMtro      ?></td>
                                    <td><?php echo $row->dateBaja       ?></td>
                                    <td><?php echo $row->documento      ?></td>
                                    <td><?php echo $row->ajusteCantidad ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Baja</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Baja </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormSlocInicial">Sloc inicial</label>
                    <input type="text" class="form-control" id="inputFormSlocInicial">
                </div>
                <div class="form-group">
                    <label for="inputFormSlocDestino"> Sloc Destino</label>
                    <input type="text" class="form-control" id="inputFormSlocDestino">
                </div>
                <div class="form-group">
                    <label for="inputFormIsBajaSap"> isBajaSAP</label>
                    <input type="text" class="form-control" id="inputFormIsBajaSap">
                </div>
                <div class="form-group">
                    <label for="inputFormDateBaja"> Date baja</label>
                    <input type="datetime-local" class="form-control" id="inputFormDateBaja">
                </div>
                <div class="form-group">
                    <label for="inputFormDocumento"> Documento</label>
                    <input type="text" class="form-control" id="inputFormDocumento">
                </div>
                <div class="form-group">
                    <label for="inputFormAjusteCantidad"> Ajuste cantidad</label>
                    <input type="text" class="form-control" id="inputFormAjusteCantidad">
                </div>

                <div class="form-group">
                    <label for="inputFormIdDetalleMaestro">Maestro Series:</label>
                    <select class="form-control" id="inputFormIdDetalleMaestro">
                        <?php foreach($detalleMaestro as $row):?>
                            <option value="<?php echo $row->idDetalleMaestro?>"><?php echo $row->serie.' Tipo movimiento :'.$row->tipoMovimiento?></option>
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
            $.post('<?php echo base_url('index.php/Bajas/add')?>',
                {
                    slocInicial     : $('#inputFormSlocInicial').val(),
                    slocDestino     : $('#inputFormSlocDestino').val(),
                    isBajaSAP       : $('#inputFormIsBajaSap').val(),
                    idDetalleMaestro: $('#inputFormIdDetalleMaestro').val(),
                    dateBaja        : $('#inputFormDateBaja').val(),
                    documento       : $('#inputFormDocumento').val(),
                    ajusteCantidad  : $('#inputFormAjusteCantidad').val()
                },
                function (data) {
                    console.log(data);
                    location.reload();
                }
            );
        });
    });


</script>