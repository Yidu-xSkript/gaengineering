<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-testimony'.$testimony->id ?>>
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #308ee0; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Testimony</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/testimony/{{$testimony->id}}/edit" method="post" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" style="font-size: 15px;">Name</label>
                        <input type="text" class="form-control"  value="{{$testimony->name}}" style="font-size: 16px;" id=name name="name" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <label for="company_name" style="font-size: 15px;">Company name</label>
                        <input type="text" class="form-control" name="company_name" id="company name" placeholder="Company name" style="font-size: 15px;" value="{{ $testimony->company_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="job_title" style="font-size: 15px;">Job Title</label>
                        <input type="text" class="form-control" name="job_title" value="{{ $testimony->job_title }}" id="job_title" placeholder="Job Title" style="font-size: 15px;" required>
                    </div>

                    <div class="form-group">
                        <label for="slug_modal" style="font-size: 15px;">Testimony</label>
                        <textarea class="form-control testimony" rows="10" style="font-size: 16px;" id="slug_modal" name="testimony" placeholder=" Testimony" required> <?= $testimony->testimony;?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image" style="font-size: 15px;">Picture </label>
                        <input type="file" name="image_url" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">
                    </div>

                    @if(!is_null($testimony->image_url))
                    <img src="{{ $testimony->image_url }}" class="img-card" style="width: 100%; height: auto; object-fit: cover;">
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete-testimony'.$testimony->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/testimony/{{$testimony->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete Testimony</h4>
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
