<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 9/08/15
 * Time: 01:49 PM
 */
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
                                <th>Serie</th>
                                <th>Part number</th>
                                <th class="numeric">SLoc inicial</th>
                                <th class="numeric">Sloc destino</th>
                                <th class="numeric">Quantity</th>
                                <th class="numeric">UOM</th>
                                <th class="numeric">Date transfer</th>
                                <th class="numeric">Is transfer</th>
                                <th class="numeric">Document number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                                <tr>
                                    <td><?php echo $row->idReversaSerie?></td>
                                    <td><?php echo $row->serie?></td>
                                    <td><?php echo $row->partNumber?></td>
                                    <td><?php echo $row->slocInicial?></td>
                                    <td><?php echo $row->slocDestino?></td>
                                    <td><?php echo $row->quantity?></td>
                                    <td><?php echo $row->uom?></td>
                                    <td><?php echo $row->dateTransfer?></td>
                                    <td><?php echo $row->isTransfer?></td>
                                    <td><?php echo $row->documentNumber?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div><!-- /row -->

        <button id="btnAddApi" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success">Add Reversa serie</button>

    </section><! --/wrapper -->
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Add Reversa serie </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputFormSerie">Serie</label>
                    <input type="text" class="form-control" id="inputFormSerie">
                </div>

                <div class="form-group">
                    <label for="inputFormPartNumber">part Number</label>
                    <input type="text" class="form-control" id="inputFormPartNumber">
                </div>

                <div class="form-group">
                    <label for="inputFormSlocInicial">Sloc inicial</label>
                    <input type="text" class="form-control" id="inputFormSlocInicial">
                </div>

                <div class="form-group">
                    <label for="inputFormSlocDestino">Sloc destino</label>
                    <input type="text" class="form-control" id="inputFormSlocDestino">
                </div>
                <div class="form-group">
                    <label for="inputFormQuantity">Quantity</label>
                    <input type="text" class="form-control" id="inputFormQuantity">
                </div>
                <div class="form-group">
                    <label for="inputFormUom">UOM</label>
                    <input type="text" class="form-control" id="inputFormUom">
                </div>
                <div class="form-group">
                    <label for="inputFormDateTransfer">Date transfer</label>
                    <input type="date" class="form-control" id="inputFormDateTransfer">
                </div>
                <div class="form-group">
                    <label for="inputFormIsTransfer">Is transfer</label>
                    <input type="text" class="form-control" id="inputFormIsTransfer">
                </div>
                <div class="form-group">
                    <label for="inputFormDocumentNumber">Document number</label>
                    <input type="text" class="form-control" id="inputFormDocumentNumber">
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
            $.post('<?php echo base_url('index.php/ReversaSeries/add')?>',
                {
                    serie       : $('#inputFormSerie').val(),
                    partNumber  : $('#inputFormPartNumber').val(),
                    slocInicial : $('#inputFormSlocInicial').val(),
                    slocDestino : $('#inputFormSlocDestino').val(),
                    quantity    : $('#inputFormQuantity').val(),
                    uom         : $('#inputFormUom').val(),
                    dateTransfer: $('#inputFormDateTransfer').val(),
                    isTransfer  : $('#inputFormIsTransfer').val(),
                    documentNumber: $('#inputFormDocumentNumber').val()
                },
                function (data) {
                    location.reload();
                }
            );
        });
    });


</script>