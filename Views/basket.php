

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
Basket Controller
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название товара</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Название товара">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Адрес доставки</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Адрес доставки">
                </div>


                <button type="submit" class="btn btn-default">Заказать</button>
            </form>
        </div>
    </div>
</div>
