<?php
require_once "header.php";
?>

<div class="container-fluid w-100 h-100 px-5">
    <div class="row">
        <div class="col-md-2 mb-4">
            <form action="addloc.php">
                <input type="submit" class="frm-cntl form-control btn-success mt-5 border-dark" value="Add Other">
                <!-- <button type="button" class="frm-cntl form-control mt-5" onclick="loadDoc()">ADD LABOUR</button> -->
            </form>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <label class="text-center mt-5 fw-bold fs-4">Where work Details</label>

        </div>
        <!-- <div class="col-3"></div> -->
        <div class="col-1">

        </div>
    </div>
    <table class="table mt-5 w-100">
        <tr class="text-left w-100">
            <th>sr no</th>
            <th>where work</th>
            <th>Action</th>
        </tr>
        <form action="#" method="GET">


            <?php

            $sql = "SELECT * FROM `work`";
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
                        <td>
                            <?php echo $row['work']; ?>
                        </td>
                        <td>
                            <a href="dltwork.php?idw=<?php echo $row['w_id']; ?>"
                                class="fw-bold text-danger ms-3 text-decoration-underline "><i class="fa fa-trash"
                                    aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
    </table>
    <!-- <div class="container-fluid w-100 h-100 px-5"> -->

    <div class="row">
        <div class="col-md-2 mb-4">
            <form action="addloc.php">
                <!-- <input type="submit" class="frm-cntl form-control btn-success mt-5 border-dark" value="Add Other"> -->
                <!-- <button type="button" class="frm-cntl form-control mt-5" onclick="loadDoc()">ADD LABOUR</button> -->
            </form>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <label class="text-center mt-5 fw-bold fs-4">Inovation area Details</label>

        </div>
        <!-- <div class="col-3"></div> -->
        <div class="col-1">

        </div>
    </div>

    <table class="table mt-5 w-100">

        <tr class="text-left w-100">
            <th>sr no</th>
            <th>where work</th>
            <th>Action</th>
        </tr>
        <form action="#" method="GET">


            <?php

            $sql = "SELECT * FROM `area`";
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
                        <td>
                            <?php echo $row['area']; ?>
                        </td>
                        <td>
                            <a href="dltwork.php?ida=<?php echo $row['a_id']; ?>"
                                class="fw-bold text-danger ms-3 text-decoration-underline "><i class="fa fa-trash"
                                    aria-hidden="true"></i>Delete</a>
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