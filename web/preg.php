<?php
include 'Navbar.php';
?>
<div class="container-fluid">
    <br>


    <div class="container">
        <div class="row" style="background-color:white;"><br>
            <h3 style="color:purple;margin-left:10px;"><b>Hotel Registration Form</b></h3>
            <hr/>


            <div class="col-md-3">

                <label>
                    Product Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter Product Name"><br><br>
                <label>
                    Price</label><br>
                <input type="number" id="price" name="price"><br><br>

                <label>
                    Product detail</label><br>
                <textarea rows="3" col="10" id="detail" name="detail" maxlength="150"></textarea><br><br><br>
                <label>
                    <input type="file" name="image" id="image">Upload File
                    <br>
                    <img src="" id="img" style="width:50px; height:50px">
                    <input type="button" value="Submit" onClick="PostProduct()">
            </div>

        </div>

    </div>
    <table id="res" border=1>

    </table>
</div>


</div>
</div>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var students = Array();

    function getAllproducts() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "showproduct.php", true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                products = JSON.parse(this.responseText);
                show(products);
            }
        };
    }

    function show(record) {
        var table = "";
        for (var i = 0; i < record.length; i++) {
            table += "<tr id=" + record[i].id + ">";
            table += "<td class='data'>" + record[i].id + "</td>";
            table += "<td class='data'>" + record[i].p_name + "</td>";
            table += "<td class='data'>" + record[i].p_price + "</td>";
            table += "<td class='data'>" + record[i].p_detail + "</td>";
            table += "<td class='data'>" + record[i].p_image + "</td>";
            table += "</tr>";
        }
        document.getElementById('res').innerHTML = table;
    }


    function getFormData() {
        var data = {
            p_name: document.getElementById("name").value,
            p_price: document.getElementById("price").value,
            p_detail: document.getElementById("detail").value,
            p_image: document.getElementById("image").value,

        };
        return data;
        console.log(data);

    }

    function handlePostRequest() {
        var data = getFormData();
        if (data.p_name && data.p_price && data.p_detail && data.p_image) {
            // PostProduct(data);
            //getAllStudents();
            console.log(data);
        }
        else {

        }
    }


    $('#image').on('change', function () {
        if (this.files && this.files[0]) {

            var imageName = this.files[0].name;
            var imageType = this.files[0].type.split("/");

            imageName = imageName.substring(0, imageName.lastIndexOf('.'));

            if (this.files[0].type.match(/^image\//)) {
                var reader = new FileReader();
                reader.onload = function (evt) {
                    var img = new Image();
                    img.onload = function () {
                    };
                    img.src = evt.target.result;
                    $('#img').attr('src', img.src);
                };
                reader.readAsDataURL(this.files[0]);
            }
            else {
                alert("Invalid file type! Please select an image file.");
            }
        }
        else {
            // alert('No file(s) selected.');
        }
    });

    function PostProduct() {
        $.ajax({
            url: "insertproduct.php",
            // send the base64 post parameter
            data: {
                p_name: document.getElementById("name").value,
                p_price: document.getElementById("price").value,
                p_detail: document.getElementById("detail").value,
                base64: $('#img').attr('src')
            },
            // important POST method s!
            type: "post",

            complete: function (data) {
                console.log(data);
                // window.location.href = "https://bitso.com";
            }
        });
        return false;
    }
</script>
</body>
</html>

