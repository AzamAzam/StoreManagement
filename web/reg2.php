<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php include 'Navbar.php'; ?>
<div class="container-fluid">
    <br>
    <div class="container">
        <div class="row" style="background-color:white;"><br>
            <h3 style="color:purple;margin-left:10px;"><b> Hotel Registration Form </b></h3>
            <hr/>
            <form method="POST" enctype="multipart/form-data">
                <div class="col-md-3">
                    <label> Product Name:</label><br>
                    <input type="text" id="name" placeholder="Enter Product Name"/> <br> <br>
                    <label> Price </label><br>
                    <input type="number" id="price" placeholder="price"/> <br> <br>

                    <label>
                        Product
                        detail </label><br>
                    <textarea rows="3" col="10" id="detail" placeholder="detail" maxlength="150"/> </textarea>
                    <br><br><br>
                    <label>
                        <input type="file" name="image" id="image"> Upload File <br>
                        <input type="submit" value="Submit"></div>

            </form>
        </div>
    </div>
    <br>
</div>

    