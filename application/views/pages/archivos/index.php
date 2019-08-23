<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Archivos</title>
    <!-- Dropzone CSS & JS -->
    <link href='<?= base_url() ?>libs/dropzone/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='<?= base_url() ?>libs/dropzone/dropzone.js' type='text/javascript'></script>

    <!-- Dropzone CDN -->
<!--     
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script> -->
   
    <style>
        .content {
            width: 50%;
            padding: 5px;
            margin: 0 auto;
        }

        .content span {
            width: 250px;
        }

        .dz-message {
            text-align: center;
            font-size: 28px;
        }
    </style>
    <script>
        // Add restrictions
        Dropzone.options.fileupload = {
            acceptedFiles: 'application/pdf',
            maxFilesize: 10 // MB
        };
    </script>
</head>

<body>

    <div class='content'>
        <!-- Dropzone -->
        <form action="<?= base_url('archivo/fileupload') ?>" class="dropzone" id='fileupload'>
        
        </form>
    </div>
   
</body>

</html>