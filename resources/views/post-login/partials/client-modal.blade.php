<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit'.$client->id ?>>
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit client</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/clients/{{ $client->id }}/edit" method="post" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" style="font-size: 15px;">Company name <small style="color: red;">*</small></label>
                        <input type="text" class="form-control" value="{{ $client->company_name }}" name="company_name" id="name" placeholder="Company name" style="font-size: 15px;" required="">
                    </div>

                    <div class="form-group">
                        <label for="slug_modal" style="font-size: 15px;">Slug/Description about the client<small style="color: red;"></small>*</small></label>
                        <textarea class="form-control slug"  rows="8" name="slug" id="slug_modal" placeholder="Slug / Description" required><?= $client->slug;?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" style="font-size: 15px;">Image <small style="color: red;">*</small></label>
                        <input type="file" name="imageURL" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">
                    </div>

                    @if(!is_null($client->image_url))
                        <img src="{{ $client->image_url }}" class="img-card" style="width: 100%; height: 400px; object-fit: cover;">
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete'.$client->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/clients/{{$client->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete client</h4>
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
