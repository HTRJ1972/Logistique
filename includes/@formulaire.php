<!-- ============================== -->
<style>
    .modal {
        display: none;
    
    }

    .modal-back {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, .5, .75)
    }

    .modal-container {
        width: 25%;
        position: fixed;
        top: 50%;
        left: 50%;
        padding: 25px;
        background: white;
        transform: translate(-50%, -50%)
    }
    @media screen and (min-width :773px){
        .modal-container { width: 30%;
        }
    }
    @media screen and (max-width :773px){
        .modal-container { width: 80%;
        }
    }
    .div_img{
        height: 20vh;
    }
    .img{
         height: 100%;
    }

</style>

<!-- ==================================== -->

<!-- /////////////////////// -->
<div class="modal" id="modal" >
    <div class="modal-back"></div>
    <div class="modal-container" style="border-radius: 2%;">
        <!-- <form action="processings/commentaire.php" method="post" id="form"> -->
        <form method="post" <?php if($_SESSION["paiement_tunnel"]==0): echo "action='processings/service.php'"; else: echo "id='service'"; endif ?>   > <!-- envoi les infos par js dans la fichier js.js -->
            <!-- <fieldset disabled> -->
           
            <div class="form-group">
                <label for="disabledSelect">Votre téléphone</label>
                <input type="number" id="tel" name="tel" class="form-control" required
                    placeholder="Entrez votre Numero de téléphone">
            </div>
                <div class="form-group">
                    <label for="disabledSelect">Email</label>
                    <input  type="email" name="email" class="form-control" required placeholder="Entrez votre email">
                </div>
            <div class="form-group mt-2 text-center" style="display:flex">
                <div class=" col-lg-6">
                    <button type="submit" name="submit_" style="background-color:<?= $couleur_entreprise1?>" class="btn text-white sc-primary-btn contact_service " id="<?= $lienbouton ?>" > Contactez Nous !</a></button>  
                </div>

                <?php /*<div class=" col-lg-6"> 
                    <button type="reset" id="revenir" style="background-color:<?= $couleur_entreprise2?>" class="btn text-white">Revenir</button>  
                </div> */?>
            </div>
            <?php /*<!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                    </div> --> */?>
            <!-- </fieldset> -->
        </form><br />
    </div>
</div>
<!-- /////////////////////// -->