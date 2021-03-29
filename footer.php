<footer class="-bg-footer" id="footer">
        <div class="container-fluid">
            <div class="row footer-align">
                <div class="col-md-4 col-sm-4">
                    <h5>TOSMART</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <p class="footer">
                        est une agence de communication regroupe toutes
                         les compétences en domaine de l'informatique pour 
                         vous offrir la meilleure solution sur le web pour ameloere votre activité
                        </p>
                        <ul class="social-networks">
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-linkedin"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Contact</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <address>
                                
                                <i class="fa fa-phone address"></i> +212 657 84 70 12
                                <br>
                                <i class="fa fa-envelope address"></i> 
                                <a href="mailto:northstreet@gmail.com">contact.tosmart@gmail.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Liens</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <ul>
                            <li><a href="#">about</a></li>
                            <li><a href="#">service</a></li>
                            <li><a href="#">project</a></li> 
                            <li><a href="#">contact</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>

    <div class="footer-copyright">
            <p>&copy 2021 Copyright by  <a href="#">TOSMART</a></p>
    </div>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/file.js"></script>



<script type="text/javascript">

$(document).ready(function() 
{
$("#btnsave").click(function() 
{
var prenom = $('#prenom').val();
var nom = $('#nom').val();
var email = $('#email').val();
var tel = $('#tel').val();
var objet = $('#objet').val();

	if(prenom!="" && nom!="" && email!="" && tel!="" && objet!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php/Main/savedata'); ?>",
		dataType: 'html',
		data: {prenom: prenom, nom: nom, email:email, tel:tel, objet:objet},
		success: function(res) 
        
		{
			if(res==1)
			{
			alert('Votre message a ete envoyer avec sucess, nous repondre en plutot');
           
			}
			else
			{
			alert('Data not saved');	
			}
			
		},
		error:function()
		{
		alert('data not saved');	
		}
		});
	}
	else
	{
	alert("merci de renseiner tout les champs");
	}

});
});
</script>
</body>
</html>