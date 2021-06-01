<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-portfolio'.$portfolio->id ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header header-color-modal bg-color-3">

                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Portfolio</h4>

                <div class="modal-close-area modal-close-df">

                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>

                </div>

            </div>

            <form action="/admin-portfolio/{{$portfolio->id}}" method="post">
                
                @csrf

                @METHOD('PATCH')

                <div class="modal-body">

                    <div class="form-group">

                        <label for="title" style="font-size: 15px;">Title <small style="color: red;">*</small></label>

                        <input type="text" class="form-control" name="title" value="{{$portfolio->title}}" id="title" placeholder="Title" style="font-size: 15px; font-weight: bold;">

                    </div>

                    <div class="form-group">

                        <label for="slug" style="font-size: 15px;">slug <small style="color: red;">*</small></label>

                        <textarea class="form-control slug"  rows="8" name="slug" id="slug" placeholder="Description/slug" style="font-size: 15px;" required><?= $portfolio->slug;?></textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" style="padding: 10px; padding-left: 15px; padding-right: 15px;" data-dismiss="modal">Cancel</a>

                    <button type="submit" class="btn btn-primary" style="padding: 10px; padding-left: 15px; padding-right: 15px;">Save Changes</button>

                </div>

            </form>


        </div>

    </div>

</div>

<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'update-image-portfolio'.$portfolio->id ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header header-color-modal bg-color-3">

                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Portfolio Image</h4>

                <div class="modal-close-area modal-close-df">

                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>

                </div>

            </div>

            <form action="/admin-portfolio/{{$portfolio->id}}/image" method="post" enctype="multipart/form-data">
                
                @csrf

                @METHOD('patch')                

                <div class="modal-body">

                    <div class="form-group">

                        <label for="image" style="font-size: 15px;">Image <small style="color: red;">*</small></label>

                        <input type="file" name="image" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">

                    </div>

                    @if(!is_null($portfolio->image))

                    <img src="{{URL::asset('storage/app/public/uploads/portfolio/'.$portfolio->image)}}" class="img-card" style="width: 470px; height: 400px; object-fit: cover;">

                    @endif

                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" style="padding: 10px; padding-left: 15px; padding-right: 15px;" data-dismiss="modal">Cancel</a>

                    <button type="submit" class="btn btn-primary" style="padding: 10px; padding-left: 15px; padding-right: 15px;">Save Changes</button>

                </div>

            </form>


        </div>

    </div>

</div>

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete-portfolio'.$portfolio->id; ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="/admin-portfolio/{{$portfolio->id}}" method="post">
                
                @csrf

                @method('DELETE')

                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">

                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete Portfolio</h4>

                    <div class="modal-close-area modal-close-df">

                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>

                    </div>

                </div>


                <div class="modal-footer">

                    <button class="btn btn-secondary" style="padding: 10px; padding-left: 15px; padding-right: 15px;" data-dismiss="modal">Cancel</a>

                    <button type="submit" class="btn btn-danger" style="padding: 10px; padding-left: 15px; padding-right: 15px;">Yes, I want to Delete</button>

                </div>

            </form>

        </div>

    </div>

</div>
