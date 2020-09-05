@foreach ($articles as $article)        
<div id="addArticle{{$article->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Edit Blog Article</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{route('admin-blog.update',$article)}}" method="post">
                    @csrf
                    {{-- form here --}}
                    </form>
                </div>
            </div>
        </div>
    </div>    
@endforeach