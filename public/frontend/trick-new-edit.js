(function(e){
	e("#tags").selectize({maxItems:5});
	e("#categories").selectize({maxItems:5});
	var t=ace.edit("editor");
	var n=e("#code-editor");
	t.getSession().setValue(n.val());
	n.closest("form").submit(function(){
		n.val(t.getSession().getValue())
	})})
(jQuery)



