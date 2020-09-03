$(function() {


	addIngredientField();

	$(".add_ingredient").click(function(){
		addIngredientField()
	});


	function addIngredientField() {
		var fieldCopy = $("#field_template > .ingredient_field").clone();
		$(".ingredient_fields").append(fieldCopy);
	}

	var StepCount = 1;
	addStepField();

	$(".add_step").click(function(){
		addStepField()
	});


	function addStepField() {
		var fieldCopy = $("#field_template > .step_field").clone();
		$(".step_fields").append("Step " + StepCount + "<br>").append(fieldCopy);
		StepCount++;
	}
});

