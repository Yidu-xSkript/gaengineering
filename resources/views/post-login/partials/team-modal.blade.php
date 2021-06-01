<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-person'.$person->id ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit {{$person->name}}</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/team/{{$person->id}}/edit" method="post" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" style="font-size: 20px;">Name</label>
                        <input type="text" class="form-control"  style="font-size: 16px;" value="{{$person->name}}" id=name name="name" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <label for="position" style="font-size: 20px;">Company Position</label>
                        <input type="text" class="form-control"  style="font-size: 16px;" value="{{$person->position}}" id="position" name="position" placeholder="Company Position" required>
                    </div>

                    <div class="form-group">
                        <label for="testimony" style="font-size: 20px;">Slug/Description</label>
                        <textarea class="form-control testimony" rows="10" style="font-size: 16px;" id="slug_modal" name="slug" placeholder=" Description" required> {{$person->slug}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Twitter" style="font-size: 20px;">Twitter</label>
                        <input type="text" class="form-control"  value="{{$person->twitter}}" style="font-size: 16px;" id="Twitter" name="twitter" placeholder="Twitter Link" >
                    </div>

                    <div class="form-group">
                        <label for="facebook" style="font-size: 20px;">Facebook</label>
                        <input type="text" class="form-control"  value="{{$person->facebook}}" style="font-size: 16px;" id='facebook' name="facebook" placeholder="Facebook" >
                    </div>

                    <div class="form-group">
                        <label for="linked_in" style="font-size: 20px;">Linked In</label>
                        <input type="text" class="form-control"  value="{{$person->linked_in}}" style="font-size: 16px;" id="linked_in" name="linked_in" placeholder="Linked In" >
                    </div>

                    <div class="form-group">
                        <label for="instagram" style="font-size: 20px;">Instagram</label>
                        <input type="text" class="form-control" value="{{$person->instagram}}"  style="font-size: 16px;" id="instagram" name="instagram" placeholder="Instagram" >
                    </div>

                    <div class="form-group">
                        <label for="image" style="font-size: 15px;">Picture </label>
                        <input type="file" name="image_url" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">
                    </div>

                    @if(!is_null($person->image_url))
                    <img src="{{ $person->image_url }}" class="img-card" style="width: 100%; height: auto; object-fit: cover;">
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete-person'.$person->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/team/{{$person->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete {{$person->name}}</h4>
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
