<style>
    .progress {
        width: 150px;
        height: 150px;
        background: none;
        position: relative;
    }

    .progress-pos {
        z-index: 99999999999 !important;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.8)
    }

    .progress::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 6px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 6px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress_alert {
        font-size: 24px;
    }
</style>
<section class="progress_wrapper position-absolute progress-pos d-none">
    <div class="row w-100 h-100 flex-column justify-content-center align-items-center">
        <!-- Progress bar -->
        <div class="progress my_progress mx-auto" data-value='0'>
            <span class="progress-left">
                <span class="progress-bar border-success"></span>
            </span>
            <span class="progress-right">
                <span class="progress-bar border-success"></span>
            </span>
            <div class="progress-value w-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-success py-2"><span class="my_progress_percentage">0</span>
                    <small>%</small></div>
            </div>
        </div>

        <div class="progress_alert alert my-4 d-none"></div>
        <!-- END -->
    </div>
</section>
