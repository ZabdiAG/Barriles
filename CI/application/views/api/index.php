<?php
/**
 * Created by PhpStorm.
 * User: zabdi
 * Date: 5/08/15
 * Time: 06:42 PM
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
                                <th>Date</th>
                                <th>Part number</th>
                                <th class="numeric">Serie</th>
                                <th class="numeric">Tara weight</th>
                                <th class="numeric">Total length</th>
                                <th class="numeric">Total weight</th>
                                <th class="numeric">Unit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $row):?>
                            <tr>
                                <td><?php echo $row->idAPI?></td>
                                <td><?php echo $row->date?></td>
                                <td><?php echo $row->partNumber?></td>
                                <td><?php echo $row->serie?></td>
                                <td><?php echo $row->taraWeight?></td>
                                <td><?php echo $row->totalLenght?></td>
                                <td><?php echo $row->totalWeight?></td>
                                <td><?php echo $row->unit?></td>
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
                    location.reload();
                }
            );
        });
    });


</script>