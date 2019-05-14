<section id="work-detail" class="section work-detail">
    <div class="container-fluid">
        <div class="row">
            <? foreach ($_DATOS as $p){ ?>
                <div class="col-sm-3 portfolio-item" style="padding-top: 15px;">
                    <a href="productodetalle?id=<?=$p['id']?>" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <h4 style="min-height: 50px;"><?=$p['titulo']?></h4>
                            </div>
                        </div>
                        <img src="img/<?=$p['img']?>" class="img-responsive" alt="">
                    </a>
                </div>

            <? } ?>
        </div>
    </div>
</section>