$(document).ready(

  (function() {

  var bar = $('.bar');
  var percent = $('.percent');
  var status = $('#status');

  $('#form_upload').ajaxForm({
      beforeSend: function() {
          status.empty();
          var percentVal = '0%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
      uploadProgress: function(event, position, total, percentComplete) {
          var percentVal = percentComplete + '%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
      success: function() {
          var percentVal = '100%';
          bar.width(percentVal)
          percent.html(percentVal);
      },
  	complete: function(xhr) {
  		status.html(xhr.responseText);
  	}
  });

  })();

);
