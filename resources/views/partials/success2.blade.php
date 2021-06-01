<style type="text/css">
    .alert {
        z-index: 10;
        right: 20px;
        bottom: 50px;
    }
    .golden2 {
        background-color: #136eca;
        box-shadow: 0px 15px 25px -3px rgba(0, 0, 0, 0.2);
        width: 360px !important;
        height: auto;
        position: fixed;
        align-items: center;
        justify-content: center;
    }
    .golden2:hover {
        -webkit-transition: all 1.5s ease-out;
        -o-transition: all 1.5s ease-out;
        transition: all 1.5s ease-out;
        box-shadow: 0px 2px 10px -3px rgba(0, 0, 0, 0.4);
    }

</style>

@if (session('success'))
    <div class="alert golden2">
        <small class="close ml-3" data-dismiss="alert" area-hidden="true"
            style="color: #fff; cursor: pointer;"><strong>&times;</strong></small>
        <p class="text-center" style="font-family:'Poppins',sans-serif; color: #fff; font-size: 16px; cursor: default;">
            {{ session('success') }}
        </p>
    </div>
@endif
