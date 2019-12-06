@extends('layouts.app')

@section('heading_title')
    Browsing Most Recent Laravel Tricks
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-12 col-xs-12">
                <div class="content-box">
                    <h1 class="page-title">
                        Update Trick
                        <a href="{{url('tricks/'.$post->slug)}}" style="color: #ffaa30;font-size: 24px;float: right;font-weight: bold;">Go To Post</a>
                    </h1>


                    <form method="post" action="{{url('user/tricks/update/'.$post->id)}}" class="form-vertical" >
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>

                            <input id="title" class="form-control" name="title" type="text" value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <textarea id="description" class="form-control" name="body" row="3" >{{$post->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="code-editor">Trick code:</label>

                            <div id="editor-content" class="content-editor ace_editor ace-github"><textarea class="ace_text-input" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 14px; width: 7px; left: 44px; top: 0px;" wrap="off"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 326px; width: 40px;"><div class="ace_gutter-cell " style="height: 14px;">1</div></div><div class="ace_gutter-active-line" style="top: 0px; height: 14px;"></div></div><div class="ace_scroller" style="left: 40px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 668px; height: 326px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 564px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:14px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:14px"></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 7px; height: 14px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 22px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 14px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 40px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 708px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-size-adjust: inherit; font-kerning: inherit; font-language-override: inherit; font-feature-settings: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>

                            <textarea id="code-editor" name="codes"  style="display:none" >{{$post->codes}}</textarea>
                        </div>



                        <div class="form-group">
                            <p>
                                <select id="tags" class="form-control" multiple="multiple" name="tags[]" placeholder="Tag this trick">


                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}" {{($post->tags->find($tag->id)) ? "selected" : ''}}>
                                            {{$tag->name}}

                                        </option>
                                    @endforeach

                                </select>
                            </p>
                        </div>

                        <div class="form-group">
                            <p>
                                <select id="categories" class="form-control" name="categories[]" multiple="multiple" placeholder="Choose Categories for this trick">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{($post->categories->find($category->id)) ? "selected" : ''}}>
                                            {{$category->name}}

                                        </option>
                                    @endforeach
                                </select>
                            </p>
                        </div>



                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" id="save-section" class="btn btn-primary ladda-button" data-style="expand-right">
                                    Save Trick
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
