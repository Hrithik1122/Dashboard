<!--pathinclude/js.php-->
<script src="../assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/buttons.flash.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/jszip.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/pdfmake.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/vfs_fonts.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/buttons.html5.min.js" type="text/javascript"></script>
<script src="../assets/vendors/js/datatable/buttons.print.min.js" type="text/javascript"></script>
<script src="../assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="../assets/js/notification-sidebar.js" type="text/javascript"></script>
<script src="../assets/js/customizer.js" type="text/javascript"></script>
<script src="../assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script>
<script src="../assets/js/tag.js" type="text/javascript"></script>
<script src="../assets/js/dynamicdate.js" type="text/javascript"></script>
<script src="../assets/js/font-awesome-icon-kit.js" type="text/javascript"></script>

<style>
    .customizer[_ngcontent-rta-c5] {
        width: 400px;
        right: -400px;
        padding: 0;
        background-color: #fff;
        z-index: 1051;
        position: fixed;
        top: 0;
        bottom: 0;
        height: 100vh;
        -webkit-transition: right .4 scubic-bezier(.05, .74, .2, .99);
        transition: right .4 scubic-bezier(.05, .74, .2, .99);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-left: 1 pxsolidrgba(0, 0, 0, .05);
        box-shadow: 008 pxrgba(0, 0, 0, .1)
    }

    .customizer.open[_ngcontent-rta-c5] {
        right: 0
    }

    .customizer[_ngcontent-rta-c5].customizer-content[_ngcontent-rta-c5] {
        position: relative;
        height: 100%
    }

    .customizer[_ngcontent-rta-c5] a.customizer-toggle[_ngcontent-rta-c5] {
        background: #fff;
        color: theme-color("primary");
        display: block;
        box-shadow: -3 px08pxrgba(0, 0, 0, .1)
    }

    .customizer[_ngcontent-rta-c5] a.customizer-close[_ngcontent-rta-c5] {
        color: #000
    }

    .customizer[_ngcontent-rta-c5].customizer-close[_ngcontent-rta-c5] {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 7px;
        width: auto;
        z-index: 10
    }

    .customizer[_ngcontent-rta-c5]#rtl-icon[_ngcontent-rta-c5] {
        position: absolute;
        right: -1px;
        top: 35%;
        width: 54px;
        height: 50px;
        text-align: center;
        cursor: pointer;
        line-height: 50px;
        margin-top: 50px
    }

    .customizer[_ngcontent-rta-c5].customizer-toggle[_ngcontent-rta-c5] {
        position: absolute;
        top: 35%;
        width: 54px;
        height: 50px;
        left: -54px;
        text-align: center;
        line-height: 50px;
        cursor: pointer
    }

    .customizer[_ngcontent-rta-c5].color-options[_ngcontent-rta-c5] a[_ngcontent-rta-c5] {
        white-space: pre
    }

    .customizer[_ngcontent-rta-c5].cz-bg-color[_ngcontent-rta-c5] {
        margin: 0 auto
    }

    .customizer[_ngcontent-rta-c5].cz-bg-color[_ngcontent-rta-c5] span[_ngcontent-rta-c5]:hover {
        cursor: pointer
    }

    .customizer[_ngcontent-rta-c5].cz-bg-color[_ngcontent-rta-c5] span.white[_ngcontent-rta-c5] {
        color: #ddd !important
    }

    .customizer[_ngcontent-rta-c5].cz-bg-color[_ngcontent-rta-c5].selected[_ngcontent-rta-c5],
    .customizer[_ngcontent-rta-c5].cz-tl-bg-color[_ngcontent-rta-c5].selected[_ngcontent-rta-c5] {
        box-shadow: 0010 px3px #009da0;
        border: 3 pxsolid #fff
    }

    .customizer[_ngcontent-rta-c5].cz-bg-image[_ngcontent-rta-c5]:hover {
        cursor: pointer
    }

    .customizer[_ngcontent-rta-c5].cz-bg-image[_ngcontent-rta-c5] img.rounded[_ngcontent-rta-c5] {
        border-radius: 1rem !important;
        border: 2 pxsolid #e6e6e6;
        height: 100px;
        width: 50px
    }

    .customizer[_ngcontent-rta-c5].cz-bg-image[_ngcontent-rta-c5] img.rounded.selected[_ngcontent-rta-c5] {
        border: 2 pxsolid #ff586b
    }

    .customizer[_ngcontent-rta-c5].tl-color-options[_ngcontent-rta-c5] {
        display: none
    }

    .customizer[_ngcontent-rta-c5].cz-tl-bg-image[_ngcontent-rta-c5] img.rounded[_ngcontent-rta-c5] {
        border-radius: 1rem !important;
        border: 2 pxsolid #e6e6e6;
        height: 100px;
        width: 70px
    }

    .customizer[_ngcontent-rta-c5].cz-tl-bg-image[_ngcontent-rta-c5] img.rounded.selected[_ngcontent-rta-c5] {
        border: 2 pxsolid #ff586b
    }

    .customizer[_ngcontent-rta-c5].cz-tl-bg-image[_ngcontent-rta-c5] img.rounded[_ngcontent-rta-c5]:hover {
        cursor: pointer
    }

    .customizer[_ngcontent-rta-c5].bg-hibiscus[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, lefttop, rightbottom, from(#f05f57), color-stop(#c83d5c), color-stop(#99245a), color-stop(#671351), to(#360940));
        background-image: linear-gradient(torightbottom, #f05f57, #c83d5c, #99245a, #671351, #360940);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].bg-purple-pizzazz[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, lefttop, rightbottom, from(#662d86), color-stop(#8b2a8a), color-stop(#ae2389), color-stop(#cf1d83), to(#ed1e79));
        background-image: linear-gradient(torightbottom, #662d86, #8b2a8a, #ae2389, #cf1d83, #ed1e79);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].bg-blue-lagoon[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, lefttop, rightbottom, from(#144e68), color-stop(#006d83), color-stop(#008d92), color-stop(#00ad91), to(#57ca85));
        background-image: linear-gradient(torightbottom, #144e68, #006d83, #008d92, #00ad91, #57ca85);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].bg-electric-violet[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, rightbottom, lefttop, from(#4a00e0), color-stop(#600de0), color-stop(#7119e1), color-stop(#8023e1), to(#8e2de2));
        background-image: linear-gradient(tolefttop, #4a00e0, #600de0, #7119e1, #8023e1, #8e2de2);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].bg-portage[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, rightbottom, lefttop, from(#97abff), color-stop(#798ce5), color-stop(#5b6ecb), color-stop(#3b51b1), to(#123597));
        background-image: linear-gradient(tolefttop, #97abff, #798ce5, #5b6ecb, #3b51b1, #123597);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].bg-tundora[_ngcontent-rta-c5] {
        background-image: -webkit-gradient(linear, rightbottom, lefttop, from(#474747), color-stop(#4a4a4a), color-stop(#4c4d4d), color-stop(#4f5050), to(#525352));
        background-image: linear-gradient(tolefttop, #474747, #4a4a4a, #4c4d4d, #4f5050, #525352);
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transition: background .3s;
        transition: background .3s
    }

    .customizer[_ngcontent-rta-c5].cz-bg-color[_ngcontent-rta-c5].col[_ngcontent-rta-c5] span.rounded-circle[_ngcontent-rta-c5]:hover,
    .customizer[_ngcontent-rta-c5].cz-tl-bg-color[_ngcontent-rta-c5].col[_ngcontent-rta-c5] span.rounded-circle[_ngcontent-rta-c5]:hover {
        cursor: pointer
    }

    [dir=rtl][_nghost-rta-c5].customizer {
        left: -400px;
        right: auto;
        border-right: 1 pxsolidrgba(0, 0, 0, .05);
        border-left: 0
    }

    [dir=rtl][_nghost-rta-c5].customizer.open {
        left: 0;
        right: auto
    }

    [dir=rtl][_nghost-rta-c5].customizer.customizer-close {
        left: 10px;
        right: auto
    }

    [dir=rtl][_nghost-rta-c5].customizer.customizer-toggle {
        right: -54px;
        left: auto
    }
</style>

<style>
    .label-info,
    .badge-info {
        background-color: #3a87ad;
    }

    .bootstrap-tagsinput {
        width: 100%;
    }

    .label,
    .badge {
        display: inline-block;
        padding: 2 px4px;
        font-size: 11.844px;
        font-weight: bold;
        line-height: 14px;
        color: #fff;
        text-shadow: 0 -1 px0rgba(0, 0, 0, 0.25);
        white-space: nowrap;
        vertical-align: baseline;

    }

    .watermark {
        text-align: right;
        position: fixed;
        z-index: 9999999;
        bottom: 15px;
        width: auto;
        right: 3%;
        cursor: pointer;
        line-height: 0;
        display: block !important;
    }

    @media (max-width: 650px) {
        .watermark {
            visibility: hidden;
        }

        .watermark span {
            text-align: center;
        }
    }
</style>

<div class="watermark">
    <a title="All rights reserved © Hrithik Bansal" target="_blank" href="#"><span style="font-family: Verdana,monospace; font-size:small; color: black; font-weight:500; background-color: #e6e6e6; padding: 5px; border-radius: 5px;">All rights reserved © Hrithik Bansal</span></a>
</div>