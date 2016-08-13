// javascript for show/hide button in supervisor-document
// $(function () {
//       $("#example1").DataTable();
//       $('#example2').DataTable({
//         "paging": true,
//         "lengthChange": false,
//         "searching": false,
//         "ordering": true,
//         "info": true,
//         "autoWidth": false
//       });
// });

$(function () {
  $(".select2").select2();
});

jQuery(function ($) {
            $(document).ready(function () {
                $('#form_id').fileTree({
              root: '/Bitnami/xampp/htdocs/PMS/storage/',
              script: 'assets/plugins/filetree/connectors/jqueryFileTree.php',
              expandSpeed: 1000,
              collapseSpeed: 1000,
              multiFolder: false
            }, function(file) {
                window.location = file;
            });
            });
    });

$(document).ready(function(){
  var checkedArray = [];
  var nameCheckedDocument = [];
  $(":checkbox").change(function(){
    var length = $('[name="checkbox[]"]:checked').length;
    if((this).checked){
      checkedArray.push(this.value);
      nameCheckedDocument.push(this.id);
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
      nameCheckedDocument.splice(nameCheckedDocument.indexOf(this.id), 1);
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
    document.getElementById('documentrename').value=nameCheckedDocument;
    document.getElementById('olddocumentname').value=nameCheckedDocument;
    document.getElementById('olddocumentname1').value=nameCheckedDocument;
  }

//   $("tr").on("click",function(event) {
//     var target = $(event.target);
//     if (target.is('input:checkbox')) return;
//
//     var checkedArray = [];
//     var nameCheckedFolder = [];
//
//     var checkbox = $(this).find("input[type='checkbox']");
//
//     if( !checkbox.prop("checked") ){
//         checkbox.prop("checked",true);
//         checkedArray.push(this.value);
//         nameCheckedFolder.push(this.id);
//         if(checkedArray.length == 1) {
//           $(".deleteButton").show();
//           $(".moveButton").show();
//           $(".copyButton").show();
//           $(".renameButton").show();
//           $(".newButton").hide();
//         }
//         else if (checkedArray.length > 1){
//           $(".deleteButton").show();
//           $(".moveButton").show();
//           $(".copyButton").show();
//           $(".renameButton").hide();
//           $(".newButton").hide();
//         }
//         else {
//           $(".newButton").show();
//           $(".deleteButton").hide();
//           $(".moveButton").hide();
//           $(".copyButton").hide();
//           $(".renameButton").hide();
//         }
//     }
//     else {
//         checkbox.prop("checked",false);
//         checkedArray.splice(checkedArray.indexOf(this.value), 1);
//         nameCheckedFolder.splice(nameCheckedFolder.indexOf(this.id), 1);
//         if(checkedArray.length == 1) {
//           $(".deleteButton").show();
//           $(".moveButton").show();
//           $(".copyButton").show();
//           $(".renameButton").show();
//           $(".newButton").hide();
//         }
//         else if (checkedArray.length > 1){
//           $(".deleteButton").show();
//           $(".moveButton").show();
//           $(".copyButton").show();
//           $(".renameButton").hide();
//           $(".newButton").hide();
//         }
//         else {
//           $(".newButton").show();
//           $(".deleteButton").hide();
//           $(".moveButton").hide();
//           $(".copyButton").hide();
//           $(".renameButton").hide();
//         }
//     }
// });


});

// javascript for upload form
$(document).ready(function(){

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-09-01a-01 - Permohonan Surat Keterangan")
      {
        $("#FRM-09-01a-01").show();
      }
      else
      {
        $("#FRM-09-01a-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-09-01b-01 - Surat Keterangan Aktif Kuliah Untuk Tunjangan Anak")
      {
        $("#FRM-09-01b-01").show();
      }
      else
      {
        $("#FRM-09-01b-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-09-02-02 - Verifikasi Dokumen Surat Keterangan")
      {
        $("#FRM-09-02-02").show();
      }
      else
      {
        $("#FRM-09-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-10-01-01 - Formulir Mahasiswa Yang Mengajukan Cuti Akademik")
      {
        $("#FRM-10-01-01").show();
      }
      else
      {
        $("#FRM-10-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-10-02-02 - Verifikasi Dokumen Surat Cuti Akademik")
      {
        $("#FRM-10-02-02").show();
      }
      else
      {
        $("#FRM-10-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-11-01-01 - Formulir Mahasiswa Yang Mengajukan Aktif Kembali")
      {
        $("#FRM-11-01-01").show();
      }
      else
      {
        $("#FRM-11-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-11-02-02 - Verifikasi Dokumen Surat Aktif Kembali")
      {
        $("#FRM-11-02-02").show();
      }
      else
      {
        $("#FRM-11-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-12-01-01 - Formulir Data Mahasiswa Yang Mengajukan Undur Diri")
      {
        $("#FRM-12-01-01").show();
      }
      else
      {
        $("#FRM-12-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-12-02-02 - Verifikasi Dokumen Surat Undur Diri")
      {
        $("#FRM-12-02-02").show();
      }
      else
      {
        $("#FRM-12-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-13-01-01 - Formulir Data Mahasiswa Yang Mengajukan Sidang Komisi Pascasarjana")
      {
        $("#FRM-13-01-01").show();
      }
      else
      {
        $("#FRM-13-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-13-02-02 - Verifikasi Dokumen Surat Sidang Komisi Pascasarjana")
      {
        $("#FRM-13-02-02").show();
      }
      else
      {
        $("#FRM-13-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-14-01-01 - Formulir Data Mahasiswa Yang Mengajukan Perpanjangan Studi")
      {
        $("#FRM-14-01-01").show();
      }
      else
      {
        $("#FRM-14-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-14-02-02 - Verifikasi Dokumen Surat Perpanjangan Studi")
      {
        $("#FRM-14-02-02").show();
      }
      else
      {
        $("#FRM-14-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-15-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Keterangan Lulus")
      {
        $("#FRM-15-01-01").show();
      }
      else
      {
        $("#FRM-15-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-15-02-02 - Verifikasi Dokumen Surat Keterangan Lulus")
      {
        $("#FRM-15-02-02").show();
      }
      else
      {
        $("#FRM-15-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-16-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Percepatan Ijazah")
      {
        $("#FRM-16-01-01").show();
      }
      else
      {
        $("#FRM-16-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-16-02-02 - Verifikasi Dokumen Surat Percepatan Ijazah")
      {
        $("#FRM-16-02-02").show();
      }
      else
      {
        $("#FRM-16-02-02").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-17-01-01 - Formulir Data Mahasiswa Yang Mengajukan Legalisir")
      {
        $("#FRM-17-01-01").show();
      }
      else
      {
        $("#FRM-17-01-01").hide();
      }
    });

    $('#kategori-form').on('change', function() {
      if ( this.value == "FRM-17-02-02 - Verifikasi Dokumen Legalisir")
      {
        $("#FRM-17-02-02").show();
      }
      else
      {
        $("#FRM-17-02-02").hide();
      }
    });

});

