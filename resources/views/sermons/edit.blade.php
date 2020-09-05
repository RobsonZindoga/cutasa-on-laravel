@foreach ($sermons as $sermon)
<div id="editSermon{{$sermon->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Edit Sermon</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{route('admin-sermons.update', $sermon)}}" method="post">
                    @csrf
                    @method('PUT')
                    {{-- form here --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach