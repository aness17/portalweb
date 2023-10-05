<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to JAMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <form id="form">
                <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block text-center">
                    <h1>Please use your mobile phone!</h1>
                </div>
                <div class="col-sm-12 d-md-none d-lg-none d-xl-none text-center">
                    <h1>Welcome to JAMS!</h1>
                    <div id="my_camera"></div>
                </div>
                <div class="col-sm-12 d-md-none d-lg-none d-xl-none text-center">
                    <label>TRI AGNESTI</label>
                    <br />
                    <label>M1424</label>
                    <input type="hidden" id="pin" name="pin" placeholder="employee number" />
                    <input type="hidden" id="lat" name="lat" value="" />
                    <input type="hidden" id="long" name="long" value="" />
                    <input type="submit" id="simpan" value="Save" class="btn btn-block btn-lg btn-success" />
                    <a href="https://recruitment.ptjas.co.id/jams/index.php/absen/view" class="btn btn-block btn-lg btn-info">View</a>
                </div>
            </form>
        </div>
    </div>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- webcamjs  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script language="JavaScript">
        // menampilkan kamera dengan menentukan ukuran, format dan kualitas 
        Webcam.set({
            width: 415,
            height: 415,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        //menampilkan webcam di dalam file html dengan id my_camera
        Webcam.attach('#my_camera');
    </script>
    <script type="text/javascript">
        // saat dokumen selesai dibuat jalankan fungsi update
        $(document).ready(function() {
            //update();
            getLocation();
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            let lng = position.coords.longitude;
            let lat = position.coords.latitude;
            document.getElementById("lat").value = lat;
            document.getElementById("long").value = lng;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    $("#simpan").hide();
                    alert("User denied the request for Geolocation.Please refresh and allow the geolocation permission");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        // jalankan aksi saat tombol register disubmit
        $("#simpan").click(function() {
            event.preventDefault();
            let image = '';
            let pin = $('#pin').val();
            let lng = $('#long').val();
            let lat = $('#lat').val();

            //memasukkan data gambar ke dalam variabel image
            Webcam.snap(function(data_uri) {
                image = data_uri;
            });
            if (image == "") {
                $("#form").html("Error: No Picture. Refresh the page!");
                return;
            }
            if (lng == "" || lat == "") {
                $("#form").html("Error: No Location. Refresh the page!");
                return;
            }

            //mengirimkan data ke file action.php dengan teknik ajax
            $.ajax({
                url: 'https://recruitment.ptjas.co.id/jams/index.php/absen/insert_p',
                type: 'POST',
                data: {
                    pin: pin,
                    lng: lng,
                    lat: lat,
                    image: image
                },
                success: function(r) {
                    console.log(r);
                    $("#form").html("Success.<br /><a class='btn btn-lg btn-info' href='https://recruitment.ptjas.co.id/jams/index.php/absen/view'>View</a>");
                }
            })
        });
    </script>

</body>

</html>