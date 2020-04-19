/* Thamer Start */
checkSelection();
function checkSelection() {
  var sel = document.getElementById("category").selectedIndex;
  // This is for testing and will be deleted later
  // document.getElementById("test").innerHTML = "You've selected " + sel;
  var wrap=document.getElementById("wrapper");
  var wrapR=document.getElementById("wrapperR");
  var carInfo ='<label for="brand">Brand:</label><input name="brand" id="brand" type="text" class="field">\
  <label for="model">Model Year:</label><input name="model" id="model" type="number" class="field">';
  var carInfoR ='<label for="odo">Odo:</label>\
  <div class="km">\
  <input name="odo" type="number" id="odo" class="field"/>\
  </div>\
  <label for="condition">Condition:</label><select id="cond" name="cond" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="Used">Used</option><option value="New">New</option></select>';
  var cloInfo ='<label for="size" >Size:</label><select id="size" name"size" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="Small">Small</option><option value="Medium">Medium</option><option value="Large">Large</option></select>';
  var cloInfoR ='<label for="brand">Brand:</label><input name="brand" id="brand" type="text" class="field">';
  var bokInfo ='<label for="author">Author:</label><input name="author" id="author" type="text" class="field">\
  <label for="pages">Number of Pages:</label><input name="pages" id="pages" type="number" class="field">';
  var bokInfoR='<label for="isbn">ISBN:</label><input name="isbn" id="isbn" type="text" class="field">\
  <label for="condition">Condition:</label><select id="bCond" name="bCond" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="Very Good">Very Good</option><option value="Good">Good</option><option value="Fair">Fair</option><option value="Poor">Poor</option></select>';
  var movInfo='<label for="Genre">Genre:</label><select id="genre" name="genre" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="action">Action</option><option value="Comedy">Comedy</option><option value="Drama">Drama</option><option value="Horror">Horror</option>\
  <option value="romance">Romance</option></select>';
  var movInfoR='<label for="year">Release Year:</label><input name="year" id="year" type="number" class="field">';
  var gamInfo='<label for="Genre">Genre:</label><select id="genre" name="genre" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="Fighting">Fighting</option><option value="Role-playing">Role-playing</option><option value="Shooter">Shooter</option>\
  <option value="sport">Sport</option><option value="Strategy">Strategy</option></select>';
  var gamInfoR='<label for="platform">Platform:</label><select id="platform" name="platform" class= "wideSelect">\
  <option value="" selected disabled hidden>Choose here</option><option value="Nintendo Switch">Nintendo Switch</option><option value="PC">PC</option><option value="Playstation">Playstation</option>\
  <option value="Xbox">Xbox</option></select>'
  switch(sel){
      case 0:
          wrap.innerHTML=bokInfo;
          wrapR.innerHTML=bokInfoR;
          break;
      case 1:
          wrap.innerHTML=carInfo; 
          wrapR.innerHTML=carInfoR;
          break;
      case 2:
          wrapR.innerHTML=cloInfo;
          wrap.innerHTML=cloInfoR;
          break;
      case 3:
        wrap.innerHTML="";
        wrapR.innerHTML="";
      break;
      case 4:
        wrap.innerHTML=gamInfo;
        wrapR.innerHTML=gamInfoR;
      break;
      case 5:
        wrap.innerHTML=movInfo;
        wrapR.innerHTML=movInfoR;
      break;
      case 6:
      wrap.innerHTML="";
      wrapR.innerHTML="";
    break;
  }
}

function priceEmpty(){
  var p = document.getElementById("currency-field");
  if (p.value==0 ||p.value=="")
  p.classList.add("redBorder");
}
function nameEmpty(){
  var p = document.getElementById("name");
  if (p.value=="")
  p.classList.add("redBorder");
}

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      // input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
$(function() {
  // Multiple images preview in browser
  var imagesPreview = function(input, placeToInsertImagePreview) {

      if (input.files) {
          var filesAmount = input.files.length;

          for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();

              reader.onload = function(event) {
                  $($.parseHTML('<img>')).attr({'src': event.target.result, 'width':'200px' }).appendTo(placeToInsertImagePreview);
              }

              reader.readAsDataURL(input.files[i]);
          }
      }

  };

  $('#gallery-photo-add').on('change', function() {
      imagesPreview(this, 'div.gallery');
  });
});

/* Thamer End */
