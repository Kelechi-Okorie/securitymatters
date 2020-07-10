<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
*/
?>
<form role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search Security Matters..." aria-label="Search Security Matters" aria-describedby="button-addon2">
    <div class="input-group-append">
        <button class="btn input-group-text" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
    </div>
    </div>
</form>