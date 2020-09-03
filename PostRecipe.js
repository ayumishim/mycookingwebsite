$(function() {

	// add the first ingredient field
	addIngredientField();

	$(".add_ingredient").click(function(){
		// add a new field when user clicks the button
		addIngredientField()
	});


	function addIngredientField() {
		// clone the field template and append it to ingredient fields div
		var fieldCopy = $("#field_template > .ingredient_field").clone();
		$(".ingredient_fields").append(fieldCopy);
	}

	var stepCount = 1;	// keep track of which step we are on
	addStepField();		// add the first step field

	$(".add_step").click(function(){
		// add a new field when user clicks the button
		addStepField()
	});


	function addStepField() {
		// clone the field template and append it to step fields div
		var fieldCopy = $("#field_template > .step_field").clone();
		$(".step_fields").append("Step " + stepCount + "<br>").append(fieldCopy);
		stepCount++;
	}
});

