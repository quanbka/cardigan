<?php
  global $product;
?>
<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
  <div class="product-block product-resize ">
    <div class="product-img ">
      <a href="<?php echo $product->get_permalink() ?>" title="<?php echo $product->get_title() ?>" class="image-resize ratiobox">
        <?php
          $image1 = wp_get_attachment_url($product->get_image_id());
          $image2 = wp_get_attachment_url($product->get_gallery_image_ids()[0]);
        ?>
        <picture>

          <img class="lazyload img-loop" data-sizes="auto"
            data-src="<?php echo $image1 ?>"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" <?php echo $product->get_title() ?> " />
        </picture>
        <picture>
          <img class="img-loop img-hover lazyload" data-src="<?php echo $image2 ?>"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" <?php echo $product->get_title() ?> " />
        </picture>
      </a>

      <div class="pro-price-mb">
        <span class="pro-price"><?php echo $product->get_price_html() ?></span>
      </div>
    </div>
    <div class="product-detail clearfix">
      <div class="box-pro-detail">
        <h3 class="pro-name">
          <a href="<?php echo $product->get_permalink() ?>" title="<?php echo $product->get_title() ?>">
            <?php echo $product->get_title() ?>
          </a>
        </h3>
        <div class="box-pro-prices">
          <p class="pro-price ">
            <span><?php echo $product->get_price_html() ?></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
