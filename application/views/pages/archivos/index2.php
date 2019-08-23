<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>jQuery Ajax File Uploader Widget</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="<?= base_url() ?>libs/upload/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>libs/upload/styles.css" rel="stylesheet">
</head>

<body>

    <main role="main" class="container">

        <h1>jQuery Ajax File Uploader Widget</h1>
        <p class="lead mb-4">
            A very lightweight Plugin for file uploading using ajax(async) and includes support for queues, progress tracking and drag and drop.
            This page demostrates the default basic setup/config.
        </p>

        <div class="row">
            <div class="col-md-6 col-sm-12">

                <!-- Our markup, the important part here! -->
                <div id="drag-and-drop-zone" class="dm-uploader p-5">
                    <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                    <div class="btn btn-primary btn-block mb-5">
                        <span>Open the file Browser</span>
                        <input type="file" title='Click to add Files' />
                    </div>
                </div><!-- /uploader -->

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                        File List
                    </div>

                    <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                        <li class="text-muted text-center empty">No files uploaded.</li>
                    </ul>
                </div>
            </div>
        </div><!-- /file list -->



        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header">
                        Debug Messages
                    </div>

                    <ul class="list-group list-group-flush" id="debug">
                        <li class="list-group-item text-muted empty">Loading plugin....</li>
                    </ul>
                </div>
            </div>
        </div> <!-- /debug -->

    </main> <!-- /container -->



    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>libs/upload/dist/js/jquery.dm-uploader.min.js"></script>
    <script src="<?= base_url() ?>libs/upload/demo-ui.js"></script>
    <script src="<?= base_url() ?>libs/upload/demo-config.js"></script>

    <!-- File item template -->
    <script type="text/html" id="files-template">
        <li class="media">
            <div class="media-body mb-1">
                <p class="mb-2">
                    <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
                </p>
                <div class="progress mb-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <hr class="mt-1 mb-1" />
            </div>
        </li>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
        <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
    </script>
</body>

</html>