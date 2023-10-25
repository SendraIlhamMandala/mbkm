<!DOCTYPE html>
<html>

<head>
    <title>Ajax File Upload with Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <form id="myForm" action="/testpost" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" id="name" name="name" placeholder="Your name">
        <input type="file" name="file">
        <input type="submit" value="Submit">
    </form>
    <div class="relative pt-1">
        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
            <div id="progress" style="width:0%"
                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                <span id="percentage"></span>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = ((evt.loaded / evt.total) * 100);
                                $('#progress').width(percentComplete + '%');
                                $('#percentage').text(Math.round(percentComplete) +
                                '%');
                            }
                        }, false);
                        return xhr;
                    },
                    type: 'POST',
                    url: '/testpost',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        window.location.href = '/selesai';
                    },
                    error: function(data) {
                        window.alert("error");
                        console.log("error");
                        console.log(data);
                    }
                });
            });
        });
    </script>
</body>

</html>
