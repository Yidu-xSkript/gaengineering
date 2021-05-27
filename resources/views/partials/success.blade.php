<style type="text/css">
    .alert {
        position: absolute;
        z-index: 10;
        right: 20px;
        top: 100px;
    }

    .golden2 {
        background-color: rgba(100, 200, 100, 0.5);
        box-shadow: 0px 15px 25px -3px rgba(0, 0, 0, 0.2);
    }

    .golden2:hover {
        -webkit-transition: all 1.5s ease-out;
        -o-transition: all 1.5s ease-out;
        transition: all 1.5s ease-out;
        box-shadow: 0px 2px 10px -3px rgba(0, 0, 0, 0.4);
    }

</style>

@if (session('success'))
    <div class="form-group mt-4">
        <div class="alert golden2 pb-0">
            <small class="close ml-3" data-dismiss="alert" area-hidden="true"
                style="color: #fff; cursor: pointer;  margin-top: 2px;"><strong>&times;</strong></small>
            <p class="mr-5 ml-5 pb-2" style="color: #fff; font-size: 20px; cursor: default;">
                <strong>{{ session('success') }}</strong>
            </p>
        </div>
    </div>
@endif
