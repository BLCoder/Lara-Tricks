(function(e){e("#tags").selectize({maxItems:5});e("#categories").selectize({maxItems:5});var t=ace.edit("editor-content");var n=e("#code-editor");t.setTheme("ace/theme/github");t.getSession().setMode("ace/mode/php");t.getSession().setValue(n.val());n.closest("form").submit(function(){n.val(t.getSession().getValue())})})(jQuery)
