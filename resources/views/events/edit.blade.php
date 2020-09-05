@foreach ($events as $item)
<div id="editEvent{{$item->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Add New Event</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    <form action="{{route('admin-events.update',$item)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-label-group">
                            <input type="text" name="title" name="title" class="form-control" value="{{$item->title}}" placeholder="title address"
                                >
                            <label for="title">title address</label>
                        </div>

                        <div class="form-label-group">
                        <input type="text" name="description" value="{{$item->description}}" class="form-control" placeholder="description"
                                >
                            <label for="description">Description</label>
                        </div>
                        <div class="form-label-group">
                            <input type="date" name="date" value="{{$item->date}}" class="form-control" placeholder="Date"
                                >
                            <label for="date">Date</label>
                        </div>
                        <div class="form-label-group">
                            <select type="text" name="category_id" v class="form-control" placeholder="Category"
                                >
                        <option value="{{$item->id}}" selected>dd</option>
                                <option value="1">Social</option>
                                <option value="2" >Camp</option>
                                <option value="3" >Zunde</option>
                            </select>
                            <label for="description">Category</label>
                        </div>
                        <div class="form-label-group">
                        <input type="file" name="img_url" class="form-control" value="{{$item->image_url}}" placeholder="Date"
                                >
                            <label>File</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    </form>
               
            </div>
        </div>
    </div>
</div>

@endforeach