<?php
    session_start();
    include 'connexion.php';
    
    if(isset($_SESSION)){
        var_dump($_SESSION);
    } else {
        echo 'nope';
    }
    ?>
    <form class="form-inline" role="form" method="POST" action="test/login.php"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 form-field">
                                    
                                    <div class="form-group">
                                        <label for="nickname" style="display: none;">Pseudo</label>
                                        <input name="nickname" type="text" class="form-control input-lg"
                                               id="nickname"
                                               placeholder="Ton pseudo"></div>
                                    <div class="form-group">
                                        <label for="password" style="display: none;">Mot de passe</label>
                                        <input name="password" type="password" class="form-control input-lg"
                                               id="password"
                                               placeholder="Ton mot de passe">
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" class="btn btn-lg btn-default" id="sign-in-submit"
                                   value="Se connecter">
                        </form>