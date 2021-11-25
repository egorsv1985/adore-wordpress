<?php
/*
Template Name: payment
*/
?>
<?php get_header(); ?>
<section class="payment">
<h2 class="payment__subtitle">оПЛАТА</h2>
		<div class="container">
		    <div class="payment__wrapper">
			 
			 <img class="payment__img" src="<?php echo IMG_DIR; ?>/payment/payment-photo.jpg" alt="payment">            
			 <h3 class="payment__title">Цена мероприятия:
			 </h3>
			 <span class="payment__discount">180 BYN</span>
			 <span class="payment__price">120 BYN</span>
			 <button class="btn">Оплатить</button>
			 <ul class="payment__list">
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/apple-pay.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/maestro.svg" alt="maestro"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/belcart.svg" alt="belcart"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/mastercard.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/visa.svg" alt="visa"></li>
			 </ul>
		    </div>   
        </div>    

    </section>


<?php get_footer(); ?>