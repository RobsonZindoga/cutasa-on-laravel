<div id="addEvent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Add New Event</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    <form action="{{route('admin-events.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-label-group">
                            <input type="text" name="title" name="title" class="form-control" placeholder="title address"
                                required>
                            <label for="title">title address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="description" class="form-control" placeholder="description"
                                required>
                            <label for="description">Description</label>
                        </div>
                        <div class="form-label-group">
                            <input type="datetime-local" name="date" class="form-control" placeholder="Date"
                                required>
                            <label for="date">Date</label>
                        </div>
                        <div class="form-label-group">
                            <select type="text" name="category_id" class="form-control" placeholder="Category"
                                required>
                                <option value="" selected disabled>Select Category</option>
                                <option value="1">Social</option>
                                <option value="2" >Camp</option>
                                <option value="3" >Zunde</option>
                            </select>
                            <label for="description">Category</label>
                        </div>
                        <div class="form-label-group">
                            <input type="file" name="image_url" class="form-control" placeholder="Date"
                                required>
                            <label>File</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    </form>
               
            </div>
        </div>
    </div>
</div>
