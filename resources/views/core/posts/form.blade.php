@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            <i class="fa  fa-file-text-o "></i> {{ $pageTitle }}
            <small>{{ $pageNote }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('core/posts') }}">
                    <i class="fa fa-user"></i>
                    Post Article
                </a>
            </li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <div class="content">
        <div class="box box-primary ">
            <div class="box-header with-border">
                <div class="box-header-tools pull-left">
                    <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}">
                        <i class="fa  fa-arrow-left"></i>
                    </a>
                </div>
                <div class="box-header-tools pull-right ">
                    @if(Session::get('gid') ==1)
                        <a href="{{ URL::to('sximo/module/config/posts') }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}">
                            <i class="fa  fa-ellipsis-v"></i>
                        </a>
                    @endif
                </div>

            </div>
            <div class="box-body">
                <ul class="parsley-error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                {!! Form::open(array('url'=>'core/posts/save?return='.$return, 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
                <div class="col-md-9">
                    <ul class="nav nav-tabs m-b">
                        <li class="active">
                            <a href="#info" data-toggle="tab">
                                <i class="fa  fa-info-circle"></i>
                                Nội Dung Trang
                            </a>
                        </li>
                        <li>
                            <a href="#meta" data-toggle="tab">
                                <i class="fa fa-sitemap"></i>
                                Thẻ Meta & Description
                            </a>
                        </li>
                        <li>
                            <a href="#image" data-toggle="tab">
                                <i class="fa fa-picture-o"></i>
                                Ảnh Đại Diện
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active m-t" id="info">

                            {!! Form::hidden('pageID', $row['pageID']) !!}
                            {!! Form::hidden('pagetype', 'post') !!}
                            {!! Form::hidden('pageID', $row['pageID']) !!}
                            <div class="form-group  ">
                                <label> Tiêu Đề Bài Viết:</label>
                                {!! Form::text('title', $row['title'],array('required'=> 'required','class'=>'form-control', 'placeholder'=>'',   )) !!}
                            </div>
                            <div class="form-group  ">
                                <label for="ipt" class=" btn-primary  btn btn-sm">  {!! url('post/view/')!!}  </label>
                                {!! Form::text('alias', $row['alias'],array('class'=>'form-control', 'placeholder'=>'', 'style'=>'width:350px; display:inline-block;'   )) !!}
                            </div>
                            <div class="form-group  ">
                                <label> Nội Dung:</label>
                                {{ Form::textarea('note', $row['note'], array('required'=>'required','name'=>'note','rows'=> '25','id'=> 'note-content', 'class'=>'form-control note-content' )) }}
                            </div>
                        </div>
                        <div class="tab-pane m-t" id="meta">
                            <div class="form-group  ">
                                <label> Metakey</label>
                                <textarea name='metakey' rows='5' id='metakey' class='form-control '>
                                    {{ $row['metakey'] }}
                                </textarea>
                            </div>
                            <div class="form-group  ">
                                <label> Metadesc</label>
                                <textarea name='metadesc' rows='5' id='metadesc' class='form-control '>
                                    {{ $row['metadesc'] }}
                                </textarea>
                            </div>
                        </div>

                        <div class="tab-pane m-t" id="image">
                            <div class="form-group  ">
                                <label> Ảnh Đại Diện</label>
                                <input type="file" name="image" />
                                {!! SiteHelpers::showUploadedFile($row['image'],'/uploads/images/') !!}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group  ">
                        <label> Danh Mục :</label>
                        <div class="input-group m-b" style="width:250px !important;">
                            <select required name='category_id' rows='5' id='category_id' class='select2 '></select>
                        </div>
                    </div>
                    {{--<div class="form-group  ">--}}
                        {{--<label> Nhãn :</label>--}}
                        {{--<div class="input-group m-b" style="width:250px !important;">--}}
                            {{--<input value="{{ $row['labels'] }}" name="labels" id="select-label"  class=""  type="text" style="width:250px !important"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group  ">
                        <label> Thuộc Tính Bài Viết :</label>
                        <label class="checkbox">
                            <input type='checkbox' name='is_hot' class="minimal-red" @if($row['is_hot'] ==1 ) checked @endif value="1"/>
                            Tin Nổi Bật ?
                        </label>
                        {{--<label class="checkbox">--}}
                            {{--<input type='checkbox' name='is_show_home' class="minimal-red" @if($row['is_show_home'] ==1 ) checked @endif value="1"/>--}}
                            {{--Hiển Thị Trên Trang Chủ ?--}}
                        {{--</label>--}}
                    </div>



                    <div class="form-group  ">
                        <label> Trạng Thái :</label>
                        <label class="radio  ">
                            <input type='radio' name='status' value="enable"  class="minimal-red"
                                   @if( $row['status'] =='enable')
                                        checked
                                    @elseif($row['pageID'] === "")
                                        checked
                                    @endif
                            />
                            Hoạt Động
                        </label>
                        <label class="radio">
                            <input type='radio' name='status' value="disable" required class="minimal-red"
                                   @if( $row['status'] =='disable')    checked @endif
                            />
                            Ngừng
                        </label>
                    </div>
                    @if($row['pageID'] !== "")
                        <div class="form-group  ">
                            <label for="ipt" class=" control-label "> Ngày Tạo</label>
                            <div class="input-group m-b" style="width:150px !important;">
                                {!! Form::text('created', $row['created'],array('disabled'=>'disabled','class'=>'form-control', 'style'=>'width:200px !important;')) !!}
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="ipt" class=" control-label "> Ngày Cập Nhật</label>
                            <div class="input-group m-b" style="width:150px !important;">
                                {!! Form::text('updated', $row['updated'],array('disabled'=>'disabled','class'=>'form-control', 'style'=>'width:200px !important;')) !!}
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    @endif


                    <div class="form-group  ">
                        <label for="ipt"> Ai Có Thể Nhìn: </label>
                        @foreach($groups as $group)
                            <label class="checkbox">
                                <input type='checkbox' name='group_id[{{ $group['id'] }}]' value="{{ $group['id'] }}"
                                       @if($group['access'] ==1 or $group['id'] ==1)
                                       checked
                                       @elseif($row['pageID'] === "")
                                        checked
                                       @endif
                                       class="minimal-red"
                                />
                                {{ $group['name'] }}
                            </label>
                        @endforeach
                    </div>

                    <div class="form-group  ">
                        <label> Cho Phép Hiển Thị Công Khai: </label>
                        <label class="checkbox">
                            <input type='checkbox' name='allow_guest' class="minimal-red" @if($row['allow_guest'] ==1 ) checked @endif value="1"/>
                            Công Khai ?
                        </label>
                    </div>



                    <div class="form-group">

                        <button type="submit" name="apply" class="btn btn-info btn-sm btn-flat">
                            <i class="icon-checkmark-circle2"></i>
                            Apply
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-flat">
                            <i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
                        <button type="button" onclick="location.href='{{ URL::to('core/posts?return='.$return) }}' " class="btn btn-warning btn-sm btn-flat">
                            <i class="icon-cancel-circle2 "></i> {{ Lang::get('core.sb_cancel') }} </button>

                    </div>
                    <input type="hidden" value="{{$article}}" id="article-data">

                </div>
                <div style="clear:both;"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {

//            $("#select-label").select2({
//                tags: JSON.parse($('#article-data').val())
//            });
            //$('#created_date').datepicker({format:'yyyy-mm-dd',autoClose:true});



            $("#category_id").jCombo("{!! url('core/posts/comboselect?filter=tb_categories:category_id:name') !!}",
                    {selected_value: '{{ $row["category_id"] }}'});

            $('.removeMultiFiles').on('click', function () {
                var removeUrl = '{{ url("posts/removefiles?file=")}}' + $(this).attr('url');
                $(this).parent().remove();
                $.get(removeUrl, function (response) {
                });
                $(this).parent('div').empty();
                return false;
            });

            $('#note-content').summernote({
                height:    500,
                callbacks: {
                    onImageUpload: function (files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    }
                }

            });

            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data:        data,
                    type:        "POST",
                    url:         "{{ url('core/posts/upload-image') }}",
                    cache:       false,
                    contentType: false,
                    processData: false,
                    success:     function (url) {
                        $('#note-content').summernote('editor.insertImage', url);
                    }
                });
            };

        });
    </script>

@stop