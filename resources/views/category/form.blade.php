@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1> {{ $pageTitle }}
            <small> {{ $pageNote }} </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('category?return='.$return) }}">
                    <i class="fa fa-th"></i> {{ $pageTitle }} </a>
            </li>
            <li class="active"> Update</li>
        </ol>
    </section>

    <div class="content">

        <div class="box box-primary">
            <div class="box-header with-border">

                <div class="box-header-tools pull-left">
                    <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}">
                        <i class="fa  fa-arrow-left"></i>
                    </a>
                </div>
                <div class="box-header-tools ">
                    @if(Session::get('gid') ==1)
                        <a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}">
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

                {!! Form::open(array('url'=>'category/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
                <div class="col-md-12">
                    <fieldset>
                        <legend> Danh Mục Bài Viết</legend>
                        {!! Form::hidden('category_id', $row['category_id']) !!}
                        <div class="form-group  ">
                            <label for="Danh Mục Cha" class=" control-label col-md-4 text-left"> Danh Mục Cha</label>
                            <div class="col-md-7">
                                <select name='parent_id' rows='5' id='parent_id' class='select2 '></select>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="Tên Tiêu Đề" class=" control-label col-md-4 text-left"> Tên Tiêu Đề
                                <span class="asterix"> * </span></label>
                            <div class="col-md-7">
                                <input type='text' name='name' id='name' value='{{ $row['name'] }}'
                                       required class='form-control '/>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="Tên Dự Án" class=" control-label col-md-4 text-left"> SEO Url</label>
                            <div class="col-md-7">
                                <input type='text' name='alias' id='alias' value='{{ $row['alias'] }}'
                                       class='form-control '/>
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class=" control-label col-md-4 text-left "></label>
                            <div class="col-md-7">
                            <label class="checkbox ">

                                <input type='checkbox' name='active' value="1" class="minimal-red"
                                       @if( $row['active'] == 1)    checked
                                        @elseif($row['category_id'] == '')
                                            checked
                                        @endif
                                />
                                Hoạt Động
                            </label>
                                </div>
                        </div>
                    </fieldset>
                </div>


                <div style="clear:both"></div>


                <div class="form-group">
                    <label class="col-sm-4 text-right">&nbsp;</label>
                    <div class="col-sm-8">
                        <button type="submit" name="apply" class="btn btn-info btn-sm">
                            <i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
                        <button type="button" onclick="location.href='{{ URL::to('category?return='.$return) }}' " class="btn btn-warning btn-sm ">
                            <i class="icon-cancel-circle2 "></i> {{ Lang::get('core.sb_cancel') }} </button>
                    </div>

                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {


            $("#parent_id").jCombo("{!! url('category/comboselect?id='. $row['category_id']) !!}",
                    {selected_value: '{{ $row["parent_id"] }}'});


            $('.removeMultiFiles').on('click', function () {
                var removeUrl = '{{ url("category/removefiles?file=")}}' + $(this).attr('url');
                $(this).parent().remove();
                $.get(removeUrl, function (response) {
                });
                $(this).parent('div').empty();
                return false;
            });

        });
    </script>
@stop