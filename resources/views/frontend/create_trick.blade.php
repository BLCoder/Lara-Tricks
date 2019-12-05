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
                        Creating a new trick
                    </h1>


                    <form method="post" class="form-vertical" id="save-trick-form" role="form">
                        <input type="hidden" name="_token" value="YF606mLanwpNASErcwFdW1F0FyBneffP5hjcNgIK">
                        <div class="form-group">
                            <label for="title">Title</label>

                            <input id="title" class="form-control" name="title" type="text" placeholder="Name this trick">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <textarea id="description" class="form-control" name="description" row="3" placeholder="Give detailed description of the trick"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="code-editor">Trick code:</label>

                            <div id="editor-content" class="content-editor ace_editor ace-github"><textarea class="ace_text-input" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 14px; width: 7px; left: 44px; top: 0px;" wrap="off"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 326px; width: 40px;"><div class="ace_gutter-cell " style="height: 14px;">1</div></div><div class="ace_gutter-active-line" style="top: 0px; height: 14px;"></div></div><div class="ace_scroller" style="left: 40px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 668px; height: 326px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 564px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:14px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:14px"></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 7px; height: 14px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 22px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 14px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 40px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 708px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-size-adjust: inherit; font-kerning: inherit; font-language-override: inherit; font-feature-settings: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>

                            <textarea id="code-editor" name="code" style="display:none"></textarea>
                        </div>

                        <div class="form-group">
                            <p>
                                <select id="tags" class="form-control selectized" multiple="multiple" name="tags[]" placeholder="Tag this trick" tabindex="-1" style="display: none;"></select><div class="selectize-control form-control multi"><div class="selectize-input items not-full has-options"><input type="text" tabindex="" placeholder="Tag this trick" style="width: 83px;"></div><div class="selectize-dropdown form-control multi" style="display: none; width: 710px; top: 34px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                            </p>
                        </div>

                        <div class="form-group">
                            <p>
                                <select id="categories" class="form-control selectized" name="categories[]" multiple="multiple" placeholder="Choose Categories for this trick" tabindex="-1" style="display: none;"></select><div class="selectize-control form-control multi"><div class="selectize-input items not-full has-options"><input type="text" tabindex="" placeholder="Choose Categories for this trick" style="width: 203px;"></div><div class="selectize-dropdown form-control multi" style="display: none; width: 710px; top: 34px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
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
