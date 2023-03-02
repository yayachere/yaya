<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
  function show() {  
  var loader = document.getElementById('preloader');
    loader.style.display = "block";

  }
  function hide() {  
  var loader = document.getElementById('preloader');
    loader.style.display = "none";

  }
</script>
<style type="text/css">
    #preloader {
      background: #fff url(Loading_2.gif) no-repeat center center;
      background-size: 10%;
      height: 100vh;
      width: 100%;
      position: fixed;
      z-index: 100;
    }
  * {
    box-sizing: border-box;
}

.ff_form_main_nav {
    background: #fff;
    border-bottom: 1px solid #ddd;
    box-sizing: border-box;
    display: block;
    margin: 0 -20px;
    overflow: hidden;
    padding: 10px 20px 0;
    width: auto;
}
@media screen and (max-width: 782px)
body * {
    -webkit-tap-highlight-color: transparent!important;
}
a, div {
    outline: 0;
}
user agent stylesheet
div {
    display: block;
}
#wpwrap {
    height: auto;
    min-height: 100%;
    width: 100%;
    position: relative;
    -webkit-font-smoothing: subpixel-antialiased;
}
.ff_form_wrap {
    margin: 0;
}

@media screen and (max-width: 782px)
body * {
    -webkit-tap-highlight-color: transparent!important;
}
a, div {
    outline: 0;
}
user agent stylesheet
div {
    display: block;
}
#wpwrap {
    height: auto;
    min-height: 100%;
    width: 100%;
    position: relative;
    -webkit-font-smoothing: subpixel-antialiased;
}
@media (max-width: 425px)
.ff_form_wrap .ff_form_wrap_area {
    overflow: scroll;
}

.ff_form_wrap .ff_form_wrap_area {
    display: block;
    overflow: hidden;
    padding: 15px 0;
}
.ff_form_wrap * {
    box-sizing: border-box;
}
@media screen and (max-width: 782px)
body * {
    -webkit-tap-highlight-color: transparent!important;
}
a, div {
    outline: 0;
}
user agent stylesheet
div {
    display: block;
}
.el-col-24 {
    width: 100%;
}

[class*=el-col-] {
    box-sizing: border-box;
    float: left;
}
.text-right {
    text-align: right;
}
.el-row {
    box-sizing: border-box;
    position: relative;
}
.ff_form_wrap * {
    box-sizing: border-box;
}

.el-col-24 {
    width: 100%;
}
[class*=el-col-] {
    box-sizing: border-box;
    float: left;
}
  </style>
</head>
<body onpagehide="show()" onpageshow="hide()">
<div id="preloader"></div>
  <!-- ======= Header ======= -->
<?php include('navbar.php');?>
  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->
