<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit'.$manager->id ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/manager/{{ $manager->id }}/edit" method="post">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" style="font-size: 15px;">Name <small style="color: red;">*</small></label>
                        <input type="text" class="form-control" value="{{ $manager->name }}" name="name" id="name" placeholder="Name" style="font-size: 15px; font-weight: bold;" required="">
                    </div>

                    <div class="form-group">
                        <label for="name" style="font-size: 15px;">Email <small style="color: red;">*</small></label>
                        <input type="email" class="form-control" value="{{ $manager->email }}" name="email" id="name" placeholder="email" style="font-size: 15px; font-weight: bold;" required="">
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
<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete'.$manager->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/manager/{{$manager->id}}/destroy" method="post">
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
