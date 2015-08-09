<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 7/08/15
 * Time: 01:52 PM
 */

var_dump($data);
?>




<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Api</h3>
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

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Api</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add API </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormDate">Date</label>
                    <input type="date" class="form-control" id="inputFormDate">
                </div>
                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>
                <div class="form-group">
                    <label for="inputFormTaraWeight">Tara weight</label>
                    <input type="text" class="form-control" id="inputFormTaraWeight">
                </div>
                <div class="form-group">
                    <label for="inputFormTotalWeight">Total weight</label>
                    <input type="text" class="form-control" id="inputFormTotalWeight">
                </div>
                <div class="form-group">
                    <label for="inputFormTotalLenght">Total lenght</label>
                    <input type="text" class="form-control" id="inputFormTotalLenght">
                </div>
                <div class="form-group">
                    <label for="inputFormUnit">Unit</label>
                    <input type="text" class="form-control" id="inputFormUnit">
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
            $.post('<?php echo base_url('index.php/Api/add')?>',
                {
                    serie       : $('#inputFormSerie').val(),
                    partNumber  : $('#inputFormPartNumber').val(),
                    totalWeight : $('#inputFormTotalWeight').val(),
                    taraWeight  : $('#inputFormTaraWeight').val(),
                    totalLenght : $('#inputFormTotalLenght').val(),
                    unit        : $('#inputFormUnit').val(),
                    date        : $('#inputFormDate').val()
                },
                function (data) {
                    console.log(data);
                }
            );
        });
    });


</script>