<?php include('sidebar.php');?>
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  <section class="section contact">

      <div class="row gy-4">

        <div class="col-md-9">

          <div class="row">
            <div class="ff_form_wrap">
    <div class="ff_form_wrap_area">
                <div id="ff_all_forms_app" class="ff_all_forms"><div data-v-1bbee23f=""><div data-v-1bbee23f="" class="el-row"><div data-v-1bbee23f="" class="el-col el-col-24 el-col-sm-12"><div data-v-1bbee23f="" class="wp-heading-inline" style="display: inline-block; margin-right: 20px; font-size: 23px;">
                Forms
            </div> <div data-v-1bbee23f="" class="ff_nav_sub_actions" style="display: inline-block; padding-right: 20px;"><div data-v-1bbee23f="" class="el-select el-select--mini"><!----><div class="el-input el-input--mini el-input--suffix"><!----><input type="text" readonly="readonly" autocomplete="off" placeholder="All Types" class="el-input__inner"><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div><div class="el-select-dropdown el-popper" style="display: none; min-width: 187px;"><div class="el-scrollbar" style=""><div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;"><ul class="el-scrollbar__view el-select-dropdown__list"><!----><li data-v-1bbee23f="" class="el-select-dropdown__item selected">
                All
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Active
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Inactive
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Payment Form
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Post Form
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Conversational Form
              </li><li data-v-1bbee23f="" class="el-select-dropdown__item">
                Step Form
              </li></ul></div><div class="el-scrollbar__bar is-horizontal"><div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div></div><div class="el-scrollbar__bar is-vertical"><div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div></div></div><!----></div></div></div> <div data-v-1bbee23f="" class="el-dropdown" style="display: inline-block; margin: 12px 0px;"><div class="el-button-group"><button type="button" class="el-button el-button--primary el-button--small"><!----><!----><span>
                Add a New Form

                 </span></button><button type="button" class="el-button el-button--primary el-button--small el-dropdown__caret-button" aria-haspopup="list" aria-controls="dropdown-menu-8278" tabindex="0"><!----><!----><span><i class="el-dropdown__icon el-icon-arrow-down"></i></span></button></div><ul data-v-1bbee23f="" class="el-dropdown-menu el-popper el-dropdown-menu--small" id="dropdown-menu-8278" style="display: none; top: 25px !important;"><li data-v-1bbee23f="" tabindex="-1" class="el-dropdown-menu__item"><!---->
                        Create Conversational Form
                    </li> <!----></ul></div></div> <div data-v-1bbee23f="" class="el-col el-col-24 el-col-sm-12"><div data-v-1bbee23f="" class="text-right"><div data-v-1bbee23f="" class="el-row"><div data-v-1bbee23f="" class="el-col el-col-24 el-col-sm-14 el-col-sm-offset-10"><form data-v-1bbee23f="" class="el-form" style="margin-bottom: 12px;"><div data-v-1bbee23f="" class="el-input el-input--small el-input-group el-input-group--append el-input--suffix"><!----><input type="text" autocomplete="off" placeholder="Search Forms" class="el-input__inner"><!----><!----><div class="el-input-group__append"><button data-v-1bbee23f="" type="submit" class="el-button el-button--default"><!----><!----><span>Search</span></button></div><!----></div></form></div> <div data-v-1bbee23f="" class="el-col el-col-24 el-col-sm-12 el-col-sm-offset-12"><button data-v-1bbee23f="" type="button" class="el-button el-button--default el-button--mini"><!----><!----><span>Advanced Filter</span></button></div></div></div></div></div> <hr data-v-1bbee23f=""> <div data-v-1bbee23f="" class="ff_forms_table"><div data-v-1bbee23f="" class="entries_table"><div data-v-1bbee23f="" class="tablenav top"><!----> <div data-v-1bbee23f="" class="el-table el-table--fit el-table--striped el-table--scrollable-x el-table--enable-row-hover el-table--enable-row-transition" element-loading-text="Loading Forms..."><div class="hidden-columns"><div data-v-1bbee23f=""></div> <div data-v-1bbee23f=""></div> <div data-v-1bbee23f=""></div> <div data-v-1bbee23f=""></div> <div data-v-1bbee23f=""></div> <div data-v-1bbee23f=""></div></div><div class="el-table__header-wrapper"><table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 920px;"><colgroup><col name="el-table_1_column_1" width="60"><col name="el-table_1_column_2" width="230"><col name="el-table_1_column_3" width="280"><col name="el-table_1_column_4" width="150"><col name="el-table_1_column_5" width="80"><col name="el-table_1_column_6" width="120"><col name="gutter" width="0"></colgroup><thead class="has-gutter"><tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1     is-leaf is-sortable el-table__cell"><div class="cell">ID<span class="caret-wrapper"><i class="sort-caret ascending"></i><i class="sort-caret descending"></i></span></div></th><th colspan="1" rowspan="1" class="el-table_1_column_2     is-leaf is-sortable el-table__cell"><div class="cell">Title<span class="caret-wrapper"><i class="sort-caret ascending"></i><i class="sort-caret descending"></i></span></div></th><th colspan="1" rowspan="1" class="el-table_1_column_3     is-leaf el-table__cell"><div class="cell">Short Code</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4     is-leaf el-table__cell"><div class="cell">Entries</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5     is-leaf el-table__cell"><div class="cell">Views</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6     is-leaf el-table__cell"><div class="cell">Conversion</div></th><th class="el-table__cell gutter" style="width: 0px; display: none;"></th></tr></thead></table></div><div class="el-table__body-wrapper is-scrolling-left"><table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 920px;"><colgroup><col name="el-table_1_column_1" width="60"><col name="el-table_1_column_2" width="230"><col name="el-table_1_column_3" width="280"><col name="el-table_1_column_4" width="150"><col name="el-table_1_column_5" width="80"><col name="el-table_1_column_6" width="120"></colgroup><tbody><tr class="el-table__row"><td rowspan="1" colspan="1" class="el-table_1_column_1   el-table__cell"><div class="cell">4</div></td><td rowspan="1" colspan="1" class="el-table_1_column_2   el-table__cell"><div class="cell"><strong data-v-1bbee23f="">
                                    Login Form
                                </strong> <span data-v-1bbee23f="" class="el-icon el-icon-money" style="display: none;"></span> <div data-v-1bbee23f="" class="row-actions"><span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=editor&amp;form_id=4"> Edit</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;form_id=4&amp;route=settings&amp;sub_route=form_settings#basic_settings"> Settings</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=4"> Entries</a> |
                                    </span> <!----> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" target="_blank" href="http://localhost/demosite/?fluent_forms_pages=1&amp;design_mode=1&amp;preview_id=4#ff_preview"> Preview</a> |
                                    </span> <span data-v-1bbee23f="" class="ff_duplicate"><a data-v-1bbee23f="" href="#"> Duplicate</a> |
                                        </span> <span data-v-1bbee23f="" class="trash"><span data-v-1bbee23f=""><span><span class="el-popover__reference-wrapper"></span></span> <span class="remove-btn el-popover__reference" aria-describedby="el-popover-6673" tabindex="0"><a data-v-1bbee23f="">Delete</a></span></span></span> |
                                        <div data-v-1bbee23f="" role="switch" aria-checked="true" class="el-switch is-checked" size="mini"><input type="checkbox" name="" true-value="published" false-value="unpublished" class="el-switch__input"><!----><span class="el-switch__core" style="width: 40px; border-color: rgb(19, 206, 102); background-color: rgb(19, 206, 102);"></span><span class="el-switch__label el-switch__label--right is-active"><!----><span>Active</span></span></div></div></div></td><td rowspan="1" colspan="1" class="el-table_1_column_3   el-table__cell"><div class="cell"><code data-v-1bbee23f="" data-clipboard-text="[fluentform id=&quot;4&quot;]" class="el-tooltip copy item classic_shortcode shortcode_btn" title="Click to copy shortcode" aria-describedby="el-tooltip-8852" tabindex="0"><i data-v-1bbee23f="" class="el-icon-document"></i> [fluentform id="4"]
                                    </code> <!----></div></td><td rowspan="1" colspan="1" class="el-table_1_column_4   el-table__cell"><div class="cell"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=4"><span data-v-1bbee23f="" style="display: none;">0 / </span>0</a></div></td><td rowspan="1" colspan="1" class="el-table_1_column_5   el-table__cell"><div class="cell">
                                1
                            </div></td><td rowspan="1" colspan="1" class="el-table_1_column_6   el-table__cell"><div class="cell">
                                0%
                            </div></td></tr><tr class="el-table__row el-table__row--striped"><td rowspan="1" colspan="1" class="el-table_1_column_1   el-table__cell"><div class="cell">2</div></td><td rowspan="1" colspan="1" class="el-table_1_column_2   el-table__cell"><div class="cell"><strong data-v-1bbee23f="">
                                    Subscription Form
                                </strong> <span data-v-1bbee23f="" class="el-icon el-icon-money" style="display: none;"></span> <div data-v-1bbee23f="" class="row-actions"><span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=editor&amp;form_id=2"> Edit</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;form_id=2&amp;route=settings&amp;sub_route=form_settings#basic_settings"> Settings</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=2"> Entries</a> |
                                    </span> <!----> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" target="_blank" href="http://localhost/demosite/?fluent_forms_pages=1&amp;design_mode=1&amp;preview_id=2#ff_preview"> Preview</a> |
                                    </span> <span data-v-1bbee23f="" class="ff_duplicate"><a data-v-1bbee23f="" href="#"> Duplicate</a> |
                                        </span> <span data-v-1bbee23f="" class="trash"><span data-v-1bbee23f=""><span><div role="tooltip" id="el-popover-1717" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="width: 160px; display: none;"><!----><p>Are you sure to delete this?</p> <div style="text-align: right; margin: 0px;"><button type="button" class="el-button el-button--text el-button--mini"><!----><!----><span>cancel</span></button> <button type="button" class="el-button el-button--primary el-button--mini"><!----><!----><span>confirm</span></button></div></div><span class="el-popover__reference-wrapper"></span></span> <span class="remove-btn el-popover__reference" aria-describedby="el-popover-1717" tabindex="0"><a data-v-1bbee23f="">Delete</a></span></span></span> |
                                        <div data-v-1bbee23f="" role="switch" aria-checked="true" class="el-switch is-checked" size="mini"><input type="checkbox" name="" true-value="published" false-value="unpublished" class="el-switch__input"><!----><span class="el-switch__core" style="width: 40px; border-color: rgb(19, 206, 102); background-color: rgb(19, 206, 102);"></span><span class="el-switch__label el-switch__label--right is-active"><!----><span>Active</span></span></div></div></div></td><td rowspan="1" colspan="1" class="el-table_1_column_3   el-table__cell"><div class="cell"><code data-v-1bbee23f="" data-clipboard-text="[fluentform id=&quot;2&quot;]" class="el-tooltip copy item classic_shortcode shortcode_btn" title="Click to copy shortcode" aria-describedby="el-tooltip-1959" tabindex="0"><i data-v-1bbee23f="" class="el-icon-document"></i> [fluentform id="2"]
                                    </code> <!----></div></td><td rowspan="1" colspan="1" class="el-table_1_column_4   el-table__cell"><div class="cell"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=2"><span data-v-1bbee23f="" style="display: none;">0 / </span>0</a></div></td><td rowspan="1" colspan="1" class="el-table_1_column_5   el-table__cell"><div class="cell">
                                0
                            </div></td><td rowspan="1" colspan="1" class="el-table_1_column_6   el-table__cell"><div class="cell">
                                0%
                            </div></td></tr><tr class="el-table__row"><td rowspan="1" colspan="1" class="el-table_1_column_1   el-table__cell"><div class="cell">1</div></td><td rowspan="1" colspan="1" class="el-table_1_column_2   el-table__cell"><div class="cell"><strong data-v-1bbee23f="">
                                    Contact Form Demo
                                </strong> <span data-v-1bbee23f="" class="el-icon el-icon-money" style="display: none;"></span> <div data-v-1bbee23f="" class="row-actions"><span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=editor&amp;form_id=1"> Edit</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_edit"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;form_id=1&amp;route=settings&amp;sub_route=form_settings#basic_settings"> Settings</a> |
                                        </span> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=1"> Entries</a> |
                                    </span> <!----> <span data-v-1bbee23f="" class="ff_entries"><a data-v-1bbee23f="" target="_blank" href="http://localhost/demosite/?fluent_forms_pages=1&amp;design_mode=1&amp;preview_id=1#ff_preview"> Preview</a> |
                                    </span> <span data-v-1bbee23f="" class="ff_duplicate"><a data-v-1bbee23f="" href="#"> Duplicate</a> |
                                        </span> <span data-v-1bbee23f="" class="trash"><span data-v-1bbee23f=""><span><div role="tooltip" id="el-popover-5561" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="width: 160px; display: none;"><!----><p>Are you sure to delete this?</p> <div style="text-align: right; margin: 0px;"><button type="button" class="el-button el-button--text el-button--mini"><!----><!----><span>cancel</span></button> <button type="button" class="el-button el-button--primary el-button--mini"><!----><!----><span>confirm</span></button></div></div><span class="el-popover__reference-wrapper"></span></span> <span class="remove-btn el-popover__reference" aria-describedby="el-popover-5561" tabindex="0"><a data-v-1bbee23f="">Delete</a></span></span></span> |
                                        <div data-v-1bbee23f="" role="switch" aria-checked="true" class="el-switch is-checked" size="mini"><input type="checkbox" name="" true-value="published" false-value="unpublished" class="el-switch__input"><!----><span class="el-switch__core" style="width: 40px; border-color: rgb(19, 206, 102); background-color: rgb(19, 206, 102);"></span><span class="el-switch__label el-switch__label--right is-active"><!----><span>Active</span></span></div></div></div></td><td rowspan="1" colspan="1" class="el-table_1_column_3   el-table__cell"><div class="cell"><code data-v-1bbee23f="" data-clipboard-text="[fluentform id=&quot;1&quot;]" class="el-tooltip copy item classic_shortcode shortcode_btn" title="Click to copy shortcode" aria-describedby="el-tooltip-3932" tabindex="0"><i data-v-1bbee23f="" class="el-icon-document"></i> [fluentform id="1"]
                                    </code> <!----></div></td><td rowspan="1" colspan="1" class="el-table_1_column_4   el-table__cell"><div class="cell"><a data-v-1bbee23f="" href="http://localhost/demosite/wp-admin/admin.php?page=fluent_forms&amp;route=entries&amp;form_id=1"><span data-v-1bbee23f="" style="display: none;">0 / </span>0</a></div></td><td rowspan="1" colspan="1" class="el-table_1_column_5   el-table__cell"><div class="cell">
                                2
                            </div></td><td rowspan="1" colspan="1" class="el-table_1_column_6   el-table__cell"><div class="cell">
                                0%
                            </div></td></tr><!----></tbody></table><!----><!----></div><!----><!----><!----><!----><div class="el-table__column-resize-proxy" style="display: none;"></div><div class="el-loading-mask" style="display: none;"><div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular"><circle cx="50" cy="50" r="20" fill="none" class="path"></circle></svg><p class="el-loading-text">Loading Forms...</p></div></div></div> <div data-v-1bbee23f="" class="tablenav bottom"><div data-v-1bbee23f="" class="pull-right"><div data-v-1bbee23f="" class="el-pagination"><span class="el-pagination__total">Total 3</span><span class="el-pagination__sizes"><div class="el-select el-select--mini"><!----><div class="el-input el-input--mini el-input--suffix"><!----><input type="text" readonly="readonly" autocomplete="off" placeholder="Select" class="el-input__inner"><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div><div class="el-select-dropdown el-popper" style="display: none; min-width: 110px;"><div class="el-scrollbar" style=""><div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;"><ul class="el-scrollbar__view el-select-dropdown__list"><!----><li class="el-select-dropdown__item"><span>5/page</span></li><li class="el-select-dropdown__item selected"><span>10/page</span></li><li class="el-select-dropdown__item"><span>20/page</span></li><li class="el-select-dropdown__item"><span>50/page</span></li><li class="el-select-dropdown__item"><span>100/page</span></li></ul></div><div class="el-scrollbar__bar is-horizontal"><div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div></div><div class="el-scrollbar__bar is-vertical"><div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div></div></div><!----></div></div></span><button type="button" disabled="disabled" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button><ul class="el-pager"><li class="number active">1</li><!----><!----><!----></ul><button type="button" disabled="disabled" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button><span class="el-pagination__jump">Go to<div class="el-input el-pagination__editor is-in-pagination"><!----><input type="number" autocomplete="off" min="1" max="1" class="el-input__inner"><!----><!----><!----><!----></div></span></div></div></div></div></div></div> <div data-v-1bbee23f="" class="" style="display: none;"><div class="el-dialog__wrapper predefinedModal" element-loading-text="Creating Form, Please wait..." element-loading-spinner="el-icon-loading" style="display: none;"><div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog" style="margin-top: 40px; width: 90%;"><div class="el-dialog__header"><div><b>
                Choose a pre - made form template or
                <a href="#" type="info">
                    create a blank form
                </a></b></div><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div><!----><div class="el-dialog__footer"><span class="dialog-footer"><!----> <button type="button" class="el-button el-button--default el-button--mini"><!----><!----><span>Cancel</span></button> <button type="button" class="el-button el-button--danger el-button--mini"><!----><!----><span><span>Create a Blank Form</span></span></button></span></div></div></div></div> <!----></div></div>
            </div>
</div>
          </div>

        </div>
 <?php include('aside.php')?>
      </div>

    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>