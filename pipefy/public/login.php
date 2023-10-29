<?php

include "../template/bootstrap.php";
include "../database/settings.php";
include "../template/vue.php";
include "../template/styles.php";

?>

<div class="card-login">
    <div class="container">
        <div class="card" style="width: 340px;">
            <div class="card-body">
                <h2>System</h2>
                <br>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
       
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-size: 20px;">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" >
                    </div>
                   
                    <br>

                    <a href="../public/dashboard.php">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>


