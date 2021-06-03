<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-portfolio'.$portfolio->id ?>>
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Portfolio</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/portfolio/{{$portfolio->id}}/edit" method="post">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" style="font-size: 15px;">Title <small style="color: red;">*</small></label>
                        <input type="text" class="form-control" name="title" value="{{$portfolio->title}}" id="title" placeholder="Title" style="font-size: 15px; font-weight: bold;" required>
                    </div>

                    <div class="form-group">
                        <label for="date" style="font-size: 15px;">Project Date</label>
                        <input class="form-control" id="date"  value="{{$portfolio->project_date}}" name="project_date" type="date" required>
                    </div>

                    <div class="form-group">
                        <label for="project_url" style="font-size: 15px;">Portfolio URL</label>
                        <input class="form-control" id="project_url" value="{{$portfolio->portfolio_url}}" name="portfolio_url" type="url" style="font-size: 15px;" placeholder="Project URL" required>
                    </div>

                    <div class="form-group">
                        <label for="portfolio_category_id" style="font-size: 15px;">Portfolio Category <small style="color: red;">*</small></label>
                        <select class="form-control" style="font-size: 17px;" name="portfolio_category_id" required>
                            <option disabled="">Please select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $portfolio->category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="slug_modal" style="font-size: 15px;">slug <small style="color: red;">*</small></label>
                        <textarea class="form-control slug"  rows="8" name="slug" id="slug_modal" placeholder="Description/slug" style="font-size: 15px;" required><?= $portfolio->slug;?></textarea>
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

<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-portfolio-image'.$portfolio->id ?>>
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3" style="background: #136eca; color: #fff;">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Portfolio Images</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>
                </div>
            </div>

            <form action="/auth/portfolio/image/{{$portfolio->id}}/edit" method="post" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image" style="font-size: 15px;">Image <small style="color: red;">*</small></label>
                        <input type="file" name="image_url[]" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;" required multiple>
                    </div>

                    @if(!is_null($portfolio->images))
                    <div class="row">
                        @for($i = 0; $i < count($portfolio->images); $i++)
                        <div class="col-md-3">
                            <img src="{{ $portfolio->images[$i]->image_url }}" class="img-card" style="width: 100%; height: auto; object-fit: cover;">
                            <a href="{{ route('portfolio.image.destroy', ['id' => $portfolio->images[$i]->id, 'portfolio_id' => $portfolio->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-block btn-primary mt-4">Remove</a>
                        </div>
                        @endfor
                    </div>
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
            <form action="/auth/portfolio/{{$portfolio->id}}/destroy" method="post">
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
