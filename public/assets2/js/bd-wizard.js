//Wizard Init

$("#wizard").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="number">#index#</span>'
});

$('.purpose-radio-input[name="type"]').on('change', function(e) {
  var houseType = $(this).val();
  $('#house-type').val(houseType);
});
  

$('.purpose-radio-input[name="checkboxes[]"]').on('change', function(e) {
  var selectedValues = [];
  $('.purpose-radio-input[name="checkboxes[]"]:checked').each(function() {
    selectedValues.push($(this).val());
  });
  $('#description-house').val(selectedValues.join(', '));
});

$('.purpose-radio-input[name="checkboxes2[]"]').on('change', function(e) {
    var selectedValues = [];
    $('.purpose-radio-input[name="checkboxes2[]"]:checked').each(function() {
      selectedValues.push($(this).val());
    });
    $('#services-house').val(selectedValues.join(', '));
  });

  $('.purpose-radio-input[name="checkboxes3[]"]').on('change', function(e) {
    var selectedValues = [];
    $('.purpose-radio-input[name="checkboxes3[]"]:checked').each(function() {
      selectedValues.push($(this).val());
    });
    $('#extra-house').val(selectedValues.join(', '));
  });


$('#number_bed').on('change', function(e) {
    $('#enteredbed').val(e.target.value || 'Cha');
});

$('#number_bathroom').on('change', function(e) {
    $('#enteredbathroom').val(e.target.value || 'Ji-Hun C');
});

$('#number_room').on('change', function(e) {
    $('#enteredroom').val(e.target.value || '+230-582-6609');
});

$('#number_pepole').on('change', function(e) {
    $('#enteredpepole').val(e.target.value || 'willms_abby@gmail.com');
});


$('#image').on('change', function(e) {
  var file = e.target.files[0];
  var reader = new FileReader();

  reader.onload = function(e) {
    var imageUrl = e.target.result;
    $('#enteredimage').attr('src', imageUrl);
  };

  reader.readAsDataURL(file);
});
$('#house_name').on('change', function(e) {
  $('#enteredname').val(e.target.value || 'Ji-Hun C');
});

$('#location').on('change', function(e) {
  $('#enteredlocation').val(e.target.value || '+230-582-6609');
});

$('#about').on('change', function(e) {
  $('#enteredabout').val(e.target.value || 'willms_abby@gmail.com');
});

// Find the button element by its id and add a click event listener



