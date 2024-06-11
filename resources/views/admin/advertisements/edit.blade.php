@extends('admin.master')
@section('content')
    <section class="main-content">
        <div class="row">
            <div class="col-sm-12">
                @include('admin.flash-message')
                <div class="card">
                    <div class="card-header card-default">
                        {!! !empty($page_title) ? $page_title : 'Page Title' !!}
                    </div>
                    <div class="card-body">
                        <form method="post" action="{!! route("advertisement.update",[ 'advertisement' => $record->slug ]) !!}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input required type="text" name="title" class="form-control" value="{!! old("title",$record->title) !!}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" rows="10" style="resize: none; height: 150px;">{!! old("description",$record->description) !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image <span class="text-danger">*</span></label>
                                        <div class="img-thumbnail border-0">
                                            <img src="{!! (\Storage::exists($record->image)) ? \Storage::disk('s3')->url($record->image) : asset('default_images/image-holder.png') !!}" width="100px"  id="blah">
                                        </div>
                                        <input required type="file" name="image"  value="{!! old("image") !!}" class="form-control" id="imgInp">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Url <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="url" rows="10" style="resize: none; height: 150px;">{!! old("url",$record->url) !!}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </section>
    @push('scripts')
        <script src="{{ asset('admin/assets/lib/datatables/jquery.dataTables.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                imgInp.onchange = evt => {
                    const [file] = imgInp.files
                    if (file) {
                        blah.src = URL.createObjectURL(file)
                    }
                }
            });
        </script>
    @endpush
@endsection
