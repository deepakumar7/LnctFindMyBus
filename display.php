<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- <?php include 'links/links.php' ?> -->
    <!-- <?php include 'css/style.php' ?> -->
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="table-responsive">
                    <table class="table-striped text-center table-bordered text-white">
                        <thead class="bg-dark text-white">
                            <tr>
                                <!-- <th class="py-3 text-white ">id</th> -->
                                <th class="py-3 text-white ">pic is here</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            include 'connection.php';

                            $selectquery = "select *  from upload";
                            $result = mysqli_query($con, $selectquery);

                            //  $data = mysqli_fetch_array($result);
                            
                            while($data = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td> <img src="<?php echo $data['file']; ?>" width="500" height="1500"> </td>
                            </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>