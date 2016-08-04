// javascript for show/hide button in supervisor-document
$(function () {
  $(".select2").select2();
});

jQuery(document).ready(function($) {
    $(".pointer").click(function() {
        window.document.location = $(this).data("href");
    });
});

$(document).ready(function(){
  var checkedArray = [];
  var nameCheckedFolder = [];
  $(":checkbox").change(function(){
    var length = $('[name="checkbox[]"]:checked').length;
    if((this).checked){
      checkedArray.push(this.value);
      nameCheckedFolder.push(this.id);
      if(checkedArray.length == 1) {
        $(".deleteButton").show();
        $(".moveButton").show();
        $(".copyButton").show();
        $(".renameButton").show();
        $(".newButton").hide();
      }
      else if (checkedArray.length > 1){
        $(".deleteButton").show();
        $(".moveButton").show();
        $(".copyButton").show();
        $(".renameButton").hide();
        $(".newButton").hide();
      }
      else {
        $(".newButton").show();
        $(".deleteButton").hide();
        $(".moveButton").hide();
        $(".copyButton").hide();
        $(".renameButton").hide();
      }
    }
    else{
      checkedArray.splice(checkedArray.indexOf(this.value), 1);
      nameCheckedFolder.splice(nameCheckedFolder.indexOf(this.id), 1);
      if(checkedArray.length == 1) {
        $(".deleteButton").show();
        $(".moveButton").show();
        $(".copyButton").show();
        $(".renameButton").show();
        $(".newButton").hide();
      }
      else if (checkedArray.length > 1){
        $(".deleteButton").show();
        $(".moveButton").show();
        $(".copyButton").show();
        $(".renameButton").hide();
        $(".newButton").hide();
      }
      else {
        $(".newButton").show();
        $(".deleteButton").hide();
        $(".moveButton").hide();
        $(".copyButton").hide();
        $(".renameButton").hide();
      }
    }
    updateValue(checkedArray);
  });

  function updateValue(checkedArray){
    document.getElementById('inputDelete').value=checkedArray;
    document.getElementById('inputMove').value=checkedArray;
    document.getElementById('inputCopy').value=checkedArray;
    document.getElementById('inputRename').value=checkedArray;
    document.getElementById('folderrename').value=nameCheckedFolder;
    document.getElementById('oldfoldername').value=nameCheckedFolder;
  }

  // $('input[name="checkbox[]"]').on('change', function () {
  //   //get id folder when checkbox is checked
  //   var checkedArray = [];
  //
  //   if((this).checked){
  //     checkedArray.push(this.value);
  //   }
  //   else{
  //     checkedArray.splice(checkedArray.indexOf(this.value), 1);
  //   }
  //   updatePre();
  //
  //   function updatePre(){
  //     $('pre').html(checkedArray.toString());
  //   }
  //
  //   //show or hide button (new, delete, move, copy, rename)
  //   var length = $('[name="checkbox[]"]:checked').length;
  //   if($('input[name="checkbox[]"]').is(':checked')){
  //     if(length > "1"){
  //       $(".deleteButton").show();
  //       $(".moveButton").show();
  //       $(".copyButton").show();
  //       $(".renameButton").hide();
  //       $(".newButton").hide();
  //     }
  //     else{
  //       $(".deleteButton").show();
  //       $(".moveButton").show();
  //       $(".copyButton").show();
  //       $(".renameButton").show();
  //       $(".newButton").hide();
  //     }
  //   }
  //   else{
  //     $(".newButton").show();  // unchecked
  //     $(".deleteButton").hide();
  //     $(".moveButton").hide();
  //     $(".copyButton").hide();
  //     $(".renameButton").hide();
  //   }
  // })
});

// javascript for upload form
$(document).ready(function(){
    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-09-01a-01')
      {
        $("#FRM-09-01a-01").show();
      }
      else
      {
        $("#FRM-09-01a-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-09-01b-01')
      {
        $("#FRM-09-01b-01").show();
      }
      else
      {
        $("#FRM-09-01b-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-09-02-02')
      {
        $("#FRM-09-02-02").show();
      }
      else
      {
        $("#FRM-09-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-10-01-01')
      {
        $("#FRM-10-01-01").show();
      }
      else
      {
        $("#FRM-10-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-10-02-02')
      {
        $("#FRM-10-02-02").show();
      }
      else
      {
        $("#FRM-10-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-11-01-01')
      {
        $("#FRM-11-01-01").show();
      }
      else
      {
        $("#FRM-11-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-11-02-02')
      {
        $("#FRM-11-02-02").show();
      }
      else
      {
        $("#FRM-11-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-12-01-01')
      {
        $("#FRM-12-01-01").show();
      }
      else
      {
        $("#FRM-12-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-12-02-02')
      {
        $("#FRM-12-02-02").show();
      }
      else
      {
        $("#FRM-12-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-13-01-01')
      {
        $("#FRM-13-01-01").show();
      }
      else
      {
        $("#FRM-13-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-13-02-02')
      {
        $("#FRM-13-02-02").show();
      }
      else
      {
        $("#FRM-13-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-14-01-01')
      {
        $("#FRM-14-01-01").show();
      }
      else
      {
        $("#FRM-14-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-14-02-02')
      {
        $("#FRM-14-02-02").show();
      }
      else
      {
        $("#FRM-14-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-15-01-01')
      {
        $("#FRM-15-01-01").show();
      }
      else
      {
        $("#FRM-15-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-15-02-02')
      {
        $("#FRM-15-02-02").show();
      }
      else
      {
        $("#FRM-15-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-16-01-01')
      {
        $("#FRM-16-01-01").show();
      }
      else
      {
        $("#FRM-16-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-16-02-02')
      {
        $("#FRM-16-02-02").show();
      }
      else
      {
        $("#FRM-16-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-17-01-01')
      {
        $("#FRM-17-01-01").show();
      }
      else
      {
        $("#FRM-17-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == 'FRM-17-02-02')
      {
        $("#FRM-17-02-02").show();
      }
      else
      {
        $("#FRM-17-02-02").hide();
      }
    });

});
