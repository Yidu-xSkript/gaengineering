<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit'.$skill->id ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit skill</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/skills/{{$skill->id}}/edit" method="post">
                @csrf
                @METHOD('patch')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" style="font-size: 15px;">name <small style="color: red;">*</small></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name" style="font-size: 15px;" value="{{ $skill->name }}" required="">
                    </div>

                    <div class="form-group">
                        <label for="progress" style="font-size: 15px;">Progress</label>
                        <input type="number" class="form-control" name="progress" id="progress" placeholder="progress" style="font-size: 15px;" value="{{ $skill->progress }}" max="100" required>
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete'.$skill->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/skills/{{$skill->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete skill</h4>
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
