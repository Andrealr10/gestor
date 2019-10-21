<div class="row">
    <div class="col-md-12">
        <!-- The time line -->
        <div class="timeline">
            <?php foreach ($notificaciones as $not) { ?>
                <div>
                    <i class="fas fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> <?=$not->fecha?></span>
                        <h3 class="timeline-header"><a href="#"><?=$not->username?></a> --> <?=$not->titulo?></h3>

                        <div class="timeline-body">
                            <?=$not->descripcion?>
                        </div>
                        <div class="timeline-footer">
                            <a href="<?=base_url('categoria')?>" class="btn btn-primary btn-sm">Ir a Categorias</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div>
                <i class="fas fa-clock bg-gray"></i>
            </div>
        </div>
    </div>
    <!-- /.col -->
</div>