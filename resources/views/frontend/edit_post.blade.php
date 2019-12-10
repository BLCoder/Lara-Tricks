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
                            <div id="editor" class="content-editor ace_editor ace-github">
                                <textarea id="editor"  ></textarea>
                            </div>
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


<script src="{{asset('src/ace.js')}}"></script>

<script src="{{asset('src/ext-themelist.js')}}"></script>
<script>

    var $ = document.getElementById.bind(document);
    var dom = require("ace/lib/dom");

    //add command to all new editor instances
    require("ace/commands/default_commands").commands.push({
        name: "Toggle Fullscreen",
        bindKey: "F11",
        exec: function(editor) {
            var fullScreen = dom.toggleCssClass(document.body, "fullScreen")
            dom.setCssClass(editor.container, "fullScreen", fullScreen)
            editor.setAutoScrollEditorIntoView(!fullScreen)
            editor.resize()
        }
    })

    // create first editor
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/dawn");
    editor.session.setMode("ace/mode/javascript");
    editor.renderer.setScrollMargin(10, 10);
    editor.setOptions({
        // "scrollPastEnd": 0.8,
        autoScrollEditorIntoView: true
    });




    var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});

</script>

@endsection
