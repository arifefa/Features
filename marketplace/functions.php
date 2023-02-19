<?php
/*==========================================================
// Marketplace
==========================================================*/
add_shortcode('marketplace_group', 'single_product_marketplace');
function single_product_marketplace(){
    echo "<div class='stack stack-row justify-between items-stretch stack-marketplace mb'>";
    if( have_rows('marketplace') ):
        while( have_rows('marketplace') ) : the_row(); 
        $tokped = get_sub_field( "tokped" );
        $shopee = get_sub_field( "shopee" );
        $lazada = get_sub_field( "lazada" );
        $blibli = get_sub_field( "blibli" );
        $tiktok = get_sub_field( "tiktok" );
        if( $tokped ) {
            ?>
            <a class="button primary expand is-normal " href="<?php echo $tokped ?>"><img src="/wp-content/themes/flatsome-child/assets/img/marketplace/iTokopedia.webp"></a>
            <?php
        } if( $shopee ) {
            ?>
            <a class="button primary expand is-normal " href="<?php echo $shopee ?>"><img src="/wp-content/themes/flatsome-child/assets/img/marketplace/iShopee.webp"></a>
            <?php
        } if( $lazada ) {
            ?>
            <a class="button primary expand is-normal " href="<?php echo $lazada ?>"><img src="/wp-content/themes/flatsome-child/assets/img/marketplace/iLazada.webp"></a>
            <?php
        } if( $blibli ) {
            ?>
            <a class="button primary expand is-normal " href="<?php echo $blibli ?>"><img src="/wp-content/themes/flatsome-child/assets/img/marketplace/iBlibli.webp"></a>
            <?php
        } if( $tiktok ) {
            ?>
            <a class="button primary expand is-normal " href="<?php echo $tiktok ?>"><img src="/wp-content/themes/flatsome-child/assets/img/marketplace/iTiktok.webp"></a>
            <?php
        }
        endwhile;
        endif;
   echo "</div>";
}


    