<?php
require_once "header.php";
?>

<div class="container-fluid w-100 h-100 px-5">
        <div class="row">
            <div class="col-2 mb-4">
                <form action="addimg.php">
                <input type="submit" class="frm-cntl form-control btn-success mt-5 border-dark" value="Add Image">
                <!-- <button type="button" class="frm-cntl form-control mt-5" onclick="loadDoc()">ADD LABOUR</button> -->
                </form>
            </div>
            <div class="col-3"></div>
            <div class="col-3">
                <label class="text-center mt-5 fw-bold fs-4">Galary</label>

            </div>
            <!-- <div class="col-3"></div> -->
            <div class="col-1">
                
            </div>
        </div>
        <table class="table w-100 mt-5">
            <tr class="text-left w-100">
                <th>sr no</th>
                <!-- <th>Volen Name</th> -->
                <!-- <th>Volen Deg</th> -->
                <th>Images</th>
                
                <th>Action</th>
            </tr>
            <form action="#" method="GET">


                <?php

                $sql = "SELECT * FROM `galary`";
                $result = mysqli_query($link, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    for ($i = 1; $i <= $num; $i++) {
                        $row = mysqli_fetch_assoc($result);
                ?>

                        <tr>
                            <td>
                                <?php
                                echo $i;
                                ?>
                            </td>
                            <td><img src="<?php echo $row['g_img']; ?>" width="80px" height="80px" alt=""></td>
                            
                            <td>
                                <!-- <a href="vupdate.php?id=<?php echo $row['v_id']; ?>" class="text-decoration-none fw-bold link-success"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
                                <a href="dltimg.php?id=<?php echo $row['g_id']; ?>" class="fw-bold text-danger ms-3 text-decoration-underline "><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>


        </table>
            </form>
            </div>
            </div>