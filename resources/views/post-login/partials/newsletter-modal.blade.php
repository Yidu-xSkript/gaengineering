<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit'.$newsletter->id ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/newsletter/{{ $newsletter->id }}/edit" method="post">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" style="font-size: 15px;">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $newsletter->title }}" id="title" placeholder="title" style="font-size: 15px;" required>
                    </div>

                    <div class="form-group">
                        <label for="slug" style="font-size: 15px;">Newsletter Content</label>
                        <textarea class="form-control testimony" rows="10" id="slug_modal" name="slug" placeholder="Newsletter content" ><?= $newsletter->slug; ?></textarea>
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

{{-- Delete --}}
<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete'.$newsletter->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/newsletter/{{$newsletter->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete</h4>
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'send'.$newsletter->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/newsletter/{{$newsletter->id}}/send" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-header header-color-modal bg-color-4" style="background: #136eca;color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="mdi mdi-send"></i> Send Email</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" style="padding: 10px; padding-left: 15px; padding-right: 15px;" data-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary" style="padding: 10px; padding-left: 15px; padding-right: 15px;">Send to all subscribers</button>
                </div>
            </form>
        </div>
    </div>
</div>
