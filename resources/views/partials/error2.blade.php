<style type="text/css">
    ul {
        list-style-type: none;
    }

    .alert {
        position: fixed;
        z-index: 10;
        right: 20px;
        bottom: 5px;
    }

    .golden {
        background-color:#C62936;
        box-shadow: 0px 15px 25px -3px rgba(0, 0, 0, 0.2);
    }

    .golden:hover {
        -webkit-transition: all 1.5s ease-out;
        -o-transition: all 1.5s ease-out;
        transition: all 1.5s ease-out;
        box-shadow: 0px 2px 10px -3px rgba(0, 0, 0, 0.4);
    }

</style>

@if (count($errors))
    <div class="form-group mt-4">
        <div class="alert golden pb-0">
            <ul style="list-style-type: none;">
                <small class="close ml-3" data-dismiss="alert" area-hidden="true"
                    style="color: #fff; cursor: pointer;"><strong>&times;</strong></small>
                @foreach ($errors->all() as $error)
                    <li class="mb-1 mr-5 ml-5"
                        style="font-family: Nunito; font-size: 16px; color: #fff; cursor: default;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
