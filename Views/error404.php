<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php
                /** @var Category $category */
                foreach ($categories as $category){ ?>
                    <a href="<?php echo Rout::base_url().'category/'.$category->getSlug();?>" class="list-group-item <?php echo (isset($currentCategory) and $currentCategory->getSlug() == $category->getSlug()) ? ' active' : ''; ?>">
                        <?php echo $category->getName();?>
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="col-md-8">
            Error 404 Controller
        </div>
    </div>
</div>