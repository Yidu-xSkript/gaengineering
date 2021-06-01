<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'edit-service'.$service->id ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header header-color-modal bg-color-3">

                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Service</h4>

                <div class="modal-close-area modal-close-df">

                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>

                </div>

            </div>

            <form action="/admin-service/{{$service->id}}" method="post">
                
                @csrf

                @METHOD('PATCH')

                <div class="modal-body">

                    <div class="form-group">

                        <label for="title" style="font-size: 15px;">Title <small style="color: red;">*</small></label>

                        <input type="text" class="form-control" name="title" value="{{$service->title}}" id="title" placeholder="Title" style="font-size: 15px; font-weight: bold;">

                    </div>

                    <div class="form-group">

                        <label for="icon" style="font-size: 15px;">Icon <small style="color: red;">*</small></label>

                        <select class="form-control" style="font-size: 17px;" name="icon">
                            <option value="" selected="" disabled="">Please select an icon</option>
                            <option value="flaticon-ideas" <?php if($service->icon == 'flaticon-ideas'): ?> selected <?php endif; ?>>ideas</option>
                            <option value="flaticon-flasks" <?php if($service->icon == 'flaticon-flasks'): ?> selected <?php endif; ?>>flasks</option>
                            <option value="flaticon-analysis" <?php if($service->icon == 'flaticon-analysis'): ?> selected <?php endif; ?>>analysis</option>
                            <option value="flaticon-ux-design" <?php if($service->icon == 'flaticon-ux-design'): ?> selected <?php endif; ?>>ux-design</option>
                            <option value="flaticon-web-design" <?php if($service->icon == 'flaticon-web-design'): ?> selected <?php endif; ?>>web-design</option>
                            <option value="flaticon-idea" <?php if($service->icon == 'flaticon-idea'): ?> selected <?php endif; ?>>idea</option>
                            <option value="flaticon-innovation" <?php if($service->icon == 'flaticon-innovation'): ?> selected <?php endif; ?>>innovation</option>
                            <option value="fa-glass" <?php if($service->icon == 'fa-glass'): ?> selected <?php endif; ?>>glass</option>
                            <option value="fa-music" <?php if($service->icon == 'fa-music'): ?> selected <?php endif; ?>>music</option>
                            <option value="fa-search" <?php if($service->icon == 'fa-search'): ?> selected <?php endif; ?>>search</option>
                            <option value="fa-envelope-o" <?php if($service->icon == 'fa-envelope-o'): ?> selected <?php endif; ?>>email-envelope</option>
                            <option value="fa-heart" <?php if($service->icon == 'fa-heart'): ?> selected <?php endif; ?>>heart</option>
                            <option value="fa-star" <?php if($service->icon == 'fa-star'): ?> selected <?php endif; ?>>star</option>
                            <option value="fa-user" <?php if($service->icon == 'fa-user'): ?> selected <?php endif; ?>>user</option>
                            <option value="fa-th-list" <?php if($service->icon == 'fa-th-list'): ?> selected <?php endif; ?>>list</option>
                            <option value="fa-check" <?php if($service->icon == 'fa-check'): ?> selected <?php endif; ?>>check</option>
                            <option value="fa-close" <?php if($service->icon == 'fa-close'): ?> selected <?php endif; ?>>close</option>
                            <option value="fa-power-off" <?php if($service->icon == 'fa-power-off'): ?> selected <?php endif; ?>>power-off</option>
                            <option value="fa-trash-o" <?php if($service->icon == 'fa-trash-o'): ?> selected <?php endif; ?>>trash</option>
                            <option value="fa-home" <?php if($service->icon == 'fa-home'): ?> selected <?php endif; ?>>home</option>
                            <option value="fa-clock-o" <?php if($service->icon == 'fa-clock-o'): ?> selected <?php endif; ?>>clock</option>
                            <option value="fa-file-o" <?php if($service->icon == 'fa-file-o'): ?> selected <?php endif; ?>>file</option>
                            <option value="fa-road" <?php if($service->icon == 'fa-road'): ?> selected <?php endif; ?>>road</option>
                            <option value="fa-download" <?php if($service->icon == 'fa-download'): ?> selected <?php endif; ?>>download</option>
                            <option value="fa-cog" <?php if($service->icon == 'fa-cog'): ?> selected <?php endif; ?>>cog</option>
                            <option value="fa-inbox" <?php if($service->icon == 'fa-inbox'): ?> selected <?php endif; ?>>inbox</option>
                            <option value="fa-play-circle-o" <?php if($service->icon == 'fa-play-circle-o'): ?> selected <?php endif; ?>>play-circle</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label for="slug" style="font-size: 15px;">slug <small style="color: red;">*</small></label>

                        <textarea class="form-control slug"  rows="8" name="slug" id="slug" placeholder="Description/slug" style="font-size: 15px;" required><?= $service->slug;?></textarea>

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

<div class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog" id=<?= 'update-image-service'.$service->id ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header header-color-modal bg-color-3">

                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Service Image</h4>

                <div class="modal-close-area modal-close-df">

                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close" style="color: #fff;"></i></a>

                </div>

            </div>

            <form action="/admin-service/{{$service->id}}/image" method="post" enctype="multipart/form-data">
                
                @csrf

                @METHOD('patch')                

                <div class="modal-body">

                    <div class="form-group">

                        <label for="image" style="font-size: 15px;">Image <small style="color: red;">*</small></label>

                        <input type="file" name="image" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">

                    </div>

                    @if(!is_null($service->image))

                    <img src="{{URL::asset('storage/app/public/uploads/custom-pages/custom-service/'.$service->image)}}" class="img-card" style="width: 470px; height: 400px; object-fit: cover;">

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

<div class="modal fade" role="dialog" style="border: none;" id=<?= 'delete-service'.$service->id; ?>>

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="/admin-service/{{$service->id}}" method="post">
                
                @csrf

                @method('DELETE')

                <div class="modal-header header-color-modal bg-color-4" style="background: rgb(230, 82, 81); color: #fff;">

                    <h4 class="modal-title" style="font-size: 17px;"><i class="fa fa-trash-o"></i> Delete Service</h4>

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
