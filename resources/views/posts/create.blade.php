 @extends('layouts.app')

 @section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="col-md-auto mt-5">
                <div class="card">
                    <div class="card-header">
                      <h3>Create post</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <input name="title" class="form-control" type="text" required="" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Content</label>
                                    <textarea name="content" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image</label>
                                    <input name="image" type="file" class="form-control-file" id="image">
                                </div>
                            </div>
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>Добавить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
