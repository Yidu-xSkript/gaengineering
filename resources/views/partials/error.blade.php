<style type="text/css">
    ul {
        list-style-type: none;
    }

    .golden {
        background-color: rgba(200, 100, 80, 1);
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
        <div class="golden pb-0 mt-3"
            style="background-color: rgba(240,100,95,0.4); box-shadow: 0px 15px 25px -3px rgba(0,0,0,0.2); padding: 10px; border-radius: 5px;">
            <ul style="list-style-type: none;">
                @foreach ($errors->all() as $error)
                    <li class="text-center mb-0 mr-5 ml-5 pb-2"
                        style="font-family: Nunito; font-size: 20px; color: #fff; cursor: default;">
                        <strong>{{ $error }}</strong>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
