@extends('layouts.masteradmin2')

@section('title', 'اخبار')

@section('news_notify_m')
   @foreach($news as $not)
       @if($not->post=='draft')
       <li class="external">
           <a href="news/show/{{$not->id}}">{{$not->title}}</a>
       </li>
          @endif
    @endforeach
@endsection
@section('news_notify','2')
@section('comment_notify','2')

@section('comment_notify_m')
    <li>
        <a href="#">
            <span class="photo">
                <img alt="avatar" src="{{asset('admin_tm/img/avatar-mini.jpg')}}"></span>
            <span class="subject">
                <span class="from">سجاد باقرزاده</span>
                <span class="time">همین حالا</span>
            </span>
            <span class="message">سلام،متن پیام نمایشی جهت تست
                                    </span>
        </a>
    </li>
@endsection
@section('user_m')
    <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img alt="" src="{{asset('admin_tm/img/avatar1_small.jpg')}}">
            <span class="username">{{ Auth::user()->name }}</span>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
            <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
            <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
            <li>                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="icon-key"></i> {{ __('خروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form></li>
        </ul>
    </li>
@endsection
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                @if (session('status'))
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        {{ session('status') }}
                    </div>
                @endif
                <div class="vue-wrapper">
                <header class="panel-heading">
                    لیست خبرهای شما

                </header>

                <table class="table table-striped border-top" id="sample_1">
                    <thead>
                    <tr>
                        <th style="width: 8px;">
                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                        <th>عنوان خبر</th>
                        <th class="hidden-phone">دسته</th>
                        <th class="hidden-phone">تعداد نمایش</th>
                        <th class="hidden-phone">تاریخ انتشار</th>
                        <th class="hidden-phone">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in items">
                        <td>@ {{ item.id }}</td>
                        <td>@ {{ item.name }}</td>
                    </tr>
                    @foreach($news as $ns )
                    <tr class="odd gradeX">
                        <td>
                         <input type="checkbox" class="checkboxes" value="1" /></td>
                        <td>{{$ns->title}}</td>
                        <td class="hidden-phone"></td>
                        <td class="hidden-phone">{{$ns->views}}</td>
                        <td class="center hidden-phone">{{$ns->created_at}}</td>
                        @if($ns->post=='post')
                                <td class="hidden-phone"><span class="label label-success">منتشر شده</span></td>
                            @else
                               <td class="hidden-phone"><span class="label label-warning">منتشر نشده</span></td>
                            @endif
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </section>
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">افزودن عکس به خبر</h4>
                        </div>
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="file-loading">
                                    <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!--فرم ورود -  -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    افزودن خبر جدید

                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">عنوان خبر</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="name" name="name" type="text" v-model="ٔnews.name" required>

                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">چکیده خبر</label>
                                <div class="col-lg-10">
                                    <textarea name="" id="" class="form-control" cols="30" rows="10" v-model="ٔnews.abstr" required></textarea>                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">متن خبر</label>
                                <div class="col-lg-10">
                                    <textarea name="" id="" class="form-control" cols="30" rows="10" v-model="ٔnews.body" required></textarea>                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="agree" class="control-label col-lg-2 col-sm-3">وضعیت خبر</label>
                                <div class="col-lg-10 col-sm-9">
                                    <label for="agree" class="control-label col-lg-2 col-sm-3">منتشر شود</label>
                                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" v-model="ٔnews.stet" required >
                                </div>
                                <div class="form-group ">
                                    <label for="agree" class="control-label col-lg-2 col-sm-3">عکس خبر</label>
                                    <div class="col-lg-10 col-sm-9">
                                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">افزودن عکس
                                        </a>
                                    </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-danger" type="submit" @ click.prevent="createItem()">Save</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end form-->
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('admin_tm/assets/data-tables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin_tm/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{asset('admin_tm/js/common-scripts.js')}}"></script>
    <script src="{{asset('admin_tm/js/dynamic-table.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#file-1").fileinput({
            browseLabel: 'انتخاب',
            uploadUrl: "/image-view/{{$ns->id}}",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,

        });
    </script>
    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
@endsection