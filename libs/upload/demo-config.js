$(function () {
  /*
   * For the sake keeping the code clean and the examples simple this file
   * contains only the plugin configuration & callbacks.
   * 
   * UI functions ui_* can be located in: demo-ui.js
   */
  $('#drag-and-drop-zone').dmUploader({ //
    url: 'http://localhost/gestor/archivo/fileUpload/' + document.getElementById('subcategoria').value + '/' + document.getElementById('categoria').value + '/' + document.getElementById('sub').value,
    maxFileSize: 3000000, // 3 Megs 
    extFilter: ["pdf", "docx", "doc", "ppt", "txt", "pptx"],
    onDragEnter: function () {
      // Happens when dragging something over the DnD area
      this.addClass('active');
    },
    onDragLeave: function () {
      // Happens when dragging something OUT of the DnD area
      this.removeClass('active');
    },
    onInit: function () {
      // Plugin is ready to use
      ui_add_log('Penguin initialized :)', 'info');
    },
    onComplete: function () {
      // All files in the queue are processed (success or error)
      ui_add_log('All pending tranfers finished');
    },
    onNewFile: function (id, file) {
      // When a new file is added using the file selector or the DnD area
      ui_add_log('New file added #' + id);
      ui_multi_add_file(id, file);
    },
    onBeforeUpload: function (id) {
      // about tho start uploading a file
      ui_add_log('Starting the upload of #' + id);
      ui_multi_update_file_status(id, 'uploading', 'Uploading...');
      ui_multi_update_file_progress(id, 0, '', true);
    },
    onUploadCanceled: function (id) {
      // Happens when a file is directly canceled by the user.
      ui_multi_update_file_status(id, 'warning', 'Canceled by User');
      ui_multi_update_file_progress(id, 0, 'warning', false);
    },
    onUploadProgress: function (id, percent) {
      // Updating file progress
      ui_multi_update_file_progress(id, percent);
    },
    onUploadSuccess: function (id, data) {
      // A file was successfully uploaded
      Toast.fire({
        type: 'success',
        title: 'Archivo agregado con éxito.',
        background: '#FFFF',
        padding: '10%'
      })
      subir(document.getElementById('categoria').value, document.getElementById('sub').value);
      ui_add_log('Server Response for file #' + id + ': ' + JSON.stringify(data));
      ui_add_log('Upload of file #' + id + ' COMPLETED', 'success');
      ui_multi_update_file_status(id, 'success', 'Upload Complete');
      ui_multi_update_file_progress(id, 100, 'success', false);
    },
    onUploadError: function (id, xhr, status, message) {
      Toast.fire({
        type: 'error',
        title: 'Error al subir archivo',
        background: '#FFFF',
        padding: '10%'
      })
      ui_multi_update_file_status(id, 'danger', message);
      ui_multi_update_file_progress(id, 0, 'danger', false);
    },
    onFallbackMode: function () {
      // When the browser doesn't support this plugin :(
      ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
    },
    onFileSizeError: function (file) {
      Toast.fire({
        type: 'error',
        title: 'Error al subir archivo tamaño exede al soportado',
        background: '#FFFF',
        padding: '10%'
      })
      ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
    }
  });
});