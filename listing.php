<style>
	<? require_once(THIS_DIR.'/src/css/style.css') ?>
</style>

<div class="ca title_box" style="margin-bottom:0;">
    <div class="l">
        <h1>Directory Comparison</h1>
    </div>
    <div style="display:flex;justify-content:center;align-items:center;" class="r tr">
        <div class="l p_r">
            <i id="refresh" style="font-size:24px;cursor:pointer;" class="icon action push fa fa-refresh" aria-hidden="true"></i>
        </div>
        <div class="l" style="color:rgba(0,0,0,0.75);">
            <div>Last Updated</div>
            <div class="l"><b><span id="last_updated"><?= date('m-d-Y g:ia') ?></span></b></div>
        </div>
    </div>
</div>

<? show_messages(); ?>

&nbsp;

<div class="listing">
    <div class="w_50 l p_r p_10">
        <div id="listing_files_stag"></div>
    </div>

    <div class="w_50 l p_l p_10">
        <div id="listing_files_prod"></div>
    </div>

    <div class="c"></div>

    &nbsp;

    <div id="listing_files_ignored"></div>

    &nbsp;

    <div id="listing_files_pushed"></div>
</div>