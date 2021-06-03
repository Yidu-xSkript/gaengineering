<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit'.$faq->id ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit FAQ</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/faqs/{{$faq->id}}/edit" method="post">
                @csrf
                @METHOD('patch')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="question" style="font-size: 15px;">Question</label>
                        <textarea class="form-control" name="question" id="question" placeholder="Question" style="font-size: 15px;" rows="6" required>{{ $faq->question }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer" style="font-size: 15px;">Answer</label>
                        <textarea class="form-control" name="answer" rows="6" id="answer" placeholder="Answer" style="font-size: 15px;" required>{{ $faq->answer }}</textarea>
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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete'.$faq->id; ?>>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/auth/faqs/{{$faq->id}}/destroy" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">
                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete FAQ</h4>
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
